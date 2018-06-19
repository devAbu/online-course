<!DOCTYPE html>
<html lang="en">
<head>
	<title>Different Contanier</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>

<body>

	<h1> Container </h1>

	<div class="container bg-success">
		<h1 class="bg-warning">I'm contanier</h1>
	</div>

	<div class="container-fluid bg-danger">
		<h1 class="bg-warning">I'm contanier-fluid</h1>
	</div>

	<h1> Row </h1>

	<div class="row bg-info col-2">
		<h1 class="bg-warning">I'm row</h1>
	</div>

	<h1> Columns </h1>

	<div class="container bg-info">
		<div class="row bg-success">
			<div class="col-4">
				<h1 class="bg-danger">I'm the heading</h1>
			</div>
		</div>
	</div>
	<br>

	<div class="container">
		<div class="row bg-success no-gutters">
			<div class="col-4">
				<h1 class="bg-danger">I'm the heading</h1>
			</div>
		</div>
	</div>
	<br>

	<div class="container">
		<div class="row bg-success no-gutters">
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 col-xl-3">
				<h1 class="bg-danger">I'm the heading</h1>
			</div>
		</div>
	</div>

	<h1>Images</h1>

	<div class="container">
		<div class="row bg-info no-gutters">
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-3 col-xl-3 bg-warning">
				<img src="images/card-slideshow.png" class="img-fluid" alt="image">
			</div>
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-3 col-xl-3 bg-success">
				<img src="images/card-slideshow.png" class="img-fluid" alt="image">
			</div>
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-3 col-xl-3 bg-danger">
				<img src="images/card-slideshow.png" class="img-fluid" alt="image">
			</div>
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-3 col-xl-3 bg-info">
				<img src="images/card-slideshow.png" class="img-fluid" alt="image">
			</div>
		</div>
	</div>
	<br>
	<h1>Centering</h1>
	<div class="container" >
		<div class="row bg-success no-gutters">
			<div class="offset-3 col-6 bg-danger">
				
				<img class="img-fluid" src="images/card-slideshow.png" alt="BUSINESS CARD">

				<h1> This is the first heading</h1>

				<p>
					Lorem ipsum dolor sit amet,sed diam voluptua.  At vero eos et accusam et justo duo dolores et ea rebum.  no sea takimata sanctus est Lorem ipsum dolor sit amet.  no sea takimata sanctus est Lorem ipsum dolor sit amet.  consetetur sadipscing elitr
				</p>

			</div>
		</div>
	</div>
	<br>
	<div class="container" >
		<div class="row bg-success no-gutters">
			<div class="offset-md-3 col-12 col-md-6 bg-danger">
				
				<img class="img-fluid" src="images/card-slideshow.png" alt="BUSINESS CARD">

				<h1> This is the first heading</h1>

				<p>
					Lorem ipsum dolor sit amet,sed diam voluptua.  At vero eos et accusam et justo duo dolores et ea rebum.  no sea takimata sanctus est Lorem ipsum dolor sit amet.  no sea takimata sanctus est Lorem ipsum dolor sit amet.  consetetur sadipscing elitr
				</p>

			</div>
		</div>
	</div>
	<br>
	<h1>Div into Div</h1>
	<div class="container">
		<div class="row">
			<div class="col-6 bg-warning">
				<h1 class="bg-info">Heading</h1>
				<div class="col-6 bg-danger">
					<h1 class="bg-secondary">Heading2</h1>
					<div class="col-6 bg-primary">
					<h1 class="bg-secondary">Heading3</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<h1>Div under image moj nacin</h1>
	<div class="container">
		<div class="row">
			<div class="offset-2 col-md-8">
				<img class="img-fluid" src="images/card-slideshow.png" alt="image">
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="offset-2 col-4">
				<h1>Heading1</h1>
				<p>
					Lorem ipsum dolor sit amet,Stet clita kasd gubergren,
				</p>
			</div>
			<div class="col-3">
				<h1>Heading2</h1>
				<p>
					Lorem ipsum dolor sit amet,Stet clita kasd gubergren,
				</p>
			</div>
		</div>
	</div>
	<br>
	<h1>Div under image njegov nacin</h1>
	<div class="container">
		<div class="row">
			<div class="offset-2 col-md-8">
				<img class="img-fluid" src="images/card-slideshow.png" alt="image">
				<div class="row text-center">
					<div class="col-6">
						<h1>Heading1</h1>
						<p>
							Lorem ipsum dolor sit amet,Stet clita kasd gubergren,
						</p>
					</div>
					<div class="col-6">
						<h1>Heading2</h1>
						<p>
							Lorem ipsum dolor sit amet,Stet clita kasd gubergren,
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<h1>Responsive div under image</h1>
	<div class="container">
		<div class="row">
			<div class="offset-md-2 col-md-8">
				<img class="img-fluid" src="images/card-slideshow.png" alt="image">
				<div class="row text-center">
					<div class="col-md-6">
						<h1>Heading1</h1>
						<p>
							Lorem ipsum dolor sit amet,Stet clita kasd gubergren,
						</p>
					</div>
					<div class="col-md-6">
						<h1>Heading2</h1>
						<p>
							Lorem ipsum dolor sit amet,Stet clita kasd gubergren,
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<h1>Div next to an image</h1>
	<div class="container">
		<div class="row">
			<div class="offset-md-2 col-md-8">
				<div class="row">
					<div class="col-md-6">
					<img class="img-fluid" src="images/abu.jpg" alt="image">
					</div>
					<div class="col-md-6">
						<div class="col-md-12">
							<h1>Heading1</h1>
							<p>
								Lorem ipsum dolor sit amet,consetetur sadipscing elitr,  consetetur sadipscing elitr,  Lorem ipsum dolor sit amet,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  
							</p>
						</div>
						<div class="col-md-12">
							<h1>Heading2</h1>
							<p>
								Lorem ipsum dolor sit amet,consetetur sadipscing elitr,  consetetur sadipscing elitr,  Lorem ipsum dolor sit amet,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>