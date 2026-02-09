<?php
require "../config/db.php";
require "../session.php";
require "../csrf.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!verifyToken($_POST['csrf_token'])) {
        die("Invalid CSRF token");
    }

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $pdo->prepare(
        "SELECT id, password_hash FROM users WHERE email = :email"
    );
    $stmt->execute([':email' => $email]);

    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password_hash'])) {
        session_regenerate_id(true);
        $_SESSION['user_id'] = $user['id'];
        header("Location: ../dashboard.php");
        exit;
    } else {
        echo "Invalid login credentials";
    }
}
