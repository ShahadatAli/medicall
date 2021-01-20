<?php
	session_start();
	if(!ISSET($_SESSION['email'])){
		header('location:login.php');
    }
$connect = mysqli_connect("localhost", "root", "", "doorstep");

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Emergency</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<?php
                include'header.php';
        ?>
		
		<style>
            .info
            {
                font-size: 30px; 
                text-align: center;
                margin-top: 50px;
                
            }
        </style>
	</head>
<body>
   <div class="info">
        <p>Govt Covid-19 helpline: <a href="#">16263</a><p>
        <p>MediCall Helpline for Covid-19 cases: <a href="#">01627166626</a><p>
        <a href="https://www.thedailystar.net/tags/coronavirus">Daily Corona News</a>
        <p>Govt. instructions about Covid-19: <a href="files/Health_Care_Rule.pdf">(PDF)</a></p>
    
    </div>
		
</body>
</html>
