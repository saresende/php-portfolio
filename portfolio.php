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
					<h2>Portfolio</h2>
				</div>
				<div class="col-md-4">
					
				</div>
			</div>
						<div class="row">
							
							<div class="col-xs-8 col-md-8">
								<img src="assets/images/portfolio1.jpg" class ="img-responsive" id="portfolio" alt="portfolio1"/>
								<img src="assets/images/portfolio2.jpg" class ="img-responsive" id="portfolio" alt="portfolio2"/>
								<img src="assets/images/portfolio3.jpg" class ="img-responsive" id="portfolio" alt="portfolio3"/>
								<img src="assets/images/portfolio4.jpg" class ="img-responsive" id="portfolio" alt="portfolio4"/>
								<img src="assets/images/portfolio5.jpg" class ="img-responsive" id="portfolio" alt="portfolio5"/>
								<img src="assets/images/portfolio7.jpg" class ="img-responsive" id="portfolio" alt="portfolio7"/>
							</div>

							

							<?php require 'sidebar.php' ?>

							
						</div>
				<div class="row">

				<?php require './footer.php' ?>
				</div>

		</div>

</body>
</html>