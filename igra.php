<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	
	$t1=0;
	$t2=0;
	$t3=0;
	
	if(isset($_POST{'ime1'})&&isset($_POST['ime2'])&&isset($_POST['ime3']))
	{
		$_SESSION['n1'] = $_POST['ime1'];
		$_SESSION['n2'] = $_POST['ime2'];
		$_SESSION['n3'] = $_POST['ime3'];
		
		$_SESSION['kocke'] = $_POST['stkock'];
		$_SESSION['ng'] = $_POST['strund'];
		
		$_SESSION['ni'] = 1;
		
		$_SESSION['to1'] = 0;
		$_SESSION['to2'] = 0;
		$_SESSION['to3'] = 0;
		
		$t1=0;
		$t2=0;
		$t3=0;
	}
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
	
	<link rel="stylesheet" href="css/stil2.css" type="text/css" media="all" />		

</head>
<body>

	<div id="naslov">
		<a class="naslov1">GOOD LUCK</a>
	</div>
	
	<div id="polje">
		
		<div id="kocka1">
			<p class="textIme">
			<?php
				echo $_SESSION['n1'];
				echo "<br />"; 
			?>
			</p>
			<?php
				if($_SESSION['kocke']==1)
				{
					$_SESSION['st']=0;
					$x1=rand(1,6);
					echo "<img style='width:63px; height:63px;' src='dice/dice{$x1}.jpg'"."<br />";
					$_SESSION['st']=$x1;
					echo "<br />";
					echo "<a class=\"naprej\">THROW:".$_SESSION['st']."</a>";
					$_SESSION['to1'] = $x1+$_SESSION['to1'];
					echo "<br />";
					echo "<a class=\"naprej\">SCORRE:".$_SESSION['to1']."</a>";
				}
				else if($_SESSION['kocke']==2)
				{
					$_SESSION['st']=0;
					$x1=rand(1,6);
					$x2=rand(1,6);
					echo "<img style='width:63px; height:63px;' src='dice/dice{$x1}.jpg'"."<br />";
					echo "<img style='width:63px; height:63px;' src='dice/dice{$x2}.jpg'"."<br />";
					$_SESSION['st']=$x1+$x2;
					$_SESSION['to1'] = $x1+$x2+$_SESSION['to1'];
					echo "<br />";
					echo "<a class=\"naprej\">THROW:".$_SESSION['st']."</a>";
					echo "<br />";
					echo "<a class=\"naprej\">SCORRE:".$_SESSION['to1']."</a>";
				}
				else if($_SESSION['kocke']==3)
				{
					$_SESSION['st']=0;
					$x1=rand(1,6);
					$x2=rand(1,6);
					$x3=rand(1,6);
					echo "<img style='width:63px; height:63px;' src='dice/dice{$x1}.jpg'"."<br />";
					echo "<img style='width:63px; height:63px;' src='dice/dice{$x2}.jpg'"."<br />";
					echo "<img style='width:63px; height:63px;' src='dice/dice{$x3}.jpg'"."<br />";
					$_SESSION['st']=$x1+$x2+$x3;
					$_SESSION['to1']=$x1+$x2+$x3+$_SESSION['to1'];
					echo "<br />";
					echo "<a class=\"naprej\">THROW:".$_SESSION['st']."</a>";
					echo "<br />";
					echo "<a class=\"naprej\">SCORRE:".$_SESSION['to1']."</a>";
				}
			?>
		</div>
		
		<div id="kocka2">
			<p class="textIme">
			<?php
				echo $_SESSION['n2'];
				echo "<br />"; 
			?>
			</p>
			<?php
				if($_SESSION['kocke']==1)
				{
					$_SESSION['st']=0;
					$x1=rand(1,6);
					echo "<img style='width:63px; height:63px;' src='dice/dice{$x1}.jpg'"."<br />";
					$_SESSION['st']=$x1;
					$_SESSION['to2'] = $x1+$_SESSION['to2'];
					echo "<br />";
					echo "<a class=\"naprej\">THROW:".$_SESSION['st']."</a>";
					echo "<br />";
					echo "<a class=\"naprej\">SCORRE:".$_SESSION['to2']."</a>";
				}
				else if($_SESSION['kocke']==2)
				{
					$_SESSION['st']=0;
					$x1=rand(1,6);
					$x2=rand(1,6);
					echo "<img style='width:63px; height:63px;' src='dice/dice{$x1}.jpg'"."<br />";
					echo "<img style='width:63px; height:63px;' src='dice/dice{$x2}.jpg'"."<br />";
					$_SESSION['st']=$x1+$x2;
					$_SESSION['to2'] = $x1+$x2+$_SESSION['to2'];
					echo "<br />";
					echo "<a class=\"naprej\">THROW:".$_SESSION['st']."</a>";
					echo "<br />";
					echo "<a class=\"naprej\">SCORRE:".$_SESSION['to2']."</a>";
				}
				else if($_SESSION['kocke']==3)
				{
					$_SESSION['st']=0;
					$x1=rand(1,6);
					$x2=rand(1,6);
					$x3=rand(1,6);
					echo "<img style='width:63px; height:63px;' src='dice/dice{$x1}.jpg'"."<br />";
					echo "<img style='width:63px; height:63px;' src='dice/dice{$x2}.jpg'"."<br />";
					echo "<img style='width:63px; height:63px;' src='dice/dice{$x3}.jpg'"."<br />";
					$_SESSION['st']=$x1+$x2+$x3;
					$_SESSION['to2']=$x1+$x2+$x3+$_SESSION['to2'];
					echo "<br />";
					echo "<a class=\"naprej\">THROW:".$_SESSION['st']."</a>";
					echo "<br />";
					echo "<a class=\"naprej\">SCORRE:".$_SESSION['to2']."</a>";
				}
			?>
		</div>
		
		<div id="kocka3">
		<p class="textIme">
			<?php
				echo $_SESSION['n3'];
				echo "<br />"; 
			?>
			</p>
			<?php
				if($_SESSION['kocke']==1)
				{
					$_SESSION['st']=0;
					$x1=rand(1,6);
					echo "<img style='width:63px; height:63px;' src='dice/dice{$x1}.jpg'"."<br />";
					$_SESSION['st']=$x1;
					$_SESSION['to3'] = $x1+$_SESSION['to3'];
					echo "<br />";
					echo "<a class=\"naprej\">THROW:".$_SESSION['st']."</a>";
					echo "<br />";
					echo "<a class=\"naprej\">SCORRE:".$_SESSION['to3']."</a>";
				}
				else if($_SESSION['kocke']==2)
				{
					$_SESSION['st']=0;
					$x1=rand(1,6);
					$x2=rand(1,6);
					echo "<img style='width:63px; height:63px;' src='dice/dice{$x1}.jpg'"."<br />";
					echo "<img style='width:63px; height:63px;' src='dice/dice{$x2}.jpg'"."<br />";
					$_SESSION['st']=$x1+$x2;
					$_SESSION['to3'] = $x1+$x2+$_SESSION['to3'];
					echo "<br />";
					echo "<a class=\"naprej\">THROW:".$_SESSION['st']."</a>";
					echo "<br />";
					echo "<a class=\"naprej\">SCORRE:".$_SESSION['to3']."</a>";
				}
				else if($_SESSION['kocke']==3)
				{
					$_SESSION['st']=0;
					$x1=rand(1,6);
					$x2=rand(1,6);
					$x3=rand(1,6);
					echo "<img style='width:63px; height:63px;' src='dice/dice{$x1}.jpg'"."<br />";
					echo "<img style='width:63px; height:63px;' src='dice/dice{$x2}.jpg'"."<br />";
					echo "<img style='width:63px; height:63px;' src='dice/dice{$x3}.jpg'"."<br />";
					$_SESSION['st']=$x1+$x2+$x3;
					$_SESSION['to3']=$x1+$x2+$x3+$_SESSION['to3'];
					echo "<br />";
					echo "<a class=\"naprej\">THROW:".$_SESSION['st']."</a>";
					echo "<br />";
					echo "<a class=\"naprej\">SCORRE:".$_SESSION['to3']."</a>";
				}
			?>
		</div>
	</div>
	
	
	<div id="konec">
		<div id="naprej">
			<?php
				echo "<a class=\"naprej\">NUMBER OF THROWS: ".$_SESSION['ni']."/".$_SESSION['ng']."</a><br>";
				if($_SESSION['ni']<$_SESSION['ng'])
					echo "<input type=\"button\" id=\"gumb\" name=\"vrzi_gumb\" value=\"Throw\" onclick=\"reloadPage()\">";
				else
				{
					echo "<input type=\"button\" class=\"gumb\" name=\"rezultat_gumb\" value=\"Results\" onclick=\"rezultati()\">";
				}
			?>
		</div>
	</div>
	
	<?php
			if($_SESSION['ni']<$_SESSION['ng'])
			{
				$st=$_SESSION['ni'];
				$_SESSION['ni']=$st+1;
			}	
	?>
	<script>
		function reloadPage() {
			location.href='igra.php';
		}
			
		function rezultati() {
			location.href='konec.php';
		}
	</script>
	
</body>
</html>
