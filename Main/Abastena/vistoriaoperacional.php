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
<title>Vistoria Operacional</title>
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
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/select2/select2.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
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

			</div>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PAGE TOOLBAR -->

				<!-- END THEME PANEL -->
			</div>
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
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">
					<div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">
						<ul class="nav nav-tabs">
							<li  class="active">
								<a  href="#tab_2" data-toggle="tab">
							 </a>
							</li>
						</ul>

										<!-- END FORM-->
									</div>
								</div>
								<div class="portlet light bordered">
									<div class="portlet-title">
										<div class="caption">

											<span class="caption-subject font-blue-sunglo bold uppercase">	F-07: Vistoria Operacional</span>

										</div>

									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="javascript:;" class="form-horizontal">
											<div class="form-body">
												<h3 class="form-section">Formulário - Dados Pessoais</h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Membro GGFA</label>
															<div class="col-md-9">
																<input type="text" class="form-control" >
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Código</label>
															<div class="col-md-9">
															<input type="text" class="form-control" >
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Operador</label>
															<div class="col-md-9">
																	<input type="text" class="form-control" >
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Membro BFA</label>
															<div class="col-md-9">
																	<input type="text" class="form-control" >
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Operações</label>
															<div class="col-md-9">
																	<input type="text" class="form-control" >
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Data</label>
															<div class="col-md-9">
																	<input type="text" class="form-control" >
															</div>
														</div>
													</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-3">Nome da Mata</label>
																<div class="col-md-9">
																		<input type="text" class="form-control" >
																</div>
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label col-md-3">Código</label>
																<div class="col-md-9">
																		<input type="text" class="form-control" >
																</div>
															</div>
														</div>

														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label col-md-3">Local</label>
																<div class="col-md-9">
																		<input type="text" class="form-control" >
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-3">Freguesia</label>
																<div class="col-md-9">
																		<input type="text" class="form-control" >
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-3">Concelho</label>
																<div class="col-md-9">
																		<input type="text" class="form-control" >
																</div>
															</div>
														</div>
														</div>
													<h3 class="form-section">Aspectos a Observar</h3>
													<table class="table">
	    											<thead>
	        											<tr>
											            <th class="col-sm-12 col-md-8"></th>
											            <th class="col-sm-12 col-md-2">CONFORMIDADE</th>
											            <th class="col-sm-12 col-md-2"></th>
	        											</tr>
	    											</thead>
														<thead>
																<tr>
																	<th class="col-sm-12 col-md-8">Nas Máquinas e equipamentos</th>
																	<th class="col-sm-12 col-md-2">C</th>
																	<th class="col-sm-12 col-md-2">NC</th>
																</tr>
														</thead>
	    										<tbody>
	        									<tr>
											            <td>
											                Fugas (óleo, lubrificante ou combustível)
											            </td>
											            <td class="col-sm-12 col-md-2">
																			<div class="form-group">
																						<div class="radio-list">
																					  &nbsp;<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
																							 </td>
																			<td>
																					<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
																				 		</div>
																			</div>
																	</td>
											        </tr>
															<tr>
																		<td>
																				Fumo, ruído, vibração e pneus
																		</td>
																		<td class="col-sm-12 col-md-2">
																				<div class="form-group">
																							<div class="radio-list">
																							&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
																								 </td>
																				<td>
																						<input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
																							</div>
																				</div>
																		</td>
																</tr>
																<tr>
																			<td>
																					Outros
																			</td>
																			<td class="col-sm-12 col-md-2">
																					<div class="form-group">
																								<div class="radio-list">
																							  &nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																									 </td>
																					<td>
																							<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																						 		</div>
																					</div>
																			</td>

																	</tr>

											    </tbody>
											</table>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label class="control-label col-md-2">Evidências / Comentários</label>
														<div class="col-md-10">
															 <textarea class="form-control autosizeme" rows="4"></textarea>
														</div>
													</div>
												</div>
											</div>
											<table class="table">
												<thead>
														<tr>
															<th class="col-sm-12 col-md-8">Na saúde e segurança no trabalho e no atendimento a emergências</th>
															<th class="col-sm-12 col-md-2">C</th>
															<th class="col-sm-12 col-md-2">NC</th>
														</tr>
												</thead>
											<tbody>
												<tr>
															<td>
																	Equipamentos de protecção indívidual
															</td>
															<td class="col-sm-12 col-md-2">
																	<div class="form-group">
																				<div class="radio-list">
																				&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
																					 </td>
																	<td>
																			<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
																				</div>
																	</div>
															</td>
													</tr>
													<tr>
																<td>
																		Distâncias de segurança
																</td>
																<td class="col-sm-12 col-md-2">
																		<div class="form-group">
																					<div class="radio-list">
																					&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
																						 </td>
																		<td>
																				<input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
																					</div>
																		</div>
																</td>
														</tr>
														<tr>
																	<td>
																			Meios Mínimos para emergência
																	</td>
																	<td class="col-sm-12 col-md-2">
																			<div class="form-group">
																						<div class="radio-list">
																						&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																							 </td>
																			<td>
																					<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																						</div>
																			</div>
																	</td>

															</tr>
															<tr>
																		<td>
																				Outros
																		</td>
																		<td class="col-sm-12 col-md-2">
																				<div class="form-group">
																							<div class="radio-list">
																							&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																								 </td>
																				<td>
																						<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																							</div>
																				</div>
																		</td>

																</tr>

											</tbody>
									</table>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label col-md-2">Evidências / Comentários</label>
												<div class="col-md-10">
													 <textarea class="form-control autosizeme" rows="4"></textarea>
												</div>
											</div>
										</div>
									</div>
									<table class="table">
										<thead>
												<tr>
													<th class="col-sm-12 col-md-8">No manuseio, armazenagem e recolha de resíduos e de substâncias perigosas</th>
													<th class="col-sm-12 col-md-2">C</th>
													<th class="col-sm-12 col-md-2">NC</th>
												</tr>
										</thead>
									<tbody>
										<tr>
													<td>
															Identificação / Localização de Contentores / Recipientes suficientes e adequados
													</td>
													<td class="col-sm-12 col-md-2">
															<div class="form-group">
																		<div class="radio-list">
																		&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
																			 </td>
															<td>
																	<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
																		</div>
															</div>
													</td>
											</tr>
											<tr>
														<td>
																Derrames de óleo / combustível e outras substâncias perigosas
														</td>
														<td class="col-sm-12 col-md-2">
																<div class="form-group">
																			<div class="radio-list">
																			&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
																				 </td>
																<td>
																		<input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
																			</div>
																</div>
														</td>
												</tr>
												<tr>
															<td>
																	Atendimento das orientações em rótulos, fichas de segurança e outros documentos
															</td>
															<td class="col-sm-12 col-md-2">
																	<div class="form-group">
																				<div class="radio-list">
																				&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																					 </td>
																	<td>
																			<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																				</div>
																	</div>
															</td>

													</tr>
													<tr>
																<td>
																		Separação e destino dos resíduos
																</td>
																<td class="col-sm-12 col-md-2">
																		<div class="form-group">
																					<div class="radio-list">
																					&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																						 </td>
																		<td>
																				<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																					</div>
																		</div>
																</td>

														</tr>
														<tr>
																	<td>
																		Outros
																	</td>
																	<td class="col-sm-12 col-md-2">
																			<div class="form-group">
																						<div class="radio-list">
																						&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																							 </td>
																			<td>
																					<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																						</div>
																			</div>
																	</td>

															</tr>

									</tbody>
							</table>

							<table class="table">
								<thead>
										<tr>
											<th class="col-sm-12 col-md-8">No comportamento e qualidade da água</th>
											<th class="col-sm-12 col-md-2">C</th>
											<th class="col-sm-12 col-md-2">NC</th>
										</tr>
								</thead>
							<tbody>
								<tr>
											<td>
													Trânsito e operação em linhas de água
											</td>
											<td class="col-sm-12 col-md-2">
													<div class="form-group">
																<div class="radio-list">
																&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
																	 </td>
													<td>
															<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
																</div>
													</div>
											</td>
									</tr>
									<tr>
												<td>
														Assoreamento
												</td>
												<td class="col-sm-12 col-md-2">
														<div class="form-group">
																	<div class="radio-list">
																	&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
																		 </td>
														<td>
																<input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
																	</div>
														</div>
												</td>
										</tr>
										<tr>
													<td>
															Deposição de resíduos lenhosos
													</td>
													<td class="col-sm-12 col-md-2">
															<div class="form-group">
																		<div class="radio-list">
																		&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																			 </td>
															<td>
																	<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																		</div>
															</div>
													</td>

											</tr>
											<tr>
														<td>
															Contaminação por derrames
														</td>
														<td class="col-sm-12 col-md-2">
																<div class="form-group">
																			<div class="radio-list">
																			&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																				 </td>
																<td>
																		<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																			</div>
																</div>
														</td>

												</tr>
												<tr>
															<td>
																Outros
															</td>
															<td class="col-sm-12 col-md-2">
																	<div class="form-group">
																				<div class="radio-list">
																				&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																					 </td>
																	<td>
																			<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																				</div>
																	</div>
															</td>

													</tr>
													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label class="control-label col-md-2">Evidências / Comentários</label>
																<div class="col-md-10">
																	 <textarea class="form-control autosizeme" rows="4"></textarea>
																</div>
															</div>
														</div>
													</div>
													<table class="table">
														<thead>
																<tr>
																	<th class="col-sm-12 col-md-8">Nas condições do solo</th>
																	<th class="col-sm-12 col-md-2">C</th>
																	<th class="col-sm-12 col-md-2">NC</th>
																</tr>
														</thead>
													<tbody>
														<tr>
																	<td>
																			Erosão
																	</td>
																	<td class="col-sm-12 col-md-2">
																			<div class="form-group">
																						<div class="radio-list">
																						&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
																							 </td>
																			<td>
																					<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
																						</div>
																			</div>
																	</td>
															</tr>
															<tr>
																		<td>
																				Compactação e formação de trilhos
																		</td>
																		<td class="col-sm-12 col-md-2">
																				<div class="form-group">
																							<div class="radio-list">
																							&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
																								 </td>
																				<td>
																						<input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
																							</div>
																				</div>
																		</td>
																</tr>
																<tr>
																			<td>
																					Exposição excessiva
																			</td>
																			<td class="col-sm-12 col-md-2">
																					<div class="form-group">
																								<div class="radio-list">
																								&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																									 </td>
																					<td>
																							<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																								</div>
																					</div>
																			</td>

																	</tr>
																	<tr>
																				<td>
																					Contaminação por derrames
																				</td>
																				<td class="col-sm-12 col-md-2">
																						<div class="form-group">
																									<div class="radio-list">
																									&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																										 </td>
																						<td>
																								<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																									</div>
																						</div>
																				</td>

																		</tr>
																		<tr>
																					<td>
																						Outros
																					</td>
																					<td class="col-sm-12 col-md-2">
																							<div class="form-group">
																										<div class="radio-list">
																										&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																											 </td>
																							<td>
																									<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																										</div>
																							</div>
																					</td>

																			</tr>
																			<div class="row">
																				<div class="col-md-12">
																					<div class="form-group">
																						<label class="control-label col-md-2">Evidências / Comentários</label>
																						<div class="col-md-10">
																							 <textarea class="form-control autosizeme" rows="4"></textarea>
																						</div>
																					</div>
																				</div>
																			</div>
							</tbody>
					</table>

					<table class="table">
						<thead>
								<tr>
									<th class="col-sm-12 col-md-8">Nas infra-estruturas</th>
									<th class="col-sm-12 col-md-2">C</th>
									<th class="col-sm-12 col-md-2">NC</th>
								</tr>
						</thead>
					<tbody>
						<tr>
									<td>
											Estradas, caminhos e aceiros
									</td>
									<td class="col-sm-12 col-md-2">
											<div class="form-group">
														<div class="radio-list">
														&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
															 </td>
											<td>
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
														</div>
											</div>
									</td>
							</tr>
							<tr>
										<td>
												Pontos de travessia da rede viária com linhas de água (pontes, manilhas, etc.)
										</td>
										<td class="col-sm-12 col-md-2">
												<div class="form-group">
															<div class="radio-list">
															&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
																 </td>
												<td>
														<input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
															</div>
												</div>
										</td>
								</tr>
								<tr>
											<td>
													Barragens e outros pontos de água
											</td>
											<td class="col-sm-12 col-md-2">
													<div class="form-group">
																<div class="radio-list">
																&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																	 </td>
													<td>
															<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																</div>
													</div>
											</td>

									</tr>
									<tr>
												<td>
													Outros
												</td>
												<td class="col-sm-12 col-md-2">
														<div class="form-group">
																	<div class="radio-list">
																	&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																		 </td>
														<td>
																<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																	</div>
														</div>
												</td>

										</tr>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label class="control-label col-md-2">Evidências / Comentários</label>
														<div class="col-md-10">
															 <textarea class="form-control autosizeme" rows="4"></textarea>
														</div>
													</div>
												</div>
											</div>

					<table class="table">
						<thead>
								<tr>
									<th class="col-sm-12 col-md-8">Na biodiversidade</th>
									<th class="col-sm-12 col-md-2">C</th>
									<th class="col-sm-12 col-md-2">NC</th>
								</tr>
						</thead>
					<tbody>
						<tr>
									<td>
											Danos em áreas de protecção
									</td>
									<td class="col-sm-12 col-md-2">
											<div class="form-group">
														<div class="radio-list">
														&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
															 </td>
											<td>
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
														</div>
											</div>
									</td>
							</tr>
							<tr>
										<td>
												Danos em árvores a preservar, nas longevas e cavernosas
										</td>
										<td class="col-sm-12 col-md-2">
												<div class="form-group">
															<div class="radio-list">
															&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
																 </td>
												<td>
														<input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
															</div>
												</div>
										</td>
								</tr>
								<tr>
											<td>
													Danos em ninhos, tocas e outros locais de abrigo da fauna
											</td>
											<td class="col-sm-12 col-md-2">
													<div class="form-group">
																<div class="radio-list">
																&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																	 </td>
													<td>
															<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																</div>
													</div>
											</td>

									</tr>
									<tr>
												<td>
													Outros
												</td>
												<td class="col-sm-12 col-md-2">
														<div class="form-group">
																	<div class="radio-list">
																	&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																		 </td>
														<td>
																<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																	</div>
														</div>
												</td>

										</tr>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label class="control-label col-md-2">Evidências / Comentários</label>
														<div class="col-md-10">
															 <textarea class="form-control autosizeme" rows="4"></textarea>
														</div>
													</div>
												</div>
											</div>
					<table class="table">
						<thead>
								<tr>
									<th class="col-sm-12 col-md-8">Nas condições laborais</th>
									<th class="col-sm-12 col-md-2">C</th>
									<th class="col-sm-12 col-md-2">NC</th>
								</tr>
						</thead>
					<tbody>
						<tr>
									<td>
											Horário de trabalho, férias e descanso semanal
									</td>
									<td class="col-sm-12 col-md-2">
											<div class="form-group">
														<div class="radio-list">
														&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
															 </td>
											<td>
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
														</div>
											</div>
									</td>
							</tr>
							<tr>
										<td>
												Inspecções médicas
										</td>
										<td class="col-sm-12 col-md-2">
												<div class="form-group">
															<div class="radio-list">
															&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
																 </td>
												<td>
														<input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
															</div>
												</div>
										</td>
								</tr>
								<tr>
											<td>
													Legalidade de estrangeiros
											</td>
											<td class="col-sm-12 col-md-2">
													<div class="form-group">
																<div class="radio-list">
																&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																	 </td>
													<td>
															<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																</div>
													</div>
											</td>

									</tr>
									<tr>
												<td>
													Seguro e segurança social
												</td>
												<td class="col-sm-12 col-md-2">
														<div class="form-group">
																	<div class="radio-list">
																	&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																		 </td>
														<td>
																<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																	</div>
														</div>
												</td>

										</tr>
										<tr>
													<td>
														Outros
													</td>
													<td class="col-sm-12 col-md-2">
															<div class="form-group">
																		<div class="radio-list">
																		&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																			 </td>
															<td>
																	<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																		</div>
															</div>
													</td>

											</tr>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label class="control-label col-md-2">Evidências / Comentários / Nomes dos operadores</label>
														<div class="col-md-10">
															 <textarea class="form-control autosizeme" rows="4"></textarea>
														</div>
													</div>
												</div>
											</div>
											<table class="table">
												<thead>
														<tr>
															<th class="col-sm-12 col-md-8">Na envolvente social - risco ou perturbação</th>
															<th class="col-sm-12 col-md-2">C</th>
															<th class="col-sm-12 col-md-2">NC</th>
														</tr>
												</thead>
											<tbody>
												<tr>
															<td>
																	Prédios, muros, vedações,etc.
															</td>
															<td class="col-sm-12 col-md-2">
																	<div class="form-group">
																				<div class="radio-list">
																				&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
																					 </td>
																	<td>
																			<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
																				</div>
																	</div>
															</td>
													</tr>
													<tr>
																<td>
																		Estradas e caminhos
																</td>
																<td class="col-sm-12 col-md-2">
																		<div class="form-group">
																					<div class="radio-list">
																					&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
																						 </td>
																		<td>
																				<input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
																					</div>
																		</div>
																</td>
														</tr>
														<tr>
																	<td>
																			Valores arqueológicos, históricos e culturais (santuário, cemitério, monumento, prédio, etc.)
																	</td>
																	<td class="col-sm-12 col-md-2">
																			<div class="form-group">
																						<div class="radio-list">
																						&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																							 </td>
																			<td>
																					<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																						</div>
																			</div>
																	</td>

															</tr>
															<tr>
																		<td>
																			Rede eléctrica e telefónica, condutas de água , gás e outras
																		</td>
																		<td class="col-sm-12 col-md-2">
																				<div class="form-group">
																							<div class="radio-list">
																							&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																								 </td>
																				<td>
																						<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																							</div>
																				</div>
																		</td>

																</tr>
																<tr>
																			<td>
																				Acções não autorizadas (Roubo, depósito de lixo, depredação )
																			</td>
																			<td class="col-sm-12 col-md-2">
																					<div class="form-group">
																								<div class="radio-list">
																								&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																									 </td>
																					<td>
																							<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																								</div>
																					</div>
																			</td>

																	</tr>
																	<tr>
																				<td>
																					Outros
																				</td>
																				<td class="col-sm-12 col-md-2">
																						<div class="form-group">
																									<div class="radio-list">
																									&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																										 </td>
																						<td>
																								<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																									</div>
																						</div>
																				</td>

																		</tr>
																	<div class="row">
																		<div class="col-md-12">
																			<div class="form-group">
																				<label class="control-label col-md-2">Evidências / Comentários / Nomes dos operadores</label>
																				<div class="col-md-10">
																					 <textarea class="form-control autosizeme" rows="4"></textarea>
																				</div>
																			</div>
																		</div>
																	</div>
																	<table class="table">
																		<thead>
																				<tr>
																					<th class="col-sm-12 col-md-8">Na documentação</th>
																					<th class="col-sm-12 col-md-2">C</th>
																					<th class="col-sm-12 col-md-2">NC</th>
																				</tr>
																		</thead>
																	<tbody>
																		<tr>
																					<td>
																							Termo de responsabilidade para execução de serviços
																					</td>
																					<td class="col-sm-12 col-md-2">
																							<div class="form-group">
																										<div class="radio-list">
																										&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
																											 </td>
																							<td>
																									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
																										</div>
																							</div>
																					</td>
																			</tr>
																			<tr>
																						<td>
																								Mapa ou croqui da propriedade
																						</td>
																						<td class="col-sm-12 col-md-2">
																								<div class="form-group">
																											<div class="radio-list">
																											&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
																												 </td>
																								<td>
																										<input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
																											</div>
																								</div>
																						</td>
																				</tr>
																				<tr>
																							<td>
																									Plano, Projeto, Licenças, Autorizações, etc.
																							</td>
																							<td class="col-sm-12 col-md-2">
																									<div class="form-group">
																												<div class="radio-list">
																												&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																													 </td>
																									<td>
																											<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																												</div>
																									</div>
																							</td>

																					</tr>
																					<tr>
																								<td>
																									Validade das edições dos documentos distribuidos pela administração
																								</td>
																								<td class="col-sm-12 col-md-2">
																										<div class="form-group">
																													<div class="radio-list">
																													&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																														 </td>
																										<td>
																												<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																													</div>
																										</div>
																								</td>

																						</tr>
																						<tr>
																									<td>
																										Outros
																									</td>
																									<td class="col-sm-12 col-md-2">
																											<div class="form-group">
																														<div class="radio-list">
																														&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																															 </td>
																											<td>
																													<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																														</div>
																											</div>
																									</td>

																							</tr>
																							<div class="row">
																								<div class="col-md-12">
																									<div class="form-group">
																										<label class="control-label col-md-2">Evidências / Comentários </label>
																										<div class="col-md-10">
																											 <textarea class="form-control autosizeme" rows="4"></textarea>
																										</div>
																									</div>
																								</div>
																							</div>
																							<tr>
																										<td>
																											Outros aspectos
																										</td>
																										<td class="col-sm-12 col-md-2">
																												<div class="form-group">
																															<div class="radio-list">
																															&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																																 </td>
																												<td>
																														<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																															</div>
																												</div>
																										</td>

																								</tr>

																								<tr>
																											<td>
																												Necessidade de ter vistoria após conclusão da operação
																											</td>
																											<td class="col-sm-12 col-md-2">
																													<div class="form-group">
																																<div class="radio-list">
																																&nbsp;<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																																	 </td>
																													<td>
																															<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																																</div>
																													</div>
																											</td>

																									</tr>
																								</tbody>
																								</table>
																								<div class="row">
																								<div class="col-md-12">
																								<div class="form-group">
																								<label class="control-label col-md-2">Evidências  / Comentários</label>
																								<div class="col-md-10">
																									 <textarea class="form-control autosizeme" rows="4"></textarea>
																								</div>
																								</div>
																								</div>
																								</div>
																								<table class="table">
																									<thead>
																											<tr>
																												<th class="col-sm-12 col-md-8"></th>
																												<th class="col-sm-12 col-md-2"></th>
																												<th class="col-sm-12 col-md-2"></th>
																											</tr>
																									</thead>
																								<tbody>
																									<tr>
																												<td>
																													Outros aspectos
																												</td>
																												<td class="col-sm-12 col-md-2">
																														<div class="form-group">
																																	<div class="radio-list">
																															<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																																		 </td>
																														<td>
																																<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																																	</div>
																														</div>
																												</td>

																										</tr>
																									</tbody>
																								</table>
																								<div class="row">
																								<div class="col-md-12">
																								<div class="form-group">
																								<label class="control-label col-md-2">Evidências  / Comentários</label>
																								<div class="col-md-10">
																									 <textarea class="form-control autosizeme" rows="4"></textarea>
																								</div>
																								</div>
																								</div>
																								</div>
																								<table class="table">
																									<thead>
																											<tr>
																												<th class="col-sm-12 col-md-8"></th>
																												<th class="col-sm-12 col-md-2">Não</th>
																												<th class="col-sm-12 col-md-2">Sim</th>
																											</tr>
																									</thead>
																								<tbody>
																									<tr>
																												<td>
																												Necessidade de ter Vistoria após a conclusão da operação?
																												</td>
																												<td class="col-sm-12 col-md-2">
																														<div class="form-group">
																																	<div class="radio-list">
																															<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
																																		 </td>
																														<td>
																																<input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
																																	</div>
																														</div>
																												</td>
																												</tr>
																									</tbody>
																								</table>
																								<div class="row">
																								<div class="col-md-6">
																									<div class="form-group">
																										<label class="control-label col-md-3">Data Prevista</label>
																										<div class="col-md-9">
																												<input type="text" class="form-control" >
																										</div>
																									</div>
																								</div>
																							</div>
																							<div class="row">
																							<div class="col-md-6">
																								<div class="form-group">
																									<label class="control-label col-md-3">Vistoriador</label>
																									<div class="col-md-9">
																											<input type="text" class="form-control" >
																									</div>
																								</div>
																							</div>
																						<div class="col-md-6">
																							<div class="form-group">
																								<label class="control-label col-md-3">Membro Responsável</label>
																								<div class="col-md-9">
																										<input type="text" class="form-control" >
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="row">
																					<div class="col-md-6">
																						<div class="form-group">
																							<label class="control-label col-md-3">Operador</label>
																							<div class="col-md-9">
																									<input type="text" class="form-control" >
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="form-actions">
																					<div class="row">
																						<div class="col-md-offset-9 col-md-8">
																							<button type="submit" class="btn green">Submeter</button>
																							<button type="button" class="btn default">Cancelar</button>
																						</div>
																					</div>
																				</div>

																								</div>
																								</div>
																							</form>
																							<!-- END FORM-->
																						</div>
																					</div>

																							<!-- END FORM-->
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
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
<script type="text/javascript" src="../../assets/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="../../assets/admin/pages/scripts/form-samples.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
   FormSamples.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
