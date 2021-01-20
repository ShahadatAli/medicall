<?php

    if(isset($_POST['uemail']) && isset($_POST['upass'])){
        
        $i=$_POST['uemail'];
        $j=$_POST['upass'];
        
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
        
            $mysqlcode="delete from users where email='$i' AND pass='$j'";
            
            
            try{
                $conn->exec($mysqlcode);
            
                echo "<script>location.assign('login.php');</script>";
            }
            catch(PDOException $ex){
                echo "<script>location.assign('home.php');</script>";
            }
        }
    
?>