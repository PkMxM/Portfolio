<?php
include_once "header.php";
?>
    <div class="container">
        <div class="date">
            <form action="../views/confirmation.php" method ="post">
                <div class="form-group my-5 mx-auto">
                    <div class="row">
                        <div class="b-data-field-display">
                            <div class="col-md">                       
                                <label for="checkin">Check In</label>
                                <input type="date" min="<?=date('Y-m-d')?>" name="checkin" class="form-control" placeholder="Check in" required>
                            </div>
                            <div class="col-md">                       
                                <label for="checkout">Check Out</label>
                                <input type="date" min="<?=date('Y-m-d',strtotime('+1 days'))?>" name="checkout" class="form-control" placeholder="Check Out" required>
                            </div>
                        </div>
                        <div class="col-md">
                            <label for="fullname">Full Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                            <label for="room">Room</label>
                            <select class="form-control" name="room" id="room">
                                <option>Select the Rooms</option>
                                <option value="POOL OVER OCEAN VILLA">POOL OVER OCEAN VILLA</option>
                                <option value="OVER OCEAN VILLA">OVERO CEAN VILLA</option>
                                <option value="POOL GARDEN VILLA">POOL GARDEN VILLA</option>
                                <option value="GARDEN VILLA">GARDEN VILLA</option>
                                <option value="STANDARD ROOM">STANDARD ROOM</option>                            
                            </select>                    
                                <label for="numOfRoom">NUM OF ROOMS</label>
                                <select class="form-control" name="numRoom" id="numRoom">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            <div class="form-group my-3">
                                <div class="row">
                                    <div class="col-md">
                                        <label for="adult">Adults</label>
                                        <select name="adult" id="adult" class="form-control" required>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                    <div class="col-md">
                                        <label for="child">Children</label>
                                        <select name="child" id="child" class="form-control">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                    <div class="col-md">
                                        <label for="infant">Infant</label>
                                        <select name="infant" id="infant"  class="form-control">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option  value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>

                            <label for="contactNo">Contact No.</label>
                            <input type="number" name="contactNo" value="contactNo" placeholder="Contact No." class="form-control">

                            <label for="email">Email</label>
                            <input type="email" name="email" value="" placeholder="Email" class="form-control">                       

                            <label for="request">Request</label>                        
                            <textarea class="form-control" name="request" id="request" col="10" rows="10" placeholder="Enter your requests here"></textarea>                        
                                        
                            <button type="submit" name="confirm" class="btn btn-success btn-block my-3">Total AMOUNT</button>
                        </div>
                    </div>
                </div>
            </form>    
        </div>    
    </div>
    
<?php
include_once "footer.php";
?>