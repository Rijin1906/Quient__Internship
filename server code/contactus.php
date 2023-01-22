<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="inn.php">
    <script src="https://kit.fontawesome.com/f2422667da.js" crossorigin="anonymous"></script>
</head>

</head>
<body class="contbody">
    <div class="navbar">
        <img src="logo.png" height="70px" width="100px">
        <ul class="tab">
           
          <li><a href="index.html"> Home</a> </li>
          <li><a href="gallery.html">Gallery</a></li>
          <li> <a href="testimonials.html">Testimonial</a></li>
          <li><a href="aboutus.html"> About Us</a></li>
          <li> <a href="contactus.php"  class="active"> Contact Us</a></li>
          <li>  <a href="https://api.whatsapp.com/send?phone=+91-2345678901"
              >       <i class="fab fa-whatsapp" ></i></a> </li>
        </ul>

    </div>
<?php 
if(isset($_SESSION['status']))
{
    echo "<h4>".$_SESSION['status']."</h4>";
    unset($_SESSION['status']);
}
?>
   
        <div>
            <form action="contact.php" method="POST">
        <div class="contactone">
           
       <b><label> Name</label></b>
        <br>
        <input type="text" name="name" placeholder="Enter your name" id="inputbox">
        <br>
        <br>
        <b><label> Phone Number</label></b>
        <br>
        <input type="number" name="phonenumber"  placeholder="Enter your phone number"  id="inputbox">
        <br>
        <br>
        <b><label> Email</label></b>
        <br>
        <input type="email" name="email" placeholder="Enter your Email"  id="inputbox">
        <br>
        <br>
        <b><label> Message</label></b>
        <br>
        <input type="text" name="message" placeholder="Enter your message here"  id="inputbox" >
        <br>
        </br>
        <button type="submit" name="insert_data" id="submitbtn"> SUBMIT</button>
             </div>
           
            <br>
            <br>
            

        </div>
    </form>
    

<!-- <div class="notifycontact">
    <p> Thank You for contacting us..</p>
    <button type="submit"> submit</button> -->
    
</div>
<div class="footer">
    <div class="subfooter">
        <div >
            <img src="logo.png" height="70px" width="100px">
         <p> For 100% employment <br> for all students.</p>
        </div>
        <div><h4>Address</h4><br>
            <i class="fas fa-map-marker-alt"></i>Azad Nagar, Jaipur,<br>Rajasthan  311001 <br>
            
            <i class="fas fa-phone-alt"></i>+91-2345678901
        </div>
        <div> 
            <h4>Social Media</h4>
            <ul>
                <li><i class="fab fa-facebook"></i> Facebook </li>
                 <li><i class="fab fa-instagram-square"></i> Instagram </li> 
                <li><i class="fab fa-twitter"></i> Twitter</li>
                <li><i class="fab fa-google-plus-square"></i> Google Plus </li>
            </ul>
        </div>
    </div>
</div>
    
</body>
</html>





