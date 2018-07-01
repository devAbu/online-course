<!DOCTYPE html>
<html lang="en">
<head>
	<title>abu</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" herf="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Rubik" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/12.1.5/js/smooth-scroll.min.js" integrity="sha256-MMt0/21G3z0Zg4ET1kI3HC9npItDowkitRDVr0FhCxA=" crossorigin="anonymous"></script>

	<script type="text/javascript">
		$(function(){
			var scroll = new SmoothScroll('a[href*="#section-"');
		});
	</script>

	<style type="text/css">
		.jumbotron {
			 background-image: url('images/web-app-slideshow.png');
			 background-size: cover;
			 background-position: center;
			 background-attachment: fixed;
			 min-height: 100vh;
		}
		section {
			padding-top: 4rem;
		}
		#section-newsletters {
			padding-top: 0;
		}
		body {
			font-family: 'Open Sans', sans-serif;
		}
		h1, h2, h3, h4, h5, h6 {
			font-family: 'Rubik', sans-serif;
		}
	</style>

</head>

<body data-spy="scroll" data-target="#navScrollspy">

	<nav class="navbar bg-primary navbar-dark navbar-expand-md fixed-top">
		<a href="#" class="navbar-brand"><i class="fa fa-camera-retro" aria-hidden="true"></i>Cameo</a>
		<button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expended="false"
		aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav" id="navScrollspy">
				<li class="nav-item">
					<a href="#section-top" class="nav-link">To the top</a>
				</li>
				<li class="nav-item">
					<a href="#section-description" class="nav-link">Description</a>
				</li>
				<li class="nav-item">
					<a href="#section-trailer" class="nav-link">Trailer</a>
				</li>
				<li class="nav-item">
					<a href="#section-showCase" class="nav-link">Show case</a>
				</li>
				<li class="nav-item">
					<a href="#section-features" class="nav-link">Features</a>
				</li>
				<li class="nav-item">
					<a href="#section-pricing" class="nav-link">Pricing</a>
				</li>
				<li class="nav-item">
					<a href="#section-reviews" class="nav-link">Reviews</a>
				</li>
			</ul>
		</div>
	</nav>

	<section id="section-top" class="jumbotron jumbotron-fluid text-white d-flex justify-content-center align-items-center">
		<div class="container text-center">
			<h1 class="display-1 text-primary text-uppercase">Cameo</h1>
			<p class="display-4 d-none d-sm-block">Capture every moment</p>
			<p class="lead">Lorem ipsum dolor sit amet,</p>
			<p class="lead">Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet,  Stet clita kasd gubergren, </p>
			<p><b>Download now on:</b></p>
			<a href="#" class="btn btn-lg btn-primary mb-1"><i class="fa fa-android mr-1" aria-hidden="true"></i>Google Play</a>
			<a href="#" class="btn btn-lg btn-primary mb-1"><i class="fa fa-apple mr-1" aria-hidden="true"></i>App Store</a>
		</div>
	</section>

	<div class="container">
		<section id="section-description">
			<h2 class="display-4 text-center">What is Cameo?</h2>
			<p>
				Lorem ipsum dolor sit amet,At vero eos et accusam et justo duo dolores et ea rebum.  no sea takimata sanctus est Lorem ipsum dolor sit amet.  no sea 
				takimata sanctus est Lorem ipsum dolor sit amet.  
			</p>
			<p>
				Lorem ipsum dolor sit amet,At vero eos et accusam et justo duo dolores et ea rebum.  no sea takimata sanctus est Lorem ipsum dolor sit amet.  no sea 
				takimata sanctus est Lorem ipsum dolor sit amet.  
			</p>
		</section>
		<section id="section-trailer">
			<h2 class="display-4 text-center">Trailer</h2>
			<p class="text-center"> Watch our trailer video below to learn how Cameo works.</p>
			<div class="embed-responsive embed-responsive-16by9">
				<iframe src="https://www.youtube.com/embed/Uq5JnknTTK8" class="embed-responsive-item"></iframe>
			</div>
		</section>
		<section id="section-showCase">
			<h2 class="display-4 text-center">Cameo in Action</h2>
			<p class="text-center">Examples of how and where you can use Cameo.</p>
			<div id="carousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel" data-slide-to="0" class="active"></li> 
					<li data-target="#carousel" data-slide-to="1"></li>
					<li data-target="#carousel" data-slide-to="2"></li>
					<li data-target="#carousel" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<img src="images/abu.jpg" alt="slide1" class="d-block img-fluid">
						<div class="carousel-caption">
							<h3 class="display-4">At night</h3>
							<p>Use Cameo at night when going out with friends.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="images/card-slideshow.png" alt="slide2" class="d-block img-fluid">
						<div class="carousel-caption">
							<h3 class="display-4">Outside</h3>
							<p>Use Cameo outside when going out with friends.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="images/mobile-app-slideshow.png" alt="slide3" class="d-block img-fluid">
						<div class="carousel-caption">
							<h3 class="display-4">In the sun</h3>
							<p>Use Cameo even with strong and direct sun.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="images/web-app-slideshow.png" alt="slide4" class="d-block img-fluid">
						<div class="carousel-caption">
							<h3 class="display-4">In the distance</h3>
							<p>Use Cameo to take clear photos of objects far away.</p>
						</div>
					</div>
				</div>
				<a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Preview</span>
				</a>
				<a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</section>
		<section id="section-features">
			<h2 class="display-4 text-center">Features</h2>
			<div class ="row">
				<div class="col-12 col-sm-6 col-lg-3 d-flex flex-column align-items-center mb-5">
					<div class="h1">
						<i class="fa fa-paint-brush text-info mb-4" aria-hidden="true"></i>
					</div>
					<h3 class="h4 mb-4 text-center">Enhance your photos</h3>
					<p>Easily enhance your photos with a section of editing tools, filters and effects</p>
					<a href="#" class="btn btn-sm btn-info mt-auto">Read more...</a>
				</div>
				<div class="col-12 col-sm-6 col-lg-3 d-flex flex-column align-items-center mb-5">
					<div class="h1">
						<i class="fa fa-video-camera text-info mb-4" aria-hidden="true"></i>
					</div>
					<h3 class="h4 mb-4 text-center">Also made for videos</h3>
					<p>Easily enhance your photos with a section of editing tools, filters and effects</p>
					<a href="#" class="btn btn-sm btn-info mt-auto">Read more...</a>
				</div>
				<div class="col-12 col-sm-6 col-lg-3 d-flex flex-column align-items-center mb-5">
					<div class="h1">
						<i class="fa fa-instagram text-info mb-4" aria-hidden="true"></i>
					</div>
					<h3 class="h4 mb-4 text-center">Share on instagram</h3>
					<p>Easily enhance your photos with a section of editing tools, filters and effects</p>
					<a href="#" class="btn btn-sm btn-info mt-auto">Read more...</a>
				</div>
				<div class="col-12 col-sm-6 col-lg-3 d-flex flex-column align-items-center mb-5">
					<div class="h1">
						<i class="fa fa-mobile text-info mb-4" aria-hidden="true"></i>
					</div>
					<h3 class="h4 mb-4 text-center">Works on all devices</h3>
					<p>Easily enhance your photos with a section of editing tools, filters and effects</p>
					<a href="#" class="btn btn-sm btn-info mt-auto">Read more...</a>
				</div>
			</div>
		</section>
		<section id="section-pricing">
			<h2 class="display-4 text-center">Choose your plan</h2>
			<div class="row">
				<div class="col-12 col-md-4 mb-4">
					<div class="card card-outline-success">
						<div class="card-header bg-success text-white text-center">
							<h2>Starter</h2>
							<h4>Free</h4>
						</div>
						<div class="card-body">
							<p class="card-text">Perfect if you only take picutres for fun.</p>
						</div>
						<ul class="list-group">
							<li class="list-group-item"><i class="fa fa-paint-brush fa-fw"></i>Enhance your photos and videos</li>
							<li class="list-group-item"><i class="fa fa-instagram fa-fw"></i>Share on Instagram</li>
						</ul>
						<div class="card-footer text-center">
							<a href="#" class="btn btn-lg btn-success">Select plan</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 mb-4">
					<div class="card card-outline-warning">
						<div class="card-header bg-warning text-white text-center">
							<h2>Semi-pro</h2>
							<h4>$1.99 / month</h4>
						</div>
						<div class="card-body">
							<p class="card-text">Perfect if you are semi-pro.</p>
						</div>
						<ul class="list-group">
							<li class="list-group-item"><i class="fa fa-paint-brush fa-fw"></i>Enhance your photos and videos</li>
							<li class="list-group-item"><i class="fa fa-instagram fa-fw"></i>Share on Instagram</li>
							<li class="list-group-item"><i class="fa fa-cogs fa-fw"></i>Advanced settings</li>
						</ul>
						<div class="card-footer text-center">
							<a href="#" class="btn btn-lg btn-warning text-white">Select plan</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 mb-4">
					<div class="card card-outline-danger">
						<div class="card-header bg-danger text-white text-center">
							<h2>Pro</h2>
							<h4>$4.99 / month</h4>
						</div>
						<div class="card-body">
							<p class="card-text">Perfect if you are pro.</p>
						</div>
						<ul class="list-group">
							<li class="list-group-item"><i class="fa fa-paint-brush fa-fw"></i>Enhance your photos and videos</li>
							<li class="list-group-item"><i class="fa fa-instagram fa-fw"></i>Share on Instagram</li>
							<li class="list-group-item"><i class="fa fa-cogs fa-fw"></i>Advanced settings</li>
							<li class="list-group-item"><i class="fa fa-cloud fa-fw"></i>Cloud storage</li>
						</ul>
						<div class="card-footer text-center">
							<a href="#" class="btn btn-lg btn-danger">Select plan</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="section-reviews">
			<h2 class="display-4 text-center">Reviews</h2>
			<div class="row">
				<div class="col-12 col-md-6 col-xl-3">
					<blockquote class="blockquote p-3">
						<p><i class="fa fa-quote-left fa-fw text-secondary"></i>This is the best camera app I have ever tried. I highly recommend Cameo!
						<i class="fa fa-quote-right fa-fw text-secondary"></i></p>
						<footer class="blockquote-footer">
							Abu Abu <time datetime="2017-06-15T14:35">(June 15 2017 14:35)</time>
						</footer>
					</blockquot>
				</div>
				<div class="col-12 col-md-6 col-xl-3">
					<blockquote class="blockquote p-3">
						<p><i class="fa fa-quote-left fa-fw text-secondary"></i>This is the best camera app I have ever tried. I highly recommend Cameo!
						<i class="fa fa-quote-right fa-fw text-secondary"></i></p>
						<footer class="blockquote-footer">
							Machi Abu <time datetime="2018-01-15T11:30">(January 15 2018 11:30)</time>
						</footer>
					</blockquot>
				</div>
				<div class="col-12 col-md-6 col-xl-3">
					<blockquote class="blockquote p-3">
						<p><i class="fa fa-quote-left fa-fw text-secondary"></i>This is the best camera app I have ever tried. I highly recommend Cameo!
						<i class="fa fa-quote-right fa-fw text-secondary"></i></p>
						<footer class="blockquote-footer">
							Combe Combe <time datetime="2017-06-15T14:35">(June 15 2017 14:35)</time>
						</footer>
					</blockquot>
				</div>
				<div class="col-12 col-md-6 col-xl-3">
					<blockquote class="blockquote p-3">
						<p><i class="fa fa-quote-left fa-fw text-secondary"></i>This is the best camera app I have ever tried. I highly recommend Cameo!
						<i class="fa fa-quote-right fa-fw text-secondary"></i></p>
						<footer class="blockquote-footer">
							Refko Juhu <time datetime="2017-06-15T14:35">(June 15 2017 14:35)</time>
						</footer>
					</blockquot>
				</div>
			</div>
		</section>
	</div>

	<section id="section-newsletters" class="bg-secondary">
		<div class="container">
			<form class="py-5 text-white">
				<h2 class="text-center">Sign-up for our newsletters</h2>
				<p>Receive the latest news and offers by signing up to our newsletters.</p>
				<div class="row">
					<div class="col-12 col-sm-6">
						<div class="form-group">
							<label for="input-name" class="sr-only">Your name:</label>
							<input type="text" class="form-control" placeholder="Firstname Lastname" id="input-name">
						</div>
					</div>
					<div class="col-12 col-sm-6">
						<div class="form-group">
							<label for="input-email" class="sr-only">Your email:</label>
							<input type="email" class="form-control" placeholder="mail@example.com" id="input-email">
						</div>
					</div>
				</div>
				<div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input" id="input-terms" value="terms">
						I have read and accept the <a href="#" data-toggle="modal" data-target="#modal">terms and conditions.</a>
					</label>
				</div>
				<div class="d-flex justify-content-between">
					<small class="form-text">You can unsubscribe from the mailing list at any time.</small>
					<button type="submit" class="btn btn-dark">Sign up</button>
				</div>
			</form>
			<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modalTitle">Terms and conditions</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  sed diam nonumy eirmod tempor 
								invidunt ut labore et dolore magna aliquyam erat,  Stet clita kasd gubergren,  
							</p>
							<p>
								Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  sed diam nonumy eirmod tempor 
								invidunt ut labore et dolore magna aliquyam erat,  Stet clita kasd gubergren,  
							</p>
							<p>
								Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  sed diam nonumy eirmod tempor 
								invidunt ut labore et dolore magna aliquyam erat,  Stet clita kasd gubergren,  
							</p>
							<p>
								Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  sed diam nonumy eirmod tempor 
								invidunt ut labore et dolore magna aliquyam erat,  Stet clita kasd gubergren,  
							</p>
							<p>
								Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  sed diam nonumy eirmod tempor 
								invidunt ut labore et dolore magna aliquyam erat,  Stet clita kasd gubergren,  
							</p>
							<p>
								Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  sed diam nonumy eirmod tempor 
								invidunt ut labore et dolore magna aliquyam erat,  Stet clita kasd gubergren,  
							</p>
							<p>
								Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  sed diam nonumy eirmod tempor 
								invidunt ut labore et dolore magna aliquyam erat,  Stet clita kasd gubergren,  
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">
								Close
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="bg-light">
		<div class="container py-3 py-sm-5">
			<div class="row">
				<div class="col-12 col-sm-6 col-lg-3">
					<h6>Quick links</h6>
					<ul class="list-unstyled">
						<li><a href="#">Home</a></li>
						<li><a href="#">What's new</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">My account</a></li>
						<li><a href="#">Cancel subscription</a></li>
					</ul>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<h6>Information</h6>
					<ul class="list-unstyled">
						<li><a href="#">About us</a></li>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Press info</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Partnership</a></li>
					</ul>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<h6>Follow us</h6>
					<ul class="list-unstyled">
						<li><a href="#"><i class="fa fa-facebook fa-fw text-primary" aria-hidden="true"></i>Facebook</a></li>
						<li><a href="#"><i class="fa fa-instagram fa-fw text-primary" aria-hidden="true"></i>Instagram</a></li>
						<li><a href="#"><i class="fa fa-twitter fa-fw text-primary" aria-hidden="true"></i>Twitters</a></li>
						<li><a href="#"><i class="fa fa-youtube fa-fw text-primary" aria-hidden="true"></i>YouTube</a></li>
						<li><a href="#"><i class="fa fa-linkedin fa-fw text-primary" aria-hidden="true"></i>LinkedIn</a></li>
					</ul>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<h6>Our locaiton:</h6>
					<address>
						<b>Cameo</b><br>
						350 5th Avenue<br>
						New York, NY 101118<br>
						<i class="fa fa-phone fa-fw" aria-hidden="true"></i><span class="sr-only">Telephone:</span><a href="tel:+1212352345">(212) 736-55482</a><br>
						<i class="fa fa-inbox fa-fw" aria-hidden="true"></i><span class="sr-only">Email:</span><a href="mailto:info@cameo.com">info@cameo.com</a>
					</address>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-6 col-lg-9">
					<ul class="list-inline">
						<li class="list-inline-item">&copy; 2017 Cameo, Inc.</li>
						<li class="list-inline-item">All rights reserved.</li>
						<li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#modal">Terms of use and privacy policy</a>.</li>
					</ul>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<div class="dropdown dropup">
						<button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-language fa-fw" aria-hidden="true"></i>
							Change language
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a href="#" class="dropdown-item small px-1">English</a>
							<a href="#" class="dropdown-item small px-1">Arabic</a>
							<a href="#" class="dropdown-item small px-1">German</a>
							<a href="#" class="dropdown-item small px-1">Bosnian</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>