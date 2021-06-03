<?php
include "database.php";
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "DELETE FROM categories WHERE id=" . $id; 
  $result = mysqli_query($con,$sql);
    header("Location:create-category.php");
}
  
?>