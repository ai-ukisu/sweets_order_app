<?php
include 'admin_data.php';
$m_id = $_GET['m_id'];

$one_members = $sweetsobj->display_one_members($m_id);



?>

<!doctype html>
<html lang="en">
  <head>
    <title>Member data</title>
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
                             MEMBERS DATALIS
                         </h1>
                     </div>
                     <div class="card-body">
                        User Fullname: <?php echo $one_members['m_username'] ?>
                        <hr>
                        Birthday: <?php echo $one_members['m_bday']?>
                        <hr>
                        Password: <?php echo $one_members['m_password']?>
                        <hr>
                        Email: <?php echo $one_members['m_mail']?>
                        <hr>
                        Phone Number: <?php echo $one_sweets['m_tel']?>
                        <hr>
                        Address: <?php echo $one_sweets['m_address']?>
                        <hr>


                     </div>
                     <div class="card-footer">
                         <a href="update_member.php?m_id=<?php echo $m_id ?>" class="btn btn-info">Update Member Info</a>
                         <a href="delete_member.php?m_id=<?php echo $m_id ?>" class="float-right btn btn-danger">Delete Member Info</a>

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