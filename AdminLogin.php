<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf-8">
        <title>Admin LogIn</title>
        <style>
            body{
                background-image: url(back2.jpg);
                background-position:top;
                background-repeat: no-repeat;
                margin-top: -80px;
                background-size: 85% 200%;
                background-color: #00D0D2
            }
            
            img{
                height: 50px;
                width: 250px;
                margin-top: 180px;
                padding: 30px;
                color: #00a7a8;
                text-shadow: 0 0 3px #000000, 0 0 1px #000000
            }
            .logo
            {
                margin: auto;
                margin-top: 180px;
                padding-bottom: 10px;
                height: auto;
                width: auto;
            }
            h1
            {
                padding: 0px;
            }
        </style>
    </head>
    
    <body>
        <center>
        <img class="logo" src="images/mainlogo.png">
        <h1 class="admin_text">ADMIN LOGIN</h1>
        <br/> 
        
        
        <form action="adminverifylogin.php" method="post">
            
            Email: <input type="username" name="usname" id="usname"  placeholder="username" title="your username here" >
            <br/>
            <br/>
            Password: <input type="password" name="upass" id="upass">
            <br/>
            <br/>
            <input type="submit" value="Sign In">
        </form>
        <form action="login.php" method="post">
                <br/>
                <input type="submit" value="Back to user page">            
        </form>

        </center>
    </body>
</html>