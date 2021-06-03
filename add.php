<?php
     include "database.php";
     include 'session_check.php'; 

     if(isset($_POST["submit"])){
         $name = $_POST["name"];      
         $fileName = $_FILES['image']['size'];
         $fileTmp = $_FILES['image']['tmp_name'];
         $ext = strtolower(explode('.',$fileName)[1]);
         $extensions = array('png', 'jpeg');
         $photo = md5(rand() . time())  . $fileName;
         move_uploaded_file($fileTmp, 'uploads/' . $photo);
         $sql = "insert into categories (name,image)  VALUES('".$name."','".$photo."')";
         $result = mysqli_query($con,$sql);
         header("Location:create-category.php");
        
     }
?>

<html>
    <head>
    <title>test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
    <ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
    </ul>
    
    <div class="container">
    <div class="row">
    <div class = "col-md-4">
       <form action="add.php" method = "post"   style = "margin-top:20px" enctype = "multipart/form-data" >
           <div class="form-group">
           <label >name</label>
           <input type="text" class = "form-control" name = "name">
           </div>

            
           <div class="form-group">
           <label >image</label>
           <input type="file"  name = "image">
           </div>
           
           <input type="submit" name = "submit" class = "btn btn-success">
       </form>
       
    
    
    </div>
    </div>
</div>
    </html>