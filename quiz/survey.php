<?php session_start();
	// testi bitiren kişiler burdaki anketi doldurarak sonuçları görebilecek...	
	include "header/header.php";
 ?>
 <h1>Quizi tamamladınız.</h1>
 <form action="" method="post">
 <button type="submit" class="btn btn-success" name="submit" >Sonucları Gör</button>
 </form>
 <?php if (isset($_POST["submit"])) {
 	$yanliscavap=$_SESSION["numberOfquiz"]-$_SESSION["dogrucevap"];
 	$dogruyuzdesi = 100/$_SESSION["numberOfquiz"];
 	$dogrucevap=$dogruyuzdesi*$_SESSION["dogrucevap"];
 	$yanliscavapYuzdesi=$dogruyuzdesi*$yanliscavap;
 	
 	?> 
 	<h2>Doğru cevap sayısı : <?=$_SESSION["dogrucevap"]?></h2> <div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="<?php echo $dogrucevap; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $dogrucevap; ?>%">
    <?php echo $dogrucevap; ?>
  </div>
</div>
 
 	<h2>Yanlış Cevap Sayısı : <?=$yanliscavap?></h2>
 	<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="<?php echo $yanliscavapYuzdesi; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $yanliscavapYuzdesi; ?>%">
    <?php echo $yanliscavapYuzdesi; ?>
  </div>
</div>
 <?php } ?>

 <br><a href="aktar.php"><button type="button" class="btn btn-warning">Tekrar Dene</button></a>

