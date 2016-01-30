<?php 
	session_start();
	error_reporting(0);
	include "header/header.php";
	include "questions.php";
	

if ($_POST["answer"]==$questions[$_SESSION['questionNumber']][2]) {
			$_SESSION["dogrucevap"]++;
			}
	
if (!isset($_SESSION["durum"]) ) {
	

	$_SESSION["numberOfquiz"] = count($questions);
	
	$_SESSION["questionNumber"] = 0;
	$_SESSION["answered-Questions"] = 0;
	$_SESSION["durum"] = true;
	$_SESSION["dogrucevap"]=0;
	$_SESSION["yanliscevap"]=0;
	 
	}
	else{


	 $_SESSION["questionNumber"]++;
	 $_SESSION["answered-Questions"]++;
	

	 if (($_SESSION["questionNumber"])==$_SESSION["numberOfquiz"]) {
	 	
	 	header("Location:survey.php");	 }
	}
 ?>
<form action="quiz.php" method="post">
	<h1>Question <?=$_SESSION["questionNumber"]+1?></h1>
	<h2><?=$questions[$_SESSION['questionNumber']][0]?></h2>

	<?php  
		foreach ($questions[$_SESSION['questionNumber']][1] as $key => $value) { ?>
			<label class="radio-inline"><input type="radio" name="answer" value="<?php echo $key ?>" ><?php echo $key.")  ".$value; ?></label><br>

	<?php } ?>
	 <br><button type="submit" class="btn btn-primary">Yanıtla</button>
</form>

