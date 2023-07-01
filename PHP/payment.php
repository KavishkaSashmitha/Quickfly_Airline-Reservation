<?php
require 'config.php';
include 'header.php';
?>
<link rel="stylesheet" href="../css/payment.css">
<?php
session_start();
$passengers = $_SESSION['variable'];
$receivedVariable = $_SESSION['variable2'];
$receivedVariable1 = $_SESSION['variable3'];
$customer = $_SESSION['var3'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $nic = $_POST['nic'];

    $sql2 = "SELECT * FROM schedule WHERE Airline_id='$receivedVariable1'";
    $result = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $airlineid = $row['Airline_id'];
            $departure = $row['Departure'];
            $destination = $row['Destination'];
            $date = $row['Flightdate'];
        }
    }

    $sql = "INSERT INTO customer(Customer_name, Telephone_Number, Customer_address, Email, NIC,Airline_id,Passengers)
    VALUES('$name', $contact, '$address', '$email', '$nic',$airlineid,$passengers)";

    if ($conn->query($sql)) {
        echo "<div class='payment'>";
        echo "<h2>Details Added Successfully!!</h2>";
        echo "<img src='../img/correct-icon.png' alt='correct' srcset=''>";
        echo "<p>You Have To Pay: Rs." . $receivedVariable . "/=</p>";
        echo "<h5>Airline ID: " . $airlineid . "</h5>";
        echo "<h5>Departure: " . $departure . "</h5>";
        echo "<h5>Destination: " . $destination . "</h5>";
        echo "<h5>Departure Date: " . $date . "</h5>";
        echo "<h5>Your Registered ID In the Receipt *[Make Sure to Remember]*</h5>";
        echo "<a href='paymentmethod.php'><button class='visa'>Visa</button></a>";
        echo "<button class='cash'>Cash</button>";
        ;

        // Retrieve customer ID
        $sql3 = "SELECT * FROM customer WHERE Customer_name = '$name' AND NIC = '$nic'";
        $result = $conn->query($sql3);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $customerid = $row['Customer_id'];
            }
        } else {
            echo "Error";
        }

        echo "<form method='post' action='download.php'>
                    <input type='hidden' name='name' value='$name'>
                    <input type='hidden' name='nic' value='$nic'>
                    <input type='hidden' name='receivedVariable' value='$receivedVariable'>
                    <input type='hidden' name='receivedVariable1' value='$receivedVariable1'>
                    <input type='hidden' name='customerid' value='$customerid'>
                    <button type='submit' class='download' name='downloadBtn'>Download Receipt</button>
              </form>";
        echo "</div>";

        // Redirect to download.php with URL parameters
        $url = "download.php?name=" . urlencode($name) . "&nic=" . urlencode($nic) . "&receivedVariable=" . urlencode($receivedVariable) . "&receivedVariable1=" . urlencode($receivedVariable1) . "&customerid=" . urlencode($customerid);
        echo "<script>window.location.href='$url';</script>";
        
        exit();
    } else {
        echo "Error";
    }
} else {
    echo "<div class='notfound'>";
    echo "<h3>Seeking answers, the digital realm whispers silence.</h3>";
    echo '<img src="../img/noresult.png" class="noresult" alt="" srcset="">';
    echo "</div>";
}

$conn->close();

?>
