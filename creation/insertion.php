<?php
session_start();
// ouverture d'une connexion à la bdd agenda
require '../Connexion.php';

$dbh = (new Connexion())->conect();
var_dump($_POST);
$question = $_POST['question_name'];
$r = $_POST['reponse_1'];
$r1 = $_POST['reponse_2'];
$r2 = $_POST['reponse_3'];
$r3 = $_POST['reponse_4'];
$answer = $_POST['reponse_bonne'];
$points = $_POST['points'];
$nmbquestion = count($question);

for ($i = 0; $i < $nmbquestion; ++$i){

    $question = $question[$i];
    $r = $r[$i];
    $r1 = $r1[$i];
    $r2 = $r2[$i];
    $r3 = $r3[$i];
    $answer = $answer[$i];
    $points = $points[$i];
}

if ( !empty($question) && !empty($r) && !empty($r1) && !empty($r2) && !empty($r3) && !empty($answer) && !empty($points)){
// préparation de la requête d'insertion SQL
    $pdoStat = $dbh->prepare('INSERT INTO questions(question_name, reponses_1, reponses_2, reponses_3, reponses_4, reponse_bonne, points) VALUES (:question_name, :reponse_1, :reponse_2, :reponse_3, :reponse_4, :reponse_bonne, :points)');
    //on lie chaque marqueur à une valeur
    $pdoStat->bindParam(':question_name', $question);
    $pdoStat->bindParam(':reponse_1', $r);
    $pdoStat->bindParam(':reponse_2', $r1);
    $pdoStat->bindParam(':reponse_3', $r2);
    $pdoStat->bindParam(':reponse_4', $r3);
    $pdoStat->bindParam(':reponse_bonne', $answer);
    $pdoStat->bindParam(':points', $points);

    // éxécution de la requête préparée
if ($pdoStat->execute() === true) {
  
    header('Location:../attente.php');
    die;

} else {

    header('Location:./index.php');
    die;
    } 
}
