<?php session_start();

require '../Connexion.php';

$dbh = (new Connexion())->conect();

$quiz = $_SESSION['quiz'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Salle d'attente</title>
</head>
<body>
<header>  
        <h1><?php echo $quiz ?></h1>    
    </header>
    <nav>	
        <div class="controller__AppWrapper-sc-1m4rw0k-0 test">
            <div class="background__Background-sc-15eg2v3-0 test1">
                <aside class="background-shapes__CircleShape-waao7z-1 gVOCQO"></aside>
                <aside class="background-shapes__CircleShape-waao7z-1 eanPtI"></aside>
                <div class="boxi">
                    <a href="../player/index.php" class="valid">Start game</a>
                </div>
            </div>
        </div>    
    </nav>
    <?php session_abort(); ?>    
</body>
</html>