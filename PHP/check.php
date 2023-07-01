<?php

    require 'config.php';
    include 'header.php';
    session_start();
    $receivedVariable = $_SESSION['variable'];


   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $clickedButton = $_POST['submitBtn'];
        echo $finalprice;
    
}

 $sql = "SELECT * FROM schedule WHERE Airline_id = '$clickedButton'";

 $result = $conn->query($sql);

 if($result->num_rows>0){
    while($row= $result->fetch_assoc()){
        
        echo "<div class='result-container'>";
        
        echo "<h2>You Have Selected</h2>";
        echo "<h4>Airline_id:".$row['Airline_id']."</h4>";
        echo "<h4>Departure:".$row['Departure']."</h4>";
        echo "<h4>Destination:".$row['Destination']."</h4>";
        echo "<h4>FlightDate:".$row['Flightdate']."</h4>";
        $price=$row['Price'] * $receivedVariable;
        echo "<h4>Total Amount:Rs.".$price.".00/=</h4>";
        echo "</div>";
        echo "<img src='../img/logo.png' class='logo' alt='Logo>";
        echo "<div class='BTN'>";
        echo "<a href='Book.php'><button type='submit' class='book-Btn'>Book</button></a>";
        echo "<a href='index.php'><button class='cancelBtn'>Cancel</button></a>";
        echo "</div>";
        

    }
 }
 else{
    echo"<h3>Seeking answers, the digital realm whispers silence.</h3> ";
    echo '<img src="../img/noresult.png" class="noresult" alt="" srcset="">';
 }

 session_start();
 
 
 $_SESSION['variable2'] = "$price";
//Passing Variables

 

$conn->close();

include 'footer.php';
?>