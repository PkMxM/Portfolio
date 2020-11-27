<?php

include_once "header.php";

include_once "../classes/confirm.php";

   
        $confirm = new Confirm;
        $bookingID = $_POST['bookingID'];
        $checkin = $_POST['checkin'];
        $totalAmount = $_POST['totalAmount'];
       
       
        $confirm->deletebooking($bookingID);
        
        $cancellation = $confirm->setCancellation($bookingID,$checkin,$totalAmount);

     
        if($cancellation == 0){
           echo "
        <div class='container py-5'>
            <div class='jumboton'>
                <h3 class='text-center'>Your cancellation has been accepted. We are waiting fou your booking next time.</h3>
            </div>
        </div>";
        } else {
        echo
        "<div class='container py-5'>
            <div class='jumboton'>
                <p class='h3'>
                    We've accepted your cancelling.</P>
                <p class='h3'>
                    Unfortunately,you should pay <b class='text-danger'>$" .$cancellation ."</b> according to our Cancellation Policy.
                </p>
            </div>
        </div>";
        }

        include_once "footer.php";

    ?>