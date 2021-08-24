<?php session_start(); ?>
<?php

require '../Connexion.php';

$dbh = (new Connexion())->conect();

	//on récupère la donnée du nom
	$quiz = $_POST['pin'];

	$sth = $dbh->prepare('SELECT id, nom FROM quiz WHERE nom = :nom ');
	$sth->bindParam(':nom', $quiz);
	$sth->execute();
	
	$data = $sth->fetch();
	$row  = $sth->rowCount();

	if ($row > 0 ){
		/*if (isset($_GET['numquestion'])){

			$current_question = $_GET['numquestion'] - 1; 
		} else {
			$current_question = 0;
		}*/

		$sth = $dbh->prepare('SELECT id, question, points, id_quiz FROM questions WHERE id_quiz = :id_quiz /*LIMIT 1 OFFSET :current_question*/ ');
		$sth->bindParam(':id_quiz', $data['id']);
		/*$sth->bindParam(':current_question', $current_question, PDO::PARAM_INT);*/
		$sth->execute();

		$qdatas = $sth->fetch();
		$row = $sth->rowcount();
					
			$questions = $qdatas['question'];
			
			$number = $qdatas['id'];
			$total = $row;
			

		if ($row > 0 ){
			
			$sth = $dbh->prepare('SELECT id_question, reponse_bonne, reponse FROM reponses WHERE id_question = :id_question');
			$sth->bindValue(':id_question', $number);
			$sth->execute();

			$rdatas = $sth->fetchAll(PDO::FETCH_ASSOC);
																
		}
	
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Quiz</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css" />
  </head>
  <body>
    <div id="container">
      <header>
        <div class="container">
          <h1><?php echo $quiz ?></h1>
	</div>
      </header>

	  <nav>	
        <div class="controller__AppWrapper-sc-1m4rw0k-0 test">
            <div class="background__Background-sc-15eg2v3-0 test1">
                <aside class="background-shapes__CircleShape-waao7z-1 gVOCQO"></aside>
                <aside class="background-shapes__CircleShape-waao7z-1 eanPtI"></aside>                
				<div class="current">Question <?php echo $number; ?> / <?php echo $total; ?></div>
				<p>
				<?php 
					echo '<p>'.$questions.'</p>';
				 ?>
				</p>
				<form method="post" action="process.php">
					<ul class="choices">
						<?php foreach ( $rdatas as $rdata){
							if ( $qdata['id'] = $rdata['id_question']){
							echo	'<li><input name="choice" type="radio" />';
							echo ''.$rdata["reponse"]. '</li>';
							}
						}?>					
					</ul>
					<input type="submit" value="submit" />
					<input type="hidden" name="number" value="<?php echo $number; ?>" />
				</form>
            </div>
        </div>    
    </nav>
      <main>
      
      </div>
    </div>
    </main>

<?php require '../templates/footer.php' ?>