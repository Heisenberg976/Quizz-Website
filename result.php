<?php
include 'database.php';

if (!isset($_GET['id'])) {
    header("Location:categories.php");
}
$id = $_GET['id'];
$sql = 'select* from questions where categoryID =' . $id;
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
// echo $count;
$counter = 0;
for ($i = 0; $i < $count; $i++) {
    $selected = -1;
    if (isset($_POST['question' . $i])) {
        $selected = $_POST['question' . $i];
    }
    // $selected = $_POST['question'.$i] || -1;
    if ($_POST['answer' . $i] == $selected) {
        // echo 'correct';
        $counter++;
    }
}
$user = $_POST['user'];
$score = round($counter / $count * 100);
// echo $counter.'/'.$count;
$sql = 'insert into results (name,score,categoryID) VALUES ("' . $user . '", ' . $score . ',' . $id . ')';
mysqli_query($con, $sql);
// echo 'correct answers:' . $counter . 'from:' . $count;
$message = '';
if ($score > 70) $message = 'Well Done, ' . $user;
if ($score < 70) $message = 'Good, ' . $user;
if ($score < 50) $message = 'Try Again, ' . $user . ' you can do better';
?>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="text-align:center;margin-top:10%">
        <h1> <?= $message ?></h1>
        <h2>You got <?= $score ?>%</h2>
        <a href="category.php?id=" class="btn btn-primary">Try Again</a>
        <a href="categories.php" class="btn btn-danger">Exit</a>
    </div>
</body>


</html>