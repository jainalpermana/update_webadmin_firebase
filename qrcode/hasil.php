<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="BaGen (Barcode Generator) QR Code Version">
    <meta name="author" content="Hakko Bio Richard">
    <link rel="icon" href="">

    <title>QR CODE</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
<?php include "phpqrcode/qrlib.php"; ?>
  <body>

    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Masukan Link</h2>
        <label for="inputData" class="sr-only">InputData</label>
        <center><?php QRcode::png("$_GET[kode]", "png/$_GET[kode].png", "L", 6, 6); ?><?php echo "<img src='png/$_GET[kode].png' /><br/>" ?></center>
        <br />
        <input type="text" value="<?php echo "png/".$_GET['kode'].".png"; ?>" id="uploader">
        <center><h4><?php echo "$_GET[kode]"; ?></h4></center>
        <?php $a = "png/$_GET[kode].png"; ?>
        <a class="btn btn-lg btn-primary btn-block"  href="<?php echo "$a" ?>" >Download PNG</a>
      </form>
      <script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCBtCvc4Bqeqj6hw8ExViEQ__M8dT8E0J8",
    authDomain: "projectadmin-a06b7.firebaseapp.com",
    databaseURL: "https://projectadmin-a06b7.firebaseio.com",
    projectId: "projectadmin-a06b7",
    storageBucket: "projectadmin-a06b7.appspot.com",
    messagingSenderId: "125242559054"
  };
  firebase.initializeApp(config);
</script>
      <script type="text/javascript">
          //--codingan upload foto--//
        //get element
    var uploader = document.getElementById('uploader');

    //listen file selection
    uploader.addEventListener('change', function(e) {
    
    //get file
    var file = e.target.files[0];
    
    //create a storage ref
    var storageRef = firebase.storage().ref('Qr/' + file.name);

    //upload file
     var task = storageRef.put(file);

     //update progress bar
     task.on('state_changed',
        function progress(snapshot){
            var percentage = (snapshot.bytesTransferred/ snapshot.totalBytes) * 100;
            uploader.value = percentage;

        },

        function eror(err){

        },

        function complete(){

         }

        );

    });


        
      </script>

    </div> <!-- /container -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

  </body>
</html>
