<?php

?>
<link rel="stylesheet" href="../css/bookingBox.css">

<div class="booking-container">
    <h1>Booking Area</h1>
    <button>
    <a href="index.php">
        <span class="box">
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
    <a href="checkin.php">
    <button>
    <span class="box-1">Check-IN
    </span>
    </button></a>
    <div class="grid">
        <form action="process.php" method="POST">
            <div class="content">
                <label for="from">From:</label>
                <input type="date" name="from" placeholder="Select a date"required>
            </div>
        

            <div class="content" >
                <label for="to">To:</label>
                <input type="date" name="to" placeholder="Select a date" required>
            </div>
            <div class="content">
                <select name="DEPARTURE" id="" class="from" required>
                    <option value="">Departure</option>
                    <option value="Katunayaka">Katunayaka</option>
                    <option value="Maththala">Maththala</option>
                    <option value="Palali">Palali</option>
                    <option value="Trinco">Trinco</option>
                </select>
            </div>
            <div class="content" >
                <select name="Destination" id="" class="from" required>
                    <option value="Destination">Destination</option>
                    <option value="Katunayaka">Katunayaka</option>
                    <option value="Maththala">Maththala</option>
                    <option value="Palali">Palali</option>
                    <option value="Trinco">Trinco</option>
                </select>
            </div>
            
            <div class="content" id="passenger" >
                <label for="noOfPassengers">NO OF PASSENGERS:</label>
                <input type="number" name="noOfPassengers"required min="1">
            </div>
            
            <div class="checkmark">
            <label class="container">Flexible Dates
                <input checked="" type="checkbox" name="container">
                </label>
            </div>

            

            <div class="search">
                <button type="submit" class="submit-button" name="submit-button">Search</button>
            </div>
            
            
            
        </form>
    </div>
</div>