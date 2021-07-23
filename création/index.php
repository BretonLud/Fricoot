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
                <div class="box">
                    <div>Ajouter une questions</div>
                    <form action="insertion.php" method="post">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>Question</p>
                                    <input id="question_name" type="text" name="question_name" required>
                                </td>
                                <div><p>Reponse<p>
                                <td>
                                    <label for="reponse_1">1</label>
                                    <input id="reponse_1" type="text" name="reponse_1" required class='r1'>
                                </td>
                                <td>
                                    <label for="reponse_2">2</label>
                                    <input id="reponse_2" type="text" name="reponse_2" required>
                                </td>
                                <td>
                                    <label for="reponse_3">3</label>
                                    <input id="reponse_3" type="text" name="reponse_3" required>
                                </td>
                                <td>
                                    <label for="reponse_4">4</label>
                                    <input id="reponse_4" type="text" name="reponse_4" required>
                                </td>
                                <td>
                                    <label for="reponse_bonne">Bonne réponse</label>
                                    <input id="reponse_bonne" type="text" name="reponse_bonne" required>
                                </td>
                                <td>
                                    <label for="points">Nombre de points</label>
                                    <input id="points" type="text" name="points" required>
                                </td>
                            </tr>
                        </tbody>
                        </div>
                        <div class="button">
                        <input type="submit" value="Enregistrer">
                        </div>
                        <div class="boxy">
                            <input type="button" id="ajoute" value="Ajouter une question">
                        </div>                        
                    </form>
                </div>
            </div>
        </div>                                              
    </nav>
<?php require '../templates/footer.php' ?>