<?php 
	include("includes/scripts/application.php");
	include("site_specific/defines.php");
	
	$page = pagevar();
	$subpage = pagevar();
	$pagekw = str_replace("-", " ", $subpage);
	//overwrite the following line to change $pagekw from the page name
	$pagekw = ucwords($pagekw);
	$messageBar = "MyoSure Hysteroscopic Procedure specialist. Professional, Discreet, Empathic";

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
			
				<h1>MyoSure Hysteroscopic Procedures</h1>
				
				<p class="bold">Mr Vindla is an accredited hysteroscopic surgeon which means that he is trained to perform surgery within the womb. This can be used to provide treatment for a variety of conditions such as heavy periods, removal of polyps, to increase fertility and to reduce the risk of miscarriage.</p>
                
                <p>Surgery within the cavity of the womb is a specialist area. Mr Vindla is recognised by the Royal College of Obstetricians and Gynaecologists as a specialist in this area of surgery.  This type of surgery can treat heavy periods, remove polyps and fibroids and can also be used to correct abnormalities in the shape of the womb which may give rise to fertility problems and miscarriage. This surgery has advantages over other types of surgery as the patient can usually get home the same day and recovery is very quick. Mr Vindla has gained expertise in performing this type of surgery under local anaesthetic rather than general anaesthetic if required. Mr Vindla lectures both nationally and internationally on this type of surgery.</p>
                
                <h2>Testimonials</h2>
                
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