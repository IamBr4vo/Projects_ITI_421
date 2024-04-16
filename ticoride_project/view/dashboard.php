<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body class="custom-body">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="user-profile">
                        <a href="settings.html"><span class="">Welcome </span><span class="text-orange">Bravo</span>
                            <img src="../images/user.jpg" alt="User" class="user-image"></a>
                    </div>
                    <img src="../images/car.png" alt="Car" class="img-fluid mx-auto d-block mt-3 mb-4">
                    <div class="card-body">
                        <div class="btn-group mb-3">
                            <button type="button" class="btn btn-primary active" disabled>Dashboard</button>
                            <a href="addRides.html" class="btn btn-primary">Rides</a>
                            <a href="settings.html" class="btn btn-primary">Settings</a>
                        </div>
                        <h2 class="mb-4">Dashboard</h2>
                        <div class="navigation mt-3">
                            <p>Dashboard &gt; </p>
                        </div>
                        <h5 class="mb-4">My Rides</h5>
                        <!-- Include the PHP file to show the list of rides -->
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/utils/showRides.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../script.js"></script>
</body>

</html>