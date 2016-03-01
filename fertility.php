<?php 
	include("includes/scripts/application.php");
	include("site_specific/defines.php");
	
	$page = pagevar();
	$subpage = pagevar();
	$pagekw = str_replace("-", " ", $subpage);
	//overwrite the following line to change $pagekw from the page name
	$pagekw = ucwords($pagekw);
	$messageBar = "IVF treatment in Nottingham, Fertility Counselling and more. Professional, Discreet and Empathic";

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
			
				<h1>Fertility</h1>
                
                <img src="images/layout/fertility.jpg" />
				
				<p class="bold">Mr Vindla performs assessments of fertility including tests for women and men. He is able to discuss fertility potential.</p>
                
                <p>Fertility problems affect 1 in 6 couples and can cause much heartache for affected couples. Mr Vindla has a specialist interest in this area. He is able to offer IVF treatment via Nottingham Road Clinic and CARE who are the largest provider of IVF treatment in the United Kingdom. Apart from IVF via CARE Mr Vindla is able to provide other fertility services.  He can offer fertility counselling involving investigations to look at fertility potential, he can investigate fertility issues and put in place a treatment tailored to the couple's needs. This will be offered by a small and dedicated team who work with Mr Vindla. Mr Vindla and his team will be in the background providing support to help steer couples through this difficult period.</p>
                
                
                
			
			</div>
            
            
            <div class="clearfix"></div>
			
         <?php include("includes/content/footer.php"); ?>
	</div>
    

</div>

</body>

</html>