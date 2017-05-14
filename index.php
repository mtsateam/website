<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTSA - McGill Taiwanese Student Association</title>

    <!-- =========================
 FAV AND TOUCH ICONS  
============================== -->
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-touch-icon-114x114.png">

    <!-- =========================
     STYLESHEETS      
============================== -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/jquery.vegas.min.css">
    <link rel="stylesheet" href="css/animate.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/pixeden-icons.css">

    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- WEBFONT -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Montserrat:700,400|Homemade+Apple' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->

    <!-- JQUERY -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/owl.carousel.js"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5RYfyqSaxuQsUCnBQ_3C5opGU4SN9MQk&sensor=false"></script>

    <script type="text/javascript">
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            var mapOptions = {
                zoom: 13
                , center: new google.maps.LatLng(45.5042, -73.5747)
                , styles: [{
                    "featureType": "landscape.man_made"
                    , "elementType": "geometry"
                    , "stylers": [{
                        "color": "#f7f1df"
                    }]
                }, {
                    "featureType": "landscape.natural"
                    , "elementType": "geometry"
                    , "stylers": [{
                        "color": "#d0e3b4"
                    }]
                }, {
                    "featureType": "landscape.natural.terrain"
                    , "elementType": "geometry"
                    , "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "poi"
                    , "elementType": "labels"
                    , "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "poi.business"
                    , "elementType": "all"
                    , "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "poi.medical"
                    , "elementType": "geometry"
                    , "stylers": [{
                        "color": "#fbd3da"
                    }]
                }, {
                    "featureType": "poi.park"
                    , "elementType": "geometry"
                    , "stylers": [{
                        "color": "#bde6ab"
                    }]
                }, {
                    "featureType": "road"
                    , "elementType": "geometry.stroke"
                    , "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road"
                    , "elementType": "labels"
                    , "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road.highway"
                    , "elementType": "geometry.fill"
                    , "stylers": [{
                        "color": "#ffe15f"
                    }]
                }, {
                    "featureType": "road.highway"
                    , "elementType": "geometry.stroke"
                    , "stylers": [{
                        "color": "#efd151"
                    }]
                }, {
                    "featureType": "road.arterial"
                    , "elementType": "geometry.fill"
                    , "stylers": [{
                        "color": "#ffffff"
                    }]
                }, {
                    "featureType": "road.local"
                    , "elementType": "geometry.fill"
                    , "stylers": [{
                        "color": "black"
                    }]
                }, {
                    "featureType": "transit.station.airport"
                    , "elementType": "geometry.fill"
                    , "stylers": [{
                        "color": "#cfb2db"
                    }]
                }, {
                    "featureType": "water"
                    , "elementType": "geometry"
                    , "stylers": [{
                        "color": "#a2daf2"
                    }]
                }]
            };
            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.4762, -73.60629)
                , map: map
                , title: 'Chicha Restaurant'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.4923, -73.58202)
                , map: map
                , title: 'Dragon Supermarche'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.4932, -73.58025)
                , map: map
                , title: 'Desserts ETC.'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.49494, -73.57826)
                , map: map
                , title: 'Nos Thes'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.49485, -73.57687)
                , map: map
                , title: 'The Basak'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.49759, -73.57828)
                , map: map
                , title: 'Le Painnamou'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.49804, -73.57776)
                , map: map
                , title: 'Restaurant Boustan'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.50314, -73.57493)
                , map: map
                , title: 'Pannizza'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.50349, -73.57096)
                , map: map
                , title: 'Runway Beauty Bar'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.50438, -73.56793)
                , map: map
                , title: 'MBox Karaoke'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.52203, -73.57911)
                , map: map
                , title: 'Kinoya'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.51715, -73.55911)
                , map: map
                , title: 'Haru Hana'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.52013, -73.57497)
                , map: map
                , title: 'Simplement D Liche'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.50763, -73.55948)
                , map: map
                , title: 'Le Cristal Chinois'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.5073, -73.56022)
                , map: map
                , title: 'Restaurant Ethan'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.50722, -73.56059)
                , map: map
                , title: 'L2 Lounge'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.51034, -73.57511)
                , map: map
                , title: 'Spicy Noodle'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.49861, -73.57227)
                , map: map
                , title: 'Hakata Ramen'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.4996, -73.5744)
                , map: map
                , title: 'Brigade Pizzeria Napolitaine'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.4957, -73.57489)
                , map: map
                , title: 'Les Saisons de Coree'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.49723, -73.57706)
                , map: map
                , title: 'Kafein'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.4977, -73.57853)
                , map: map
                , title: 'Chef on Call'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.49776, -73.57853)
                , map: map
                , title: 'Tianxia'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.4948, -73.58028)
                , map: map
                , title: 'Restaurant Tapioca The'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.49484, -73.58047)
                , map: map
                , title: 'Magic Idea'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.49484, -73.58131)
                , map: map
                , title: 'La Maison du Nord'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.49372, -73.57977)
                , map: map
                , title: 'Chatime'
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(45.49152, -73.5822)
                , map: map
                , title: 'Le Showwok'
            });
        }
    </script>
