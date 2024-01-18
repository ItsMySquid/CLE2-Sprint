<?php
/** @var mysqli $db */

require_once 'includes/database.php';

session_start();

if (!isset($_SESSION['login'])) {
    if (isset($_POST['submit'])) {

        $email = htmlentities($_POST['email']);
        $password = htmlentities($_POST['password']);

        require_once 'includes/admin_error.php';

        if (empty($errors)) {

            $emailquery = "SELECT * FROM users WHERE email = '$email'";
            $emailresult = mysqli_query($db, $emailquery);
            if ($emailresult) {
                $userdata = mysqli_fetch_assoc($emailresult);
                if ($userdata && password_verify($password, $userdata['password'])) {
                    $_SESSION['login'] = true;
                    header("location: admin_page.php");
                }
                else {
                    $errors['loginFailed'] = "Incorrect login. Email & Password don't match";
                }
            }
            if (empty($userdata)) {
                $errors['loginFailed'] = "Incorrect login. Email & Password don't match";
            }
        }
    }
} else {
    header("location: index.php");
    exit();
}

?>