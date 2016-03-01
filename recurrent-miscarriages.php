<?php 
	include("includes/scripts/application.php");
	include("site_specific/defines.php");
	
	$page = pagevar();
	$subpage = pagevar();
	$pagekw = str_replace("-", " ", $subpage);
	//overwrite the following line to change $pagekw from the page name
	$pagekw = ucwords($pagekw);
	$messageBar = "Reduce the chances of a further miscarriage with Mr Vindla. Professional, Discreet and Empathic";

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

        <?php include ("includes/content/sidebar.php"); ?>
        
		
			<div id="main">
            
            	<?php include ("includes/content/runner.php"); ?>
			
				<h1>Recurrent Miscarriages</h1>
                
                <img src="images/layout/happy.jpg" />
				
				<p>Mr Vindla has an interest in recurrent miscarriages. </p>
                
                <p>Recurrent miscarriages are distressing for those who suffer them.  Mr Vindla offers a service that includes comprehensive  investigation of the causes of this condition. A plan to reduce the chances of a further miscarriage will then be put in place to be started with the next pregnancy.</p>
			
			</div>
            
            
            <div class="clearfix"></div>
			
         <?php include("includes/content/footer.php"); ?>
	</div>
    

</div>

</body>

</html>