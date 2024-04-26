<?php
require($_SERVER['DOCUMENT_ROOT'] . '/utils/database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $lastname = $_POST['lastName'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    //check if the phone already exists in the database
    $pdo = get_pdo_connection();
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE phone = ?");
    $stmt->execute([$phone]);
    $phoneExists = $stmt->fetchColumn();

    //check if the username already exists in the database
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $usernameExists = $stmt->fetchColumn();

    if ($phoneExists) {
        echo "<script>alert('El teléfono ya existe.'); window.history.back();</script>";
    } elseif ($usernameExists) {
        echo "<script>alert('El nombre de usuario ya existe.'); window.history.back();</script>";
    } else {

        $hashedPassword = md5($password);
        $pdo = get_pdo_connection();
        $sql = "INSERT INTO users (name, last_name, phone, username, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        if ($stmt->execute([$name, $lastname, $phone, $username, $hashedPassword])) {
            echo "<script>alert('Registro exitoso.'); window.location.href='/pages/users/login.php';</script>";
        } else {
            echo "<script>alert('Error al registrar usuario.');</script>";
        }
    }
}
