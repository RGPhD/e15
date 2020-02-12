<?php
/*  
This is the controller file.
*/
session_start();

$results = null;

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];

    extract($results);

    $_SESSION['results'] = null;
}

# Can remove the closing php tag if only php is in the file.
require 'index-view.php';