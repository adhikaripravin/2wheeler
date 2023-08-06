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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../admin/admin.css">
</head>
<body>
    <header class="header">
        <a href=""> Admin Dashboard </a>
        <div class="logout">
            <a href="../admin/adminlogin.php" class="btn btn-primary" onclick = 'return Logout()' >Logout</a>
        </div>
    </header>
    <aside>
        <ul>
            <li>
                <a href="../admin/admindashboard.php">Dashboard</a>
            </li>
            <!-- <li>
                <a href="../admin/admincategory.php">Category</a>
            </li> -->
            <li>
                <a href="../admin/adminproduct.php">Product</a>
            </li>
            <li>
                <a href="../admin/adminenquiry.php">Enquiry</a>
            </li>
            <li>
                <a href="../admin/invoice.php">Invoice</a>
            </li>
            <li>
                <a href="../admin/adminreport.php">Sell Report</a>
            </li>
            <li>
                <a href="../admin/inventory.php">Check Inventory</a>
            </li>
        </ul>
    </aside>
    <div class="content1">
    <h1> Welcome to Two Wheeler Billing System Admin </h1>
    </div>
    <!-- <?php
    // require "../connection/connection.php";
    ?>
    <div class = "content">
        <div class = "card bg-primary text-white mb-4">
        <div class="card-body">
                    Category
                    <?php
                //     $query = "SELECT * from category";
                //    $result = mysqli_query($con,$query);
                //     if($total = mysqli_num_rows($result))
                //    {
                //        echo '<h4 class="mb-0"> '.$total.' </h4>';
                //    }
                //    else{
                //        echo '<h4 class="mb-0"> No data </h4>'; 
                //    }
                   ?>  
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
        <a class="small text-white stretched-link" href="../admin/admincategory.php">View Details</a>
        </div>
        </div>
    </div> -->

    <div class = "content">
        <div class = "card bg-primary text-white mb-4">
        <div class="card-body">
                    Product
                    <?php
                    $query = "SELECT * from product";
                   $result = mysqli_query($con,$query);
                    if($total = mysqli_num_rows($result))
                   {
                       echo '<h4 class="mb-0"> '.$total.' </h4>';
                   }
                   else{
                       echo '<h4 class="mb-0"> No data </h4>'; 
                   }
                   ?>  
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
        <a class="small text-white stretched-link" href="../admin/adminproduct.php">View Details</a>
        </div>
        </div>
    </div>

    <div class = "content">
    <div class="col-xl-3 col-md-6">
        <div class = "card bg-primary text-white mb-4">
        <div class="card-body">
                    Enquiry
                    <?php
                    $query = "SELECT * from enquiry";
                   $result = mysqli_query($con,$query);
                    if($total = mysqli_num_rows($result))
                   {
                       echo '<h4 class="mb-0"> '.$total.' </h4>';
                   }
                   else{
                       echo '<h4 class="mb-0"> No data </h4>'; 
                   }
                   ?>  
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
        <a class="small text-white stretched-link" href="../admin/adminenquiry.php">View Details</a>
        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
        </div>
        </div>
    </div>

</body>
</html>

<script>
function Logout() {
  return confirm("Are you sure want to Log Out?");
}
</script>