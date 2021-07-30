<?php  
session_start();
//require_once 'config.php';
?>

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
        <h1>Zone pour les joueurs</h1>     
    </header>
    <nav>	
        <div class="controller__AppWrapper-sc-1m4rw0k-0 test">
            <div class="background__Background-sc-15eg2v3-0 test1">
                <aside class="background-shapes__CircleShape-waao7z-1 gVOCQO"></aside>
                <aside class="background-shapes__CircleShape-waao7z-1 eanPtI"></aside>
                <div class="box">
                    <form class="form" method="post" action="affichage.php">
                        <div>
                            <label for="pseudo">Votre pseudo :</label>
                            <input id="pseudo" class="champs" placeholder="Pseudo" name="pseudo" maxlength="20">
                        </div>
                        <div>
                            <label for="pin">Nom du quiz :</label>
                            <input name="pin" id="pin" class="champs" placeholder="Nom du quiz">
                        </div>
                        <div class="button" id="submit">
                            <input name="start" type="submit" value="Valider">                            
                        </div>
                        <div>
                            <p class="lien">Vous voulez revenir en arrière c'est <a href="../index.php" class="a"> ici </a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>    
    </nav>
    <script src="./dist/main.js"></script>    
<?php require "../templates/footer.php" ?>