</head>


<body>
    <!-- =========================
   PRE LOADER       
============================== -->
    <div class="preloader">
        <div class="status">&nbsp;</div>
    </div>
    <!-- =========================
   HOME SECTION       
============================== -->
    <header id="home" class="header">

        <!-- TOP BAR -->
        <div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">
            <div class="container">
                <div class="navbar-header responsive-logo">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="navbar-brand other-focus-list hidden-sm hidden-xs">
                        <ul class="social2 ">
                            <li>
                                <a href="https://www.facebook.com/mcgill.mtsa " target="_blank ">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com/mtsalovesyou/ " target="_blank ">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/user/MTSAvids " target="_blank ">
                                    <i class="fa fa-youtube-play"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <nav class="navbar-collapse collapse" role="navigation" id="bs-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right responsive-nav main-nav-list">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#aboutus">About Us</a></li>
                        <li><a href="#events">Events</a></li>
                        <li><a href="#houses">Houses</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#sponsors">Sponsors</a></li>
                        <li><a href="#foodblog">Food Blog</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- / END TOP BAR -->

        <!-- BIG HEADING WITH CALL TO ACTION BUTTONS AND SHORT MESSAGES -->
        <div class="container">

            <!-- HEADING -->
            <h1 class="intro">McGill Taiwanese <br>Student Association</h1>

            <!-- CALL TO ACTION BUTTONS -->
            <div class="buttons inpage-scroll">
                <a href="#aboutus" class="btn btn-primary custom-button yellow-btn">Go</a>
            </div>

            <div class="row bottom-message-section">
                <div class="col-lg-4 col-sm-4">
                    <div class="short-text">
                        <i class="fa fa-cutlery"></i> Eat
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="short-text">
                        <i class="fa fa-hand-peace-o"></i> Laugh
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="short-text">
                        <i class="fa fa-heart"></i> Love
                    </div>
                </div>
            </div>


        </div>
        <!-- / END BIG HEADING WITH CALL TO ACTION BUTTONS AND SHORT MESSAGES  -->

    </header>
    <!-- / END HOME SECTION  -->

    <!-- =========================
   ABOUT US SECTION   
============================== -->

    <section class="about-us" id="aboutus">
        <div class="container">

            <!-- SECTION HEADER -->
            <div class="section-header">

                <!-- SECTION TITLE -->
                <h2 class="black-text">About Us</h2>
            </div>
            <!-- / END SECTION HEADER -->

            <!-- 3 COLUMNS OF ABOUT US-->
            <div class="row">

                <!-- COLUMN 1 - BIG MESSAGE ABOUT THE COMPANY-->
                <div class="col-lg-4 col-md-4 column">
                    <div class="big-intro wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        Welcome back to another year with MTSA!
                    </div>
                </div>

                <!-- COLUMN 2 - BRIEF ABOUT THE COMPANY-->
                <div class="col-lg-4 col-md-4 column">
                    <p class="wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        For those of you just joining us, welcome to your new home! We hope you’re psyched about the upcoming school year with us - McGill University is such a dynamic campus, and we’re happy to be navigating it with you. We hope you’ll grow to love our community as much as we do.

                        <br/>
                        <br/>We’re the McGill Taiwanese Students’ Association (MTSA), the one and only Taiwanese student community on campus. Despite this, we definitely welcome students of all cultural backgrounds to join us. We strive to create a tight-knit, vibrant, and welcoming community through amazing events that showcase our rich Taiwanese culture, create spaces for meaningful cultural dialogue, and have a ton of fun while we’re at it.
                </div>

                <!-- COLUMN 3 - SKILLS-->
                <div class="col-lg-4 col-md-4 column hidden-xs hidden-sm">
                    <ul class="skills wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                        <!-- SKILL ONE -->
                        <li class="skill">
                            <div class="skill-count">
                                <input type="text" value="46" data-thickness=".2" class="skill1">
                            </div>
                            <h6>Party</h6>
                        </li>

                        <!-- SKILL TWO -->
                        <li class="skill">
                            <div class="skill-count">
                                <input type="text" value="89" data-thickness=".2" class="skill2">
                            </div>
                            <h6>Laughter</h6>
                        </li>

                        <!-- SKILL THREE -->
                        <li class="skill">
                            <div class="skill-count">
                                <input type="text" value="61" data-thickness=".2" class="skill3">
                            </div>
                            <h6>Foodie</h6>
                        </li>

                        <!-- SKILL FOUR -->
                        <li class="skill">
                            <div class="skill-count">
                                <input type="text" value="100" data-thickness=".2" class="skill4">
                            </div>
                            <h6>REASON TO LOVE THE CLUB</h6>
                        </li>

                    </ul>
                </div>
                <!-- / END SKILLS COLUMN-->
            </div>
            <!-- / END 3 COLUMNS OF ABOUT US-->

            <!-- OTHER FOCUSES -->
            <div class="other-focuses">
                <h5><span class="section-footer-title">SOCIAL MEDIA</span></h5>
            </div>

            <!-- OTHER FOCUS LIST -->
            <div class="other-focus-list wow fadeInUp animated hidden-xs hidden-sm" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                <ul class="social ">
                    <li>
                        <a href="https://www.facebook.com/mcgill.mtsa " target="_blank ">
                            <i class="fa fa-facebook fa-3x"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://instagram.com/mtsalovesyou/ " target="_blank ">
                            <i class="fa fa-instagram fa-3x"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/user/MTSAvids " target="_blank ">
                            <i class="fa fa-youtube-play fa-3x"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="other-focus-list wow fadeInUp animated hidden-md hidden-lg" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
            <a href="https://www.facebook.com/mcgill.mtsa " target="_blank ">
                <i class="fa fa-facebook fa-3x"></i>
            </a>
            <a href="https://instagram.com/mtsalovesyou/ " target="_blank ">
                <i class="fa fa-instagram fa-3x"></i>
            </a>
            <a href="https://www.youtube.com/user/MTSAvids " target="_blank ">
                <i class="fa fa-youtube-play fa-3x"></i>
            </a>
        </div>
        </div>
        <!-- / END OTHER FOCUS LIST -->
        </div>
        <!-- / END CONTAINER -->

    </section>
    <!-- END ABOUT US SECTION -->

    <!-- =========================
   STATS              
