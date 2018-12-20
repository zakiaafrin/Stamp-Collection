<?php 
session_start();
error_reporting(0);
include("connection.php");
$query = "SELECT collection.*,admin.* FROM collection JOIN admin ON collection.admin = admin.id WHERE collection.country='Bangladesh';";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

include("inc/header.php"); 
?>

        <li><a href="index.php">Home</a></li>
        <li><a class="active" href="bangladesh.php">Bangladesh</a></li>
        <li><a href="usa.php">USA</a></li>
        <li><a href="australia.php">Australia</a></li>
        <li><a href="london.php">London</a></li>
        <li class="right"><a href="admin.php">Admin</a></li>
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
    <h1>Bangladesh</h1>
    <div id="rightnav">
            <div class="product-list">
                    <!-- <a class="pages" href="?page=products&amp;more=previous&amp;offset=0">&lt;prev</a>
            &nbsp;|&nbsp;
            <a class="pages" href="?page=products&amp;more=next&amp;offset=0">next&gt;</a> -->
                <ul>
            <?php 
if($total !=0){
    while($result = mysqli_fetch_assoc($data)){
            echo   " 
                    <li>
                        <div class='image'>
                            <a href=".'$result[image]'."><img src='".$result['image']."' width='200' height='165'></a>
                        </div>
                        <div class='detail'>
                            <p class='name'>".$result['stamp_name']."</p>
                            <p class='view'><a href='?page=detail&amp;id=00000019'>view details &gt;&gt;</a></p>";
                }
            } else {
                echo "No record found";
            }
            
                            "<p class='view'><a href='?page=detail&amp;id=00000019'>view details &gt;&gt;</a></p>
                        </div>
                    </li>";
            ?>

                </ul>
            </div>
        </div>
    </div>

<?php include "inc/footer.php"; ?>