<!DOCTYPE html>
<html lang="en">
<?php include('header.php') ?>

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#homePage">MacBernard Hotel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="index.php" >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#abouttUs">About Us</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Rooms <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#contactUs">Service</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <span class="social-links text-center">
          <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </span>
      </form>
    </div>
  </nav>
</header>
   

<div id="rooms" >
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img d-none d-sm-block" src="image/rm.jpg" alt="" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/>
      <img class="bd-placeholder-img d-xs-none" src="image/the.jpg" alt="" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>PRESIDENTIAL</h1>
            <p>
							These rooms are parlor & a bedroom, it comes with double bed.
							And equipped with TV, Couch, Reading Table, Water Heater, Refrigerator, 
							Air-Conditional, Wardrobe and Bath. 
						</p>
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-success">More Info &raquo;</button>
              <button type="button" class="btn btn-sm btn-outline-success">Book</button>
            </div>
          </div>
        </div>
      </div> 
      <div class="carousel-item">
        <img class="bd-placeholder-img d-none d-sm-block" src="image/img1.jpg" alt="" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/>
      <img class="bd-placeholder-img d-xs-none" src="image/vintry.jpg" alt="" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/>
        <div class="container">
          <div class="carousel-caption">
            <h1>ROYAL</h1>
            <p class="card-text">
							These are the most spacious single rooms, it comes with double bed.
							And equipped with TV, Couch, Reading Table, Water Heater, Refrigerator, 
							Air-Conditional, Wardrobe and Bath tub or Shower. 
						</p>
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-success">More Info &raquo;</button>
              <button type="button" class="btn btn-sm btn-outline-success">Book</button>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img d-none d-sm-block" src="image/img4.jpeg" alt="" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/>
      <img class="bd-placeholder-img d-xs-none" src="image/portrait.jpg" alt="" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/>
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>EXECUTIVE</h1>
            <p class="card-text">
							These are single rooms of a normal size, it comes with double bed.
							And equipped with TV, Reading Table, Water Heater, Small-Refrigerator, 
							Air-Conditional, Wardrobe and Shower. 
						</p>
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-success">More Info &raquo;</button>
              <button type="button" class="btn btn-sm btn-outline-success">Book</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="album py-5 m-0 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="card mb-4 shadow-sm">
          <img class="bd-placeholder-img card-img-top" src="image/rooms.jpg" alt="" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
            <div class="card-body">
              <h1 class="card-title">PRESIDENTIAL</h1>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-success">More Info</button>
                  <button type="button" class="btn btn-sm btn-outline-success">Book</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="card mb-4 shadow-sm">
          <img class="bd-placeholder-img card-img-top" src="image/room.jpg" alt="" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
            <div class="card-body">
              <h1 class="card-title">ROYAL</h1>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-success">More Info</button>
                  <button type="button" class="btn btn-sm btn-outline-success">Book</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="card mb-4 shadow-sm">
          <img class="bd-placeholder-img card-img-top" src="image/rooms.jpg" alt="" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
            <div class="card-body">
              <h1 class="card-title">EXECUTIVE</h1>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-success">More Info</button>
                  <button type="button" class="btn btn-sm btn-outline-success">Book</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
        </div>

       

  <?php include('footer.php') ?>
  </html>