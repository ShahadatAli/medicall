<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>

<link href="https://fonts.googleapis.com/css2?family=Dawning+of+a+New+Day&family=Merriweather:wght@300&display=swap" rel="stylesheet">

<style>
    /* Add some padding on document's body to prevent the content
    to go underneath the header and footer */
    body{        
        font-family: 'Merriweather', serif;
        font-weight: bold;
        padding-top: 70px;
        padding-bottom: 40px;
    }
    .fixed-header{
        width: 100%;
        position: fixed;        
        background: #a9eaeb;
        
        padding: 15px 0;
        color: #475a5e;
    }
    
    .fixed-footer{
        width: 100%;
        position: fixed;        
        background: #a9eaeb;
        
        padding: 8px 0;
        color: #475a5e;   
    }
    
    .fixed-header{
        border-bottom: 1px solid black;
        overflow: hidden;
      position: fixed;
      z-index: 2;
      top: 0;
      margin-top: 0px;
      width: 100%;
        text-align: center;
    }
    .fixed-footer{
        border-top: 1px solid black;
        overflow: hidden;
        position: fixed;
        z-index: 2;
        bottom: 0;
        margin-top: 0px;
        width: 100%;
        text-align: center;
    }
    .container{
        width: 80%;
        margin: 0 auto; /* Center the DIV horizontally */
    }
    nav a{
        color: #475a5e;
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
    }
    
</style>
</head>
<body>
   
    <div class="fixed-header">
        <div class="container">
            <nav>
                <img class="logo" src="images/Untitled.png"/>
                <a href="Home.php">Home</a>
                <a href="review.php">Blog</a>
                <a href=membershipconfirm.php type="submit">Become a member</a>
                <a href="aboutUs.php">Know About Us</a>
                <a href="emergency.php">Emergency</a>
                <a href="Logout.php">Log Out</a>
            </nav>
        </div>
    </div>
    <div class="fixed-footer">
        <div class="container">Copyright &copy; 2021 MediCall.com</div>        
    </div>
</body>
</html>