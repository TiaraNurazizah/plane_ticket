<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css"> 
    <title>LOGIN</title>
</head>
<body>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<div class='alert'>Username dan Password tidak sesuai! </div>";
        }
    }
    ?>

<form method="post" action="cek_login.php">
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-dark mb-0"><h5 class="text-center"><span class="font-weight-bold text-light"><b>LOGIN</b></span></h5></div>
            <div class="card-body">
              <form action="">
                <div class="form-group">
                  <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                </div>
                <!--<div class="form-group custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                  <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                </div>-->
                <br>
                <div class="form-group">
                  <input type="submit" name="" value="LOGIN" class="btn btn-dark btn-block">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</form>
</body>
</html>