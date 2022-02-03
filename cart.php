<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
?><body>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Table</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <div class="container">
      <h3 class="text-center">Your Cart</h3><br>
      <div class=box>
      <div class="table-responsive">
      <table class="table table-striped" >
        <thead >
          <tr class="table-secondary">
            <th scope="col" >Remove</th>
            <th scope="col">Name of Book</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>      
            <th scope="col">Update</th>
          </tr>
        </thead>
  <tbody >
  <?php   
		$total=0;
    if (isset($_SESSION['cart'])) {                                        
	  foreach($_SESSION['cart'] as $key => $value) {                                            
    $total=$total+$value['item_price']*$value['quantity']; 
  ?>
  <tr>
    <td>
			  <form action="cartremove.php" method="POST" style="width: 130px;">
					<button class="btn btn-danger" name="remove">Remove</button>
						<input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">
				</form>
    </td>
    <td><div>
      <span style="display:flex;padding: 20px;"><?php echo $value['item_name'] ?></span>
    </div></td>
    <td><span style="display:flex;padding: 20px;" class="amount">₹<?php echo $value['item_price'] ?>/-</span></td>
    <td>
      <form action="cartupdate.php" method="POST" style="width: 220px;">    
        <input name="quantity" type="number" value="<?php echo $value['quantity'] ?>" />
    </td>
    <td>
      <button name="update" class="btn btn-primary" style="display:flex;padding: 10px;">Update</button>
			<input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">
			</form>
		</td>
    
  </tr>
    <?php }   } ?>
    </tbody>
    </table>
    </div><br>
    <button type="button" onclick="location.href='booksshow.php'" class="btn btn-success">Add More Book's</button><br><br>
    <h3 class="text-center">Total Price</h3>
    <div class="text-center">
      <span class="total">₹<?php echo $total ?>/-</span>
    </div>
</body>
</html>