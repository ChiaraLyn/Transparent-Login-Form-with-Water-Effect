<!doctype html>
<html lang="en">

<head>
  <title>Login Form</title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

  <!-- jQuery Ripples.js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>

  <!-- Custom Css -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body class="water" onload="scale_in()" ;>

  <div class="main">

    <?php include 'form.php'; ?>

    <div class="user_div noselect" id="user_div">
      <img src="img/account.png" alt="user icon" id="user" onclick="Login(); scale_out()" class="noselect">
    </div>

  </div>

  <script src=" js/main.js"> </script>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>