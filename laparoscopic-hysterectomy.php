<?php 
	include("includes/scripts/application.php");
	include("site_specific/defines.php");
	
	$page = 'laparoscopic-procedures';
	$subpage = pagevar();
	$pagekw = str_replace("-", " ", $subpage);
	//overwrite the following line to change $pagekw from the page name
	$pagekw = ucwords($pagekw);
	$messageBar = "Specialist in Laparoscopic Hysterectomy in Nottingham. Professional, Discreet and Empathic";

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
			
				<h1>Laparoscopic Hysterectomy</h1>
                
                <img src="images/layout/one.jpg" />
				
				<p>Some women require a hysterectomy (removal of the womb). Traditionally this requires a big incision and recovery that can be as long as three months; normal life is put on hold as a result. A hysterectomy can be performed via keyhole surgery which offers many advantages. The incisions are smaller and very discreet; you are home after the first day back in the comfort of your own environment; recovery, on average takes two to four weeks so that normal activity and reduction in pain is significantly better.</p>
                
                <p>Mr Vindla has recognised expertise in this type of procedure. Not only does he perform the procedure but he has taught both junior doctors and consultants in this procedure.</p>
			
			</div>
            
            
            <div class="clearfix"></div>
			
         <?php include("includes/content/footer.php"); ?>
	</div>
    

</div>

</body>

</html>