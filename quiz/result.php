<?php session_start();
	//burada quiz sonuclarının görecek
	// tekrar quiz çözecekse destroy yapılarak, quiz.php sayfasına yönlendirilecek.
	include "inc/header.php";

	$yanlisCevapSayisi = $_SESSION["soruSayisi"] - $_SESSION["dogruCevapSayisi"];

	$_SESSION["dogruCevapSayisi"];

	$yuzde = 100/$_SESSION["soruSayisi"];
	$dogrulukYuzdesi = $yuzde*$_SESSION["dogruCevapSayisi"];
	$yanlislikYuzdesi = $yuzde*$yanlisCevapSayisi;

	//burada formdan alınan bilgileri kullannalım
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password =$_POST["password"];
 ?>
 	<h1><?=$name?> Quiz Sonucu	 </h1>
	<div class="alert alert-info">
    	<strong>Doğru cevap sayısı : </strong> <?= $_SESSION["dogruCevapSayisi"]?>
	</div>
 	
 	<div class="progress">
    	<div class="progress-bar progress-bar-striped active" role="progressbar"
  		aria-valuenow="<?php echo $dogrulukYuzdesi; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $dogrulukYuzdesi; ?>%">
    	%<?php echo $dogrulukYuzdesi; ?>
    	</div>
	</div>

	<div class="alert alert-danger">
    	<strong>Yanlış cevap sayısı: </strong> <?= $yanlisCevapSayisi?>
	</div>
 	
 	<div class="progress">
    	<div class="progress-bar progress-bar-striped active" role="progressbar"
  		aria-valuenow="<?php echo $yanlislikYuzdesi; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $yanlislikYuzdesi; ?>%">
    	%<?php echo $yanlislikYuzdesi; ?>
    	</div>
	</div>

	<a href="destroy.php" style="text-decoration:none;"><button type="button" class="btn btn-success btn-block">Quizi Tekrar Çöz</button></a>