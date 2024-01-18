<?php

$errors = [];

if (empty($user)) {
    $errors['user'] = "De gebruikersnaam mag niet leeg zijn.";
}

if (empty($password)) {
    $errors['password'] = "Het wachtwoord mag niet leeg zijn";
}

if (strlen($password) < 8) {
    $errors['password'] = 'Het wachtwoord moet langer zijn dan 8 karakters';
}