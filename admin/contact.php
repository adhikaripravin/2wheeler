<?php
if(isset($_GET['error'])){
    if($_GET['error'] == 1){
        echo "<script>alert('Empty Query');</script>";
    }
    else{
        echo "<script>alert('Your Query has been sent. Respective memeber will call you within 10 minutes.');</script>";
    }
}
require "../connection/connection.php";
session_start();
if(!empty($_SESSION['adminloginid'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../admin/style.css">
</head>
<body>
    <header>
        <div class="wrapper">
            <div class="logo">
                <img src="../admin/Uploadimage/b1.png" alt="logo" srcset="">
            </div>
        </div>
    </header>
    
    <nav>
        <div class="wrapper">
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="parts.php">Parts</a>
            <!-- <a href="exterior.php">Exterior Parts</a> -->
            <a href="contact.php" class="active">Contact Us</a>
            <a href="../admin/adminlogin.php">Admin Login</a>
        </div>
    </nav>
    <section id="contact">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.5014554256704!2d85.28100661468271!3d27.701799582794198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19aca3d8345b%3A0xbbb5e9967c6a23e2!2sKathmandu%20BernHardt%20College!5e0!3m2!1sen!2snp!4v1642052995262!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="contact_form">
            <div class="wrapper">
                <h2>Which Bike Parts you are searching For ?</h2>
                <form action="../auth/backendenquiry.php" method="POST">
                    <p>
                        <label>Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your name" required>
                    </p>
                    <p>
                        <label>Phone Number</label>
                        <input type="text" name="phone" id="phone" placeholder="Enter your Phone Number" required>
                    </p>
                    <p>
                        <label>Bike Model</label>
                        <input type="text" name="bike_model" id="bike_model" placeholder="Enter Parts of Bike Model" required>
                    </p>
                    <p>
                        <label>Parts</label>
                        <input type="text" name="parts" id="parts" placeholder="Enter the parts you are looking for!" required>
                    </p>
                    <p>
                        <label>Message</label>
                        <textarea name="message" id="message" rows="10" required></textarea>
                    </p>
                    <input type="submit" value="Send" name="send" id="send">
                </form>
            </div>
        </div>
        
    </section>
    <footer>
        <div class="wrapper">
            <div class="footer_boxes">
                <div class="footer_box">
                   <h5>About us</h5>
                   <p>
                    2wheeler develops premium drivetrain components for every kind of bicycle. We offer good quality bike parts to trade customers within the areas of gears, cassettes, cranks, chains and more. Our products are specified by the world’s leading bike parts manufacturers and are also used extensively in the aftermarket.
                    Alongside the catalogue range, we have also always used our R&D expertise in co-operation with OEM, to create customised products. We distinguish ourselves in the market by being the best partner and offer outstanding personal service.
                    That broad range has helped 2wheeler to become a major player in the bike industry world-wide.
                   </p>
                </div>
                <div class="footer_box foot_menu">
                    <h5>Quick links</h5>
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="parts.php">Parts</a>
                    <!-- <a href="exterior.php">Exterior Parts</a> -->
                    <a href="contact.php">Contact Us</a>
                 </div>
                 <div class="footer_box">
                    <h5>Contact</h5>
                    <p>
                        Balaju chowk<br>
                        Kathmandu, Nepal <br>
                        
                        Email : 2wheeler50@gmail.com
                    </p>
                 </div>
                
            </div>
        </div>
    </footer>
    
</body>
</html>
<?php
}
else{
    header("location:../admin/contact.php");
}
?>