<?php
require "session.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
    <h2>Welcome 🎉</h2>
    <p style="text-align:center;">You are logged in securely.</p>
<br>
    <form method="POST" action="auth/logout.php">
        <button type="submit">Logout</button>
    </form>
</div>

</body>
</html>