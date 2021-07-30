<?php
session_start();
// ouverture d'une connexion à la bdd agenda
require '../Connexion.php';

$dbh = (new Connexion())->conect();

$title = $_POST['title'];
$questions = $_POST['question_name'];
$reponses = array();
$reponses[1] = $_POST['reponse1'];
$reponses[2] = $_POST['reponse2'];
$reponses[3] = $_POST['reponse3'];
$reponses[4] = $_POST['reponse4'];
$Goodanswer = $_POST['reponse_bonne'];
$points = $_POST['points'];
$nmbquestion = count($questions);
$err = false;
$j = 0;

if (!empty($title) && !empty($questions) && !empty($points) && !empty($reponses) && !empty($Goodanswer)){

    $pdoTitle = $dbh->prepare('INSERT INTO quiz(nom) VALUES (:name)');
    $pdoTitle->bindParam(':name', $title);
    $pdoTitle->execute();
    
    $last_id = $dbh->lastInsertId();
    $id_quiz= $last_id;
    $_SESSION['quiz'] = $title;
    
        for ($i = 0; $i < $nmbquestion; ++$i){
            
            $question = $questions[$i];                                          
            $rb = $Goodanswer[$i];
            $point = $points[$i];
            
             // préparation de la requête d'insertion SQL
             $pdoStat = $dbh->prepare('INSERT INTO questions(question, points, id_quiz) VALUES (:question, :points, :id_quiz)');
             //on lie chaque marqueur à une valeur
             $pdoStat->bindParam(':question', $question);
             $pdoStat->bindParam(':points', $point);
             $pdoStat->bindParam('id_quiz', $id_quiz);
             
             // éxécution de la requête préparée

            if ($pdoStat->execute() === true ){

               
                $last_id = $dbh->lastInsertId();
                $id = $last_id;                

                foreach ($reponses as $reponse => $values){
                    if($values != ''){
                        if($reponse == $rb){
                            $answers = 1;
                        }   else {
                            $answers = 0;
                        }
    
                $value = $values[$i];
                
                            $pdoRep = $dbh->prepare('INSERT INTO reponses(id_question, reponse_bonne, reponse) VALUES (:id_question, :reponse_bonne, :reponse)');
                            $pdoRep->bindParam(':id_question', $id);
                            $pdoRep->bindParam(':reponse_bonne', $answers);
                            $pdoRep->bindParam(':reponse', $value);
                            $pdoRep->execute();
                        
                            }  
                        } 
                        }else {
                            header('Location:./index.php');
                            die;
                }  
        }         
        
} else {
    $err = true;
    }  

if ($err === true){
        header('Location:./index.php');
    } else {
        header('Location:./attente.php');
    }


