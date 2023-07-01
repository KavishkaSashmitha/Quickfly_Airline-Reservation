<?php
require 'config.php';
include 'header.php';
include 'imageslider.php';

?>
<link rel="stylesheet" href="../css/editarea.css">

<?php

if ($_SERVER['REQUEST_METHOD']==='POST'){
    $customerid = $_POST['customerid'];


    $sql = "SELECT * FROM customer  JOIN schedule ON customer.Airline_id = schedule.Airline_id 
            WHERE  Customer_id='$customerid'";

    $result = $conn->query($sql);
    

    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){

            echo "<div class='manage'";
            echo "<h2>Your Details</h2>";
            echo "<p>Customer ID:".$customerid."</p>";
            echo "<p>Airline ID:".$row['Airline_id']."</p>";
            echo "<p>Departure :".$row['Departure']."</p>";
            echo "<p>Destination:".$row['Destination']."</p>";
            echo "<p>Date:".$row['Flightdate']."</p>";
            echo "</div>"; 
            echo "<form action=''method='post'>
            <a href='updateBooking.php'><button type='button' name='update' class='update'>Update</button></a>
            <a href='deleteBooking.php'><button type='button' name='delete'class='delete'>Delete</button></a>
        </form>";
        }
    }
    else{
        echo "<p>Can't Find Your Data</p>";
        echo "<a href='manage.php'><button>GO BACK</button></a>";
    }


}
else{
    echo "ERROR";
}

$conn->close();


session_start();
$_SESSION['val1']=$customerid;

include 'footer.php';


?>