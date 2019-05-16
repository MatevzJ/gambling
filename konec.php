<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	
	
?>
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
	
	<link rel="stylesheet" href="css/stil3.css" type="text/css" media="all" />		

</head>
<body>
	
	
	
	
	<div id="glavni">
	
		<div id="glava">
			<a class="naslov">RESULTS</a>
		</div>
		
		<div id="rezultati">
			<div id="drugi">
			<a class="konec">2</a><a class="konec2">nd</a>
			<p></p>
			<a class="ime">
				<?php
						if($_SESSION['to1']>$_SESSION['to2']&&$_SESSION['to1']<$_SESSION['to3']||$_SESSION['to1']<$_SESSION['to2']&&$_SESSION['to1']>$_SESSION['to3'])
						{
							echo $_SESSION['n1'];
							echo "<br />";
							echo "SCORE:".$_SESSION['to1'];
						}
						else if($_SESSION['to2']>$_SESSION['to1']&&$_SESSION['to2']<$_SESSION['to3']||$_SESSION['to2']<$_SESSION['to1']&&$_SESSION['to2']>$_SESSION['to3'])
						{
							echo $_SESSION['n2'];
							echo "<br />";
							echo "SCORE:".$_SESSION['to2'];
						}
						else if($_SESSION['to3']<$_SESSION['to1']&&$_SESSION['to3']>$_SESSION['to2']||$_SESSION['to3']>$_SESSION['to1']&&$_SESSION['to3']<$_SESSION['to2'])
						{
							echo $_SESSION['n3'];
							echo "<br />";
							echo "SCORE:".$_SESSION['to3'];
						}
					?>
			</a>
			</div>
			
			<div id="prvi">
				<a class="konec">1</a><a class="konec2">st</a>
				<p></p>
				<a class="ime">
					<?php
						if($_SESSION['to1']>$_SESSION['to2']&&$_SESSION['to1']>$_SESSION['to3'])
						{
							echo $_SESSION['n1'];
							echo "<br />";
							echo "SCORE:".$_SESSION['to1'];
						}
						else if($_SESSION['to2']>$_SESSION['to1']&&$_SESSION['to2']>$_SESSION['to3'])
						{
							echo $_SESSION['n2'];
							echo "<br />";
							echo "SCORE:".$_SESSION['to2'];
						}
						else if($_SESSION['to3']>$_SESSION['to1']&&$_SESSION['to3']>$_SESSION['to2'])
						{
							echo $_SESSION['n3'];
							echo "<br />";
							echo "SCORE:".$_SESSION['to3'];
						}
					?>
				</a>
			</div>
			
			<div id="tretji">
			<a class="konec">3</a><a class="konec2">rd</a>
			<p></p>
			<a class="ime">
			<?php
						if($_SESSION['to1']<$_SESSION['to2']&&$_SESSION['to1']<$_SESSION['to3'])
						{
							echo $_SESSION['n1'];
							echo "<br />";
							echo "SCORE:".$_SESSION['to1'];
						}
						else if($_SESSION['to2']<$_SESSION['to1']&&$_SESSION['to2']<$_SESSION['to3'])
						{
							echo $_SESSION['n2'];
							echo "<br />";
							echo "SCORE:".$_SESSION['to2'];
						}
						else if($_SESSION['to3']<$_SESSION['to1']&&$_SESSION['to3']<$_SESSION['to2'])
						{
							echo $_SESSION['n3'];
							echo "<br />";
							echo "SCORE:".$_SESSION['to3'];
						}
					?>
			</a>
			</div>
		</div>
		
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script  src="jquery.fireworks.js"></script>
	<script>
		$('body').fireworks({
			sound: false, // sound effect
			opacity: 0.9,
			width: '100%',
			height: '100%'
		});
	</script>

</body>
</html>
