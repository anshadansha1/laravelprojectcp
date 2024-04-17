<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VIEW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>VIEW PAGE</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $datas)
          <tr>
            
            <td>{{$datas->id}}</td>
            <td>{{$datas->name}}</td>
            <td>{{$datas->email}}</td>
            <td>{{$datas->password}}</td>
            <td>
                <a href="{{url('Firsts/'. $datas->id . '/delete')}}">delete</a>
                <a href="{{url('Firsts/'. $datas->id . '/edit')}}">edit</a>
            </td>

          </tr>
          @endforeach
          
        </tbody>
      </table>
      <a href="{{route('Home')}}">Go to homepage</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>