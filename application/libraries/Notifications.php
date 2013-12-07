<?php

class Notifications {
var $CI='';
var $from ='';
var $from_email ='';
var $to='';
var $subject='';
var $content='';
var $debug_ouput='';
var $attach = '';

	function __construct() {
		$this->CI=&get_instance();
		$this->to='nilay.modi96@gmail.com';
		
	}
	
	public function create_email($opts, $file){

			
		$this->subject='New project inquiry from ' . $opts['about-001'];
		$this->from=$opts['primary-001'];
		$this->from_email=$opts['primary-004'];

		ob_start();
		?>
			
		<!-- primary info -->
		<table width="600" style="font-size: 11px; font-family: Helvetica; color: #002a44; background-color: #b6bec4; border: 1px solid black;" cellspacing="10" cellpadding = "5">
			<th colspan = "2"><h2 style = "color: #002a44">PRIMARY INFORMATION</h2></th>
				<tr style = "border: 1px solid black;"><td><b>Full name : </b></td><td><?=$opts['primary-001']?></td></tr>
				<tr><td><b>Job title : </b></td><td><?=$opts['primary-002']?></td></tr>
				<?if(isset($opts['primary-003']) && !empty($opts['primary-003'])) { ?>
					<tr><td><b>Department : </b></td><td><?=$opts['primary-003']?></td></tr>
				<?}?>
				<tr><td><b>Email : </b></td><td><?=$opts['primary-004']?></td></tr> 
				<tr><td><b>Business phone number : </b></td><td><?=$opts['primary-005']?></td></tr>
				<tr><td><b>I heard about Blue Beetle through : </b></td><td><?=$opts['primary-006']?></td></tr>
		</table>
			
			<br>

		<!-- about my business -->
		<table width="600" style="font-size: 11px; font-family: Helvetica; color: #002a44; background-color: #b6bec4; border: 1px solid black;" cellspacing="10" cellpadding = "5">
			<th colspan = "2"><h2 style = "color: #002a44"><h2>ABOUT MY BUSINESS/ORGANIZATION </h2></th>
				<tr><td><b>Business/Organization name : </b></td><td><?=$opts['about-001']?></td></tr> 
				<tr><td><b>Company type : </b></td><td><?=$opts['about-002']?></td></tr> 
				<?if(isset($opts['about-003'])  && !empty($opts['about-003'])) { ?>
					<tr><td><b>Industry : </b></td><td><?=$opts['about-003']?></td></tr> 
				<?}?>
				<tr><td><b>Kind of business : </b></td><td><?=$opts['about-004']?></td></tr> 
				<tr><td><b>Our business primarily sells to : </b></td><td><?=$opts['about-005']?></td></tr> 
				<tr><td><b>Location(s) : </b></td><td><?=$opts['about-006']?></td></tr> 
				<tr><td><b>Geographic scope of business : </b></td><td><?=$opts['about-007']?></td></tr> 
				<tr><td><b>Our mission statement : </b></td><td><?=$opts['about-008']?></td></tr> 
				<tr><td><b>A little bit more about our business : </b></td><td><?=$opts['about-009']?></td></tr> 
		</table>

			<br>

		<!-- general project information -->
		<table width="600" style="font-size: 11px; font-family: Helvetica; color: #002a44; background-color: #b6bec4; border: 1px solid black;" cellspacing="10" cellpadding = "5">
			<th colspan = "2"><h2 style = "color: #002a44"><h2>GENERAL PROJECT INFORMATION </h2></th>
				<tr><td><b>Current/Intended web address : </b></td><td>www.<?=$opts['general-001']?><?=$opts['general-002']?></td></tr> 
				<tr><td><b>Budget : </b></td><td><?=$opts['general-003']?></td></tr> 
				<tr><td><b>The type of website I am looking for : </b></td><td><?=$opts['general-004']?></td></tr> 
				<tr><td><b>Hosting : </b></td><td><?=$opts['general-005']?></td></tr> 
				<tr><td><b>Intended/reasonable time span for the project : </b></td><td><?=$opts['general-006']?></td></tr> 	
		</table>
		
			<br>

		<!-- site redesign -->
		<?if($opts['redesign-001'] == 'yes') {?>
		<table width="600" style="font-size: 11px; font-family: Helvetica; color: #002a44; background-color: #b6bec4; border: 1px solid black;" cellspacing="10" cellpadding = "5">
			<th colspan = "2"><h2 style = "color: #002a44"><h2>SITE REDESIGN </h2></th>
				<tr><td><b>Main goal for this redesign : </b></td></tr><tr><td><?=$opts['redesign-002']?></td></tr> 
				<tr><td><b>Aspects of site that are <u>succesful</u> and why? : </b></td><tr></tr><td><?=$opts['redesign-003']?></td></tr> 
				<tr><td><b>Aspects of site that are <u>unsuccesful</u> and why? : </b></td></tr><tr><td><?=$opts['redesign-004']?></td></tr> 
				<tr><td><b>About the content : </b></td></tr><tr><td><?=$opts['redesign-005']?></td></tr> 				
		</table>	
		<?}?>

			<br>

		<!-- project goals/business objectives -->
		<table width="600" style="font-size: 11px; font-family: Helvetica; color: #002a44; background-color: #b6bec4; border: 1px solid black;" cellspacing="10" cellpadding = "5">
			<th colspan = "2"><h2 style = "color: #002a44"><h2>PROJECT GOALS / BUSINESS OBJECTIVES </h2></th>
				<tr><td><b>Site concept : </b></td></tr><tr><td><?=$opts['objective-001']?></td></tr> 
				<tr><td><b>Main objective : </b></td></tr><tr><td><?=$opts['objective-002']?></td></tr> 
				<tr><td><b>KPI's : </b></td></tr><tr><td><?=$opts['objective-003']?></td></tr> 
				<tr><td><b>Considerations that could impact project schedule : </b></td></tr><tr><td><?=$opts['objective-004']?></td></tr> 	
		</table>

			<br>

		<!-- ecommerce -->
		<?if($opts['ecommerce-001'] == 'yes') {?>
		<table width="600" style="font-size: 11px; font-family: Helvetica; color: #002a44; background-color: #b6bec4; border: 1px solid black;" cellspacing="10" cellpadding = "5">
			<th colspan = "2"><h2 style = "color: #002a44"><h2>E-COMMERCE </h2></th>
				<tr><td><b>Estimate of total number of products : </b></td><td><?=$opts['ecommerce-002']?></td></tr> 
				<tr><td><b> Estimate of total number of categories : </b></td><td><?=$opts['ecommerce-003']?></td></tr> 
				<?if($opts['ecommerce-004'] == 'yes') { ?>
					<tr><td><b>Merchant account with an online payment gateway : </b></td><td><?=$opts['ecommerce-005']?></td></tr> 
				<?}else{?>	
					<tr><td><b>Merchant account with an online payment gateway : </b></td><td>No</td></tr> 
				<?}?>			
		</table>	
		<?}?>

			<br>

		<!-- target audience -->
		<table width="600" style="font-size: 11px; font-family: Helvetica; color: #002a44; background-color: #b6bec4; border: 1px solid black;" cellspacing="10" cellpadding = "5">
			<th colspan = "2"><h2 style = "color: #002a44"><h2>TARGET AUDIENCE </h2></th>
			<?php
			 $i = 0;
			 $profile = 0; 
			while($i<count($opts['field'])) {
				if($i == 0 || $i%7==0){
					$profile++;
			?>

				<tr><h3>Profile <?=$profile?> </h3></tr>
					<tr><td>Gender : </td><td><?=$opts['field'][$i]?></td></tr> 
					<tr><td>Age : </td><td><?=$opts['field'][$i+1]?></td></tr> 
					<tr><td>Location : </td><td><?=$opts['field'][$i+2]?></td></tr> 
					<tr><td>Job Title : </td><td><?=$opts['field'][$i+3]?></td></tr> 	
					<tr><td width = '200'>Level of experience using the internet : </td><td><?=$opts['field'][$i+4]?></td></tr> 
					<tr>Actions user should perform when visiting the site : </td><td><?=$opts['field'][$i+5]?></td></tr> 	
					<tr>Key reasons the user chooses ou crompany's products and/or services</td><td><?=$opts['field'][$i+6]?></td></tr> 
			
			<?}$i++;}?>	

			<tr><td>Number of people visiting the site : </td><td><?=$opts['target-002']?></td></tr>		
		</table>

			<br> 

		<!-- Look and feel -->
		<table width="600" style="font-size: 11px; font-family: Helvetica; color: #002a44; background-color: #b6bec4; border: 1px solid black;" cellspacing="10" cellpadding = "5">
			<th colspan = "2"><h2 style = "color: #002a44"><h2>LOOK, FEEL, AND SITE CONTENT </h2></th>
				<tr><td width = '200'><b>Brand guidelines that should be adhered to : </b></td><td><?=$opts['look-001']?></td></tr> 
				<tr><td><b>Words that describe end result of project look and feel : </b></td><td><?=$opts['look-002']?></td></tr> 
				<tr><td><b>Personality of the website : </b></td><td><?=$opts['look-003']?></td></tr> 
				<tr><td><b>How our company sets itself apart from the competition : </b></td><td><?=$opts['look-004']?></td></tr>
				<tr><td><b>URLs of sites that are compelling and why : </b></td><td><?=$opts['look-005']?></td></tr>
				<tr><td><b>Vision on pages and structure : </b></td><td><?=$opts['look-006']?></td></tr>
				<!-- Site map? -->
				<tr><td><b>Static or CMS : </b></td><td><?=$opts['look-008']?></td></tr>
		</table>

			<br>

		<!-- Website functionality -->
		<table width="600" style="font-size: 11px; font-family: Helvetica; color: #002a44; background-color: #b6bec4; border: 1px solid black;" cellspacing="10" cellpadding = "5">
			<th colspan = "2"><h2 style = "color: #002a44"><h2>WEBSITE FUNCTIONALITY </h2></th>

			<?
			$val = 0;
			for($i = 1; $i<=28; $i+=2) {
				$radio = 'functionality-00'.$i;
				$oneAhead = $i+1;
				$field = 'functionality-00'.$oneAhead;
				$values = array("Search", "Online Form(s)", "Specific calls to action", "Shopping cart / ordering", "Subscription to newsletter", "Downloadable Files", "Multilingual Requirements", "Printer friendly function", "Animations and videos", "Social Media", "News and media and/or blog", "User login / member section", "Special bespoke tools", "Integration with third party");
				if($opts[$radio] == 'yes') { 
			?>
					<tr><td><b><?=$values[$val] . " : "?></b> </td></tr><tr><td><?=$opts[$field]?></td></tr> 
				<?}else {?> <tr><td><b><?=$values[$val] . " : "?></b></td></tr><tr><td>Don't need it!</td></tr>  
			<? 
				}

				$val++;
			}
			?>

		</table>

			<br>

		<!-- Key contacts -->
		<table width="600" style="font-size: 11px; font-family: Helvetica; color: #002a44; background-color: #b6bec4; border: 1px solid black;" cellspacing="10" cellpadding = "5">
			<th colspan = "3"><h2 style = "color: #002a44"><h2>KEY CONTACTS </h2></th>
				<tr><td><b>Main decision maker for approvals of cost, design etc. : </b> </td></tr> <tr><td><?="Name : ".$opts['contacts-001']?><br><?="Contact No. : " . $opts['contacts-002']?></td></tr> 
				<tr><td><b>Person responsible for delivery of the website content : </b> </td></tr> <tr><td><?="Name : ".$opts['contacts-001']?><br><?="Contact No. : " . $opts['contacts-002']?></td></tr> 
				<tr><td><b>Person responsible for maintaining the website once complete : </b> </td></tr> <tr><td><?="Name : ".$opts['contacts-001']?><br><?="Contact No. : " . $opts['contacts-002']?></td></tr> 
				
		</table>

			<br>

		<?if(isset($opts['comments-001']) && !empty($opts['comments-001'])) {?>
			<table width="600" style="font-size: 11px; font-family: Helvetica; color: #002a44; background-color: #b6bec4; border: 1px solid black;" cellspacing="10" cellpadding = "5">
				<th colspan = "2"><h2 style = "color: #002a44"><h2>ADDITIONAL COMMENTS </h2></th>
				<tr><td><?=$opts['comments-001']?></td></tr>
			</table>
		<?}?>

		<? 
			$this->content = ob_get_contents();
			ob_clean();

		if(!isset($file['error'])){
			if(isset($file['full_path'])) $this->attach=$file['full_path'];
			
		}

		return $this->_send_email();

	}
	
	private function _send_email() {
		$this->CI->load->library('email');	
		$this->CI->email->to($this->to); 
		$this->CI->email->from($this->from_email,$this->from); 
		$this->CI->email->subject($this->subject);
		$this->CI->email->message($this->content); 	
		if($this->attach != null){
			$this->CI->email->attach($this->attach);
		}
		
		if($this->CI->email->send()) {
			return true;
		} else  {
			$this->debug_output=$this->CI->email->print_debugger();
			return false;
		}
		
	}
}