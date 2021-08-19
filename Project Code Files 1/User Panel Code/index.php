<!DOCTYPE html>
<html>
<head>
	<title>WHITE STAR GROUPS co.Ltd</title>
	<link rel="stylesheet" type="text/css" href="css/user.css">
	<link href="img/Logo.png" type="img/icon" rel="icon">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script type="text/javascript" src="jquery/jquery.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
    		$('#button').click(function(){
    			$('#nav').slideToggle()
    		});
    	});
    </script>
</head>
<body>
	<div id="full">
		<div style="background-image: url('img/new.jpg'); width: 100%;height: 600px;">
		<div id="header">
		<div id="logo">
			<h1><font color="white" face="Garamond"><i>WHITE  STAR GROUPS co.Ltd</i></font>
		</div>
		<div><button id="button">|||</button></div>
		<div id="nav">
			<div class="menu-bar">
			<ul>
				<li class="active"><a href="#">🏠  HOME</a></li>
				<li><a href="connect.php">📞  CONNECT</a></li>
				<li><a href="about.php">🧰  ABOUT US</a></li>
				<li><a href="#">⛑  HELP</a>
					<div class="sub-menu-1">
						<ul>
							<li><a href="help.php">📱 Support</a></li>
							<li><a href="chat_index.php">💬 Chat</a></li>
						</ul>
					
					</div>
				</li>
				<li><a href="#">🙎🏻‍♂️  ACCOUNT</a>
					<div class="sub-menu-1">
						<ul>
							<!-- <li><a href="home.php"><i class="fa fa-user"></i>User</a></li> -->

						   <li><a href="login.php">🔛 Login</a></li>
						   <li><a href="review.php">🌟 Reviews</a></li>
						   <li><a href="cancel.php">❌  Cancel</a></li>
				           <li><a href="slog.php">📴 Logout</a></li>
						</ul>
					</div>
				</li>
				<li><a href="#"><i class="fas fa-align-justify"></i> ✳️  MORE</a>
					<div class="sub-menu-1">
			<ul>
				<li><a href="map.php">🗺  Map</a>
				<li><a href="weather.php">🌤  Forecast</a>
				<li><a href="fos/index.php">🍕  Food</a>
			</ul>
		</div>
		</div>
		</div>
	</div>
	<div id="banner"></div>
</div>
<div id="f1">
	<form action="form.php" method="get">
	<center><table>
		<tr>
			<th width="20%" height="50px">DESTINATION 🌇</th>
			<th width="20%" height="50px">CHECK-IN DATE 📆</th>
			<th width="20%" height="50px">CHECK-OUT DATE 📆</th>
			<th width="20%" height="50px">ROOM 🛏</th>
			<td rowspan="2"><input type="submit" value="Check Status 📊" name="check"></td>
		</tr>
		<tr>
			<td width="20%" height="50px"><center>
				<select name="destination" required>
					<option disabled selected>---Select Destination---</option>
					<option>Grand ,( Mumbai )</option>
					<option>Vivanta Grand ,( Kolkata )</option>
					<option>Gateway Grand,( Bangalore )</option>
				</select></center>
		
			</td>
			<td width="20%" height="50px"><center><input type="Date" name="ci" required></center></td>
			<td width="20%" height="50px"><center><input type="Date" name="co" required></center></td>
			<td width="20%" height="50px"><center>
				<select name="room" required>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select></center>
			</td>
		</tr>
	</table></center>
</form>
</div>
<hr>
<div id="Welcome">
	<h1 align="center" style="color:blue;">WELCOME AT WHITE STAR</h1>
	<center>
		<font color="black" size="+3" face="High Tower Text">A landmark of architectural innovation ,<br> 
        A hotel that’s home to cutting-edge engineering — from the unique man-made beach and infinity pool terrace, to one of the tallest grand atrium at 180 metres high , White Star takes hotel design to a new level of modern luxury, and has also redefined the meaning of exceptional hospitality, both in India and around the world.</font>
	</center>
</div>
<div id="brand">
	<center>
	<h2 style="color:blue;">OUR BRANDS</h2>
</center>
<div id="one"><img src="img/bangalore.jpg" width="100%" height="388px">
	<center>
	<h1 align="center" style="color: black;">Grand ,( Mumbai )</h1>
	<font color="white" size="+2" face="High Tower Text">
	The Grand is a 35-storey skyscraper hotel on Marine Drive in Nariman Point, Mumbai, India, operated by the White Star Hotels division<br>
	 of The White Star. On completion in 1973, it was the tallest building in South Asia, surpassing the 105 metres (344 ft) Express Towers, located next door.It stayed the tallest building in South Asia until 1980, when Phiroze Jeejeebhoy Towers were completed.
	</font>
</center>
</div>
<div id="two"><img src="img/kolkata.jpg" width="100%" height="388px">
	<center>
	<h1 align="center" style="color: black;">Vivanta Grand ,( Kolkata )</h1>
	<font color="white" size="+2" face="High Tower Text">
	The Vivanta Hotel, now called the Vivanta Grand, is situated in the heart of Kolkata on Chowringhee Road. It is an elegant building of British era and is a famous building in Kolkata. The hotel is owned by White Star chain of hotels.
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<p><font color="black" size="+1">&copy;<?php echo date('Y') ?> <b><i>Powered by WHITE STAR GROUPS co. Ltd</i></b></font></p>
</font>
</center>
</div>
<div id="three"><img src="img/mumbai.jpg" width="100%" height="388px">
	<center>
	<h1 align="center" style="color: black;">Gateway Grand,( Bangalore )</h1>
	<font color="white" size="+2" face="High Tower Text">
	Gateway Grand by White Star Groups is a brand owned by White Star. This is a mid-priced range of hotels designed for business travelers, also accommodate families. Rooms have desks, couches, and free Internet access. The majority of locations have a bistro that sells fresh cooked and prepared breakfast (not complimentary), appetizers, sandwiches, and more.
</font>
</center>
</div>
</div>
</div>
<div style="background-color: red; height: 900px; width: 99%;">
	
</div>
</body>
</html>