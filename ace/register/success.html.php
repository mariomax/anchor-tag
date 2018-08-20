<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Registration Success</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

    <!-- Google fonts. Headline then Body font. -->
    <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet">

    <!-- Stylesheets in the css folder. -->
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/helper.css" rel="stylesheet">
    <link href="../css/grid.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- Font Awesome! -->
    <script src="https://use.fontawesome.com/ef441b60f1.js"></script>

    <!-- Include the 64 x 64 px favicon for the browser tab. -->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

    <!-- jQuery library script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>

    <main>
        <?php include ('../includes/form_nav.inc.html.php'); ?>
        <?php include ('../includes/form_header.inc.html.php'); ?>
            <section>
                <h2>Success!</h2>
                <p>You successfully submitted your information to the Ace in the Hole database. Thank you!</p>
                <p>Saturday Event:
                    <?php echo htmlspecialchars($event, ENT_QUOTES, 'UTF-8'); ?>
                </p>
                <p>Sunday Event:
                    <?php echo htmlspecialchars($sunevent, ENT_QUOTES, 'UTF-8'); ?>
                </p>
                <p>Name:
                    <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>
                </p>
                <p>Email:
                    <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>
                </p>
                <p>Phone #:
                    <?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?>
                </p>
                <p>The waiver:
                    <?php echo htmlspecialchars($waiver, ENT_QUOTES, 'UFT-8'); ?>
                </p>
            </section>
        <?php include ('../includes/footer.inc.html.php'); ?>
    </main>

</body>

</html>