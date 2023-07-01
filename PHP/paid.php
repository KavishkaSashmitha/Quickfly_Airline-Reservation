<?php
require 'config.php';
include 'header.php';

?>

<link rel="stylesheet" href="../css/paid.css">

<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cardnum = $_POST['cardnumber'];
    $holder = $_POST['holdername'];
    $exmon = $_POST['exmonth'];
    $exyear = $_POST['exyear'];
    $cvv = $_POST['cvv'];

    echo "hi";
    echo $cardnum;
    echo $holder;
    echo $exmon;
    echo $exyear;
    echo $cvv;

    $sql = "INSERT INTO paymentcard(Card_number, Holder_name, Expire_month,Expired_year, Cvv)
            VALUES ($cardnum, '$holder','$exmon','$exyear', $cvv)";

    if ($conn->query($sql)) {
        echo "<div class='add'";
        echo "<p>Card Added Succesfully!!</p><br>";
        echo "<img src='../img/correct-icon.png' alt='correct'>";
        echo "<form action='viewcard.php' method='post'>
                <input type='hidden' value='$cardnum'  name='cardnum'>
                <button type='submit'>View Card</button>
                </form>";
        echo "</div>";
        
        
    } else {
        echo "Unsuccessful Add";
    }
}
?>




<?php


$conn->close();
include 'footer.php';
?>

