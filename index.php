<?php 
session_start();
error_reporting(0);
include("connection.php");

$query = "SELECT * FROM collection";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

include("inc/header.php"); 
?>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="bangladesh.php">Bangladesh</a></li>
            <li><a href="usa.php">USA</a></li>
            <li><a href="australia.php">Australia</a></li>
            <li><a href="london.php">London</a></li>
            <li><a href="others.php">Other Countries</a></li>
            <li class="right"><a href="indexadmin.php">Admin</a></li>
        </ul>
    </div>
<div class="row">
    <div class="col-3 col-s-3 menu">
        <ul class="sidenav">
            <li style="background-color:#9933cc;">Sort By: </a></li>
            <li><a href="yearissued.php">Year Issued</a></li>
            <li><a href="stampno.php">Number Of Stamps</a></li>
            <li><a href="glued.php">Glued</a></li>
            <li><a href="notglued.php">Not Glued</a></li>
        </ul>
    </div>
    <div class="col-6 col-s-9">        
        <h1>Stamp Collection</h1>
        <div id="rightnav">
            <div class="product-list">
                <ul>
<?php 
if($total !=0){
    while($result = mysqli_fetch_assoc($data)){
        echo   " 
            <li style='width: 260px;'>
                <div class='image'>
                    <a href=".$result['image']."><img src='".$result['image']."' width='200' height='165'></a>
                </div>
                <div class='detail' style='color:#5c0289; line-height:7px; font-size:13px; text-align:justify;'>
                    <p class='name'><b>Stamp Name : </b>".$result['stamp_name']."</p>
                    <p class='name'><b>Stamp Size : </b>".$result['size']."</p>
                    <p class='name'><b>Glue Status : </b>".$result['status']."</p>
                    <p class='name'><b>Number Of Stamp : </b>".$result['stamp_count']."</p>
                    <p class='name'><b>Country : </b>".$result['country']."</p>
                    <p class='name'><b>Year Issued : </b>".$result['year_issued']."</p>
                    <p class='name'><b>Collector Name : </b>".$result['admin']."</p>";
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