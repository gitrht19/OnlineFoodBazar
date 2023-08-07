<?php

session_start();
if(isset($_SESSION['username'])){
header("Location: login.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online food bazar service | foodbazar.com</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
   

</head>
<body>
<?php echo
    <nav id="navbar">
        <div id="logo">
            <img src="css/logo.png" >
        </div>
        <ul>
                <li class="item"><a href="#home">home</a></li>
                <li class="item"><a href="#services-container">services</a></li>
                <li class="item"><a href="#contact">contact us</a></li>
                <li class="item"><a href="demo.html">about us</a></li>
                <li class="item"><a href="user.html">Logout</a></li>
            </ul>
        </nav> 

        <section id="home">
            <h1 class="h-primay">Welcome To Online Food Bazar</h1>
            <p>This site is a online food order system, here there are diffrent diffrent type of foods. </p>
            <p>your likely foods are available </p>
                    <button class="btn">Order Now</button>
        </section>
        <section id="services-container">
            <h1 class="h-primary center">Evening Snacks </h1>
           <div id="services">
           <div class="box">
               <img src="css/vej.png" alt="">
               <h2 class="h-secondary center"> <a href="vej.html"> VEJETARIAN </a></h2>
               <p class="text-center">This site is a online food order system, here there are diffrent diffrent type of foods like evening snacks
                your likely foods are available,your likely foods are available.is a online food order system, here there are diffrent diffrent type of foods like evening snacks
                your likely foods are available,your likely foods are available.is a online food order system, here there are diffrent diffrent type of foods like evening snacks
                your likely foods are available,your likely foods are available.</p>
           </div>
           <div class="box">
            <img src="css/ckn.png" alt="">
            <h2 class="h-secondary center"> <a href="nonvej.html">NON VEJETERIAN </a></h2>
            <p class="text-center">This site is a online food order system, here there are diffrent diffrent type of foods like evening snacks
             your likely foods are available,your likely foods are available.is a online food order system, here there are diffrent diffrent type of foods like evening snacks
             your likely foods are available,your likely foods are available.is a online food order system, here there are diffrent diffrent type of foods like evening snacks
             your likely foods are available,your likely foods are available.</p>
        </div>
        <div class="box">
            <img src="css/cct.png" alt="">
            <h2 class="h-secondary center"> <a href="drink.html">COFEE ! COLD DrinkS </a></h2>
            <p class="text-center">This site is a online food order system, here there are diffrent diffrent type of foods like evening snacks
             your likely foods are available,your likely foods are available.is a online food order system, here there are diffrent diffrent type of foods like evening snacks
             your likely foods are available,your likely foods are available.is a online food order system, here there are diffrent diffrent type of foods like evening snacks
             your likely foods are available,your likely foods are available.</p>
        </div>
           </div>
        </section>
        
        <section id="contact">
            <h1 class="h-primary center"> Enter Your Order Here</h1>
            <div id="contact-box">
                <form action="">
                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="name" id="name" placeholder="Enter youremail">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone No:</label>
                        <input type="phone" name="name" id="phone" placeholder="Enter your Phone no:">
                    </div>
                    <div class="form-group">
                        <label for="message">Order:</label>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="enter your order here...."></textarea>
                    </div>
                    <button class="btn">
                        <a href="">Order confirm</a>
                    </button>
                </form>
            </div>
        </section>
    <footer>        
               <div class="row">
                    <div class="col-4">
                    <h2>about us</h2>
                    <br>
                    <li><a href="link">facebook</a></li>
                    <li><a href="link">instagram</a></li>
                    <li><a href="link">linkedin</a></li>
                    <li><a href="link">twitter</a></li>
                </div>
               
                <div class="col-4">
                    <h2>contact us</h2>
                    <br>
                    owner : " ROHIT KUMAR SAH" <br>
                    ADDRESS : "CHAKRADHARPUR, JHARKHAND(833102)"<br>
                    CONTACT NUMBER : " 6206518127"<br>
                    WHATSAPP NUMBER :" 8340662832"<br>
                </div>
                <div class="col-4">
                    <h2>Food Bazar</h2>
                    <br>
                    THANKS FOR VISITING FOOD BAZAR ,<br>
                    I HOPE YOU ENJOED WITH INTRESED. <br>
                    SO THANK YOU AND WELCOME AGAIN. <br>
                </div>
               </div>
            </footer>
            ?>
    </body>
</html>
