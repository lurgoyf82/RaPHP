<?php $campiDate=['inizio_validita', 'fine_validita', 'data_pagamento']; ?>
<form action="{{ route('store_veicolo') }}" method="POST">
	@csrf
	<!--begin::Content-->
	<div id="kt_app_content" class="app-content flex-column-fluid" style="width: 1200px;">
		<!--begin::Content container-->
		<div id="kt_app_content_container" class="app-container container-fluid">
			<!--begin::Row-->
			<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
				<!--begin::Col-->
				<div class="col-xxl-6 mb-5 mb-xl-10">
					<!--begin::Chart widget 8-->
					<div class="card card-flush h-xl-100">
						<!--begin::Header-->
						<div class="card-header pt-5">
							<!--begin::Title-->
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold text-dark">Inserisci Dati Del Veicolo</span>
								<span class="text-gray-400 mt-1 fw-semibold fs-6">Selezione dati Essenziali</span>
							</h3>
							<!--end::Title-->
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-6">
							<!--begin::Tab content-->
							<div class="tab-content">
								<!--begin::Tab pane-->
								<div class="tab-pane fade active show" id="kt_chart_widget_8_month_tab" role="tabpanel">
									<!--begin::Items-->
									@include('form.elements.success-error-messages')
									<!-- Input for Targa -->
									<div class="form-group">
										<label for="targa">Targa</label>
										<input name="targa" type="text" id="targa" class="form-control" value="{{ strtoupper(str_replace(' ', '', old('targa'))) }}" placeholder="Inserire La Targa (AA123AA)">
									</div>



									<!-- Input for Data Immatricolazione -->
									<div class="form-group">
										<label for="data_immatricolazione">Data Immatricolazione</label>
										<input name="data_immatricolazione" type="date" id="data_immatricolazione" class="form-control" value="{{ old('data_immatricolazione') }}" placeholder="Seleziona la data">
									</div>




									<!-- Select for Destinazione D'Uso -->
									<div class="form-group">
										<label for="id_destinazione_uso">Destinazione D'Uso</label>
										<select name="id_destinazione_uso" id="id_destinazione_uso" class="form-control">
											<option value="">Selezionare Una Destinazione D'Uso</option>
											@foreach($lista_destinazione_uso as $destinazione_uso)
												<option value="{{ $destinazione_uso->id }}" @if($destinazione_uso->id==old('id_destinazione_uso')) selected @endif>{{ $destinazione_uso->nome }}</option>
											@endforeach
										</select>
									</div>
									<!-- Select for Societa -->
									<div class="form-group">
										<label for="id_proprietario">Proprietario</label>
										<select name="id_proprietario" id="id_proprietario" class="form-control">
											<option value="" selected>Selezionare Un Proprietario</option>
											@foreach($lista_societa as $societa)
												<option value="{{ $societa->id }}" @if($societa->id==old('id_proprietario')) selected @endif>{{ $societa->nome }}</option>
											@endforeach
										</select>
									</div>
									<!-- Select for Tipo -->
									<div class="form-group">
										<label for="id_tipo">Tipo</label>
										<select name="id_tipo_veicolo" id="id_tipo_veicolo" class="form-control">
											<option value="" selected>Selezionare Un Tipo Di Veicolo</option>
											@foreach($lista_tipo_veicolo as $tipo)
												<option value="{{ $tipo->id }}" @if($tipo->id==old('id_tipo_veicolo')) selected @endif>{{ $tipo->nome }}</option>
											@endforeach
										</select>
									</div>
									<!-- Select for Marca -->
									<div class="form-group">
										<label for="id_marca">Marca</label>
										<select name="id_marca" id="id_marca" class="form-control">
											<option value="" selected>Selezionare Una Marca</option>
											@foreach($lista_marca as $marca)
												<option value="{{ $marca->id }}" @if($marca->id==old('id_marca')) selected @endif>{{ $marca->nome }}</option>
											@endforeach
										</select>
									</div>
									<!-- Select for Modello -->
									<div class="form-group">
										<label for="id_modello">Modello</label>
										<select name="id_modello" id="id_modello" class="form-control">
											<option value="" selected>Selezionare Un Modello</option>
											@foreach($lista_modello as $modello)
												<option value="{{ $modello->id }}" @if($modello->id==old('id_modello')) selected @endif>{{ $modello->nome }}</option>
											@endforeach
										</select>
									</div>
									<!-- Select for Tipo Allestimento -->
									<div class="form-group">
										<label for="id_tipo_allestimento">Tipo Allestimento</label>
										<select name="id_tipo_allestimento" id="id_tipo_allestimento" class="form-control">
											<option value="" selected>Selezionare Un Tipo Di Allestimento</option>
											@foreach($lista_tipo_allestimento as $tipo_allestimento)
												<option value="{{ $tipo_allestimento->id }}" @if($tipo_allestimento->id==old('id_tipo_allestimento')) selected @endif>{{ $tipo_allestimento->nome }}</option>
											@endforeach
										</select>
									</div>
									<!-- Select for Tipo Asse -->
									<div class="form-group">
										<label for="id_tipo_asse">Tipo Asse</label>
										<select name="id_tipo_asse" id="id_tipo_asse" class="form-control">
											<option value="" selected>Selezionare Un Tipo Di Asse</option>
											@foreach($lista_tipo_asse as $tipo_asse)
												<option value="{{ $tipo_asse->id }}" @if($tipo_asse->id==old('id_tipo_asse')) selected @endif>{{ $tipo_asse->nome }}</option>
											@endforeach
										</select>
									</div>
									<!-- Select for Tipo Cambio -->
									<div class="form-group">
										<label for="id_tipo_cambio">Tipo Cambio</label>
										<select name="id_tipo_cambio" id="id_tipo_cambio" class="form-control">
											<option value="" selected>Selezionare Un Tipo Di Cambio</option>
											@foreach($lista_tipo_cambio as $tipo_cambio)
												<option value="{{ $tipo_cambio->id }}" @if($tipo_cambio->id==old('id_tipo_cambio')) selected @endif>{{ $tipo_cambio->nome }}</option>
											@endforeach
										</select>
									</div>
									<!-- Select for Tipo Alimentazione -->
									<div class="form-group">
										<label for="id_tipo_alimentazione">Tipo Alimentazione</label>
										<select name="id_tipo_alimentazione" id="id_tipo_alimentazione" class="form-control">
											<option value="" selected>Selezionare Un Tipo Di Alimentazione</option>
											@foreach($lista_alimentazione as $tipo_alimentazione)
												<option value="{{ $tipo_alimentazione->id }}" @if($tipo_alimentazione->id==old('id_tipo_alimentazione')) selected @endif>{{ $tipo_alimentazione->nome }}</option>
											@endforeach
										</select>
									</div>


									<?php

										/*								<div class="form-group">
																			<label for="targa">Targa</label>
																			<input type="text" name="targa" id="targa" class="form-control" required>
																		</div>

																		<!-- Example input for stato_id -->
																		<div class="form-group">
																			<label for="stato_id">Stato ID</label>
																			<input type="text" name="stato_id" id="stato_id" class="form-control" required>
																		</div>*/
									?>

										<!-- Add other input fields for veicolo attributes here -->

									@include('form.elements.submit-insert')
									<!--ed::Items-->
								</div>
								<!--end::Tab pane-->
							</div>
							<!--end::Tab content-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Chart widget 8-->
				</div>
				<!--end::Col-->
			</div>
		</div>
	</div>
</form>
{{-- }}
{{  --}}

@include('form.js.full')

@include('form.js.datepicker-it')
