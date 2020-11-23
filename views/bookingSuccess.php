<?php
    include_once "header.php";

    include_once "../classes/confirm.php";

?>

    <div class="jumbotron">
        <h1>Thank you for your booking.</h1> 
        <!-- <h1>We're looking forward to seeing you!</h1> -->
        <p class="h3">Here is your Booking #<? echo $sql = "SELECT booking_No. FROM booking" ?></p>
        <p class="h4">If you want to recreate your booking# put your Booking # and Name , Then qlick the button.</p>

        <div class="input-group">
            <input type="text" class="form-control" placeholder="put your Booking#" aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">
            <div class="input-group-append" id="button-addon4">
            <button class="btn btn-outline-secondary" type="button" name="btnconfirm">Confirm</button>
        </div>





<?php

    include_once "footer.php";

    
?>