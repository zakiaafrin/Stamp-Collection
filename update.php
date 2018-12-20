<?php 
session_start();
include("connection.php");
error_reporting(0);

$userprofile = $_SESSION['username'];
if($userprofile == TRUE) {

} else {
    header('location:adminlogin.php');
}
$_GET['slno'];
$_GET['stpname'];
$_GET['stpsize'];
$_GET['gl'];
$_GET['stpcount'];
$_GET['cntry'];
$_GET['yi'];

include("inc/header.php"); 
?>

            <li><a href="indexadmin.php">Home</a></li>
            <li><a href="adminbangladesh.php">Bangladesh</a></li>
            <li><a href="adminusa.php">USA</a></li>
            <li><a href="adminaustralia.php">Australia</a></li>
            <li><a href="adminlondon.php">London</a></li>
            <li class="right"><a href="adminlogout.php">Log Out</a></li>
            <li class="right"><a href="admin.php">Admin</a></li>
        </ul>
    </div>    
    <div class="row">
      <div class="col-3 col-s-3 menu">
        <ul class="sidenav">
        <li style="background-color:#9933cc;">Sort By: </a></li>
            <li><a href="adminyearissued.php">Year Issued</a></li>
            <li><a href="adminstampno.php">Number Of Stamps</a></li>
            <li><a href="adminglued.php">Glued</a></li>
            <li><a href="adminnotglued.php">Not Glued</a></li>
            <li><a href="insert.php">Insert New Stamps</a></li>
            <li><a class="active" href="display.php">Update Stamps</a></li>
        </ul>
      </div>
      <div class="col-6 col-s-9">
        <h1>Update Stamps</h1>
        <div id="rightnav">
            <div class="product-list">
                <ul>
                <form action="" method="GET">
                    Stamp Name <input type='text' name='serialno' value="<?php echo $_GET['slno']; ?>"><br><br>
                    Stamp Name <input type='text' name='stampname' value="<?php echo $_GET['stpname']; ?>"><br><br>
                    Stamp Size <input type='text' name='stampsize' value="<?php echo $_GET['stpsize']; ?>"><br><br>
                    Glued <input type='text' name='glued' value="<?php echo $_GET['gl']; ?>"><br><br>
                    Stamp Count <input type='text' name='stampcount' value="<?php echo $_GET['stpcount']; ?>"><br><br>
                    Country <input type='text' name='country' value="<?php echo $_GET['cntry']; ?>"><br><br>
                    Year Issued <input type='text' name='yearissued'b value="<?php echo $_GET['yi']; ?>"><br><br>
                    <input type="submit" name="submit" value="Update">
                </form>
            <?php
if($_GET['submit']){
    $serialno = $_GET['serialno'];
    $stampname = $_GET['stampname'];
    $stampsize = $_GET['stampsize'];
    $glued = $_GET['glued'];
    $stampcount = $_GET['stampcount'];
    $country = $_GET['country'];
    $yearissued = $_GET['yearissued'];
    $query = "UPDATE collection SET  stamp_name ='$stampname', size ='$stampsize', status = '$glued', stamp_count = '$stampcount', country = '$country', year_issued = '$yearissued' where id = '$serialno' ";
    $data = mysqli_query($conn, $query);
    if($data) {
        echo "<font color='green'>Record updated succesfully. <br/><a href='display.php'>Check Updated List Here.</a>";
    } else {
        echo "<font color='red'>Record Not Updated. <br/><a href='display.php'>Check Stamp List Here.</a>";
    }
} else {
    echo "<font color='blue'>Click on Update Button to save the changes.";
}
?>

                </ul>
            </div>
        </div>
    </div>

<?php include "inc/footer.php"; ?>