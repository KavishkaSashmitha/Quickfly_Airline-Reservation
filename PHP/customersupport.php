<?php
include  'header.php';
include 'function.php';
?>

<link rel="stylesheet" href="../css/customersupport.css">
        
        <center>
            <h1>Customer Support</h1>
        </center>
            
            <div class="support-container">
                <div class="container">
                    <div class="support-text">
                        <p>Welcome Customer Support of Airline Ticket Reservation System. Our dedicated support team is here to assist you with any complex inquiries or issues you may have regarding your flight reservations.</p>
                        <p>Please fill out the form below, providing as much detail as possible. This will help us understand and resolve your query efficiently.</p>
                    
                    </div>
    
                    <form class="support-form" action='customer.db.php' method='post'>
                        <input type="text" placeholder="Your Name" name="name" required>
                        <input type="email" placeholder="Your Email" name="email" required>
                        <select name="inquiry" required>
                            <option value="">Select Inquiry Type</option>
                            <option value="Booking Assistance">Booking Assistance</option>
                            <option value="Flight Changes">Flight Changes</option>
                            <option value="Cancellation and Refunds">Cancellation and Refunds</option>
                            <option value="Baggage and Carry-on">Baggage and Carry-on</option>
                            <option value="Other">Other</option>
                        </select>
                        <textarea placeholder="Message" rows="5" name="details" required></textarea>
                        <button type="submit">Submit</button>
                        <a href="enquiries.php"><button type="button" >Check Previous enquiries</button></a>
                        
                    </form>
                </div>
            </div>
            <br><br><br>
            <br><br><br>
            
    
<?php

    

include 
'footer.php';
?>
