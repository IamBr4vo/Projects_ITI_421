<?php
//Check if the "From" and "To" fields have been sent
if (isset($_POST['fromLocation']) && isset($_POST['toLocation'])) {
    //obtener los valores de los campos "From" y "To"
    $fromLocation = $_POST['fromLocation'];
    $toLocation = $_POST['toLocation'];

    //perform the SQL query to filter the rides that match the "From" and "To" fields
    require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/database.php');
    $pdo = get_pdo_connection();

    if (!empty($fromLocation) || !empty($toLocation)) {
        //If at least one of the fields is not empty, filter on them
        $sql = "SELECT * FROM rides WHERE start_from = ? AND end_to = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$fromLocation, $toLocation]);
    } else {
        //If both fields are empty, show all rides
        $sql = "SELECT * FROM rides";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }

    $rides = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //Return the results as a JSON response
    echo json_encode($rides);
} else {
    //If "From" and "To" fields were not provided, show all rides
    require_once($_SERVER['DOCUMENT_ROOT'] . 'showRideIndex.php');
}
