<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Palu Nomoni 2018">
    <meta name="author" content="WeeR INDONESIA">
    <link rel="icon" href="<?=base_url()?>assets/admin/images/favicon.png">

    <title><?= $title;?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/admin/css/styleloginadmin.css" rel="stylesheet">
  </head>

  <body>
    <form class="form-signin" method="post">
      <div class="text-center mb-4">
        <img class="mb-4" src="<?=base_url()?>assets/admin/images/logo.png" alt="" width="100" height="100">
        <h1 class="h3 mb-3 font-weight-normal">Login Admin</h1>
        <p>Jagalah kerahasiaan akun anda. <br> <code>Seseorang yang baik ialah, seseorang yang mampu bertanggung jawab terhadap pekerjaannya</code></p>
        <?php
              if (isset($salah)) {?>
                <p><?=$salah?></p>
              <?php
            }
        ?>
      </div>
      <div class="form-label-group">
        <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Email</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="show-password" onclick="showPassword()"> Lihat Password
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" name="submit" value="submit" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">
        &copy; Copyright 2018 Palu Nomoni. All Right Reserved.<br>
        Powered by. <a href="http://paluwebstore.com/" target="_blank">Paluwebstore</a> | 
        Dev by. <a href="http://weer-indonesia.com/" target="_blank">WeeR INDONESIA</a>
      </p>

    </form>

    <script type="text/javascript">
      function showPassword() {
          var x = document.getElementById("inputPassword");
          if (x.type === "password") {
              x.type = "text";
          } else {
              x.type = "password";
          }
      }
    </script>

  </body>
</html>
