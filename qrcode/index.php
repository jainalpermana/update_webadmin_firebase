<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="BaGen (Barcode Generator) QR Code Version">
    <meta name="author" content="Hakko Bio Richard">
    <link rel="icon" href="">

    <title>QR Code</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
<?php include "phpqrcode/qrlib.php"; ?>
  <body>

    <div class="container">

      <form method="GET" action="hasil.php" class="form-signin">
        <h2 class="form-signin-heading">Masukan Data QR Code</h2>
        <label for="inputData" class="sr-only">InputData</label>
        <input type="text" id="kode" name="kode" class="form-control" placeholder="Masukkan Data" required autofocus>
        <br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Generate QR</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   
      
    </script>
  </body>
</html>
