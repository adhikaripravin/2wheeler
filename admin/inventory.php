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
    <h1> Check Inventory </h1>
    </div>
    <table class="center" width="50%" cellspacing="7">
  <tr>
    <br><th>ID</th>
    <th>Parts Name</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Action</th>
  </tr>
  <?php
        require "../connection/connection.php";
        //$date=date("Y-m-d");
        $query="SELECT * FROM product";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['p_name']."</td>";
        echo "<td>".$row['qty']."</td>";
        echo "<td>".$row['product_price']."</td>";
        echo "<td><a href='../auth/deleteenquiry.php?id=".$row['id']."'><input type='submit' value='Delete' class='delete'></a></td>";
        echo "<td><a href='../admin/enquirymail.php?id=".$row['id']."'><input type='submit' value='Update' class='update'></a></td>";
        echo "</tr>";
            }
        ?>
    </table>



    </body>
</html>

<script>
function Logout() {
  return confirm("Are you sure want to Log Out?");
}
</script>