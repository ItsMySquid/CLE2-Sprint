<?php
/** @var mysqli $db */

session_start();

require_once 'includes/database.php';
if (isset($_SESSION['login'])) {
    $query = "SELECT * FROM appointment";

    $result = mysqli_query($db, $query)
    or die('Error ' . mysqli_error($db) . ' with query ' . $query);

    $appointment = mysqli_fetch_assoc($result);
} else {
//    header("location: admin_login");
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

<?php
if ($result = mysqli_query($db, $query)) {
    while ($row = $result->fetch_assoc()) {
        $date = $row["date"];
        $time = $row["time"];
        $first_name = $row["first_name"];
        $last_name = $row["last_name"];
        $phone_number = $row["phone_number"];
        $email = $row["email"];
        $remarks = $row["remarks"];

        echo '<tr> 
                  <td>'.$date.'</td> 
                  <td>'.$time.'</td> 
                  <td>'.$first_name.'</td> 
                  <td>'.$last_name.'</td> 
                  <td>'.$phone_number.'</td> 
                  <td>'.$email.'</td> 
                  <td>'.$remarks.'</td> 
              </tr>';
    }
}
?>
    </table>


</body>
</html>
