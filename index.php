<!DOCTYPE html>
<html>
<head>
	<title>Samuel Resende's Portfolio</title>

<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
		<div class="container">
				<?php require './header.php' ?>
				
			<div class="row">
				<div class="col-s-12 col-md-8">
					<h2>About Me</h2>
				</div>
				<div class="col-md-4">
					
				</div>
			</div>
						<div class="row">
							<div class="col-xs-4 col-md-2">
						<img src="assets/images/profilepic2.jpg" class ="img-responsive" alt="Profile picture"/>
							</div>
							<div class="col-xs-8 col-md-6">
								<p>
									Samuel Resende graduated from UCF with a B.S. in December 2015. He spent the following year traveling abroad and is fluent in Portuguese and Spanish. He is a young professional currently learning computer programming at UCF's coding bootcamp. 
								</p>
		
								<p>
									Outside of coding, Samuel enjoys traveling, film, and improv. He is a native to Orlando and has traveled extensively throughout North, Central, and South America. His favorite food is soup. He's allergic to cats.
								</p>
							</div>

							

							<?php require 'sidebar.php' ?>

							
						</div>
				<div class="row">

				<?php require './footer.php' ?>
				</div>

		</div>

</body>
</html>