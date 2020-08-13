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
    
</div>
<table class="table">
<tr>
<td>s.no</td>
<td>bookname</td>
<td>price</td>
<td>quantity</td>


<td>edit</td>
<td>delete</td>

</tr>
@foreach ($users as $key=>$book)
<tr>
<td>{{ $key + 1 }}</td>
<td>{{ $book->bookname}}</td>
<td>{{ $book->price }}</td>
<td>{{ $book->quantity }}</td>





       
<td><a href="bookedit/{{ $book->id }}"><i class='fas fa-edit'>edit</i>
<a></td>
<td><a href="delete/{{$book->id}}"><i class="fa fa-trash" aria-hidden="true">delete</i>
<a></td>

</tr>
@endforeach
</table>

<a href="{{url('addbook')}}"><button class="btn btn-warning">go back to dashboard</button><a>
</body>
</html>