============================== -->

    <section class="stats">
        <div class="container">
            <!-- STATS -->
            <div class="row">

                <!-- START COLUMN -->
                <div class="col-lg-3 col-sm-3">
                    <div class="stat wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.25s" data-wow-delay="0.15s">
                        <div class="icon-top white-text">
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="stat-text">
                            <h3 class="white-text yellow1-border-bottom">23</h3>
                            <h6>Executives</h6>
                        </div>
                    </div>
                </div>
                <!-- / END COLUMN -->

                <!-- START COLUMN -->
                <div class="col-lg-3 col-sm-3">
                    <div class="stat wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.30s">
                        <div class="icon-top white-text">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="stat-text">
                            <h3 class="white-text yellow1-border-bottom">592</h3>
                            <h6>Members</h6>
                        </div>
                    </div>
                </div>
                <!-- / END COLUMN -->

                <!-- START COLUMN -->
                <div class="col-lg-3 col-sm-3">
                    <div class="stat wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.75s" data-wow-delay="0.45s">
                        <div class="icon-top white-text">
                            <i class="fa fa-user-plus"></i>
                        </div>
                        <div class="stat-text">
                            <h3 class="white-text yellow1-border-bottom">3376</h3>
                            <h6>Followers</h6>
                        </div>
                    </div>
                </div>
                <!-- / END COLUMN -->

                <!-- START COLUMN -->
                <div class="col-lg-3 col-sm-3">
                    <div class="stat wow fadeInUp animated" data-wow-offset="30" data-wow-duration="2s" data-wow-delay="1s">
                        <div class="icon-top white-text">
                            <i class="fa fa-photo"></i>
                        </div>
                        <div class="stat-text">
                            <h3 class="white-text yellow1-border-bottom">∞</h3>
                            <h6>Memories Made</h6>
                        </div>
                    </div>
                </div>
                <!-- / END COLUMN -->
            </div>
        </div>
    </section>
    <!-- / END STATS -->

    <!-- =========================
   EVENTS SECTION      
