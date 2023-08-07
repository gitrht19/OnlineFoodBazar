<?php 
include'config.php';
error_reporting(0);

session_start();
if(isset($_SESSION['username'])){
  header("Location: login.php");
  }

if(isset($_POST['submit'])){
$username = $_POST['username'];
$email= $_POST['email'];
$password =md5($_POST['password']);
$cpassword =md5($_POST['cpassword']);

if($password== $password){
  $sql ="SELECT*FROM REGISTRATION WHERE email='$email'";
  $result= mysqli_query($conn,$sql);
if(!$result->num_rows > 0){
    $sql="INSERT INTO users(username,email,password)
    VALUES('$username','$email','$password')";
    $result=mysqli_query($conn,$sql);
    if($result){
      echo"<'script>alert(wow! registration sucssesfull')</script>";
      $username="";
      $email="";
      $_POST['password']="";
      $_POST['cpassword']="";
    }else{
      echo"<'script>alert(oops! somthing wrong')</script>";

     } 
    
  }else{
   echo"<'script>alert('oops! emailalready exists.')</script>";
     
  }

}else{
  echo"<script>alert('password not matched.')</script>";
}

?>

<!DOCTYPE html>
<head>
    <title>register form for food bazar</title>
    <link rel="stylesheet" href="newuser.css">
</head>
<body>
    <div class="container">
        <h1>sign up with Food Bazar</h1>
      <form action="" method="POST" class="login-email">
          <p class="login-text" style="font-size:2rem; font-weight:800;">register</p>
          <div class="input-group">
          <input type="text" placeholder="usrename" name="uername" value="<?php echo $username; ?>"required>
        </div>
        <div class="input-group">
          <input type="email" placeholder="email" name=" email" value="<?php echo $email; ?>"required>
        </div>
        <div class="input-group">
          <input type="password" placeholder="password" name="password" value="<?php echo $password; ?>"required>
        </div>
        <div class="input-group">
          <input type="password" placeholder="confirm password" name="cpassword" value="<?php echo $cpassword; ?>"required>
        </div>
        <div class="input-group">
       <button name="submit" class="btn"> register</button>
        </div>
        <p class="login-register-text">have an account? <a href="register.php">login here</a></p>
      </form>
    </div>
</body>
</html>