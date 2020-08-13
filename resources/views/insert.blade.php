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

  <h2 class="text-center">books insert</h2>
  <form action="{{url('insertbook')}}" class="col-md-4" method="POST">
  {{ csrf_field() }}
  <div class="form-group">
      <input type="text" class="form-control"  id="name" placeholder="book name" name="bookname" value="{{old('bookname')}}">
      @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
    </div>
    <div class="form-group">
     
      <input type="text" class="form-control"  id="price" placeholder="book price" name="price" value="{{old('price')}}">
      @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
                @endif
    </div>
    <div class="form-group">
      <input type="text" class="form-control"  id="quantity" placeholder="quantity" name="quantity" value="{{old('quantity')}}">
      @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('quantity') }}</span>
                @endif
    </div>
   

   
   
    <button type="submit" class="btn btn-primary mb-4">submit</button>
  </form>
 
</div>

</body>
</html>