============================== -->

    <section class="events" id="events">
        <div class="container">

            <!-- SECTION HEADER -->
            <div class="section-header">

                <!-- SECTION TITLE -->
                <h2 class="dark-text">Events</h2>

                <h6>
			Stay tuned for upcoming events! 
		</h6>
            </div>
            <!-- / END SECTION HEADER -->
            <div id="portfolio-list" class="hidden-xs hidden-sm">
                <!-- PORTFOLIO ITEMS-->
                <ul class="cbp-rfgrid">

                    <!-- PROJECT -->
                    <li class="wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <a href="https://www.facebook.com/events/219381465076812/" target="_blank"><img src="img/portfolio/supertaste_full.png" alt="supertaste" />
                            <div class="project-info">
                                <div class="project-details">
                                    <h5 class="white-text yellow1-border-bottom">
					Supertaste (食尚玩家) </h5>
                                    <div class="details white-text">
                                        Annual Food Crawl
                                        <br>MAR 19 2016
                                        <br> 1pm @ SSMU B30
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- / PROJECT -->
                </ul>

                <a href="past-events.html" class="btn btn-primary custom-button red-btn more">Past Events</a>
            </div>
            <!-- END OF PORTFOLIO ITEMS-->


            <!-- PROJECT DETAILS WILL BE LOADED HERE -->
            <div id="loaded-content"></div>

        </div>
        <div class="row buttons">
            <a id="back-button" class="yellow-btn" href="#">Go Back</a>
        </div>
        <!-- / END CONTAINER -->
    </section>
    <!-- / END WORKS SECTION -->

    <!-- =========================
   HOUSES SECTION      
============================== -->

    <section class="houses" id="houses">
        <div class="container">

            <!-- SECTION HEADER -->
            <div class="section-header">

                <!-- SECTION TITLE -->
                <h2 class="white-text">Houses</h2>

                <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
                <h6 class="white-text">
			Coming soon!
		</h6>
            </div>
            <!-- / END SECTION HEADER -->
        </div>
        <!-- / END CONTAINER -->
    </section>
    <!-- / END FOCUS SECTION -->


    <!-- =========================
   OUR TEAM SECTION   
