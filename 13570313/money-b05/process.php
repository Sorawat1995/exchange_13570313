<!DOCTYPE >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/process-style.css">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<title>Currency Processing</title>

<style type="text/css">
  body {
    background-image: url('img/pink.png');
  }

  </style>
</head>

<body>
<div align="center">
   <div class="container">
   <h2>Currency Processing</h2>
      <div class="img-con"><img src="img/coin.png" style="width: 100px;height: 100px; margin-top: 5px;"></div>
    <div class="in-container">
  <?php
  $money=$_POST['money'];   
  $coin=$_POST['coin'];
 
 
  switch ($coin) {
   case 1:
    $coin_m=0.03;
    $sum=$money*$coin_m;
    echo "1 (THB) = ".$coin_m." (EUR)"."<br><br>";
    echo "Amount ".number_format($money,2)." Baht  =  ".number_format($sum,2)."  Euro (EUR)";
    break;
   case 2:
    $coin_m=0.03;
    $sum=$money*$coin_m;
    echo "1 (THB) = ".$coin_m." (USD)"."<br><br>";
    echo "Amount ".number_format($money,2)." Baht  =  ".number_format($sum,2)."  Dollar (USD)";
    break;
   case 3:
    $coin_m=3.58757333;
    $sum=$money*$coin_m;
    echo "1 (THB) = ".$coin_m." (JPY)"."<br><br>";
    echo "Amount ".number_format($money,2)." Baht  =  ".number_format($sum,2)."  Yen (JPY)";
    break;    
  }
  ?>
    <a href="index.php"><button class="btn" type="submit">Back</button></a>
  </div>
 
</div>
</body>
</html>

