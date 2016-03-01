jQuery(document).ready(function(){	

$(function() {
            $('#main').hide().fadeIn(450);
     });

$("ul#navigation li a.laparoscopic-procedures-a").hover(function() {
	$("#laparoscopic-dropdown").stop(true, true).slideToggle('medium'); },
	function() {
	$("#laparoscopic-dropdown").stop(true, true).slideToggle('medium');
});

$("#laparoscopic-dropdown").hover(function() {
$(this).stop(true, true).show(); },
function() {
$(this).stop(true,true).slideUp('medium');

});
			
});