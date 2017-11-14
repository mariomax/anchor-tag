<nav>

    <!-- This is the hamburger part of the menu. -->
    <div class="mobile-nav">
        <div class="menu-btn" id="menu-btn">
            <div></div>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Responsive dropdown menu on mobile only. -->
        <div class="responsive-menu">
            <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../index.php#about">About</a></li>
            <li><a href="../index.php#process">Process</a></li>
            <li><a href="../index.php#contact">Contact</a></li>
            <li><a href="../index.php#galleries">Galleries</a></li>
            </ul>
        </div>
    </div>

    <!-- Navigation for tablet and desktop sizes. -->
    <section class="nav section group">
        <div class="col span_2_of_12 tablet-desk-menu">
            <a href="../index.php"><img src="../images/atd_navicon.png" alt="Anchor Tag Design logo" style="border:none;"></a>
        </div>
        <div class="col span_10_of_12 tablet-desk-menu">
            <ul>
                <li><a href="../index.php#work">Work</a></li>
                <li><a href="../index.php#about">About</a></li>
                <li><a href="../index.php#process">Process</a></li>
                <li><a href="../index.php#contact">Contact</a></li>
                <li><a href="../index.php#galleries">Galleries</a></li>
            </ul>
        </div>
    </section>

</nav>
<!-- jQuery hamburger menu control. -->
<!-- This version closes with a click. -->
<script type="text/javascript">
    jQuery(function($) {
        $('.menu-btn').click(function() {
            $('.responsive-menu').toggleClass('expand')
        })
    })
</script>