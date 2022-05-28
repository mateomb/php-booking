<!doctype html>
<html lang="en">

<head>
  <title>Register</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="src/css/style.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="color">

    <div class=" text-center mb-5">
      <div class="container">
        <h1 class="display-4">Kvik Booking</h1>
        <p class="lead">Join our community!</p>
      </div>
    </div>

    <div class="container ">
      <form class="p-4 w-50 mx-auto pt-4 bg-light rounded-lg shadow-sm" action="registerAccount.php" method="POST">
        <div class="form-group">
          <label for="email">Email:</label>
          <input required minlength="3" maxlength="32" id="email" class="form-control" name="email" type="text" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="username">Username:</label>
          <input required minlength="3" maxlength="16" id="username" class="form-control" name="username" type="text" placeholder="Enter username">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input required minlength="3" maxlenght="16" id="password" class="form-control" name="password" type="password" placeholder="Enter password">
        </div>
        <input type="submit" name="submit" value="Register" style="background-color: #B9CFE3;" class="btn w-100 mt-4">
        <div id="_errorAlert" class="mt-4 d-flex flex-column"></div>
        <a href="index.html">
          <p class="text-center">Go back to Login</p>
        </a>
      </form>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>