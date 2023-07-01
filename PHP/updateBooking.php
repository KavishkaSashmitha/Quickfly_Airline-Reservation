<?php

require 'config.php';
include 'header.php';

?>
<link rel="stylesheet" href="../css/updateBooking.css">

<?php

session_start();
$val1 = $_SESSION['variable'];
$val2 = $_SESSION['variable2'];
$val3 = $_SESSION['variable3'];
$val4 = $_SESSION['val1'];




$sql= "SELECT * FROM customer WHERE Customer_id = '$val4'";


$result = $conn->query($sql);

if($result->num_rows>0){
    

    while($row = $result->fetch_assoc()){
        echo "<div class='details'>";
        echo "<h2>Check And Make Changes</h2>";
        echo "<h5>#Your ID: ".$row['Customer_id']."</h5>";
        echo "<h5>#Your Name: ".$row['Customer_name']."</h5>";
        echo "<h5>#Your Telephone Number: ".$row['Telephone_Number']."</h5>";
        echo "<h5>#Your Address: ".$row['Customer_address']."</h5>";
        echo "<h5>#Email: ".$row['Email']."</h5>";
        echo "<h5>#NIC/Passport: ".$row['NIC']."</h5>";
        echo "<h5>#Passengers: ".$row['Passengers']."</h5>";
        echo'
        <form action="updated.php" method="post" class="form">
            <label for="name">Name:</label><br>
            <input type="text" name="name" required><br>
            <label for="tel">Telephone Number:</label><br>
            <input type="tel" name="tel"required><br>
            <label for="address">Customer Address:</label><br>
            <input type="text" name="address"required><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email"required><br>
            <label for="nic">NIC:</label><br>
            <input type="text" name="nic"required ><br>
            <label for="passengers">Passengers:</label><br>
            <input type="number" name="passengers"required><br>
            <button type="submit" class="update">Update</button>

        </form>';


        




        echo "</div>";
        
        
    }

}else{
    echo "Please Contact Customer Support";
}








$conn->close();
include 'footer.php';
?>