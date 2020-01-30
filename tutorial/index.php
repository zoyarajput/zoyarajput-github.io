<!DOCTYPE html>
<html>
<head>
	<title>Red Stone Shop</title>
	<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
  
  </style>
	</head>
	<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Zoya Technical</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service.php">Service</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      
     
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/a.jpg" alt="Los Angeles" width="1500" height="400">
    </div>
    <div class="carousel-item">
      <img src="images/w.jpg" alt="Chicago" width="1500" height="400">
    </div>
    <div class="carousel-item">
      <img src="images/q.jpeg" alt="New York" width="1500" height="400">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
	<div><h2 class="text-center" >About Us</h2>
	</div></div>
	<div class="container-fluid">
	<div class="row" >
  <div class="col-sm-6" > <img src="images/e.jpg" alt="New York" width="580" height="100" class="img-fluid image"></div>
  <div class="col-sm-6" ><h4 class="display-4"><b> I Am Web Developer</b></h4>
<p class="py-5">The carousel is a slideshow for cycling through a series of content, built with CSS 3D transforms and a bit of JavaScript. It works with a series of images, text, or custom markup. It also includes support for previous/next controls and indicators.

In browsers where the Page Visibility API is supported, the carousel will avoid sliding when the webpage is not visible to the user (such as when the browser tab is inactive, the browser window is minimized, etc.).
</p>
<a href="about.php" class="btn btn-success">Success</a>
   </div>
</div>
</div>
</section>
<section class="my-5">
	<div class="py-5">
	<div><h2 class="text-center" >Gallery</h2>
	</div></div>
	<div class="container-fluid">
		<div class="row">
  <div class="col-sm-3"><img src="images/e.jpg" alt="Cinque Terre"  width="300" height="200"></div>
  <div class="col-sm-3"><img src="images/e.jpg" alt="Cinque Terre"  width="300" height="200"></div>
  <div class="col-sm-3"><img src="images/e.jpg" alt="Cinque Terre"  width="300" height="200"></div>
<div class="col-sm-3"><img src="images/e.jpg" alt="Cinque Terre"  width="300" height="200"></div>

</div>




</section>


<section class="my-5">
	<div class="py-5">
	<div><h2 class="text-center" >Contact Us</h2>
	</div></div>

	<div class="container-fluid">
		<form action="userinfo.php" method="post">
			<div class="form-group">
    <label >Username :</label>
    <input type="text" class="form-control"name="user" placeholder="Enter name" >
  </div>
  <div class="form-group">
    <label >Email address:</label>
    <input type="text" class="form-control" name="email"placeholder="Enter email" >
  </div>
  <div class="form-group">
    <label >Mobile:</label>
    <input type="text" class="form-control" name="mobile"  placeholder="Enter Mobile">
  </div>
  <div class="form-group">
  <label>Comment:</label>
  <textarea class="form-control" rows="5" name="comment"></textarea>
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	</div>

</section>




<section class="my-5">
	<div class="py-5">
	<div><h2 class="text-center" >Services</h2>
	</div></div>
	<div class="container-fluid">
	<div class="row" >
  <div class="col-sm-4" > <div class="card" style="width:400px; height: 200px;">
  <img class="card-img-top" src="images/e.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div></div>
  <div class="col-sm-4" ><div class="card" style="width:400px; height: 200px;">
  <img class="card-img-top" src="images/e.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div></div>
  <div class="col-sm-4" ><div class="card" style="width:400px; height: 200px;">
  <img class="card-img-top" src="images/e.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div></div>
</div>
</div>
</section>








	</body>
</html>