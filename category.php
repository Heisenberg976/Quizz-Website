<?php
include "database.php";

    if(!isset($_GET['id'])){
        header("Location:categories.php");
    }
        ?>
    <html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<body style = "background-color:#9cd1ff">
    

<?php
    $id = $_GET['id'];
    $sql = "SELECT* from questions where categoryID=".$id." ORDER BY RAND()";
    $result = mysqli_query($con,$sql);
    $i = 0;
    
    echo '<form action="result.php?id='.$id.'" method="post">';
    echo '<br>';
    echo '<br>';
    echo '<label style = "margin-left:13%;margin-bottom:2%">Enter your name <input type="text" name="user"></label>';
    echo '';
    while($res = mysqli_fetch_array($result)){
        echo '<div class = "container" style = "background-color:white; border:outset ">';
        echo '<h2> '.$res['question'].'</h2>';
        echo '<h5><label><input type="radio" value="0" name="question'.$i.'">' . $res['a'] . '</label></h5>'; 
        echo '<br>';
        echo '<h5><label><input type="radio" value="1" name="question'.$i.'">' .$res['b'] .  '</label></h5>'; 
        echo '<br>';
        echo '<h5><label><input type="radio" value="2" name="question'.$i.'">'.$res['c'].'</label></h5>';
        echo '<br>'; 
        echo '<h5><label class = "form-control alert alert-success" ><input type="radio" value="3"  name="question'.$i.'">'. $res['d'] . '</label></h5>';
        echo '<br>';
        //correct answervvvvvvvvvvvvvvvvvvvv
        echo '<input type="hidden" value = "'.$res['correct'] .'" name="answer'.$i.'" >';
        echo '<br>';
        echo '</div>';
        $i+=1;
        echo '<br>';
    }
    echo '<input type = "submit" name = "submit" class = "btn btn-primary"style = "margin-left:15%">';
    echo '</form>';
?>
</body>
</html>