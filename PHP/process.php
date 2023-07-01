<?php
require 'config.php';
include 'header.php';
include 'imageSlider.php';



if($_SERVER['REQUEST_METHOD']==='POST'){
    $todate =$_POST['from'];
    $fromdate=$_POST['to'];
    $DEPARTURE=$_POST['DEPARTURE'];
    $Destination=$_POST['Destination'];
    $passengers = $_POST['noOfPassengers'];
    
     

$sql = "SELECT * FROM schedule WHERE Departure = '$DEPARTURE' and Destination='$Destination' and Flightdate BETWEEN '$todate' and '$fromdate' ";

$result =$conn->query($sql);


if($result->num_rows>0){
    
    echo '<table>';
    echo '<tr>';
    echo '<th>Airline ID </th>';
    echo '<th>Departure </th>';
    echo '<th>Destination </th>';
    echo '<th>Date </th>';
    echo '<th>Departure Time </th>';
    echo '<th>Arrival Time </th>';
    echo '<th>Price </th>';
    echo '<th></th>';
    echo '</tr>';
    while($row = $result->fetch_assoc())
    {
        $buttonValue = $row['Airline_id'];
        echo '<tr>';
        echo '<td>'.$row["Airline_id"].'</td>';
        echo '<td>'.$row["Departure"].'</td>';
        echo '<td>'.$row["Destination"].'</td>';
        echo '<td>'.$row["Flightdate"].'</td>';
        echo '<td>'.$row["Departure_time"].'</td>';
        echo '<td>'.$row["Arrival_time"].'</td>';
        $price=$row["Price"];
        $finalprice = $price * $passengers;
        echo '<td>RS.'.$finalprice.'</td>';
        echo '
            <form action="check.php" method="POST">
                <td><button type="submit" class="Chck-Btn" name="submitBtn" value="' . htmlspecialchars($buttonValue) . '">CHECK</button></td>
            </form>';
        echo '</tr>';
        
    }
    echo'</table>';
    

}
else{
    echo "<div class='notfound'";
    echo"<h3>Seeking answers, the digital realm whispers silence.</h3> ";
    echo '<img src="src/img/noresult.png" class="noresult" alt="" srcset="">';
    echo "</div>";
    
}



}
session_start();
$_SESSION['variable'] = "$passengers";
$_SESSION['variable3']="$buttonValue";


$conn->close();


include 'footer.php';

 
?>