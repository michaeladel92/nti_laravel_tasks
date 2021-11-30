<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Students</title>
  </head>
  <body>    
    <div class="container mt-5 col-md-12">
      <h1>Student list</h1>
      {{session()->get('Message')}}
      <a href="{{url('createStudent')}}" class="btn btn-primary mb-2">Add Student</a>
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">address</th>
            <th scope="col">gender</th>
            <th scope="col">linkdin</th>
            <th scope="col">image</th>
            <th scope="col">options</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $row)
          <tr>
            <th scope="row">{{$row->id}}</th>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->address}}</td>
            <td>{{$row->gender}}</td>
            <td>{{$row->linkdin}}</td>
            <td>
              <img style="object-fit: cover;max-width:90px;max-height:90px;" src="{{asset('images/'.$row->image)}}">
            </td>
            <td>
              <a href="{{url('editStudent').'/'.$row->id }}" class="btn btn-warning">edit</a>
              <a href="{{url('deleteStudent').'/'.$row->id}}" class="btn btn-danger">delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>