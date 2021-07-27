<?php
session_start();
// ouverture d'une connexion à la bdd 
require '../Connexion.php';

$dbh = (new Connexion())->conect();

$question = $_POST['question_name'];
$r = $_POST['reponse_1'];
$r1 = $_POST['reponse_2'];
$r2 = $_POST['reponse_3'];
$r3 = $_POST['reponse_4'];
$answer = $_POST['reponse_bonne'];
$points = $_POST['points'];
$nmbquestion = count($question);
$err = false;

for ($i = 0; $i < $nmbquestion; ++$i){

    $questions = $question[$i];
    $rep = $r[$i];
    $rep1 = $r1[$i];
    $rep2 = $r2[$i];
    $rep3 = $r3[$i];
    $rb = $answer[$i];
    $point = $points[$i];

    if ( !empty($questions) && !empty($rep) && !empty($rep1) && !empty($rep2) && !empty($rep3) && !empty($rb) && !empty($point)){
        // préparation de la requête d'insertion SQL
            $pdoStat = $dbh->prepare('INSERT INTO questions(question_name, reponses_1, reponses_2, reponses_3, reponses_4, reponse_bonne, points) VALUES (:question_name, :reponse_1, :reponse_2, :reponse_3, :reponse_4, :reponse_bonne, :points)');
            //on lie chaque marqueur à une valeur
            $pdoStat->bindParam(':question_name', $questions);
            $pdoStat->bindParam(':reponse_1', $rep);
            $pdoStat->bindParam(':reponse_2', $rep1);
            $pdoStat->bindParam(':reponse_3', $rep2);
            $pdoStat->bindParam(':reponse_4', $rep3);
            $pdoStat->bindParam(':reponse_bonne', $rb);
            $pdoStat->bindParam(':points', $point);
        
            // éxécution de la requête préparée
            $pdoStat->execute();              
     } else {
         $err = true;
     }
}

if ($err === true){
    header('Location:./index.php');
} else {
    header('Location:../attente.php');
}


