<?php if($page=="contact"): ?>
<div id="runner">
	<div id="contact-runner-left">
		<p id="email-runner"><a href="mailto:<?php echo $companyEmail; ?>">Email Mr Vindla</a></p>
	</div>
    <div id="contact-runner-right">
    	<h1>Make An Appointment</h1>
    	<p id="runner-description">To book an appointment, please call Susan Ware on the following number.</p>
    	<p id="phone-runner"><?php echo $phonenumber; ?></p>
    </div>
</div>

<div class="clearfix"></div>
<?php else: ?>

<div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                    <img src="images/imgmain/slide1.jpg" alt="Specialist in Hysteroscopic Procedures" title="Specialist in Hysteroscopic Procedures" />
                    <img src="images/imgmain/slide2.jpg" alt="Specialist in Laparoscopic Procedures" title="Specialist in Laparoscopic Procedures" />
                    <img src="images/imgmain/slide3.jpg" alt="Fertility counselling and treatment" title="Fertility counselling and treatment" />
                    <img src="images/imgmain/slide4.jpg" alt="BUPA Premier Consultant" title="BUPA Premier Consultant" />                </div>
</div>
                
                


<?php endif; ?>