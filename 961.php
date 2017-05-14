<?php
require('/food/wp-blog-header.php');
?>

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Past Events</title>

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
        <!---link rel="stylesheet" href="css/font-awesome.min.css"--->
        <link rel="stylesheet" href="icon-fonts/styles.css">
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
    </head>

    <body>
        <div class="container">
            
            <div class="post">
                <div class="col-md-8">
                <?php
$my_id = 961;
$post_id_961 = get_post($my_id);
$content = $post_id_961->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]>', $content);
echo $content;
?>
                    
                </div>
            </div>
        </div>
    </body>

    </html>
