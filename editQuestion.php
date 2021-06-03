<?php
include "database.php";
include 'session_check.php'; 
if(!isset($_GET['id'])){
  header("Location: create-category.php");
}
  $id = $_GET['id'];
  $sql = "select * from questions where id=" . $id; 
  $result = mysqli_query($con,$sql);
   $row = mysqli_fetch_array($result);

?>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<div class="list-group" style = "float:left;margin-top:20px; width:200px">

  <a href="create-category.php" class="list-group-item list-group-item-action ">Categories</a>
  <a href="create-question.php" class="list-group-item list-group-item-action active">Question</a>
  <a href="index.php" class="list-group-item list-group-item-action">User</a>
  <a href="logout.php" class="list-group-item list-group-item-action ">Sign out</a>

    </div>

<div class="container">
    <div class="row">
    <div class = "col-md-4">
       <form action="updateQuestion.php" method = "post"   style = "margin-top:20px" enctype = "multipart/form-data" >
           <div class="form-group">
           <label >Question</label>
           <input type="text" class = "form-control" name = "question" value="<?=$row['question']?>" >
           </div>

           <div class="form-group">
           <label >A</label>
           <input type="text" class = "form-control" name = "a" value="<?=$row['a']?>" >
           </div>

           <div class="form-group">
           <label >B</label>
           <input type="text" class = "form-control" name = "b" value="<?=$row['b']?>" >
           </div>

           <div class="form-group">
           <label >C</label>
           <input type="text" class = "form-control" name = "c" value="<?=$row['c']?>" >
           </div>

           <div class="form-group">
           <label >D</label>
           <input type="text" class = "form-control" name = "d" value="<?=$row['d']?>" >
           </div>

           <div class="form-group">
           <label >Correct</label>
         <select name = "correct" class="form-control">
         <?php
         if($row['correct'] == 0){
       echo  '<option selected value = "0"  >A</option>';
        }
        else  echo  '<option  value = "0"  >A</option>';

        if($row['correct'] == 1){
          echo  '<option selected value = "1"  >B</option>';
           }
           else  echo  '<option  value = "1"  >B</option>';

           if($row['correct'] == 2){
            echo  '<option selected value = "2"  >C</option>';
             }
             else  echo  '<option  value = "2"  >C</option>';

             if($row['correct'] == 3){
              echo  '<option selected value = "3"  >D</option>';
               }
               else  echo  '<option  value = "3"  >D</option>';
         echo  '</select>';
        ?>
        <br>
        <select name = "categoryID"  class="form-control">
        <?php
        $sql = 'select *  from categories';
        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($result)){
          echo  '<option value='.$id.'>'.$row['name'].'</option>';
      }
          ?>
        </select>
           </div>

          <input type="hidden" name = "id" value="<?=$id?>">
            <br>
            <br>
    
           
           <input type="submit" name = "submit" class = "btn btn-success">
       </form>
</body>
</html>