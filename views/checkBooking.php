<?php
include_once "header.php";

include_once "../classes/confirm.php";

    $bookingID = $_GET['bookingID'];
    $name = $_GET['name'];

    $confirm = new Confirm;    
    $bookingDetails = $confirm->getBooking($bookingID, $name);   

?>

    <div class="container">        
        <form action="" method="post">
        <div class="row">
            <div class="col">
                <input type="hidden" name="bookingID" value="<?= $bookingDetails['booking_no']?>">
                <label for="name">NAME</label>
                <input type="text" name="name" id="name" class="form-control mb-2" value="<?= $bookingDetails['full_name'] ?>"  required>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
            <label for="checkin">CHECK IN</label>
                <input type="date" name="checkin" id="checkin" class="form-control mb-2" value="<?= $bookingDetails['checkin'] ?>" required>
            </div>
            <div class="col-md">
                <label for="checkout">CHECK OUT</label>
                <input type="date" name="checkout" id="checkout" class="form-control mb-2" value="<?= $bookingDetails['checkout'] ?>" required> 
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <label for="room">ROOM</label>
                <select name="room" id="room" class="form-control mb-2" required>        
                    <option value="POOL OVER OCEAN VILLA"<?php if($bookingDetails['room'] === 'POOL OVER OCEAN VILLA') echo'selected'; ?>>POOL OVER OCEAN VILLA</option>
                    <option value="OVER OCEAN VILLA"<?php if($bookingDetails['room'] === 'OVER OCEAN VILLA') echo'selected'; ?>>OVER OCEAN VILLA</option>
                    <option value="POOL GARDEN VILLA"<?php if($bookingDetails['room'] === 'POOL GARDEN VILLA') echo'selected'; ?>>POOL GARDEN VILLA</option>
                    <option value="GARDEN VILLA"<?php if($bookingDetails['room'] === 'GARDEN VILLA') echo 'selected'; ?>>GARDEN VILLA</option>
                    <option value="STANDARD ROOM"<?php if($bookingDetails['room'] === 'STANDARD ROOM') echo 'selected'; ?>>STANDARD ROOM</option>                            
                </select>
                <label for="numOfRoom">NUM OF ROOMS</label>
                <select name="numRoom" id="numRoom" class="form-control mb-2" required>        
                    <option value="1"<?php if($bookingDetails['num_room'] === '1') echo'selected'; ?>>1</option>
                    <option value="2"<?php if($bookingDetails['num_room'] === '2') echo'selected'; ?>>2</option>
                    <option value="3"<?php if($bookingDetails['num_room'] === '3') echo'selected'; ?>>3</option>
                    <option value="4"<?php if($bookingDetails['num_room'] === '4') echo 'selected'; ?>>4</option>                                                
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">    
                <label for="adult">ADULT</label>                
                <select name="adult" id="adult" class="form-control mb-2" required>        
                    <option value="1"<?php if($bookingDetails['adult_count'] === '1') echo'selected'; ?>>1</option>
                    <option value="2"<?php if($bookingDetails['adult_count'] === '2') echo'selected'; ?>>2</option>
                    <option value="3"<?php if($bookingDetails['adult_count'] === '3') echo'selected'; ?>>3</option>
                    <option value="4"<?php if($bookingDetails['adult_count'] === '4') echo 'selected'; ?>>4</option>                                                
                </select>  
                </div>
                <div class="col-md">
                <label for="child">CHILD</label>                
                <select name="child" id="child" class="form-control mb-2" required>        
                    <option value="1"<?php if($bookingDetails['child_count'] === '1') echo'selected'; ?>>1</option>
                    <option value="2"<?php if($bookingDetails['child_count'] === '2') echo'selected'; ?>>2</option>
                    <option value="3"<?php if($bookingDetails['child_count'] === '3') echo'selected'; ?>>3</option>
                    <option value="4"<?php if($bookingDetails['child_count'] === '4') echo 'selected'; ?>>4</option>                                                
                </select>
                </div>
                <div class="col-md">
                <label for="infant">INFANT</label>
                <select name="infant" id="infant" class="form-control mb-2" required>        
                    <option value="1"<?php if($bookingDetails['infant_count'] === '1') echo'selected'; ?>>1</option>
                    <option value="2"<?php if($bookingDetails['infant_count'] === '2') echo'selected'; ?>>2</option>
                    <option value="3"<?php if($bookingDetails['infant_count'] === '3') echo'selected'; ?>>3</option>
                    <option value="4"<?php if($bookingDetails['infant_count'] === '4') echo 'selected'; ?>>4</option>                                                
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="contactNo"></label>
                <input type="text" name="contactNo" id="contactNo" class="form-control mb-2" value="<?= $bookingDetails['contact_number'] ?>" required>

                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control mb-2" value="<?= $bookingDetails['email'] ?>" required>

                <label for="email">REQUEST</label>
                <input type="textarea" col="10" rows="10"  name="request" id="request" class="form-control" value="<?= $bookingDetails['request'] ?>" required>
            </div>
        </div>
            <h3 class="mt-2"for="totalAmount">Total Amount</h3>
            <P class="h2 ml-5" value="<?= $bookingDetails['total_amount'] ?>">$ <?= $bookingDetails['total_amount'] ?> </P>
        <div class="text-right my-3">  
            <button class="btn btn-success text-wthite" name="recreate">Re CREATE</button>
            <button class="btn btn-success text-wthite" name="cancel" type="submit">Cancel</button>
        </div>  
        </form>
    </div> 

