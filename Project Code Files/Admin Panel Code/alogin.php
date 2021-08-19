<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php include 'bankheader.php';?>
	<table align="center" cellspacing="8" cellpadding="8">
		<form method="POST" action="loginprocess.php">
			<tr>
				<td>Email</td>
				<td>
					<input type="Email" name="mail">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="Password" name="pwd">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="login" value="login">
				</td>
			</tr>
			</form>
		
	</table>
	<?php include 'bankfooter.php';?>
</body>
</html>