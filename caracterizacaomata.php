<!DOCTYPE html>
<!--


Author:
Website: http://www..com/
Contact: support@.com
Follow: www.twitter.com/


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
<title>Formulário de Vistoria</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="assets/global/plugins/select2/select2.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css">
<link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css">
<link href="assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
<link href="assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
<link href="assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
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
			<form class="search-form" action="#" method="GET">
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
											<i class="icon-equalizer font-red-sunglo"></i>
											<span class="caption-subject font-red-sunglo bold uppercase">	F-16: Caracterização da Mata</span>

										</div>

									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="javascript:;" class="form-horizontal">
											<div class="form-body">
												<h3 class="form-section">Formulário - Informação Inicial</h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Data</label>
															<div class="col-md-9">
																<input type="text" class="form-control" >
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-3">
														<div class="form-group">
															<label class="control-label col-md-3">CP</label>
															<div class="col-md-9">
															<input type="text" class="form-control" >
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label class="control-label col-md-3">P</label>
															<div class="col-md-9">
															<input type="text" class="form-control" >
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
												<div class="col-md-9">
													<div class="form-group">
														<label class="control-label col-md-2">Proprietário</label>
														<div class="col-md-10">
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
															<label class="control-label col-md-3">CM</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label class="control-label col-md-3">M</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-9">
														<div class="form-group">
															<label class="control-label col-md-2">Local</label>
															<div class="col-md-10">
																	<input type="text" class="form-control" >
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-9">
														<div class="form-group">
															<label class="control-label col-md-2">Freguesia</label>
															<div class="col-md-10">
																	<input type="text" class="form-control" >
															</div>
														</div>
													</div>
														</div>
														<div class="row">
															<div class="col-md-9">
																<div class="form-group">
																	<label class="control-label col-md-2">Concelho</label>
																	<div class="col-md-10">
																			<input type="text" class="form-control" >
																	</div>
																</div>
															</div>
																</div>
																<div class="row">
																	<div class="col-md-9">
																		<div class="form-group">
																			<label class="control-label col-md-2">Artigo/s</label>
																			<div class="col-md-10">
																					<input type="text" class="form-control" >
																			</div>
																		</div>
																	</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Área da Matriz(ha) </label>
																		<div class="col-md-9">
																				<input type="text" class="form-control">
																		</div>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Área GPS (ha) </label>
																		<div class="col-md-9">
																				<input type="text" class="form-control">
																		</div>
																	</div>
																</div>
															</div
														<!--/row-->
														<div class="row">
															<div class="col-md-2">
																<div class="form-group">
																	<label class="control-label col-md-11">Identificação dos Limites por</label>

																</div>
															</div>
															<div class="col-md-3">
																<div class="form-group">
																	<label class="control-label col-md-3">GPS</label>
																	<div class="col-md-9">
																			<input type="text" class="form-control" >
																	</div>
																</div>
															</div>

															<div class="col-md-3">
																<div class="form-group">
																	<label class="control-label col-md-3">Carta Militar</label>
																	<div class="col-md-9">
																			<input type="text" class="form-control" >
																	</div>
																</div>
															</div>
															<div class="col-md-3">
																<div class="form-group">
																	<label class="control-label col-md-3">Cadastro</label>
																	<div class="col-md-9">
																			<input type="text" class="form-control" >
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-2">
																<div class="form-group">
																	<label class="control-label col-md-11"></label>

																</div>
															</div>
															<div class="col-md-3">
																<div class="form-group">
																	<label class="control-label col-md-3">Altitude</label>
																	<div class="col-md-9">
																			<input type="text" class="form-control" >
																	</div>
																</div>
															</div>

															<div class="col-md-3">
																<div class="form-group">
																	<label class="control-label col-md-3">Orto Fotos</label>
																	<div class="col-md-9">
																			<input type="text" class="form-control" >
																	</div>
																</div>
															</div>
															<div class="col-md-3">
																<div class="form-group">
																	<label class="control-label col-md-3">Área de Conservação (ha)</label>
																	<div class="col-md-9">
																			<input type="text" class="form-control" >
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-2">
																<div class="form-group">
																	<label class="control-label col-md-11"></label>

																</div>
															</div>
															<div class="col-md-3">
																<div class="form-group">
																	<label class="control-label col-md-3">Lev. Topográfico</label>
																	<div class="col-md-9">
																			<input type="text" class="form-control" >
																	</div>
																</div>
															</div>

															<div class="col-md-3">
																<div class="form-group">
																	<label class="control-label col-md-3">Área de Protecção (ha)</label>
																	<div class="col-md-9">
																			<input type="text" class="form-control" >
																	</div>
																</div>
															</div>
														</div>
													<!--/span-->
													<div class="row">
														<div class="col-md-2">
															<div class="form-group">
																<label class="control-label col-md-10">Lítigio</label>

															</div>
														</div>

													<div class="col-md-4">
														<div class="form-group">

															<div class="col-md-12">
																<div class="radio-list">
																	<label class="radio-inline">
																	<input type="radio" name="optionsRadios2" value="option1"/>
																	Sim </label>
																	<label class="radio-inline">
																	<input type="radio" name="optionsRadios2" value="option2" checked/>
																	Não</label>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Tipo</label>
															<div class="col-md-9">
																	<input type="text" class="form-control" >
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<div class="form-group">
															<label class="control-label col-md-6">Conversão de Pov.Natural após Novembro de 1994?</label>
														</div>
													</div>
															<div class="col-md-4">
																<div class="radio-list">
																	<label class="radio-inline">
																	<input type="radio" name="optionsRadios2" value="option1"/>
																	Sim </label>
																	<label class="radio-inline">
																	<input type="radio" name="optionsRadios2" value="option2" checked/>
																	Não </label>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label col-md-8">Tipo de Povoamento antes de Novembro de 1994 &nbsp; </label>
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label col-md-3">Tipo</label>
																	<div class="col-md-9">
																			<input type="text" class="form-control" >
																	</div>
																</div>
															</div>
																</div>
			<h4 class="form-section"></h4><br/>
																<div class="row">
																	<div class="col-md-2">
																		<div class="form-group">
																			<label class="control-label col-md-10">Uso do Solo</label>
																		</div>
																	</div>
																	<div class="col-md-10">
																	<div class="form-group">
																			<div class="col-md-12">
																			<div class="radio-list">
																				<label class="radio-inline">
																				<input type="radio" name="optionsRadios2" value="option1"/>
																				Florestal </label>
																				<label class="radio-inline">
																				<input type="radio" name="optionsRadios2" value="option2" checked/>
																				Agro-Florestal</label>
																				<label class="radio-inline">
																				<input type="radio" name="optionsRadios2" value="option1"/>
																				Conservação </label>
																				<label class="radio-inline">
																				<input type="radio" name="optionsRadios2" value="option1"/>
																				Inculto </label>
																				<label class="radio-inline">
																				<input type="radio" name="optionsRadios2" value="option1"/>
																				Social </label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-8">
																	<div class="form-group">
																		<label class="control-label col-md-4">Tipo de Povoamento da Mata</label>
																	</div>
																</div>
																		<div class="col-md-4">
																			<div class="radio-list">
																				<label class="radio-inline">
																				<input type="radio" name="optionsRadios2" value="option1"/>
																				Puro </label>
																				<label class="radio-inline">
																				<input type="radio" name="optionsRadios2" value="option2" checked/>
																				Misto </label>
																			</div>
																		</div>
																	</div><br/><br/>
																	<table class="table">
																	<tbody>
																		<tr>
																					<td>

																					</td>
																					<td>
																							Eucalipto
																					</td>
																					<td>
																						<div class="checkbox-list">

																							<input class="col-md-6" type="checkbox">
																						</div>
																					</td>

																			</tr>
																			<tr>
																						<td>

																						</td>
																						<td>
																								Pinheiro Bravo
																						</td>
																						<td>
																							<div class="checkbox-list">

																								<input class="col-md-6" type="checkbox">
																							</div>
																						</td>

																				</tr>
																				<tr>
																							<td>

																							</td>
																							<td>
																									Montado de Sobro
																							</td>
																							<td>
																								<div class="checkbox-list">

																									<input class="col-md-6" type="checkbox">
																								</div>
																							</td>

																					</tr>
																					<tr>
																								<td>

																								</td>
																								<td>
																										Choupo
																								</td>
																								<td>
																									<div class="checkbox-list">

																										<input class="col-md-6" type="checkbox">
																									</div>
																								</td>

																						</tr>
																						<tr>
																									<td>
																										Espécies Produtivas (Povoamentos)
																									</td>
																									<td>
																											Pinheiro Manso
																									</td>
																									<td>
																										<div class="checkbox-list">

																											<input class="col-md-6" type="checkbox">
																										</div>
																									</td>

																							</tr>
																							<tr>
																										<td>

																										</td>
																										<td>
																												Pinheiro Radiata
																										</td>
																										<td>
																											<div class="checkbox-list">

																												<input class="col-md-6" type="checkbox">
																											</div>
																										</td>

																								</tr>
																								<tr>
																											<td>

																											</td>
																											<td>
																													Pinheiro Silvestre
																											</td>
																											<td>
																												<div class="checkbox-list">

																													<input class="col-md-6" type="checkbox">
																												</div>
																											</td>

																									</tr>
																									<tr>
																												<td>

																												</td>
																												<td>
																														Cedro do Buçaco
																												</td>
																												<td>
																													<div class="checkbox-list">

																														<input class="col-md-6" type="checkbox">
																													</div>
																												</td>

																										</tr>
																										<tr>
																													<td>

																													</td>
																													<td>
																															(Outra)
																													</td>
																													<td>
																														<div class="checkbox-list">

																															<input class="col-md-6" type="checkbox">
																														</div>
																													</td>

																											</tr>
																											<tr>
																														<td >
																															Espécies Invasoras
																														</td>
																														<td>
																																Mimosa
																														</td>
																														<td>
																															<div class="checkbox-list">

																																<input class="col-md-6" type="checkbox">
																															</div>
																														</td>

																												</tr>
																												<tr>
																															<td>

																															</td>
																															<td>
																																	Austrália
																															</td>
																															<td>
																																<div class="checkbox-list">

																																	<input class="col-md-6" type="checkbox">
																																</div>
																															</td>

																													</tr>
																													<tr>
																																<td>

																																</td>
																																<td>
																																		Acácia Longifólia
																																</td>
																																<td>
																																	<div class="checkbox-list">

																																		<input class="col-md-6" type="checkbox">
																																	</div>
																																</td>

																														</tr>
																														<tr>
																																	<td>

																																	</td>
																																	<td>
																																			Ákea Picante
																																	</td>
																																	<td>
																																		<div class="checkbox-list">

																																			<input class="col-md-6" type="checkbox">
																																		</div>
																																	</td>

																															</tr>
																															<tr>
																																		<td>

																																		</td>
																																		<td>
																																				Canas
																																		</td>
																																		<td>
																																			<div class="checkbox-list">

																																				<input class="col-md-6" type="checkbox">
																																			</div>
																																		</td>

																																</tr>
																																<tr>
																																			<td>

																																			</td>
																																			<td>
																																					(Outra)
																																			</td>
																																			<td>
																																				<div class="checkbox-list">

																																					<input class="col-md-6" type="checkbox">
																																				</div>
																																			</td>

																																	</tr>
																	</tbody>
															</table>




																<h4 class="form-section"></h4><br>
																<div class="row">
																	<div class="col-md-2">
																		<div class="form-group">
																			<label class="control-label col-md-10">Acessos à Mata</label>
																		</div>
																	</div>
																	<div class="col-md-4">
																	<div class="form-group">
																			<div class="col-md-12">
																			<div class="radio-list">
																				<label class="radio-inline">
																				<input type="radio" name="optionsRadios2" value="option1"/>
																				Sim </label>
																				<label class="radio-inline">
																				<input type="radio" name="optionsRadios2" value="option2" checked/>
																				Não</label>
																			</div>
																		</div>
																	</div>
																</div>

																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Tipo de Acessos</label>
																		<div class="col-md-9">
																				<input type="text" class="form-control" >
																		</div>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-2">
																	<div class="form-group">
																		<label class="control-label col-md-10">Serventia</label>
																	</div>
																</div>
																<div class="col-md-4">
																<div class="form-group">
																		<div class="col-md-12">
																			<label class="control-label col-md-3">Tipo</label>
																			<div class="col-md-9">
																					<input type="text" class="form-control" >
																			</div>
																	</div>
																</div>
															</div>

															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label col-md-3">Onde</label>
																	<div class="col-md-9">
																			<input type="text" class="form-control" >
																	</div>
																</div>
															</div>
														</div>
														<br/>
														<table class="table">
														<tbody>
															<tr>
																		<td>

																		</td>
																		<td>
																				Estradas
																		</td>
																		<td>
																			<div class="checkbox-list">

																				<input class="col-md-6" type="checkbox">
																			</div>
																		</td>

																</tr>
																<tr>
																			<td>

																			</td>
																			<td>
																					Estradões
																			</td>
																			<td>
																				<div class="checkbox-list">

																					<input class="col-md-6" type="checkbox">
																				</div>
																			</td>

																	</tr>
																	<tr>
																				<td>
																					Tipo de Rede Viária (Infra-estruturas)
																				</td>
																				<td>
																						Caminhos Florestais Públicos
																				</td>
																				<td>
																					<div class="checkbox-list">

																						<input class="col-md-6" type="checkbox">
																					</div>
																				</td>

																		</tr>
																		<tr>
																					<td>

																					</td>
																					<td>
																							Caminhos Florestais Privados
																					</td>
																					<td>
																						<div class="checkbox-list">

																							<input class="col-md-6" type="checkbox">
																						</div>
																					</td>

																			</tr>
																			<tr>
																						<td>

																						</td>
																						<td>
																								Caminhos Florestais Públicos e Privados
																						</td>
																						<td>
																							<div class="checkbox-list">

																								<input class="col-md-6" type="checkbox">
																							</div>
																						</td>

																				</tr>
																				<tr>
																							<td>

																							</td>
																							<td>
																									Aceiros
																							</td>
																							<td>
																								<div class="checkbox-list">

																									<input class="col-md-6" type="checkbox">
																								</div>
																							</td>

																					</tr>
																					<tr>
																								<td>
																									Inserção da Rede Viária
																								</td>
																								<td>
																									Nas Extremas da Mata
																								</td>
																								<td>
																									<div class="checkbox-list">

																										<input class="col-md-6" type="checkbox">
																									</div>
																								</td>

																						</tr>
																						<tr>
																									<td>

																									</td>
																									<td>
																											No interior da Mata
																									</td>
																									<td>
																										<div class="checkbox-list">

																											<input class="col-md-6" type="checkbox">
																										</div>
																									</td>

																							</tr>
																							<tr>
																										<td>

																										</td>
																										<td>
																												Nas Extremas e no Interior da Mata
																										</td>
																										<td>
																											<div class="checkbox-list">

																												<input class="col-md-6" type="checkbox">
																											</div>
																										</td>
																									</tr>
														</tbody>
												</table>
												<div class="row">
													<div class="col-md-8">
														<div class="form-group">
															<label class="control-label col-md-6">Existência ou Necessidade de ter Trilhos de Extracção na Mata</label>
														</div>
													</div>
															<div class="col-md-4">
																<div class="radio-list">
																	<label class="radio-inline">
																	<input type="radio" name="optionsRadios2" value="option1"/>
																	Sim </label>
																	<label class="radio-inline">
																	<input type="radio" name="optionsRadios2" value="option2" checked/>
																	Não </label>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-8">
																<div class="form-group">
																	<label class="control-label col-md-6">Travessia de Locais Habitados</label>
																</div>
															</div>
																	<div class="col-md-4">
																		<div class="radio-list">
																			<label class="radio-inline">
																			<input type="radio" name="optionsRadios2" value="option1"/>
																			Sim </label>
																			<label class="radio-inline">
																			<input type="radio" name="optionsRadios2" value="option2" checked/>
																			Não </label>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-8">
																		<div class="form-group">
																			<label class="control-label col-md-6">Pontos de Inversão de Marcha</label>
																		</div>
																	</div>
																			<div class="col-md-4">
																				<div class="radio-list">
																					<label class="radio-inline">
																					<input type="radio" name="optionsRadios2" value="option1"/>
																					Sim </label>
																					<label class="radio-inline">
																					<input type="radio" name="optionsRadios2" value="option2" checked/>
																					Não </label>
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-md-8">
																				<div class="form-group">
																					<label class="control-label col-md-6">Saídas de Emergência</label>
																				</div>
																			</div>
																					<div class="col-md-4">
																						<div class="radio-list">
																							<label class="radio-inline">
																							<input type="radio" name="optionsRadios2" value="option1"/>
																							Sim </label>
																							<label class="radio-inline">
																							<input type="radio" name="optionsRadios2" value="option2" checked/>
																							Não </label>
																						</div>
																					</div>
																				</div>
																				<br/>
																				<br/>

																	<h4 class="form-section"> Tipologia </h4>

																	<table class="table">
																		<thead>
																				<tr>
																					<th class="col-sm-12 col-md-4">Tipo de Infra-Estruturas Rodoviárias ou nas suas Extremas: <br/>(Estradas e ou Estradões)</th>
																					<th class="col-sm-12 col-md-2">Localização Exemplos:<br/> Na Extrema da Mata, a Norte<br/> ou <br/>Atravessa a Mata, na sua parte Norte</th>
																					<th class="col-sm-12 col-md-2">Orientação Exemplos:<br/> N - S <br/> E - W <br/> NE - SW <br/> NW - SE</th>

																				</tr>
																		</thead>
																	<tbody>
																		<tr>
																					<td>
																							<input type="text" class="form-control" />
																					</td>
																					<td>
																							<input type="text" class="form-control" />
																					</td>
																					<td>
																							<input type="text" class="form-control" />
																					</td>

																			</tr>
																			<tr>
																						<td>
																								<input type="text" class="form-control" />
																						</td>
																						<td>
																								<input type="text" class="form-control" />
																						</td>
																						<td>
																								<input type="text" class="form-control" />
																						</td>

																				</tr>
																				<tr>
																							<td>
																									<input type="text" class="form-control" />
																							</td>
																							<td>
																									<input type="text" class="form-control" />
																							</td>
																							<td>
																									<input type="text" class="form-control" />
																							</td>

																					</tr>
																					<tr>
																								<td>
																										<input type="text" class="form-control" />
																								</td>
																								<td>
																										<input type="text" class="form-control" />
																								</td>
																								<td>
																										<input type="text" class="form-control" />
																								</td>

																						</tr>
																	</tbody>
															</table>
																<h4 class="form-section"></h4><br/>
															<div class="row">
																<div class="col-md-8">
																	<div class="form-group">
																		<label class="control-label col-md-6">Existência de Linhas de Corta Fogo</label>
																	</div>
																</div>
																		<div class="col-md-4">
																			<div class="radio-list">
																				<label class="radio-inline">
																				<input type="radio" name="optionsRadios2" value="option1"/>
																				Sim </label>
																				<label class="radio-inline">
																				<input type="radio" name="optionsRadios2" value="option2" checked/>
																				Não </label>
																			</div>
																		</div>
																	</div>
																	<br/>

																			<div class="row">
																				<div class="col-md-9">
																					<div class="form-group">
																						<label class="control-label col-md-2">Tipo de Linhas de Corta Fogo <br/> (Aceiros - Arrifes - Caminhos Florestais nas Extremas</label>
																						<div class="col-md-7">
																							 <textarea class="form-control autosizeme" rows="4"></textarea>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-9">
																					<div class="form-group">
																						<label class="control-label col-md-2">Localização da Inserção na Mata</label>
																						<div class="col-md-10">
																								<input type="text" class="form-control" >
																						</div>
																					</div>
																				</div>
																					</div>
																					<div class="row">
																						<div class="col-md-9">
																							<div class="form-group">
																								<label class="control-label col-md-2">Orientação das Linhas de Corta Fogo</label>
																								<div class="col-md-10">
																										<input type="text" class="form-control" >
																								</div>
																							</div>
																						</div>
																							</div>
																							<div class="row">
																								<div class="col-md-9">
																									<div class="form-group">
																										<label class="control-label col-md-2">Proprietário da Linha de Corta Fogo<br/> (Proprietário - Pública - Mata Vizinha)</label>
																										<div class="col-md-7">
																											 <textarea class="form-control autosizeme" rows="4"></textarea>
																										</div>
																									</div>
																								</div>
																							</div>
																							<h4 class="form-section">  </h4><br/>
																							<div class="row">
																								<div class="col-md-8">
																									<div class="form-group">
																										<label class="control-label col-md-6">Pontos de Água</label>
																									</div>
																								</div>
																										<div class="col-md-4">
																											<div class="radio-list">
																												<label class="radio-inline">
																												<input type="radio" name="optionsRadios2" value="option1"/>
																												Sim </label>
																												<label class="radio-inline">
																												<input type="radio" name="optionsRadios2" value="option2" checked/>
																												Não </label>
																											</div>
																										</div>
																									</div>
																									<div class="row">
																										<div class="col-md-9">
																											<div class="form-group">
																												<label class="control-label col-md-2">Tipo de Ponto de Água</label>
																												<div class="col-md-10">
																														<input type="text" class="form-control" >
																												</div>
																											</div>
																										</div>
																											</div>
																											<div class="row">
																												<div class="col-md-8">
																													<div class="form-group">
																														<label class="control-label col-md-6">Propriedade do Ponto de Água</label>
																													</div>
																												</div>
																														<div class="col-md-4">
																															<div class="radio-list">
																																<label class="radio-inline">
																																<input type="radio" name="optionsRadios2" value="option1"/>
																																Sim </label>
																																<label class="radio-inline">
																																<input type="radio" name="optionsRadios2" value="option2" checked/>
																																Não </label>
																															</div>
																														</div>
																													</div>
																													<div class="row">
																														<div class="col-md-9">
																															<div class="form-group">
																																<label class="control-label col-md-2">Localização</label>
																																<div class="col-md-10">
																																		<input type="text" class="form-control" >
																																</div>
																															</div>
																														</div>
																															</div>
																															<br/>
																															<div class="row">
																																<div class="col-md-9">
																																	<div class="form-group">
																																		<label class="control-label col-md-2">Distância de Protecção (m)</label>
																																		<div class="col-md-10">
																																				<input type="text" class="form-control" >
																																		</div>
																																	</div>
																																</div>
																																	</div>
																																	<div class="row">
																																		<div class="col-md-9">
																																			<div class="form-group">
																																				<label class="control-label col-md-2">Observação</label>
																																				<div class="col-md-10">
																																						<input type="text" class="form-control" >
																																				</div>
																																			</div>
																																		</div>
																																			</div>
																																				<h4 class="form-section"> </h4><br/>
																																				<div class="row">
																																					<div class="col-md-8">
																																						<div class="form-group">
																																							<label class="control-label col-md-6">Existência de Linhas de Água</label>
																																						</div>
																																					</div>
																																							<div class="col-md-4">
																																								<div class="radio-list">
																																									<label class="radio-inline">
																																									<input type="radio" name="optionsRadios2" value="option1"/>
																																									Sim </label>
																																									<label class="radio-inline">
																																									<input type="radio" name="optionsRadios2" value="option2" checked/>
																																									Não </label>
																																								</div>
																																							</div>
																																						</div><br/>
																																						<div class="row">
																																							<div class="col-md-8">
																																								<div class="form-group">
																																									<label class="control-label col-md-6">Tipo de Escorrência</label>
																																								</div>
																																							</div>
																																									<div class="col-md-4">
																																										<div class="radio-list">
																																											<label class="radio-inline">
																																											<input type="radio" name="optionsRadios2" value="option1"/>
																																											Exorreica </label>
																																											<label class="radio-inline">
																																											<input type="radio" name="optionsRadios2" value="option2" checked/>
																																											Endorreica </label>
																																										</div>
																																									</div>
																																								</div><br/>
																																								<div class="row">
																																									<div class="col-md-4">
																																										<div class="form-group">
																																											<label class="control-label col-md-6">Eutrofização das Águas</label>
																																										</div>
																																									</div>
																																											<div class="col-md-2">
																																												<div class="radio-list">
																																													<label class="radio-inline">
																																													<input type="radio" name="optionsRadios2" value="option1"/>
																																													Sim </label>
																																													<label class="radio-inline">
																																													<input type="radio" name="optionsRadios2" value="option2" checked/>
																																													Não </label>
																																												</div>
																																											</div>
																																											<div class="col-md-3">
																																												<div class="form-group">
																																													<label class="control-label col-md-2">Causa</label>
																																													<div class="col-md-10">
																																															<input type="text" class="form-control" >
																																													</div>
																																												</div>
																																											</div>
																																											<div class="col-md-3">
																																												<div class="form-group">
																																													<label class="control-label col-md-2">Onde</label>
																																													<div class="col-md-10">
																																															<input type="text" class="form-control" >
																																													</div>
																																												</div>
																																											</div>
																																												</div>
																																												<div class="row">
																																													<div class="col-md-9">
																																														<div class="form-group">
																																															<label class="control-label col-md-2">Identificação da Bacia Hidrográfica</label>
																																															<div class="col-md-10">
																																																	<input type="text" class="form-control" >
																																															</div>
																																														</div>
																																													</div>
																																												</div>
																																													<table class="table">
																																														<thead>
																																																<tr>
																																																	<th class="col-sm-12 col-md-4">Nº</th>
																																																	<th class="col-sm-12 col-md-2">Linha de Água <br/> (Tipo) <br/> (LAP - LAT - LAE)</th>
																																																	<th class="col-sm-12 col-md-2">Localização</th>
																																																	<th class="col-sm-12 col-md-2">Sentido da Escorrência</th>
																																																	<th class="col-sm-12 col-md-2">Distância de Protecção (m)</th>

																																																</tr>
																																														</thead>
																																													<tbody>
																																														<tr>
																																																	<td>
																																																			<input type="text" class="form-control" />
																																																	</td>
																																																	<td>
																																																			<input type="text" class="form-control" />
																																																	</td>
																																																	<td>
																																																			<input type="text" class="form-control" />
																																																	</td>
																																																	<td>
																																																			<input type="text" class="form-control" />
																																																	</td>
																																																	<td>
																																																			<input type="text" class="form-control" />
																																																	</td>

																																															</tr>
																																															<tr>
																																																		<td>
																																																				<input type="text" class="form-control" />
																																																		</td>
																																																		<td>
																																																				<input type="text" class="form-control" />
																																																		</td>
																																																		<td>
																																																				<input type="text" class="form-control" />
																																																		</td>
																																																		<td>
																																																				<input type="text" class="form-control" />
																																																		</td>
																																																		<td>
																																																				<input type="text" class="form-control" />
																																																		</td>

																																																</tr>
																																																<tr>
																																																			<td>
																																																					<input type="text" class="form-control" />
																																																			</td>
																																																			<td>
																																																					<input type="text" class="form-control" />
																																																			</td>
																																																			<td>
																																																					<input type="text" class="form-control" />
																																																			</td>
																																																			<td>
																																																					<input type="text" class="form-control" />
																																																			</td>
																																																			<td>
																																																					<input type="text" class="form-control" />
																																																			</td>

																																																	</tr>
																																																	<tr>
																																																				<td>
																																																						<input type="text" class="form-control" />
																																																				</td>
																																																				<td>
																																																						<input type="text" class="form-control" />
																																																				</td>
																																																				<td>
																																																						<input type="text" class="form-control" />
																																																				</td>
																																																				<td>
																																																						<input type="text" class="form-control" />
																																																				</td>
																																																				<td>
																																																						<input type="text" class="form-control" />
																																																				</td>

																																																		</tr>
																																																		<tr>
																																																					<td>
																																																							<input type="text" class="form-control" />
																																																					</td>
																																																					<td>
																																																							<input type="text" class="form-control" />
																																																					</td>
																																																					<td>
																																																							<input type="text" class="form-control" />
																																																					</td>
																																																					<td>
																																																							<input type="text" class="form-control" />
																																																					</td>
																																																					<td>
																																																							<input type="text" class="form-control" />
																																																					</td>

																																																			</tr>
																																													</tbody>
																																											</table>
																																											<table class="table">
																																												<thead>
																																														<tr>
																																															<th class="col-sm-12 col-md-1">Nº</th>
																																															<th class="col-sm-12 col-md-2">Linha de Água <br/> (Tipo) <br/> (LAP - LAT - LAE)</th>
																																															<th class="col-sm-12 col-md-1">Travessia da LA <br/> S - N</th>
																																															<th class="col-sm-12 col-md-2">Tipo de Travessia <br/> Vau - Manilhas <br/> Pontão - Ponte <br/> Outra</th>
																																															<th class="col-sm-12 col-md-1">Competência da LA <br/> Forte - Média - Fraca</th>
																																															<th class="col-sm-12 col-md-2">Risco de Erosão <br/> das Margens <br/> S - N</th>
																																															<th class="col-sm-12 col-md-1">Risco de Assoreamento <br/> S - N</th>
																																															<th class="col-sm-12 col-md-2">Sítio onde ocorre </th>

																																														</tr>
																																												</thead>
																																											<tbody>
																																												<tr>
																																															<td>
																																																	<input type="text" class="form-control" />
																																															</td>
																																															<td>
																																																	<input type="text" class="form-control" />
																																															</td>
																																															<td>
																																																	<input type="text" class="form-control" />
																																															</td>
																																															<td>
																																																	<input type="text" class="form-control" />
																																															</td>
																																															<td>
																																																	<input type="text" class="form-control" />
																																															</td>
																																															<td>
																																																	<input type="text" class="form-control" />
																																															</td>
																																															<td>
																																																	<input type="text" class="form-control" />
																																															</td>
																																															<td>
																																																	<input type="text" class="form-control" />
																																															</td>

																																													</tr>
																																													<tr>
																																																<td>
																																																		<input type="text" class="form-control" />
																																																</td>
																																																<td>
																																																		<input type="text" class="form-control" />
																																																</td>
																																																<td>
																																																		<input type="text" class="form-control" />
																																																</td>
																																																<td>
																																																		<input type="text" class="form-control" />
																																																</td>
																																																<td>
																																																		<input type="text" class="form-control" />
																																																</td>
																																																<td>
																																																		<input type="text" class="form-control" />
																																																</td>
																																																<td>
																																																		<input type="text" class="form-control" />
																																																</td>
																																																<td>
																																																		<input type="text" class="form-control" />
																																																</td>

																																														</tr>
																																															<tr>
																																																			<td>
																																																					<input type="text" class="form-control" />
																																																			</td>
																																																			<td>
																																																					<input type="text" class="form-control" />
																																																			</td>
																																																			<td>
																																																					<input type="text" class="form-control" />
																																																			</td>
																																																			<td>
																																																					<input type="text" class="form-control" />
																																																			</td>
																																																			<td>
																																																					<input type="text" class="form-control" />
																																																			</td>
																																																			<td>
																																																					<input type="text" class="form-control" />
																																																			</td>
																																																			<td>
																																																					<input type="text" class="form-control" />
																																																			</td>
																																																			<td>
																																																					<input type="text" class="form-control" />
																																																			</td>

																																																	</tr>
																																																	<tr>
																																																				<td>
																																																						<input type="text" class="form-control" />
																																																				</td>
																																																				<td>
																																																						<input type="text" class="form-control" />
																																																				</td>
																																																				<td>
																																																						<input type="text" class="form-control" />
																																																				</td>
																																																				<td>
																																																						<input type="text" class="form-control" />
																																																				</td>
																																																				<td>
																																																						<input type="text" class="form-control" />
																																																				</td>
																																																				<td>
																																																						<input type="text" class="form-control" />
																																																				</td>
																																																				<td>
																																																						<input type="text" class="form-control" />
																																																				</td>
																																																				<td>
																																																						<input type="text" class="form-control" />
																																																				</td>

																																																		</tr>
																																																		<tr>
																																																					<td>
																																																							<input type="text" class="form-control" />
																																																					</td>
																																																					<td>
																																																							<input type="text" class="form-control" />
																																																					</td>
																																																					<td>
																																																							<input type="text" class="form-control" />
																																																					</td>
																																																					<td>
																																																							<input type="text" class="form-control" />
																																																					</td>
																																																					<td>
																																																							<input type="text" class="form-control" />
																																																					</td>
																																																					<td>
																																																							<input type="text" class="form-control" />
																																																					</td>
																																																					<td>
																																																							<input type="text" class="form-control" />
																																																					</td>
																																																					<td>
																																																							<input type="text" class="form-control" />
																																																					</td>

																																																			</tr>
																																											</tbody>
																																									</table>
																																									<table class="table">
																																										<thead>
																																												<tr>
																																													<th class="col-sm-12 col-md-4"></th>
																																													<th class="col-sm-12 col-md-1">Sim</th>
																																													<th class="col-sm-12 col-md-1">Não</th>
																																													<th class="col-sm-12 col-md-3">Identificação</th>
																																													<th class="col-sm-12 col-md-3">Localização na Mata ou na Extrema</th>

																																												</tr>
																																										</thead>
																																									<tbody>
																																										<tr>
																																													<td>
																																															Laguna ou Lago
																																													</td>
																																													<td>
																																															<input type="text" class="form-control" />
																																													</td>
																																													<td>
																																															<input type="text" class="form-control" />
																																													</td>
																																													<td>
																																															<input type="text" class="form-control" />
																																													</td>
																																													<td>
																																															<input type="text" class="form-control" />
																																													</td>

																																											</tr>
																																											<tr>
																																														<td>
																																																Charca
																																														</td>
																																														<td>
																																																<input type="text" class="form-control" />
																																														</td>
																																														<td>
																																																<input type="text" class="form-control" />
																																														</td>
																																														<td>
																																																<input type="text" class="form-control" />
																																														</td>
																																														<td>
																																																<input type="text" class="form-control" />
																																														</td>

																																												</tr>
																																												<tr>
																																															<td>
																																																	Albufeira
																																															</td>
																																															<td>
																																																	<input type="text" class="form-control" />
																																															</td>
																																															<td>
																																																	<input type="text" class="form-control" />
																																															</td>
																																															<td>
																																																	<input type="text" class="form-control" />
																																															</td>
																																															<td>
																																																	<input type="text" class="form-control" />
																																															</td>

																																													</tr>
																																													<tr>
																																																<td>
																																																		Paúl
																																																</td>
																																																<td>
																																																		<input type="text" class="form-control" />
																																																</td>
																																																<td>
																																																		<input type="text" class="form-control" />
																																																</td>
																																																<td>
																																																		<input type="text" class="form-control" />
																																																</td>
																																																<td>
																																																		<input type="text" class="form-control" />
																																																</td>

																																														</tr>

																																									</tbody>
																																							</table>
																																							<div class="row">
																																							<div class="col-md-8">
																																								<div class="form-group">
																																									<label class="control-label col-md-6">Poluição</label>
																																								</div>
																																							</div>
																																									<div class="col-md-4">
																																										<div class="radio-list">
																																											<label class="radio-inline">
																																											<input type="radio" name="optionsRadios2" value="option1"/>
																																											Sim </label>
																																											<label class="radio-inline">
																																											<input type="radio" name="optionsRadios2" value="option2" checked/>
																																											Não </label>
																																										</div>
																																									</div>
																																								</div><br/>
																																								<div class="row">
																																									<div class="col-md-9">
																																										<div class="form-group">
																																											<label class="control-label col-md-2">Localização da Poluição na Mata</label>
																																											<div class="col-md-10">
																																													<input type="text" class="form-control" >
																																											</div>
																																										</div>
																																									</div>
																																								</div>
																																								<div class="row">
																																									<div class="col-md-9">
																																										<div class="form-group">
																																											<label class="control-label col-md-2">Tipo de Poluição</label>
																																											<div class="col-md-10">
																																													<input type="text" class="form-control" >
																																											</div>
																																										</div>
																																									</div>
																																								</div><br/>
																																								<div class="row">
																																									<div class="col-md-9">
																																										<div class="form-group">
																																											<label class="control-label col-md-2">Fonte da Poluição</label>
																																											<div class="col-md-10">
																																													<input type="text" class="form-control" >
																																											</div>
																																										</div>
																																									</div>
																																								</div>
																																								<div class="row">
																																									<div class="col-md-4">
																																										<div class="form-group">
																																											<label class="control-label col-md-6">Risco de Alastramento da Área Poluída</label>
																																										</div>
																																									</div>
																																											<div class="col-md-2">
																																												<div class="radio-list">
																																													<label class="radio-inline">
																																													<input type="radio" name="optionsRadios2" value="option1"/>
																																													Sim </label>
																																													<label class="radio-inline">
																																													<input type="radio" name="optionsRadios2" value="option2" checked/>
																																													Não </label>
																																												</div>
																																											</div>
																																											<div class="col-md-6">
																																												<div class="form-group">
																																													<label class="control-label col-md-2">Local em Risco</label>
																																													<div class="col-md-10">
																																															<input type="text" class="form-control" >
																																													</div>
																																												</div>
																																											</div>
																																												</div>
																																												<div class="row">
																																													<div class="col-md-9">
																																														<div class="form-group">
																																															<label class="control-label col-md-2">Medidas a Implementar</label>
																																															<div class="col-md-10">
																																																	<input type="text" class="form-control" >
																																															</div>
																																														</div>
																																													</div>
																																												</div>
																																												<div class="row">
																																													<div class="col-md-9">
																																														<div class="form-group">
																																															<label class="control-label col-md-2">Tipo Geológico</label>
																																															<div class="col-md-10">
																																																	<input type="text" class="form-control" >
																																															</div>
																																														</div>
																																													</div>
																																												</div>
																																												<br/>
																																												<div class="row">
																																													<div class="col-md-9">
																																														<div class="form-group">
																																															<label class="control-label col-md-2">Cor do Solo</label>
																																															<div class="col-md-10">
																																																	<input type="text" class="form-control" >
																																															</div>
																																														</div>
																																													</div>
																																												</div>
																																												<br/>
																																												<div class="row">
																																													<div class="col-md-2">
																																														<div class="form-group">
																																															<label class="control-label col-md-10">Espessura do Solo</label>
																																														</div>
																																													</div>
																																													<div class="col-md-10">
																																													<div class="form-group">
																																															<div class="col-md-12">
																																															<div class="radio-list">
																																																<label class="control-label col-md-2 radio-inline">
																																																<input type="radio" name="optionsRadios2" value="option1"/>
																																																Reduzida </label>
																																																<label class=" control-label col-md-2 radio-inline">
																																																<input type="radio" name="optionsRadios2" value="option2" />
																																																Pequena</label>
																																																<label class=" control-label col-md-2 radio-inline">
																																																<input type="radio" name="optionsRadios2" value="option1"/>
																																																Moderada </label>
																																																<label class=" control-label col-md-2 radio-inline">
																																																<input type="radio" name="optionsRadios2" value="option1"/>
																																																Elevada </label>
																																															</div>
																																														</div>
																																													</div>
																																												</div>
																																											</div>
																																											<div class="row">
																																												<div class="col-md-2">
																																													<div class="form-group">
																																														<label class="control-label col-md-10">Pedrogosidade</label>
																																													</div>
																																												</div>
																																												<div class="col-md-10">
																																												<div class="form-group">
																																														<div class="col-md-12">
																																														<div class="radio-list">
																																															<label class="control-label col-md-2 radio-inline">
																																															<input type="radio" name="optionsRadios2" value="option1"/>
																																															Nula </label>
																																															<label class="control-label col-md-2 radio-inline">
																																															<input type="radio" name="optionsRadios2" value="option2" checked/>
																																															Baixa</label>
																																															<label class="control-label col-md-2 radio-inline">
																																															<input type="radio" name="optionsRadios2" value="option1"/>
																																															Média </label>
																																															<label class="control-label col-md-2 radio-inline">
																																															<input type="radio" name="optionsRadios2" value="option1"/>
																																															Elevada </label>
																																														</div>
																																													</div>
																																												</div>
																																											</div>
																																										</div>
																																										<br/>
																																										<div class="row">
																																											<div class="col-md-2">
																																												<div class="form-group">
																																													<label class="control-label col-md-10">Textura</label>
																																												</div>
																																											</div>
																																											<div class="col-md-10">
																																											<div class="form-group">
																																													<div class="col-md-12">
																																													<div class="radio-list">
																																														<label class="control-label col-md-2 radio-inline">
																																														<input type="radio" name="optionsRadios2" value="option1"/>
																																														Ligeira </label>
																																														<label class="control-label col-md-2 radio-inline">
																																														<input type="radio" name="optionsRadios2" value="option2" checked/>
																																														Média</label>
																																														<label class="control-label col-md-2 radio-inline">
																																														<input type="radio" name="optionsRadios2" value="option1"/>
																																														Pesada </label>
																																														<label class="control-label col-md-2 radio-inline">
																																														<input type="radio" name="optionsRadios2" value="option1"/>
																																														Elevada </label>
																																													</div>
																																												</div>
																																											</div>
																																										</div>
																																									</div>
																																									<br/>
																																									<div class="row">
																																										<div class="col-md-2">
																																											<div class="form-group">
																																												<label class="control-label col-md-10">Afloramentos Rochosos</label>

																																											</div>
																																										</div>

																																									<div class="col-md-4">
																																										<div class="form-group">

																																											<div class="col-md-12">
																																												<div class="radio-list">
																																													<label class="radio-inline">
																																													<input type="radio" name="optionsRadios2" value="option1"/>
																																													Sim </label>
																																													<label class="radio-inline">
																																													<input type="radio" name="optionsRadios2" value="option2" checked/>
																																													Não</label>
																																												</div>
																																											</div>
																																										</div>
																																									</div>
																																									<div class="col-md-6">
																																										<div class="form-group">
																																											<label class="control-label col-md-3">Quais</label>
																																											<div class="col-md-9">
																																													<input type="text" class="form-control" >
																																											</div>
																																										</div>
																																									</div>
																																								</div>
																																								<br/>
																																								<div class="row">
																																								<div class="col-md-8">
																																									<div class="form-group">
																																										<label class="control-label col-md-6">Equilibrio dos Afloramentos Rochosos</label>
																																									</div>
																																								</div>
																																										<div class="col-md-4">
																																											<div class="radio-list">
																																												<label class="radio-inline">
																																												<input type="radio" name="optionsRadios2" value="option1"/>
																																												Sim </label>
																																												<label class="radio-inline">
																																												<input type="radio" name="optionsRadios2" value="option2" checked/>
																																												Não </label>
																																											</div>
																																										</div>
																																									</div><br/>
																																									<div class="row">
																																									<div class="col-md-8">
																																										<div class="form-group">
																																											<label class="control-label col-md-6">Dispersão dos Afloramentos Rochosos</label>
																																										</div>
																																									</div>
																																											<div class="col-md-4">
																																												<div class="radio-list">
																																													<label class="radio-inline">
																																													<input type="radio" name="optionsRadios2" value="option1"/>
																																													Sim </label>
																																													<label class="radio-inline">
																																													<input type="radio" name="optionsRadios2" value="option2" checked/>
																																													Não </label>
																																												</div>
																																											</div>
																																										</div><br/>
																																								<div class="row">
																																									<div class="col-md-2">
																																										<div class="form-group">
																																											<label class="control-label col-md-10">Qualidade do Solo</label>
																																										</div>
																																									</div>
																																									<div class="col-md-10">
																																									<div class="form-group">
																																											<div class="col-md-12">
																																											<div class="radio-list">
																																												<label class="control-label col-md-2 radio-inline">
																																												<input type="radio" name="optionsRadios2" value="option1"/>
																																												Fraco  </label>
																																												<label class="control-label col-md-2 radio-inline">
																																												<input type="radio" name="optionsRadios2" value="option2" checked/>
																																												Razoável</label>
																																												<label class="control-label col-md-2 radio-inline">
																																												<input type="radio" name="optionsRadios2" value="option1"/>
																																												Bom</label>

																																											</div>
																																										</div>
																																									</div>
																																								</div>
																																							</div>
																																							<div class="row">
																																								<div class="col-md-2">
																																									<div class="form-group">
																																										<label class="control-label col-md-10">Exposição do Solo à Erosão</label>
																																									</div>
																																								</div>
																																								<div class="col-md-10">
																																								<div class="form-group">
																																										<div class="col-md-12">
																																										<div class="radio-list">
																																											<label class="control-label col-md-2 radio-inline">
																																											<input type="radio" name="optionsRadios2" value="option1"/>
																																											Irrelevante </label>
																																											<label class="control-label col-md-2 radio-inline">
																																											<input type="radio" name="optionsRadios2" value="option2" checked/>
																																											Reduzida</label>
																																											<label class="control-label col-md-2 radio-inline">
																																											<input type="radio" name="optionsRadios2" value="option1"/>
																																											Considerável </label>
																																											<label class="control-label col-md-2 radio-inline">
																																											<input type="radio" name="optionsRadios2" value="option1"/>
																																											Elevada </label>
																																										</div>
																																									</div>
																																								</div>
																																							</div>
																																						</div>
																																						<br/>
																																						<div class="row">
																																							<div class="col-md-2">
																																								<div class="form-group">
																																									<label class="control-label col-md-10">Significância do Proc. Erosivo</label>
																																								</div>
																																							</div>
																																							<div class="col-md-10">
																																							<div class="form-group">
																																									<div class="col-md-12">
																																									<div class="radio-list">
																																										<label class="control-label col-md-2 radio-inline">
																																										<input type="radio" name="optionsRadios2" value="option1"/>
																																										Irrelevante </label>
																																										<label class="control-label col-md-2 radio-inline">
																																										<input type="radio" name="optionsRadios2" value="option2" checked/>
																																										Baixo</label>
																																										<label class="control-label col-md-2 radio-inline">
																																										<input type="radio" name="optionsRadios2" value="option1"/>
																																										Significativo</label>
																																										<label class="control-label col-md-2 radio-inline">
																																										<input type="radio" name="optionsRadios2" value="option1"/>
																																										Elevado</label>
																																									</div>
																																								</div>
																																							</div>
																																						</div>
																																					</div>
																																					<br/>
																																					<div class="row">
																																						<div class="col-md-2">
																																							<div class="form-group">
																																								<label class="control-label col-md-10">Tipo de Erosão (Qualitativa)</label>
																																							</div>
																																						</div>
																																						<div class="col-md-10">
																																						<div class="form-group">
																																								<div class="col-md-12">
																																								<div class="radio-list">
																																									<label class="control-label col-md-2 radio-inline">
																																									<input type="radio" name="optionsRadios2" value="option1"/>
																																									Difusa </label>
																																									<label class="control-label col-md-2 radio-inline">
																																									<input type="radio" name="optionsRadios2" value="option2" checked/>
																																									Sulcos</label>
																																									<label class="control-label col-md-2 radio-inline">
																																									<input type="radio" name="optionsRadios2" value="option1"/>
																																									Ravinamento</label>
																																								</div>
																																							</div>
																																						</div>
																																					</div>
																																				</div>
																																				<br/>
																																				<div class="row">
																																					<div class="col-md-2">
																																						<div class="form-group">
																																							<label class="control-label col-md-10">Processo de Erosivo</label>
																																						</div>
																																					</div>
																																					<div class="col-md-10">
																																					<div class="form-group">
																																							<div class="col-md-12">
																																							<div class="radio-list">
																																								<label class="control-label col-md-2 radio-inline">
																																								<input type="radio" name="optionsRadios2" value="option1"/>
																																								Águas Pluviais</label>
																																								<label class="control-label col-md-2 radio-inline">
																																								<input type="radio" name="optionsRadios2" value="option2" checked/>
																																								Meteorização</label>
																																								<label class="control-label col-md-2 radio-inline">
																																								<input type="radio" name="optionsRadios2" value="option1"/>
																																								Vento</label>
																																							</div>
																																						</div>
																																					</div>
																																				</div>
																																			</div>
																																			<br/>
																																			<div class="row">
																																				<div class="col-md-2">
																																					<div class="form-group">
																																						<label class="control-label col-md-10">Tipo de Escorrência</label>
																																					</div>
																																				</div>
																																				<div class="col-md-10">
																																				<div class="form-group">
																																						<div class="col-md-12">
																																						<div class="radio-list">
																																							<label class="control-label col-md-2 radio-inline">
																																							<input type="radio" name="optionsRadios2" value="option1"/>
																																							Laminar </label>
																																							<label class="control-label col-md-2 radio-inline">
																																							<input type="radio" name="optionsRadios2" value="option2" checked/>
																																							Difusa</label>
																																							<label class="control-label col-md-2 radio-inline">
																																							<input type="radio" name="optionsRadios2" value="option1"/>
																																							Concentrada</label>
																																							<label class="control-label col-md-2 radio-inline">
																																							<input type="radio" name="optionsRadios2" value="option1"/>
																																							Torrencial</label>
																																						</div>
																																					</div>
																																				</div>
																																			</div>
																																		</div>
																																		<br/>
																																	</table>
																																	<table class="table">
																																		<thead>
																																				<tr>
																																					<th class="col-sm-12 col-md-4"></th>
																																					<th class="col-sm-12 col-md-1">Sim</th>
																																					<th class="col-sm-12 col-md-1">Não</th>
																																					<th class="col-sm-12 col-md-3">Localização onde ocorre na Mata</th>

																																				</tr>
																																		</thead>
																																	<tbody>
																																		<tr>
																																					<td>
																																							Risco de Ravinamento
																																					</td>
																																					<td>
																																						<input type="radio" name="optionsRadios2" value="option1"/>
																																					</td>
																																					<td>
																																							<input type="radio" name="optionsRadios2" value="option1"/>
																																					</td>
																																					<td>
																																							<input type="text" class="form-control" />
																																					</td>
																																				</tr>
																																							<tr>
																																						<td>
																																								Risco de Compactação
																																							</td>
																																							<td>
																																								<input type="radio" name="optionsRadios2" value="option1"/>
																																							</td>
																																							<td>
																																									<input type="radio" name="optionsRadios2" value="option1"/>
																																							</td>
																																							<td>
																																									<input type="text" class="form-control" />
																																							</td>
																																						</tr>
																																				<tr>
																																							<td>
																																									Risco de Deslizamento
																																								</td>
																																								<td>
																																									<input type="radio" name="optionsRadios2" value="option1"/>
																																								</td>
																																								<td>
																																										<input type="radio" name="optionsRadios2" value="option1"/>
																																								</td>
																																								<td>
																																										<input type="text" class="form-control" />
																																								</td>
																																							</tr>
																																					<tr>
																																								<td>
																																									Risco de Desabamento
																																								</td>
																																								<td>
																																									<input type="radio" name="optionsRadios2" value="option1"/>
																																								</td>
																																								<td>
																																										<input type="radio" name="optionsRadios2" value="option1"/>
																																								</td>
																																								<td>
																																										<input type="text" class="form-control" />
																																								</td>
																																							</tr>
																																						<tr>
																																									<td>
																																										Risco de Assoreamento
																																									</td>
																																									<td>
																																										<input type="radio" name="optionsRadios2" value="option1"/>
																																									</td>
																																									<td>
																																											<input type="radio" name="optionsRadios2" value="option1"/>
																																									</td>
																																									<td>
																																											<input type="text" class="form-control" />
																																									</td>
																																								</tr>

																																	</tbody>
																															</table>
																															<div class="row">
																															<div class="col-md-8">
																																<div class="form-group">
																																	<label class="control-label col-md-6">Assoreamento</label>
																																</div>
																															</div>
																																	<div class="col-md-4">
																																		<div class="radio-list">
																																			<label class="radio-inline">
																																			<input type="radio" name="optionsRadios2" value="option1"/>
																																			Na Mata </label>
																																			<label class="radio-inline">
																																			<input type="radio" name="optionsRadios2" value="option2" checked/>
																																			Para a Mata Vizinha</label>
																																		</div>
																																	</div>
																																</div><br/>
																																<table class="table">
																																	<thead>
																																			<tr>
																																				<th class="col-sm-12 col-md-4">Declive</th>
																																				<th class="col-sm-12 col-md-8">Observações</th>
																																																																							</tr>
																																	</thead>
																																<tbody>
																																	<tr>
																																				<td>
																																						< 15%
																																				</td>
																																				<td>
																																						<input type="text" class="form-control" />
																																				</td>
																																			</tr>
																																		<tr>
																																					<td>
																																							15% a 30 %
																																					</td>
																																					<td>
																																							<input type="text" class="form-control" />
																																					</td>
																																			</tr>
																																			<tr>
																																						<td>
																																							30 % a 45 %
																																						</td>
																																						<td>
																																								<input type="text" class="form-control" />
																																						</td>
																																				</tr>
																																				<tr>
																																							<td>
																																									> 45 %
																																							</td>
																																							<td>
																																									<input type="text" class="form-control" />
																																							</td>
																																					</tr>


																																			</tbody>
																														</table>
																														<div class="row">
																															<div class="col-md-2">
																																<div class="form-group">
																																	<label class="control-label col-md-10">Superfície</label>
																																</div>
																															</div>
																															<div class="col-md-10">
																															<div class="form-group">
																																	<div class="col-md-12">
																																	<div class="radio-list">
																																		<label class="control-label col-md-2 radio-inline">
																																		<input type="radio" name="optionsRadios2" value="option1"/>
																																		Plana </label>
																																		<label class="control-label col-md-2 radio-inline">
																																		<input type="radio" name="optionsRadios2" value="option2" checked/>
																																		Inclinada</label>
																																		<label class="control-label col-md-2 radio-inline">
																																		<input type="radio" name="optionsRadios2" value="option1"/>
																																		Ondulada</label>
																																		<label class="control-label col-md-2 radio-inline">
																																		<input type="radio" name="optionsRadios2" value="option1"/>
																																		Convexa</label>
																																		<label class="control-label col-md-2 radio-inline">
																																		<input type="radio" name="optionsRadios2" value="option1"/>
																																		Côncava</label>
																																	</div>
																																</div>
																															</div>
																														</div>
																													</div>
																													<br/>
																													<table class="table">
																													<tbody>
																														<tr>
																																	<td>
																																		Posição na Paisagem
																																	</td>
																																	<td>
																																			Cumeada
																																	</td>
																																	<td>
																																		<div class="checkbox-list">

																																			<input class="col-md-6" type="checkbox">
																																		</div>
																																	</td>

																															</tr>
																															<tr>
																																		<td>

																																		</td>
																																		<td>
																																				Fundo do Vale
																																		</td>
																																		<td>
																																			<div class="checkbox-list">

																																				<input class="col-md-6" type="checkbox">
																																			</div>
																																		</td>

																																</tr>
																																<tr>
																																			<td>

																																			</td>
																																			<td>
																																					Plataforma
																																			</td>
																																			<td>
																																				<div class="checkbox-list">

																																					<input class="col-md-6" type="checkbox">
																																				</div>
																																			</td>

																																	</tr>
																																	<tr>
																																				<td>

																																				</td>
																																				<td>
																																						Vale
																																				</td>
																																				<td>
																																					<div class="checkbox-list">

																																						<input class="col-md-6" type="checkbox">
																																					</div>
																																				</td>

																																		</tr>
																																		<tr>
																																					<td>

																																					</td>
																																					<td>
																																							Valeiro
																																					</td>
																																					<td>
																																						<div class="checkbox-list">

																																							<input class="col-md-6" type="checkbox">
																																						</div>
																																					</td>

																																			</tr>
																																			<tr>
																																						<td>

																																						</td>
																																						<td>
																																								Vertente Superior
																																						</td>
																																						<td>
																																							<div class="checkbox-list">

																																								<input class="col-md-6" type="checkbox">
																																							</div>
																																						</td>

																																				</tr>
																																				<tr>
																																							<td>

																																							</td>
																																							<td>
																																								Meio da Vertente
																																								</td>
																																							<td>
																																								<div class="checkbox-list">

																																									<input class="col-md-6" type="checkbox">
																																								</div>
																																							</td>

																																					</tr>
																																					<tr>
																																								<td>

																																								</td>
																																								<td>
																																										Vertente Inferior
																																								</td>
																																								<td>
																																									<div class="checkbox-list">

																																										<input class="col-md-6" type="checkbox">
																																									</div>
																																								</td>

																																						</tr>
																																						<tr>
																																									<td>

																																									</td>
																																									<td>
																																												Vertente
																																									</td>
																																									<td>
																																										<div class="checkbox-list">

																																											<input class="col-md-6" type="checkbox">
																																										</div>
																																									</td>

																																							</tr>
																																							<tr>
																																										<td >

																																										</td>
																																										<td>
																																													Vertente Inclinada a Norte
																																										</td>
																																										<td>
																																											<div class="checkbox-list">

																																												<input class="col-md-6" type="checkbox">
																																											</div>
																																										</td>

																																								</tr>
																																								<tr>
																																											<td>

																																											</td>
																																											<td>
																																														Vertente Inclinada a Nascente
																																											</td>
																																											<td>
																																												<div class="checkbox-list">

																																													<input class="col-md-6" type="checkbox">
																																												</div>
																																											</td>

																																									</tr>
																																									<tr>
																																												<td>

																																												</td>
																																												<td>
																																															Vertente Inclinada a Sul
																																												</td>
																																												<td>
																																													<div class="checkbox-list">

																																														<input class="col-md-6" type="checkbox">
																																													</div>
																																												</td>

																																										</tr>
																																										<tr>
																																													<td>

																																													</td>
																																													<td>
																																																Vertente Inclinada a Poente
																																													</td>
																																													<td>
																																														<div class="checkbox-list">

																																															<input class="col-md-6" type="checkbox">
																																														</div>
																																													</td>

																																											</tr>
																																											<tr>
																																														<td>

																																														</td>
																																														<td>
																																																Talude
																																														</td>
																																														<td>
																																															<div class="checkbox-list">

																																																<input class="col-md-6" type="checkbox">
																																															</div>
																																														</td>

																																												</tr>
																																												<tr>
																																															<td>

																																															</td>
																																															<td>
																																																	Terraço
																																															</td>
																																															<td>
																																																<div class="checkbox-list">

																																																	<input class="col-md-6" type="checkbox">
																																																</div>
																																															</td>

																																													</tr>
																																													<tr>
																																																<td>

																																																</td>
																																																<td>
																																																		Planalto
																																																</td>
																																																<td>
																																																	<div class="checkbox-list">

																																																		<input class="col-md-6" type="checkbox">
																																																	</div>
																																																</td>

																																														</tr>

																																																<tr>
																																																			<td>

																																																			</td>
																																																			<td>
																																																					Canyon ou Vale Encaixado
																																																			</td>
																																																			<td>
																																																				<div class="checkbox-list">

																																																					<input class="col-md-6" type="checkbox">
																																																				</div>
																																																			</td>

																																																	</tr>
																																																	<tr>
																																																				<td>

																																																				</td>
																																																				<td>
																																																						Bacia de Inundação
																																																				</td>
																																																				<td>
																																																					<div class="checkbox-list">

																																																						<input class="col-md-6" type="checkbox">
																																																					</div>
																																																				</td>

																																																		</tr>
																																																		<tr>
																																																					<td>

																																																					</td>
																																																					<td>
																																																							Dunas
																																																					</td>
																																																					<td>
																																																						<div class="checkbox-list">

																																																							<input class="col-md-6" type="checkbox">
																																																						</div>
																																																					</td>

																																																			</tr>
																																																			<tr>
																																																						<td>

																																																						</td>
																																																						<td>
																																																								Lapiaz
																																																						</td>
																																																						<td>
																																																							<div class="checkbox-list">

																																																								<input class="col-md-6" type="checkbox">
																																																							</div>
																																																						</td>

																																																				</tr>
																																																				<tr>
																																																							<td>

																																																							</td>
																																																							<td>
																																																									Dolina
																																																							</td>
																																																							<td>
																																																								<div class="checkbox-list">

																																																									<input class="col-md-6" type="checkbox">
																																																								</div>
																																																							</td>

																																																					</tr>
																																																					<tr>
																																																								<td>

																																																								</td>
																																																								<td>
																																																										Outra -
																																																								</td>
																																																								<td>
																																																									<div class="checkbox-list">

																																																										<input class="col-md-6" type="checkbox">
																																																									</div>
																																																								</td>

																																																						</tr>
																																																						<tr>
																																																									<td>

																																																									</td>
																																																									<td>
																																																											Vertente Inclinada a NE
																																																									</td>
																																																									<td>
																																																										<div class="checkbox-list">

																																																											<input class="col-md-6" type="checkbox">
																																																										</div>
																																																									</td>

																																																							</tr>
																																																							<tr>
																																																										<td>

																																																										</td>
																																																										<td>
																																																												Vertente Inclinada a SE
																																																										</td>
																																																										<td>
																																																											<div class="checkbox-list">

																																																												<input class="col-md-6" type="checkbox">
																																																											</div>
																																																										</td>

																																																								</tr>
																																																								<tr>
																																																											<td>

																																																											</td>
																																																											<td>
																																																													Vertente Inclinada a NW
																																																											</td>
																																																											<td>
																																																												<div class="checkbox-list">

																																																													<input class="col-md-6" type="checkbox">
																																																												</div>
																																																											</td>

																																																									</tr>
																																																									<tr>
																																																												<td>

																																																												</td>
																																																												<td>
																																																														Vertente Inclinada a SW
																																																												</td>
																																																												<td>
																																																													<div class="checkbox-list">

																																																														<input class="col-md-6" type="checkbox">
																																																													</div>
																																																												</td>

																																																										</tr>
																													</tbody>
																											</table>
																											<div class="row">
																												<div class="col-md-9">
																													<div class="form-group">
																														<label class="control-label col-md-2">Descrição Geomorfológica</label>
																														<div class="col-md-7">
																															 <textarea class="form-control autosizeme" rows="4"></textarea>
																														</div>
																													</div>
																												</div>
																											</div>
																											<table class="table">
																												<thead>
																														<tr>
																															<th class="col-sm-12 col-md-4"></th>
																															<th class="col-sm-12 col-md-1">Sim</th>
																															<th class="col-sm-12 col-md-1">Não</th>
																															<th class="col-sm-12 col-md-3">Identificação</th>
																															<th class="col-sm-12 col-md-3">Localização</th>

																														</tr>
																												</thead>
																											<tbody>
																												<tr>
																															<td>
																																	Locais de Interesse
																															</td>
																															<td>
																																<input type="radio" name="optionsRadios2" value="option1"/>
																															</td>
																															<td>
																																	<input type="radio" name="optionsRadios2" value="option1"/>
																															</td>
																															<td>
																																	<input type="text" class="form-control" />
																															</td>
																															<td>
																																	<input type="text" class="form-control" />
																															</td>
																														</tr>
																														<tr>
																																	<td>
																																			Áreas de Lazer
																																	</td>
																																	<td>
																																		<input type="radio" name="optionsRadios2" value="option1"/>
																																	</td>
																																	<td>
																																			<input type="radio" name="optionsRadios2" value="option1"/>
																																	</td>
																																	<td>
																																			<input type="text" class="form-control" />
																																	</td>
																																	<td>
																																			<input type="text" class="form-control" />
																																	</td>
																																</tr>

																											</tbody>
																									</table>
																									<div class="row">

																										<div class="col-md-6">
																										<div class="form-group">
																												<div class="col-md-12">
																													<label class="control-label col-md-3">Regime de Caça</label>
																													<div class="col-md-9">
																															<input type="text" class="form-control" >
																													</div>
																											</div>
																										</div>
																									</div>

																									<div class="col-md-6">
																										<div class="form-group">
																											<label class="control-label col-md-3">Associativa / Observações</label>
																											<div class="col-md-9">
																													<input type="text" class="form-control" >
																											</div>
																										</div>
																									</div>
																								</div>
																								<br/>
																								<div class="row">

																									<div class="col-md-12">
																									<div class="form-group">
																											<div class="col-md-12">
																												<label class="control-label col-md-4">Tempo de deslocação de um GPI dos Bombeiros à Mata ( minutos )</label>
																												<div class="col-md-6">
																														<input type="text" class="form-control" >
																												</div>
																										</div>
																									</div>
																								</div>
																								<div class="row">
																									<div class="col-md-2">
																										<div class="form-group">
																											<label class="control-label col-md-10">Proximidade de Locais Habitados</label>
																										</div>
																									</div>
																									<div class="col-md-10">
																									<div class="form-group">
																											<div class="col-md-12">
																											<div class="radio-list">
																												<label class="control-label col-md-2 radio-inline">
																												<input type="radio" name="optionsRadios2" value="option1"/>
																												Distante</label>
																												<label class="control-label col-md-2 radio-inline">
																												<input type="radio" name="optionsRadios2" value="option2" checked/>
																												Próximo</label>
																												<label class="control-label col-md-2 radio-inline">
																												<input type="radio" name="optionsRadios2" value="option1"/>
																												Vizinho</label>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div class="row">
																								<div class="col-md-2">
																									<div class="form-group">
																										<label class="control-label col-md-10">Faixa de Protecção a Áreas Edificadas e Habitadas</label>
																									</div>
																								</div>
																								<div class="col-md-10">
																								<div class="form-group">
																										<div class="col-md-12">
																										<div class="radio-list">
																											<label class="control-label col-md-2 radio-inline">
																											<input type="radio" name="optionsRadios2" value="option1"/>
																											Não</label>
																											<label class="control-label col-md-2 radio-inline">
																											<input type="radio" name="optionsRadios2" value="option2" checked/>
																											Sim</label>
																											<label class="control-label col-md-2 radio-inline">
																											<input type="radio" name="optionsRadios2" value="option1"/>
																											NN</label>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="row">
																							<div class="col-md-2">
																								<div class="form-group">
																									<label class="control-label col-md-10">Risco sobre Áreas Edificadas e Habitadas</label>
																								</div>
																							</div>
																							<div class="col-md-10">
																							<div class="form-group">
																									<div class="col-md-12">
																									<div class="radio-list">
																										<label class="control-label col-md-2 radio-inline">
																										<input type="radio" name="optionsRadios2" value="option1"/>
																										Não</label>
																										<label class="control-label col-md-2 radio-inline">
																										<input type="radio" name="optionsRadios2" value="option2" checked/>
																										Sim</label>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="row">

																						<div class="col-md-12">
																						<div class="form-group">
																								<div class="col-md-12">
																									<label class="control-label col-md-4">Identificação do Risco sobre as Áreas Edificadas e Habitadas</label>
																									<div class="col-md-6">
																											<input type="text" class="form-control" >
																									</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<br/>
																					<div class="row">
																						<div class="col-md-2">
																							<div class="form-group">
																								<label class="control-label col-md-10">Risco de Lesão de Direitos Tradicionais ou Consuetudinários</label>
																							</div>
																						</div>
																						<div class="col-md-10">
																						<div class="form-group">
																								<div class="col-md-12">
																								<div class="radio-list">
																									<label class="control-label col-md-2 radio-inline">
																									<input type="radio" name="optionsRadios2" value="option1"/>
																									Não</label>
																									<label class="control-label col-md-2 radio-inline">
																									<input type="radio" name="optionsRadios2" value="option2" />
																									Sim</label>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<br/>
																				<div class="row">
																					<div class="col-md-9">
																						<div class="form-group">
																							<label class="control-label col-md-2">Qual</label>
																							<div class="col-md-7">
																								 <textarea class="form-control autosizeme" rows="4"></textarea>
																							</div>
																						</div>
																					</div>
																				</div>
																				<table class="table">
																					<thead>
																							<tr>
																								<th class="col-sm-12 col-md-4"></th>
																								<th class="col-sm-12 col-md-4">Quais</th>
																								<th class="col-sm-12 col-md-4">Localização</th>
																												</tr>
																					</thead>
																				<tbody>
																					<tr>
																								<td>
																										Locais de Culto, Monumentos ou Vestígios Históricos ou Arqueológicos
																								</td>
																								<td>
																										<input type="text" class="form-control" />
																								</td>
																								<td>
																										<input type="text" class="form-control" />
																								</td>
																							</tr>
																						</tbody>
																		</table>
																		<table class="table">
																			<thead>
																					<tr>
																						<th class="col-sm-12 col-md-4">Infra-estrutura</th>
																						<th class="col-sm-12 col-md-4">Tipo (Púb. ou Priv.)</th>
																						<th class="col-sm-12 col-md-4">Localização na mata</th>

																					</tr>
																			</thead>
																		<tbody>
																			<tr>
																				<td>
																						<input type="text" class="form-control" />
																				</td>
																						<td>
																								<input type="text" class="form-control" />
																						</td>
																						<td>
																								<input type="text" class="form-control" />
																						</td>
																					</tr>
																					<tr>
																						<td>
																								<input type="text" class="form-control" />
																						</td>
																								<td>
																										<input type="text" class="form-control" />
																								</td>
																								<td>
																										<input type="text" class="form-control" />
																								</td>
																							</tr>
																							<tr>
																								<td>
																										<input type="text" class="form-control" />
																								</td>
																										<td>
																												<input type="text" class="form-control" />
																										</td>
																										<td>
																												<input type="text" class="form-control" />
																										</td>
																									</tr>
																									<tr>
																										<td>
																												<input type="text" class="form-control" />
																										</td>
																												<td>
																														<input type="text" class="form-control" />
																												</td>
																												<td>
																														<input type="text" class="form-control" />
																												</td>
																											</tr>
																											<tr>
																												<td>
																														<input type="text" class="form-control" />
																												</td>
																														<td>
																																<input type="text" class="form-control" />
																														</td>
																														<td>
																																<input type="text" class="form-control" />
																														</td>
																													</tr>

																		</tbody>
																</table>
																		<table class="table">
																			<thead>
																					<tr>
																						<th class="col-sm-12 col-md-6">Actividades Não Autorizadas</th>
																						<th class="col-sm-12 col-md-6">Localização</th>
																										</tr>
																			</thead>
																		<tbody>
																			<tr>
																						<td>
																							Vandalismo
																						</td>
																						<td>
																							<input type="text" class="form-control" />
																						</td>

																				</tr>
																				<tr>
																							<td>
																								Roubo
																							</td>
																							<td>
																								<input type="text" class="form-control" />
																							</td>

																					</tr>
																					<tr>
																								<td>
																									Abate
																								</td>
																								<td>
																									<input type="text" class="form-control" />
																								</td>

																						</tr>
																						<tr>
																									<td>
																										Descortiçamento
																									</td>
																									<td>
																										<input type="text" class="form-control" />
																									</td>

																							</tr>
																							<tr>
																										<td>
																											Deposição de Lixo
																										</td>
																										<td>
																											<input type="text" class="form-control" />
																										</td>

																								</tr>
																								<tr>
																											<td>
																												Supressão de Serventias
																											</td>
																											<td>
																												<input type="text" class="form-control" />
																											</td>

																									</tr>
																									<tr>
																												<td>
																													Abertura de Caminhos
																												</td>
																												<td>
																													<input type="text" class="form-control" />
																												</td>

																										</tr>
																										<tr>
																													<td>
																														Fecho de Caminhos
																													</td>
																													<td>
																														<input type="text" class="form-control" />
																													</td>

																											</tr>
																											<tr>
																														<td>
																															Ligação de Caminhos
																														</td>
																														<td>
																															<input type="text" class="form-control" />
																														</td>

																												</tr>
																												<tr>
																															<td>
																																Actividades Lúdicas Não Autorizadas
																															</td>
																															<td>
																																<input type="text" class="form-control" />
																															</td>

																													</tr>
																													<tr>
																																<td>
																																	Caça Furtiva
																																</td>
																																<td>
																																	<input type="text" class="form-control" />
																																</td>

																														</tr>
																														<tr>
																																	<td>
																																		Cultos Isotéricos
																																	</td>
																																	<td>
																																		<input type="text" class="form-control" />
																																	</td>

																															</tr>
																															<tr>
																																		<td>
																																			Derrube ou Arranque de Marcos de Propriedade
																																		</td>
																																		<td>
																																			<input type="text" class="form-control" />
																																		</td>

																																</tr>
																																<tr>
																																			<td>
																																				Prejuízos em Infra-Estruturas
																																			</td>
																																			<td>
																																				<input type="text" class="form-control" />
																																			</td>

																																	</tr>
																																	<tr>
																																				<td>
																																					Derrube de Muros, Vedações ou Cercas
																																				</td>
																																				<td>
																																					<input type="text" class="form-control" />
																																				</td>

																																		</tr>
																																		<tr>
																																					<td>
																																						Depósitos de Madeira Não Autorizados
																																					</td>
																																					<td>
																																						<input type="text" class="form-control" />
																																					</td>

																																			</tr>
																																			<tr>
																																						<td>
																																							Destruição de Regóis
																																						</td>
																																						<td>
																																							<input type="text" class="form-control" />
																																						</td>

																																				</tr>
																																				<tr>
																																							<td>
																																								Ocupação indevida
																																							</td>
																																							<td>
																																								<input type="text" class="form-control" />
																																							</td>

																																					</tr>
																																					<tr>
																																								<td>
																																									Outra:
																																								</td>
																																								<td>
																																									<input type="text" class="form-control" />
																																								</td>

																																						</tr>
																																							</tbody>
																																						</table>
																																						<div class="row">
																																							<div class="col-md-2">
																																								<div class="form-group">
																																									<label class="control-label col-md-10">Natureza da Paisagem</label>
																																								</div>
																																							</div>
																																							<div class="col-md-10">
																																							<div class="form-group">
																																									<div class="col-md-12">
																																									<div class="radio-list">
																																										<label class="control-label col-md-2 radio-inline">
																																										<input type="radio" name="optionsRadios2" value="option1"/>
																																										Antropogénica</label>
																																										<label class="control-label col-md-2 radio-inline">
																																										<input type="radio" name="optionsRadios2" value="option2" checked/>
																																										Semi-Natural</label>
																																										<label class="control-label col-md-2 radio-inline">
																																										<input type="radio" name="optionsRadios2" value="option1"/>
																																										Natural</label>
																																									</div>
																																								</div>
																																							</div>
																																						</div>
																																					</div>
																																					<br/>
																																					<div class="row">
																																						<div class="col-md-2">
																																							<div class="form-group">
																																								<label class="control-label col-md-10">Qualidade da Paisagem</label>
																																							</div>
																																						</div>
																																						<div class="col-md-10">
																																						<div class="form-group">
																																								<div class="col-md-12">
																																								<div class="radio-list">
																																									<label class="control-label col-md-2 radio-inline">
																																									<input type="radio" name="optionsRadios2" value="option1"/>
																																									Degradada</label>
																																									<label class="control-label col-md-2 radio-inline">
																																									<input type="radio" name="optionsRadios2" value="option2" checked/>
																																									Aceitável</label>
																																									<label class="control-label col-md-2 radio-inline">
																																									<input type="radio" name="optionsRadios2" value="option1"/>
																																									Bem Conservada</label>
																																								</div>
																																							</div>
																																						</div>
																																					</div>
																																				</div>
																																				<br/>
																																				<div class="row">
																																					<div class="col-md-2">
																																						<div class="form-group">
																																							<label class="control-label col-md-10">Qualidade da Paisagem</label>
																																						</div>
																																					</div>
																																					<div class="col-md-10">
																																					<div class="form-group">
																																							<div class="col-md-12">
																																							<div class="radio-list">
																																								<label class="control-label col-md-2 radio-inline">
																																								<input type="radio" name="optionsRadios2" value="option1"/>
																																								Má</label>
																																								<label class="control-label col-md-2 radio-inline">
																																								<input type="radio" name="optionsRadios2" value="option2" checked/>
																																								Aceitável</label>
																																								<label class="control-label col-md-2 radio-inline">
																																								<input type="radio" name="optionsRadios2" value="option1"/>
																																								Boa</label>
																																							</div>
																																						</div>
																																					</div>
																																				</div>
																																			</div>
																																			<br/>
																																			<table class="table">
																																				<thead>
																																						<tr>
																																							<th class="col-sm-12 col-md-4"></th>
																																							<th class="col-sm-12 col-md-1">Sim</th>
																																							<th class="col-sm-12 col-md-1">Não</th>
																																								<th class="col-sm-12 col-md-1"></th>
																																							<th class="col-sm-12 col-md-2"></th>
																																								<th class="col-sm-12 col-md-1"></th>
																																							<th class="col-sm-12 col-md-2"></th>
																																						</tr>
																																				</thead>
																																			<tbody>
																																				<tr>
																																							<td>
																																								Área Inserida em Área Protegida
																																							</td>
																																							<td>
																																								<input type="radio" name="optionsRadios2" value="option1"/>
																																							</td>
																																							<td>
																																									<input type="radio" name="optionsRadios2" value="option1"/>
																																							</td>
																																							<td>
																																									Qual?
																																							</td>
																																							<td>

																																									<input type="text" class="form-control" />
																																							</td>
																																							<td>
																																									Código
																																							</td>
																																							<td>
																																									<input type="text" class="form-control" />
																																							</td>
																																						</tr>
																																						<tr>
																																									<td>
																																											Árvores Protegidas ou Longevas
																																									</td>
																																									<td>
																																										<input type="radio" name="optionsRadios2" value="option1"/>
																																									</td>
																																									<td>
																																											<input type="radio" name="optionsRadios2" value="option1"/>
																																									</td>
																																									<td>
																																											Quais?
																																									</td>
																																									<td>

																																											<input type="text" class="form-control" />
																																									</td>
																																									<td>
																																											Local
																																									</td>
																																									<td>
																																											<input type="text" class="form-control" />
																																									</td>
																																								</tr>
																																								<tr>
																																											<td>
																																													Espécies Ameaçadas
																																											</td>
																																											<td>
																																												<input type="radio" name="optionsRadios2" value="option1"/>
																																											</td>
																																											<td>
																																													<input type="radio" name="optionsRadios2" value="option1"/>
																																											</td>
																																											<td>
																																													Quais?
																																											</td>
																																											<td>

																																													<input type="text" class="form-control" />
																																											</td>
																																											<td>
																																													Local
																																											</td>
																																											<td>
																																													<input type="text" class="form-control" />
																																											</td>
																																										</tr>
																																										<tr>
																																													<td>
																																															Altos Valores de Conservação
																																													</td>
																																													<td>
																																														<input type="radio" name="optionsRadios2" value="option1"/>
																																													</td>
																																													<td>
																																															<input type="radio" name="optionsRadios2" value="option1"/>
																																													</td>
																																													<td>
																																															Quais?
																																													</td>
																																													<td>

																																															<input type="text" class="form-control" />
																																													</td>
																																													<td>
																																															Local
																																													</td>
																																													<td>
																																															<input type="text" class="form-control" />
																																													</td>
																																												</tr>
																																												<tr>
																																															<td>
																																																	Área com Altos Valores de Conservação
																																															</td>
																																															<td>
																																																<input type="radio" name="optionsRadios2" value="option1"/>
																																															</td>
																																															<td>
																																																	<input type="radio" name="optionsRadios2" value="option1"/>
																																															</td>
																																															<td>
																																																	Razão
																																															</td>
																																															<td>

																																																	<input type="text" class="form-control" />
																																															</td>
																																															<td>


																																															</td>
																																															<td>


																																															</td>

																																														</tr>
																																														<table class="table">
																																															<thead>
																																																	<tr>
																																																		<th class="col-sm-12 col-md-6">Espécies Florestais Autóctones Disperasas pela Mata</th>
																																																		<th class="col-sm-12 col-md-6">Outras Espécies Florestais Dispersas pela Mata para Conservar</th>
																																																	</tr>
																																															</thead>
																																														<tbody>
																																															<tr>
																																																<td>
																																																		<input type="text" class="form-control" />
																																																</td>
																																																		<td>
																																																				<input type="text" class="form-control" />
																																																		</td>
																																													</tr>
																																													<tr>
																																														<td>
																																																<input type="text" class="form-control" />
																																														</td>
																																																<td>
																																																		<input type="text" class="form-control" />
																																																</td>
																																											</tr>
																																											<tr>
																																												<td>
																																														<input type="text" class="form-control" />
																																												</td>
																																														<td>
																																																<input type="text" class="form-control" />
																																														</td>
																																									</tr>
																																									<tr>
																																										<td>
																																												<input type="text" class="form-control" />
																																										</td>
																																												<td>
																																														<input type="text" class="form-control" />
																																												</td>
																																							</tr>
																																							<tr>
																																								<td>
																																										<input type="text" class="form-control" />
																																								</td>
																																										<td>
																																												<input type="text" class="form-control" />
																																										</td>
																																					</tr>




																																														</tbody>
																																												</table>

																																			</tbody>
																																	</table>



																																												</div>
																																										</div>
																																										<table class="table">
																																											<thead>
																																													<tr>
																																														<th class="col-sm-12 col-md-6">Aspectos Observados sobre a Fauna da Mata</th>
																																														<th class="col-sm-12 col-md-6">Fauna</th>
																																																		</tr>
																																											</thead>
																																										<tbody>
																																											<tr>
																																														<td>
																																															Área de Alimentação
																																														</td>
																																														<td>
																																															<input type="text" class="form-control" />
																																														</td>

																																												</tr>
																																												<tr>
																																															<td>
																																																Área de Refúgio
																																															</td>
																																															<td>
																																																<input type="text" class="form-control" />
																																															</td>

																																													</tr>
																																													<tr>
																																																<td>
																																																	Área Integrada ou junto a um Corredor de Fauna
																																																</td>
																																																<td>
																																																	<input type="text" class="form-control" />
																																																</td>

																																														</tr>
																																														<tr>
																																																	<td>
																																																		Avistamentos na Área da Mata
																																																	</td>
																																																	<td>
																																																		<input type="text" class="form-control" />
																																																	</td>

																																															</tr>
																																															<tr>
																																																		<td>
																																																			Presenças de Dejectos
																																																		</td>
																																																		<td>
																																																			<input type="text" class="form-control" />
																																																		</td>

																																																</tr>
																																																<tr>
																																																			<td>
																																																				Existência de Trilhos
																																																			</td>
																																																			<td>
																																																				<input type="text" class="form-control" />
																																																			</td>

																																																	</tr>
																																																	<tr>
																																																				<td>
																																																					Presenças de Vestígios
																																																				</td>
																																																				<td>
																																																					<input type="text" class="form-control" />
																																																				</td>

																																																		</tr>
																																																		<tr>
																																																					<td>
																																																						Existência Comunicada pelo Proprietário
																																																					</td>
																																																					<td>
																																																						<input type="text" class="form-control" />
																																																					</td>

																																																			</tr>
																																																			<tr>
																																																						<td>
																																																							Presença de Árvore Cavernosas
																																																						</td>
																																																						<td>
																																																							<input type="text" class="form-control" />
																																																						</td>

																																																				</tr>
																																																				<tr>
																																																							<td>
																																																								Existência de Ninhos
																																																							</td>
																																																							<td>
																																																								<input type="text" class="form-control" />
																																																							</td>

																																																					</tr>
																																																					<tr>
																																																								<td>
																																																									Existência de Tocas
																																																								</td>
																																																								<td>
																																																									<input type="text" class="form-control" />
																																																								</td>

																																																						</tr>
																																																						<tr>
																																																									<td>
																																																										Proximidade de Áreas de Alimentação
																																																									</td>
																																																									<td>
																																																										<input type="text" class="form-control" />
																																																									</td>

																																																							</tr>
																																																							<tr>
																																																										<td>
																																																											Proximidade de Linhas de Água
																																																										</td>
																																																										<td>
																																																											<input type="text" class="form-control" />
																																																										</td>

																																																								</tr>
																																																								<tr>
																																																											<td>
																																																											 Outra:
																																																											</td>
																																																											<td>
																																																												<input type="text" class="form-control" />
																																																											</td>

																																																									</tr>


																																																															</tbody>
																																																														</table>
																																																														<div class="row">
																																																															<div class="col-md-12">
																																																																<div class="form-group">
																																																																	<label class="control-label col-md-2">Registo de Riscos e Impactos sobre a Fauna Selvagem na Mata:</label>
																																																																	<div class="col-md-10">
																																																																		 <textarea class="form-control autosizeme" rows="4"></textarea>
																																																																	</div>
																																																																</div>
																																																															</div>
																																																														</div>



												<!--/row-->

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
<script type="text/javascript" src="assets/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/form-samples.js"></script>
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
