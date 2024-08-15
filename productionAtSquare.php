<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("location:login.php");
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>productionAtSquare</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="css1/style.css">
</head>

<body style="background-color: #FDFDFD;">
  <?php include 'menu.php'; ?>
  <!-- images -->
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/italy.webp" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Italy</h3>
          <p>Where Romance Meets History</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/japan.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Japan</h3>
          <p>Culture, Cuisine, and Contrasts</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/france.jpeg" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
          <h3>France</h3>
          <p>A Feast for the Senses</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <!-- about us  -->

  <section class="my-5" id="section-3">
    <div>
      <h2 class="text-center">Know more about us!</h2>
    </div>
  </section>
  <!-- first grid and info  -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 md-6 col-12">
        <img src="images/office.jpg" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-6 md-6 col-12 pr-5">
        <h2 class="display-5 pt-3">@productionAtSquare</h2>
        <p class="py-4">Welcome to <b>productionAtSquare!</b> We are passionate about connecting travelers with
          unforgettable experiences around the globe. Whether you seek breathtaking adventures, cultural immersion, or
          relaxing getaways, our platform offers a curated selection of destinations and activities tailored to every
          wanderlust. Our team of travel enthusiasts is dedicated to providing seamless booking services, personalized
          recommendations, and expert insights to make your journey extraordinary. Embark on your next adventure with
          confidence and discover the world through our lens of exploration. Let us be your trusted companion in
          crafting memorable travel experiences that leave a lasting impression.</p>
        <a href="productionAtSquare.php" class="btn btn-success pt-2 mt-3">Check More Here!</a>
      </div>
    </div>
  </div>
  <!-- services  -->
  <section class="my-5" id="section-1">
    <div class="py-3">
      <h2 class="text-center section-heading">Services</h2>
    </div>

    <div class="container-fluid">
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="images/card1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">"Affordable Adventures" (@9999/- only)</h5>
            <p class="card-text">Experience the thrill of travel without breaking the bank with our Budget-Friendly
              Escape package! Discover exciting destinations and enjoy memorable experiences at a wallet-friendly price.
              Explore charming cities, unwind on picturesque beaches, and immerse yourself in local culture without
              compromising on quality. This package is perfect for budget-conscious travelers seeking great value and
              memorable adventures.</p>
          </div>

        </div>
        <div class="card">
          <img class="card-img-top" src="images/card2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">"Explore and Indulge" (@39999/- only)</h5>
            <p class="card-text">Indulge in a blend of adventure and relaxation with our Mid-Range Discovery package!
              Dive into diverse experiences and uncover the essence of your chosen destination. Stay in stylish
              accommodations, embark on guided excursions, and savor delectable cuisine along the way. This package is
              ideal for travelers seeking a balance of quality experiences and affordability.</p>
          </div>

        </div>
        <div class="card">
          <img class="card-img-top" src="images/card3.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">"Opulent Escapes" (@89999/- only)</h5>
            <p class="card-text">Indulge in the ultimate luxury getaway with our Opulent Escapes package! Treat yourself
              to unparalleled comfort, personalized service, and exclusive experiences in breathtaking locations. Stay
              in luxury resorts, embark on private tours, and enjoy VIP treatment throughout your journey. This package
              is designed for discerning travelers seeking the finest accommodations and bespoke experiences.</p>
          </div>

        </div>
      </div>
    </div>


    <!-- gallery -->
    <section class="my-5">
      <div class="py-3">
        <h2 class="text-center section-heading">Gallery</h2>
      </div>




      <div class="fluid-container">
        <div>
          <img
            src="https://images.pexels.com/photos/3586966/pexels-photo-3586966.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            alt="Image 1" class="img1">
        </div>
        <div>
          <img
            src="https://images.pexels.com/photos/2419375/pexels-photo-2419375.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
            alt="Image 2" class="img1">
        </div>
        <div>
          <img
            src="https://images.pexels.com/photos/2326290/pexels-photo-2326290.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
            alt="Image 3" class="img1">
        </div>
        <div>
          <img
            src="https://images.pexels.com/photos/3251006/pexels-photo-3251006.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
            alt="Image 4" class="img1">
        </div>
        <div>
          <img
            src="https://images.pexels.com/photos/1980720/pexels-photo-1980720.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
            alt="Image 5" class="img1">
        </div>
        <div>
          <img
            src="https://images.pexels.com/photos/3546429/pexels-photo-3546429.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
            alt="Image 6 " class="img1">
        </div>
        <div>
          <img
            src="https://images.pexels.com/photos/3889868/pexels-photo-3889868.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
            alt="Image 7" class="img1">
        </div>
        <div>
          <img
            src="https://images.pexels.com/photos/2091160/pexels-photo-2091160.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            alt="Image 8" class="img1">
        </div>
        <div>
          <img
            src="https://images.pexels.com/photos/2019546/pexels-photo-2019546.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            alt="Image 9" class="img1">
        </div>
        <div>
          <img
            src="https://images.pexels.com/photos/3889868/pexels-photo-3889868.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
            alt="Image 10" class="img1">
        </div>
        <div>
          <img
            src="https://images.pexels.com/photos/2360569/pexels-photo-2360569.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
            alt="Image 11" class="img1">
        </div>
        <div>
          <img
            src="https://images.pexels.com/photos/3779785/pexels-photo-3779785.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
            alt="Image 12" class="img1">
        </div>
        <div>
          <img
            src="https://images.pexels.com/photos/259987/pexels-photo-259987.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
            alt="Image 13" class="img1">
        </div>
        <div>
          <img
            src="https://images.pexels.com/photos/2350514/pexels-photo-2350514.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
            alt="Image 14" class="img1">
        </div>
      </div>


      <!-- form  -->

      <section class="my-2 mb-5">
        <div class="pb-2">
          <h2 class="text-center section-heading">Contact us here!</h2>
        </div>
        <div class="w-50 m-auto">
          <form action="userinfo.php" method="post" id="section-2">
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="user" class="form-control" auto-complete="off">
            </div>
            <div class="form-group">
              <label>E-mail ID</label>
              <input type="text" name="email" class="form-control" auto-complete="off">
            </div>
            <div class="form-group">
              <label>Mobile No.</label>
              <input type="text" name="mobile" class="form-control" auto-complete="off">
            </div>
            <div class="form-group">
              <label>Query</label>
              <textarea class="form-control" auto-complete="off" name="comments">
        </textarea>
            </div>
            <button type="submit" class="btn btn-success my-4 pb-1 mb-5">Submit</button>
          </form>
        </div>
      </section>



      <?php include 'foot.php' ?>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>