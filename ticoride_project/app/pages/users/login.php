<?php require($_SERVER['DOCUMENT_ROOT'] . '/shared/header.php'); ?>
<title>Login</title>
<div class="card-body">
  <!--logo centered -->
  <img src="/public/img/car.png" alt="Car" class="img-fluid mx-auto d-block mb-4">
  <!--Login form -->
  <form id="loginForm">
    <div class="mb-3">
      <label for="username" class="form-label">Name</label>
      <!--Input field for username-->
      <input class="form-control" id="username" name="username">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <!--Input field for password-->
      <input class="form-control" id="password" name="password">
    </div>
    <div class="rich-text">
      <a class="btn btn-success" href="/pages/rides/dashboard.php">Login</a>
    </div>
  </form>
  <hr>
  <!--Link to registration page for new users -->
  <p class="text-center">¿Not an user? <a href="register.php">Register here</a></p>
</div>
</body>

</html>