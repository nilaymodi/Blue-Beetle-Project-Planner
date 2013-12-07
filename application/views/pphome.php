<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Project Planner</title>

	<link rel="stylesheet/less" href="<?=base_url()?><?=LESS_PATH?>main.less">
	<script src="<?=base_url()?><?=JS_PATH?>less.js"></script>
</head>
<body>
	<div class = 'container'>
		<div class = "row">
			<div class="visible-sm">
				<center>
				<a class="btn-website" href="http://www.bluebeetle.co">Go to BB website</a>
				</center>
			</div>
			<div class="hidden-sm">
				<a class="btn-website" href="http://www.bluebeetle.co">Go to BB website</a>
			</div>
		</div>


		<div class = 'start'>
			<div class = 'row'>
				<div class = 'col-md-2'></div>
				<div class = 'col-md-8 center light'>
					THE VERY USEFUL
				</div>
				<div class = 'col-md-2'></div>
			</div>


			<div class = 'row'>
				<div class = 'col-md-2'></div>
				<div class = 'col-md-8 center'>
					<h1>BB Project Planner</h1>
				</div>
				<div class = 'col-md-2'></div>
			</div>
			
			<br><br><br>
			<div class = 'row'>
				<div class = 'col-md-3'></div>
				<div class = 'col-md-6 normal-text center'>
					We take websites seriously and good communication is always the key to a successful project.  This Project Planner will help you organize your overall goals for your project in a way that we can understand and use to provide you with a cost estimate.  Please fill out this document to the best of your ability.  If there is a question that doesn’t make sense or doesn’t apply to your project, feel free to leave it blank. 
				</div>
				<div class = 'col-md-3'></div>
			</div>
		
			<br><br><br><br>
			<div class = 'row'>
				<div class = 'col-md-3'></div>
				<div class = 'col-md-6 center'>
					<a href="<?=site_url('projectplanner')?>">
							<img class="img-responsive" src = "<?=IMG_PATH?>start.jpg" alt = 'Start Project'>
					</a>
				</div>
				<div class = 'col-md-3'></div>
			</div>

			<div class = 'row'>
				<br>
			</div>

		</div>
	</div>
</body>
</html>