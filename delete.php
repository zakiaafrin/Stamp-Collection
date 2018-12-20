<?php
session_start();
include("connection.php");
$userprofile = $_SESSION['username'];
if($userprofile == TRUE) {

} else {
    header('location:adminlogin.php');
}
$serialno = $_GET['slno'];
    $query = "DELETE FROM collection WHERE id = $serialno";
    $data = mysqli_query($conn, $query);
    if($data) {
        echo "<script>alert('Record Deleted from Table succesfully')</script>";
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=display.php">
        <?php
    } else {
        echo "<font color='red'>Sorry, Delete Process Failed. <br/><a href='display.php'>Check Updated List Here.</a>";
    }
?>