============================== -->

    <section class="our-team" id="team">
        <div class="container">

            <!-- SECTION HEADER -->
            <div class="section-header">

                <!-- SECTION TITLE -->
                <h2 class="dark-text">The A Team</h2>

                <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
                <h6 class="hidden-xs hidden-sm">Hover to learn more about the execs!</h6>
                <h6 class="hidden-md hidden-lg">Click to learn more about the execs!</h6>
            </div>
            <!-- / END SECTION HEADER -->

            <!-- TEAM MEMBERS -->
            <div id="team-mmb-list" class="row owl-carousel" data-wow-offset="40" data-wow-duration="3s" data-wow-delay="0.15s">

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/cindy.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text red2-border-bottom">Cindy Huang</h5>
                        <div class="position">
                            Co-President
                        </div>
                    </div>
                    <div class="details">
                        <p>U3 Anthropology & Biology
                            <br>
                            <br>1. Cats sleep anywhere from 16 to 20 hours a day
                            <br>2. I try to get at least 16 hours of sleep a day
                            <br>3. Thus...???
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/wei-wei.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text red1-border-bottom">Wei-Wei Lin</h5>
                        <div class="position">
                            Co-President
                        </div>
                    </div>
                    <div class="details">
                        <p>U2 Cognitive Science
                            <br>
                            <br>1. I’m just wei-ting for the perfect man...
                            <br>2. ...who can wei-k me up from this nightmare...
                            <br>3. ...and take me a-wei to a fairytale land......
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/casper.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text yellow2-border-bottom">Casper Liu</h5>
                        <div class="position">
                            Senior Advisor
                        </div>
                    </div>
                    <div class="details">
                        <p>U3 Computer Science & Biology
                            <br>
                            <br>500, Basketball, Fried Chicken, Beer pong.
                            <br>
                            <br>If you like any of the above we can be bffs.
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/jeremy.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text yellow1-border-bottom">Jeremy Liu</h5>
                        <div class="position">
                            Senior Advisor
                        </div>
                    </div>
                    <div class="details">
                        <p>U3 Pharmacology
                            <br>
                            <br>1. I am very gullible
                            <br>2. I like to eat...like a lot
                            <br>3. JerBear is my nickname
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/helton.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text yellow1-border-bottom">Helton Chen</h5>
                        <div class="position">
                            Senior Advisor
                        </div>
                    </div>
                    <div class="details">
                        <p>U4 Electrical Engineering
                            <br>
                            <br>1. Loves magic, basketball, and photography
                            <br>2. Never stops eating
                            <br>3. I copied these 3 facts from last year’s booklet :P
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/kevin.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text yellow2-border-bottom">Kevin Cheng</h5>
                        <div class="position">
                            Internal
                        </div>
                    </div>
                    <div class="details">
                        <p>U2 Kinesiology
                            <br>
                            <br>1. I hate going to the gym...but my muscles dont grow on their own
                            <br>2. I miss easy beer pong shots even when sober
                            <br>3. I am allergic to beer and wine (like actually)
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/tiffany.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text red1-border-bottom">Tiffany Huang</h5>
                        <div class="position">
                            Internal
                        </div>
                    </div>
                    <div class="details">
                        <p>U2 Pharmacology
                            <br>
                            <br>1. I can eat peanut butter everyday for the rest of my life and not get sick of it
                            <br>2. Cafes and bakeries are my happy place
                            <br>3. I can’t take naps shorter than 3 hours (Does that still qualify as a nap?)
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/frances.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text red2-border-bottom">Frances Wu</h5>
                        <div class="position">
                            Internal
                        </div>
                    </div>
                    <div class="details">
                        <p>U2 Psychology & Economics
                            <br>
                            <br>1. Loves yoga and breakfast food
                            <br>2. Spends most of the time at the library
                            <br>3. Current favourite movie is Fast & Furious (Yes, from 1-7)
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/mac.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text red2-border-bottom">Mac Raagas</h5>
                        <div class="position">
                            Internal
                        </div>
                    </div>
                    <div class="details">
                        <p>U3 Physiology
                            <br>
                            <br>1. I like MACadmia nut cookies
                            <br>2. I like MAcarons
                            <br>3. I like MAC & cheese
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/joshua.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text red1-border-bottom">Joshua Lau</h5>
                        <div class="position">
                            Internal
                        </div>
                    </div>
                    <div class="details">
                        <p>U2 Cognitive Science
                            <br>
                            <br>1. I have a shopping problem *-*
                            <br>2. The sloth is my spirit animal
                            <br>3. I like taking naps
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/po.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text yellow2-border-bottom">Po-Shiang Wang</h5>
                        <div class="position">
                            VP Culture
                        </div>
                    </div>
                    <div class="details">
                        <p>U2 Computer Engineering
                            <br>
                            <br>1. Greatest weakness is being a perfectionist
                            <br>2. Basic knowledge in MS Paint, Snipping Tool and Notepad
                            <br>3. References available upon request
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/tina.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text yellow1-border-bottom">Tina Tsai</h5>
                        <div class="position">
                            VP Finance
                        </div>
                    </div>
                    <div class="details">
                        <p>U3 Pharmacology
                            <br>
                            <br>1. I’m 20 and retired
                            <br>2. Chocolate (chip cookie) is my life
                            <br>3. I can tell you all about drugs ;)
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/justin.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text yellow1-border-bottom">Justin Mai</h5>
                        <div class="position">
                            Finance
                        </div>
                    </div>
                    <div class="details">
                        <p>U2 Pharmacology
                            <br>
                            <br>1. I spend half my time creeping food pictures on Instagram and the other half on Yelp
                            <br>2. The selfie stick is my all-time favourite travel companion
                            <br>3. If you can crack a good pun, you’re automatically Mai fave
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/josephine.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text yellow2-border-bottom">Josephine Kuo</h5>
                        <div class="position">
                            Finance
                        </div>
                    </div>
                    <div class="details">
                        <p>U2 Human Resources
                            <br>
                            <br>1. Always down for ice cream
                            <br>2. Sunrises over sunsets
                            <br>3. I like surprises
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/rachel.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text red1-border-bottom">Rachel Chen</h5>
                        <div class="position">
                            Finance
                        </div>
                    </div>
                    <div class="details">
                        <p>U2 Finance
                            <br>
                            <br>1. Chat me about anything
                            <br>2. Hungry all the time
                            <br>3. Cry easily in movies, laugh a lot in real life
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/sonnia.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text red2-border-bottom">Sonnia Kuo</h5>
                        <div class="position">
                            Social Media
                        </div>
                    </div>
                    <div class="details">
                        <p>U3 Psychology
                            <br>
                            <br>1. Every time Starbucks asks me my name I give them a different fake one
                            <br>2. Got deported from Canada once. Why? You’ll never know...
                            <br>3. #1 and #2 are definitely related
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/nicole.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text red2-border-bottom">Nicole Ho</h5>
                        <div class="position">
                            Senior Graphic Designer
                            <br>& Webmaster
                        </div>
                    </div>
                    <div class="details">
                        <p>U2 Software Engineering
                            <br>
                            <br>1. I’m allergic to seafood but I eat it anyways because I eat everything...except for vegetables
                            <br>2. I clean to procrastinate
                            <br>3. Wrongfully accused two-shot wonder

                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/deborah.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text red1-border-bottom">Deborah Lin</h5>
                        <div class="position">
                            Junor Graphic Designer
                        </div>
                    </div>
                    <div class="details">
                        <p>U2 Psychology & Economics
                            <br>
                            <br>1. The first thing I’ve ever tried to draw was (probably) a Neopet
                            <br>2. It’s 2015 and I still use 2012 internet slang ok I’m sorry
                            <br>3. Pls nominate me for VP Aesthetic~
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/felicia.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text yellow2-border-bottom">Felicia Chang</h5>
                        <div class="position">
                            Photographer
                        </div>
                    </div>
                    <div class="details">
                        <p>U1 Political Science & Economics
                            <br>
                            <br>1. I’m a fan of far-fetched Illuminati conspiracy theories
                            <br>2. Math? More like no this is why I’m not in sciences
                            <br>3. I’ll photoshop your face onto Thomas the Tank Engine in honour of Chris (Simpsons artist)
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/tiffanyl.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text yellow1-border-bottom">Tiffany Liu</h5>
                        <div class="position">
                            Videographer
                        </div>
                    </div>
                    <div class="details">
                        <p>U1 Physiology
                            <br>
                            <br>1. A lot of people call me Fang because my translated name is Fang Ju, but it really sounds nothing like “Fang”
                            <br>2. I’ve been a vegetarian 92% of my life
                            <br>3. I have a life-sized panda from Costco that’s bigger in size than me
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/annie.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text yellow2-border-bottom">Annie Chien</h5>
                        <div class="position">
                            External
                        </div>
                    </div>
                    <div class="details">
                        <p>U1 Nursing
                            <br>
                            <br>1. BINGSOO FOR LIFE
                            <br>2. I would walk 45 minutes to the Plateau or Mile End for brunch, take 10 minutes to take an Instagram photo and 5 minutes to eat the food
                            <br>3. I LOVE BAKING!!!
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/jessica.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text red1-border-bottom">Jessica Wang</h5>
                        <div class="position">
                            External
                        </div>
                    </div>
                    <div class="details">
                        <p>U1 Neuroscience
                            <br>
                            <br>1. Runner, rower, biker
                            <br>2. My hearing sucks - I hear that the party life does that to you hollaaaa
                            <br>3. Yes, I am in science but no, I’m not only considering med school!
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- MEMBER -->
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="img/team/jeff.png" alt="">
                        <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text red2-border-bottom">Jeff Fang</h5>
                        <div class="position">
                            External
                        </div>
                    </div>
                    <div class="details">
                        <p>U1 Political Science & Economics
                            <br>
                            <br>1. Master of Pilates & Yoga
                            <br>2. Captain of the Mathematics Club
                            <br>3. Dedicated follower of RepsForJesus aka Church aka arianagrande
                        </p>
                    </div>
                </div>
                <!-- / END MEMBER -->

                <!-- ... -->
                <!-- END TEAM MEMBER LIST-->
            </div>
        </div>
        <!-- / END CONTAINER -->
    </section>
    <!-- / END TEAM MEMBER SECTION -->

    <!-- =========================
   SEPARATOR ONE      
