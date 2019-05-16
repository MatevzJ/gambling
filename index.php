<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sl" lang="sl">
<head>		
	<title>Spletna stran</title>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="copyright" content="" />
	<meta name="author" content="" />
	<meta name="rating" content="general" />
	<meta name="expires" content="Never" />
	<meta name="revisit-after" content="30 Days" />

	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	
	<link rel="stylesheet" href="css/stil.css" type="text/css" media="all" />		

</head>
<body>

	<div id="naslov">
		<a class="naslov">GAMBLING ROOM</a>
	</div>
	
	<div id="miza"></div>
	
	<form action="igra.php" method="post">
	
	<div id="prijava">
		<div id="igralec1">
			<p class="text">IME</p>
			<input type="text" value="" name="ime1">
			
		</div>
		
		<div id="igralec2">
			<p class="text">IME</p>
			<input type="text" value="" name="ime2">
		</div>
		
		<div id="igralec3">
			<p class="text">IME</p>
			<input type="text" value="" name="ime3">
		</div>
		
		<div id="izbira">
		
			<a class="text1">Stevilo kock</a>
			<select name="stkock">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			
			
			<a class="text2">Stevilo rund</a>
			<select name="strund">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
		</div>
	</div>
	<div id="naprej">
		<input type="submit" value="naprej" id="gumbNaprej">	
	</div>
	</form>
	
	<?php
		
	?>
	
</body>
</html>
