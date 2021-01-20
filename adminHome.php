<?php
    session_start();
    
    if($_SESSION['isloggedin']==true){
        
?>  


<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>MediCall</title>
	
	<style>
        a
        {
            font-size: 20px;
            text-align: center;
        }
    
    </style>
</head>
<body>
 <h1 style="text-align: center;">ADMIN PAGE</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
				<div class="row">
				<?php
                    $connection = mysqli_connect('localhost','root','','doorstep');
                    if(isset($_POST['search'])){
                        $searchKey = $_POST['search'];
                        $sql = "SELECT * FROM service WHERE s_name LIKE '%$searchKey%' ORDER BY s_name ASC";
                    }
                    else{
                        $sql = "SELECT * FROM service ORDER BY s_name ASC";
                        $searchKey = "";
                    }
                    $result = mysqli_query($connection, $sql);
                ?>
				<form action="" method="POST"> 
					<div class="col-md-6">
						<input type="text" name="search" class='form-control' placeholder="Search By Test Name" value="<?php echo $searchKey;?>" > 
					</div>
					<div class="col-md-6 text-left">
						<button class="btn">Search</button>
					</div>
				</form>

				<br>
				<br>
				</div>
				<table class="table table-bordered">
					<tr>
						<th>ID</th>
                        <th>Name</th>
                        <th>Diagnostic Centre</th>
                        <th>Price</th>
                        <th>Update/Delete</th>
					</tr>
					<?php while($row = mysqli_fetch_object($result)){ ?>
					<tr>
						<td><?php echo $row->s_id ?></td>
                        <td><?php echo $row->s_name ?></td>
                        <td><img src="<?php echo $row->s_img_path ?>" width="80" height="80">
                        <?php echo $row->hospital ?></td>
                        <td><?php echo $row->s_price ?></td>
                        <td><input type="button" value="Update" onclick="updatefn(<?php echo $row->s_id ?>);"><input type="button" value="Delete" onclick="deletefn(<?php echo $row->s_id ?>);"></td>
					</tr>
                    <?php } ?>
				</table>
			</div>
		</div>
	</div>
	<center>
	    <a href="add.php">Add Product</a>
        <br>
	    <a href="adminLogout.php">Click to Logout</a>
	</center>
	<br>
	<br>
	
	
	<script>
                    function deletefn(del_prod_id){
                        var choice=confirm("Do you want to delete this?");
                        if(choice){
                            location.assign("remove.php?d_id="+del_prod_id);
                        }
                    }

                    function updatefn(upd_prod_id){
                        location.assign("update.php?u_id="+upd_prod_id);
                    }
                </script>
</body>
</html>


<?php
        
    }
    else{
        ?>
            <script>location.assign('adminlogin.php');</script>

        <?php
    }
?>