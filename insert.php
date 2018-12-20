<?php
session_start();
error_reporting(0);
include("connection.php");

$userprofile = $_SESSION['username'];
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
       Serial No <input type="text" name="serialno" value="">
       Admin ID (Default)  <input type="text" name="adminid" value="">
       Stamp Name <input type="text" name="stampname" value="">
       Upload Image <input type="file" name="uploadfile" value=""/><br><br>
       Stamp Size <input type="text" name="stampsize" value="">
       Glued <input type="text" name="glued" value="">
       Stamp Count <input type="text" name="stampcount" value="">
       Country <input type="text" name="country" value="">
       Year Issued <input type="text" name="yearissued" value="">
       <input type="submit" name="submit" value="submit">
   </form>
<?php
if($_POST['submit']){
   $slno=$_POST['serialno'];
   $adid=$_POST['adminid'];
   $stpname=$_POST['stampname'];
   $filename= $_FILES["uploadfile"]["name"];
   $tempname= $_FILES["uploadfile"]["tmp_name"];
   $folder= "img/".$filename;
   move_uploaded_file($tempname,$folder);
   $stpsize=$_POST['stampsize'];
   $gl=$_POST['glued'];
   $stpcount=$_POST['stampcount'];
   $cntry=$_POST['country'];
   $yi=$_POST['yearissued'];

   if($slno!="" && $stpname!="" && !$filename="" && $stpsize!="" && $gl!="" && $stpcount!="" && $cntry!="" && $yi!="" && $adid!=""){
       $query = "INSERT INTO collection VALUES ('$slno','$stpname','$folder', '$stpsize', '$gl', '$stpcount', '$cntry', '$yi','$adid')";
       $data = mysqli_query($conn, $query);

       if($data){
       echo "<font color = '#3ac93a'><strong>Data inserted successfully.</strong> <br/><a href='display.php'>Check Updated List Here.</a>";
       }
   }else{
       echo "All fields are required. Record Not Updated. <br/><a href='display.php'>Check Stamp List Here.</a>";
   }
}
?>
    </ul>
    </div>
</div>
</div>

<?php include "inc/footer.php"; ?>