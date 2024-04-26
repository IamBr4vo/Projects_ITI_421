<?php require($_SERVER['DOCUMENT_ROOT'] . '/shared/header.php'); ?>
<title>Main</title>
<div class="card-body">
    <!-- nav: Button to go to the login page -->
    <nav class="navbar navbar-light justify-content-end mx-4">
        <a href="/pages/users/login.php" class="btn btn-outline-primary">Login</a>
    </nav>
    <!--Central image and welcome message -->
    <img src="/public/img/car.png" alt="Car" class="img-fluid mx-auto d-block mb-4">
    <h1>Welcome to TicoRides.com</h1>
    <form id="filterForm" action="/utils/filterRide.php" method="post">
        <!-- Trip search form -->
        <div class="row mt-4">
            <div class="col-md-6">
                <label for="fromLocation" class="form-label">From</label>
                <input type="text" class="form-control" id="fromLocation" name="fromLocation" placeholder="Enter start location">
            </div>
            <div class="col-md-6">
                <label for="toLocation" class="form-label">To</label>
                <input type="text" class="form-control" id="toLocation" name="toLocation" placeholder="Enter end location">
            </div>
            <div class="col-md-6 mt-4">
                <button type="submit" class="btn btn-primary btn-block">Find my Ride!</button>
            </div>
        </div>
    </form>
    <!--Section to display search results-->
    <h3 class="mt-4">Results for Rides that match your criteria:</h3>
    <!-- Include the PHP file to show the list of rides -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/models/showRideIndex.php'); ?>
</div>
<script src="/public/js/script.js"></script>
</body>

</html>