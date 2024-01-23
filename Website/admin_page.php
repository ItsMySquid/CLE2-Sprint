<?php
/** @var mysqli $db */

session_start();

require_once 'includes/database.php';
if (isset($_SESSION['login'])) {
    $query = "SELECT * FROM appointment";

    $result = mysqli_query($db, $query)
    or die('Error ' . mysqli_error($db) . ' with query ' . $query);

    $appointments = [];

    if ($result = mysqli_query($db, $query)) {
        while ($row = $result->fetch_assoc()) {
            $appointments[] = $row;
        }
    }
} else {
    header("location: admin_login");
    exit();
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

<table>
    <tr>
        <th>Datum</th>
        <th>Tijd</th>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Telefoonnummer</th>
        <th>Email</th>
        <th>Opmerking</th>
    </tr>

    <?php foreach ($appointments as $appointment) {?>
        <tr>
            <td><?= $appointment['date'] ?></td>
            <td><?= $appointment['time'] ?></td>
            <td><?= $appointment['first_name'] ?></td>
            <td><?= $appointment['last_name'] ?></td>
            <td><?= $appointment['phone_number'] ?></td>
            <td><?= $appointment['email'] ?></td>
            <td><?= $appointment['remarks'] ?></td>
        </tr>
    <?php } ?>
</table>


</body>
</html>
