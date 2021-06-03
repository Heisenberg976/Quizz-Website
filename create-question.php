<?php
  include 'session_check.php'; 
  include "database.php";
?>


<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body> 

<?php include 'navbar.php' ?>

 <div class="list-group" style = "float:left;margin-top:20px; width:200px">
  <a href="create-category.php" class="list-group-item list-group-item-action ">Categories</a>
  <a href="create-question.php" class="list-group-item list-group-item-action active">Question</a>
  <a href="index.php" class="list-group-item list-group-item-action">User</a>
  <a href="logout.php" class="list-group-item list-group-item-action ">Sign out</a>
   </div>
        
  <div class="container">
    <a href="addQuestion.php" class = "btn btn-primary"style = "margin-top:20px;width:80px">Add</a>
  
        <div class="row">
<?php
    
        $sql = 'select * from questions';
        $result = mysqli_query($con,$sql);
        while($res = mysqli_fetch_array($result)){
          echo '<div class = "col-md-3"; style:"margin-left:10%;">';
        echo  '<div class="card" style = "margin-bottom:15px;width:18rem;">';
          echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $res['question'] . '</h5>';
            echo '<a href="editQuestion.php?id='. $res['id'] . '"class="btn btn-primary">Edit</a>';
            echo '<a href="deleteQuestion.php?id='. $res['id'] . '"class="btn btn-danger" style = "margin-left:15px">Delete</a>';
          echo '</div>';
        echo '</div>'; 
        echo '</div>';
        }
        ?> 
        </div>
        </div>
       
</body>
</html>