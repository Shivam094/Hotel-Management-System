<!DOCTYPE html>
<html>
<head>
	<title>internet banking</title>
	<link rel="stylesheet" type="text/css" href="bankstyle.css">
</head>
<body>
	<?php include "bankheader.php"; ?>

	<table cellpadding="8" cellspacing="2" align="center">
	<form method="POST" action="registerprocess.php"  onsubmit="return validate()">

		<tr>
			<td>UserId</td>
			<td><input type="text" name="user_id" id="user_id" autofocus></td>
		</tr>
		<tr>
			<td>Account_Number</td>
			<td><input type="number" name="acc_no" id="acc_no"></td>
		</tr>
		<tr>
			<td>Balance</td>
			<td><input type="text" name="balance" id="balance" ></td>
		</tr>
		<tr>
			<td>Date</td>
			<td><input type="text" name="date" id="date"></td>
		</tr>
		<tr>
			<td>Status</td>
			<td><input type="text" name="status" id="status"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<input type="submit" name="submit" value="Register">	
			</td>
		</tr>
	</td>
</form>
</table>

<?php include "bankfooter.php"; ?>

<script type="text/javascript">
	function validate(){
		var user_id =document.getElementById("user_id").value;
		var acc_no=document.getElementById("acc_no").value;
	    var balance=document.getElementById("balance").value;
	    var date=document.getElementById("date").checked;
	    var status=document.getElementById("status").checked;
	     
	    
	      if (user_id==""){
	    	alert("enter your user_id");
	    	return false;
	    }
	    
	     if (acc_no==""){
	    	alert("enter your acc_no");
	    	return false;
	    }
	     if (acc_no.length!=12){
	    	alert("invalid acc_no");
	    	return false;
	    }
	    
	    }
	     if (balance==""){
	    	alert("enter your balance");
	    	return false;
	    }
	    if (date==""){
	    	alert("enter your date");
	    	return false;
	    }
	    if (status==""){
	    	alert("enter your status ");
	    	return false;
	    }
	     
	    return true;
	
   
</script>
</body>
</html>
</td>

