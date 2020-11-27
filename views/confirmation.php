<?php
    include_once "header.php";

    include_once "../classes/confirm.php";

    $confirm = new Confirm;  


    if(isset($_POST['confirm'])){
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
        $numOfPeople = $adult + $child + $infant;
        $request = $_POST['request'];

        $confirm->setRoom($room);
        $confirm->setCheckin($checkin);
        $confirm->setCheckout($checkout);
        $confirm->setNumOfRoom($numOfRoom);
        $confirm->setNight();
        $totalAmount = $confirm->setTotalAmount();
        
               
        if($checkin > $checkout){
            echo "<h3>Error, Please set the date of check out before the date of check in.</h3>";
        } else {
          
            // $checkin_result = $confirm->setCheckin($checkin);
            
            // echo $name, $checkin, $checkout;

            echo 
                "<div class='container mt-4'>
                    <div class='jumbotron'>
                        <form action='../action/bookingSuccess.php' method='post'>
                            <p class='h5'>NAME : $name </p><input type='hidden' name='name' value='$name'><br>

                            <P class='h5'>Date of CHECK IN : $checkin </p><input type='hidden' name='checkin' value='$checkin'> <br>

                            <p class='h5'>Date of CHECK OUT : $checkout </p><input type='hidden' name='checkout' value='$checkout'> </br>

                            <P class='h5'>Num Of Night : "  .$confirm->getNight(). " night</p>
                            <p class='h5'>Type of Room / Num of Rooms : $room <input type='hidden' name='room' value='$room'>/ $numOfRoom </p><input type='hidden' name='numRoom' value='$numOfRoom'><br>

                            <p class='h5'>Number of People : $numOfPeople </p><br>
                            <p class='h5'>Requests : $request </p><input type='hidden' name='request' value='$request'><br>

                            <h3 class='display-5 text-danger'>Total Amount : $totalAmount </h3><br>
                            <input type='hidden'  name='totalAmount' value='$totalAmount'>
                            <div class='text-right'>
                                <button type='submit' name='book' class='btn btn-success text-white px-5'>Book Now</button>
                                <a href='booking.php' class='btn btn-warning text-white btm-sm px-5'>Reset</a>
                            </div>
                            <input type='hidden' name='adult' value='$adult'>
                            <input type='hidden' name='child' value='$child'>
                            <input type='hidden' name='infant' value='$infant'>
                            <input type='hidden' name='contactNo' value='$contactNo'>
                            <input type='hidden' name='email' value='$email'>
                        </form>
                    </div>
                </div>";

            }
        
    }

    include_once "footer.php";
?>