<?php 
	include("includes/scripts/application.php");
	include("site_specific/defines.php");
	
	$page = pagevar();
	$subpage = pagevar();
	$pagekw = str_replace("-", " ", $subpage);
	//overwrite the following line to change $pagekw from the page name
	$pagekw = ucwords($pagekw);
	$messageBar = "Welcome to Mr Vindla - Gynaecology. Professional, Discreet, Empathic";

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
    
    <meta name="google-site-verification" content="VShNNoWp9ddiPqrw3kN2UDu7-EKTr3N3cBZIV2OuK5w" />
	
</head>

<body id="<?php echo $page; ?>" class="<?php echo $subpage; ?>">

<div id="outer-container">

	<div id="container">

		
		<?php include ("includes/content/header.php"); ?>

        <?php include ("includes/content/sidebar.php"); ?>
        
		
			<div id="main">
            
            	<?php include ("includes/content/runner.php"); ?>
			
				<h1>Welcome to Mr Srini Vindla, Consultant Gynaecologist</h1>
				
				<img src="images/layout/happy2.jpg" />
                
                <p>Mr Srini Vindla, Consultant Gynaecologist, offers a wide ranging personalised service aimed at providing health care for women.</p>
                
                
                <p>As well as providing generalised gynaecological services, Mr Vindla specialises in treatments for heavy periods, endometriosis, <a href="recurrent-miscarriages.php">recurrent miscarriages</a>, ovarian cysts and fertility issues including fertility assessment.</p>
                
                
                <p>Mr Vindla specialises in keyhole surgery which can be used to treat many of the conditions outlined above.</p>
                
                <p>Mr Vindla also has specialist knowledge of hysteroscopic surgery which involves treating conditions that affect the cavity of the womb. These conditions can lead to various problems such as heavy bleeding, bleeding in-between periods as well as affecting issues such as fertility and increasing the risk of miscarriage.</p>

				<p>Mr Vindla is a Registered Provider for all the major medical insurance companies and is a Fee Assured Consultant with BUPA 
</p>

				<h1>Testimonials</h1>
                
                <img src="images/layout/headlines.jpg" />

				<p>Diana Noufal, 47</p>
					
                <p class="quote">"It took just a wave of a wand and my painful fibroid was gone"</p>
                
                <p><a href="http://www.dailymail.co.uk/health/article-2174471/Me-operation-It-took-just-wave-wand-painful-fibroid-gone.html" target="_blank">Click here</a> to read Diana's story</p>

				<div id="daily-mail"></div>
                
			
			</div>
            
            
            <div class="clearfix"></div>
			
         <?php include("includes/content/footer.php"); ?>
	</div>
    

</div>

</body>

</html>