============================== -->

    <section class="separator-one">
        <div class="red1-bg">
            <h3 class="container text wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

            </div>
        </div>
    </section>
    <!-- / END SEPARATOR -->

    <!-- =========================
   SPONSORS      
============================== -->

    <section class="sponsors" id="sponsors">
        <div class="container color-overlay">
            
          <!-- SECTION HEADER -->
            <div class="section-header">

            <!-- SECTION TITLE -->
            <h2 class="dark-text">Sponsors</h2>
        </div>
        <!-- / END SECTION HEADER -->
        <div id="discount-list">
             <div id="map"></div>   
            <div class="row buttons hidden-xs hidden-sm">
                <a href="sponsors.html" class="btn btn-primary custom-button red-btn more2">Discounts</a>
            </div>
            </div>
            <p><table class="table discounts wow fadeInUp animated hidden-md hidden-lg" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                <tr>
                    <td>Basak</td>
                    <td class="hidden-xs">1237 rue Guy, Montréal, QC H3H</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>Boustan</td>
                    <td class="hidden-xs">2020 rue Crescent, Montréal, QC H3G 2B8
                        <br>19 Rue Ste-Catherine E, Montréal, QC H2X 1K3</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>Brigade Pizzeria Napolitaine</td>
                    <td class="hidden-xs">1428 rue Stanley, Montréal, QC H3A 1P7</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>Chatime</td>
                    <td class="hidden-xs">1811 rue Ste-Catherine O, Montréal, QC H3H</td>
                    <td>Free upgrade from small to large BBT with MTSA card</td>
                </tr>
                <tr>
                    <td>Chef on Call</td>
                    <td class="hidden-xs">362 rue Sherbrooke O, Montréal, QC H3A 1B5</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>Chicha Restaurant</td>
                    <td class="hidden-xs">5100 rue Sherbrooke O, Montréal, QC H4A 1T1</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>Desserts ETC.</td>
                    <td class="hidden-xs">1853 rue Ste-Catherine O, Montréal, QC H3H 1M2</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>Farrouj Express</td>
                    <td class="hidden-xs">3575 Avenue du Parc #5200, Montréal, QC H2X 3P9</td>
                    <td>10% off with MTSA card</td>
                </tr>
                            <tr>
                    <td>Lauzon Driving School</td>
                    <td class="hidden-xs">600 rue Jean-Talon E #101, Montréal, QC H2R 3A8</td>
                    <td>$100 off RSEP package with MTSA card</td>
                </tr>
                <tr>
                    <td>Hakata Ramen</td>
                    <td class="hidden-xs">1216 rue Stanley, Montréal, QC H3B 2S7</td>
                    <td>Free drink with MTSA card</td>
                </tr>
                <tr>
                    <td>Haru-Hana</td>
                    <td class="hidden-xs">912 Boulevard de Maisonneuve E, Montréal, QC H2L 1Z1</td>
                    <td>15% off with MTSA card</td>
                </tr>
                <tr>
                    <td>Kafein</td>
                    <td class="hidden-xs">1429 rue Bishop, Montréal, QC H3G 2E4</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>Kinoya</td>
                    <td class="hidden-xs">4250 rue St-Denis, Montréal, QC H2J 2K8</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>Kyozon</td>
                    <td class="hidden-xs">1458 rue Crescent, Montréal, QC H3G 2B7</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>L2 Lounge</td>
                    <td class="hidden-xs">71 rue de la Gauchetière O, Montréal, QC H2Z 1C2</td>
                    <td>10% off with MTSA card (Cash Only)</td>
                </tr>
                <tr>
                    <td>Le Cristal Chinois</td>
                    <td class="hidden-xs">6F, 998 Boulevard Saint-Laurent, Montréal, QC H2Z 9Y9</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>Le Painnamou</td>
                    <td class="hidden-xs">2019 rue Bishop, Montréal, QC H3G 2E8</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>Le Showwok</td>
                    <td class="hidden-xs">2081 rue Ste-Catherine O, Montréal, QC H3H 1M6</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>Les Saisons de Coree</td>
                    <td class="hidden-xs">1184 rue Bishop, Montréal, QC H3G 2M5</td>
                    <td>10% off orders of $40 or more with MTSA card</td>
                </tr>
                <tr>
                    <td>Magic Idea</td>
                    <td class="hidden-xs">1675 Boulevard de Maisonneuve O, Montréal, QC H3H 1J6</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>Maison du Nord</td>
                    <td class="hidden-xs">2130 rue Saint Mathieu, Montréal, QC H3H 2J4</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>MBox Karaoke</td>
                    <td class="hidden-xs">486 rue Ste-Catherine O, Montréal, QC H3B 1A6</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>Nos Thes</td>
                    <td class="hidden-xs">1609 rue Ste-Catherine O, Montréal, QC H3H 1L8</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>Pannizza</td>
                    <td class="hidden-xs">914 rue Sherbrooke O, Montréal, QC H3A 1G3</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>Restaurant Ethan</td>
                    <td class="hidden-xs">72 rue de la Gauchetière O, Montréal, QC H2Z 1B9</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>Runway Beauty Bar</td>
                    <td class="hidden-xs">677 Ste-Catherine O, #M24A, Montréal, QC H3B 5K4</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>Sheng Tang Supermarket</td>
                    <td class="hidden-xs">1425 rue du Fort, Montréal, QC H3H 2C2</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>Simplement D Liche</td>
                    <td class="hidden-xs">3964 rue St Denis, Montréal, QC H2W 2M2</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>Spicy Noodle</td>
                    <td class="hidden-xs">3575 Avenue du Parc, Montréal, QC H2X 3P9</td>
                    <td>10% off with MTSA card</td>
                </tr>
                <tr>
                    <td>Tapioca Thé</td>
                    <td class="hidden-xs">1672 Boulevard de Maisonneuve O, Montréal, QC H3H 1J6</td>
                    <td>10% off with MTSA card (Cash Only)</td>
                </tr>
                <tr>
                    <td>Tianxia</td>
                    <td class="hidden-xs">2065 rue Bishop, Montréal, QC H3G 2E8</td>
                    <td>10% off with MTSA card</td>
                </tr>
            </table>


            <!-- PROJECT DETAILS WILL BE LOADED HERE -->
            <div id="loaded-content2"></div>
                
        <div class="row buttons hidden-xs hidden-sm">
            <a id="back-button2" class="yellow-btn" href="#">Go Back</a>
        </div>
        <!-- / END CONTAINER -->
    </section>
    <!-- / END WORKS SECTION -->

    <!-- =========================
   FOOD BLOG        
