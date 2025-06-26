<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


function requireAuth() {
    if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
        header("Location: login.php?message=access_denied");
        exit();
    }
}

/**
 * Get current user information
 * @return array 
 */
function getCurrentUser() {
    return [
        'user_id' => $_SESSION['user_id'] ?? null,
        'username' => $_SESSION['username'] ?? null,
        'login_time' => $_SESSION['login_time'] ?? null
    ];
}
?>
