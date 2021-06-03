<?php
include "database.php";
  include 'session_check.php'; 
  if(!isset($_GET['id'])){
  header("Location: create-category.php");
}
  $id = $_GET['id'];
  $sql = "select* from categories where id=" . $id; 
  $result = mysqli_query($con,$sql);
   $row = mysqli_fetch_array($result);

?>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
    <div class = "col-md-4">
       <form action="update.php" method = "post"   style = "margin-top:20px" enctype = "multipart/form-data" >
           <div class="form-group">
           <label >name</label>
           <input type="text" class = "form-control" name = "name" value="<?=$row['name']?>" >
           </div>

          <input type="hidden" name = "id" value="<?=$row['id']?>">
            <img src="uploads/<?=$row['image']?>"style = "width: 700px;height:400px" >
            <br>
            <br>
           <div class="form-group">
           <label >Body </label>
           <input type="hidden" name="picture" value="<?=$row['image']?>">
           <input type="file"   name = "image">
           </div>
           <input type="submit" name = "submit" class = "btn btn-success">
       </form>
</body>
</html>