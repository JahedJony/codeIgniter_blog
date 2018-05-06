<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Admin Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/themes/cerulean/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/themes/cerulean/charisma-app.css" rel="stylesheet" >

	<link href="<?php echo base_url();?>css/3rd-party/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/3rd-party/fullcalendar.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/3rd-party/fullcalendar.print.css" rel="stylesheet"  media="print">
	<link href="<?php echo base_url();?>css/3rd-party/chosen.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/3rd-party/uniform.default.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/3rd-party/colorbox.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/3rd-party/jquery.cleditor.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/3rd-party/jquery.noty.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/3rd-party/noty_theme_default.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/3rd-party/elfinder.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/3rd-party/elfinder.theme.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/3rd-party/jquery.iphone.toggle.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/3rd-party/opa-icons.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/3rd-party/uploadify.css" rel="stylesheet">

	<!-- The fav icon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.ico">

</head>

<body>
	<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"> <img alt="Charisma Logo" src="<?php echo base_url();?>img/logo20.png" /> <span>Charisma</span></a>

				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> <?php echo $this->session->userdata('admin_full_name'); ?></span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo base_url(); ?>super_admin/logout">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->

				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="#">Visit Site</a></li>
						<li>
							<form class="navbar-search pull-left">
								<input placeholder="Search" class="search-query span2" name="query" type="text">
							</form>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
	<div class="container-fluid">
		<div class="row-fluid">

			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/add_category"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add Category</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/manage_category"><i class="icon-edit"></i><span class="hidden-tablet"> Manage Category</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/add_blog"><i class="icon-list-alt"></i><span class="hidden-tablet"> Add Blog</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url(); ?>/super_admin/manage_blog"><i class="icon-font"></i><span class="hidden-tablet"> Manage Blog</span></a></li>
						<li><a class="ajax-link" href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
						<li class="nav-header hidden-tablet">Sample Section</li>
						<li><a class="ajax-link" href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a class="ajax-link" href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a class="ajax-link" href="grid.html"><i class="icon-th"></i><span class="hidden-tablet"> Grid</span></a></li>
						<li><a class="ajax-link" href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="tour.html"><i class="icon-globe"></i><span class="hidden-tablet"> Tour</span></a></li>
						<li><a class="ajax-link" href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="error.html"><i class="icon-ban-circle"></i><span class="hidden-tablet"> Error Page</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
					</ul>
					<label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->

			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>

			<div id="content" class="span10">
			<!-- content starts -->
				<?php echo $admin_maincontent; ?>
			<!-- content ends -->
			</div><!--/#content.span10-->
		</div><!--/fluid-row-->

		<hr>

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>

		<footer>
			<p class="pull-left">&copy; <a href="http://usman.it" target="_blank">Muhammad Usman</a> 2012</p>
			<p class="pull-right">Powered by: <a href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
		</footer>

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
	<script src='<?php echo base_url();?>js/3rd-party/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='<?php echo base_url();?>js/3rd-party/jquery.dataTables.min.js'></script>

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


</body>
</html>
