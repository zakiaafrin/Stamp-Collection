<?php 
session_start();
error_reporting(0);
include("connection.php");

$userprofile = ucwords($_SESSION['username']);
if($userprofile == TRUE) {

} else {
    header('location:adminlogin.php');
}

$query = "SELECT * FROM collection WHERE admin='$userprofile' ORDER BY year_issued ASC";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

include("inc/header.php"); 
?>
        <li><a href="indexadmin.php">Home</a></li>
        <li><a href="adminbangladesh.php">Bangladesh</a></li>
        <li><a href="adminusa.php">USA</a></li>
        <li><a href="adminaustralia.php">Australia</a></li>
        <li><a href="adminlondon.php">London</a></li>
        <li><a href="adminothers.php">Other Countries</a></li>
        <li class="right"><a href="adminlogout.php">Log Out</a></li>
        <li class="right"><h4><?php echo "Welcome ".$userprofile."!";?></h4></li>
    </ul>
</div>
<div class="row">
    <div class="col-3 col-s-3 menu">
        <ul class="sidenav">
            <li style="background-color:#9933cc;">Sort By: </a></li>
            <li><a class="active" href="adminyearissued.php">Year Issued</a></li>
            <li><a href="adminstampno.php">Number Of Stamps</a></li>
            <li><a href="adminglued.php">Glued</a></li>
            <li><a href="adminnotglued.php">Not Glued</a></li>
            <li><a href="insert.php">Insert New Stamps</a></li>
            <li><a href="display.php">Update Stamps</a></li>
        </ul>
    </div>
    <div class="col-6 col-s-9">
    <h1>Stamps are sorted by Year Issued</h1>
        <div id="rightnav">
            <div class="product-list">
                <ul>
<?php 
if($total !=0){
    while($result = mysqli_fetch_assoc($data)){
        echo   " 
                    <li style='width: 260px;'>
                        <div class='image'>
                            <a href=".$result['image']."><img src='".$result['image']."' width='200' height='190'></a>
                        </div>
                        <div class='detail'>
                            <p class='name'>Name : ".$result['stamp_name']."</p>
                            <p class='name'>Year Issued : ".$result['year_issued']."</p>";
                }
            } else {
                echo "No record found";
        }            
                    "
                        </div>
                    </li>";
?>
                </ul>
            </div>
        </div>
    </div>

<?php include "inc/footer.php"; ?>