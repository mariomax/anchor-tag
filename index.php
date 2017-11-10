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
    <link href="css/styles.css" rel="stylesheet">

    <!-- Font Awesome! -->
    <script src="https://use.fontawesome.com/ef441b60f1.js"></script>
    
    <!-- Slim minified jQuery script. -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
            crossorigin="anonymous"></script>

    <!-- Include the 64 x 64 px favicon for the browser tab. -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">-->
    
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Invisible reCAPTCHA script -->
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
    <!-- PHP islands here with foreach loops to pull images and text from the database. -->
    <!-- It's just not it happening. I'm getting "undefined variable" $works on line 60. -->
<!--
            <div class="col span_4_of_12">
                <?php echo htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8'); ?>
                <?php foreach ($works as $row): ?>
                <img src="..<?php echo ($row['thumb']); ?>" alt="image path from database">
                <h3><?php echo htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                <p><?php echo htmlspecialchars($row['stats'], ENT_QUOTES, 'UTF-8'); ?></p>
                <?php endforeach; ?>
    This page needs to be the include from the control page. That page needs to be the index.php so it loads first.
    That's the "logic" page and contains the connection to the database. Thank you Rocco!!!        
            </div>
-->
            
            <div class="col span_4_of_12">
                <h3>Burrito Masala</h3>
                <img src="images/burrito.png" alt="placeholder image">
                <p>Hypothetically, one of the greatest food carts in Portland, Oregon. Realistically, it's a just tight mobile first website.</p>
            </div>
            <div class="col span_4_of_12">
                <h3>Beer with me a sec.</h3>
                <img src="images/beers.png" alt="placeholder image">
                <p>Utilizing the Brewery DB API, this mobile first site serves as a beer encyclopedia and brewery finder. Pairs well with any food cart site.</p>
            </div>
            <div class="col span_4_of_12">
                <h3>Urban Coyote Project</h3>
                <img src="images/coyote.png" alt="placeholder image">
                <p>This is a mobile first project based on the presence of urban coyotes in Portland, OR. Chock-a-block with images and stats.</p>
            </div>
            <div class="col span_4_of_12">
                <h3>Ace in the Hole</h3>
                <img src="images/ace.png" alt="placeholder image">
                <p>Tagline: "MultiSports for Every Body." The Pacific Northwest's most inclusive and fun weekend event. Use the PHP form to register!</p>
            </div>
            <div class="col span_4_of_12">
                <h3>PCC: The Bridge</h3>
                <img src="images/bridge.png" alt="placeholder image">
                <p>The Bridge is Portland Community College's student newspaper. After a major retooling, their WordPress site is ready for prime time!</p>
            </div>
            <div class="col span_4_of_12">
                <h3>The Range Finder</h3>
                <img src="images/maynard.png" alt="placeholder image">
                <p>This is Craig Maynard Scott's photography portfolio. He's an amazingly creative musician, artist and all-around great guy. Check it out.</p>
            </div>
        </section>
        <!-- End work section in main content. -->

        <!-- About content section. -->
        <section class="about section group">
            <h2 id="about">About the Work:</h2>
            <div class="col span_1_of_12">
                <p>&nbsp;</p>
            </div>
            <div class="col span_7_of_12">
                <p>Hoodie fanny pack hella cold-pressed ugh wayfarers selfies. Elit beard food truck, fixie blog man braid polaroid shoreditch. Celiac echo park vaporware authentic dolore lo-fi scenester etsy bitters health goth laborum affogato kombucha shabby chic adaptogen. Gluten-free tacos health goth, ea before they sold out aliquip mustache cillum. Eu Portland pug yr excepteur four loko bitters aesthetic copper mug. Ut officia nulla, sed literally everyday carry direct trade 90's. Blog gochujang yuccie, raclette et bitters dolore hexagon irure dolore typewriter art party deserunt you probably haven't heard of them. Velit etsy voluptate, officia pork belly excepteur lo-fi bespoke flexitarian 3 wolf moon jianbing eiusmod cupidatat aliquip minim. Typewriter proident pinterest velit vape irure direct trade occupy XOXO farm-to-table keytar excepteur literally dolor. Etsy pok pok kickstarter, chambray bitters street art blue bottle put a bird on it hexagon meh trust fund.</p>
            </div>
            <div class="col span_3_of_12 hello">
                <img src="images/hello_world.png" style='border: none'>
            </div>
            <div class="col span_1_of_12">
                <p>&nbsp;</p>
            </div>
        </section>
        <!-- End of about section in main content. -->
        
        <!-- Process content section. -->
        <section class="process section group">
            <h2  id="process">The Mission &amp; The Process:</h2>
            <div class="col span_3_of_12" id="meet">
                <h3>Meet &amp; Discuss</h3>
                <ul>
                    <li>Just</li>
                    <li>Key</li>
                    <li>Bullet</li>
                    <li>Points</li>
                </ul>
            </div>
            <div class="col span_3_of_12" id="gather">
                <h3>Gather Assets</h3>
                <ul>
                    <li>Images</li>
                    <li>Logo</li>
                    <li>Content</li>
                    <li>Etc.</li>
                </ul>
            </div>
            <div class="col span_3_of_12" id="design">
                <h3>Design &amp; Test</h3>
                <ul>
                    <li>Template</li>
                    <li>Mobile 1st</li>
                    <li>X-Browser</li>
                    <li>Compliance</li>
                </ul>                
            </div>
            <div class="col span_3_of_12" id="deploy">
                <h3>...Deploy!</h3>
                <ul>
                    <li>Announce on</li>
                    <li>Social Media</li>
                    <li>Email to</li>
                    <li>Contacts</li>
                </ul>                
            </div>
        </section>

        <!-- Contact (PHP form) section. -->
        <section class="contact section group" id="contact">
                <h3>Contact Anchor Tag Design:</h3>
            <div class="col span_6_of_12">
                <!-- Contact form control page from its folder. -->
                <?php include 'contact/index.php'; ?>
            </div>
            <div class="col span_6_of_12">
                <h4>Thanks for taking the time to make contact.</h4>
                <p>Typewriter proident pinterest velit vape irure direct trade occupy XOXO farm-to-table keytar excepteur literally dolor. Etsy pok pok kickstarter, chambray bitters street art blue bottle put a bird on it hexagon meh trust fund. Tilde fixie iceland quinoa, irony asymmetrical chambray pabst before they sold out incididunt schlitz sed tacos raw denim succulents. Bitters PBR ipsum, asymmetrical crucifix et forage in. Thanks again!</p>
                <h4>Cheers, Mario</h4>
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