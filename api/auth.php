<?php 
    function auth() {
        if ($_POST['auth'] != "12345") {
            header("Location: ../index.php");
            exit();
        }
    }

auth();
$auth_cookie_name = "auth_status";
$auth_cookie_value = "true";
setcookie($auth_cookie_name, $auth_cookie_value, time() + (86400 * 30), "/");
echo "auth successful";