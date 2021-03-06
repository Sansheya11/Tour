<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Sans Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
      <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>SANS BANK</h1>
                </div>
                             
                  
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="https://www.bcsconsulting.com/wp-content/uploads/2018/12/bank-system-tile.png" class="img-fluid pt-2">
              </div>
            </div>



      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.jpg" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button>Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="data:image/png;base64,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" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2020. Made by <b>SANSHEYA BASKAR</b> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>