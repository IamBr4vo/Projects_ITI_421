<?php require($_SERVER['DOCUMENT_ROOT'] . '/shared/header.php'); ?>
<title>Login</title>
<nav class="navbar navbar-light justify-content-end mx-4">
  <a href="../../index.php" class="btn btn-outline-danger">Back</a>
</nav>
<div class="card-body">
  <!--logo centered -->
  <img src="/public/img/car.png" alt="Car" class="img-fluid mx-auto d-block mb-4">
  <!--Login form -->
  <form id="loginForm" action="/actions/users/authenticateLogin.php" method="post">
    <div class="mb-3">
      <label for="username" class="form-label">Name</label>
      <!--Input field for username-->
      <input class="form-control" id="username" name="username" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <!--Input field for password-->
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="rich-text">
      <button type="submit" class="btn btn-success">Login</button>
    </div>
  </form>
  <hr>
  <!--Link to registration page for new users -->
  <p class="text-center">¿Not an user? <a href="register.php">Register here</a></p>
</div>
</body>

</html>