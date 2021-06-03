<?php
    include 'session_check.php'; 
?>

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<?=include "navbar.php"?>

    <div class="list-group" style = "float:left;margin-top:20px;margin-left:15px">
  <a href="create-category.php" class="list-group-item list-group-item-action">Categories</a>
  <a href="create-question.php" class="list-group-item list-group-item-action">Question</a>
  <a href="index.php" class="list-group-item list-group-item-action">User</a>
  <a href="logout.php" class="list-group-item list-group-item-action ">Sign out</a>

    </div>
</body>
</html>