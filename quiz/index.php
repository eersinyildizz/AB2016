<?php session_start();
	// en başlangıç sayfası olacak. 
	//hoşgwldiniz falan olcak - start quiz butonu olcak.
	include "inc/header.php";
	include "questions.php";
 ?>
 <h1>Basit quiz sistemine hoşgeldiniz</h1>
 <p>Birazdan <?=count($questions) ?> tane quiz sorusunu cevaplayacaksınız. Hazır mısın??</p>
<a href="quiz.php"><button type="button" class="btn btn-primary btn-lg">Quize Başla</button></a>

 <?php include "inc/footer.php"; ?>