<?php


$isAdmin = false;

if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin')
{
	$isAdmin = true;
}

?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.php">Fifa Fan Club</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post.php">Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Register.php">Register</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="signin.php">Login</a>
            </li>
			<li class="nav-item">
				<a class="nav-link"><?php echo ($isAdmin==true)?"Admin is logged In":""; ?></a>
			</li>
			<li  class="nav-item">
			  	<a class="page-scroll" class="nav-link"  >
			
					<?php
					if (isset($_SESSION['id'])){
						echo "<form action='logout.php' >
						<button type=submit class='btn btn-primary'> LOG OUT </button>
							</form>";
         
												}
						else {
						echo "You have not logged in";

								}
					?> 
	</a>
	</li>	
	
          </ul>
        </div>
      </div>
    </nav>