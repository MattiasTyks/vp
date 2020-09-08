<?php
$username = "Mattias";
$fulltimenow = date("d.m.y H:i:s");
$partofday = "lihtsalt aeg";
$hournow=date("H");
if($hournow < 6){
	$partofday = "unseaeg";
}
if($hournow >= 8 && $hournow <= 18){
	$partofday = "unseaeg";
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <title>Veebileht</title>

</head>
<body>
  <h1><?php echo $username; ?></h1>
  <p>See veebileht on loodud õppetöö kaigus ning ei sisalda mingit tõsiseltvõetavat sisu!</p>
  <p>See konkreetne left on loodud veebiprogrameerimise kursusel aasta 20202 sügissemestril<a href="http://www.tlu.ee"> Tallinna Ülikooli</a>
  Digitehnoloogia instituudis</p>
  <br>
<p><?php echo $fulltimenow; ?></p>
<p><?php echo "Praegu on: " . $hournow; ?></p>
</body>
</html>