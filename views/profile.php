<?php
  session_start();
  $username = (isset($_SESSION['username']) ? $_SESSION['username'] : 'Error' );
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/profile.css">

    <title>Profile</title>
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">J&A Bank</h5>
      <nav class="my-2 my-md-0 mr-md-3">
          <a class="p-2 text-dark" href="./profile.php">Perfil</a>
          <a class="p-2 text-dark" href="./savingsAccount.php">Cuenta de Ahorros</a>
          <a class="p-2 text-dark" href="./credits.php">Creditos</a>
          <a class="p-2 text-dark" href="./creditCard.php">Tarjetas de Creditos</a>
          <a class="p-2 text-dark" href="./messages.php">Mensajes</a>
          <?php if($_SESSION['isAdmin']) echo '<a class="p-2 text-dark" href="./admin.php">Admin</a>';?>
      </nav>
      <a class="btn btn-outline-danger" href="../controllers/logoutController.php">Logout</a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">J&A Bank</h1>
      <p class="lead">¡Bienvenido <?php echo $username; ?>! Elige uno de los siguientes productos.</p>
    </div>

    <div class="container">
      <div class="row text-center">
          <div class="col-lg-4">
            <i class="fas fa-9x fa-piggy-bank ico-color-pig"></i>
            <h2>Cuenta de Ahorros</h2>
            <p>Haz click aqui para ver y administrar tus cuentas de ahorros.</p>
            <p><a class="btn btn-primary" href="./savingsAccount.php" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <i class="fas fa-9x fa-dollar-sign ico-color-credit"></i>
            <h2>Crédito</h2>
            <p>Haz click aqui para ver o solicitar tus creditos.</p><br>
            <p><a class="btn btn-primary" href="./credits.php" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <i class="fas fa-9x fa-credit-card ico-color-tc"></i>
            <h2>Tarjeta de Crédito</h2>
            <p>Haz click aqui para ver y administrar tus tarjetas de crédito.</p>
            <p><a class="btn btn-primary" href="./creditCard.php" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
