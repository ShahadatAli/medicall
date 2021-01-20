<?php


    if(isset($_GET['total'])){
       
        $k=$_GET['total'];
        
        try{
            ///try to connect with database
            $conn=new PDO("mysql:host=localhost:3306;dbname=doorstep", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $ex){
            
            echo "<script>location.assign('home.php');</script>";
        }
        
        ///if database connection is ok
            $mysqlcode="INSERT INTO orders VALUES($k)";
            
            try{
                $conn->exec($mysqlcode);
            
                echo "<script>location.assign('home.php');</script>";
            }
            catch(PDOException $ex){
                echo "<script>location.assign('home.php');</script>";
            }
            
            
        }
    
?>