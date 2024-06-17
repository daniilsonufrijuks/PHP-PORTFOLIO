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
                <?php include "inc/sidebarc.php";?>
            </ul>

        </div>
        <!-- content -->
        <div class="content_container">
            <!-- Resume Page -->
            <div class="resume_page">
                <h2 class="title">My <span>Resume</span></h2>
                <hr class="line">
                <div class="resume_container">
                    <!-- Experience container -->
                    <!-- <div class="left_resume">
                        <h2 class="resume_title"><i class="fa fa-suitcase"></i> Experience</h2>
                        <div class="resume_box">
                            <span class="resume_date">2019-Present</span>
                            <p class="resume_box_title">Art Director</p>
                            <p class="resume_conpany">Google Inc</p>
                            <p class="resume_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
                                doloremque.</p>
                        </div>

                        <div class="resume_box">
                            <span class="resume_date">2016-2019</span>
                            <p class="resume_box_title">Developer</p>
                            <p class="resume_conpany">Microsoft</p>
                            <p class="resume_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
                                doloremque.</p>
                        </div>

                        <div class="resume_box">
                            <span class="resume_date">2014-2016</span>
                            <p class="resume_box_title">Designer</p>
                            <p class="resume_conpany">AliveCoder</p>
                            <p class="resume_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
                                doloremque.</p>
                        </div>
                    </div> -->

                    <!-- Education Container -->
                    <div class="right_resume">
                        <h2 class="resume_title"><i class="fas fa-book-open"></i> Education</h2>
                        <div class="resume_box">
                            <span class="resume_date">2022-Present</span>
                            <p class="resume_box_title">Information Technology</p>
                            <p class="resume_conpany">RVT College</p>
                            <p class="resume_text">Programming, Java, Python, C#, PHP, JS, math, phisics, Systems, OS, Protocols</p>
                        </div>

                        <div class="resume_box">
                            <span class="resume_date">2017-2024</span>
                            <p class="resume_box_title">Computer Scince</p>
                            <p class="resume_conpany">PROGMEISTARS Courses</p>
                            <p class="resume_text">Programming, math, Golang programming language, Python programming language, sorting
                             algorithms</p>
                        </div>

                        <div class="resume_box">
                            <span class="resume_date">2013-2022</span>
                            <p class="resume_box_title">Basic education</p>
                            <p class="resume_conpany">Riga school 13</p>
                            <p class="resume_text">Basics in math, phisics, programming</p>
                        </div>
                    </div>

                </div>

                <h2 class="title">My <span>Skills</span></h2>
                <hr class="line">
                <!-- Skill Container -->
                <div class="resume_container">
                    <div class="left_resume">
                        <h2 class="resume_title"><i class="fas fa-pencil-ruler"></i> Systems</h2>
                        <div class="skill_box">
                            <h2 class="skill_title">Visual Studio Code</h2>
                            <div class="skill_line_container">
                                <div class="skill_line" style="width: 80%;"></div>
                            </div>
                        </div>

                        <div class="skill_box">
                            <h2 class="skill_title">Visual Studio</h2>
                            <div class="skill_line_container">
                                <div class="skill_line" style="width: 70%;"></div>
                            </div>
                        </div>

                        <div class="skill_box">
                            <h2 class="skill_title">Figma</h2>
                            <div class="skill_line_container">
                                <div class="skill_line" style="width: 60%;"></div>
                            </div>
                        </div>

                        <div class="skill_box">
                            <h2 class="skill_title">Git</h2>
                            <div class="skill_line_container">
                                <div class="skill_line" style="width: 60%;"></div>
                            </div>
                        </div>

                        <div class="skill_box">
                            <h2 class="skill_title">CMD</h2>
                            <div class="skill_line_container">
                                <div class="skill_line" style="width: 70%;"></div>
                            </div>
                        </div>

                    </div>

                    <div class="right_resume">
                        <h2 class="resume_title"><i class="fas fa-code"></i> Coding</h2>
                        <div class="skill_box">
                            <h2 class="skill_title">Java</h2>
                            <div class="skill_line_container">
                                <div class="skill_line" style="width: 90%;"></div>
                            </div>
                        </div>

                        <div class="skill_box">
                            <h2 class="skill_title">C#</h2>
                            <div class="skill_line_container">
                                <div class="skill_line" style="width: 80%;"></div>
                            </div>
                        </div>

                        <div class="skill_box">
                            <h2 class="skill_title">HTML/CSS/JS</h2>
                            <div class="skill_line_container">
                                <div class="skill_line" style="width: 70%;"></div>
                            </div>
                        </div>

                        <div class="skill_box">
                            <h2 class="skill_title">Python</h2>
                            <div class="skill_line_container">
                                <div class="skill_line" style="width: 80%;"></div>
                            </div>
                        </div>

                        <div class="skill_box">
                            <h2 class="skill_title">Golang</h2>
                            <div class="skill_line_container">
                                <div class="skill_line" style="width: 90%;"></div>
                            </div>
                        </div>

                        <div class="skill_box">
                            <h2 class="skill_title">PHP</h2>
                            <div class="skill_line_container">
                                <div class="skill_line" style="width: 30%;"></div>
                            </div>
                        </div>

                        <div class="skill_box">
                            <h2 class="skill_title">JS</h2>
                            <div class="skill_line_container">
                                <div class="skill_line" style="width: 10%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/script.js"></script>
</body>

</html>