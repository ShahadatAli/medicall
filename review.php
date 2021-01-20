<?php
	session_start();
	if(!ISSET($_SESSION['email'])){
		header('location:login.php');
    }
    
$connect = mysqli_connect("localhost", "root", "", "membership");

?>
<!DOCTYPE html>
<html>
	<head>
	
		<title>Blog</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<?php
                include'header.php';
        ?>
		<style>
            
            body{
                text-align: center;
            }
            .comment_form tr td{
                padding: 10px;
            }
            .com_txt{
                box-sizing: border-box;
                width: 100%;
                padding: 6px 10px;
                font-family: open sans;
                outline: 0;
                resize: none;
            }
            .com_box{
                background: #f8f8f8;
                margin-bottom: 30px;
                border: 2px solid grey;
                
            }
            .com_img
            {
                width: 20px;
                float: left;
            }
            
            .com_desc p{
                line-height: 20px;
            }
            .table{
                text-align: center;

            }
            .review_btn{
                float: right;

            }
            
        </style>
		
	</head>
	<body>
	
	
	<div class="post">
	    <h2 class="title"><a href="#">Would you like to leave a comment?</a></h2>
	    <p class="meta"></p>
	    
	    <div class="entry">
            <div class="container">
               <div class="row">
                    <form action="comment_process.php" method="post">
                    <?php
                        if(!empty($_SESSION['error']))
                        {
                            foreach($_SESSION['error'] as $er)
                            {
                                echo '<font face="open sans" color="red">'.$er.'</font><br/>';
                            }
                            unset($_SESSION['error']);
                        }
                    ?>
                       <center>
                        <table border="0" class="comment_form" width="70%">
                            <tr>
                                <td><input type="text" class="com_txt" name="nm" placeholder="Enter Your Name"/></td>
                                <td><input type="text" class="nmtext" name="mno" placeholder="Enter Your Mobile No."/></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <textarea placeholder="Your Review" rows="10" class="com_txt" name="com"></textarea>
                                </td>
                            </tr>
                            <input type="hidden" name="pid" value="<?php echo $_GET['id']; ?>" />

                            <tr>
                                <td colspan="2">
                                    <input class="review_btn" type="submit" value="Post Review" class="com_btn"/>
                                </td>
                            </tr>
                        </table>
                        </center>
                    </form>

                    <table class="table table-bordered" style="margin-top: 30px; text-align: center;">
                            <tr>
                                <th>NAME</th>
                                <th>DATE</th>
                                <th>COMMENT</th>
                            </tr>

                    <?php
                        $com_q = "select * from comment";
                        $result = mysqli_query($connect, $com_q);

                        while($com_row = mysqli_fetch_array($result))
                        { ?>
                            <col style="width:10%">
                            <col style="width:7%">
                            <col style="width:40%">

                            <tr>
                                <td><div class="com_img">
                                    <img src="images/profile.png"/>
                                </div><h4 class="text-info"><?php echo $com_row["c_nm"]; ?></h4></td>

                                <td><h4 class="text-info"><?php echo @date("d/m/Y",$com_row["c_time"]); ?></h4></td>

                                <td><?php echo $com_row["c_desc"]; ?></td>

                            </tr>

                    <?php        
                        }
                    ?>
                    </table>
                
                </div>
            </div>
        </div>
	    
	</div>

</body>
</html>







