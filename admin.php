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
  <div class="jumbotron bg-info">
  <br>
  <div class="text-right">
  <a href="admin_logout.php" class="btn btn-outline-warning ">Hello <?php echo $_SESSION['fname'] ?></a>
  <a href="admin_logout.php" class="btn btn-outline-warning ">LOGOUT</a>
  </div>
  </div>
 

  <nav class="container">
    
    <div class="row">
        <div class="col-4">
            <div class="container">
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

        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>