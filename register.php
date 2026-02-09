<?php
require "session.php";
require "csrf.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class ="container">
        <h2>Register</h2>
<form method="POST" action="auth/register.php">
    <input type="hidden" name="csrf_token" value="<?= generateToken(); ?>">

    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password (min 8 chars)" required><br><br>

    <button type="submit">Register</button>
</form>
 <div class="link">
        <a href="index.php">Back to login</a>
    </div>
    </div>

</body>
</html>