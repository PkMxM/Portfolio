<?php

require_once "database.php";

class Confirm extends Database {
    public function createBooking($name, $room, $numOfRoom, $adult, $child, $infant, $contactNo,$email,$checkin, $checkout, $request ,$totalAmount){
        $sql = "INSERT INTO booking (full_name, room, num_room, adult_count, child_count, infant_count, contact_number, email, checkin, checkout,request,total_amount) VALUES ('$name', '$room', '$numOfRoom', '$adult','$child', '$infant', '$contactNo', '$email', '$checkin' , '$checkout' , '$request','$totalAmount')";
      
        $result = $this->conn->query($sql);

        $bookingID = $this->conn->insert_id;

        if($result == false){
            echo "error";
        }else{
            header("Location: ../views/bookingSuccess.php?bookingID=$bookingID");
        }
    }

    // Properties 
   
    private $checkin;  
    private $checkout;
    private $night;
    private $room;
    private $numOfRoom;       
  
    private $totalAmount;

    private $today;
    private $cancellation;


    // //Methods    
    public function setCheckin($checkin){
        $this->checkin = strtotime($checkin);
    }

    public function getCheckin(){
        return $this->checkin;
    }

    public function setCheckout($checkout){
        $this->checkout = strtotime($checkout);
    }

    public function getCheckout(){
        return $this->checkout;
    }


    public function setNight(){           
            $this->night = (((($this->checkout - $this->checkin) / 60) / 60) / 24);
    }

    public function getNight(){
        return $this->night;
    }

    public function setNumOfRoom($numOfRoom){
        $this->numOfRoom = $numOfRoom;
    }

    public function getNumOfRoom(){
        return $this->numOfRoom;
    }

    public function setRoom($room){
        $this->room = $room;
    }

    public function setTotalAmount(){       
        if($this->room == "POOL OVER OCEAN VILLA"){
            return 1800 * $this->night * $this->numOfRoom;      
            } elseif($this->room == "OVER OCEAN VILLA"){
            return 1500 * $this->night * $this->numOfRoom;
            } elseif($this->room == "POOL GARDEN VILLA"){
            return    800 * $this->night * $this->numOfRoom;
            } elseif($this->room == "GARDEN VILLA"){
            return    300 * $this->night * $this->numOfRoom;
            } else {
            return    150 * $this->night * $this->numOfRoom;
            }
        }
    
    public function getTotalAmount(){
        return $this->totalAmount; 
    }    

    // public function checkBooking($bookingID, $name){
    //     $error = "The bookingNo. you entered is inncorrect.";

    //     $sql = "SELECT * FROM booking WHERE booking_No. = '$bookingID'";

    //     $result = $this->conn->query($sql);
    //     if($result->num_rows == 1){
    //         $bookingDetails = $result->fetch_assoc();
                            
    //             $_SESSION['bookingID'] = $bookingDetails['bookingID'];
    //             $_SESSION['name'] = $bookingDetails['name'];

    //             header("location:../views/index.php");
    //             exit;
            
    //         } else {
    //             echo $error;
    //         }
    //     } 
        
    public function getBooking($bookingID,$name){
        
        $sql = "SELECT * FROM booking WHERE booking_no = $bookingID AND full_name = '$name'";

        if($result = $this->conn->query($sql)){
            if($result->num_rows == 1){
                $bookingDetails = $result->fetch_assoc();
                return $bookingDetails;
            } else {
            die (
                "<h1 style='text-align:center; color:red;'>The bookingNo. you entered is inncorrect.</h1>" .$this->conn->error);
            }
        } 
    }

    public function updateBooking($bookingID, $name,  $room, $numOfRoom,$adult, $child, $infant, $contactNo,$email,$checkin, $checkout, $request ,$totalAmount){
        $sql = "UPDATE booking SET full_name = '$name', room = '$room',num_room = '$numOfRoom', adult_count = '$adult',child_count = '$child',infant_count = '$infant',contact_number = '$contactNo', email = '$email', checkin = '$checkin', checkout = '$checkout' ,request = '$request' ,total_amount = $totalAmount WHERE booking_no = '$bookingID'";

        $result = $this->conn->query($sql);

    }

    public function deleteBooking($bookingID){
        $sql = "DELETE FROM booking WHERE booking_no = $bookingID";
        
        $result = $this->conn->query($sql);

       
    }

    

    public function setCancellation($bookingID,$checkin,$totalAmount){
       $today = strtotime(date('Y-m-d'));
       $checkin = strtotime($checkin);
       $daysLeft = (((($checkin - $today)/60)/60)/24);
    //    echo "Today $today <br> Checkin $checkin<br> Days left $daysLeft" ;
        // $var1 = (strtotime($checkin) - strtotime(date('Y-m-d')));
        // $var2 = $var1 /60;
        // $var3 = $var2 /60;
        // $var4 = $var3 /24;
        // echo $var4;
        
        if($daysLeft== 0){
             return $totalAmount * 0.7; 
        } elseif($daysLeft <= 2){
            return $totalAmount * 0.5; 
        }  elseif ($daysLeft <= 7) {
            return $totalAmount * 0.3; 
        } else {
            return 0;
        
        }
    }

    public function getCancellation(){
        return $this->cancellation;
    }
}



