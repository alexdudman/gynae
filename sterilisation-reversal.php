<?php 
	include("includes/scripts/application.php");
	include("site_specific/defines.php");
	
	$page = pagevar();
	$subpage = pagevar();
	$pagekw = str_replace("-", " ", $subpage);
	//overwrite the following line to change $pagekw from the page name
	$pagekw = ucwords($pagekw);
	$messageBar = "Mr Vindla is able to offer a reversal of sterilisation. Professional, Discreet, Empathic";

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
			
				<h1>Reversal of Sterilisation</h1>
				
                <img src="images/layout/reversal.jpg" />
                
				<p class="bold">Mr Vindla is able to perform reversal of sterilisation in women who have had this procedure performed previously.  Microscopic techniques are employed to open up the Fallopian tubes again to enable a pregnancy to be achieved after sterilisation.</p>
                
                <p>Sometimes as circumstances change a woman may wish to restore her fertility after having undergone a sterilisation operation.  Under these circumstances Mr Vindla is able to offer a reversal of sterilisation. The operation involves an overnight stay in the hospital.  Specialist microsurgery is required to open up and rejoin the tubes. Mr Vindla has performed this type of surgery for many years with great success. Not all woman are suitable for this type of procedure and careful counselling with a comprehensive pre-operative evaluation is vital. Mr Vindla is able to offer this service so that a couple will have knowledge of the best option for fertility restoration.</p>
			
			</div>
            
            
            <div class="clearfix"></div>
			
         <?php include("includes/content/footer.php"); ?>
	</div>
    

</div>

</body>

</html>