<?php

include_once "../classes/confirm.php";

if(isset($_POST['recreate'])){

$confirm = new Confirm;

    $bookingID = $_POST['bookingID'];
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


    $confirm->updateBooking($bookingID, $name,  $room, $numOfRoom,$adult, $child, $infant, $contactNo,$email,$checkin, $checkout, $request ,$totalAmount);

    
    echo 
        "<div class='jumbotron'>
            <p class='h5'>NAME : $name </p><input type='hidden' name='name' value='$name'><br>

            <P class='h5'>Date of CHECK IN : $checkin </p><input type='hidden' name='checkin' value='$checkin'> <br>

            <p class='h5'>Date of CHECK OUT : $checkout </p><input type='hidden' name='checkout' value='$checkout'> </br>

            <P class='h5'>Num Of Night : "  .$confirm->getNight(). " night</p>
            <p class='h5'>Type of Room / Num of Rooms : $room <input type='hidden' name='room' value='$room'>/ $numOfRoom </p><input type='hidden' name='numRoom' value='$numOfRoom'><br>

            <p class='h5'>Number of People : $numOfPeople </p><br>
            <p class='h5'>Requests : $request </p><input type='hidden' name='request' value='$request'><br>
            <div class='text-right '>
                <h3 class='display-5 text-danger'>Total Amount : $ $totalAmount </h3><input type='hidden' name='totalAmount' value='$totalAmount'><br>
            </div>
            <input type='hidden' name='adult' value='$adult'>
            <input type='hidden' name='child' value='$child'>
            <input type='hidden' name='infant' value='$infant'>
            <input type='hidden' name='contactNo' value='$contactNo'>
            <input type='hidden' name='email' value='$email'>        
        </div>";
        
    }

    

    if(isset($_POST['cancel'])){

        echo  
        "<div class='container'>
            <div class='jumbotron'>
            <form action='../views/cancellation.php' method='post'>
                <input type='hidden' name='bookingID' value='$bookingID'>
                <input type='hidden' name='checkin' value='". $bookingDetails['checkin'] ."'>
                <input type='hidden' name='totalAmount' value='". $bookingDetails['total_amount'] ."'>
                <div class='text-center'>
                    <P class='h3'>Are you sure you want to delete your Booking?</P>
                
                    <button class='btn btn btn-outline-danger btn-lg mr-3' name='yes'type='submit'> YES </button>
                    <a href='checkBooking.php' class='btn btn btn-outline-warning btn-lg mr-5'> NO </a>
                </div>
            </form>
            </div>
        </div>";
    }

    // if(isset($_POST['yes'])){
    //     echo "cancel";
    // }

?>  

<?php

include_once "footer.php";

?>'