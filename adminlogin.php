<?php
session_start();
include("connection.php");
if(count($_SESSION)) header("Location: admin.php");
$error = isset($_GET['error']); 
?>
<?php include "inc/header.php"; ?>
      <li><a href="index.php">Home</a></li>
      <li><a href="bangladesh.php">Bangladesh</a></li>
      <li><a href="usa.php">USA</a></li>
      <li><a href="australia.php">Australia</a></li>
      <li><a href="london.php">London</a></li>
      <li class="right"><a class="active" href="admin.php">Admin</a></li>
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
      <h1>Admin Log In</h1>
      <form action="" method="post" style="border:3px solid #f1f1f1">
        <div class="imgcontainer">
          <img src="admin.png" alt="Admin" style="width:15%; height:24%;">
        </div>
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" name="username" value="" placeholder="Enter Username" required><br />
          <label for="psw"><b>Password</b></label>
          <input type="password" name="password" value="" placeholder="Enter Password" required><br />
          <button><input type="submit" name="submit" value="Login"></button><br />
          <label>
            <input type="checkbox" checked="checked" name="remember">Remember me
          </label>
        </div>
      </form>
      <div style="text-align:center">Don't Have An Account?
        <b style="color:#762df8;"><a href="adminsignup.php">Sign Up</a>
        </b>
      </div>
    </div>

    <?php
if(isset($_POST['submit'])){
    $user=$_POST['username'];
    $pwd=$_POST['password'];
    $query = "SELECT * FROM admin WHERE username='$user' && password='$pwd' ";
    $data = mysqli_query($conn, $query);
    $result = mysqli_num_rows($data);
    if ($result == 1){
        $_SESSION['username'] = $user;
        echo "right";
        header('location:admin.php');
    }else{
        echo "<font color = 'red'>Login failed.Please enter a valid Username or Password.";
    }
};
?>
<?php include "inc/footer.php"; ?>