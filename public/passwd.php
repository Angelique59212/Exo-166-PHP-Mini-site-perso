<?php
session_start();
if (isset($_POST['submit'], $_POST['passwd'],$_POST['login'])) {
    if ($_POST['passwd'] === "userpasswd" && $_POST['login'] === "admin") {

        $_SESSION['error'] = 'valid';
        header('Location: /?page=admin');
    }
    else {
        $_SESSION['error'] = "error";
        header('Location: /');
    }
}

if (isset($_POST['disconnect'])) {
    $_SESSION = array();
    $params = session_get_cookie_params();
    setcookie(session_name(), "", time() - 10000, $params['path'], $params['domain'], $params['secure'],
        $params['httponly']);
    session_destroy();
    header('Location: /');
}
