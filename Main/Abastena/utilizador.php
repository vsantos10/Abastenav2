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
<title>Página Utilizador</title>
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
<?php include 'header.html'; ?>
	<!-- END HEADER TOP -->
	<!-- BEGIN HEADER MENU -->
	<div class="page-header-menu">
		<div class="container">
			<!-- BEGIN HEADER SEARCH BOX -->
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
				<h1>Abastena <i class="fa fa-angle-right"></i> <small><a href="#">Utilizador</a></small></h1>
			</div>
			<!-- END PAGE TITLE -->
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
			<div class="row margin-top-10">
				<div class="col-md-12">
					<!-- BEGIN PROFILE SIDEBAR -->
					<div class="profile-sidebar" style="width: 250px;">
						<!-- PORTLET MAIN -->
						<div class="portlet light profile-sidebar-portlet">
							<!-- SIDEBAR USERPIC -->
							<div class="profile-userpic">
								<img src="../../assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
							</div>
							<!-- END SIDEBAR USERPIC -->
							<!-- SIDEBAR USER TITLE -->
							<div class="profile-usertitle">
								<div class="profile-usertitle-name">
									 Pedro Santos
								</div>
							</div>
							<!-- END SIDEBAR USER TITLE -->
							<!-- SIDEBAR BUTTONS -->
							<div class="profile-userbuttons">
								<button type="button" class="btn btn-circle green-haze btn-sm">Follow</button>
								<button type="button" class="btn btn-circle btn-danger btn-sm">Message</button>
							</div>
							<!-- END SIDEBAR BUTTONS -->
							<!-- SIDEBAR MENU -->
							<div class="profile-usermenu">
								<ul class="nav">
									<li>
										<a href="extra_profile.html">
										<i class="icon-home"></i>
										Overview </a>
									</li>
									<li class="active">
										<a href="extra_profile_account.html">
										<i class="icon-settings"></i>
										Account Settings </a>
									</li>
									<li>
										<a href="page_todo.html" target="_blank">
										<i class="icon-check"></i>
										Tasks </a>
									</li>
									<li>
										<a href="extra_profile_help.html">
										<i class="icon-info"></i>
										Help </a>
									</li>
								</ul>
							</div>
							<!-- END MENU -->
						</div>
						<!-- END PORTLET MAIN -->
						<!-- PORTLET MAIN -->
						<div class="portlet light">
							<!-- STAT -->
							<div class="row list-separated profile-stat">
								<div class="col-md-4 col-sm-4 col-xs-6">
									<div class="uppercase profile-stat-title">
										 37
									</div>
									<div class="uppercase profile-stat-text">
										 Projects
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-6">
									<div class="uppercase profile-stat-title">
										 51
									</div>
									<div class="uppercase profile-stat-text">
										 Tasks
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-6">
									<div class="uppercase profile-stat-title">
										 61
									</div>
									<div class="uppercase profile-stat-text">
										 Uploads
									</div>
								</div>
							</div>
							<!-- END STAT -->
							<div>
								<h4 class="profile-desc-title">About Marcus Doe</h4>
								<span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
								<div class="margin-top-20 profile-desc-link">
									<i class="fa fa-globe"></i>
									<a href="http://www.keenthemes.com">www.keenthemes.com</a>
								</div>
								<div class="margin-top-20 profile-desc-link">
									<i class="fa fa-twitter"></i>
									<a href="http://www.twitter.com/keenthemes/">@keenthemes</a>
								</div>
								<div class="margin-top-20 profile-desc-link">
									<i class="fa fa-facebook"></i>
									<a href="http://www.facebook.com/keenthemes/">keenthemes</a>
								</div>
							</div>
						</div>
						<!-- END PORTLET MAIN -->
					</div>
					<!-- END BEGIN PROFILE SIDEBAR -->
					<!-- BEGIN PROFILE CONTENT -->
					<div class="profile-content">
						<div class="row">
							<div class="col-md-12">
								<div class="portlet light">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
										</div>
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#tab_1_1" data-toggle="tab">Personal Info</a>
											</li>
											<li>
												<a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
											</li>
											<li>
												<a href="#tab_1_3" data-toggle="tab">Change Password</a>
											</li>
											<li>
												<a href="#tab_1_4" data-toggle="tab">Privacy Settings</a>
											</li>
										</ul>
									</div>
									<div class="portlet-body">
										<div class="tab-content">
											<!-- PERSONAL INFO TAB -->
											<div class="tab-pane active" id="tab_1_1">
												<form role="form" action="#">
													<div class="form-group">
														<label class="control-label">Primeiro Nome</label>
														<input type="text" placeholder="" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">Apelido</label>
														<input type="text" placeholder="" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">Número de Telefone</label>
														<input type="text" placeholder="" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">Email</label>
														<input type="text" placeholder="" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">Sobre</label>
														<textarea class="form-control" rows="3" placeholder=""></textarea>
													</div>
													<div class="form-group">
														<label class="control-label">Empresa</label>
														<input type="text" placeholder="" class="form-control"/>
													</div>
													<div class="margiv-top-10">
														<a href="javascript:;" class="btn green-haze">
														Guardar Alterações </a>
														<a href="javascript:;" class="btn default">
														Cancelar </a>
													</div>
												</form>
											</div>
											<!-- END PERSONAL INFO TAB -->
											<!-- CHANGE AVATAR TAB -->
											<div class="tab-pane" id="tab_1_2">
												<p>
													 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
												</p>
												<form action="#" role="form">
													<div class="form-group">
														<div class="fileinput fileinput-new" data-provides="fileinput">
															<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
																<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/>
															</div>
															<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
															</div>
															<div>
																<span class="btn default btn-file">
																<span class="fileinput-new">
																Select image </span>
																<span class="fileinput-exists">
																Change </span>
																<input type="file" name="...">
																</span>
																<a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput">
																Remove </a>
															</div>
														</div>
														<div class="clearfix margin-top-10">
															<span class="label label-danger">NOTE! </span>
															<span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
														</div>
													</div>
													<div class="margin-top-10">
														<a href="javascript:;" class="btn green-haze">
														Submit </a>
														<a href="javascript:;" class="btn default">
														Cancel </a>
													</div>
												</form>
											</div>
											<!-- END CHANGE AVATAR TAB -->
											<!-- CHANGE PASSWORD TAB -->
											<div class="tab-pane" id="tab_1_3">
												<form action="#">
													<div class="form-group">
														<label class="control-label">Current Password</label>
														<input type="password" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">New Password</label>
														<input type="password" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">Re-type New Password</label>
														<input type="password" class="form-control"/>
													</div>
													<div class="margin-top-10">
														<a href="javascript:;" class="btn green-haze">
														Change Password </a>
														<a href="javascript:;" class="btn default">
														Cancel </a>
													</div>
												</form>
											</div>
											<!-- END CHANGE PASSWORD TAB -->
											<!-- PRIVACY SETTINGS TAB -->
											<div class="tab-pane" id="tab_1_4">
												<form action="#">
													<table class="table table-light table-hover">
													<tr>
														<td>
															 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus..
														</td>
														<td>
															<label class="uniform-inline">
															<input type="radio" name="optionsRadios1" value="option1"/>
															Yes </label>
															<label class="uniform-inline">
															<input type="radio" name="optionsRadios1" value="option2" checked/>
															No </label>
														</td>
													</tr>
													<tr>
														<td>
															 Enim eiusmod high life accusamus terry richardson ad squid wolf moon
														</td>
														<td>
															<label class="uniform-inline">
															<input type="checkbox" value=""/> Yes </label>
														</td>
													</tr>
													<tr>
														<td>
															 Enim eiusmod high life accusamus terry richardson ad squid wolf moon
														</td>
														<td>
															<label class="uniform-inline">
															<input type="checkbox" value=""/> Yes </label>
														</td>
													</tr>
													<tr>
														<td>
															 Enim eiusmod high life accusamus terry richardson ad squid wolf moon
														</td>
														<td>
															<label class="uniform-inline">
															<input type="checkbox" value=""/> Yes </label>
														</td>
													</tr>
													</table>
													<!--end profile-settings-->
													<div class="margin-top-10">
														<a href="javascript:;" class="btn green-haze">
														Save Changes </a>
														<a href="javascript:;" class="btn default">
														Cancel </a>
													</div>
												</form>
											</div>
											<!-- END PRIVACY SETTINGS TAB -->
										</div>
									</div>
								</div>
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
<?php include 'footer.html'; ?>
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
