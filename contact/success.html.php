<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact Success</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

    <!-- Google fonts. Headline then Body font. -->
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">

    <!-- Stylesheets in the css folder. -->
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/helper.css" rel="stylesheet">
    <link href="../css/grid.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- Font Awesome! -->
    <script src="https://use.fontawesome.com/ef441b60f1.js"></script>

</head>

<body>

    <main>

        <?php include ('../includes/form_nav.inc.html.php'); ?>
        <?php include ('../includes/form_header.inc.html.php'); ?>

            <section>
                <h2>Success!</h2>
                <p>You successfully submitted your information to the Anchor Tag Design database. Thank you!</p>
                <p>Name: <?php echo htmlspecialchars($c_name, ENT_QUOTES, 'UTF-8'); ?>
                </p>
                <p>Email: <?php echo htmlspecialchars($c_email, ENT_QUOTES, 'UTF-8'); ?>
                </p>
                <p>Phone #: <?php echo htmlspecialchars($c_phone, ENT_QUOTES, 'UTF-8'); ?>
                </p>
                <p>Comment: <?php echo htmlspecialchars($comments, ENT_QUOTES, 'UTF-8'); ?>
                </p>
            </section>
        <?php include ('../includes/footer.inc.html.php'); ?><!-- These parens aren't really needed. -->
    </main>

</body>

</html>