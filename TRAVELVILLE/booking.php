<?php
include("connection.php");
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/bs.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
<form method="POST" action="travel.html">  
       
	<script type="text/javascript">
		function showMessage(){
			alert("BOOKING CONFIRMED");
}
</script>
 </form>   
</head>

<CENTER>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
                                                                   <audio controls>
  <source src="book.mp3" type="audio/mpeg">
</audio>


<div class="booking-form">
 <div class="form-header">
	<h1>Make your reservation</h1>
 </div>
	<form>
	<div class="form-group">
	<input class="form-control" name="fn" type="text" placeholder="First Name">
	<span class="form-label">FirstName</span>
	</div>
	<div class="form-group">
	<input class="form-control" name="ln" type="text" placeholder="Last Name">
	<span class="form-label">LastName</span>
	</div>
	<div class="form-group">
	<input class="form-control" name="destination" type="text" placeholder="Destination...">
	<span class="form-label">Destination</span>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			<input class="form-control" name="checkin" type="date" required>
			<span class="form-label">Check In</span>
		</div>
	</div>
	<div class="col-md-6">
	    <div class="form-group">
		<input class="form-control" name="checkout" type="date" required>
		<span class="form-label">Check out</span>
		</div>
	</div>
	</div>
	
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
			<input class="form-control" type="email" name="email" placeholder="Enter your Email">
			<span class="form-label">Email</span>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
			<input class="form-control" type="tel" name="phone" placeholder="Enter you Phone">
			<span class="form-label">Phone</span>
			</div>
		</div>
				</div>
				<div class="form-btn">
				<button onClick="showMessage()" class="submit-btn">Book Now</button>
				</div>
			</form>
			</div>
		</div>
		</div>
	</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</CENTER>

</html>

<?php
$fn=$_GET['fn'];
$ln=$_GET['ln'];
$de=$_GET['destination'];
$ci=$_GET['checkin'];
$co=$_GET['checkout'];
$em=$_GET['email'];
$pn=$_GET['phone'];


$query="INSERT INTO BOOKFORM VALUES('$fn','$ln','$de','$ci','$co','$em','$pn')";
$data=mysqli_query($conn,$query);
if($data!=0)
{
//echo '<script>alert("DATA INSERTED SUCCESSFULLY!")</script>';
}
else
{
echo "FAILED";
}
?>