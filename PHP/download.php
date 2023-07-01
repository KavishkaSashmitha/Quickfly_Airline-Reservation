<?php
session_start();

if (isset($_GET['name']) && isset($_GET['nic']) && isset($_GET['receivedVariable']) && isset($_GET['receivedVariable1']) && isset($_GET['customerid'])) {
    // Retrieve URL parameters
    $name = $_GET['name'];
    $nic = $_GET['nic'];
    $receivedVariable = $_GET['receivedVariable'];
    $receivedVariable1 = $_GET['receivedVariable1'];
    $customerid = $_GET['customerid'];

    // Generate the receipt content
    $receiptContent = "Quick Fly\n";
    $receiptContent .= "Airline-ID: $receivedVariable1\n";
    $receiptContent .= "Customer ID: $customerid\n";
    $receiptContent .= "Amount: Rs. $receivedVariable/=\n";
    $receiptContent .= "\nThank You For Choosing Us [Make Changes via CustomerID That Given]";

    // headers for downloading the file
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="receipt.txt"');

    // output receipt content for download
    echo $receiptContent;
    exit;
} else {
    echo "Error: Insufficient parameters.";
}
?>
