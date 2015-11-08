<?php $this->start('meta'); ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<?php $this->end(); ?>




<?php $this->start('css'); ?>
<?php echo $this->Html->css('sql.log'); ?>
<!-- Bootstrap Core CSS -->
<link href="<?php echo WWW_ROOT; ?>sb-admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- MetisMenu CSS -->
<link href="<?php echo WWW_ROOT; ?>sb-admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
<?php if (!empty($incElement)) : ?>
	<!-- Include CSS -->
	<?php echo $this->element('css/' . $incElement); ?>
<?php endif; ?>
<!-- Custom CSS -->
<link href="<?php echo WWW_ROOT; ?>sb-admin/dist/css/sb-admin-2.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="<?php echo WWW_ROOT; ?>sb-admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php $this->end(); ?>





<?php $this->start('script'); ?>
<!-- jQuery -->
<script src="<?php echo WWW_ROOT; ?>sb-admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo WWW_ROOT; ?>sb-admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo WWW_ROOT; ?>sb-admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>
<?php if (!empty($incElement)) : ?>
	<!-- Include Script -->
	<?php echo $this->element('script/' . $incElement); ?>
<?php endif; ?>
<!-- Custom Theme JavaScript -->
<script src="<?php echo WWW_ROOT; ?>sb-admin/dist/js/sb-admin-2.js"></script>
<?php
$this->end();