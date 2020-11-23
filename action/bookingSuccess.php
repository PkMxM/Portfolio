<?php
    include "../classes/confirm.php";
    
    if(isset($_POST['book'])){
        $name = $_POST['name'];
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];
        $room = $_POST['room'];
        $numOfRoom = $_POST['numRoom'];
        $adult = $_POST['adult'];
        $child = $_POST['child'];
        $infant = $_POST['infant']; 
        $contactNo = $_POST['contactNo'];
        $email = $_POST['email']; 
        $request = $_POST['request'];

        $confirm = new Confirm();
        $confirm->createBooking($name, $room, $adult, $child, $infant, $contactNo,$email,$checkin, $checkout, $request); 
    
    }

    session_start();

