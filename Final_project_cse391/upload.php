<!DOCTYPE html>
<html lang="en">
<head>
	<title>gottchaa.home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="upload.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>







<body>

<!--First part start -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand text-danger font-weight-bold" href="home.php">GOTtCHAa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
    </form> -->
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Settings
        </a>
        <div class="dropdown-menu" aria-labelledby="Settings">
          <a class="dropdown-item" href="about.php">About us</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php"> Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--First part End -->






<!--Instractions -->
<header id="header2" class="instractions">
  <h5 class="text-danger text-center">Instractions</h5>
</header><!-- /header -->
<div class="instractions-text">
  <h6 class="text-link text-center">Please fill up the form to submit the offer</h6> 
  <p class="text-link text-center">Follow the inline instructions for filling up the form before publishing</p>
</div>
<!--Instractions -->





<!-- Main area for uploading offer-->
<div class="upload-offers">  
  </div>
    <form action="upload.php" method="POST">
        <div class="form-group">
            <label for="input1">Offer Title</label>
            <input class="form-control1" name="title" required placeholder="">
        </div>
        <div class="form-group">
            <label for="input2">Restaurant's Name</label>
            <input class="form-control2" name="restaurant" required placeholder="">
        </div>
        <div class="form-group">
            <label for="inputAddress col-md-5">Address</label>
            <input type="text" class="form-control" name="address" required placeholder="1234 Main St">
        </div>
        <!-- <div class="form-row">
            <div class="form-group col-md-3">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-3">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
            </div>
            <div class="form-group col-md-3">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
            </div>
        </div> -->
        <div class="form-group">
            <label for="input4 col-md-5">Description</label>
            <textarea class="form-control" name="description" required rows="3"></textarea>
        </div>
        <!-- <div class="file-field">
            <a class="btn-floating peach-gradient mt-0 float-left">
            <i class="fas fa-paperclip" aria-hidden="true"></i>
            <input type="file">
            </a>
        </div> -->
        <div class="form-group">
            <label for="input1">Valid Until </label>
            <input class="form-control4" name="expire" type="date" required placeholder="">
        </div>
        <!-- <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
            </div>
        </div> -->
        <button type="submit" name="submit" class="btn btn-primary">Upload</button>
  </form>
</div>
<br/>
<!-- Main area for uploading offer-->











	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
<?php
    session_start();
    include 'conn.php';
    if(isset($_POST["submit"])) {
        if(!empty($_POST['title']) && !empty($_POST['address']))
        {
            $sql = "INSERT INTO offers VALUES ('". $_POST['title']."', '".$_POST['restaurant']."', '".$_POST['address']."', '".$_POST['description']."', '".$_POST['expire']."', '".$_SESSION['email']."')";
            $result = $mysqli->query($sql);
            header('Location: home.php');
        }
    }
?>
</html>