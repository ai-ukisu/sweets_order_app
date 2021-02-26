<?php
include 'admin_data.php';
$user_id = $_SESSION['id'];


$totalOrder = $sweetsobj->getUserOrders($user_id);



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

    <div class="container">
        <div class="jumbotron w-25 mx-auto mt-5">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="lead">
                        ORDERS:

                    </p>
                </div>
            </div>
                <hr>
                <table class="table">
                    <thead>
                        <td>Name</td>
                        <td>Subtotal</td>
                        <td>Price</td>

                    </thead>
                    <tbody>
                        <?php foreach ($totalOrder as $order) :
                            $totalpayment = $totalpayment + $order['or_total_amount'];

                        ?>
                        <tr>
                            <td><?php echo $order['or_swname'] ?></td>
                            <td><?php echo $order['or_subtotal'] ?></td>
                            <td><?php echo $order['or_total_amount'] ?></td>
                        </tr>



                        <?php endforeach; ?>
                    </tbody>
                </table>

                <hr>
                <div class="row">
                    <div class="col-6 ">Total Price</div>
                    <div class="col-6 "><?php echo $totalpayment ?></div>
                </div>
                <div class="row mt-3">
                <div class="col-12">
                            <a href="order.php" class="btn btn-outline-info">Order more</a>
                </div>
                </div>
           

        </div>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>