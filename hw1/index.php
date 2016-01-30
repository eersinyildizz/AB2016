<?php 
	$notlar = ["ersin yildiz" => 55.6, "ali" => 25, "veli" => 90, "deli" => 80];
	$buyuktenKucuge = $notlar;
	$kucuktenBuyuge = $notlar;
	arsort($buyuktenKucuge);
	asort($kucuktenBuyuge);
	$toplam=0;
?>

<table border="2">
	<th colspan="2">Akademik Bilisim</th>
		<tr>
			<td><b>Kisi</b></td>
			<td><b>Notu</b></td>
		</tr>
		<?php 
			foreach ($buyuktenKucuge as $key => $value) {
			 ?>
		<tr>
			<td><?php echo $key; ?></td>
			<td><?php echo $value; ?></td>
		</tr>
		<?php 
		$toplam=$toplam+$value;
		} ?>
</table>

<p>En yuksek not : <?php 
	foreach ($buyuktenKucuge as $key => $value) {
		echo $key."--".$value;
		break;
	}?></p>

<p>En dusuk not : <?php 
	foreach ($kucuktenBuyuge as $key => $value) {
		echo $key."--".$value;
		break;
	} ?></p>

<p>Standart Sapma : <?php 
$sonuc=$toplam/count($notlar);
echo $sonuc; ?></p>

	
	