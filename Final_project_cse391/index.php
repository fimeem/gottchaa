<!DOCTYPE html>
<html lang="en">
<head>
	<title>gottchaa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styleIndex.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>





<body>
<!--First part start --> 
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand text-danger font-weight-bold" href="index.php">GOTtCHAa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<!--First part End -->







<!-- Login and Register-->
<br/>
<div id="logreg-forms">
    
    <form class="form-signin" action="index.php" method="POST">
        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">Log In</h1>
        <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" required>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
        
        <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i>Log In</button>
        <!-- <a href="#" id="forgot_pswd">Forgot password?</a> -->
        <hr>
        <!-- <p>Don't have an account!</p>  -->
        <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i>Register Now</button>
    </form>

            <!-- <form action="/reset/password/" method="POST" class="form-reset">
                <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
            </form> -->
            
    <form action="index.php" method="POST" class="form-signup">
                
        <!-- <p style="text-align:center">OR</p> -->

        <!-- <input type="text" id="user-name" class="form-control" placeholder="Full name" required="" autofocus=""> -->
        <input type="email" id="user-email" name="user-email" class="form-control" placeholder="Email address" required autofocus="">
        <input type="password" id="user-pass" name="user-pass" class="form-control" placeholder="Password" required autofocus="">
        <input type="password" id="user-repeatpass" name="user-repeatpass" class="form-control" placeholder="Repeat Password" required autofocus="">

        <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i>Log In</button>
        <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
    </form>
    <br>
</div>
<!-- Login and Register-->

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src = "scriptIndex.js" charset="utf-8"></script>
</body>

<?php
    session_start();
    include 'conn.php';
    if(isset($_POST['user-email'])) {
        if($_POST['user-pass'] == $_POST['user-repeatpass'])
        {
            $sql = "select * from users where email='".$_POST['user-email']."'";
            $result = $mysqli->query($sql);
            if (mysqli_num_rows($result)!=0) {
                header('Location: result.php?msg=User already exists!');
                exit();
            }
            else
            {
                $sql = "INSERT INTO users VALUES ('". $_POST['user-email']. "', '".sha1($_POST['user-pass'])."')";
                $result = $mysqli->query($sql);
                if(!$result){
                    header('Location: result.php?msg=Sign-Up Failed!');
                    exit();
                }
                else{
                    $_SESSION['is_login'] = true;
                    $_SESSION['email'] =  $_POST['user-email'];
                    header('Location: home.php');
                    exit();
                }
            }
        }
        else{
            header('Location: result.php?msg=Password does not match!');
            exit();
        }
    }
    else if(isset($_POST['inputEmail']))
    {
        $sql = "SELECT * FROM users WHERE email='".$_POST['inputEmail']."' and password='".sha1($_POST['inputPassword'])."'";
        $result = $mysqli->query($sql);

        if(is_object($result) && $row= $result->fetch_assoc()){
            $_SESSION['is_login'] = true;
            $_SESSION['email'] =  $_POST['inputEmail'];
            header('Location: home.php');
            exit();
        }
        else{
            header('Location: result.php?msg=Login Failed!');
            exit();
        }
    }
?>
</html>