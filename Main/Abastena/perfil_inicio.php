<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 4.1.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Perfil | Abastena </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="../../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/pages/css/profile.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="../../assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css">
<link href="../../assets/global/css/plugins.css" rel="stylesheet" type="text/css">
<link href="../../assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
<link href="../../assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
<link href="../../assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body>
<!-- BEGIN HEADER -->
<div class="page-header">
	<!-- BEGIN HEADER TOP -->
	<?php 'header.html'; ?>
	<!-- END HEADER TOP -->
	<!-- BEGIN HEADER MENU -->
	<div class="page-header-menu">
		<div class="container">
			<!-- BEGIN HEADER SEARCH BOX -->
			<form class="search-form" action="extra_search.html" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="" name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
			</form>
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN MEGA MENU -->
			<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
			<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
			<div class="hor-menu ">
				<ul class="nav navbar-nav">
					<li class="menu-dropdown mega-menu-dropdown mega-menu-full active">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
						GGFA <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu" style="min-width: 710px">
							<li>
								<div class="mega-menu-content">
									<div class="row">
										<div class="col-md-3">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Produtores</h3>
												</li>
												<li>
													<a href="ecommerce_index.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Lista </a>
												</li>
												<li>
													<a href="ecommerce_orders.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Novo </a>
												</li>
												<li>
													<a href="ecommerce_orders_view.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Totais / Estatística </a>
												</li>
												<li>
													<a href="ecommerce_products.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Pesquisas / Relatórios </a>
												</li>
												<li>
													<a href="ecommerce_products_edit.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Visualizador </a>
												</li>
											</ul>
										</div>
										<div class="col-md-3">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Matas</h3>
												</li>
												<li>
													<a href="ecommerce_index.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Lista </a>
												</li>
												<li>
													<a href="ecommerce_orders.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Novo </a>
												</li>
												<li>
													<a href="ecommerce_orders_view.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Totais / Estatística </a>
												</li>
												<li>
													<a href="ecommerce_products.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Pesquisas / Relatórios </a>
												</li>
												<li>
													<a href="ecommerce_products_edit.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Visualizador </a>
												</li>
											</ul>
										</div>
										<div class="col-md-3">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Planos de Gestão</h3>
												</li>
												<li>
													<a href="layout_click_dropdowns.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Áreas de Conservação </a>
												</li>
												<li>
													<a href="layout_fontawesome_icons.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Áreas de Produção </a>
												</li>
												<li>
													<a href="layout_glyphicons.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Áreas de Protecção </a>
												</li>
												<li>
													<a href="layout_language_bar.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Geral </a>
												</li>
												<li>
													<a href="layout_disabled_menu.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Relatório </a>
												</li>
											</ul>
										</div>
										<div class="col-md-3">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Gestão de Riscos</h3>
												</li>
												<li>
													<a href="layout_click_dropdowns.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Incêndio </a>
												</li>
												<li>
													<a href="layout_fontawesome_icons.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Geomorfológico </a>
												</li>
												<li>
													<a href="layout_glyphicons.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Social </a>
												</li>
												<li>
													<a href="layout_language_bar.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Ambiental </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<li class="menu-dropdown mega-menu-dropdown mega-menu-full ">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
						BFA <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li>
								<div class="mega-menu-content">
									<div class="row">
										<div class="col-md-5">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Fornecedores</h3>
												</li>
												<li>
													<a href="ui_general.html">
													<i class="fa fa-angle-right"></i>
													Lista </a>
												</li>
												<li>
													<a href="ui_buttons.html">
													<i class="fa fa-angle-right"></i>
													Novo </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<li class="menu-dropdown mega-menu-dropdown mega-menu-full">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
						Vistorias <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu" style="min-width: 710px">
							<li>
								<div class="mega-menu-content">
									<div class="row">
										<div class="col-md-2">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Caracterização da Mata</h3>
												</li>
												<li>
													<a href="ecommerce_index.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Lista </a>
												</li>
												<li>
													<a href="vistoriaplaneamento.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Nova </a>
												</li>
												<li>
													<a href="ecommerce_orders_view.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Agenda </a>
												</li>
											</ul>
										</div>
										<div class="col-md-2">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Acompanhamento <br/><br/></h3>
												</li>
												<li>
													<a href="ecommerce_index.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Lista </a>
												</li>
												<li>
													<a href="vistoriaplaneamento.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Nova </a>
												</li>
												<li>
													<a href="ecommerce_orders_view.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Agenda </a>
												</li>
												<li>
											</ul>
										</div>
										<div class="col-md-2">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Planeamento<br/><br/></h3>
												</li>
												<li>
													<a href="ecommerce_index.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Lista </a>
												</li>
												<li>
													<a href="ecommerce_orders.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Nova </a>
												</li>
												<li>
													<a href="ecommerce_orders_view.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Agenda </a>
												</li>
											</ul>
										</div>
										<div class="col-md-2">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Operacionais<br/><br/></h3>
												</li>
												<li>
													<a href="ecommerce_index.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Lista </a>
												</li>
												<li>
													<a href="ecommerce_orders.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Nova </a>
												</li>
												<li>
													<a href="ecommerce_orders_view.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Agenda </a>
												</li>
											</ul>
										</div>
										<div class="col-md-2">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Levantamento Biodiversidade</h3>
												</li>
												<li>
													<a href="ecommerce_index.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Lista </a>
												</li>
												<li>
													<a href="ecommerce_orders.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Nova </a>
												</li>
												<li>
													<a href="ecommerce_orders_view.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Agenda </a>
												</li>
												<li>
											</ul>
										</div>
										<div class="col-md-3">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Registo de Vistorias<br/><br/></h3>
												</li>
												<li>
													<a href="ecommerce_index.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Lista de todas as vistorias </a>
												</li>
											</ul>
										</div>
										<div class="col-md-3">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Não Conformidades/Falhas<br/><br/></h3>
												</li>
												<li>
													<a href="ecommerce_index.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Listar todas as falhas</a>
												</li>
											</ul>
										</div>
										<div class="col-md-3">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Cronograma - Quadro de Monitorizações</h3>
												</li>
												<li>
													<a href="ecommerce_index.html" class="iconify">
													<i class="fa fa-angle-right"></i>
													Cronograma Geral das Vistorias e Resolução de Falhas</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<li class="menu-dropdown mega-menu-dropdown mega-menu-full ">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
						Notas de Entrega <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li>
								<div class="mega-menu-content">
									<div class="row">
										<div class="col-md-5">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Nova Nota de Entrega</h3>
												</li>
												<li>
													<a href="page_timeline.html">
													<i class="fa fa-angle-right"></i>
												Imprimir</a>
												</li>
											</ul>
										</div>
										<div class="col-md-5">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Lista das Notas de Entrega</h3>
												</li>
												<li>
													<a href="extra_faq.html">
													<i class="fa fa-angle-right"></i>
													Listas Emitidas </a>
												</li>
											</ul>
										</div>
										<div class="col-md-5">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Validação</h3>
												</li>
												<li>
													<a href="page_news.html">
													<i class="fa fa-angle-right"></i>
													Comparar valores</a>
												</li>
											</ul>
										</div>
										<div class="col-md-5">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Comunicação ICNF - manifestos de corte</h3>
												</li>
												<li>
													<a href="extra_lock.html">
													<i class="fa fa-angle-right"></i>
													Gerar ficheiro excel </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
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
				<h1>Abastena <i class="fa fa-angle-right"></i> <small><a href="#">Perfil Ínicio</a></small></h1>
			</div>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PAGE TOOLBAR -->

			<!-- END PAGE TOOLBAR -->
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE BREADCRUMB -->
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
				<?php include 'user.html'; ?>
										<!-- END PORTLET MAIN -->
					</div>
					<!-- END BEGIN PROFILE SIDEBAR -->
					<!-- BEGIN PROFILE CONTENT -->
					<div class="profile-content">
						<div class="row">
							<div class="col-md-6">
								<!-- BEGIN PORTLET -->
								<div class="portlet light ">
									<div class="portlet-title">
										<div class="caption caption-md">
											<i class="icon-bar-chart theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Plataforma Avisos</span>
											<span class="caption-helper hide">weekly stats...</span>
										</div>
									</div>
									<div class="portlet-body">
										<div class="row number-stats margin-bottom-30">
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="stat-left">
													<div class="stat-chart">
														<!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
														<div id="sparkline_bar"></div>
													</div>
													<div class="stat-number">
														<div class="title">
															 Total
														</div>
														<div class="number">
															 246
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="stat-right">
													<div class="stat-chart">
														<!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
														<div id="sparkline_bar2"></div>
													</div>
													<div class="stat-number">
														<div class="title">
															 New
														</div>
														<div class="number">
															 719
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="table-scrollable table-scrollable-borderless">
											<table class="table table-hover table-light">
											<thead>
											<tr class="uppercase">
												<th colspan="2">
													 MEMBER
												</th>
												<th>
													 Earnings
												</th>
												<th>
													 CASES
												</th>
												<th>
													 CLOSED
												</th>
												<th>
													 RATE
												</th>
											</tr>
											</thead>
											<tr>
												<td class="fit">
													<img class="user-pic" src="../../assets/admin/layout3/img/avatar4.jpg">
												</td>
												<td>
													<a href="javascript:;" class="primary-link">Brain</a>
												</td>
												<td>
													 $345
												</td>
												<td>
													 45
												</td>
												<td>
													 124
												</td>
												<td>
													<span class="bold theme-font">80%</span>
												</td>
											</tr>
											<tr>
												<td class="fit">
													<img class="user-pic" src="../../assets/admin/layout3/img/avatar5.jpg">
												</td>
												<td>
													<a href="javascript:;" class="primary-link">Nick</a>
												</td>
												<td>
													 $560
												</td>
												<td>
													 12
												</td>
												<td>
													 24
												</td>
												<td>
													<span class="bold theme-font">67%</span>
												</td>
											</tr>
											<tr>
												<td class="fit">
													<img class="user-pic" src="../../assets/admin/layout3/img/avatar6.jpg">
												</td>
												<td>
													<a href="javascript:;" class="primary-link">Tim</a>
												</td>
												<td>
													 $1,345
												</td>
												<td>
													 450
												</td>
												<td>
													 46
												</td>
												<td>
													<span class="bold theme-font">98%</span>
												</td>
											</tr>
											<tr>
												<td class="fit">
													<img class="user-pic" src="../../assets/admin/layout3/img/avatar7.jpg">
												</td>
												<td>
													<a href="javascript:;" class="primary-link">Tom</a>
												</td>
												<td>
													 $645
												</td>
												<td>
													 50
												</td>
												<td>
													 89
												</td>
												<td>
													<span class="bold theme-font">58%</span>
												</td>
											</tr>
											</table>
										</div>
									</div>
								</div>
								<!-- END PORTLET -->
							</div>
							<div class="col-md-6">
								<!-- BEGIN PORTLET -->
								<div class="portlet light">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Feeds</span>
										</div>
									</div>
									<div class="portlet-body">
										<!--BEGIN TABS-->
										<div class="tab-content">
											<div class="tab-pane active" id="tab_1_1">
												<div class="scroller" style="height: 320px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
													<ul class="feeds">
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 You have 4 pending tasks. <span class="label label-sm label-info">
																			Take action <i class="fa fa-share"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 Just now
																</div>
															</div>
														</li>
														<li>
															<a href="javascript:;">
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New version v1.4 just lunched!
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
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-danger">
																			<i class="fa fa-bolt"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 Database server #12 overloaded. Please fix the issue.
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
																		<div class="label label-sm label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New order received and pending for process.
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
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New payment refund and pending approval.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 40 mins
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-warning">
																			<i class="fa fa-plus"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New member registered. Pending approval.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 1.5 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
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
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-default">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 Prod01 database server is overloaded 90%.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 3 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-warning">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New group created. Pending manager review.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 5 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 Order payment failed.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 18 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-default">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New application received.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 21 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 Dev90 web server restarted. Pending overall system check.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 22 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-default">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New member registered. Pending approval
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 21 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 L45 Network failure. Schedule maintenance.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 22 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-default">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 Order canceled with failed payment.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 21 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 Web-A2 clound instance created. Schedule full scan.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 22 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-default">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 Member canceled. Schedule account review.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 21 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New order received. Please take care of it.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 22 hours
																</div>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<div class="tab-pane" id="tab_1_2">
												<div class="scroller" style="height: 337px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
													<ul class="feeds">
														<li>
															<a href="javascript:;">
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New user registered
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 Just now
																</div>
															</div>
															</a>
														</li>
														<li>
															<a href="javascript:;">
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New order received
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 10 mins
																</div>
															</div>
															</a>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-danger">
																			<i class="fa fa-bolt"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 Order #24DOP4 has been rejected. <span class="label label-sm label-danger ">
																			Take action <i class="fa fa-share"></i>
																			</span>
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
															<a href="javascript:;">
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New user registered
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 Just now
																</div>
															</div>
															</a>
														</li>
														<li>
															<a href="javascript:;">
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New user registered
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 Just now
																</div>
															</div>
															</a>
														</li>
														<li>
															<a href="javascript:;">
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New user registered
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 Just now
																</div>
															</div>
															</a>
														</li>
														<li>
															<a href="javascript:;">
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New user registered
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 Just now
																</div>
															</div>
															</a>
														</li>
														<li>
															<a href="javascript:;">
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New user registered
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 Just now
																</div>
															</div>
															</a>
														</li>
														<li>
															<a href="javascript:;">
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New user registered
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 Just now
																</div>
															</div>
															</a>
														</li>
														<li>
															<a href="javascript:;">
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New user registered
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 Just now
																</div>
															</div>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<!--END TABS-->
									</div>
								</div>
								<!-- END PORTLET -->
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<!-- BEGIN PORTLET -->
								<div class="portlet light">
									<div class="portlet-title">
										<div class="caption caption-md">
											<i class="icon-bar-chart theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Mensagens</span>
											<span class="caption-helper">2 por ler</span>
										</div>
										<div class="inputs">
											<div class="portlet-input input-inline input-small ">
												<div class="input-icon right">
													<i class="icon-magnifier"></i>
													<input type="text" class="form-control form-control-solid" placeholder="">
												</div>
											</div>
										</div>
									</div>
									<div class="portlet-body">
										<div class="scroller" style="height: 305px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
											<div class="general-item-list">
												<div class="item">
													<div class="item-head">
														<div class="item-details">
															<img class="item-pic" src="../../assets/admin/layout3/img/avatar4.jpg">
															<a href="" class="item-name primary-link">Hugo Cavaleiro</a>
															<span class="item-label">3 horas atrás</span>
														</div>
													<span class="item-status"><span class="badge badge-empty badge-danger"></span> Importante</span>
													</div>
													<div class="item-body">
														 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</div>
												</div>
												<div class="item">
													<div class="item-head">
														<div class="item-details">
															<img class="item-pic" src="../../assets/admin/layout3/img/avatar4.jpg">
															<a href="" class="item-name primary-link">Hugo Cavaleiro</a>
															<span class="item-label">5 horas atrás</span>
														</div>
														<span class="item-status"><span class="badge badge-empty badge-warning"></span> Não Lida</span>
													</div>
													<div class="item-body">
														 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat tincidunt ut laoreet.
													</div>
												</div>
												<div class="item">
													<div class="item-head">
														<div class="item-details">
															<img class="item-pic" src="../../assets/admin/layout3/img/avatar4.jpg">
															<a href="" class="item-name primary-link">Hugo Cavaleiro</a>
															<span class="item-label">8 horas atrás</span>
														</div>
														<span class="item-status"><span class="badge badge-empty badge-primary"></span> Lida</span>
													</div>
													<div class="item-body">
														 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.
													</div>
												</div>
												<div class="item">
													<div class="item-head">
														<div class="item-details">
															<img class="item-pic" src="../../assets/admin/layout3/img/avatar4.jpg">
															<a href="" class="item-name primary-link">Hugo Cavaleiro</a>
															<span class="item-label">12 horas atrás</span>
														</div>
														<span class="item-status"><span class="badge badge-empty badge-danger"></span> Importante</span>
													</div>
													<div class="item-body">
														 Consectetuer adipiscing elit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- END PORTLET -->
							</div>
							<div class="col-md-6">
								<!-- BEGIN PORTLET -->
								<div class="portlet light tasks-widget">
									<div class="portlet-title">
										<div class="caption caption-md">
											<i class="icon-bar-chart theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Notificações</span>
											<span class="caption-helper">3 novas</span>
										</div>
										<div class="inputs">
											<div class="portlet-input input-small input-inline">
												<div class="input-icon right">
													<i class="icon-magnifier"></i>
													<input type="text" class="form-control form-control-solid" placeholder="">
												</div>
											</div>
										</div>
									</div>
									<div class="portlet-body">
										<div class="task-content">
											<div class="scroller" style="height: 282px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
												<!-- START TASK LIST -->
												<ul class="task-list">

													<li>
														<div class="task-checkbox">
															<input type="checkbox" class="liChild" value=""/>
														</div>
														<div class="task-title">
															<span class="task-title-sp">
															Company Staff Meeting </span>
															<span class="label label-sm label-success">Cruise</span>
															<span class="task-bell">
															<i class="fa fa-bell-o"></i>
															</span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
																<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
																</a>
																<ul class="dropdown-menu pull-right">
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-check"></i> Complete </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-pencil"></i> Edit </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-trash-o"></i> Cancel </a>
																	</li>
																</ul>
															</div>
														</div>
													</li>
													<li class="last-line">
														<div class="task-checkbox">
															<input type="checkbox" class="liChild" value=""/>
														</div>
														<div class="task-title">
															<span class="task-title-sp">
															KeenThemes Investment Discussion </span>
															<span class="label label-sm label-warning">KeenThemes </span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
																<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
																</a>
																<ul class="dropdown-menu pull-right">
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-check"></i> Complete </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-pencil"></i> Edit </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-trash-o"></i> Cancel </a>
																	</li>
																</ul>
															</div>
														</div>
													</li>
												</ul>
												<!-- END START TASK LIST -->
											</div>
										</div>
										<div class="task-footer">
											<div class="btn-arrow-link pull-right">
												<a href="javascript:;">See All Tasks</a>
											</div>
										</div>
									</div>
								</div>
								<!-- END PORTLET -->
							</div>
						</div>
					</div>
					<!-- END PROFILE CONTENT -->
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<!-- BEGIN PRE-FOOTER -->
<?php include 'footer.php'; ?>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="../../assets/admin/pages/scripts/profile.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
   	// initiate layout and plugins
   	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	Demo.init(); // init demo features\
	Profile.init(); // init page demo
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
