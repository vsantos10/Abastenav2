
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8">
<title>Abastena</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta content="" name="description">
<meta content="" name="author">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css">
<link href="assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css">
<link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css">
<link href="assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
<link href="assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
<link href="assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css">
<link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css">
<link href="assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
<link href="assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
<link href="assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico">
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body>



<!-- BEGIN HEADER -->
<div class="page-header">
	<!-- BEGIN HEADER TOP -->
	<?php include 'header.html'; ?>
	<!-- END HEADER TOP -->
	<!-- BEGIN HEADER MENU -->
	<div class="page-header-menu">
		<div class="container">
			<!-- BEGIN HEADER SEARCH BOX -->
			<form class="search-form" action="extra_search.html" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Procurar" name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
			</form>
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN MEGA MENU -->
			<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
			<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
				<?php include 'menu.html'; ?>
			<!-- END MEGA MENU -->
		</div>
	</div>
	<!-- END HEADER MENU -->
</div>
<!-- END HEADER -->
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Abastena <i class="fa fa-angle-right"></i> <small><a href="#" class="homelink">home</a></small></h1>
			</div>
			<!-- END PAGE TITLE -->
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">

			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue">
								<div class="visual">
									<i class="fa fa-bar-chart-o"></i>
								</div>
								<div class="details">
									<div class="number">
										567
									</div>
									<div class="desc">
										 Produtores
									</div>
								</div>
								<a class="more" href="listaprodutores.php">
								Ver <i class="m-icon-swapright m-icon-white"></i>
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue">
								<div class="visual">
									<i class="fa fa-bar-chart-o"></i>
								</div>
								<div class="details">
									<div class="number">
										 3523
									</div>
									<div class="desc">
										 Matas
									</div>
								</div>
								<a class="more" href="listamatas.php">
								Ver <i class="m-icon-swapright m-icon-white"></i>
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue">
								<div class="visual">
									<i class="fa fa-bar-chart-o"></i>
								</div>
								<div class="details">
									<div class="number">
										3522
									</div>
									<div class="desc">
										 Matas/Produtores
									</div>
								</div>
								<a class="more" href="mataseprodutores.php">
								Ver <i class="m-icon-swapright m-icon-white"></i>
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue">
								<div class="visual">
									<i class="fa fa-bar-chart-o"></i>
								</div>
								<div class="details">
									<div class="number">
										 5291
									</div>
									<div class="desc">
										 Esp. Povoamento
									</div>
								</div>
								<a class="more" href="esp_povoamento.php">
								Ver <i class="m-icon-swapright m-icon-white"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="dashboard-stat blue">
							<div class="visual">
								<i class="fa fa-bar-chart-o"></i>
							</div>
							<div class="details">
								<div class="number">
									 4694
								</div>
								<div class="desc">
									 Puros e Mistos
								</div>
							</div>
							<a class="more" href="purosemistos.php">
							Ver <i class="m-icon-swapright m-icon-white"></i>
							</a>
						</div>
					</div>

				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue">
						<div class="visual">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="details">
							<div class="number">
								 8
							</div>
							<div class="desc">
								 Mistos não diferenciados
							</div>
						</div>
						<a class="more" href="mistosnaodiferenciados.php">
						Ver <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>

			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="dashboard-stat blue">
					<div class="visual">
						<i class="fa fa-bar-chart-o"></i>
					</div>
					<div class="details">
						<div class="number">
							 119
						</div>
						<div class="desc">
							 BFA
						</div>
					</div>
					<a class="more" href="bfa.php">
					Ver <i class="m-icon-swapright m-icon-white"></i>
					</a>
				</div>
			</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="dashboard-stat blue">
				<div class="visual">
					<i class="fa fa-bar-chart-o"></i>
				</div>
				<div class="details">
					<div class="number">
						416
					</div>
					<div class="desc">
						 Vistorias
					</div>
				</div>
				<a class="more" href="vistorias.php">
				Ver <i class="m-icon-swapright m-icon-white"></i>
				</a>
			</div>
		</div>
	</div>
					<!-- END EXAMPLE TABLE PORTLET-->
					<!-- BEGIN EXAMPLE TABLE PORTLET-->

					<!-- END PORTLET-->
				</div>

					<!-- END PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>

		<!-- BEGIN QUICK SIDEBAR -->
		<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-login"></i></a>
		<div class="page-quick-sidebar-wrapper">
			<div class="page-quick-sidebar">
				<div class="nav-justified">
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
							<a href="#quick_sidebar_tab_1" data-toggle="tab">
							Users <span class="badge badge-danger">2</span>
							</a>
						</li>
						<li>
							<a href="#quick_sidebar_tab_2" data-toggle="tab">
							Alerts <span class="badge badge-success">7</span>
							</a>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							More<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li>
									<a href="#quick_sidebar_tab_3" data-toggle="tab">
									<i class="icon-bell"></i> Alerts </a>
								</li>
								<li>
									<a href="#quick_sidebar_tab_3" data-toggle="tab">
									<i class="icon-info"></i> Notifications </a>
								</li>
								<li>
									<a href="#quick_sidebar_tab_3" data-toggle="tab">
									<i class="icon-speech"></i> Activities </a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#quick_sidebar_tab_3" data-toggle="tab">
									<i class="icon-settings"></i> Settings </a>
								</li>
							</ul>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
							<div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
								<h3 class="list-heading">Staff</h3>
								<ul class="media-list list-items">
									<li class="media">
										<div class="media-status">
											<span class="badge badge-success">8</span>
										</div>
										<img class="media-object" src="assets/admin/layout/img/avatar3.jpg" alt="...">
										<div class="media-body">
											<h4 class="media-heading">Bob Nilson</h4>
											<div class="media-heading-sub">
												 Project Manager
											</div>
										</div>
									</li>
									<li class="media">
										<img class="media-object" src="assets/admin/layout/img/avatar1.jpg" alt="...">
										<div class="media-body">
											<h4 class="media-heading">Nick Larson</h4>
											<div class="media-heading-sub">
												 Art Director
											</div>
										</div>
									</li>
									<li class="media">
										<div class="media-status">
											<span class="badge badge-danger">3</span>
										</div>
										<img class="media-object" src="assets/admin/layout/img/avatar4.jpg" alt="...">
										<div class="media-body">
											<h4 class="media-heading">Deon Hubert</h4>
											<div class="media-heading-sub">
												 CTO
											</div>
										</div>
									</li>
									<li class="media">
										<img class="media-object" src="assets/admin/layout/img/avatar2.jpg" alt="...">
										<div class="media-body">
											<h4 class="media-heading">Ella Wong</h4>
											<div class="media-heading-sub">
												 CEO
											</div>
										</div>
									</li>
								</ul>
								<h3 class="list-heading">Customers</h3>
								<ul class="media-list list-items">
									<li class="media">
										<div class="media-status">
											<span class="badge badge-warning">2</span>
										</div>
										<img class="media-object" src="assets/admin/layout/img/avatar6.jpg" alt="...">
										<div class="media-body">
											<h4 class="media-heading">Lara Kunis</h4>
											<div class="media-heading-sub">
												 CEO, Loop Inc
											</div>
											<div class="media-heading-small">
												 Last seen 03:10 AM
											</div>
										</div>
									</li>
									<li class="media">
										<div class="media-status">
											<span class="label label-sm label-success">new</span>
										</div>
										<img class="media-object" src="assets/admin/layout/img/avatar7.jpg" alt="...">
										<div class="media-body">
											<h4 class="media-heading">Ernie Kyllonen</h4>
											<div class="media-heading-sub">
												 Project Manager,<br>
												 SmartBizz PTL
											</div>
										</div>
									</li>
									<li class="media">
										<img class="media-object" src="assets/admin/layout/img/avatar8.jpg" alt="...">
										<div class="media-body">
											<h4 class="media-heading">Lisa Stone</h4>
											<div class="media-heading-sub">
												 CTO, Keort Inc
											</div>
											<div class="media-heading-small">
												 Last seen 13:10 PM
											</div>
										</div>
									</li>
									<li class="media">
										<div class="media-status">
											<span class="badge badge-success">7</span>
										</div>
										<img class="media-object" src="assets/admin/layout/img/avatar9.jpg" alt="...">
										<div class="media-body">
											<h4 class="media-heading">Deon Portalatin</h4>
											<div class="media-heading-sub">
												 CFO, H&D LTD
											</div>
										</div>
									</li>
									<li class="media">
										<img class="media-object" src="assets/admin/layout/img/avatar10.jpg" alt="...">
										<div class="media-body">
											<h4 class="media-heading">Irina Savikova</h4>
											<div class="media-heading-sub">
												 CEO, Tizda Motors Inc
											</div>
										</div>
									</li>
									<li class="media">
										<div class="media-status">
											<span class="badge badge-danger">4</span>
										</div>
										<img class="media-object" src="assets/admin/layout/img/avatar11.jpg" alt="...">
										<div class="media-body">
											<h4 class="media-heading">Maria Gomez</h4>
											<div class="media-heading-sub">
												 Manager, Infomatic Inc
											</div>
											<div class="media-heading-small">
												 Last seen 03:10 AM
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="page-quick-sidebar-item">
								<div class="page-quick-sidebar-chat-user">
									<div class="page-quick-sidebar-nav">
										<a href="javascript:;" class="page-quick-sidebar-back-to-list"><i class="icon-arrow-left"></i>Back</a>
									</div>
									<div class="page-quick-sidebar-chat-user-messages">
										<div class="post out">
											<img class="avatar" alt="" src="assets/admin/layout/img/avatar3.jpg"/>
											<div class="message">
												<span class="arrow"></span>
												<a href="javascript:;" class="name">Bob Nilson</a>
												<span class="datetime">20:15</span>
												<span class="body">
												When could you send me the report ? </span>
											</div>
										</div>
										<div class="post in">
											<img class="avatar" alt="" src="assets/admin/layout/img/avatar2.jpg"/>
											<div class="message">
												<span class="arrow"></span>
												<a href="javascript:;" class="name">Ella Wong</a>
												<span class="datetime">20:15</span>
												<span class="body">
												Its almost done. I will be sending it shortly </span>
											</div>
										</div>
										<div class="post out">
											<img class="avatar" alt="" src="assets/admin/layout/img/avatar3.jpg"/>
											<div class="message">
												<span class="arrow"></span>
												<a href="javascript:;" class="name">Bob Nilson</a>
												<span class="datetime">20:15</span>
												<span class="body">
												Alright. Thanks! :) </span>
											</div>
										</div>
										<div class="post in">
											<img class="avatar" alt="" src="assets/admin/layout/img/avatar2.jpg"/>
											<div class="message">
												<span class="arrow"></span>
												<a href="javascript:;" class="name">Ella Wong</a>
												<span class="datetime">20:16</span>
												<span class="body">
												You are most welcome. Sorry for the delay. </span>
											</div>
										</div>
										<div class="post out">
											<img class="avatar" alt="" src="assets/admin/layout/img/avatar3.jpg"/>
											<div class="message">
												<span class="arrow"></span>
												<a href="javascript:;" class="name">Bob Nilson</a>
												<span class="datetime">20:17</span>
												<span class="body">
												No probs. Just take your time :) </span>
											</div>
										</div>
										<div class="post in">
											<img class="avatar" alt="" src="assets/admin/layout/img/avatar2.jpg"/>
											<div class="message">
												<span class="arrow"></span>
												<a href="javascript:;" class="name">Ella Wong</a>
												<span class="datetime">20:40</span>
												<span class="body">
												Alright. I just emailed it to you. </span>
											</div>
										</div>
										<div class="post out">
											<img class="avatar" alt="" src="assets/admin/layout/img/avatar3.jpg"/>
											<div class="message">
												<span class="arrow"></span>
												<a href="javascript:;" class="name">Bob Nilson</a>
												<span class="datetime">20:17</span>
												<span class="body">
												Great! Thanks. Will check it right away. </span>
											</div>
										</div>
										<div class="post in">
											<img class="avatar" alt="" src="assets/admin/layout/img/avatar2.jpg"/>
											<div class="message">
												<span class="arrow"></span>
												<a href="javascript:;" class="name">Ella Wong</a>
												<span class="datetime">20:40</span>
												<span class="body">
												Please let me know if you have any comment. </span>
											</div>
										</div>
										<div class="post out">
											<img class="avatar" alt="" src="assets/admin/layout/img/avatar3.jpg"/>
											<div class="message">
												<span class="arrow"></span>
												<a href="javascript:;" class="name">Bob Nilson</a>
												<span class="datetime">20:17</span>
												<span class="body">
												Sure. I will check and buzz you if anything needs to be corrected. </span>
											</div>
										</div>
									</div>
									<div class="page-quick-sidebar-chat-user-form">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Type a message here...">
											<div class="input-group-btn">
												<button type="button" class="btn blue"><i class="icon-paper-clip"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
							<div class="page-quick-sidebar-alerts-list">
								<h3 class="list-heading">General</h3>
								<ul class="feeds list-items">
									<li>
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-info">
														<i class="fa fa-shopping-cart"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 New order received with <span class="label label-sm label-danger">
														Reference Number: DR23923 </span>
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 30 mins
											</div>
										</div>
									</li>
									<li>
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-success">
														<i class="fa fa-user"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 You have 5 pending membership that requires a quick review.
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 24 mins
											</div>
										</div>
									</li>
									<li>
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-danger">
														<i class="fa fa-bell-o"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 Web server hardware needs to be upgraded. <span class="label label-sm label-warning">
														Overdue </span>
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 2 hours
											</div>
										</div>
									</li>
									<li>
										<a href="javascript:;">
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-default">
														<i class="fa fa-briefcase"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 IPO Report for year 2013 has been released.
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 20 mins
											</div>
										</div>
										</a>
									</li>
								</ul>
								<h3 class="list-heading">System</h3>
								<ul class="feeds list-items">
									<li>
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-info">
														<i class="fa fa-shopping-cart"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 New order received with <span class="label label-sm label-success">
														Reference Number: DR23923 </span>
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 30 mins
											</div>
										</div>
									</li>
									<li>
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-success">
														<i class="fa fa-user"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 You have 5 pending membership that requires a quick review.
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 24 mins
											</div>
										</div>
									</li>
									<li>
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-warning">
														<i class="fa fa-bell-o"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
														Overdue </span>
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 2 hours
											</div>
										</div>
									</li>
									<li>
										<a href="javascript:;">
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-info">
														<i class="fa fa-briefcase"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 IPO Report for year 2013 has been released.
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 20 mins
											</div>
										</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
							<div class="page-quick-sidebar-settings-list">
								<h3 class="list-heading">General Settings</h3>
								<ul class="list-items borderless">
									<li>
										 Enable Notifications <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
									</li>
									<li>
										 Allow Tracking <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF">
									</li>
									<li>
										 Log Errors <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
									</li>
									<li>
										 Auto Sumbit Issues <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
									</li>
									<li>
										 Enable SMS Alerts <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
									</li>
								</ul>
								<h3 class="list-heading">System Settings</h3>
								<ul class="list-items borderless">
									<li>
										 Security Level
										<select class="form-control input-inline input-sm input-small">
											<option value="1">Normal</option>
											<option value="2" selected>Medium</option>
											<option value="e">High</option>
										</select>
									</li>
									<li>
										 Failed Email Attempts <input class="form-control input-inline input-sm input-small" value="5"/>
									</li>
									<li>
										 Secondary SMTP Port <input class="form-control input-inline input-sm input-small" value="3560"/>
									</li>
									<li>
										 Notify On System Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
									</li>
									<li>
										 Notify On SMTP Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
									</li>
								</ul>
								<div class="inner-content">
									<button class="btn btn-success"><i class="icon-settings"></i> Save Changes</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END QUICK SIDEBAR -->
	</div>
	<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<!-- BEGIN PRE-FOOTER -->
	<?php include 'footer.html'; ?>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout3/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/index3.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/table-advanced.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo(theme settings page)
   QuickSidebar.init(); // init quick sidebar
   Index.init(); // init index page
   Tasks.initDashboardWidget(); // init tash dashboard widget
	 TableAdvanced.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
