<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1" />
    <meta name="description" content="Ace in the Hole MultiSport Events. Inclusive, safe, and fun triathalons." />
    <title>Ace in the Hole MultiSport Events</title>

    <!-- Google fonts. Headline then Body font. -->
    <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet">

    <!-- Stylesheets in the css folder. -->
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Font Awesome! -->
    <script src="https://use.fontawesome.com/ef441b60f1.js"></script>

    <!-- Include the 64 x 64 px favicon for the browser tab. -->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

    <!-- jQuery library script. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Weather API script. -->
    <script src="https://s3-us-west-2.amazonaws.com/reallysimpleweather/reallysimpleweather-1.1.0.min.js"></script>
</head>

<body>
    <!-- Script for the Facebook feed. -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=169435913604040";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Navigation from the includes folder. -->
    <?php include 'includes/nav.inc.html.php'; ?>

    <!-- Mobile header from the includes folder. Just the logo with a hidded h1 for SEO. -->
    <div class="mobileHeader">
        <?php include 'includes/mobile_header.inc.html.php'; ?>
    </div>

    <!-- Header from the includes folder. -->
    <?php include 'includes/header.inc.html.php'; ?>

    <main>
        <!-- Main content section. -->
        <section class="main section group">

            <!-- JavaScript slideshow for mobile & tablet. -->
            <div class="slideshow-container mobileSlider">
                <div class="mySlides fade">
                    <img src="images/ace_slide1.750.png" alt="group run" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="images/ace_slide2.750.png" alt="running legs" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="images/ace_slide4.750.png" alt="start of swimming race" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="images/ace_slide5.750.png" alt="group bike race" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="images/ace_slide6.750.png" alt="solo running" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="images/ace_slide3.750.png" alt="solo running" style="width:100%">
                </div>

            </div>

            <div class="col span_9_of_12">
                <!-- JavaScript slideshow for desktop. -->
                <div class="slideshow-container deskSlider">
                    <?php include 'includes/other_sliders.inc.html.php'; ?>
                </div>


                <h3 id="about">ABOUT THE EVENT</h3>

                <p>The Annual Ace in the Hole MultiSport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.</p>

                <p>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>

                <h4>WHAT TO BRING</h4>
                <p>Watch the weather closely. The show goes on no matter what the weather is doing.</p>
                <p>You must wear your chip timing piece during the entire event. You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.</p>

                <h4>SWIM:</h4>
                <p>Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries. We will provide you with a swim cap but you will want to bring your own goggles.</p>

                <h4>BIKE:</h4>
                <p>A biking helmet is mandatory. You will also receive 2 stickers in your package with your race number on them. The small sticker should go on the front of your helmet. The bigger sticker will wrap around your bike frame. Road or mountain bikes are acceptable. For safety reasons, be sure to have end-caps on the end of your handle-bars.</p>

                <h4>RUN:</h4>
                <p>You must finish the race with your bib number on the front of you. Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don’t have to worry about it. Others pin it on a singlet that they put on once they finish the swim before they head out for the bike. Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run. Use whatever option feels best for you.</p>
                <p>Remember to bring a change of clothing so you can enjoy the post-event festivities. </p>

                <h3 id="courses">COURSE DETAILS:</h3>

                <p>WATER TEMPERATURE is expected to be between 62 – 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.</p>

                <h4 class="days">SATURDAY EVENTS:</h4>
                <section class="section group">
                    <div class="col span_5_of_12">
                        <h4>Long Course SWIM:</h4>
                        <h6>1.2 Miles</h6>
                        <h6>1.9 Kilometers</h6>
                        <h6>Starts at 7:00am</h6>
                    </div>
                    <div class="col span_7_of_12">
                        <p>Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>
                    </div>
                </section>
                <section class="section group">
                    <div class="col span_5_of_12">
                        <h4>Long Course BIKE:</h4>
                        <h6>58 Miles</h6>
                        <h6>93.3 Kilometers</h6>
                        <h6>Follows the Swim Event</h6>
                    </div>
                    <div class="col span_7_of_12">
                        <p>A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you. </p>
                    </div>
                </section>
                <section class="section group">
                    <div class="col span_5_of_12">
                        <h4>Long Course RUN:</h4>
                        <h6>13.1 Miles</h6>
                        <h6>21 Kilometers</h6>
                        <h6>Follows the Bike Event</h6>
                    </div>
                    <div class="col span_7_of_12">
                        <p>A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</p>
                    </div>
                </section>
                <section class="section group">
                    <div class="col span_5_of_12">
                        <h4>OLYMPIC SWIM:</h4>
                        <h6>1640 Yards</h6>
                        <h6>1,500 Meters</h6>
                        <h6>Starts at 7:30am</h6>
                    </div>
                    <div class="col span_7_of_12">
                        <p>Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>
                    </div>
                </section>
                <section class="section group">
                    <div class="col span_5_of_12">
                        <h4>OLYMPIC BIKE:</h4>
                        <h6>28 Miles</h6>
                        <h6>45 Kilometers</h6>
                        <h6>Follows the Swim Event</h6>
                    </div>
                    <div class="col span_7_of_12">
                        <p>A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections. </p>
                    </div>
                </section>
                <section class="section group">
                    <div class="col span_5_of_12">
                        <h4>OLYMPIC RUN:</h4>
                        <h6>6.2 Miles</h6>
                        <h6>10 Kilometers</h6>
                        <h6>Follows the Bike Event</h6>
                    </div>
                    <div class="col span_7_of_12">
                        <p>A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).</p>
                    </div>
                </section>
                <section class="section group">
                    <div class="col span_5_of_12">
                        <h4>10k COURSE:</h4>
                        <h6>6.2 Miles</h6>
                        <h6>10 Kilometers</h6>
                        <h6>Starts at 7:15am</h6>
                    </div>
                    <div class="col span_7_of_12">
                        <p>The 10K event starts and finishes in the Athletes Village. The paths are approximately 6-ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.</p>
                    </div>
                </section>
                <section class="section group">
                    <div class="col span_5_of_12">
                        <h4>Half Marathon COURSE:</h4>
                        <h6>13.1 Miles</h6>
                        <h6>21 Kilometers</h6>
                        <h6>Starts at 7:15am</h6>
                    </div>
                    <div class="col span_7_of_12">
                        <p>Half-Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports &amp; Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified</p>
                    </div>
                </section>

                <h4 class="days">SUNDAY EVENTS:</h4>

                <section class="section group">
                    <div class="col span_5_of_12">
                        <h4>Sprint:</h4>
                        <h6>Starts at 8:00am</h6>
                    </div>
                    <div class="col span_7_of_12">
                        <p>Course will offer a 1-loop 1/2 Mile (.8 Kilommeter) Swim, the exact same 28 Mile (45 Kilometer) Bike Course as the Olympic distance and a 5 Kilometer (3.1 Mile) Run.</p>
                    </div>
                </section>
                <section class="section group">
                    <div class="col span_5_of_12">
                        <h4>Try-A-Tri:</h4>
                        <h6>Starts at 8:20am</h6>
                    </div>
                    <div class="col span_7_of_12">
                        <p>This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The Swim is a shorter, more manageable 1/4 Mile (.4 Kilometer) distance, (instead of the standard 1/2-mile Sprint distance Swim), a 10 Mile (16.1 Kilometer) Bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 Mile (3.2 Kilometer) Run (vs the 3 Mile Sprint course).</p>
                    </div>
                </section>
                <section class="section group">
                    <div class="col span_5_of_12">
                        <h4>Splash n Dash:</h4>
                        <h6>Starts at 12:00pm</h6>
                    </div>
                    <div class="col span_7_of_12">
                        <p>This is a Swim and Run event for the younger triathletes. Splash n Dash is a 25 Meter (27.3 Yard) Swim followed by a 100 Yard (91.4 Meter) Dash. It's designed for younger athletes ages 4 to 12.</p>
                    </div>
                </section>

            </div>
            <!-- End of top section of main content. -->

            <!-- Weather API and social media feeds section for desktop only. -->
            <div class="col span_3_of_12">
                <?php include 'includes/feeds_desktop.inc.html.php'; ?>
            </div>
            <!-- End 3 of 12 aside for weather & social media in desktop only. -->

            <!-- Weather API and social media feeds section for tablet only. -->
            <div class="col span_3_of_12">
                <?php include 'includes/feeds_tablet.inc.html.php'; ?>
            </div>
            <!-- End 3 of 12 aside for weather & social media in desktop only. -->

        </section>
        <!-- End 9 of 12 for top section of main content. -->

        <!-- This is the lower half of the main content. It starts after the aside is done. -->
        <section class="section group">
            <div class="col span_6_of_12">
                <h3 id="register">REGISTRATION</h3>

                <!-- Registration form control page from its folder.  -->
                <?php include 'register/index.php'; ?>
            </div>
            <div class="col span_6_of_12">
                <h3>COST INCLUDES</h3>

                <ul>
                    <li>Food &amp; Beer</li>
                    <li>Access to the weekend’s live entertainment &amp; Fitness Expo</li>
                    <li>Commemorative Finisher medal</li>
                    <li>Accurate Chip Timing for competitive races</li>
                    <li>Ace in the Hole MultiSport Weekend Tech Shirt</li>
                    <li>Post-event party &amp; entertainment</li>
                </ul>

                <p>NOTE: Tech shirts guaranteed to pre-registered participants only.</p>
                <h3>PACKET PICK UP</h3>

                <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.</p>
            </div>
        </section>
        <!-- End of registration section in lower half of main content. -->

        <!-- FAQ section. -->
        <section class="section group">
            <div class="col span_12_of_12">
                <h3 id="FAQs">FAQs</h3>
                <p><span class="faq">What are the Rules?</span>We currently adhere to the USAT Rules for Triathlon & Duathlon. Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.</p>

                <p><span class="faq">Can I use a personal music device while cycling?</span>Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</p>

                <p><span class="faq">Can I use a personal music device while running?</span>During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.</p>
                <p>If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice…music or awards/points/rankings.</p>
                <p>If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don’t want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.</p>
                <p>We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</p>

                <p><span class="faq">Do I need to wear a wetsuit?</span>No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor. </p>

                <p><span class="faq">Do I have to use a road or racing bike?</span>No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</p>
            </div>
        </section>
        <!-- End of FAQ section. -->

        <!-- Contact section. -->
        <section class="section group">
            <div class="col span_6_of_12">
                <h3 id="contact">CONTACT</h3>

                <!-- Contact form control page from its folder. -->
                <?php include 'contact/index.php'; ?>
            </div>
            <div class="col span_6_of_12">
                <img src="images/ace_bike_finish.png" alt="cyclist at the finish line" class="finish">
            </div>
        </section>

        <!-- Weather API and social media feeds section in mobile view only. -->
        <aside class="mobileAside">
            <div id="weather-mobile" class="weather"></div>
            <script>
                reallySimpleWeather.weather({
                    wunderkey: '1a4236851c0b601c', //add your key
                    location: 'Portland, OR',
                    woeid: '',
                    unit: 'f',
                    success: function(weather) {
                        html = '<p>' + weather.full + '</p>';
                        html += '<h2>' + weather.temp + '°' + 'F</h2>';
                        html += '<p>' + weather.currently + '</p>';
                        html += '<p>' + weather.wind.direction + ' ' + weather.wind.speed + ' mph</p>';
                        document.getElementById('weather-mobile').innerHTML = html;
                    },
                    error: function(error) {
                        document.getElementById('weather-mobile').innerHTML = '<p>' + error + '</p>';
                    }
                });
                
            </script>
            <a class="twitter-timeline" href="https://twitter.com/pcccas222" data-height="500">Tweets by pcccas222</a>
            <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            <div class="fb-page" data-href="https://www.facebook.com/cas222cascade/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-height="500">
                <blockquote cite="https://www.facebook.com/cas222cascade/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cas222cascade/">CAS 222</a></blockquote>
            </div>
        </aside>
        <!-- End aside for weather & social media in mobile only. -->

        <!-- Footer from the includes folder. -->
        <?php include 'includes/footer.inc.html.php'; ?>
    </main>
    <!-- jQuery hamburger menu control -->
    <!-- This version doesn't close with a click. -->
    <!--
            <script type="text/javascript">
                jQuery(function ($) {
                    $('.menu-btn').click(function () {
                        $('.responsive-menu').addClass('expand')
                        $('.menu-btn').addClass('btn-none')
                    })
                    $('.close-btn').click(function () {
                        $('.responsive-menu').removeClass('expand')
                        $('.menu-btn').removeClass('btn-none')
                    })
                })
            </script>
            -->

    <!-- jQuery hamburger menu control -->
    <!-- This version closes with a click. -->
    <script type="text/javascript">
        jQuery(function($) {
            $('.menu-btn').click(function() {
                $('.responsive-menu').toggleClass('expand')
            })
        })
    </script>

    <!-- Slider script(S!) from w3schools.com -->
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 5000); // Change image every 5 seconds
        }
    </script>
    <script>
        var bigSlideIndex = 0;
        showOtherSlides();

        function showOtherSlides() {
            var j;
            var bigSlides = document.getElementsByClassName("myOtherSlides");
            for (j = 0; j < bigSlides.length; j++) {
                bigSlides[j].style.display = "none";
            }
            bigSlideIndex++;
            if (bigSlideIndex > bigSlides.length) {
                bigSlideIndex = 1
            }
            bigSlides[bigSlideIndex - 1].style.display = "block";
            setTimeout(showOtherSlides, 6000); // Change image every 6 seconds
        }
    </script>
</body>

</html>