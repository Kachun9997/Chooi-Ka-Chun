<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<body>
  <?php
  include('Header.php');
  ?>
  
  <title>Home</title>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>FIFA</h1>
              <span class="subheading"></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="about.php">
              <h2 class="post-title">
                Our strategy
              </h2>
              <h3 class="post-subtitle">
                Using a number of guiding principles but also concrete and measurable objectives, FIFA’s new vision as stated in FIFA 2.0 is to promote the game of football, protect its integrity and bring the game to all.
              </h3>
            </a>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.php">
              <h2 class="post-title">
                Popular Item
              </h2>
			  <header class="masthead" style="background-image: url('img/Fifa18.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <span class="subheading"></span>
            </div>
          </div>
        </div>
      </div>
    </header>
	<h1>Click for more details</h1>
            </a>
          </div>
          <hr>
          <div class="post-preview">
            <a href="contact.php">
              <h2 class="post-title">
                Register now !
              </h2>
              <h3 class="post-subtitle">
                Register now for free ultimate pack and voucher.
              </h3>
            </a>
          </div>
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>

    <hr>
<?php
include('Footer.php');
?>
  
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
