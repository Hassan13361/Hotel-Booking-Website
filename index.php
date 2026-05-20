2<?php
if(isset($_POST['hotel'])){
   $server_name="localhost";
   $username="root";
   $password="";
   $dbname="bookings";
   $conn=mysqli_connect($server_name,$username,$password,$dbname);
   if(!$conn)
   {
    die("Connection Failed" .mysqli_connect_error());
   }
   $hotel =$_POST ['hotel'];
   $Checkin=$_POST['checkIn'];
   $days=$_POST['days'];
   $rooms=$_POST['rooms'];
   $guests=$_POST['guests'];
   $name=$_POST['name'];
   $phone=$_POST['phone'];
   $email=$_POST['email'];
   $cnic=$_POST['cnic'];
   $card=$_POST['card'];
   $expdate=$_POST['expdate'];
   
   $sql = "INSERT INTO `booking`( `hotel_name`, `Check_in_date`, `days`, `rooms`, `guests`, `name`, `phone`, `email`, `cnic_passport`, `account_no`, `Exp_date`)
    VALUES ('$hotel','$Checkin','$days','$rooms','$guests','$name','$phone','$email','$cnic','$card','$expdate');";   
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Payment</title>
        <link rel="stylesheet" href="confirm.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <nav>
            <input type="checkbox" id="check">
            <label for="check"><i class="fas fa-bars" id="checkbtn"></i></label>
            <label for="title" class="logo">Online Hotel Booking</label>
            <ul>
                <li><a href="http://127.0.0.1:5500/homepagehtml.html">Home</a></li>
                <li><a href="http://127.0.0.1:5500/hotels%20webpage.html">Hotels</a></li>
                <li><a href="http://127.0.0.1:5500/BR%20webpage.html">Booking-rules</a></li>
                <li><a href="http://127.0.0.1:5500/about%20us%20webpage.html">About Us</a></li>
                <li><a href="http://127.0.0.1:5500/contact%20us%20webpage.html">Contact Us</a></li>
            </ul>
        </nav>
        <div id="box">
        <?php
        if ($conn->query($sql)) {
            echo "<p>Your Room  has been booked.please reach hotel at the booking dates otherwise there will be no refund</p>";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        } 
            ?>

       
        </div>
    </body>
</html>