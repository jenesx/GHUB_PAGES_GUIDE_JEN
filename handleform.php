<?php

session_start();

// Check if the submitbutton exists
if(isset($_POST['submitButton'])) {

    // Get the first name from the index.php
    $firstName = $_POST['FirstName'];

    // Get the password from the input field
    $password = md5(string: $_POST['Password']);

    // Set the session variable
    $_SESSION['FirstName'] = $firstName;
    $_SESSION['Password'] = $password;

    // Go back to the index.php
    header(header: 'Location: index.php');
}
?>