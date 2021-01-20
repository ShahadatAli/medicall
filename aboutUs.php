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
		<title>Know about us</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css2?family=Dawning+of+a+New+Day&family=Merriweather:wght@300&display=swap" rel="stylesheet">
		<?php
                include'header.php';
        ?>
		
		<style>
            body{
                text-align: center;
                color: #40514E;
                font-family: 'Merriweather', serif;
            }
            .profile
            {
                font-size: 20px;
                float: left;
                margin-top: 80px;
                margin-left: 380px;

            }
            
            .her
            {
                font-size: 20px;
                float: left;
                margin-top: 80px;
                margin-left: 50px;
            }
            
            h2{
                color: #66BFBF;
                font-weight: normal;
                font-size: 40px;
                padding-bottom: 20px;
            }
            
            img.my-pic{
                border-radius: 50%;
                background-color: lightgrey;
            }
            .details
            {
                position: absolute;
                margin: 25px 100px 75px 35px;
                left: 95px;
                top: 450px;
            }
            p{
                font-size: 25px;
                line-height: 2;
            }
        </style>
	</head>
	<body>
	    
	    <div class="us">
            <div class="profile">
                <img class="my-pic" src="files/me1.png" alt="">
                <h2>Hello, I am Shahadat.</h2>
            </div>
            <div class="her">
                <img class="my-pic" src="files/shuchi1.jpg" alt="">
                <h2>Hello, I am Tahsina.</h2>
            </div>
	        
	        <p class="details">Our goal is to make diagnostic tests available at doorsteps; to make people able to have tests done from their homes. We believe that it would make people's lives easier.</p>

	    </div>

	    
	
    </body>
</html>
