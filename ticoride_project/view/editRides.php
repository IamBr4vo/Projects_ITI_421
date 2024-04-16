<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Ride</title>
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
                            <a href="dashboard.php" class="btn btn-primary">Dashboard</a>
                            <button type="button" class="btn btn-primary active" disabled>Rides</button>
                            <a href="settings.html" class="btn btn-primary">Settings</a>
                        </div>
                        <h2 class="mb-4">Edit Ride</h2>
                        <!--Include the PHP file to get ride information -->
                        <?php 
                            require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/getInfoRide.php'); 
                            $rideId = isset($_GET['rideId']) ? $_GET['rideId'] : '';
                            if (!$rideId) {
                                echo "Error: Ride ID not provided.";
                                exit();
                            }
                        ?>
                        <form action="../functions/updateRide.php" method="post">
                            <div class="mt-4">
                                <label for="rideName" class="form-label">Ride Name</label>
                                <input type="text" class="form-control" id="rideName" name="rideName" value="<?php echo htmlspecialchars($rideName); ?>">
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="startFrom" class="form-label">Start From</label>
                                    <input type="text" class="form-control" id="startFrom" name="startFrom" value="<?php echo htmlspecialchars($startFrom); ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="end" class="form-label">End</label>
                                    <input type="text" class="form-control" id="end" name="end" value="<?php echo htmlspecialchars($endTo); ?>">
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="2"><?php echo htmlspecialchars($description); ?></textarea>
                            </div>
                            <hr>
                            <h4>When</h4>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="departure" class="form-label">Departure</label>
                                    <input type="time" class="form-control" id="departure" name="departure" value="<?php echo htmlspecialchars($departure); ?>">
                                    <label for="arrival" class="form-label">Estimated Arrival</label>
                                    <input type="time" class="form-control form-control-sm" id="arrival" name="arrival" value="<?php echo htmlspecialchars($arrival); ?>">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Select Days</label>
                                    <div>
                                        <input type="checkbox" id="monday" name="monday" value="Monday" <?php if (in_array("Monday", $days)) echo "checked"; ?>>
                                        <label for="monday">Monday</label><br>
                                        <input type="checkbox" id="tuesday" name="tuesday" value="Tuesday" <?php if (in_array("Tuesday", $days)) echo "checked"; ?>>
                                        <label for="tuesday">Tuesday</label><br>
                                        <input type="checkbox" id="wednesday" name="wednesday" value="Wednesday" <?php if (in_array("Wednesday", $days)) echo "checked"; ?>>
                                        <label for="wednesday">Wednesday</label><br>
                                        <input type="checkbox" id="thursday" name="thursday" value="Thursday" <?php if (in_array("Thursday", $days)) echo "checked"; ?>>
                                        <label for="thursday">Thursday</label><br>
                                        <input type="checkbox" id="friday" name="friday" value="Friday" <?php if (in_array("Friday", $days)) echo "checked"; ?>>
                                        <label for="friday">Friday</label><br>
                                        <input type="checkbox" id="saturday" name="saturday" value="Saturday" <?php if (in_array("Saturday", $days)) echo "checked"; ?>>
                                        <label for="saturday">Saturday</label><br>
                                        <input type="checkbox" id="sunday" name="sunday" value="Sunday" <?php if (in_array("Sunday", $days)) echo "checked"; ?>>
                                        <label for="sunday">Sunday</label><br>
                                    </div>
                                </div>
                            </div>
                            <!--Hidden input to store ride ID -->
                            <input type="hidden" name="rideId" value="<?php echo htmlspecialchars($rideId); ?>">
                            <div class="mt-4">
                                <a href="dashboard.php" class="btn btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-success ms-2">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>