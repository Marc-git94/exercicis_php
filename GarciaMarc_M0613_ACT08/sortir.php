<?php
session_start();
require_once 'config.php';

// 1. Buidem les dades
$_SESSION = [];

// 2. Esborrem la cookie del navegador
if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params['path'], $params['domain'],
        $params['secure'], $params['httponly']);
}

// 3. Destruïm la sessió al servidor
session_destroy();

header('Location: login.php');
exit;
?>