<?php 
	include("includes/scripts/application.php");
	include("site_specific/defines.php");
	
	$page = pagevar();
	$subpage = pagevar();
	$pagekw = str_replace("-", " ", $subpage);
	//overwrite the following line to change $pagekw from the page name
	$pagekw = ucwords($pagekw);
	$messageBar = "Specialist in Laparoscoic and Hysteroscopic Procedures, friendly, helpful and professional";

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
			
				<h1>About Mr Vindla</h1>
                
				
				<p>Mr Vindla qualified from the Royal Free Hospital in London in 1989. He trained in Obstetrics and Gynaecology in Nottingham where he gained an interest in treating many gynaecological conditions using keyhole surgery and also hysteroscopic techniques which involve passing a telescope into the womb through the vagina.</p>
                  
                <img src="images/layout/two.jpg" />
                <p>He has continued this interest as a consultant. He has an NHS practice in Sherwood Forest Hospitals NHS Trust and also a private practice at the Nottingham Woodthorpe Hospital (Ramsay Health), BMI The Park Hospital and at Nottingham Road Clinic, Mansfield.</p>
                
                
                <p>At the Nottingham Road Clinic Mr Vindla provides an IVF satellite centre for the biggest provider of IVF in the UK – CARE. Mr Vindla is an Examiner for the Royal College of Obstetricians & Gynaecologists. He trains junior doctors in performing keyhole gynaecological surgery and hysteroscopic surgery and he also has been appointed as Scientific Advisor to HOLOGIC, a women's healthcare company.</p>
			
			</div>
            
            
            <div class="clearfix"></div>
			
         <?php include("includes/content/footer.php"); ?>
	</div>
    

</div>

</body>

</html>