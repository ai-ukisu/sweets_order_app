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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php foreach($lesson_item as $item): ?>  <?php endforeach; ?>

  <div class="container">
     　
     <div class="card mx-auto w-50 mt-5 mb-5">
      
         <h4 class="card-header bg-primary text-light">
         Make A Reservation 
         </h4>
         <div class="card-body">

                Lesson Name : <?php echo $item['lessons_name'] ?>
                <br>
                Level : <?php echo $item['lessons_category'] ?>
                <br>
                Price : <?php echo $item['lessons_price'] ?>
                <br>
                Event Dat : 2021.3.6 / 2021.13 / 2021.3.20 (All 10:00~12:00) 
                <br>
                Capacity : 3 people (each time)


         <form action="admin_data.php" method="post">
         <div class="row">
         <div class="col-6">
            <p class="mt-3">Reservation Date</p>
               <input type="date" name="rese_day" class="form-control">
               </div>
            <div class="col-6">
            <p class="mt-3">Participation　Date</p>
               <input type="date" name="participation" class="form-control">
               </div>
          </div>
          <div class="row">
          <div class="col-6">
          <p class="mt-3">Applicant Name</p>
               <input type="text" name="rese_username" class="form-control mt-3">

          </div>
          <div class="col-6">
            <p class="mt-3">The Number Of Participants</p>
            <input type="number" name="number" value="<?php echo $_SESSION['rese_peonum'] ?>" min="0" max="3" id="" class="form-control mt-3" require>
        </div>
          </div>
         <div class="row mx-auto">
        <div class="row ml-1 w-75">
            <p class="">Total Price × The number of participants</p>
            <p><?php  echo $price_num = 'participation'  * 3000 ?></p>


       </div>
       <br>
       <div class="row mx-auto">
         <p class="mt-3">Information</p>
         <textarea name="comment" class="form-control mx-auto">
         </textarea>
         </div>

       
        <br>
         <div class="row mx-auto">
      
       <button type="submit" name="place_reservation" class="btn btn-outline-info btn-block mt-4">Make A Reservation</button>
       
       </div>

       </form>

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