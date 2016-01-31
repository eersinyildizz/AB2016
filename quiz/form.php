<?php 
session_start();
include "inc/header.php";
 ?>
 <div class="alert alert-success">
  <strong>Quizi tamamladınız.</strong> Sonuçları görmek için formu doldurunuz :)
</div>
 

 	<form role="form" method="post" action="result.php" >
		<div class="form-group">
    		<label for="text">Adınız:</label>
    		<input type="text" class="form-control" name="name" required>
  		</div>
  		<div class="form-group">
    		<label for="email">e-mailiniz:</label>
    		<input type="email" class="form-control" name="email" required>
  		</div>
  		<div class="form-group">
    		<label for="pwd">Parolanız:</label>
    		<input type="password" class="form-control" name="password" required>
  		</div>
  		
  		<button type="submit" class="btn btn-info btn-block">Quiz Sonucumu Göster</button>
	</form>

<?php include "inc/footer.php"; ?>