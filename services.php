<!DOCTYPE html>
<html lang="en">

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

    <title>Daniils Onufrijuks</title>
</head>

<body>
    <!-- Website Layout -->
    <div class="website_container">

        <!-- Global Menu -->
        <div id="global_menu_button_container">
            <p class="site_title">Daniils Onufrijuks</p>
            <i class="fa fa-bars" id="global_menu_button"></i>
        </div>

        <ul id="global_menu_items">
            <div>
                <i class="fa fa-close" id="global_menu_close_button"></i>
                <li><a href="index.html"><i class="fa fa-home"></i> About</a></li>
                <li><a href="resume.html"><i class="fas fa-file-alt"></i> Resume</a></li>
                <!-- <li><a href="blogs.html"><i class="fas fa-pen-nib"></i> Blogs</a></li> -->
                <li><a href="services.html"><i class="fas fa-cog"></i> Services</a></li>
                <li><a href="contact.html"><i class="fas fa-phone-square"></i> Contact</a></li>
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
                <h1>Daniils Onufrijuks</h1>
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
                <li><a href="index.html">About</a></li>
                <li><a href="resume.html">Resume</a></li>
                <!-- <li><a href="blogs.html">Blogs</a></li> -->
                <li><a href="services.html" class="active">Services</a></li>
                <li><a href="contact.html">Contact</a></li>

            </ul>

        </div>
        <!-- content -->
        <div class="content_container">
            <!-- Services Page -->
            <div class="services_page">
                <h2 class="title">My <span>Services</span></h2>
                <hr class="line">
                <!-- Services Row -->
                <div class="services_container">
                    <div class="services_box">
                        <i class="fas fa-tablet-alt"></i>
                        <h3 class="services_title">App Development</h3>
                        <p class="services_text"> </p>
                    </div>
                    <div class="services_box">
                        <i class="fas fa-globe"></i>
                        <h3 class="services_title">Website Development</h3>
                        <p class="services_text"> </p>
                    </div>
                </div>

                <div class="services_container">
                    <div class="services_box">
                        <i class="fas fa-pencil-ruler"></i>
                        <h3 class="services_title">Web Design</h3>
                        <p class="services_text"> </p>
                    </div>
                    <div class="services_box">
                        <i class="fas fa-drafting-compass"></i>
                        <h3 class="services_title">Logo Desing</h3>
                        <p class="services_text"> </p>
                    </div>
                </div>

                <div class="services_container">
                    <div class="services_box">
                        <i class="fab fa-figma"></i>
                        <h3 class="services_title">Figma Desing</h3>
                        <p class="services_text"></p>
                    </div>
                    <!-- <div class="services_box">
                        <i class="fas fa-search-location"></i>
                        <h3 class="services_title">SEO/Marketing</h3>
                        <p class="services_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                            nobis. Lorem ipsum dolor sit amet. </p>
                    </div> -->
                </div>

            </div>
        </div>
    </div>


    <script src="js/script.js"></script>
</body>

</html>