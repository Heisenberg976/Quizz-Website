<?php
    include 'database.php';
    include 'session_check.php'; 
    if(isset($_POST['submit'])){
        $quest = $_POST['question'];
        $a = $_POST['A'];
        $b = $_POST['B'];
        $c = $_POST['C'];
        $d = $_POST['D'];
        $correct = $_POST['correct'];
        $sql = "insert into questions (question,a,b,c,d,correct) VALUES('$quest','$a','$b','$c','$d','$correct')";
        mysqli_query($con,$sql);
        echo mysqli_error($con);
        header("Location:create-question.php");
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
       <form action="addQuestion.php" method = "post"   style = "margin-top:20px" >
           <div class="form-group">
           <label >question</label>
           <input type="text" class = "form-control" name = "question">
           </div>

           <div class="form-group">
           <label >A</label>
           <input type="text" class = "form-control" name = "A">
           </div>

           <div class="form-group">
           <label >B</label>
           <input type="text" class = "form-control" name = "B">
           </div>

           <div class="form-group">
           <label >C</label>
           <input type="text" class = "form-control" name = "C">
           </div>

           <div class="form-group">
           <label >D</label>
           <input type="text" class = "form-control" name = "D">
           </div>

           <div class="form-group">
           <label >Correct</label>
           <select name="correct">
           <option value = '0'>A</option>
           <option value = '1'>B</option>
           <option value = '2'>C</option>
           <option value = '3'>D</option>
           </select>
           </div>
           <input type="submit" name = "submit" class = "btn btn-success">
       </form>
       
    
    
    </div>
    </div>
</div>
    </html>