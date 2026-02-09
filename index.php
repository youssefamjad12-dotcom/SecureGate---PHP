<?php
require "session.php";
require "csrf.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
        <link rel="stylesheet" href="assets/style.css">

</head>
<body>
    <div class ="container">
        <h2>Login</h2>
<form method="POST" action="auth/login.php">
    <input type="hidden" name="csrf_token" value="<?= generateToken(); ?>">

    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>

    <button type="submit">Login</button>
</form>
<div class ="link">
<a href="register.php">Register</a>
    </div>
    </div>
</body>
</html>