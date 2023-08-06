<?php
if(isset($_GET['error'])){
    if($_GET['error'] == 1){
        echo "<script>alert('Empty Parts');</script>";
    }
    elseif($_GET['error'] == 2){
        echo "<script>alert('Parts Updated');</script>";
    }
    elseif($_GET['error'] == 'none'){
        echo "<script>alert('Parts Deleted');</script>";
    }
    else{
        echo "<script>alert('Parts Added');</script>";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../admin/admin.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
</head>
<body>
    <header class="header">
        <a href="../admin/admindashboard.php"> Admin Dashboard </a>
        <div class="logout">
            <a href="../admin/adminlogin.php" onclick = 'return Logout()'>Logout</a>
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
    <h1> Add Parts </h1>
    </div>
    <div class="container">
      
  <form action="../auth/backendproduct.php" method="POST" enctype="multipart/form-data">
    <!-- <div class="row">
      <div class="col-25">
        <label for="id">ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="id" name="id" placeholder="Enter ID">
      </div>
    </div> -->
    <!-- <div class="row">
      <div class="col-25"> -->
        <!-- <label for="p_type">Product Type</label> -->
      <!-- </div>
      <div class="col-75">
        <select id="p_type" name="p_type">
          <option value="interior">Interior Parts</option>
          <option value="exterior">Exterior Parts</option>
          
        </select>
      </div>
    </div> -->
    <div class="row">
      <div class="col-25">
        <!-- <label for="p_name">Product Name</label> -->
      </div>
      <div class="col-75">
        <input type="text" id="p_name" name="p_name" placeholder="Enter Parts Name">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <!-- <label for="qty">Product Quantity</label> -->
      </div>
      <div class="col-75">
        <input type="text" id="qty" name="qty" placeholder="Enter Parts Quantity">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <!-- <label for="product_price">Price</label> -->
      </div>
      <div class="col-75">
        <input type="text" id="product_price" name="product_price" placeholder="Enter Price">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <!-- <label for="Pimage">Choose Image</label> -->
      </div>
      <div class="col-75">
        <input type="file" name="Pimage" class="form-control">
      </div>
    </div>

    
    <div class="row">
      <button type="submit" value="Add" name="add" id="add">Add</button>
    </div>
  </form>
  </form>
</div>
    
  
</div>
<!-- <table class="table" align="center" width="100%" cellspacing="10">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Parts Type</th>
      <th scope="col">Parts Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>

    </tr>
  </thead> -->

<table class="center" width="50%" cellspacing="7">
  <tr>
    <br><th scope="col">ID</th>
    <th>Parts Type</th>
    <th>Parts Name</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Image</th>
    <th>Date</th>
    <th>Action</th>
  </tr>

  <?php
        require "../connection/connection.php";
        $date=date("Y-m-d");
        $query="SELECT * FROM product";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_assoc($result)){
        echo"
        <tr>
        <td>$row[id]</td>
        <td>$row[p_name]</td>
        <td>$row[qty]</td>
        <td>$row[product_price]</td>
        <td><img src='$row[Pimage]' height= '90px' width= '150px'></td>
        <td>$row[added_on]</td>
        <td><a href='../auth/deleteproduct.php?id=$row[id]'><input type='submit' value='Delete' class='delete'></a></td>
        <td><a href='../auth/updateproduct.php?id=$row[id]'><input type='submit' value='Update' class='update'></a></td>
        </tr>
        ";
            }
        ?>

</table>
    
</body>
</html>
<?php
}
else{
    header("location:../admin/admindashboard.php");
}
?>
<script>
//  function confirmDelete() {
//   return confirm("Are you sure want to delete this data?");
// }
function Logout() {
  return confirm("Are you sure want to Log Out?");
}
</script>
