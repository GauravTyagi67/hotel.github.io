<!DOCTYPE html>
<html>
<head>
	<title>Hotel Online Booking</title>
	<meta charset = "utf-8" />
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
	<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
	<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
</head>
<body>
<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
	<div  class = "container-fluid">
		<div class = "navbar-header">
			<a class = "navbar-brand" >Hotel Online Reservation</a>
		</div>
	</div>
</nav>
<ul id="menu">
	<li><a href="index.php">Home</a></li>
	<li><a href="about.php">About</a></li>
	<li><a href="contact.php">Contact</a></li>
	<li><a href="gallery.php">Gallery</a></li>
	<li><a href="dine.php">Dine & Lounge</a></li>
	<li><a href="reservation.php">Make a Reservation</a></li>
	<li><a href="rule.php">Rules & Regulations</a></li>
</ul>
<div style="margin-left: 0;"class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<strong><h1 style="text-align:center"><b>Hotel In Room Reservations</b></h1></strong>
			<?php
				require_once 'admin/connect.php';
				$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
				while($fetch = $query->fetch_array()){
			?>
			<div class = "well" style = "height:300px; width:100%;">
						<div style = "float:left;">
							<img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "350"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3><?php echo $fetch['room_type']?></h3>
							<h4 style = "color:#00ff00;"><?php echo "Price: INR. ".$fetch['price'].".00"?></h4>
							<br /><br /><br /><br /><br /><br />
							<a style = "margin-left:580px;" href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Reserve</a>
						</div>
					</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
	<br />
	<br />
<div style = "text-align:center; margin-center:10px;" class = "navbar navbar-default navbar-fixed-bottom">
	<label>&copy; Copyright Hotel Online Booking 2020</label>
</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>