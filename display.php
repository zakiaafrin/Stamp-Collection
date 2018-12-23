<?php 
session_start();
error_reporting(0);
include("connection.php");

$userprofile = ucwords($_SESSION['username']);
if($userprofile == TRUE) {

} else {
    header('location:adminlogin.php');
}
$query = "SELECT * FROM collection WHERE admin='$userprofile'";
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
            <li><a href="adminyearissued.php">Year Issued</a></li>
            <li><a href="adminstampno.php">Number Of Stamps</a></li>
            <li><a href="adminglued.php">Glued</a></li>
            <li><a href="adminnotglued.php">Not Glued</a></li>
            <li><a href="insert.php">Insert New Stamps</a></li>
            <li><a class="active" href="display.php">Update Stamps</a></li>
        </ul>
      </div>
    <div class="col-6 col-s-9">
      <h1>Display Stamps</h1>
        <div id="rightnav">
            <div class="product-list head">
                <ul>
                    <table style='width:100%;'>
                        <tr style='text-align:center; background-color:pink;'>
                            <th style="padding: 20px;">Image</th>
                            <th>Stamp Name</th>
                            <th>Stamp Size</th>
                            <th>Glued</th>
                            <th>Count</th>
                            <th>Country</th>
                            <th>Year Issued</th>
                            <th>Update</th>
                            <th>Remove</th>
                        </tr>
<?php 
if($total !=0){
   while($total = mysqli_fetch_assoc($data)){
       echo " <tr>
                   <td><a href='$total[image]'><img src='".$total['image']."' style='width: 220px; height: 180px;'/></a></td>
                   <td>".$total['stamp_name']."</td>
                   <td>".$total['size']."</td>
                   <td>".$total['status']."</td>
                   <td>".$total['stamp_count']."</td>
                   <td>".$total['country']."</td>
                   <td>".$total['year_issued']."</td>
                   <td style='color:blue;'><b><a href='update.php?slno=$total[id]&stpname=$total[stamp_name]&stpsize=$total[size]&gl=$total[status]&stpcount=$total[stamp_count]&cntry=$total[country]&yi=$total[year_issued]&adid=$total[admin]'>Edit</a></b></td>
                   <td style='color:red;'><b><a href='delete.php?slno=$total[id]&stpname=$total[stamp_name]&stpsize=$total[size]&gl=$total[status]&stpcount=$total[stamp_count]&cntry=$total[country]&yi=$total[year_issued]&adid=$total[admin]' onclick='return checkdelete()'>Delete</a></b></td>
               </tr>";
   }
} else {
   echo "No record found";
}
?>
</table>
<script>
    function checkdelete() {
        return confirm('Are you sure you want to delete this data?');
    }
</script>
                </ul>
            </div>
        </div>
    </div>

<?php include "inc/footer.php"; ?>