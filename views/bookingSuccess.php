<?php
    include_once "header.php";

    include_once "../classes/confirm.php";

?>

    <div class="container mt-4">
        <div class="jumbotron">
            <form action="../action/recreate.php" method="get">
                <h1>Thank you for your booking.</h1> 
                <h1>We're looking forward to seeing you!</h1>
                <p class="h3">Here is your Booking #<?php echo $_GET['bookingID']; ?></p>
                <p class="h4">If you want to check your booking, visit to the 'HOME' page and put your Booking # and your Name :)</p>

                <p class="h4 pt-5" style="color:#00BB00;" ><b>Cancellation Policy:</b></p>
                <P class="h5">If you want to cancel your booking</P>
                <P class="h5">Before a week to 3days:30%</P>
                <P class="h5">Before 2 days:50%</P>
                <P class="h5">On the date:70%</P>
                            
            </form>
        </div>
    </div>

<?php

    include_once "footer.php";

    
?>