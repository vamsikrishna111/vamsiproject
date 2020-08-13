<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
  .container{
    border-style: solid;
    background-color:;
  }
  </style>
</head>
<body>
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
<!-- <ul>
            @foreach ($errors->all() as $error)
          
                <li>{{ $error}}</li>
            @endforeach
        </ul> -->

<div class="container mt-5">

  <h2 class="text-center">registration form</h2>
  <form action="{{url('insert')}}" class="col-md-4" method="POST">
  {{ csrf_field() }}
  <div class="form-group">
      <input type="text" class="form-control"  id="name" placeholder="Enter name" name="name" value="{{old('name')}}">
      @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
    </div>
    <div class="form-group">
     
      <input type="email" class="form-control"  id="email" placeholder="Enter email" name="email" value="{{old('email')}}">
      @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
    </div>
    <div class="form-group">
      <input type="password" class="form-control"  id="pwd" placeholder="Enter password" name="password" value="{{old('password')}}">
      @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
    </div>
    <div class="form-group">
      <input type="password" class="form-control"  id="cpwd" placeholder="Enter conform password" name="cpassword" value="{{old('cpassword')}}">
      @if ($errors->has('cpassword'))
                    <span class="text-danger">{{ $errors->first('cpassword') }}</span>
                @endif
    </div>

   
   
    <button type="submit" class="btn btn-primary mb-4">register</button>
  </form>
 
</div>

</body>
</html>