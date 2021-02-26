<?php 
include 'admin_data.php';



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
     　
     <div class="card mx-auto w-50 mt-5 mb-5">
      
         <h4 class="card-header bg-primary text-light">
         New Sweets Register 
         </h4>
         <div class="card-body">
         <form action="admin_data.php" method="post">
         <div class="row">
         <div class="col-6">
            <p class="mt-3">Sweets Type</p>
            <select name="sw_type" class="form-control" mt-3 id="">
                  <option value="#">---</option>
                  <option value="cake">Cake</option>
                  <option value="chocolate">Chocolate</option>
                  <option value="anko">Anko</option>
                  <option value="other">Other</option>
               </select>
               </div>
            <div class="col-6">
            <p class="mt-3">Sales Status</p>
            <select name="sw_status" class="form-control mt-3" id="">
            <option value="#">---</option>
                  <option value="onsale">On Sale</option>
                  <option value="stop">Stop</option>
                  
               </select>
          </div>
          </div>
          <div class="row">
          <div class="col-6">
          <p class="mt-3">Sweets Name</p>
               <input type="text" name="sw_name" class="form-control mt-3">

          </div>
          <div class="col-6">
            <p class="mt-3">Price</p>
               <input type="text" name="sw_price" class="form-control mt-3">
        </div>
          </div>
         <div class="row mx-auto">
         <p class="mt-3">Ingredient</p>
         <textarea name="sw_ingre" class="form-control mx-auto">
         </textarea>
         </div>
         <br>
        <div class="row ml-1 w-50">
            <p class="">Register date</p>
               <input type="date" name="sw_regiday" class="form-control">
       </div>
       
        
         <div class="row mx-auto">
      
       <button type="submit" name="save_sweets" class="btn btn-outline-info btn-block mt-4">Save Sweets</button>
       
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