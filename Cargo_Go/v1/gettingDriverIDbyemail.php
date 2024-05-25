<?php
// getDriverIDByEmail.php

require_once '../includes/DbOperations.php';
$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['Driver_Email'])) {
        $email = $_POST['Driver_Email'];

        $db = new DbOperations();
        $driverID = $db->getDriverIDByEmail($email);

        if ($driverID) {
            $response['error'] = false;
            $response['Driver_ID'] = $driverID;
        } else {
            $response['error'] = true;
            $response['message'] = "Driver ID not found for the provided email";
        }
    } else {
        $response['error'] = true;
        $response['message'] = "Driver email is missing";
    }
} else {
    $response['error'] = true;
    $response['message'] = "Invalid Request";
}

echo json_encode($response);
?>
