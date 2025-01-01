<?php
require_once('./csrfToken.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ensure the CSRF token is valid before processing the form
    if (!isset($_POST['csrf_token']) || !verifyCSRFToken($_POST['csrf_token'])) {
        die('Invalid CSRF token');
    }

    // Process the form data if the token is valid
    // Your form processing code here 
    echo "<pre>";
    print_r($_POST);
}
