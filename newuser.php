
<!DOCTYPE html>
<head>
    <title>login to food bazar</title>
    <link rel="stylesheet" href="newuser.css">
</head>
<body>
    <form name="aa"method="post"action="">
    <div class="container">
        <h1>sign up with Food Bazar</h1>
        <div class="box">
            <i class="icons">Name</i>
            <input type="name" name="t1" id="Name" placeholder="Enter your Name">
        </div>
        <div class="box">
            <i class="icons">Address</i>
            <input type="address" name="t2" id="Address" placeholder="Enter your Address">
        </div>
        <div class="box">
            <i class="icons">Email</i>
            <input type="email" name="t3" id="email" placeholder="Enter your email">
        </div>
        <div class="box">
            <i class="icons">Password</i>
            <input type="password" name="t4" id="password" placeholder="Enter your password">
        </div>
        <div class="box">
            <i class="icons"> Confirm Password</i>
            <input type="password" name="t5" id="cpassword" placeholder=" Re-enter your password">
        </div>
        
        <input class="btn" name="btn1" type="submit" value="signup">
          
    </div>
</form>
</body>
</html>




       <?php
       
       
        if(isset($_POST['btn1']))
        {
       mysql_connect("localhost","root","");
mysql_select_db("foodsystemdb");

       
      
       echo 'hello';      
    
      $name=$_POST['t1'];
      $address=$_POST['t2'];
      $email=$_POST['t3'];
      $password=$_POST['t4'];
      $cpassword=$_POST['t5'];
      
      $res =mysql_query("insert into newuser values('$name','$address','$email','$password','$cpassword')");
      if($res>0)
      {
          
      echo"Saved";
      } else {
          echo 'some thing wrong';
          
      }
      
}
    ?>