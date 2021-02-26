<?php
include 'admin_data.php';

// public function __construct($swname, $swprice, $swimage) {
//   $this->swname = $swname;
//   $this->swprice = $swprice;
//   $this->swimage = $swimage;
// }

// public function hello() {
//   echo 'I am '.$this->swname;
// }

// public function getName() {
//   return $this->swname;
// }

// public function getImage() {
//   return $this->swimage;
// }

// public function getOrderCount() {
//   return $this->orderCount;
// }

// public function setOrderCount($orderCount) {
//   $this->orderCount = $orderCount;
// }

// public function getTaxIncludedPrice() {
//   return round($this->swprice * 1.0725, 2);
// }

// public function getTotalPrice() {
//   return $this->getTaxIncludedPrice() * $this->orderCount;
// }

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
  <div class="order-calcu">
    <h2>Cart</h2>
    <?php $totalPayment = 0 ?>
    
    <?php foreach ($swmenus as $swmenu): ?>
      <?php 
        $orderCount = $_POST[$swmenu->getName()];
        $swmenu->setOrderCount($orderCount);
        $totalPayment += $swmenu->getTotalPrice();
        
      ?>
      <p class="order-amount">
        <?php echo $menu->getName() ?>
        x
        <?php echo $orderCount ?>
      </p>
      <p class="order-price">$<?php echo $swmenu->getTotalPrice() ?></p>
    <?php endforeach ?>
    <h3>Total price: ¥<?php echo $totalPayment ?></h3>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>