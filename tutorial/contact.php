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
<div class="jumbotron">
   <h1>About Us</h1>
  <p>zoya@techical.com</p>
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



</div>
</body>
</html>