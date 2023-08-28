<!DOCTYPE html>
<html>
<head>
    <title><?php echo e($content->subject); ?></title>
	<style type="text/css">
	   .g-container{
		   padding: 15px 30px;
	   }
	</style>
</head>
<body>
	<div class="g-container">
		<?php echo xss_clean($content->body); ?>

	</div>
</body>
</html><?php /**PATH /home/betarwreality/public_html/resources/views/mail/general_template.blade.php ENDPATH**/ ?>