<?php ob_start(); 
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
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Question pour de l'oseille !</title>
</head>
<body>
    <header>  
        <h1> Bienvenue sur le Quiz qui vous fait perdre du fric</h1>     
    </header>
    <nav>	
        <div class="controller__AppWrapper-sc-1m4rw0k-0 test">
            <div class="background__Background-sc-15eg2v3-0 test1">
                <aside class="background-shapes__CircleShape-waao7z-1 gVOCQO"></aside>
                <aside class="background-shapes__CircleShape-waao7z-1 eanPtI"></aside>
                <div class="boxi">
                    <a href="./creation/index.php" class="valid">Créer votre questionnaire</a>
                </div>
                <div class="boxi1">
                    <a href="./player/index.php" class="valid">Rejoindre une partie</a>
                </div>
            </div>
        </div>    
    </nav>
    <script src="./dist/main.js"></script>    
<?php require "./templates/footer.php" ?>