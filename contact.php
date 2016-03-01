<?php 
	include("includes/scripts/application.php");
	include("site_specific/defines.php");
	
	$page = pagevar();
	$subpage = pagevar();
	$pagekw = str_replace("-", " ", $subpage);
	//overwrite the following line to change $pagekw from the page name
	$pagekw = ucwords($pagekw);
	$messageBar = "Get friendly, helpful and expert advice from Mr Vindla, or book today!";

?>

<!DOCTYPE html>
<html lang="en">

<head>

<title>

	<?php echo "$companyName - $companyTagLine"; ?>

</title>

	<meta charset="UTF-8">
    
	<?php
		include("includes/meta-tags/default/description.php");
		include("includes/meta-tags/default/keywords.php");
		include("includes/meta-tags/default/general.php");
		include("includes/head/stylesheets.php");
		include("includes/head/scripts.php");
		include("includes/head/analytics.php");
	?>
	
</head>

<body id="<?php echo $page; ?>" class="<?php echo $subpage; ?>">

<div id="outer-container">

	<div id="container">

		
		<?php include ("includes/content/header.php"); ?>  
		
			<div id="main">
            
            	<?php include ("includes/content/runner.php"); ?>
			
				<h1>Request More Information</h1>
                
                <p>To request more information about Mr Srini Vindla or his procedures and how they could benefit you, please call or email using the form below.</p>
				
				<?php include ("includes/forms/contact-form.php"); ?>
			
			</div>
            
            
            <div class="clearfix"></div>
			
         <?php include("includes/content/footer.php"); ?>
	</div>
    

</div>

</body>

</html>