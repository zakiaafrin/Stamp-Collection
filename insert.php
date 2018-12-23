<?php
session_start();
error_reporting(0);
include("connection.php");

$userprofile = ucwords($_SESSION['username']);
if($userprofile == TRUE) {

} else {
    header('location:adminlogin.php');
}
?>
<?php include "inc/header.php"; ?>
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
        <li><a href="adminyearissued.php">Year Issued</a></li>
        <li><a href="adminstampno.php">Number Of Stamps</a></li>
        <li><a href="adminglued.php">Glued</a></li>
        <li><a href="adminnotglued.php">Not Glued</a></li>
        <li><a class="active" href="insert.php">Insert New Stamps</a></li>
        <li><a href="display.php">Update Stamps</a></li>
    </ul>
</div>
<div class="col-6 col-s-9">
    <h1>Insert New Stamps</h1>
    <div id="rightnav">
        <div class="product-list">
            <ul>
            <form action="" method="post" enctype="multipart/form-data">
                Stamp Name <input type="text" name="stampname" value="">
                Upload Image <input type="file" name="uploadfile" value=""/><br><br>
                Stamp Size <input type="text" name="stampsize" value="">
                Glued <input type="text" name="glued" value="">
                Stamp Count <input type="text" name="stampcount" value="">
                Country <input type="text" name="country" value="">
                Year Issued <input type="text" name="yearissued" value="">
                <button><input type="submit" name="submit" value="submit"></button>
            </form>
<?php
if($_POST['submit']){
   $stpname=ucwords($_POST['stampname']);
   $filename= $_FILES["uploadfile"]["name"];
   $tempname= $_FILES["uploadfile"]["tmp_name"];
   $folder= "img/".$filename;
   move_uploaded_file($tempname,$folder);
   $stpsize=$_POST['stampsize'];
   $gl=ucwords($_POST['glued']);
   $stpcount=$_POST['stampcount'];
   $cntry=ucwords($_POST['country']);
   $yi=$_POST['yearissued'];

   if($stpname!="" && !$filename="" && $stpsize!="" && $gl!="" && $stpcount!="" && $cntry!="" && $yi!=""){
       $query = "INSERT INTO collection(stamp_name, image, size, status, stamp_count, country, year_issued, admin) VALUES ('$stpname','$folder', '$stpsize', '$gl', '$stpcount', '$cntry', '$yi','$userprofile');";
        $data = mysqli_query($conn, $query);
       if($data){
       echo "<font size:'16px' font color='green'>"."<h5>Data Inserted Successfully.</h5>"."<font color='blue'>"."<h5><a href='display.php'>Check Updated List Here.</a></h5> ";
       }
   } else {
       echo "All fields are required. Record Not Updated. <br/><a href='display.php'>Check Stamp List Here.</a>";
   }
}
?>
            </ul>
        </div>
    </div>
</div>

<?php include "inc/footer.php"; ?>