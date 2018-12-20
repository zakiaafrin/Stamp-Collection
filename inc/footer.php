<?php
error_reporting(0);
include("connection.php");

$query = "SELECT collection.* FROM collection JOIN admin ON collection.admin = admin.id ORDER BY RAND() LIMIT 15 ";


$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if($total !=0){
?>
<div class="col-3 col-s-12">
            <div class="aside">
                <h2>Stamps</h2>
                <table>
                <?php 
   while($total = mysqli_fetch_assoc($data)){
       echo " <tr style='text-align:center;'>
                   <td><a href='$total[image]'><img src='".$total['image']."' style='width: 134; height: 90;'/></a></td>
            </tr>";
   }
} else {
   echo "No record found";
}

?>
                </table>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>CopyRight &copy; 2018. This site is created by Zakia Afrin Jeme. All Rights Reserved.</p>
    </div>
</body>
</html>