<?php
session_start(); // Connect to the current session
session_unset(); // Eliminate every session variable
header(header: 'Location: index.php'); // Return to homepage
?>