<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Error Page</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

    <!-- Google fonts. Headline then Body font. -->
    <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet">

    <!-- Stylesheets in the css folder. -->
    <link href="/ace/css/reset.css" rel="stylesheet">
    <link href="/ace/css/helper.css" rel="stylesheet">
    <link href="/ace/css/grid.css" rel="stylesheet">
    <link href="/ace/css/style.css" rel="stylesheet">

    <!-- Font Awesome! -->
    <script src="https://use.fontawesome.com/ef441b60f1.js"></script>

    <!-- Include the 32 x 32 px favicon for the browser tab. -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- jQuery library script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>

    <main>
        <?php include ('includes/form_nav.inc.html.php'); ?>
        <?php include ('includes/404_header.inc.html.php'); ?>
        <section>
            <h5>Whoops! There was some sort of error and now you're here.</h5>
            <h5>Don't worry - just use the navigation to go back to our site.</h5>
        </section>
        <?php include ('includes/footer.inc.html.php'); ?>
    </main>

</body>

</html>