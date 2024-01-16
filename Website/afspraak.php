<?php
/** @var mysqli $db */

require_once 'includes/database.php';

if(isset($_POST['submit'])) {
    $date = $_POST['date'];
    $time = $_POST['time'];
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $phone_number = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $remarks = $_POST['remarks'];

    require_once 'includes/form-validation.php';
    if (empty($errors)) {
        $query = "INSERT INTO appointment (date, time, first_name, last_name, phone_number, email, remarks) VALUES ('$date', '$time', '$first_name', '$last_name', '$phone_number', '$email', '$remarks')";
        $results = mysqli_query($db, $query);

        header('location: index.php');
        exit();
    }
}
mysqli_close($db)
?>

<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href="style/style.css">
        <title>Afspraak Maken | Elfie Creates</title>
    </head>

    <body>
        <nav>
            <a href="index.php"><img class="nav_logo" src="images/logo.png" alt=""></a>
            <div class="links_nav">
                <a class="nav_buttons" href="afspraak.php">Afspraak Maken</a>
                <a class="nav_buttons" href="producten.php">Onze Diensten</a>
                <a class="nav_buttons" href="over_ons.php">Over Ons</a>
            </div>
        </nav>

        <h1>This is a Heading</h1>
        <p>This is a paragraph.</p>
    </body>
</html>
