<?php

namespace App\Http\Controllers;

use App\Models\First;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function homepage(){
        return view('home');
    }
    public function new()
    {
        return view('newuser');
    }
    public function saveuser(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'id' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:Firsts,email',
            'password' => 'required|Integer|min:8',
        ]);

        // Logic to save the data
        // For demonstration, we'll just return a success message
        // If you want to save data to the database, you can do it here
        // For example:
         $sample = new First();
         $sample->id = $validatedData['id'];
         $sample->name = $validatedData['name'];
         $sample->email = $validatedData['email'];
         $sample->password = $validatedData['password'];
         $sample->save();

        //
         //return $sample;//To show insert data in database
        return  redirect('display');

    }
    public function updateuser(Request $request)
    {
        // If the form is submitted
        if ($request->isMethod('post')) {
            // Validate the ID
            $request->validate([
                'id' => 'required|exists:Firsts,id'
            ]);

            $id = $request->input('id'); // Get ID from form input
            $sample = First::find($id);

            if (!$sample) {
                return 'error, Record not found!';
            }

            return view('update', compact('sample'));
        }

        // If it's a GET request
        return view('update');
    }
    public function updateusere(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|exists:Firsts,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:Firsts,email,' ,
            'password' => 'required|Integer|min:8',
        ]);

        $sample = First::find($validatedData['id']);

        if ($sample) {
            $sample->name = $validatedData['name'];
            $sample->email = $validatedData['email'];
            $sample->password = $validatedData['password']; // Hash the password
            $saved = $sample->save(); // Save the changes to the database

            if ($saved) {
                return 'success, Record updated successfully!';
            } else {
                return 'error, Failed to update record!';
            }
        } else {
            return 'error, Record not found!';
        }
    }

    public function deleteusere(Request $request){
        if($request->isMethod('post')){
            $request->validate([
                'id'=>'required|exists:Firsts,id'
            ]);
            $id=$request->input('id');
            $sample=First::find($id);
            if(!$sample){
                return 'no records found';
            }
            else{
                return view('delete',compact('sample'));
            }
        }
        return view('delete');
    }
    public function deleted(Request $request){
        $validatedData=$request->validate([
            'id'=>'required|exists:Firsts,id'

        ]);
        $sample=First::find($validatedData['id']);
        if($sample){
            $sample->delete();
            return 'success, Record deleted successfully!';
        }else{
            return 'no record found';
        }
    }

    public function search(Request $request){
        if($request->isMethod('POST')){
           $request->validate([
            'id'=>'required|exists:Firsts,id'
           ]);
           $id=$request->input('id');
           $sample=First::find($id);
           if(!$sample){
            return 'not found';
           }else{
            return view('search',compact('sample'));
           }
        }
        return view('search');
}
public function display(Request $request){
    $validatedData=$request->validate([
        'id'=>'required|exists:Firsts,id',
        ]);
        $sample=First::find($validatedData['id']);
        if($sample){
            return view('search',compact('sample'));
        }else{
            return 'no record found';
        }
}

//display
public function disp(){
    $data = First::all();
    return view('view',compact('data'));
}

//del
public function delblogs(int $id){
    $request = First:: findOrFail($id);
    $request->delete();
    return redirect('display');
}
//edit
public function  edit(int $id){
    $blogs = First::findOrFail($id);
    return view('edit',compact('blogs'));

}
//edit2
public function editblogs(Request $request,int $id){
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
    ]);

    $blogs = First::findOrFail($id);
    $blogs->update([
        'name' =>$request->name,
        'email' => $request->email,
        'password' => $request->password

    ]);
    return redirect('display');
}
}
