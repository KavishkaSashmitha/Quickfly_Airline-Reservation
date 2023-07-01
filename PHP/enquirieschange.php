<?php

require 'config.php';
include 'header.php';

?>

<link rel="stylesheet" href="../css/enquirieschange.css">
<?php

if($_SERVER['REQUEST_METHOD']==='POST'){
    $email= $_POST['email'];


    $sql= "SELECT * FROM customersupport WHERE Email = '$email'";

    $result = $conn->query($sql);

    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            echo "<div class='enq'>";
            echo"<h3>Enquiry ID:".$row['ID']."</h3>";
            echo "<ul>";
            echo "<li>Customer Name:".$row['Customer_name']."</li>";
            echo "<li>Email:".$row['Email']."</li>";
            echo "<li>Enquiry:".$row['Inquiry']."</li>";
            echo "<li>Details:".$row['Detail']."</li>";
            echo "</ul>";
            echo "<a href='customersupport.php'><button type='button'>Back</button></a>";
            echo "</div>";
        }
    }else{
        echo "Error";
    }
}
?>


<?php
include 'footer.php';
?>
