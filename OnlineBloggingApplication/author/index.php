
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HIST>BMS>Admin</title>
</head>
<body>
<?php 
	require_once("session.php");
?>
	<center>
		<h1>HIST BMS (Author Penal)</h1>
		<hr />
		<h3>
			<p>Welcome <?php echo $_SESSION['user']['full_name']; ?>
			<a style="float: right;" href="../logout.php"><span >Logout Here..</span></a>
			<span style="clear:both;"></span>
			</p>
		</h3>
		<hr/>
	</center>

</body>
</html>