<?php
/** @var mysqli $db */

require_once 'includes/database.php';

session_start();

if (!isset($_SESSION['login'])) {
    if (isset($_POST['submit'])) {

        $user = htmlentities($_POST['user']);
        $password = htmlentities($_POST['password']);

        require_once 'includes/admin_error.php';

        if (empty($errors)) {

            $userquery = "SELECT * FROM admin WHERE user = '$user'";
            $userresult = mysqli_query($db, $userquery);
            if ($userresult) {
                $userdata = mysqli_fetch_assoc($userresult);
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
//    header("location: index.php");
//    exit();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post">
    <label for="user">user</label>
    <input id="user" type="text" name="user" value="<?= $login ?? '' ?>" />
    <p><?= $errors['user'] ?? '' ?></p>

    <label for="password">password</label>
    <input id="password" type="text" name="password" value="<?= $password ?? '' ?>" />
    <p><?= $errors['password'] ?? '' ?></p>

    <button type="submit" name="submit">Login</button>
</form>
<a href="admin_register.php">Register</a>


</body>
</html>
