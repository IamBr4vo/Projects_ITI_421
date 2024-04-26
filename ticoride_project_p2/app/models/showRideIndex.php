<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/database.php');
$pdo = get_pdo_connection();
// Prepare the SQL query to get all the rides
$sql = "SELECT * FROM rides";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$rides = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="card mt-2">
    <label class="form-label ms-3 my-2">Your current list of Rides</label>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!--Loop through PHP to generate table rows -->
                    <?php foreach ($rides as $ride) : ?>
                        <?php
                            //Get the name of the user associated with this trip
                            $sql = "SELECT username FROM users WHERE id = ?";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([$ride['user_id']]);
                            $user = $stmt->fetch(PDO::FETCH_ASSOC);
                        ?>
                        <tr>
                            <td><?php echo $user['username']; ?></td>
                            <td><?php echo $ride['start_from']; ?></td>
                            <td><?php echo $ride['end_to']; ?></td>
                            <td>
                                <a href="/pages/rides/viewRide.php?rideId=<?php echo $ride['id']; ?>" class="btn btn-primary">View</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>