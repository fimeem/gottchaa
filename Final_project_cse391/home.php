<!DOCTYPE html>
<html lang="en">
<head>
	<title>gottchaa.home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styleHome.css">
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
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
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




<!--Add button for offer adding -->
<header id="header2" class="add_button">
	<div class="add_offer_button text-center" role="group" aria-label="Basic example">
		<a class="upload" href="upload.php"><button type="button" class="btn btn-danger btn-sm">Click here to add your OFFER</button></a>
 	</div>
</header><!-- /header -->
<!--Add button for offer adding -->



<!--top offer-->
<!-- <header class="top_offer text-dark font-weight-bold text-center">
	<h5>Top Offers</h5>
</header>
<div class="topOffers rounded mx-auto d-block">
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="rounded mx-auto d-block" src="..." alt="First Offer">
    </div>
    <div class="carousel-item">
      <img class="rounded mx-auto d-block" src="..." alt="Second Offer">
    </div>
    <div class="carousel-item">
      <img class="rounded mx-auto d-block" src="..." alt="Third Offer">
    </div>
  </div>
</div>
</div> -->
<!--top offer-->







<!--offers-->
<header id="header3" class="updated_offers text-dark font-weight-bold text-center">
	<h5>Available Offers</h5>
</header><!-- /header -->
<br/>
<div class="offers py-0">
        <div class="container">
          <div class="row">
          <?php
            session_start();
            include 'conn.php';
            date_default_timezone_set('Asia/Dhaka');
            $date = date('Y-m-d');
            
            $sql = "SELECT * FROM offers WHERE expire >= '".$date."'";
            $result = $mysqli->query($sql);
            while($row = mysqli_fetch_assoc($result))
            {
                $title = $row['title'];
                $restaurant = $row['restaurant'];
                $address = $row['address'];
                $desc = $row['description'];
                $expire = $row['expire'];
                echo 
                '<div class="col-md-4">
                <div class="card mb-4 box-shadow">
                <h2 style="padding:20px; background-color:RGB(59, 201, 219);">'.$title.'</h2>
                  <div class="card-body">
                    <p class="card-text" >'.$desc.'</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <p style="background-color:coral; border-radius: 5px; padding:5px; margin-right: 15px;">Restaurant Name: <br>'.$restaurant.'</p>
                        <p style="background-color:coral; border-radius: 5px; padding:5px; margin-right: 15px;">Address: '.$address.'</p>
                      </div>
                      <small class="text-muted">Expire: <br>'.$expire.'</small>
                    </div>
                  </div>
                </div>
              </div>';
            }
        ?>

            <!-- <div class="col-md-4">
              <div class="card mb-4 box-shadow"> -->
                <!-- <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap"> -->
                <!-- <h2 style="padding:20px;">This is bogo offer</h2>
                <div class="card-body">
                  <p class="card-text">Descriptions</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Facebook page</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Descriptions</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Facebook page</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Descriptions</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Facebook page</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Descriptions</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Facebook page</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Descriptions</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Facebook page</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Descriptions</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Facebook page</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Descriptions</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Facebook Page</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Descriptions</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Facebook Page</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Descriptions</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Facebook Page</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
<!--offers-->







	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>