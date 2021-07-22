<?php ob_start();
session_start();
//require_once 'config.php';
?>
<!--ouverture d'une connexion à la BDB quizz-->
<?php
$objetPdo = new PDO('mysql:host=localhost;dbname=quizz', 'Ludovic', 'Breton.1505');

//preparation de la requête d'insertion (SQL)
$pdoStat = $objetPdo->prepare('INSERT INTO users VALUES (NULL, :pseudo, :pin)');

//on lie chaque marqueur à une valuer
$pdoStat->bindValue(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
$pdoStat->bindValue(':pin', $_POST['pin'], PDO::PARAM_STR);

//éxécution de la requète préparée
$insertIsOk = $pdoStat->execute();

if ($insertIsOk) {
    $message = 'Le contact a été ajouté dans la BDD';
} else {
    $message = 'Echec de l\insertion';
}
?>
<!DOCTYPE html>
<html lang="en">

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
                <div class="box">
                </div>
            </div>
        </div>
    </nav>
    <p class="count">You will be redirected in <span id="counter">30</span> second(s).</p>
    <script type="text/javascript">
        function countdown() {
            var i = document.getElementById('counter');
            if (parseInt(i.innerHTML) <= 0) {
                location.href = 'login.php';
            }
            i.innerHTML = parseInt(i.innerHTML) - 1;
        }
        setInterval(function() {
            countdown();
        }, 1000);
    </script>
</body>

</html>
<?php require "./templates/footer.php" ?>