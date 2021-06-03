<?php
  include 'database.php';
  include 'session_check.php'; 
  if(isset($_POST['submit'])){
      $question = $_POST['question'];
      $id = $_POST['id']; 
      $a = $_POST['a'];
      $d = $_POST['d'];
      $b = $_POST['b'];
      $c = $_POST['c'];
      $catID = $_POST['categoryID'];
      $correct = $_POST['correct'];
     $sql = "UPDATE questions SET question='$question', a='$a', b='$b', c='$c', d='$d', correct=$correct, categoryID =$catID WHERE id=$id";    
    $result =  mysqli_query($con,$sql);
    //  print_r($_POST);
    //echo $sql . $id;
   // echo mysqli_error($con);
     header("Location:create-question.php");
    } 
  
?>  