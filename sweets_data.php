<?php
include 'admin_data.php';
$sw_id = $_GET['sw_id'];

$one_sweets = $sweetsobj->display_one_sweets($sw_id);

// require_once('sweets_order.php');

// $rawrhocolatecake = new Menu('RawChocolatecake', 450, 'img/honey.jpg');
// $carrotscake = new Menu('Carrotscake', 450, 'img/honey.jpg');
// $ankobuttersand = new Menu('Ankobuttersand', 500, 'img/honey.jpg');
// $energyballs = new Menu('Energyballs', 700, 'img/honey.jpg');
// $fruitgranola = new Menu('Fruitgranola', 1200, 'img/honey.jpg');


// $menus = array($rawrhocolatecake, $carrotscake, $ankobuttersand, $energyballs,$fruitgranola);

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <nav class="container">
    
    <div class="row">
        <div class="col-4">
            <div class="container mt-5">
               <a href="admin.php" class="btn btn-outline-primary btn-block">Home Admin</a>
               <a href="sweets_list.php" class="btn btn-outline-primary btn-block">Sweets List</a>
              
               <a href="lesson_list.php" class="btn btn-outline-primary btn-block">Lessons List</a>

               <a href="member_list.php" class="btn btn-outline-primary btn-block">Member List</a>
               <a href="ordercancel_list.php" class="btn btn-outline-primary btn-block">Order List</a>
               <a href="lesson_resercancel.php" class="btn btn-outline-primary btn-block">Reservation List</a>

               <a href="shipment_list.php" class="btn btn-outline-primary btn-block">Shipment List</a>
               <a href="payment_list.php" class="btn btn-outline-primary btn-block">payment List</a>

               <a href="contact_list.php" class="btn btn-outline-primary btn-block">Contact List</a>

               
            </div>
              
        </div>  
        <div class="col-1"></div>
        <div class="col-7">
        <div class="card mx-auto mt-5">
                     <div class="card-header bg-info text-light text-center">
                         <h1 class="display-4">
                             SWEETS DATALIS
                         </h1>
                     </div>
                     <div class="card-body">
                        Sweets Type: <?php echo $one_sweets['sw_type'] ?>
                        <hr>
                        Sales Status: <?php echo $one_sweets['sw_status']?>
                        <hr>
                        Sweets Name: <?php echo $one_sweets['sw_name']?>
                        <hr>
                        Price: <?php echo $one_sweets['sw_price']?>
                        <hr>
                        Ingredient: <?php echo $one_sweets['sw_ingre']?>
                        <hr>
                        Sale Date: <?php echo $one_sweets['sw_regiday']?>
                        <hr>


                     </div>
                     <div class="card-footer">
                         <a href="update_sweets.php?sw_id=<?php echo $sw_id ?>" class="btn btn-info">Update Sweets Info</a>
                         <a href="delete_sweets.php?sw_id=<?php echo $sw_id ?>" class="float-right btn btn-danger">Delete Sweets Info</a>

                     </div>
                </div>
        </div>
        </div> 
  </nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>