<div id="outer-footer">

	<div id="footer">
	
		<div class="col" id="footer-services">
		
			<p class="title">Services</p>
		
			<ul>
			
				<?php include("includes/content/nav.php"); ?>
			
			</ul>      
			
		</div>  	
	
		
		
		<div class="col" id="footer-address">
		
			<p class="title">Address</p>
		
			<p><strong><?php echo $companyName; ?></strong>,
			<br /><?php echo nl2br ($companyAddress); ?></p>
			
		</div>
		
		<div class="col" id="footer-further-information">
		
			<p class="title">Further Information</p>
		
			<ul>
		
				<li><a href="links.php">Links</a></li>
				<li><a href="cookies-privacy-policy.php">Cookies &amp; Privacy Policy</a></li>
				<li><a href="https://plus.google.com/101486033925978792164/about">Google+</a></li>
				
			</ul>
			
		</div>
		
		<div id="footer-bottom">
			
			<p><strong>Telephone Secretary on</strong> <?php echo $phonenumber; ?> &bull; <strong>Email</strong> <a href="mailto:<?php echo $companyEmail; ?>"><?php echo $companyEmail; ?></a></p>
		
			
			
			<p>&copy; <?php echo $companyName; ?> <?php echo date("Y"); ?> All Rights Reserved.</p>
			
		</div>
		
	<div class="clearfix"></div>
	
	</div>

</div>