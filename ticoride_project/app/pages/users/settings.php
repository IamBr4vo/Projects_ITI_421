<?php require($_SERVER['DOCUMENT_ROOT'] . '/shared/header.php'); ?>
<title>Settings</title>
<img src="/public/img/car.png" alt="Car" class="img-fluid mx-auto d-block mt-3 mb-4">
<div class="card-body">
    <div class="btn-group mb-3" role="group" aria-label="Basic example">
        <a href="/pages/rides/dashboard.php" class="btn btn-primary">Dashboard</a>
        <a href="/pages/rides/addRides.php" class="btn btn-primary">Rides</a>
        <button type="button" class="btn btn-primary" disabled>Settings</button>
    </div>
    <h2 class="mb-4">Settings</h2>
    <!--breadcrumb navigation-->
    <div class="navigation mt-3">
        <p><a href="/pages/rides/dashboard.php">Dashboard</a> &gt; Settings</p>
    </div>
    <!--form fields for user settings like name and average speed-->
    <div class="mb-3">
        <label for="fullName" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="fullName">
    </div>
    <div class="mb-3">
        <label for="speedAverage" class="form-label">Speed Average</label>
        <input type="text" class="form-control" id="speedAverage">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">About Me</label>
        <textarea class="form-control" id="description" rows="2" placeholder="Something about me goes here"></textarea>
    </div>
    <div>
        <!--action buttons for saving or canceling changes -->
        <a href="/pages/rides/dashboard.php" class="btn btn-danger">Cancel</a>
        <button class="btn btn-success ms-2">Save</button>
    </div>
</div>
</body>

</html>