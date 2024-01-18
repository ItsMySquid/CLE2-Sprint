<?php
if(isset($_POST['submit'])) {
    /** @var mysqli $db */
    require_once "includes/database.php";

    $user = '';
    $password = '';

    $user = $_POST['user'];
    $password = $_POST['password'];
    require_once 'includes/admin_error.php';
    if (empty($errors)) {
        $password = password_hash("$password", PASSWORD_DEFAULT);

        $query = "INSERT INTO admin (`user`, `password`) VALUES ('$user','$password')";
        $result = mysqli_query($db,$query);
        if ($result) {
            header("location:admin_login.php");
            exit();
        }
    }

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

    <button type="submit" name="submit">Register</button>
</form>
<a href="admin_login.php">Terug</a>

</body>
</html>
