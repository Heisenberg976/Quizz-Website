<?php
    include "database.php";
    session_start();
    if(isset($_SESSION['user'])){
      header("Location:create-category.php");
    }
    $message = '';
    if(isset($_POST['submit'])){
        $name = $_POST['email'];
        $password = $_POST['password'];
        if($name == '' && $password == ''){
            $message = "Please fill the lines";
        }
        $sql = "select * from users";
        $result = mysqli_query($con,$sql);
        while($res = mysqli_fetch_array($result)){
           
             if( $res['email'] == $name && $res['password'] == md5($password)  ) {
                
                $_SESSION['user'] = $name;  
                header("Location:index.php");
            }
          
            else    $message = "incorrect password or username";
            
        }
           

    }
?>

<html>
<head> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 </head>
<body style = "background-color:#9cd1ff">
    <!-- <form action="login.php" method = "post">
    
       <input type="text" name = "email">
       <input type="password" name = "password">
       <input type="submit" name = "submit" class = "btn btn-success">
       <br>
      
    </form> -->
    
    <div class="container">
    <div class="row">
    <div class="col-md-3">
    <form  action="login.php" method = "post">
     <h2>Log in</h2>
  <div class="form-group" >
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control"   name = "email" >
   
  </div>
  <div class="form-group" style = "marign-top:15px">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  name = "password" >
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary" name = "submit"  style= "margin-top:15px">Submit</button>
  <?=$message?>
  </div>
</form>
</div>
</div>
</div>
</body>
</html>