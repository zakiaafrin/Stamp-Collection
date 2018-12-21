<?php
    session_start();
    include("connection.php");
    error_reporting(0);
    if(count($_SESSION)) header("Location: admin.php");
?>

<?php include "inc/header.php"; ?>

      <li><a href="index.php">Home</a></li>
      <li><a href="bangladesh.php">Bangladesh</a></li>
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
      <h1>Admin Sign Up</h1>
      <form action="" method="post" enctype="multipart/form-data" style="border:3px solid #f1f1f1">
        <div class="container" style="height: 26.39vw;">
          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter username" name="username" required> 
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw"  id="myInput" value="" >              
          <label>
            <input type="checkbox" onclick="myFunction()">Show Password<br><br>
          </label>                
          <button><input type="submit" name="submit" value="submit"></button>
          <div id ="form" style="padding-bottom:100px ;">
            Have an account? <a style="margin-left: 15px; color:green;" href="adminlogin.php"><strong>Log In</strong></a>
          </div>
        </div><br/><br/>
      </form> 
    <?php

if(isset($_POST['submit'])){
   $name=ucwords($_POST['username']);
   $email=$_POST['email'];
   $pass=$_POST['psw'];

   $user_sql = "SELECT * FROM admin WHERE username='$name'";
   $email_sql = "SELECT * FROM admin WHERE email='$email'";
   $con_user = mysqli_query($conn, $user_sql);
   $con_email = mysqli_query($conn, $email_sql);

   //check if user already exist
   if (mysqli_num_rows($con_user) > 0) {
         echo "Sorry. Username already taken.";     
     }else if(mysqli_num_rows($con_email) > 0){
       echo "Sorry.This email already exists.";

       //email validation    
     }else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
       echo "Please Enter A Valid Email";
   }else{

       if($name!="" && $email!="" && $pass!="" ){

           $query = "INSERT INTO admin VALUES ('$id','$name','$email','$pass')";
           $data = mysqli_query($conn, $query);
           if($data){
           header('location:adminlogin.php');
           }
       }else{
       echo "<font color='red';>*All fields are required!";
       }
   }
}?>
<script>
   function myFunction() {
        var x = document.getElementById("myInput");
       if (x.type === "password") {
           x.type = "text";
       } else {
           x.type = "password";
       }
   }
</script>    
    </div>
<?php include "inc/footer.php"; ?>