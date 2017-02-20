<!DOCTYPE html>
<html>
<head>
	<title>Currency Converter</title>
	<link rel="stylesheet" type="text/css" href="css/index-style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
<style type="text/css">
	body {
    background-image: url('img/pink.png');
	}

	</style>
</head>
<body>
<form action="process.php" method="post">
	<div class ="wrapper">
		<div class="container">
			<h1>Currency Converter<br></h1>
				
			<div class="in-container">
				<p>Amount (THB)</p>
				<input type="text" name="money" class ="amount" size="20" maxlength="80" />
    			
				<p>Monetary</p>
	    		<select  class ="change" name="coin">
			        <!-- <option value=""></option> -->
			        <option value="1">Euro (EUR)</option>
			        <option value="2">United States Dollar (USD)</option>
			        <option value="3">Yen (JPY)</option>
			     </select>    
		    

		    	<button class="btn" type="submit">Calculate</button>
		    </div>
		</div><!-- container -->
	</div><!-- wrapper -->
</form>


</body>
</html>