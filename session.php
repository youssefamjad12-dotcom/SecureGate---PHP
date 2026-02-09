<?php
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'domain' => '',
    'secure' => true,      // HTTPS only
    'httponly' => true,    // JS cannot access
    'samesite' => 'Strict'
]);

session_start();

if (!isset($_SESSION['regen'])) {
    session_regenerate_id(true);
    $_SESSION['regen'] = time();
}
