<?php
  $username = "Mattias";
  $fulltimenow = date("d.m.Y H:i:s");
  $hournow = intval(date("H"));
  $partofday = "lihtsalt aeg";
  if($hournow >= 21 ){
	  $partofday = "uneaeg";
  }
  elseif($hournow >= 10 and $hournow <= 17){
	  $partofday = "ärkamise aeg";
  }
  elseif($hournow >= 18){
	  $partofday = "õppimise aeg";
  }
  elseif($hournow >= 19){
	  $partofday = "söömise aeg";
  }
  elseif($hournow >= 20){
	  $partofday = "olemise aeg";
  }
  
 
  $semesterStart = new DateTime("2020-8-31");
  $semesterEnd  = new DateTime("2020-12-13");
  $semesterDuration = $semesterStart->diff($semesterEnd);
  $today = new DateTime("now");



  
	$fromSemesterStart = $semesterStart -> diff($today);
	$semesterInfo = "<p>Info semestri kohta pole kattesaadav.</p>";
	if ($fromSemesterStart -> format("%r%a") > 0 and $fromSemesterStart -> format("%r%a") <= $semesterDuration -> format("%r%a")) {
        $semesterInfo = "<p>Semester on taies hoos: ";
        $semesterInfo .= round($fromSemesterStart->format("%r%a") / $semesterDuration->format("%r%a") * 100, 1) . "% tehtud";
    }

  
  
?>
<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <title><?php echo $username; ?> programmeerib veebi</title>

</head>
<body>
  <h1><?php echo $username; ?></h1>
  <p>See veebileht on loodud õppetöö kaigus ning ei sisalda mingit tõsiseltvõetavat sisu!</p>
  <p>See konkreetne leht on loodud veebiprogrammeerimise kursusel aasta 2020 sügissemestril <a href="https://www.tlu.ee">Tallinna Ülikooli</a> Digitehnoloogiate instituudis.</p>
  <p>Lehe avamise hetk: <?php echo $fulltimenow; ?>.</p>
  <p><?php echo "Praegu on " .$partofday ."."; ?></p>
  <p><?php echo $semesterInfo; ?></p>
</body>
</html>