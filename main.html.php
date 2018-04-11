<!DOCTYPE html>

<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1" />
    <meta name="author" content="Mario Lopriore" />
    <meta name="description" content="Anchor Tag Design: Web Design | Photography | Graphic Design" />
    <meta name="keywords" content="portland web design, portland website design, graphic design, web designers, small business websites, affordable custom web sites, websites, Portland Oregon, portland, web sites, artist portfolio websites" />
    
    <!-- Facebook Open Graph markup. -->
    <meta property="og:url" content="https://www.anchortagdesign.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Anchor Tag Design" />
    <meta property="og:description" content="Freelance web design, graphics and photography for artists, makers, and small businesses. Based in Portland, Oregon" />
    <meta property="og:image" content="http://www.anchortagdesign.com/atd_og_linkedIn.png" />
    <meta property="fb:app_id" content="966242223397117" />
 
    <!-- Twitter Card markup. -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@mariojames211" />
    <meta name="twitter:title" content="Portland Oregon Web Designer and Photographer" />
    <meta name="twitter:description" content="Freelance web design, graphics, and photography for artists, makers and small businesses. Mobile first and custom WordPress sites plus logos, graphics, and digital photography." />
    <meta name="twitter:image" content="http://www.anchortagdesign.com/atd_og_linkedIn.png" />

    
    <title>Anchor Tag Design</title>
    
    <!-- Google's CDN jQuery script. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>

    <!-- Google fonts. Headline then Body fonts. -->
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
            
    <!-- JavaScript from the js folder. -->
    <script src="js/scripts.js" type="text/javascript"></script>
    
    <!-- Stylesheets in the css folder. -->
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Font Awesome! -->
    <script src="https://use.fontawesome.com/ef441b60f1.js"></script>
    
    <!-- LinkedIn Badge script. -->
    <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>

</head>

<body>
    <!-- Only one ID per page. Here's the footer's jump link back up. -->
    <div id="header"></div>
    
    <!-- Navigation from the includes folder. -->
    <div class="nav">
    <?php include 'includes/nav.inc.php'; ?>
    </div>
    
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
                
                <!-- Title for work example. "href" comes with it from the database. -->
                <h3><?php echo $row['title']; ?></h3>
                
                <!-- Image for work example. "href" comes with it from the database. Style from LESS. -->
                <div class="col span_7_of_12">
                    <?php echo ($row['thumb']); ?>
                </div>
                
                <!-- Text for work example. -->
                <div class="col span_5_of_12">
                    <p><?php echo htmlspecialchars($row['stats'], ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
                
            </div>
             <?php endforeach; ?>
            
        </section>
        <!-- End work section in main content. -->

        <!-- Section breaks. -->
        <div class="shade">&nbsp;</div>
        
        
        <!-- About content section. -->
        <section class="about section group" id="about">
            
            <h2>About Web Design:</h2>
            
            <!-- About section text from its folder. -->            
            <?php include 'about/index.php'; ?>
            
        </section>
        <!-- End of about section in main content. -->
        
        <!-- Section breaks. -->
        <div class="shade">&nbsp;</div>
        
        
        <!-- Process content section. -->
        <section class="process section group"  id="process">
            
            <h2>The Mission &amp; The Process:</h2>
            
            <!-- Process section text from its folder. -->
            <?php include 'process/index.php'; ?> 
            
        </section>
        <!-- End process section in main content. -->
        
        <!-- Section breaks. -->
        <div class="shade">&nbsp;</div>
        
        
        <!-- Contact (PHP form) section. -->
        <section class="contact section group" id="contact">
            
            <h2>Contact Anchor Tag Design:</h2>
            
                <div class="col span_5_of_12">
                    <!-- Contact form control page from its folder. -->
                    <?php include 'contact/index.php'; ?>
                </div>
            
            <div class="col span_7_of_12">
                <!-- Contact text from its folder. -->
                <?php include 'contact_text/index.php'; ?>
            </div>

        </section>
        <!-- End contact section in main content. -->
      
        <!-- Footer from the includes folder. -->
        <?php include 'includes/footer.inc.php'; ?>
        
    </main>

</body>

</html>
