<?php session_start();

$conn = new PDO("mysql:host=localhost;dbname=quizz","laurent","12345");

if (!empty($_POST['pseudo']) && !empty($_POST['quiz'])){

  $user = $_POST['pseudo'];
  $quiz = $_POST['quiz'];
  $_SESSION['quiz'] = $quiz;
  

$sth = $conn->prepare('SELECT nom FROM questions');
$sth->execute($quiz);
$data = $sth->fetch($quiz);
var_dump($row, $data);
$row = $data->rowCount();

if ($row > 0){
  
  $reqquest = $conn->prepare('SELECT id, question FROM questions WHERE id = :id && question = :question');

   
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    echo $questions;
    ?>
</body>
</html>
