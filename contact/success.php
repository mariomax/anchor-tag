<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact Success</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

    <!-- Google fonts. Headline then Body font. -->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">

    <!-- Stylesheets in the css folder. -->
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/helper.css" rel="stylesheet">
    <link href="../css/grid.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- Font Awesome! -->
    <script src="https://use.fontawesome.com/ef441b60f1.js"></script>
    
    <!-- Slim minified jQuery script. -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
        crossorigin="anonymous"></script>

</head>

<body>
        
        <!-- Just one nav include here - it's responsive. -->
        <?php include '../includes/form_nav.inc.php'; ?>
    
        <!-- Here are both headers with classes to respond to medis queries. --> 
        <div class="mobileHeader">
            <?php include '../includes/mobile_form_header.inc.php'; ?>
        </div>
        <div class="fullHeader">
            <?php include '../includes/form_header.inc.php'; ?>
        </div>
    
            <section>
                <h2>Success!</h2>
                <p>You successfully submitted your information to the Anchor Tag Design database. Thank you! We'll be in touch soon. Have a great day.</p>
                <p>Name: <?php echo htmlspecialchars($c_name, ENT_QUOTES, 'UTF-8'); ?>
                </p>
                <p>Email: <?php echo htmlspecialchars($c_email, ENT_QUOTES, 'UTF-8'); ?>
                </p>
                <p>Phone #: <?php echo htmlspecialchars($c_phone, ENT_QUOTES, 'UTF-8'); ?>
                </p>
                <p>Comment: <?php echo htmlspecialchars($comments, ENT_QUOTES, 'UTF-8'); ?>
                </p>
            </section>
    
        <?php include '../includes/footer.inc.php'; ?>

</body>

</html>