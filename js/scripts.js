// jQuery hamburger menu control

jQuery(function ($) {
    $('.menu-btn').click(function () {
        $('.responsive-menu').toggleClass('expand');
    })
});


$(document).ready(function () {
    // Add smooth scrolling to all links
    $("a").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});

$(document).ready(function () {
    $('#hero_logo').hide();
    $('#hero_logo').fadeIn(6000);
});

$(document).ready(function () {
    $('#m_hero_logo').hide();
    $('#m_hero_logo').fadeIn(6000);
});