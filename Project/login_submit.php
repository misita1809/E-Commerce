<?php
    include 'includes/common.php';

    $email = mysqli_real_escape_string($con,$_POST['email']);
    $p = mysqli_real_escape_string($con,$_POST['pass']);
    
    $pass = md5($p);
    $query = "SELECT id, email, password FROM users WHERE email='$email'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
        
    if(mysqli_num_rows($result)==0)
    {
        $_SESSION['error1'] = array("Invalid email. Enter valid email to log in.");
        header('location: login.php');
       
    }
    else {
        $row = mysqli_fetch_array($result);
        if($pass==$row['password'])
        {
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $row['id'];
            header('location: products.php');
        }
        else {
            $_SESSION['error2'] = array("Invalid Password.");
            header('location: login.php');
        }
    }