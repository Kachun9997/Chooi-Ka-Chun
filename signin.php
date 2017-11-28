<?php 
session_start();
?>

<title>Login</title>
<!DOCTYPE html>
<html lang="en">

<body>
  <?php
  include('Header.php');
  ?>

<header class="masthead" style="background-image: url('img/loginbc.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Login</h1>
              <span class="subheading"></span>
            </div>
          </div>
        </div>
      </div>
    </header>

   
    <section id="login" class="content-section text-center">
             <div class="container">
               <br><h1 align="center"> 
			  </h1><br> <h3> <?php 
				$url = "htttp://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
				
				if (strpos($url, 'error=uidpass') !== false) {
					echo "Your username or password is incorrect!";
				}
				
			   else if(!isset($_SESSION['username'])  || empty($_SESSION['username'])) {
					echo 'Welcome Guest.';
						} else {
					echo 'Welcome ' . $_SESSION['username'];
								}; 
			 ?></h3>
       
</br>
</br>
      
<form class="form-horizontal" action="login.php" method="POST">
    <div class="form-group">
    <label class="col-xs-2 control-label" for="inputSuccess" >Username</label>
                <div class="col-xs-10">
                    <input type="text"  class="" name="username" placeholder="Username" />
                    
                    
                </div>
</div>
    
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Password</label>
         <div class="col-xs-10">
        <input type="password" class="" id="inputPassword" placeholder="Password" name="password" >
       
         </div>
    </div>
	
    
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-2">
         <div class="checkbox">
             <label><input type="checkbox"> Remember Me </label>
         </div>
    </div>
    </div>
     <div class="form-group">
        <div class="col-xs-offset-2 col-xs-2">
            <button type="submit" class="btn btn-primary">Login</button>
			
        </div>
         </div>
		 
</form>   

      
	  </div>
	
        
</section>

    

     <!-- Footer -->
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
