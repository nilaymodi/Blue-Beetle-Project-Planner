<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Success</title>
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
				<div class = 'col-md-8 center'>
					<?if($results['email'] == true) {?> 
						<h1>THANK YOU!</h1> 
					<?}else{?>
					   <h1>Sorry! A Technical Error Has Occured</h1>
					<?}?>
				</div>
				<div class = 'col-md-2'></div>
			</div>
			<br><br><br>
			<div class = 'row'>
				<div class = 'col-md-3'></div>
				<div class = 'col-md-6 normal-text center'>				
					<?if($results['email'] == true) {?>
						<?if($results['upload_error'] != ""){?> However, your sitemap was not succesfully attatched. Please send it seperately to <u>hello@bluebeetle.co</u><br><br> <?}?>
					We will get back to you as soon as possible.
					<br><br>
					In the meantime feel free to check out <a href = "http://www.bluebeetle.ae/work"> Our Portfolio</a>
					<br><br>
					While you’re at it why not spread the love...
					<?}else{?>
						Please try again later... <a href = "<?base_url()?>">Go back to project planner</a>
						<br><br>
						If the error persits, feel free to contact us : <br><br> 
						e : <u>hello@bluebeetle.co</u> <br>
						t : +971 4 425 3515
					<?}?>
				</div>
				<div class = 'col-md-3'></div>
			</div>
		</div>
	</div>
</body>
</html>