<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title><?php echo __($this->action) . __(': Create your own wise_remark list!'); ?></title>
		<?php echo $this->Html->meta('icon'); ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<?php echo $this->Html->css('sql.log'); ?>
		<!-- Bootstrap Core CSS -->
		<?= $this->Html->css('/sb-admin/bower_components/bootstrap/dist/css/bootstrap.min') ?>
		<!-- MetisMenu CSS -->
		<?= $this->Html->css('/sb-admin/bower_components/metisMenu/dist/metisMenu.min') ?>
		<!-- Include CSS -->
		<?php echo $this->fetch('css'); ?>
		<!-- Custom CSS -->
		<?= $this->Html->css('/sb-admin/dist/css/sb-admin-2') ?>
		<!-- Custom Fonts -->
		<?= $this->Html->css('/sb-admin/bower_components/font-awesome/css/font-awesome.min') ?>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php echo $this->Js->writeBuffer(array('cache' => true));	?>
	</head>
	<body>
		<span><?php echo $this->Flash->render(); ?></span>
		<span><?php echo $this->Flash->render('auth'); ?></span>

		<?php echo $this->fetch('content'); ?>

		<!-- jQuery -->
		<?= $this->Html->script('/sb-admin/bower_components/jquery/dist/jquery.min') ?>
		<!-- Bootstrap Core JavaScript -->
		<?= $this->Html->script('/sb-admin/bower_components/bootstrap/dist/js/bootstrap.min') ?>
		<!-- Metis Menu Plugin JavaScript -->
		<?= $this->Html->script('/sb-admin/bower_components/metisMenu/dist/metisMenu.min') ?>
		<!-- Include Script -->
		<?php echo $this->fetch('script'); ?>
		<!-- Custom Theme JavaScript -->
		<?= $this->Html->script('/sb-admin/dist/js/sb-admin-2') ?>
	</body>
</html>
