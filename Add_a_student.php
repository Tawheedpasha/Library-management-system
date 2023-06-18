<?php

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Online Boot Store Website Design Tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="adminstyle.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="header-1">

        <a href="/admin_service_dashboard.php" class="logo">  <i class="fas fa-book"></i> EPCET Library</a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
          
        </div>

    </div>

    <div class="header-2">
        <nav class="navbar">
            
            <a href="#Addstudents">Add student</a>
           
        </nav>
    </div>

</header>

<!-- header section ends -->
   
     <div class="innerdiv">
        <!-- <div class="leftinnerdiv"> -->
     <a href="#" id="login-btn" class="stu btn">Add student <div  class="fas fa-user"></div></a>
     <!-- </div> -->
    </div>


<!-- bottom navbar  -->

<nav class="bottom-navbar">
   

    
    <a href="#home" id="login-btn" class="fas fa-plus "></a>
 
</nav>

<!-- login form  -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
        <h3>sign in</h3>
        <span>username</span>
        <input type="text" name="addname" class="box" placeholder="enter your name" id="" required>
        <span>Branch  and  sec</span>
        <input type="text" name="branch" class="box sbox" placeholder="Branch"  id="" style="width: 80px;">
        <input type="text" name="sec" class="box sbox" placeholder="Sec"  id="" style="width: 80px;" >
        <span>email</span>
        <input type="email" name="addemail" class="box" placeholder="enter your email" id="" required>
        <span>password</span>
        <input type="password" name="addpass" class="box" placeholder="enter your password" id="" required>
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me" required>
            <label for="remember-me"> all the details are correct</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        
    </form>

</div>

<!-- home section starts  -->



<!-- home section ense  -->

<!-- icons section starts  -->



<!-- icons section ends -->

<!-- featured section starts  -->



<!-- featured section ends -->

<!-- newsletter section starts -->



<!-- newsletter section ends -->

<!-- arrivals section starts  -->



<!-- arrivals section ends -->

<!-- deal section starts  -->



<!-- deal section ends -->

<!-- reviews section starts  -->



<!-- reviews section ends -->

<!-- blogs section starts  -->



<!-- blogs section ends -->

<!-- footer section starts  -->


<!-- footer section ends -->

<!-- loader  -->

















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>