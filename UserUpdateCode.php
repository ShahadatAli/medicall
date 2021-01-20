<?php

    if(isset($_POST['uemail']) && isset($_POST['upass']) && isset($_POST['uname']) && isset($_POST['uphone']) && isset($_POST['uage']) && isset($_POST['uaddress'])){
        
        $myemail=$_POST['uemail'];
        $newpass=$_POST['upass'];
        $newname=$_POST['uname'];
        $newphone=$_POST['phone'];
        $newage=$_POST['uage'];
        $newaddress=$_POST['uaddress'];
        
        try{
            $conn=new PDO("mysql:host=localhost:3306;dbname=dbmsweb", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $ex){
        ?>
        <script>
            alert("Database connection error");    
        </script>
        <?php
        }
        
           
            $mysqlquery="update users set email='$myemail',pass='$newpass',name='$newname', phone='$newphone', age=$newage, address='$newaddress',pass='$newpass'  where email='$myemail'";
            
            
            try{
                $conn->exec($mysqlquery);
            
                echo "<script>location.assign('home.php');</script>";
            }
            catch(PDOException $ex){
                echo "<script>location.assign('userupdateinfo.php');</script>";
            }
        }
    
?>