
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add new user</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add new user</h2>
  
  
  <form   action="{{url('/store')}}"  method="POST" enctype="multipart/form-data">
  <!-- token -->
  @csrf
  <!-- name -->
  <div class="form-group">
    <label>Name</label>
    <input value="{{old('name')}}"  type="text" class="form-control" name="name" placeholder="Enter Name">
  </div>
  <!-- email -->
  <div class="form-group">
    <label>Email address</label>
    <input value="{{old('email')}}" type="text"   class="form-control"  name="email" placeholder="Enter email">
    </div>
  <!-- password -->
  <div class="form-group">
    <label>Password</label>
    <input value="" type="password"   class="form-control" name="password">
  </div>
  <!-- confirm password -->
  <div class="form-group">
    <label for="con-exampleInputPassword">confirm Password</label>
    <input value="" type="password" class="form-control" name="password_confirmation">
  </div>
  <!-- Address -->
  <div class="form-group">
    <label>Address</label>
    <input value="{{old('address')}}" type="text"   class="form-control"  name="address" placeholder="Address">
  </div>
  <!-- linkdin -->
  <div class="form-group">
    <label>linkdin link</label>
    <input type="text" value="{{old('linkdin')}}"  class="form-control"  name="linkdin" placeholder="linkdin url">
  </div>
  <!-- gender -->
  <div class="form-group">
    <label>Gender</label>
    <select name="gender" class="custom-select" id="inputGroupSelect02">
    <option value ="">choose</option>
    <option value ="male" @if (old('gender') === 'male') selected="selected" @endif>male</option>
    <option value ="female"  @if (old('gender') === 'female') selected="selected" @endif>female</option>
  </select>
  </div>


    <!-- Image -->
    <div class="form-group">
    <label>Image</label>
    <input type="file" class="form-control" name="image">
  </div>

<!-- Error messages -->
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>