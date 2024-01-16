<?php
$host = "";
$database = "prj_2023_2024_ressys_t22";
$user = "prj_2023_2024_ressys_t22";
$password = "uwaezeim";

$db = mysqli_connect($host, $database, $user, $password)
    or die("Error: " . mysqli_connect_error());