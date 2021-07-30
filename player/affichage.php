<?php session_start(); ?>
<?php

require '../Connexion.php';

$dbh = (new Connexion())->conect();

	
	$quiz = $_SESSION['quiz'];

	$sth = $dbh->prepare('SELECT id, nom FROM quiz WHERE nom = :nom ');
	$sth->bindValue(':nom', $quiz);
	$sth->execute();
	
	$data = $sth->fetch();
	$row  = $sth->rowCount();
	
	
	if ($row > 0 ){

		$sth = $dbh->prepare('SELECT id, question, points, id_quiz FROM questions WHERE id_quiz = :id_quiz');
		$sth->bindValue(':id_quiz', $data['id']);
		$sth->execute();

		$qdata = $sth->fetch();
		$row = $sth->rowcount();
		$question = $qdata['question'];
		$number = $qdata['id'];
		$total = $row;

		if ($row > 0 ){
			
			$sth = $dbh->prepare('SELECT id_question, reponse_bonne, reponse FROM reponses WHERE id_question = :id_question');
			$sth->bindValue(':id_question', $qdata['id']);
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


      <main>
      <div class="container">
        <div class="current">Question <?php echo $number; ?> / <?php echo $total; ?></div>
	<p class="question">
	   <?php echo $question ?>
	</p>
	<form method="post" action="process.php">
	      <ul class="choices">
	        <?php foreach ( $rdatas as $rdata){
				if ( $qdata['id'] = $rdata['id_question']){

				echo	'<li><input name="choice" type="radio" />';
		  		echo $rdata["reponse"]; 
					'</li>';
				}
			}?>
		
	      </ul>
	      <input type="submit" value="submit" />
	      <input type="hidden" name="number" value="<?php echo $number; ?>" />
	</form>
      </div>
    </div>
    </main>


    <footer>
      <div class="container">
      	   Copyright &copy; 2015, PHP Quizzer
      </div>
    </footer>
  </body>
</html>