<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Project Planner</title>

	<link rel="stylesheet/less" href="<?=base_url()?><?=LESS_PATH?>projectplanner.less">
	<link rel="stylesheet/less" href="<?=base_url()?><?=LESS_PATH?>projectplanner-respond.less">
	<script src="<?=base_url()?><?=JS_PATH?>less.js"></script>


</head>

<body data-spy='scroll' data-target='#navbar'>

	<script>
	 var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
	
	</script>

	<div class = 'sidebar hidden-sm'>
		<br>
		<div class = 'row'>
			<h1 class = 'center company'><img src = "<?=base_url()?><?=IMG_PATH?>small-logo.jpg"> BB PROJECT PLANNER</h1>
			<hr>
		</div>
		<br><br>
		
		<div class="menu-container">
				<a href="#" class="open-menu"><i class="icon-reorder"></i></a>
				<nav class = 'menu ' id = 'navbar' role="navigation">
					<ul class="nav">
						<li><a href="#primary">Primary Information</a></li>
						<li><a href="#about">About your business / organisation</a></li>
						<li><a href="#general">General Project information</a></li>
						<li><a href="#redesign">Site redesign information</a></li>
						<li><a href="#objective">Project Goals / Business objectives</a></li>
						<li><a href="#ecommerce">E-commerce</a></li>
						<li><a href="#target">Target Audience</a></li>
						<li><a href="#look">Look, Feel, and site content</a></li>
						<li><a href="#functionality">Website Functionality</a></li>
						<li><a href="#contacts">Key Contacts</a></li>
						<li><a href="#comments">Additional Comments</a></li>
						<li class="close-menu"><a href="#"><i class="icon-chevron-up"></i></a></li>
					</ul>
				</nav>				
		</div>
		
	</div>

	<div id = "mobile-menu" class =  "visible-sm">
		<nav id = 'navbar2' class="navbar navbar-fixed-top" role="navigation">
  			<div class="navbar-header">
   				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      				<span class="sr-only">Toggle navigation</span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				     <span class="icon-bar"></span>
				 </button>
    			<a class="navbar-brand" href="#">
    				<img src = "<?=base_url()?><?=IMG_PATH?>small-logo.jpg">
    				BB PROJECT PLANNER
    			</a>
  			</div>

			<div id = "nav" class="collapse navbar-collapse navbar-ex1-collapse">
			    <ul class="nav navbar-nav">
			      	<li class = "active"><a href="#primary">Primary Information</a></li>
					<li><a href="#about">About your business / organisation</a></li>
					<li><a href="#general">General Project information</a></li>
					<li><a href="#redesign">Site redesign information</a></li>
					<li><a href="#objective">Project Goals / Business objectives</a></li>
					<li><a href="#ecommerce">E-commerce</a></li>
					<li><a href="#target">Target Audience</a></li>
					<li><a href="#look">Look, Feel, and site content</a></li>
					<li><a href="#functionality">Website Functionality</a></li>
					<li><a href="#contacts">Key Contacts</a></li>
					<li><a href="#comments">Additional Comments</a></li>
			    </ul>
			</div>
		</nav>
	</div>

	
	<div class = 'data'>
		<form class="form1" id="form1" method="post" action="<?=base_url()?>main/success" enctype="multipart/form-data">

		<section class="app-curtain" id="primary">
			<h2>Primary Information</h2><br>
				<div class="item-section">
						<div class="item">
							<p>Your full name :</p>
							<input type="text"class="inpt" name="primary-001">
							
						</div>
						<div class="item">
							<p>Your job title :</p>
							<input type="text" class="inpt" name="primary-002">
						</div>
						<div class="item">
							<p>Your department (if any) :</p>
							<input type="text" class="inpt" name="primary-003">
						</div>
						<div class="item">
							<p>Your email address :</p>
							<input type="email" class="inpt" name="primary-004">
						</div>
						<div class="item">
							<p>Your business phone number :</p>
							<input id = "primary-005" type="tel" class="inpt" name="primary-005">
						</div>
						<div class="item">
							<p>How did you hear about us :</p>
							<input type="text" class="inpt" name="primary-006">
						</div>
				</div>
		</section>

		<section class="app-curtain" id="about">
			<h2>About your Business / Organization</h2><br>
				<div class="item-section">
						<div class="item">
							<p>Your business or organisation name :</p>
							<input id = "about-001" type="text" class="inpt" name="about-001">
						</div>
						<div class="item">
							<p>Company type :</p>
							<input type="text" class="inpt" name="about-002">
						</div>
						<div class="item">
							<p>Industry (if any) :</p>
							<input type="text" class="inpt" name="about-003">
						</div>
						<div class="item">
							<p>Kind of business :</p>
							<input type="text" class="inpt" name="about-004">
						</div>
						<div class="item">
							<p>Business primary sells to :</p>
							<input type="text" class="inpt" name="about-005">
						</div>
						<div class="item">
							<p>Location(s) - including HQ / operating locations :</p>
							<input type="text" class="inpt" name="about-006">
						</div>
						<div class="item">
							<p>Geographic scope of business :</p>
							<input type="text" class="inpt" name="about-007">
						</div>
						<div class="item">
							<p>What is your mission statement?</p>
							<input type="text" class="inpt" name="about-008">
						</div>
						<div class="item">
							<p>Tell us more about your business : </p>
							<input type="text" class="inpt" name="about-009">
						</div>
				</div>
		</section>

		<section class="app-curtain" id="general">
			<h2>General Project Information</h2><br>
				<div class="item-section">
						<div class="item">
							<p>What is your current (or intended) web address?</p>
							<div class="input-group input-group-xs ">
  								<span class="input-group-addon">www.</span>
  								<input type="text" class="form-control" name="general-001">
  								<span class="input-group-addon">
  									<select name = "general-002" class="form-control">
										<option value = ".com">.com</option>
										<option value = ".net">.net</option>
										<option value = ".ae" >.ae</option>
										<option value = ".me">.me</option>
										<option value = ".org">.org</option>
										<option value = ".edu">.edu</option>
										<option value = ".gov">.gov</option>
									</select>
  								</span>
  							</div>
  							<div class = "down"><label for="general-001" class="error" generated="true"></label></div>
						</div>			
						<!-- <code><script>if(width<768) document.write("<br>");</script></code>				 -->
						<div class="item">
							<p>Do you have a budget established for this project?</p>
							<div class = 'control-select'>
								<select id = "general-003" name = "general-003" class="form-control">
									<option value = "">- PLEASE SELECT -</option>
									<option value = "70k AED - 100k AED">70k AED - 100k AED</option>
									<option value = "100k AED - 200k AED">100k AED - 200k AED</option>
									<option value = "200k AED - 500k AED">200k AED - 500k AED</option>
									<option value = "500k AED - 1m AED">500k AED - 1m AED</option>
									<option value = "+1 million AED">+1 million AED</option>
								</select>
							</div>
							<div class = "down"><label for="general-003" class="error" generated="true"></label></div>
						</div>
						<code><script>if(width<768) document.write("<br>");</script></code>				
						<div class="item">
							<p>What type of website are you looking for?</p>
							<input type="text" class="inpt" name="general-004">
						</div>
						<div class="item">
							<p>Do you have hosting? <a href = 'http://searchsoa.techtarget.com/definition/hosting'> What is hosting?</a></p>
							<label class="radio-inline">
								<input  type="radio" name="general-005" value="Yes, I have hosting">
								Yes!
							</label>	
							<label class="radio-inline">
								<input  type="radio" name="general-005" value="No, I do not have hosting">
								No
							</label>
							<div class = "down"><label for="general-005" class="error" generated="true"></label></div>
						</div>
						<code><script>if(width<768) document.write("<br><br>");</script></code>				
						<div class="item">
							<p>What is the intended / resonable time span for the project?</p>
							<input type="text" class="inpt" name="general-006">
						</div>			
				</div>
		</section>


		<section class="app-curtain" id="redesign">
			<h2>Site Redesign Information</h2><br>
				<div class="item-section">
						<div class = "item">
							<p>Is this site a redesign?</p>
							<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-primary btn-lg">
									<input type="radio"  id="redesign-001-1" value = "yes" name="redesign-001"  />
									YES
								</label>
								<label class="btn btn-primary btn-lg active">
									<input type="radio"  id="redesign-001-2" value = "no" name="redesign-001" checked/>
									NO
								</label>
							</div>
						</div>
						<br>
					<div id = "hiding-container">
						<div class="item">
							<p>What is your main goal for this redesign?</p>
							<input id = "redesign-002" name = "redesign-002" type="text" class="inpt form-control">
						</div>
						<div class="item">
							<p>Which aspects of your site do you feel are succesful and why?</p>
							<textarea id = "redesign-003" name = "redesign-003" class="inpt form-control" ></textarea>
						</div>
						<div class="item">
							<p>Which aspects of your site do you feel are unsuccesful and why?</p>
							<textarea id = "redesign-004" name = "redesign-004"  class="inpt form-control" ></textarea>
						</div>
						<div class="item">
							<p>Do you plan on using content from the existing site and if so, which portions?</p>
							<textarea id = "redesign-005" name = "redesign-005" class="inpt form-control" ></textarea>
						</div>
					</div>	
				</div>
		</section>

		<section class="app-curtain" id="objective">
			<h2>Project Goals / Business Objectives</h2><br>
				<div class="item-section">
						<div class = "item">
							<p>Briefly describe the site's concept and what service it seeks to provide :</p>
							<textarea name = "objective-001" class="inpt form-control" ></textarea>
						</div>
						<div class = "item">
							<p> What is your main objective or reason for this project? </p>
							<input type="text" class="inpt" id = "objective-002" name="objective-002">
						</div>
						<div class = "item">
							<p>What should happen and/or what is the desired end result <br> in order to determine the website as a success, what are the KPI’s?</p>
							<textarea name = "objective-003" id = "objective-003" class="inpt form-control" ></textarea>
						</div>
						<div class = "item">
							<p>Are there any other considerations that could impact the project schedule?</p>
							<input type="text" class="inpt" id = "objective-004" name="objective-004">
						</div>
				</div>
		</section>

	
		<section class="app-curtain" id="ecommerce">
			<h2>E-Commerce</h2><br>
				<div class="item-section">
					<div class = "item">
						<p>Is this site an E-Commerce site?</p>
						<div class="btn-group" data-toggle="buttons">
							<label class="btn btn-primary btn-lg">
								<input type="radio"  id="ecommerce-001-1" value = "yes" name="ecommerce-001"  />
								YES
							</label>
							<label class="btn btn-primary btn-lg active">
								<input type="radio"  id="ecommerce-001-2" value = "no" name="ecommerce-001" checked/>
								NO
							</label>
						</div>
					</div>
					<div id = "hiding-container-2">
						<div class = "item">
							<p> Please estimate the total number of products :</p>
							<input type="text" class="inpt"  name="ecommerce-002">
						</div>
						<div class = "item">
							<p>Please estimate the total number of product categories : </p>
							<input type="text" class="inpt"   name="ecommerce-003">							
						</div>
						<div class = "item">
							<p> Do you have a merchant account with an online payment gateway? <br>If so, which one?</p>
							<div id = "ecommerce-payment" class="input-group input-group-xs">
						      	<span class="input-group-addon">
						      		<input type="radio" value = "no" id = "ecommerce-004-1" name = "ecommerce-004" checked> No
						      		&nbsp;&nbsp;&nbsp;&nbsp;
						        	<input type="radio" value = "yes" id = "ecommerce-004-2" name = "ecommerce-004">
						        	Yes!
						      	</span>
						      	<input type="text" class="form-control second" id = "ecommerce-005" name = "ecommerce-005">
						    </div>
						    <div class = "down"><label for="ecommerce-005" class="error" generated="true"></label></div> 	
						</div>
					</div>
				</div>
		</section>
		
		<!-- 
		Form names for user profiles stored in array called field[], 
		button's name = target-001
		last input name = target-002
		-->
		<section class="app-curtain" id="target">
			<h2>Target Audience</h2><br>
				<div class="item-section">
					<div class = "item">
						<p>Describe a typical user(s) and what action(s) should <br>be performed when visiting your site</p>
						<div id = "multiple-profiles">
							<div class="profile-container">
								<div class = "down"><label for="field-2" class="error" generated="true"></label></div>
								<div class="input">
		        					<input type="text"  class = "inpt target" placeholder = "Gender" name="field[]" />
		        					<input type="text" id = "field-2" class = "inpt target" placeholder = "Age"  name="field[]" />
		        					<input type="text" class = "inpt target" placeholder = "Location" name="field[]" />
		        					<input type="text" class = "inpt target" placeholder = "Job Title" name="field[]" />
		        					<input type="text" class = "inpt target" placeholder = "Level of experience using the internet" name="field[]" />
		        					<br>
		        					<p>What action(s) should the user perform when visiting your site</p>
		        					<textarea class = "inpt target" name="field[]"></textarea>
		        					<p>What are the key reasons the user chooses your company's products and/or services</p>
		        					<textarea class = "inpt target" name="field[]"></textarea>
		    					</div>
		    				</div>
		    			</div>
	    				<br>
	    				<button id = "addProfile" name = "target-001" type="button" class="btn btn-default">+ &nbsp;&nbsp;&nbsp; ADD USER PROFILE</button>			
					</div>
					<div class="item">
						<p>Do you know how many people visit your site on a daily, weekly or, monthly basis?</p>
						<input type="text" class = "inpt" value = "" name="target-002" />
					</div>
				</div>
		</section>

		<section class="app-curtain" id="look">
			<h2>Look, Feel, And Site Content</h2><br>
				<div class="item-section">
					<div class = "item">
						<p> Do you have brand guidelines in place that should be adhered to? </p>
						<input type="text" class="inpt" name="look-001">
					</div>
					<div class = "item">
						<p> To the best of your ability, use words to describe the end result <code><script>if(width!=400) document.write("<br>");</script></code>	of your project's look and feel : </p>						
						<input type="text" class="inpt" id = "look-002" name="look-002">
					</div>
					<div class = "item">
						<p> To the best of your ability, describe what the personality <br> of your website should be : </p>						
						<input type="text" class="inpt" id = "look-003" name="look-003">
					</div>
					<div class = "item">
						<p> How does your company set itself apart from the competition?</p>
						<textarea name = "look-004" class="inpt" ></textarea>						
					</div>
					<div class = "item">
						<p> List URLs of any sites you find compelling. What specifically do you like about these sites? </p>						
						<textarea id = "look-005" name = "look-005" class="inpt" ></textarea>	
					</div>
					<div class = "item">
						<p>Approximately how many pages do you envisage the site to have <br> and can you give an indication as to the structure you have in mind? </p>
						<textarea id = "look-006" name = "look-006" class="inpt" ></textarea>	
					</div>
					<div class = "item">
						<p>Attatch a sitemap, if possible (.doc, .docx, .pdf) (less than 2MB) : </p>
						<input type ="file" name="look-007" > 
					</div> 
					<code><script>if(width<768) document.write("<br><br>");</script></code>	
					<div class="item">
						<p>Will the site be static or are you looking for a Content Management System <br> that will allow you to add and edit content as you see fit?</p>
						<label class="radio-inline">
							<input type="radio"  name="look-008" value="Static" checked>
							Static
						</label>	
						<label class="radio-inline">
							<input type="radio" name="look-008" value="CMS">
							CMS
						</label>
						<div class = "down"><label for="look-008" class="error" generated="true"></label></div>
					</div>
				</div>
		</section>

		<section class="app-curtain" id="functionality">
			<h2>Website Functionality</h2><br>
				<div class="item-section">
					<div class="item">
						<p>Identify the functional elements that are to be included in the site.<code><script>if(width>768) document.write("<br>");</script></code>Describe in as much detail as possible how you envisage each function will work from the user’s perspective. <code><script>if(width>768) document.write("<br>");</script></code>Here are some of the features you might want to specify for your site.</p>
					</div>
					<div  class="item">
						<p>Search:</p>
						<div id = "f-search" class="input-group input-group-xs">
						      	<span class="input-group-addon">
						      		<input type="radio" value = "no" id = "functionality-001-1" name = "functionality-001" checked> 
						      		No
						      		<br><br>
						        	<input type="radio" value = "yes" id = "functionality-001-2" name = "functionality-001">
						        	Yes!
						      	</span>
						      	<textarea class="form-control"  id = "functionality-002" name = "functionality-002" disabled></textarea>
						</div>
						<div class = "down"><label for="functionality-002" class="error" generated="true"></label></div>
					</div>
					<div class="item">
						<p>Online form(s):</p>
						<div id = "f-form" class="input-group input-group-xs">
						      	<span class="input-group-addon">
						      		<input type="radio" value = "no" id = "functionality-003-1" name = "functionality-003" checked> 
						      		No
						      		<br><br>
						        	<input type="radio" value = "yes" id = "functionality-003-2" name = "functionality-003">
						        	Yes!
						      	</span>
						      	<textarea class="form-control" id = "functionality-004" name = "functionality-004" disabled></textarea>
						</div>
					<div class = "down"><label for="functionality-004" class="error" generated="true"></label></div>
					</div>
					<div class="item">
						<p>Specific calls to action</p>
						<div id = "f-action" class="input-group input-group-xs">
						      	<span class="input-group-addon">
						      		<input type="radio" value = "no" id = "functionality-005-1" name = "functionality-005" checked> 
						      		No
						      		<br><br>
						        	<input type="radio" value = "yes" id = "functionality-005-2" name = "functionality-005">
						        	Yes!
						      	</span>
						      	<textarea class="form-control" id = "functionality-006" name = "functionality-006" disabled></textarea>					      	
						</div>
					<div class = "down"><label for="functionality-006" class="error" generated="true"></label></div>
					</div>
					<div class="item">
						<p>Shopping cart / ordering</p>
						<div id = "f-shopping" class="input-group input-group-xs">
						      	<span class="input-group-addon">
						      		<input type="radio" value = "no" id = "functionality-007-1" name = "functionality-007" checked> 
						      		No
						      		<br><br>
						        	<input type="radio" value = "yes" id = "functionality-007-2" name = "functionality-007">
						        	Yes!
						      	</span>
						      	<textarea class="form-control" id = "functionality-008" name = "functionality-008" disabled></textarea>
						</div>
					<div class = "down"><label for="functionality-008" class="error" generated="true"></label></div>
					</div>
					<div class="item">
						<p>Subscription to newsletter</p>
						<div class="input-group input-group-xs">
						      	<span class="input-group-addon">
						      		<input type="radio" value = "no" id = "functionality-009-1" name = "functionality-009" checked> 
						      		No
						      		<br><br>
						        	<input type="radio" value = "yes" id = "functionality-009-2" name = "functionality-009">
						        	Yes!
						      	</span>
						      	<textarea class="form-control" id = "functionality-0010" name = "functionality-0010" disabled></textarea>
						</div>
					<div class = "down"><label for="functionality-0010" class="error" generated="true"></label></div>
					</div>
					<div class="item">
						<p>Downloadable files</p>
						<div class="input-group input-group-xs">
						      	<span class="input-group-addon">
						      		<input type="radio" value = "no" id = "functionality-0011-1" name = "functionality-0011" checked> 
						      		No
						      		<br><br>
						        	<input type="radio" value = "yes" id = "functionality-0011-2" name = "functionality-0011">
						        	Yes!
						      	</span>
						      	<textarea class="form-control" id = "functionality-0012" name = "functionality-0012" disabled></textarea>
		
						</div>
						<div class = "down"><label for="functionality-0012" class="error" generated="true"></label></div>
					</div>
					<div  class="item">
						<p>Multilingual requirements</p>
						<div id = "f-language" class="input-group input-group-xs">
						      	<span class="input-group-addon">
						      		<input type="radio" value = "no" id = "functionality-0013-1" name = "functionality-0013" checked> 
						      		No
						      		<br><br>
						        	<input type="radio" value = "yes" id = "functionality-0013-2" name = "functionality-0013">
						        	Yes!
						      	</span>
						      	<textarea class="form-control" id = "functionality-0014" name = "functionality-0014" disabled></textarea>
						</div>
					<div class = "down"><label for="functionality-0014" class="error" generated="true"></label></div>
					</div>
					<div class="item">
						<p>Printer friendly function</p>
						<div class="input-group input-group-xs">
						      	<span class="input-group-addon">
						      		<input type="radio" value = "no" id = "functionality-0015-1" name = "functionality-0015" checked> 
						      		No
						      		<br><br>
						        	<input type="radio" value = "yes" id = "functionality-0015-2" name = "functionality-0015">
						        	Yes!
						      	</span>
						      	<textarea class="form-control" id = "functionality-0016" name = "functionality-0016" disabled></textarea>
						</div>
					<div class = "down"><label for="functionality-0016" class="error" generated="true"></label></div>
					</div>
					<div class="item">
						<p>Animations and videos</p>
						<div class="input-group input-group-xs">
						      	<span class="input-group-addon">
						      		<input type="radio" value = "no" id = "functionality-0017-1" name = "functionality-0017" checked> 
						      		No
						      		<br><br>
						        	<input type="radio" value = "yes" id = "functionality-0017-2" name = "functionality-0017">
						        	Yes!
						      	</span>
						      	<textarea class="form-control" id = "functionality-0018" name = "functionality-0018" disabled></textarea>
						</div>
						<div class = "down"><label for="functionality-0018" class="error" generated="true"></label></div>
					</div>
					<div  class="item">
						<p>Social media</p>
						<div id = "f-social" class="input-group input-group-xs">
						      	<span class="input-group-addon">
						      		<input type="radio" value = "no" id = "functionality-0019-1" name = "functionality-0019" checked> 
						      		No
						      		<br><br>
						        	<input type="radio" value = "yes" id = "functionality-0019-2" name = "functionality-0019">
						        	Yes!
						      	</span>
						      	<textarea class="form-control" id = "functionality-0020" name = "functionality-0020" disabled></textarea>
						</div>
						<div class = "down"><label for="functionality-0020" class="error" generated="true"></label></div>
					</div>
					<div class="item">
						<p>News and media and/or blog</p>
						<div class="input-group input-group-xs">
						      	<span class="input-group-addon">
						      		<input type="radio" value = "no" id = "functionality-0021-1" name = "functionality-0021" checked> 
						      		No
						      		<br><br>
						        	<input type="radio" value = "yes" id = "functionality-0021-2" name = "functionality-0021">
						        	Yes!
						      	</span>
						      	<textarea class="form-control" id = "functionality-0022" name = "functionality-0022" disabled></textarea>
						</div>
						<div class = "down"><label for="functionality-0022" class="error" generated="true"></label></div>
					</div>
					<div class="item">
						<p>User login / member section</p>
						<div class="input-group input-group-xs">
						      	<span class="input-group-addon">
						      		<input type="radio" value = "no" id = "functionality-0023-1" name = "functionality-0023" checked> 
						      		No
						      		<br><br>
						        	<input type="radio" value = "yes" id = "functionality-0023-2" name = "functionality-0023">
						        	Yes!
						      	</span>
						      	<textarea class="form-control" id = "functionality-0024" name = "functionality-0024" disabled></textarea>
						</div>
						<div class = "down"><label for="functionality-0024" class="error" generated="true"></label></div>
					</div>
					<div class="item">
						<p>Special bespoke tools</p>
						<div id = "f-bespoke" class="input-group input-group-xs">
						      	<span class="input-group-addon">
						      		<input type="radio" value = "no" id = "functionality-0025-1" name = "functionality-0025" checked> 
						      		No
						      		<br><br>
						        	<input type="radio" value = "yes" id = "functionality-0025-2" name = "functionality-0025">
						        	Yes!
						      	</span>
						      	<textarea class="form-control" id = "functionality-0026" name = "functionality-0026" disabled></textarea>
						</div>
						<div class = "down"><label for="functionality-0026" class="error" generated="true"></label></div>
					</div>
					<div class="item">
						<p>Integration with third party</p>
						<div id = "f-third-party" class="input-group input-group-xs">
						      	<span class="input-group-addon">
						      		<input type="radio" value = "no" id = "functionality-0027-1" name = "functionality-0027" checked> 
						      		No
						      		<br><br>
						        	<input type="radio" value = "yes" id = "functionality-0027-2" name = "functionality-0027">
						        	Yes!
						      	</span>
						      	<textarea class="form-control" id = "functionality-0028" name = "functionality-0028" disabled></textarea>
						</div>
						<div class = "down"><label for="functionality-0028" class="error" generated="true"></label></div>
					</div>

				</div>
		</section>

		<section class="app-curtain" id="contacts">
			<h2>Key Contacts</h2><br>
				<div class="item-section">
					<div class = "item">
						<p>Who is the main decision maker for approvals of cost, design etc.?</p>
						<input id = "contacts-001" name = "contacts-001"  placeholder = "Full Name" type="text" class="inpt "><br>
						<input id = "contacts-002" name = "contacts-002"  placeholder = "Contact No." type="text" class="inpt ">
						
					
					</div>
					<div class="item">
						<p>Who will be responsible for delivery of the website content?</p>
						
							<input id = "contacts-003" name = "contacts-003" placeholder = "Full Name" type="text"  class="inpt"><br>
							<input id = "contacts-004" name = "contacts-004" placeholder = "Contact No." type="text"  class="inpt">	
					</div>
					<div class="item">
						<p>Who will be responsible for maintaining the website once complete?</p>
						
							<input id = "contacts-005" name = "contacts-005" placeholder = "Full Name" type="text" class="inpt"><br>
							<input id = "contacts-006" name = "contacts-006" placeholder = "Contact No." type="text" class="inpt">	
					</div>
				</div>
		</section>

		<!-- Submit button's name is final-submit -->
		<section class="app-curtain" id="comments">
			<h2>Additional Comments</h2><br>
				<div class="item-section">
					<div class = "item">
						<p>Anything else?</p>
						<textarea class="inpt" id = "comments-001" name = "comments-001"></textarea>
					</div>
				</div>
				<div class = "item">
					
					<button id = "final-submit" name = "final-submit" type="submit" class="final-submit btn btn-primary btn-lg ">
					&nbsp;&nbsp;&nbsp;I'M DONE!&nbsp;&nbsp;&nbsp;
					
					</button>	
					<img id = 'loading' class="img-responsive" src = "<?=IMG_PATH?>ajax-loader.gif" alt = 'Loading' >	
					
				</div>
				<br><br>
		</section>

		</form>
	</div>
	

	<script src="<?=base_url()?><?=JS_PATH?>jquery.js"></script>
	<script src="<?=base_url()?><?=JS_PATH?>bootstrap.min.js"></script>
	<script src="<?=base_url()?><?=JS_PATH?>additional-methods.min.js"></script>
	<script src="<?=base_url()?><?=JS_PATH?>jquery.validate.min.js"></script>
	<script src="<?=base_url()?><?=JS_PATH?>jquery.form.min.js"></script>
	
	

	<script>
	  
	$(function (){ 
		
		$('#loading').hide();
		
		$("#form1").validate({

			errorClass: "error",

	      	wrapper : "div",
	      
	      	rules: {
	          "primary-001": "required",  
	          "primary-002": "required",  
	          "primary-004": {
	              required: true,
	              email:true
	    
	          },
	          "primary-005":{
	              required : true,
	              number: true
	          },
	          "primary-006" : "required",
	          "about-001": "required",
	          "about-002": "required",
	          "about-004": "required",
	          "about-005": "required",
	          "about-006": "required",
	          "about-007": "required",
	          "about-008": "required",
	          "about-009": "required",
	          "general-001": "required",
	          "general-003": "required",
	          "general-004": "required",
	          "general-005": "required",
	          "general-006": "required",
	          "objective-001": "required",
	          "objective-002": "required",
	          "objective-003": "required",
	          "objective-004": "required",
	          "target-002": "required",
	          "look-001": "required",
	          "look-002": "required",
	          "look-003": "required",
	          "look-004": "required",
	          "look-005": "required",
	          "look-006": "required",
	          "look-008": "required",
	          "contacts-001": "required",
	          "contacts-002": {
	              required : true,
	              number : true
	            },
	            "contacts-003": "required",
	            "contacts-004": {
	              required : true,
	              number : true
	            },
	            "contacts-005": "required",
	            "contacts-006": {
	              required : true,
	              number : true
	            },
	            "functionality-002": {
	            required: true,
	              depends: function(element) {
	                return $("#functionality-001-2:checked")
	              }
	            },
	            "functionality-004": {
	            required: true,
	              depends: function(element) {
	                return $("#functionality-003-2:checked")
	              }
	            },
	            "functionality-006": {
	            required: true,
	              depends: function(element) {
	                return $("#functionality-005-2:checked")
	              }
	            },
	            "functionality-008": {
	            required: true,
	              depends: function(element) {
	                return $("#functionality-007-2:checked")
	              }
	            },
	            "functionality-0010": {
	            required: true,
	              depends: function(element) {
	                return $("#functionality-009-2:checked")
	              }
	            },
	            "functionality-0012": {
	            required: true,
	              depends: function(element) {
	                return $("#functionality-0011-2:checked")
	              }
	            },
	            "functionality-0014": {
	            required: true,
	              depends: function(element) {
	                return $("#functionality-0013-2:checked")
	              }
	            },
	            "functionality-0016": {
	            required: true,
	              depends: function(element) {
	                return $("#functionality-0015-2:checked")
	              }
	            },
	            "functionality-0018": {
	            required: true,
	              depends: function(element) {
	                return $("#functionality-0017-2:checked")
	              }
	            },
	            "functionality-0020": {
	            required: true,
	              depends: function(element) {
	                return $("#functionality-0019-2:checked")
	              }
	            },
	            "functionality-0022": {
	            required: true,
	              depends: function(element) {
	                return $("#functionality-0021-2:checked")
	              }
	            },
	            "functionality-0024": {
	            required: true,
	              depends: function(element) {
	                return $("#functionality-0023-2:checked")
	              }
	            },
	            "functionality-0026": {
	            required: true,
	              depends: function(element) {
	                return $("#functionality-0025-2:checked")
	              }
	            },
	            "functionality-0028": {
	            required: true,
	              depends: function(element) {
	                return $("#functionality-0027-2:checked")
	              }
	            },          
	          "redesign-002": {
	            required: true,
	              depends: function(element) {
	                return $("#redesign-001-1:checked")
	              }
	            },
	            "redesign-003": {
	            required: true,
	              depends: function(element) {
	                return $("#redesign-001-1:checked")
	              }
	            },
	            "redesign-004": {
	            required: true,
	              depends: function(element) {
	                return $("#redesign-001-1:checked")
	              }
	            },
	            "redesign-005": {
	            required: true,
	              depends: function(element) {
	                return $("#redesign-001-1:checked")
	              }
	            },
	            "ecommerce-002": {
	            required: true,
	              depends: function(element) {
	                return $("#ecommerce-001-1:checked")
	              }
	            },
	            "ecommerce-003": {
	            required: true,
	              depends: function(element) {
	                return $("#ecommerce-001-1:checked")
	              }
	            },
	            "ecommerce-005": {
	            required: true,
	              depends: function(element) {
	                return $("#ecommerce-004:checked")
	              }
	            }

	         },
	   

	        messages:{
	          "primary-004": {
	            required: "We need your email to contact you!",
	            email : "Please enter a valid email"
	          },
	          "primary-005":{
	            number : "Phone numbers on earth are usually just numbers!"
	          },
	          "contacts-002":{
	            number : "Contact numbers on earth are usually just numbers!"
	          },
	          "contacts-004":{
	            number : "Contact numbers on earth are usually just numbers!"
	          },
	          "contacts-006":{
	            number : "Contact numbers on earth are usually just numbers!"
	          }
	          
	        },
					

			 submitHandler: function(form) {
			 	$('#loading').show();
    			form.submit();
    			return;
  			}
		});

		
		//APPLIES SCROLL SPY ON MOBILE
		if(width<773){	
			$('body').attr("data-target", "#navbar2");	
		}

		// FUNCTIONALITY

			$("[id^=functionality][type=radio]").change(function(e){
				e.preventDefault();
				var id = $(this).prop("id");
				var chunks = id.split("-");
				var counter = parseInt(chunks[1]);
				counter++;

				//$("#functionality-00"+counter).prop("disabled",true)

				if($(this).val() == "yes" && $(this).is(':checked'))
				{
					$("#functionality-00"+counter).prop("disabled",false);
				}
				else if( $(this).val() == "no" && $(this).is(':checked'))
				{
					$("#functionality-00"+counter).prop("disabled",true);
				}
				


			});
		//ECOMMERCE 

		 $('#ecommerce-005').prop("disabled", true);
		  
			$('#ecommerce-004-2').change(function () {
					$('#ecommerce-005').prop("disabled", false);
			 });

			$('#ecommerce-004-1').change(function () {
					$('#ecommerce-005').prop("disabled", this.checked);
			 });

		// REDESIGN TOGGLE

		$('#hiding-container').hide();

			$('#redesign-001-1').change(function () {
		    		$('#hiding-container').show();
		    });

			$('#redesign-001-2').change(function () {
		        $('#hiding-container').hide();
		    }); 

		// ECOMMERCE TOGGLE

	    $('#hiding-container-2').hide();

			$('#ecommerce-001-1').change(function () {
		    		$('#hiding-container-2').show();
		    });

			$('#ecommerce-001-2').change(function () {
		        $('#hiding-container-2').hide();
		    }); 


		// ADDING EXTRA USER PROFILES FOR TARGET AUDIENCE
		$("#addProfile").click(function(e) {
		    e.preventDefault();
	    	$('#multiple-profiles').append("<br><div class = 'profile-container'><div class='input'><input type='text' class = 'inpt target' placeholder = 'Gender' name='field[]' /><input type='text' class = 'inpt target' placeholder = 'Age' name='field[]' /><input type='text' class = 'inpt target' placeholder = 'Location' name='field[]' /><input type='text' class = 'inpt target' placeholder = 'Job Title' name='field[]' /> <input type='text' class = 'inpt target' placeholder = 'Level of experience using the internet' name='field[]' /><br><p>What action(s) should the user perform when visiting your site</p><textarea class = 'inpt target' name='field[]'></textarea><p>What are the key reasons the user chooses your company's products and/or services</p><textarea class = 'inpt target' name='field[]''></textarea></div></div>");
		});

		var place = "bottom";


		
				$("#primary-005").popover({
					
					html : true,
					content: "including area code or country code",
					trigger: "focus",
					animation: "true",
					placement: place

				});

				$("#about-001").popover({
					
					html : true,
					title : "Primary information",
					content: "We take websites seriously and good communication is always key to a succesful project. This project planner will help organize your overall goals for your project in a way that we can understand and use to provide",
					trigger: "focus",
					animation: "true",
					placement: place

				});

				$("#general-003").popover({
					
					html : true,
					
					content: "This is important because we do have different packages for different budgets. We need to understand what we have to work with",
					trigger: "focus",
					animation: "true",
					placement: place

				}); 


				$("#redesign-002").popover({
					
					html : true,
					title: "Example :",
					content: "provide better user experience, <br> update the site's look and feel, <br> target a different audience",
					trigger: "focus",
					animation: "true",
					placement: place

				}); 


				$("#objective-002").popover({
					
					html : true,
					title: "Example :",
					content: "promote a new product/service, <br> streamline/automate a specific business process, <br> build client database",
					trigger: "focus",
					animation: "true",
					placement: place

				}); 

				$("#objective-003").popover({
					
					html : true,
					title: "Example :",
					content: "number of contact form enquires, <br> phone calls, <br> newsletter subscriptions, <br> sales, <br> Facebook likes ",
					trigger: "focus",
					animation: "true",
					placement: place

				}); 

				$("#objective-004").popover({
					
					html : true,
					title: "Example :",
					content: "new product launch, <br> trade show, <br> marketing campaign",
					trigger: "focus",
					animation: "true",
					placement: place

				}); 

				$("#ecommerce-payment").popover({
					
					html : true,
					title: "Example :",
					content: "PayPal, 2checkout, Mashreq Bank, NDB etc.",
					trigger: "hover",
					animation: "true",
					placement: place

				}); 

				$("#look-002").popover({
					
					html : true,
					title: "Example :",
					content: "clean, balanced, modern, simple, rustic, monotone etc.",
					trigger: "focus",
					animation: "true",
					placement: place

				}); 

				$("#look-003").popover({
					
					html : true,
					title: "Example :",
					content: "young and trendy or old and conservative",
					trigger: "focus",
					animation: "true",
					placement: place

				})

				$("#look-005").popover({
					
					html : true,
					content: "they need not be competitor websites or sites that are in the same industry",
					trigger: "focus",
					animation: "true",
					placement: place

				})

				$("#look-006").popover({
					
					html : true,
					title : "Example : ",
					content: "about, services, contact etc.",
					trigger: "focus",
					animation: "true",
					placement: place

				})

				$("#f-search").popover({
					
					html : true,
					
					content: "any special requirements?",
					trigger: "hover",
					animation: "true",
					placement: place

				})

				$("#f-form").popover({
					
					html : true,
					title : "Example : ",
					content: "contact/enquiry form",
					trigger: "hover",
					animation: "true",
					placement: place

				})

				$("#f-action").popover({
					
					html : true,
					title : "Example : ",
					content: "download brochure, call back request, apply for something etc. ",
					trigger: "hover",
					animation: "true",
					placement: place

				})

				$("#f-shopping").popover({
					
					html : true,
					content: "with or without payment",
					trigger: "hover",
					animation: "true",
					placement: place

				})			


				$("#f-language").popover({
					
					html : true,
					content: "which ones, which is default?",
					trigger: "hover",
					animation: "true",
					placement: place

				})

				$("#f-social").popover({
					
					html : true,
					title : "Example : ",
					content: "facebook like button, tweet buttons, custom facebook pages etc.",
					trigger: "hover",
					animation: "true",
					placement: place

				})	

				$("#f-bespoke").popover({
					
					html : true,
					title : "Example : ",
					content: "mortgage calculator, currency converter etc.",
					trigger: "hover",
					animation: "true",
					placement: place

				})	

				$("#f-third-party").popover({
					
					html : true,
					title : "Example : ",
					content: "CRM system, XML feeds etc.",
					trigger: "hover",
					animation: "true",
					placement: place

				})

				$("#addProfile").popover({
					
					html : true,
					
					content: "Please provide more than one profile if applicable",
					trigger: "hover",
					animation: "true",
					placement: place

				})		

		
	});  



			
	</script>

</body>
</html>