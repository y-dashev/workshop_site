<!DOCTYPE html>
<html> 
<head>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
	<link rel = "stylesheet" href= "./styles/style.css">
	<script src = "./scripts/script.js"></script>
	<title> Workshop </title>
</head>
<body>
<?php 
	$name = "COMPANY";
	$number = "99998888999";
	include "header.php"; ?>
<div class= "container-fluid clearfix mt-2" >
<div class= "row no-gutters justify-content-md-center " > 
	<div class= "col-12 col-lg-6 "> 
		<img src= "./images/bike.jpg" alt= "bike image" class= "img-fluid">
	</div>
	<div class="col-12 col-lg-6 p-3 " id="info">
		<h3 class= "text-center mb-3 "> NEW BIKES </h3>
		<p> Built from sheets of aluminium made into a custom shaped monocoque mainframe, the 322 resembles Oranges of the past, but with one big difference. Its shock is mounted in a cradle within the down tube, meaning Orange can get the bike to behave exactly as is desired, and can achieve a more progressive spring rate. The vital statistics include a 135x12mm back end, 73mm BB shell and 1.5in head tube.</p>
	</div>
</div>
</div>
<div class = "container mt-5">
<div class = "row justify-content-md-center "> 
	<div id= "tools" class = "col-12 col-lg-4 mt-3 ">
		<a href ="#">
		<img class = "img-fluid" alt ="Tools bike" src = "./images/tools.jpg">
		<div id = "tools-txt">
			<h3 class = "font-weight-bold"> Tech consultation </h3>
		</div>
		</a>
	</div>
	<div  id = "fork-img" class = "col-12 col-lg-4 mt-3">
		<a href="#">
		<img class = "img-fluid" alt ="fork service" src = "./images/fork.jpg">
		<div id= "img-txt">
			<h3 class="font-weight-bold" > Service </h3>
		</div>
		</a>
	</div>
	<div class = " col-12 col-lg-4 p-3 mt-3 " id = "date">
		<a href = "#">
		<h4> Book a service </h4>
		<p> Earliest available date : </p>
		</a>
	</div>

</div>
</div>


<?php 
	$email = "example@example.com";
	include "footer.php"; 
?>
</body>
</html>