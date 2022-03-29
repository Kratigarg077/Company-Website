<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Josefin+Slab:wght@600&display=swap" rel="stylesheet">

    <title>INDEX</title>
</head>
<body>
	
	<?php include'menu.php' ;?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/image1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>A workplace that works for everyone!</h3>
        <p>Our people are our most important asset. We’re committed to making Adobe a place where employees can be themselves, do their best work and thrive..</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/image3.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Together, we create change!</h3>
        <p>We're working with our employees and communities to unlock the creative potential in everyone and affect the world in ways both big and small..</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/image8.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3 style="color:white">Creativity for all</h3>
        <p style="color:black">We believe everybody has a story to tell. Adobe Creative Cloud unleashes creativity so anyone — from the most demanding professional to students just starting out — can make whatever they want, wherever they want..</p>
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
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center"><b>About Us</b></h2>
	</div>
	
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/image2.jpg" class="img-fluid aboutimg">
		</div>

		<div class="col-lg-6 col-md-6 col-12">
			<h5 class="display-5"><b>  We at ADOBE thinks nobody should be bounded by technology when it comes to making art !!</b></h5>
			<p class="py-3">
				Creativity is in our DNA. Our game-changing innovations are redefining the possibilities of digital experiences. We connect content and data and introduce new technologies that democratise creativity, shape the next generation of storytelling and inspire entirely new categories of business.
			</p>
			<a href="about.php" class="btn btn-success"> Check more </a>
		</div>
	</div>
</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center"><b>Our Gallery</b></h2>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/logo1.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/image2.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/image8.jpg" class="img-fluid pb-4">
			</div>

		<div class="col-lg-4 col-md-4 col-12">
				<img src="images/image3.jpg" class="img-fluid pb-4">
			</div>
			
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/image1.jpg" class="img-fluid pb-4">
			</div>
			
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img1.jpg" class="img-fluid pb-4">
			</div>
		</div>

	</div>

</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center"><b>Our Products</b></h2>
	</div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
                    <img class="card-img-top" src="images/ps.jpg" alt="Card image" width="300" height="300">
                    <div class="card-body">
                        <h4 class="card-title">Photoshop :)</h4>
                        <p class="card-text">Image editing and design.</p>
                        <a href="https://www.adobe.com/in/products/photoshop.html" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">  
                <div class="card" >
                    <img class="card-img-top" src="images/ai1.jpg" alt="Card image" width="300" height="300">
                    <div class="card-body">
                        <h4 class="card-title">Illustrator :)</h4>
                        <p class="card-text">Video graphics and illustration.</p>
                        <a href="https://www.adobe.com/in/products/illustrator.html" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">  
                <div class="card" >
                    <img class="card-img-top" src="images/lr.jpg" alt="Card image" width="200" height="300">
                    <div class="card-body">
                        <h4 class="card-title">Lightroom :)</h4>
                            <p class="card-text">The colud-based photo service.</p>
                                <a href="https://www.adobe.com/in/products/photoshop-lightroom.html" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">  
                <div class="card" >
                    <img class="card-img-top" src="images/id.png" alt="Card image" width="400" height="300">
                    <div class="card-body">
                        <h4 class="card-title">InDesign :)</h4>
                            <p class="card-text">Design and publish elegant layouts for print and digital..</p>
                                <a href="https://www.adobe.com/in/products/indesign.html" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">  
                <div class="card" >
                    <img class="card-img-top" src="images/cr1.jpg" alt="Card image" width="400" height="300">
                    <div class="card-body">
                        <h4 class="card-title">Creative Cloud Express :)</h4>
                            <p class="card-text">Social graphics and more.</p>
                                <a href="https://www.adobe.com/express/" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">  
                <div class="card" >
                    <img class="card-img-top" src="images/as.jpg" alt="Card image" width="400" height="300">
                    <div class="card-body">
                        <h4 class="card-title">Adobe Stock :)</h4>
                            <p class="card-text">The colud-based photo service.</p>
                                <a href="https://stock.adobe.com/in/" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">  
                <div class="card" >
                    <img class="card-img-top" src="images/ad1.jpg" alt="Card image" width="400" height="300">
                    <div class="card-body">
                        <h4 class="card-title">Adobe XD :)</h4>
                            <p class="card-text">Design, prototype and share user experiences for web, mobile.</p>
                                <a href="https://www.adobe.com/in/products/xd.html" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
                        <div class="col-lg-4 col-md-4 col-12">  
                <div class="card" >
                    <img class="card-img-top" src="images/pr.jpg" alt="Card image" width="400" height="300">
                    <div class="card-body">
                        <h4 class="card-title">Premiere Pro :)</h4>
                            <p class="card-text">Industry-standard pro video and film editing..</p>
                                <a href="https://www.adobe.com/in/products/premiere.html" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
                        <div class="col-lg-4 col-md-4 col-12">  
                <div class="card" >
                    <img class="card-img-top" src="images/an.png" alt="Card image" width="400" height="300">
                    <div class="card-body">
                        <h4 class="card-title">Animate :)</h4>
                            <p class="card-text">A new age for animation. Any platform, device and style..</p>
                                <a href="https://www.adobe.com/in/products/animate.html" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center"><b>Register Yourself</b></h2>
	</div>

	<div class="w-50 m-auto">
		<form action="userdata.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="Name" autocomplete="off" class="form-control">
	</div>
	<div class="form-group">
				<label>Email-Id</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
	</div>
	<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
	</div>
	<div class="form-group">
				<label>Comments</label>
				<textarea class="form-control" name="comment">
				</textarea>
	</div>
	<button type="submit" class="btn btn-success"> Submit</button>
</form>
</div>
</section>

<?php include'footer.php' ;?>


	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	
	
</body>
</html>

