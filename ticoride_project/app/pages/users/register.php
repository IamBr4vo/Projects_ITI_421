<?php require($_SERVER['DOCUMENT_ROOT'] . '/shared/header.php'); ?>
<title>Register</title>
<div class="card-body">
    <img src="/public/img/car.png" alt="Car" class="img-fluid mx-auto d-block mb-4">
    <form id="registerForm">
        <div class="mb-2">
            <label for="name" class="form-label">Name</label>
            <input class="form-control" id="name" name="name">
        </div>
        <div class="mb-2">
            <label for="lastname" class="form-label">Last Name</label>
            <input class="form-control" id="lastname" name="lastname">
        </div>
        <div class="mb-2">
            <label for="phone" class="form-label">Phone</label>
            <input class="form-control" id="phone" name="phone">
        </div>
        <div class="mb-2">
            <label for="username" class="form-label">Username</label>
            <input class="form-control" id="phone" name="phone">
        </div>
        <div class="mb-2">
            <label for="password" class="form-label">Password</label>
            <input class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input class="form-control" id="confirmPassword" name="confirmPassword">
        </div>
        <a class="btn btn-success btn-block" href="login.php">Register</a>
        <hr>
        <!--in case the user is already registered -->
        <p class="text-center">¿Already an user? <a href="login.php">Login here</a></p>
    </form>
</div>
</body>

</html>