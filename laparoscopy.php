<?php 
	include("includes/scripts/application.php");
	include("site_specific/defines.php");
	
	$page = 'laparoscopic-procedures';
	$subpage = pagevar();
	$pagekw = str_replace("-", " ", $subpage);
	//overwrite the following line to change $pagekw from the page name
	$pagekw = ucwords($pagekw);
	$messageBar = "Specialist in Laparoscopy in and around Nottingham. Professional, Discreet and Empathic";

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
			
				<h1>Laparoscopy</h1>
                
                <img src="images/layout/book.jpg" />
				
				<p class="bold">A laparoscopy is a keyhole procedure.  The advantages are that the vast majority of women are home on the same day as the surgery, the scars are tiny and recovery is much quicker than surgery involving large incisions.</p>
                
                <p>Mr Vindla is certified by the Royal College of Obstetricians and Gynaecologists as a Laparoscopic Surgeon.  He was trained specifically to undertake procedures via keyhole incisions.
</p>

				<p>Through these incisions many procedures are possible.  Mr Vindla can undertake investigations for pain, to confirm endometriosis and to test fertility potential.  Mr Vindla can also perform procedures such as treatment for endometriosis, removal of cysts on the ovary, operate on the fallopian tubes to improve fertility, and ovaries can removed.  Mr Vindla also has the expertise to perform hysterectomies through small incisions with all the benefits of this type of specialised surgery.
</p>
			
			</div>
            
            
            <div class="clearfix"></div>
			
         <?php include("includes/content/footer.php"); ?>
	</div>
    

</div>

</body>

</html>