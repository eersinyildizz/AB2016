<?php  session_start();
	//quiz soruları olcak.
	// questions dan soruları çekecek ve ekranda göstercek.

	//oturum açık mı diye kontrol edecek
	
	// kişi geldiğinde
	// ilk defa mı geliyor?
		// başlangıç işlemlerini yap
		// ilk soruyu göster
	// önceki sorudan mı geliyor
		// gelen sorunun yanıtını kontrol et
		// sonraki soruyu göster
	// sonuçtan tekrar için mi geliyor
		// ilk defa geliyormuş gibi yap


	include "inc/header.php";
	include "questions.php";
// ilk defa mı gitip girmediğni kontrol ettik
	if (!isset($_SESSION["isStart"])):
		$_SESSION["soruSayisi"] = count($questions);
		$_SESSION["cevaplananSoruSayisi"] = 0;
		$_SESSION["dogruCevapSayisi"] = 0;
		$_SESSION["isStart"] = true;
 	endif;
 	
 	//post u konrol etdicez 
 	if (isset($_POST["answer"])) {
 		if ($questions[$_SESSION["cevaplananSoruSayisi"]][2] == $_POST["answer"]) {
 			
 			$_SESSION["dogruCevapSayisi"]++;

 		}
 		if (($_SESSION["cevaplananSoruSayisi"]+1) == $_SESSION["soruSayisi"]) {
 			
 			header("Location: form.php");
 		}
 		$_SESSION["cevaplananSoruSayisi"]++;
 	}
 	

 	//soracağımı soruyu çekelim
 	
 	$activeQuestions = $questions[$_SESSION["cevaplananSoruSayisi"]];

 
 ?>
 	<h1>Question <?=$_SESSION["cevaplananSoruSayisi"]+1 ?></h1>
 	<form action="" method="post">
 		<h2><?=$activeQuestions[0]?></h2>
 		<?php foreach ($activeQuestions[1] as $harf => $secenek) { ?>
 			<div class="radio">
  				<label><input type="radio" name="answer" value="<?=$harf?>" ><?=$harf.")  ".$secenek?></label>
			</div>
 			
 		<?php	} ?>
 		  <button type="submit" class="btn btn-success ">Next</button>
 	</form>

 <?php include "inc/footer.php"; ?>