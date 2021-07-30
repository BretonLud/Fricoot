<?php
session_start();
// ouverture d'une connexion à la bdd agenda
require '../Connexion.php';

$dbh = (new Connexion())->conect();

//on récupère les valeurs
$title = $_POST['title'];
$questions = $_POST['question_name'];
$reponses = array();
$reponses[1] = $_POST['reponse1'];
$reponses[2] = $_POST['reponse2'];
$reponses[3] = $_POST['reponse3'];
$reponses[4] = $_POST['reponse4'];
$Goodanswer = $_POST['reponse_bonne'];
$points = $_POST['points'];

//on compte le nombre de question
$nmbquestion = count($questions);

$err = false;

//on vérifie que c'est pas vide
if (!empty($title) && !empty($questions) && !empty($points) && !empty($reponses) && !empty($Goodanswer)){


    //on envoie le titre dans la table de donnée quiz
    $pdoTitle = $dbh->prepare('INSERT INTO quiz(nom) VALUES (:name)');
    $pdoTitle->bindParam(':name', $title);
    $pdoTitle->execute();
    
    //on récupère l'id qu'on vient de mettre au quiz
    $last_id = $dbh->lastInsertId();
    $id_quiz= $last_id;
    //on permet au titre d'être récupère via une Session
    $_SESSION['quiz'] = $title;

        //on ingrémente $i afin de séparer les questions, les bonnes réponses et les points et on commence une boucle
        for ($i = 0; $i < $nmbquestion; ++$i){
                       
            $question = $questions[$i];                                          
            $rb = $Goodanswer[$i];
            $point = $points[$i];
            
             //on insert dans la table questions les questions et les points ainsi que l'id du quiz
             $pdoStat = $dbh->prepare('INSERT INTO questions(question, points, id_quiz) VALUES (:question, :points, :id_quiz)');
             //on lie chaque marqueur à une valeur
             $pdoStat->bindParam(':question', $question);
             $pdoStat->bindParam(':points', $point);
             $pdoStat->bindParam('id_quiz', $id_quiz);
             
             // éxécution de la requête préparée

            if ($pdoStat->execute() === true ){

               //on récupère l'id de la question
                $last_id = $dbh->lastInsertId();
                $id = $last_id; 

                //dans notre précédente boucle on insert une boucle et on transforme le tableau des réponses en string
                foreach ($reponses as $reponse => $values){
                    if($values != ''){
                        if($reponse == $rb){
                            $answers = 1;
                        }   else {
                            $answers = 0;
                        }
                 
                $value = $values[$i];
                        
                            //on ajoute dans la table reponses id des questions, la bonne réponse et les réponses
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


