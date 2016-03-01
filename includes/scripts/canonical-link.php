<?php if($page=="index"):?>
<link rel="canonical" href="<?php echo "http://{$_SERVER["HTTP_HOST"]}/";?>" />
<?php else: ?>
<link rel="canonical" href="<?php echo "http://{$_SERVER["HTTP_HOST"]}{$_SERVER["PHP_SELF"]}";?>" />
<?php endif;?>


