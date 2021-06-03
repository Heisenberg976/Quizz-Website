<?php
  include 'database.php';
  include 'session_check.php'; 
  if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];

    $old_picture = $_POST['picture'];
    unlink('uploads/'.$old_picture);

    $tmp_name = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];

    move_uploaded_file($tmp_name,'uploads/'.$image_name);
      
    $sql = "UPDATE categories set name='".$name."', image='".$image_name."' where id=".$id;
    $result =  mysqli_query($con,$sql);
    header("Location:create-category.php");
  }  // 131891652_390836955364243_8007248572251609649_n.jpg
?>  