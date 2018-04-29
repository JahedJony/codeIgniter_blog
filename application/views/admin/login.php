<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Free HTML5 Bootstrap Admin Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/themes/cerulean/bootstrap.css" rel="stylesheet" id="bs-css">
	<link href="<?php echo base_url();?>css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/themes/cerulean/charisma-app.css" rel="stylesheet" id="th-css">

	<link href="<?php echo base_url();?>css/3rd-party/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/3rd-party/chosen.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/3rd-party/uniform.default.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/3rd-party/colorbox.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/3rd-party/jquery.iphone.toggle.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/3rd-party/opa-icons.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/3rd-party/uploadify.css" rel="stylesheet">

	<!-- The fav icon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.ico">

</head>

<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>Welcome to Charisma</h2>
				</div><!--/span-->
			</div><!--/row-->
			<div class="row-fluid">
				<div class="well center login-box">
					<div class="alert alert-info">
						Please login with your Email and Password.
						<h5 style="color:red">
							<?php
								$exc=$this->session->userdata('exception');
								if($exc){
									echo $exc;
									$this->session->unset_userdata('exception');
								}
							?>
						</h5>
						<h5 style="color:green">
							<?php
								$msg=$this->session->userdata('message');
								if($msg){
									echo $msg;
									$this->session->unset_userdata('message');
								}
							?>
						</h5>
					</div>
					<form class="form-horizontal" action="<?php echo base_url(); ?>admin/admin_login_check" method="post">
						<fieldset>
							<div class="input-prepend" title="Username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="admin_email" id="admin_email" type="text" value="admin email" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="admin_password" id="admin_password" type="password" value="admin123456" />
							</div>
							<div class="clearfix"></div>

							<div style="width:100%;">
								<div class="remember">
									<label for="remember"><input type="checkbox" id="remember" name="remember" />Remember me</label>
								</div>
								<div class="clearfix"></div>
							</div>

							<p class="center span5">
								<button type="submit" class="btn btn-primary" id="login">Login</button>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->
		</div><!--/fluid-row-->

	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="<?php echo base_url();?>js/3rd-party/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?php echo base_url();?>js/3rd-party/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?php echo base_url();?>js/3rd-party/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="<?php echo base_url();?>js/3rd-party/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="<?php echo base_url();?>js/3rd-party/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="<?php echo base_url();?>js/3rd-party/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?php echo base_url();?>js/3rd-party/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?php echo base_url();?>js/3rd-party/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?php echo base_url();?>js/3rd-party/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?php echo base_url();?>js/3rd-party/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?php echo base_url();?>js/3rd-party/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="<?php echo base_url();?>js/3rd-party/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?php echo base_url();?>js/3rd-party/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="<?php echo base_url();?>js/3rd-party/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="<?php echo base_url();?>js/3rd-party/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="<?php echo base_url();?>js/3rd-party/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src="<?php echo base_url();?>js/3rd-party/fullcalendar.min.js"></script>
	<!-- data table plugin -->
	<script src="<?php echo base_url();?>js/3rd-party/jquery.dataTables.min.js"></script>

	<!-- chart libraries start -->
	<script src="<?php echo base_url();?>js/3rd-party/excanvas.js"></script>
	<script src="<?php echo base_url();?>js/3rd-party/jquery.flot.min.js"></script>
	<script src="<?php echo base_url();?>js/3rd-party/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url();?>js/3rd-party/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url();?>js/3rd-party/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="<?php echo base_url();?>js/3rd-party/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?php echo base_url();?>js/3rd-party/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="<?php echo base_url();?>js/3rd-party/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="<?php echo base_url();?>js/3rd-party/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="<?php echo base_url();?>js/3rd-party/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="<?php echo base_url();?>js/3rd-party/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="<?php echo base_url();?>js/3rd-party/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?php echo base_url();?>js/3rd-party/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?php echo base_url();?>js/3rd-party/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="<?php echo base_url();?>js/3rd-party/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?php echo base_url();?>js/3rd-party/jquery.history.js"></script>

	<!-- application script for Charisma demo -->
	<script src="<?php echo base_url();?>js/charisma.js"></script>
	<!-- ONLY FOR login.html purposes! -->
	<script src="<?php echo base_url();?>js/login.js"></script>


</body>
</html>
