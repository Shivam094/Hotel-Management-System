<!DOCTYPE html>
<html>
<head>
	<title>ADMIN LOGIN & REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login_style.css">
	 <link href="img/Logo.png" type="img/icon" rel="icon">
</head>
<body>
	<div style="background-image: url('img/bl.jpg'); width: 100%;height: 600px;">
    <div class="container">
    	<div class="login-box" style="padding-left: 15%; padding-top: 10%;">
    	<div class="row">
    		<div class="col-md-6 login-left">
    			<h2>Admin Login</h2>
    			<form action="validation.php" method="post">
    				<div class="form-group">
    					<label>Username</label>
    					<input type="text" name="user" class="form-control" required>
    				</div>
    				<div class="form-group">
    					<label>Password</label>
    					<input type="Password" name="Password" class="form-control" required>
    				</div>
    				<button type="submit" class="btn btn-primary">Login</button>
    			</form>
    		</div>
    	</div>
    </div>
    </div>
</div>
</body>
</html>