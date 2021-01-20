<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf-8">
        <title>Sign up</title>
        <style>
            body{
                background-image: url(back2.jpg);
                background-position:top;
                background-repeat: no-repeat;
                margin-top: 122px;
                background-size: 85% 200%;
                background-color: #00D0D2
            }
        </style>
    </head>
    
    <body>
        <center>
        <form action="register.php" method="post">
            <br/>
            <br/>
            Email: <input type="email" name="uemail" id="uemail" placeholder="example@gmail.com" title="your email here">
            <br/>
            <br/>
            Name: <input type="text" name="uname" id="uname">
            <br/>
            <br/>
            Phone: <input type="text" name="uphone" id="uphone">
            <br/>
            <br/>
            Age: <input type="number" name="uage" id="uage">
            <br/>
            <br/>
            Address: <input type="text" name="uaddress" id="uaddress">
            <br/>
            <br/>
            Password: <input type="password" name="upass" id="upass">
            <br/>
            <br/>
            <input type="submit" value="Sign Up">
        </form>
        </center>
    </body>
</html>