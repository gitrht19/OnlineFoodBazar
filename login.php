<?php

include'config.php';

session_start();
error_reporting(0);
if(isset($_SESSION['username'])){
  header("Location: index.php");
  }

if(isset($_POST['submit']));{
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "SELECT*FROM registration WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn,$sql);
  if($result->num_rows > 0) {
      $row= mysqli_fetch_assoc($result);
      $_SESSION['username'] = $row['username'];
      header("Location: welcome.php");
  }else{
    echo"<'script>alert('Email and password is wrong.')</script>";
  }
}
?>



<!DOCTYPE html>
<head>
    <title>login to food bazar</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>
    <div class="container">
        <h1>sign up with Food Bazar</h1>
      <form action="" method="post" class="login-email">
          <p class="login-text" style="font-size:2rem; font-weight:800;">login</p>
          <div class="input-group">
          <input type="email" placeholder="Email" name="email" value="<?php echo $email;?>" required>
        </div>

        <div class="input-group">
          <input type="password" placeholder="password" name="password" value="<?php echo $_POST['password'];
        </div>

        <div class="input-group">
       <button name ="submit" class="btn"> login</button>
        </div>
        <p class="login-register-text">Don't have an account? <a href="register.php">Register here</a></p>
      </form>
    </div>
</body>
</html>