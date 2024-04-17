<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

Route::get('/', [FirstController::class,'homepage'])->name('Home');

Route::get('newuser',[firstcontroller::class,'new'])->name('New');
Route::POST('save',[firstcontroller::class,'saveuser'])->name('save');

Route::get('update',[firstcontroller::class,'updateuser'])->name('Update');
Route::post('update', [firstcontroller::class, 'updateusere'])->name('update.post');

Route::get('delete',[firstcontroller::class,'deleteusere'])->name('Delete');
Route::post('delete', [firstcontroller::class, 'deleted'])->name('delete.post');

Route::get('search',[firstcontroller::class,'search'])->name('Search');
Route::post('search', [firstcontroller::class, 'display'])->name('Search.post');

Route::get('display',[firstcontroller::class,'disp'])->name('Display');

Route::get('Firsts/{id}/delete', [FirstController::class,'delblogs'])->name('del');

Route::get('Firsts/{id}/edit', [FirstController::class,'edit'])->name('edit');
Route::put('Firsts/{id}/edit', [FirstController::class,'editblogs'])->name('editblogs');