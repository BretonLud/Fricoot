<!DOCTYPE html>
<html class="wf-montserrat-n7-active wf-montserrat-n4-active wf-montserrat-n5-active wf-montserrat-n6-active wf-montserrat-n8-active wf-montserrat-n9-active wf-active" lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="60x60" href="./css/images/apple-icon-60x60.png">
    <link rel="stylesheet" type="text/css" href="../css/style.css">	
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
                    <form action="insertion.php" method="post">                         
                        <table class='question'>                                                   
                            <tbody id="tbody">
                                <tr>
                                    <td class='quest'>
                                        <h3 class="q"> Titre du questionnaire :</h3>
                                        <input name="title" type="text" id="titre" class="qu" required>
                                    </td>
                                </tr>  
                                <tr id='question'>                                                                                                         
                                    <td class='quest'>                                        
                                        <p class="q">Question <label>n°</label> : <input type="text" value="1" class="number" inherit min="1" autocomplete="off" readonly/></p>
                                        <input type="text" name="question_name[]" required class="qu"/>
                                    </td>                                    
                                </tr>
                                <tr id='rep1' class="rep1"> 
                                    <td  class="r">     
                                        <p>Reponse :<p>
                                    </td>                                 
                                    <td class='r1'>                                        
                                        <label for="reponse_1">1</label>
                                        <input type="text" name="reponse1[]" required />
                                    </td>
                                    <td class='r2'>
                                        <label for="reponse_2">2</label>
                                        <input type="text" name="reponse2[]" required />
                                    </td>
                                </tr>
                                <tr id='rep2' class="rep2">    
                                    <td class='r3'>
                                        <label for="reponse_3">3</label>
                                        <input type="text" name="reponse3[]" required />
                                    </td>
                                    <td class='r4'>
                                        <label for="reponse_4">4</label>
                                        <input type="text" name="reponse4[]" required />
                                    </td>
                                </tr>
                                <tr id='br+p'>                                   
                                    <td class='answer'>
                                        <label for="reponse_bonne">Bonne réponse :</label>
                                        <input type="number" name="reponse_bonne[]" class="correct" value="1" min="1" max="4" required />
                                    </td>                            
                                    <td class='points'>
                                        <label for="points">Nombre de points :</label>
                                        <input type="number" name="points[]" required min="1" max="100" value="1" />
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>                     
                                        <input type="button" value="Ajouter une question" id="ajoute" class="button" > 
                                    </td>
                                </tr>
                                <tr> 
                                    <td>                      
                                        <input type="submit" value="Enregistrer" class="button">
                                    </td>
                                </tr>                               
                            </tfoot>                        
                        </table>
                    </form>        
                </div>
            </div>
        </div>                                                      
    </nav>
    <script src="../src/script.js"></script>
<?php require '../templates/footer.php' ?>