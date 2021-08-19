<!DOCTYPE html>
<html>
<head>
	<title>USER LOGIN & REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login_style.css">
     <link href="img/Logo.png" type="img/icon" rel="icon">
</head>
<body>
	<div style="background-image: url('img/flat.jpg'); width: 100%;height: 600px;">
    <div class="container">
    	<div class="login-box">
    	<div class="row">
    		<div class="col-md-6 login-left">
    			<h2>Have An Account ! <br>Login Here</h2>
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
                    <a href="index.php"><font style="color:red;">Continue Without Login</font></a>
    			</form>
               
    		</div>

    		<div class="col-md-6 login-right">
    			<h2>New User <br>Register Here</h2>
    			<form action="registration.php" method="post">
    				<div class="form-group">
    					<label>Username</label>
    					<input type="text" name="user" class="form-control" required>
    				</div>
    				<div class="form-group">
    					<label>Password</label>
    					<input type="Password" name="Password" class="form-control" required>
    				</div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="Email" name="Email" class="form-control" required>
                    </div>
                     <div class="form-group">
                        <label>Mobile.No</label>
                        <input type="Mobile" name="Mobile" class="form-control" required>
                    </div>
    				<button type="submit" class="btn btn-primary">Register</button>
    			</form>
    		</div>
    	</div>
    </div>
    </div>
</div>
</body>
</html>