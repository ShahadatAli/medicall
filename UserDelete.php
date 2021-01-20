<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf-8">
        <title>delete</title>
        <?php
                include'headerclean.php';
        ?>
    </head>
    
    <body>
        <center>
        <h1>Are you sure?</h1>
        <form action="userdeletecode.php" method="post">
            <br/>
            <br/>
            Email: <input type="email" name="uemail" id="uemail" placeholder="example@gmail.com" title="your email here">
            <br/>
            <br/>
            Password: <input type="password" name="upass" id="upass">
            <br/>
            <br/>
            <input type="submit" value="Yes! Confirm delete">
        </form>
        </center>
    </body>
</html>