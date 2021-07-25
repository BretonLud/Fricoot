<!DOCTYPE html>
<html class="wf-montserrat-n7-active wf-montserrat-n4-active wf-montserrat-n5-active wf-montserrat-n6-active wf-montserrat-n8-active wf-montserrat-n9-active wf-active" lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="60x60" href="./css/images/apple-icon-60x60.png">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../src.script.js" async></script>	
    <title>Question pour de l'oseille !</title>
</head>

<body>
    
<header>
        <h1>Votre questionnaire</h1>
    </header>
    <nav>
        <div class="controller__AppWrapper-sc-1m4rw0k-0 test">
            <div class="background__Background-sc-15eg2v3-0 test1">
                <aside class="background-shapes__CircleShape-waao7z-1 gVOCQO"></aside>
                <aside class="background-shapes__CircleShape-waao7z-1 eanPtI"></aside>
                <div class="boxq">
                    <table>
                        <form action="insertion.php" method="post" class='question'>
                            <thead>
                                <tr id='question'>
                                    <th></th>
                                </tr>
                                <tr id='rep1'>
                                    <th></th>
                                </tr>
                                <tr id='rep2'>                                
                                    <th></th>
                                </tr>
                                <tr id='br+p'>                               
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                <tr>
                                    <td class='quest'>
                                        <p class="q">Question 1 :</p>
                                        <input type="text" name="question_name" required>
                                    </td>
                                </tr>
                                <tr> 
                                    <td  class="r">     
                                        <p>Reponse :<p>
                                    </td>                                 
                                    <td class='r1'>                                        
                                        <label for="reponse_1">1</label>
                                        <input type="text" name="reponse_1" required >
                                    </td>
                                    <td class='r2'>
                                        <label for="reponse_2">2</label>
                                        <input type="text" name="reponse_2" required>
                                    </td>
                                </tr>
                                <tr>    
                                    <td class='r3'>
                                        <label for="reponse_3">3</label>
                                        <input type="text" name="reponse_3" required>
                                    </td>
                                    <td class='r4'>
                                        <label for="reponse_4">4</label>
                                        <input type="text" name="reponse_4" required>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td class='answer'>
                                        <label for="reponse_bonne">Bonne réponse :</label>
                                        <input type="number" name="reponse_bonne" class="correct" value="1" min="1" max="4" required>
                                    </td>                            
                                    <td class='points'>
                                        <label for="points">Nombre de points :</label>
                                        <input type="number" name="points" required min="1" max="100" values="5">
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>                     
                                        <input type="button" value="Ajouter une question" class="button" onclick="ajouterLigne()"> 
                                    </td>
                                </tr>
                                <tr> 
                                    <td>                      
                                        <input type="submit" value="Enregistrer" class="button">
                                    </td>
                                </tr>                               
                            </tfoot>                                                 
                        </form>
                    </table>    
                </div>
            </div>
        </div>                                              
    </nav>
<?php require '../templates/footer.php' ?>