<script type="text/javascript" src="includes/scripts/jquery.min.js"></script>
<script src="includes/scripts/jquery.nivo.slider.js" type="text/javascript"></script>


<script type="text/javascript" src="includes/scripts/jquery.cookie.js"></script>
<script type="text/javascript" src="includes/scripts/jquery.cookiecuttr.js"></script>

<script type="text/javascript">
if (jQuery.cookie('cc_cookie_accept') == "cc_cookie_accept") {}
$(document).ready(function () {
$.cookieCuttr();
//setting automatic cookies:
setTimeout(function () {
   jQuery('.cc-cookie-accept').trigger('click');
}, 12000);
}); 
</script>

<script type="text/javascript" src="includes/scripts/run.js"></script>

<script type="text/javascript">
$(function() {
$('#slider').nivoSlider({
		effect: 'sliceDownLeft',
		pauseTime:5500});
});
</script>

<script type="text/javascript" src="includes/scripts/jquery.validationEngine.js"></script>

<?php include("includes/scripts/canonical-link.php"); ?>