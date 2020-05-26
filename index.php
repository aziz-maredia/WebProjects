<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Css\style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>

<!-- Menu Bar -->	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Azki Web Designing</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#workdone">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Slidebar/Carousel -->

<div id="demo" class="carousel slide img-fluid" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/la.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="Images/chicago.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="Images/ny.jpg" alt="New York">
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

<!-- About Us -->

<section class="about" id="about">
	<div class="my-5">
		<div class="py-1">
			<h3 class="text-center">About Us</h3>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12 aboutimg">
					<img src="Images/interior.jpg" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<h4>I am proffessional and highly rated interior designer.</h4>
					<p>An interior designer must serve many functions. Is it the right role for you? Image: zhu difeng/Shutterstock
					Are you always receiving compliments on your interior design taste? Do you love decorating rooms and arranging furniture? If you answered yes to these questions, then maybe a career in interior design is right for you.

					Before you make a life-altering career choice, there are some things you should know about the design world. Interior designers face challenges every day; some of these may not appeal to you, while others may excite you and open doors to a career that you never thought was possible.
					</p>
					<a href="about.php" class="aboutlink"> Check more</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Galleries -->

<section class="workdone" id="workdone">
	<div class="my-5">
		<div class="py-1">
			<h3 class="text-center">Work Done</h3>
		</div>
		<div class="container-fluid">
				<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<div class="card" style="width:400px">
							  <img class="card-img-top img-fluid workdoneimg " src="Images/gal 1.jpg" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">John Doe</h4>
							    <p class="card-text">Some example text.</p>
							    <a href="#" class="btn btn-primary">See Profile</a>
							  </div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-12">
							<div class="card" style="width:400px">
							  <img class="card-img-top img-fluid workdoneimg " src="Images/gal2.jpg" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">John Doe</h4>
							    <p class="card-text">Some example text.</p>
							    <a href="#" class="btn btn-primary">See Profile</a>
							  </div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-12">
							<div class="card" style="width:400px">
							  <img class="card-img-top img-fluid workdoneimg" src="Images/gal3.jpg" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">John Doe</h4>
							    <p class="card-text">Some example text.</p>
							    <a href="#" class="btn btn-primary">See Profile</a>
							  </div>
							</div>
						</div>
				</div>
		</div>
	</div>
</section>	

<!-- Contact Us -->

<section class="contact" id="contact">
	<div class="my-5">
		<div class="pt-3">
			<h3 class="text-center text-light">Lets Connect</h3>
		</div>
		<div class="container">
			<div class="row justify-content-center form">
				<div class="col-12 col-md-8 col-lg-8 pb-5">
		                    <!--Form with header-->

	                <form action="contact.php" method="post">
	                    <div class="card border-primary rounded-0">
	                        <div class="card-header p-0">
	                            <div class="bg-info text-white text-center py-2">
	                                <h3><i class="fa fa-envelope"></i> Contact Us</h3>
	                            </div>
	                        </div>
	                        <div class="card-body p-3">

	                            <!--Body-->
	                            <div class="form-group">
	                                <div class="input-group mb-2">
	                                    <div class="input-group-prepend">
	                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
	                                    </div>
	                                    <input type="text" class="form-control" id="name" name="name" placeholder="Please enter your full name" required>
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <div class="input-group mb-2">
	                                    <div class="input-group-prepend">
	                                        <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
	                                    </div>
	                                    <input type="email" class="form-control" id="email" name="email" placeholder="Please enter email address" required>
	                                </div>
	                            </div>

	                            <div class="form-group">
	                                <div class="input-group mb-2">
	                                    <div class="input-group-prepend">
	                                        <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
	                                    </div>
	                                    <textarea class="form-control" placeholder="Enter Message" name="msg" required></textarea>
	                                </div>
	                            </div>

	                            <div class="text-center">
	                                <input type="submit" value="Submit" class="btn btn-info btn-block rounded-0 py-2">
	                            </div>
	                        </div>

	                    </div>
	                </form>
				</div>
			</div>
		</div>                	
	</div>
</section>

<footer>
	<h2 class="text-center bg-dark text-light">@azkiwebdesigning</h2>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>