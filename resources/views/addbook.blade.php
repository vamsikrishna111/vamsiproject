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
  
</head>
</body >
<div class="container mt-4">
<a href="{{url('insertpopup')}}"><button  class="btn btn-primary mb-4">Add book</button></a>
<a href="{{url('login')}}"><button  class="ml-5">logout</button></a>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>account select</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
     

<div>
    <h1 class="bg-primary">one to many relations</h1>
</div>
<table class="table">
<tr>
<td>s.no</td>
<td>bookname</td>
<td>price</td>
<td>quantity</td>
<td>email</td>
<td>name</td>





</tr>
@foreach ($data as $key=>$book)
<tr>
<td>{{ $key + 1 }}</td>
<td>{{ $book->bookname}}</td>
<td>{{ $book->price }}</td>
<td>{{ $book->quantity }}</td>
<td>{{ $book->email }}</td>
<td>{{ $book->name}}</td>







       


</tr>
@endforeach
</table>

</body>
</html>

</div>
</body>
</html>