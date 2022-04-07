<?php
    include 'includes/common.php';
    if (isset($_SESSION['email'])) { header('location: products.php'); }
?>

<html>
    <head>
        <title>Login | Automatic Irrigation System</title>
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
        <div class="container content">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4" style='padding-top: 100px'>
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center><b>LOGIN</b></center></div>
                        <div class="panel-body">
                            <p class="text-warning">Login to control your system</p>
                            <form method="post" action="login_submit.php">
                                <div class="form-group">
                                    <label for="email1">Email</label>
                                    <input type="email" class="form-control" name="email" id="email1" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    <?php if (isset($_SESSION['error1'])){ ?>
                                    <div class="alert alert-danger">
                                        <?php foreach($_SESSION['error1'] as $error){ ?>
                                            <p><?php echo $error ?></p>
                                        <?php } ?>
                                    </div>
                                    <?php unset($_SESSION['error1']); } ?>
                                </div>
                                
                                <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
                                    <?php if (isset($_SESSION['error2'])){ ?>
                                    <div class="alert alert-danger">
                                        <?php foreach($_SESSION['error2'] as $error){ ?>
                                            <p><?php echo $error ?></p>
                                        <?php } ?>
                                    </div>
                                    <?php unset($_SESSION['error2']); } ?>
                                </div>
                                
                                <input type="submit" value="LOGIN" class="btn btn-primary btn-block">
                            </form>
                        </div>
                        <div class="panel-footer">Don't have an account?<a href="signup.php" style='text-decoration: none'> Register</a></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
