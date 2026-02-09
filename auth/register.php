<?php
require "../config/db.php";
require "../session.php";
require "../csrf.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!verifyToken($_POST['csrf_token'])) {
        die("Invalid CSRF token");
    }

    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];

    if (strlen($password) < 8) {
        die("Password must be at least 8 characters");
    }

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare(
        "INSERT INTO users (username, email, password_hash)
         VALUES (:username, :email, :password)"
    );

    $stmt->execute([
        ':username' => $username,
        ':email'    => $email,
        ':password' => $hash
    ]);

    echo "Registration successful";
}
