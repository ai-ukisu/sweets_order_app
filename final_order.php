<?php
include 'admin_data.php';

// print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
      <div class="container">
           <div class="header">
           Shopping Cart
           <table class="table">
             <thead>
               <tr>
                 <th>Sweest Name</th>
                 <th>Price</th>
                 <th>Quantity</th>
                 <th>Total</th>
               </tr>
             </thead>
             <tbody>
             <tr>
                <td>
                    <div class="cartinfo">
                    <div class="swimg">
                    <?php echo $_SESSION['sw_name'] ?>
                    </div>
                </td>
                <td>
                    <p class="price">
                    <?php echo $_SESSION['sw_price'] ?>
                    </p>
                </td>
                <td>
                    <div class="sweets_count">
                    <input type="number" name="quantity" value="<?php echo $_SESSION['quantity'] ?>" min="0" max="5" id="" class="form-control w-50" require>

                    </div>
                </td>
                <td>
                    <div class="total">
                    </div>
                </td>
             </tr>
             </tbody>
            <tr>
                <td>
                   <a href="uptate_cart.php" class="btn-1" >Update Cart</a>
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                   <p>Subtotal</p>
                </td>
                <td>
                   <p><?php echo $_SESSION['total'] ?></p>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                   <p>Shipping</p>
                </td>
                <td>
                   <p><?php echo 1000 ?></p>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                   <p>Settlement Fee</p>
                </td>
                <td>
                   <p><?php echo 300 ?></p>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                   <p>Final Total</p>
                </td>
                <td>
                   <p><?php  echo $final_price = ($_SESSION['total'] + 1000)+300 ?></p>
                </td>
            </tr>

           
           </table>
           <div class="checkout_btn">
               <a href="#" class="continue">Continue Shopping</a>
               <a href="#" class="purchase">Purchase procedure</a>

           </div>
           </div>
      
      </div>

    <form action="admin_data.php" method="post">
  
        <input type="text" name="address" placeholder="Enter Address" id="" class="form-control">
        <select name="mode_of_payment" id="" class="form-control">
            <option value="card">Cash</option>
            <option value="cash">Card</option>
        </select>
        <input type="hidden" name="final_price" value="<?php echo $final_price ?>">
        <br>
        <button type="submit" name="additional_info" class="btn btn-primary">Submit</button>
    
    </form>

    
</body>
</html>
