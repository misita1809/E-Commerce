<?php
    //include 'includes/common.php';
    //if (isset($_SESSION['email'])) { header('location: products.php'); }
?>
<html>
    <head>
        <title>Automatic Irrigation System</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js" ></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js" ></script>
        <link rel="stylesheet" href="style.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    
    <?php
        include 'includes/header.php';
    ?>
    <div id="banner-image">
        <div class="container">
            <center>
                <div id="banner_content">
                    <h1>We nurture the nature.</h1>
                    <p>Premium solution for farm irrigation</p><br>
                    <a class="btn btn-danger btn-lg active" href="products.php">Dashboard</a>
                </div>
            </center>
        </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>
</body>
</html>