============================== -->

    <section class="foodblog" id="foodblog">
        <div class="container ">

            <!-- SECTION HEADER -->
            <div class="section-header ">

                <!-- SECTION TITLE -->
                <h2 class="white-text ">Food Blog</h2>
            </div>
            <!-- / END SECTION HEADER -->
            
            
            <div class="row wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
		<div class="col-md-12">
			<div id="foodblog-entries" class="owl-carousel owl-theme">
				
				<div class="feedback-box">
					<div class="message">
                        <h3>Fortune Dumpling</h3>
            <font size="2" class="grey-text">February 13, 2015 by Rachel Chen</font>
            <br>Are you tired of fancy overpriced restaurant? Do you sometimes crave hard for a warm bowl of soup and homemade cuisine? MTSA feels you. Fortune Dumpling & Bubble Tea is the place to be, serving savory Chinese Xiao Chi (traditional dishes)! It is located on the <font class="yellow1-text">(...)</font>
            <br>
            <br><img src="img/foodblog/fortune-dumpling.jpeg" width="305px">
        </div>
        <div class="buttons2">
            <a href="http://mtsa.tw/food/?p=961" target="_blank" class="btn btn-primary custom-button yellow-btn">Read More</a>
        </div>
        </div>

        <div class="feedback-box">
            <div class="message">
                <h3>Tapioca The</h3>
                <font size="2" class="grey-text">January 24, 2015 by Frances Wu</font>
                <br>In the frigid Montreal winter, all you want is a warm and cozy place for you to warm up your icy fingers and indulge your constant cravings for good food. Tapioca The, the delicious Chinese restaurant conveniently located near the intersection of Guy and Maisonneuve <font class="yellow1-text">(...)</font>
                <br>
                <br><img src="img/foodblog/tapioca-the.png" width="305px">
            </div>
            <div class="buttons2">
                <a href="http://mtsa.tw/food/?p=950" target="_blank" class="btn btn-primary custom-button yellow-btn">Read More</a>
            </div>
        </div>

        <div class="feedback-box">
            <div class="message">
                <h3>MBox Karaoke</h3>
                <font size="2" class="grey-text">November 30, 2014 by Nicole Ho</font>
                <br>Tired and exhausted from your endless nights of studying? Come and belt out all your sorrows with karaoke! Located near the intersection of Saint-Catherine and Aylmer, this karaoke & bar is equipped with a variety of rooms, perfect for de-stressing with <font class="yellow1-text">(...)</font>
                <br>
                <br><img src="img/foodblog/mbox.png" width="305px">
            </div>
            <div class="buttons2">
                <a href="http://mtsa.tw/food/?p=939" target="_blank" class="btn btn-primary custom-button yellow-btn">Read More</a>
            </div>
        </div>

        </div>
        <!-- / END COLUMN -->
        </div>
        <!-- / END ROW -->

        <div class="button">
            <a href="http://mtsa.tw/food/" target="_blank" class="btn btn-primary custom-button red-btn">Full Food Blog</a>
        </div>

        </div>
        <!-- / END CONTAINER -->
        </div>
        </div>
        <!-- / END CONTAINER -->
    </section>
    <!-- / END FOOD BLOG SECTION -->


    <!-- =========================
   FOOTER             
