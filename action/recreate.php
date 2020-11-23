<?php
    include_once "../classes/confirm.php";

    $bookingNo = $_POST['bookingNo'];
    $name = $_POST['name'];
    $checkin = $_POST['checkin'];
    $checkout =$_POST['checkout'];
    $room = $_POST['room'];
    $numOfRoom =$_POST['numRoom'];
    $adult = $_POST['adult'];
    $child = $_POST['child'];
    $infant = $_POST['infant'];
    $contactNo = $_POST['contactNo'];
    $email = $_POST['email'];    
    $request = $_POST['request'];

    

    $confirm = new Confirm;
    $confirm->updatebooking($bookingNo, $name,$checkin,$checkout,$room,$numOfRoom,$adult,$child,$infant,$contactNo,$email,$request);

    