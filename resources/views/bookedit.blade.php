<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<form action = "<?php echo $users[0]->id; ?>" method = "post" enctype="multipart/form-data">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table class="table">


<tr>
<td>book name</td>


<td>
<div >
  
 <input type="text"  name="bookname" value = '<?php echo$users[0]->bookname; ?>' required />

 </div>
 </td>
 
</tr>
<tr>
<td>price</td>
<td>
<div class="form-group">
  
 
 <textarea type="text"  name="price" required><?php echo$users[0]->price; ?>
</textarea>

 </td>
 
</tr>
 
<tr>
<td>quantity</td>
<td>
<div class="form-group">
  
 
 <textarea type="text"  name="quantity" required><?php echo$users[0]->quantity; ?>
</textarea>



    <div >
        <input type="submit" name="submit"  value="Updatebook list" class="btn btn-danger">
    </div>
    </td>
  </tr>






</table>
</form>
</body>
</html>