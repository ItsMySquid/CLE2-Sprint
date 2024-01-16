<?php
    if($_POST['date'] == '') {
        $errors['date'] = 'Er moet een datum worden ingevuld.';
}
    if($_POST['time'] == '') {
        $errors['time'] = 'Er moet een tijd worden geselecteerd.';
}
    if($_POST['firstName'] == '') {
        $errors['firstName'] = 'Er moet een voornaam worden ingevuld.';
}
    if($_POST['lastName'] == '') {
        $errors['lastName'] = 'Er moet een achternaam worden ingevuld.';
}
    if(!is_numeric($_POST['phoneNumber'])) {
        $errors['phoneNumber'] = 'Er moet een telefoonnummer worden ingevuld.';
}
    if($_POST['email'] == '') {
        $errors['email'] = 'Er moet een email worden ingevuld.';
}