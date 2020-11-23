<?php

require_once "database.php";

class Confirm extends Database {
    public function createBooking($name, $room, $adult, $child, $infant, $contactNo,$email,$checkin, $checkout, $request){
        $sql = "INSERT INTO booking (full_name, room, adult_count, child_count, infant_count, contact_number, email, checkin, checkout,request) VALUES ('$name', '$room', '$adult','$child', '$infant', '$contactNo', '$email', '$checkin' , '$checkout' , '$request')";
      
        $result = $this->conn->query($sql);

        if($result == false){
            echo "error";
        }else{
            header("Location: ../views/bookingSuccess.php");
        }
       
    }

    // Properties 
   
    private $checkin;  
    private $checkout;
    private $night;
    private $room;
    private $numOfRoom;       
  
    private $totalAmount;

    // private $adult;
    // private $child;
    // private $infant;
    // private $numOfPeople;


    // //Methods    
    // public function __construct(){     
    //     $this->setNight();
    //     $this->totalAmount = $this->setTotalAmount(); 
    // }

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
        if($this->room == "POOL GARDEN OCEAN VILLA"){
            return 1800 * $this->night * $this->numOfRoom;      
            } elseif($this->room == "OVEROCEAN VILLA"){
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

    public function booking($bookingNo, $name, $checkin, $checkout, $room , $numOfRoom, $adult , $child, $infant, $contactNo, $email, $request){
        $error = "The bookingNo. you entered is inncorrect.";

        $sql = "SELECT * FROM booking WHERE booking_No. = '$bookingNo'";

        $result = $this->conn->query($sql);
        if($result->num_rows == 1){
            $userDetails = $result->fetch_assoc();
            if(password_verify($bookingNo['bookingNo'])){
                session_start();
                
                $_SESSION['bookingNo'] = $userDetails['id'];
                $_SESSION['name'] = $bookingDetails['name'];

                header("location:../views/bookingSuccess.php");
                exit;
            
            } else {
                echo $error;
            }
        }
        
    }

    public function getBooking($bookingNo){

        $spl = "SELECT * FROM booking WHERE booking_No. = '$bookingNo'";

        
    }

    // public function updateBooking(){

    // }

    // public function deleteBooking(){

    // }

}

   





