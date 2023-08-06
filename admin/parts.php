<?php
require "../connection/connection.php";
session_start();
if(!isset($_SESSION['adminloginid']))
{
    header("location:../admin/adminlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Interior Parts</title>
    <link rel="stylesheet" href="../admin/style.css">
</head>
<body>
    <header>
        <div class="wrapper">
            <div class="logo">
                <img src="Uploadimage/b1.png" alt="logo" srcset="">
            </div>
        </div>
    </header>
    <nav>
        <div class="wrapper">
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="parts.php" class="active">Parts</a>
            <!-- <a href="exterior.php">Exterior Parts</a> -->
            <a href="contact.php">Contact Us</a>
            <a href="../admin/adminlogin.php">Admin Login</a>

        </div>
    </nav> 
    <?php
    require "../connection/connection.php";
    ?>
    <section id="content">
        <div class="wrapper">
            <h3>Interior Bikes Parts</h3>
            <div class="boxes">
                <div class="box">
                    
                    <img src="Uploadimage/ct1.jpg" alt="" srcset="">
                    <h4>
                        <a href=""> Crossfire RM Tank </a><br>
                        <a href=""> Rs. 6100/-</a>
                    </h4>
                </div>
                <?php
        require "../connection/connection.php";
        //$date=date("Y-m-d");
        $query="SELECT * FROM product";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_assoc($result)){
        echo "
        <td>$row[p_name]</td><br>
        <td>$row[product_price]</td>
        <td><img src='$row[Pimage]' height= '500px' width= '200px'></td>
        </tr>
        ";
            }
        ?>
                <div class="box">
                    <img src="Uploadimage/ct2.jpg" alt="" srcset="">
                    <h4>
                        <a href="">Crossfire CX Tank</a><br>
                        <a href=""> Rs. 4500/-</a>
                    </h4>
                </div>
                <div class="box">
                    <img src="Uploadimage/y1.jpg" alt="" srcset="">
                    <h4>
                        <a href="">Yamaha Fzs 250 Back Mud Guard</a><br>
                        <a href=""> Rs. 1600/-</a>
                    </h4>
                </div>
            </div>
            <div class="boxes">
                <div class="box">
                    <img src="Uploadimage/h1.webp" alt="" srcset="">
                    <h4>

                        <a href="">Honda Shine CP Tank</a><br>
                        <a href=""> Rs. 2500/-</a>
                    </h4>
                </div>
                <div class="box">
                    <img src="Uploadimage/t1.webp" alt="" srcset="">
                    <h4>
                        <a href="">Yamaha Fz v2 front</a><br>
                        <a href=""> Rs. 1500/-</a>
                    </h4>
                </div>
                <div class="box">
                    <img src="Uploadimage/h2.webp" alt="" srcset="">
                    <h4>
                        <a href="">Honda Shine SP Tank</a><br>
                        <a href=""> Rs. 2550/-</a>
                    </h4>
                </div>
            </div>
            <div class="boxes">
                <div class="box">
                    <img src="Uploadimage/k1.jpg" alt="" srcset="">
                    <h4>
                        <a href="">KTM 390 Back Guard</a><br>
                        <a href=""> Rs. 4900/-</a>
                    </h4>
                </div>
                <div class="box">
                    <img src="Uploadimage/p1.jpg" alt="" srcset="">
                    <h4>
                        <a href="">Pulsar 220 clutch Brake</a><br>
                        <a href=""> Rs. 1300/-</a>
                    </h4>
                </div>
                <div class="box">
                    <img src="Uploadimage/ct2.jpg" alt="" srcset="">
                    <h4>
                        <a href="">Crossfire CX Tank</a><br>
                        <a href=""> Rs. 4550/-</a>
                    </h4>
                </div>
                <div class="box">
                    <img src="Uploadimage/e1.webp" alt="" srcset="">
                    <h4>
                        <a href=""> Splendor Piston</a><br>
                        <a href=""> Rs. 7000/-</a>
                    </h4>
                </div>
                <div class="box">
                    <img src="Uploadimage/e2.jpg" alt="" srcset="">
                    <h4>
                        <a href=""> Honda Spark Plug</a><br>
                        <a href=""> Rs. 1000/-</a>
                    </h4>
                </div>
                <div class="box">
                    <img src="Uploadimage/e3.jpg" alt="" srcset="">
                    <h4>
                        <a href="">KTM 290 Suspension</a><br>
                        <a href=""> Rs. 8300/-</a>
                    </h4>
                </div>
            </div>
            <div class="boxes">
                <div class="box">
                    <img src="Uploadimage/e4.jpg" alt="" srcset="">
                    <h4>

                        <a href="">Crossfire CX Shock</a><br>
                        <a href=""> Rs. 13600/-</a>
                    </h4>
                </div>
                <div class="box">
                    <img src="Uploadimage/e5.webp" alt="" srcset="">
                    <h4>
                        <a href="">Yamaha V2 clutch Plate</a><br>
                        <a href=""> Rs. 4000/-</a>
                    </h4>
                </div>
                <div class="box">
                    <img src="Uploadimage/e6.jpg" alt="" srcset="">
                    <h4>
                        <a href="">R15 Clutch Plate</a><br>
                        <a href=""> Rs. 5500/-</a>
                    </h4>
                </div>
            </div>
            <div class="boxes">
                <div class="box">
                    <img src="Uploadimage/e7.jpg" alt="" srcset="">
                    <h4>
                        <a href="">Honda Throttle Wire</a><br>
                        <a href=""> Rs. 4900/-</a>
                    </h4>
                </div>
                <div class="box">
                    <img src="Uploadimage/e8.jpg" alt="" srcset="">
                    <h4>
                        <a href="">R15 Throttle Wire</a><br>
                        <a href=""> Rs. 2000/-</a>
                    </h4>
                </div>
                <div class="box">
                    <img src="Uploadimage/e9.jpg" alt="" srcset="">
                    <h4>
                        <a href="">KTM 390 Engine</a><br>
                        <a href=""> Rs. 67000/-</a>
                    </h4>
                </div>
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
                    <a href="interior.php" class="Active">Interior Parts</a>
                    <a href="exterior.php">Exterior Parts</a>
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