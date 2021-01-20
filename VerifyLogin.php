<?php
	require_once 'conn.php';
	session_start();
	if(ISSET($_POST['login'])){
		$email = $_POST['uemail'];
		$password = $_POST['upass'];
	    
        $sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$password'";
		$query = mysqli_query($conn, $sql) or die(mysqli_error());
		$fetch = mysqli_fetch_array($query);
		$row = mysqli_num_rows($query);
		
		if($row > 0){
			$_SESSION['email']=$fetch['email'];
			echo "<script>alert('Login Successfull!')</script>";
			echo "<script>window.location='home.php'</script>";
		}else{
			echo "<script>alert('Invalid username or password')</script>";
			echo "<script>window.location='login.php'</script>";
		}
		
	}

?>