<!DOCTYPE html>
<html lang="en">


<?php
    $fname_lname = "Daniils Onufrijuks";
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS file -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/profile.jpg" type="image/x-icon">

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title><?php echo $fname_lname; ?></title>
</head>

<body>
    <!-- Website Layout -->
    <div class="website_container">

        <!-- Global Menu -->
        <div id="global_menu_button_container">
            <p class="site_title"><?php echo $fname_lname; ?></p>
            <i class="fa fa-bars" id="global_menu_button"></i>
        </div>

        <ul id="global_menu_items">
            <div>
                <?php include "inc/mainmenue.php";?>
            </div>
        </ul>

        <!--x Global Menu x-->

        <!-- sidebar -->
        <div class="sidebar_container">
            <!-- Sidebar Image -->
            <div class="image">
                <img src="img/profile.jpg" alt="John Roe">
                <div class="right_image_box"></div>
                <div class="left_image_box"></div>
            </div>

            <!-- sidebar Content -->
            <div class="sidebar_content">
                <!-- Long name can be applied so easily -->
                <h1><?php echo $fname_lname; ?></h1>
                <p>PROGRAMMER</p>
                <!-- Social Medias -->
                <div class="social_media">
                    <!-- <a href="https://facebook.com/alivecoder"><i class="fab fa-facebook"></i></a> -->
                    <a href="https://github.com/alivecoder0"><i class="fab fa-github"></i></a>
                    <!-- <a href="https://instagram.com/alivecoder"><i class="fab fa-instagram"></i></a> -->
                </div>
            </div>

            <!-- Sidebar Buttom Menu -->
            <div class="sidebar_buttom_menu" id="sidebar_buttom_menu">
                <i class="fa fa-bars" id="sidebar_menu_icon"></i>
            </div>

            <!-- Sidebar Navigation -->
            <ul class="sidebar_navigation" id="sidebar_navigation">
                <?php include "inc/sidebarc.php";?>
            </ul>

        </div>
        <!-- content -->
        <div class="content_container">
            <!-- Contact Page -->
            <div class="contact_page">
                <h2 class="title">Contact <span>Me</span></h2>
                <hr class="line">
                <div class="contact_container">
                    <form action="post">
                        <div class="form_name_row">
                            <div class="left_form_row">
                                <label>First Name</label>
                                <input type="text" required placeholder="Enter First Name">
                            </div>
                            <div class="right_form_row">
                                <label>Last Name</label>
                                <input type="text" required placeholder="Enter Last Name">
                            </div>
                        </div>
                        <label>Email</label>
                        <input type="email" name="" id="" required placeholder="Enter Email">
                        <label>Phone Number</label>
                        <input type="text" name="" id="" required placeholder="Enter Phone Number">
                        <label>Subject</label>
                        <input type="text" name="" id="" required placeholder="Enter Subject">
                        <label>Message</label>
                        <textarea name="" id="" cols="30" rows="10" required placeholder="Enter Message"></textarea>
                        <input type="submit" value="Send" id="send_button">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="js/script.js"></script>
</body>

</html>