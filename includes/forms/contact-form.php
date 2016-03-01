<?php

// *********** CONFIG OPTIONS ***********

$emailTo = '$companyEmail';

$services = array(
	"Laparoscopic Procedures",
	"Fertility",
	"Recurrent Miscarriages",
	"MyoSure Treatment",
	"General Enquiry"
);

$emailSubject = "Premier Gynaecology Enquiry";

$emailFrom = $companyEmail;

$replyTo = 'Email';

$submitInput = 'submit_contact_form';

$destination = 'thankyou.php';

// Required fields for PHP validation
$requiredArray = array(
  'Name'	  =>  'Please fill in your name',
  'Telephone' =>  'Please fill in your phone number',
  'Email'     =>  'Please fill in your e-mail address',
  'Enquiry'   =>  'Please fill in the enquiry field',
);

// Input names in this array will not be sent in the email
$excludeArray = array('botBuster', 'submit_contact_form');

// What variable to put errors into
$errorVar = 'resultsHtml';

// *********** END OF CONFIG ***********

include(dirname(__FILE__) . '/contact-form-mailer.php');

?>

<div id="form">
	
<?php if (isset($resultsHtml)): ?>
	<?php echo $resultsHtml; ?>
<?php endif; ?>

<form id="contactForm" method="post" action="#results">

<!-- Bot Buster -->
	<fieldset class="botBuster">
		<legend>Security Check</legend>
		<label for="botBuster">This is to check you are not spamming, please do NOT fill this field in!
			<input class="text-input" type="text" name="botBuster" id="botBuster"/>
		</label>
	</fieldset>
<!-- End Bot Buster -->

	<div id="contactFormLeft">
	<fieldset id="contactDetails">
		<div class="contactDetailsLeft">
		<label for="Name">Name *</label>
		<input class="validate[required,length[0,100]] text-input" type="text" name="Name" id="Name" />
		</div>
		<div class="contactDetailsRight">
		<label for="Postcode">Postcode</label>
		<input type="text" name="Postcode" id="Postcode" />
		</div>
		<div class="contactDetailsLeft">
		<label for="Telephone">Telephone *</label>
		<input class="validate[required,custom[telephone]] text-input" type="text" name="Telephone" id="Telephone" />
		</div>
		<div class="contactDetailsRight">
		<label for="Email">Email *</label>
		<input class="validate[required,custom[email]] text-input" type="text" name="Email" id="Email"  />
		</div>
	</fieldset>
    
	</div>
	<div id="contactFormRight">
    <p id="whatareyoulookingfor">What are you looking for?</p>
	<fieldset id="looking-for">
		<?php
		if(isset($services)){
			$count=1;
			foreach($services as $service){
				?>
				<div class="interestedIn<?php if($count % 2){echo"Left";}else{echo"Right";}?>">
					<label for="<?php echo str_replace(" ", "_", $service); ?>">
						<input class="checkbox" type="checkbox" value="<?php echo $service; ?>" name="Looking For <?php echo $service; ?>" id="<?php echo str_replace(" ", "_", $service); ?>" />
						<?php echo $service; ?>
					</label>
				</div>
				<?php
				$count++;
			}
		}
		?>
	</fieldset>		
	
	</div> 
    <label class="enquiry" for="Enquiry">Further Details *</label>
	<fieldset>
			<textarea rows="5" cols="31" class="validate[required,length[1,1000]] text-input" name="Enquiry" id="Enquiry"></textarea>

	</fieldset> 
	<fieldset>
	<input name="submit_contact_form" class="submit" type="submit" value="Contact Us" /> 
	</fieldset> 
</form>

</div>

<script type="text/javascript">
	$(document).ready(function() {
		$("#contactForm").validationEngine();
	});
</script>	