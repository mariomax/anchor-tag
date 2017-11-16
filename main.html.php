<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1" />
    <meta name="author" content="Mario Lopriore" />
    <meta name="description" content="Anchor Tag Design: Websites | Photography | Graphic Design" />
    <meta name="keywords" content="HTML5, CSS/LESS, PHP, JavaScript, GitHub" />
    
    <title>Anchor Tag Design</title>

    <!-- Google fonts. Headline then Body font. -->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet"> 

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97175852-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-97175852-2');
    </script>
    
    <!-- Stylesheets in the css folder. -->
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Font Awesome! -->
    <script src="https://use.fontawesome.com/ef441b60f1.js"></script>
    
    <!-- Slim minified jQuery script. -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
            crossorigin="anonymous"></script>
        
    <!-- JavaScript from the js folder. -->
    <script src="js/scripts.js" type="text/javascript"></script>
    
</head>

<body>

    <!-- Navigation from the includes folder. -->
    <?php include 'includes/nav.inc.php'; ?>

    <!-- Mobile header from the includes folder. -->
    <div class="mobileHeader">
        <?php include 'includes/mobile_header.inc.php'; ?>
    </div>

    <!-- Header from the includes folder. -->
    <div class="fullHeader">
        <?php include 'includes/header.inc.php'; ?>
    </div>
    
    <main>
        <!-- Work content section. -->
        <section class="work section group" id="work">
            <h2>Mobile First &amp; WordPress:</h2>
            
        <!-- PHP islands here with a foreach loop pulls images and text from the database! -->
            <?php foreach ($works as $row): ?>
            <div class="col span_4_of_12">

                <h3><?php echo htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                <img src="<?php echo ($row['thumb']); ?>" alt="thumbnail of portfolio image">
                <p><?php echo htmlspecialchars($row['stats'], ENT_QUOTES, 'UTF-8'); ?></p>
               
            </div>
             <?php endforeach; ?>
            
        </section>
        <!-- End work section in main content. -->

        <!-- This page needs to be included from the control page. That page needs to be the index.php so it loads first. That's the "logic" page and contains the connection to the database. Thank you Rocco!!! -->
            
        <!-- About content section. -->
        <section class="about section group" id="about">
            <h2>About the Work:</h2>
            
            <?php include 'about/index.php'; ?>
            
        </section>
        <!-- End of about section in main content. -->
        
        <!-- Process content section. -->
        <section class="process section group"  id="process">
            <h2>The Mission &amp; The Process:</h2>
            
            <?php include 'process/index.php'; ?> 
            
        </section>
        <!-- End process section in main content. -->
        
        <!-- Contact (PHP form) section. -->
        <section class="contact section group" id="contact">
            <h2>Contact Anchor Tag Design:</h2>
                <div class="col span_5_of_12">
                <!-- Contact form control page from its folder. -->
                    
                    <?php include 'contact/index.php'; ?>
                    
                </div>
            <div class="col span_7_of_12">
                
                <?php include 'contact_text/index.php'; ?>
                
            </div>

        </section>
        
        <!-- Footer from the includes folder. -->
        <?php include 'includes/footer.inc.php'; ?>
    </main>

    <!-- jQuery hamburger menu control -->
    <!-- This version closes with a click. -->
    <script type="text/javascript">
        jQuery(function($) {
            $('.menu-btn').click(function() {
                $('.responsive-menu').toggleClass('expand')
            })
        })
    </script>

</body>

</html>