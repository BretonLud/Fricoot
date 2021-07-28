<?php
$question_number = 1;
$conn = new PDO("mysql:host=localhost;dbname=quizz","laurent","12345");

//$sql = "select question_number, question_name from questions where :question_number";
//$sql1 = "select question_number, reponse_1, reponse_2, reponse_3, reponse_4 from reponses";

$sql = "select * from questions where question_number ='1'";
$sql1 = "select * from reponses where question_number ='1'";

$sth = $conn->prepare($sql);
$sth1 = $conn->prepare($sql1);
$sth->bindValue(':question_number', $question_number, PDO::PARAM_INT);
$sth->execute();
$sth1->execute();

$questions = $sth->fetchAll(PDO::FETCH_ASSOC);
$reponses = $sth1->fetchAll(PDO::FETCH_ASSOC);

//$sth->debugDumpParams();
//var_dump($sth);

foreach ( $questions as $question){
  echo '<p>'.$question['question_number'].' - '.$question['question_name'].'</p>';
}

foreach ( $reponses as $reponse ){
  echo '<p>'.$reponse['question_number'].' - '.$reponse['reponse_1'].' - '.$reponse['reponse_2'].' - '.$reponse['reponse_3'].' - '.$reponse['reponse_4'].'</p>';
}


?>



