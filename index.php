<?php ob_start(); 
session_start();
//require_once 'config.php';
?>
<?php 
    if( !empty( $_POST )){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->login( $_POST );
			if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
				$_SESSION['success'] = 'Vous êtes connecté';
				header('Location: home.php');exit;
			}
		} catch (Exception $e) {
			$error = $e->getMessage();
			$_SESSION['error'] = $error;
		}
	}
	//print_r($_SESSION);
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
		header('Location: home.php');exit;
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
    <nav class="box">
        <form class="form" method="post" action="attente.php">
            <div>
                <label for="pseudo">Pseudo :</label>
                <input id="pseudo" class="champs" placeholder="Pseudo" name="pseudo" maxlength="20">
            </div>
            <div>
                <label for="pin">Code pin :</label>
                <input name="pin" id="pin" class="champs" placeholder="Code Pin" maxlength="10">
            </div>
            <div class="button" id="submit">
                <input name="start" type="submit" value="valider">
            </div>
        </form>
    </nav>    
<?php require "./templates/footer.php" ?>