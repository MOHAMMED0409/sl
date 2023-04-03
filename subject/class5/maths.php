<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Arts</title>
</head>
<body>
     <!-- Nav bar -->
     <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#">Book Byte</a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="#">About</a></li>
                    <!-- <li><a href="./admin.html">Admin Login</a></li> -->
                    <!-- <li><a href="./signup.html">Signup</a></li> -->
                    <li><a href="../../contact.html">Contact</a></li>
                    <li><a href="../../class/class5.html">Back</a></li>
                    <li><a href="../../login/">Logout</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
    <!-- Button -->
    <p class="cl">Class:5</p>
    <p class="sub">Maths</p>
    <div class="tabcontents">
        <div class="tabpanel">hi</div>
        <div class="tabpanel">hello</div>
        <div class="tabpanel"></div>
        <div class="tabpanel"></div>
</div>
</div> 
<div class="tabs-container">
    <div class="tabs active">
        <button class="tab">
            <span class="tab-text-one">Chapter-1</span>
            <span class="tab-text-two">Upload here!!</span>
        </button><br><br>
        <button class="tab">
            <span class="tab-text-one">Chapter-2</span>
            <span class="tab-text-two">Upload here!!</span>
        </button><br><br>
        <button class="tab">
            <span class="tab-text-one">Chapter-3</span>
            <span class="tab-text-two">Upload here!!</span>
        </button><br><br>
        <button class="tab">
            <span class="tab-text-one">Chapter-4</span>
            <span class="tab-text-two">Upload here!!</span>
        </button><br><br>
    </div>
    <!-- <div class="tabs">
      <div class="tab ">Tab 1</div>
      <div class="tab">Tab 2</div>
      <div class="tab">Tab 3</div>
      <div class="tab">Tab 4</div>
    </div> -->

    <div class="content-container">
      <div class="content active">
        <div class="up_page">
        <?php 
        include_once(dirname(__FILE__).'/../disp.php');
        while($row_1 = mysqli_fetch_array($result1)) { ?>
      <p>        <a href="../../upload/<?php echo $row_1['file_name'] ?>" download><?php echo $row_1['file_name'] ?></a>
</p>
    <?php } ?>
        
      </div>

      <div class="content">
        <div class="up_page"><?php 
        include_once(dirname(__FILE__).'/../disp.php');
        while($row_1 = mysqli_fetch_array($result1)) { ?>
      <p>        <a href="../../upload/<?php echo $row_1['file_name'] ?>" download><?php echo $row_1['file_name'] ?></a>
</p>
    <?php } ?></div>
      </div>

      <div class="content">
        <div class="up_page"><?php 
        include_once(dirname(__FILE__).'/../disp.php');
        while($row_1 = mysqli_fetch_array($result1)) { ?>
      <p>        <a href="../../upload/<?php echo $row_1['file_name'] ?>" download><?php echo $row_1['file_name'] ?></a>
</p>
    <?php } ?></div>
      </div>

      <div class="content">
        <div class="up_page"><?php 
        include_once(dirname(__FILE__).'/../disp.php');
        while($row_1 = mysqli_fetch_array($result1)) { ?>
      <p>        <a href="../../upload/<?php echo $row_1['file_name'] ?>" download><?php echo $row_1['file_name'] ?></a>
</p>
    <?php } ?></div>
        </p>
      </div>
    </div>
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="../script.js"></script>
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
</body>
</html>