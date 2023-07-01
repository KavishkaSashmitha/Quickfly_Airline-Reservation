<?php

    include "header.php";
    include "imageSlider.php";

?>
<link rel="stylesheet" href="../css/bookingBox.css">
<div class="booking-container">
<h1>Booking Area</h1>
    <button>
    <a href="index.php">
        <span class="box-1">
            BOOK A TRIP
        </span>
    </a>
    <button>
    <a href="manage.php">
        <span class="box-1">
            Manage  
        </span>
    </a>
    </button>
    <button>
    <a href="checkin.php">
    <span class="box">Check-IN    
    </span>
    </a>
    </button>
    <div class="grid">
        <form action="" method="POST">
            <div class="content">
                <p>Not In Function</p>
                <input type="text" placeholder="Customer Id" required>
            </div>
            <div class="search">
                <button type="submit" class="submit-button" name="submit-button">Search</button>
            </div>
            
            
            
        </form>
    </div>
</div>


<?php

include "footer.php";

?>