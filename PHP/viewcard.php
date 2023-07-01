<?php

require 'config.php';
include 'header.php';?>


<link rel="stylesheet" href="../css/viewcard.css">


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $cardnum = $_POST['cardnum'];


    $sql2 = "SELECT * FROM paymentcard WHERE Card_number = '$cardnum'";
    $result = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='details'>";
            echo "<h3>Your Card Detais</h3><br>";
            echo "<p>Card ID: " .$row['Card_id'] . "</p><br>";
            echo "<p>Card Number: " . $row['Card_number'] . "</p><br>";
            echo "<p>Name: " . $row['Holder_name'] . "</p><br>";
            
            echo "</div>";
        }
    }
} else {
    echo "There is an error.";
}?>

<br><br><br>
<br><br><br>
<br><br><br>

<br><br><br>

<?php

$conn->close();
include 'footer.php';

?>