============================== -->

    <footer>
        <div class="container ">

            <div class="col-md-5 visible-desktop company-details ">
            </div>

            <div class="col-md-2 visible-desktop company-details ">
            </div>

            <div class="col-md-2 visible-desktop company-details ">
            </div>

            <!-- SOCIAL ICON AND COPYRIGHT -->
            <div class="col-lg-3 col-sm-3 copyright ">
                <ul class="social ">
                    <li><a href="https://www.facebook.com/mcgill.mtsa " target="_blank "><i class="fa fa-facebook "></i></a></li>
                    <li><a href="https://instagram.com/mtsalovesyou/ " target="_blank "><i class="fa fa-instagram "></i></a></li>
                    <li><a href="https://www.youtube.com/user/MTSAvids " target="_blank "><i class="fa fa-youtube-play "></i></a></li>
                </ul>
                mtsa.team@gmail.com
            </div>
        </div>
        <!-- / END CONTAINER -->
    </footer>
    <!-- / END FOOOTER  -->

    <!-- SCRIPTS -->
    <script src="js/bootstrap.min.js "></script>
    <script src="js/wow.min.js "></script>
    <script src="js/jquery.nav.js "></script>
    <script src="js/jquery.knob.js "></script>
    <script src="js/owl.carousel.min.js "></script>
    <script src="js/smoothscroll.js "></script>
    <script src="js/jquery.vegas.min.js "></script>
    <script src="js/zerif.js "></script>

</body>

</html>