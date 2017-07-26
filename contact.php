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
					<h2>Contact</h2>
				</div>
				<div class="col-md-4">
					
				</div>
			</div>
						<div class="row">
							<div class="col-xs-12 col-md-8">
								<form>
  									<div class="form-group">
    									<label for="name">Name</label>
    										<input type="name" class="form-control" id="inputname" aria-describedby="nameHelp" placeholder="John Smith">
  									</div>
  									<div class="form-group">
    									<label for="exampleInputEmail1">Email</label>
    										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@gmail.com">
  									</div>
  									<div class="form-group">
    									<label for="exampleTextarea">Message</label>
    									<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  									</div>
  									<button type="submit" class="btn btn-default">Submit</button>
  								</form>
							</div>

						

							<?php require 'sidebar.php' ?>

							
						</div>
				<div class="row">

				<?php require './footer.php' ?>
				</div>

		</div>

</body>
</html>