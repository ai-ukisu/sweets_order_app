
<?php
include 'admin_data.php';

$lesson_item = $sweetsobj->display_lessons();



?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <Style>



    </Style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container-fluid">


    <?php foreach($lesson_item as $item): ?>

         <div class="card mt-5 mr-3 w-25 float-left">
            <div class="card-header">
              <p class="text-center lead">
                <?php echo $item['lessons_name'] ?>
                <br>
                Level : <?php echo $item['lessons_category'] ?>
              </ps>
            </div>
            <div class="card-body">
                <div class="jumbotron">
                    <p class="lead text-center">
                        Details
                    </p>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">PRICE</div>
                        <div class="col-lg-6"><?php echo $item['lessons_price'] ?></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6">Lesson Content</div>
                        <div class="col-lg-6"><?php echo $item['lessons_info'] ?></div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <form action="sweets_data.php" method="post" class="mt-3">
                   <div class="row">
                    <div class="col-6">
                    <input type="hidden" name="sw_price" value="<?php echo $item['lessons_price'] ?>">
                    <input type="hidden" name="sw_name" value="<?php echo $item['lessons_name'] ?>">
                   
                    </div>
                    <div class="col-6">
                    <a href="lesson_reserform.php" name="place_reservation" class="btn btn-primary float-right btn-lg">Make A Reservation</a>
                    </div>
                   </div>
                </form>
            </div>
            
        </div>

    <?php endforeach; ?>
        
  </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>