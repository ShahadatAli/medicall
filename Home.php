<?php
	session_start();
	if(!ISSET($_SESSION['email'])){
		header('location:login.php');
    }
$connect = mysqli_connect("localhost", "root", "", "doorstep");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["s_id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["s_id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["s_id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["s_id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="home.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>MediCall.com</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<?php
                include'header.php';
        ?>
		
		<style>
            h4{
                text-align: center;
            }
        
        </style>
	</head>
	<body>
	<div class="showUsername" style="color:blue;">
       <?php	
				echo "Welcome ".$_SESSION['email'];
        ?>
    </div>
	
		<br />
		<div class="container">
           <div class="row">
            <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">

			<div class="row">
				<?php
                    
                    if(isset($_POST['search'])){
                        $searchKey = $_POST['search'];
                        $sql = "SELECT * FROM service WHERE s_name LIKE '%$searchKey%' ORDER by s_name ASC";
                    }
                    else{
                        $sql = "SELECT * FROM service ORDER by s_name ASC";
                        $searchKey = "";
                    }
                    $result = mysqli_query($connect, $sql);
                ?>
				<form action="" method="POST"> 
					<div class="col-md-6">
						<input type="text" name="search" class='form-control' placeholder="Search By Test Name" value="<?php echo $searchKey;?>" > 
					</div>
					<div class="col-md-6 text-left">
						<button class="btn">Search</button>
					</div>
				</form>

                </div>
                <table class="table table-bordered">
                   <br>

                    <tr>
                        <th>Name</th>
                        <th>Diagnostic Centre</th>
                        <th>Price (BDT)</th>
                        <th>Place Order?</th>
					</tr>
			
			<?php
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
            
            
				
				<form method="post" action="home.php?action=add&s_id=<?php echo $row["s_id"]; ?>">

                    <tr>
                        <td><h4 class="text-info"><?php echo $row["s_name"]; ?></h4></td>

                        <td><img src="<?php echo $row["s_img_path"]; ?>" class="img-responsive" width="80" height="80" /><br /><?php echo $row["hospital"]; ?></td>

                        <td><h4 class="text-danger"><?php echo $row["s_price"]; ?></h4></td>

                        <input type="hidden" name="hidden_name" value="<?php echo $row["s_name"]; ?>" />

                        <input type="hidden" name="hidden_price" value="<?php echo $row["s_price"]; ?>" />

                        <td><input type="text" name="quantity" value="1" class="form-control" />
                        <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" /></td>
                    </tr>
                        
					
				</form>
				
				
				
		
			<?php
					}
				}
			?>
              </table>
               </div>
            </div>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td><?php echo $values["item_price"]; ?></td>
						<td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="home.php?action=delete&s_id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
						
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">Tk <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					
					<?php
					}
					?>
						
				</table>
				<input type="button" value="Confirm Order" onclick="buyfn(<?php echo $total ?>);">
			</div>
		</div>
    <br>
    <br>
 
    <script>
                    function buyfn(buy_total){
                        var choice=confirm("Do you want to confirm order?");
                        if(choice){
                            location.assign("confirmBuy.php?total="+buy_total);
                        }
                    }

    </script>   

	
</body>
</html>
