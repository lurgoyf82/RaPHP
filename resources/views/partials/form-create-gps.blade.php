<?php $campiDate=['inizio_validita', 'fine_validita', 'data_pagamento']; ?>
<form action="{{ route('store_gps') }}" method="POST">
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
								<span class="card-label fw-bold text-dark">Inserisci GPS</span>
								<span class="text-gray-400 mt-1 fw-semibold fs-6">Seleziona il veicolo ed inserisci il gps</span>
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

									@include('form.elements.id-veicolo')

									<!-- Numero IMEI Field -->
									<div class="form-group">
										<label for="numero_imei">Numero IMEI</label>
										<input type="text" name="numero_imei" id="numero_imei" class="form-control" value="{{ old('numero_imei') }}" placeholder="Numero IMEI">
									</div>


									<!-- Seriale Field -->
									<div class="form-group">
										<label for="seriale">Seriale</label>
										<input type="text" name="seriale" id="seriale" class="form-control" value="{{ old('seriale') }}" placeholder="Seriale">
									</div>


									<!-- Modello Field -->
									<div class="form-group">
										<label for="modello">Modello</label>
										<input type="text" name="modello" id="modello" class="form-control" value="{{ old('modello') }}" placeholder="Modello">
									</div>


									<!-- Costruttore Field -->
									<div class="form-group">
										<label for="costruttore">Costruttore</label>
										<input type="text" name="costruttore" id="costruttore" class="form-control" value="{{ old('costruttore') }}" placeholder="Costruttore">
									</div>


									<!-- Data Assegnazione Field -->
									<div class="form-group">
										<label for="data_assegnazione">Data Assegnazione</label>
										<input type="date" name="data_assegnazione" id="data_assegnazione" class="form-control" value="{{ old('data_assegnazione') }}">
									</div>


									<!-- Data Acquisto Field -->
									<div class="form-group">
										<label for="data_acquisto">Data Acquisto</label>
										<input type="date" name="data_acquisto" id="data_acquisto" class="form-control" value="{{ old('data_acquisto') }}">
									</div>

									<!-- Stato Field -->
									<div class="form-group">
										<label for="stato">Stato</label>
										<select name="stato" id="stato" class="form-control">
											<option value="attivo" {{ old('stato') == 'attivo' ? 'selected' : '' }}>Attivo</option>
											<option value="inattivo" {{ old('stato') == 'inattivo' ? 'selected' : '' }}>Inattivo</option>
											<option value="in_mantenimento" {{ old('stato') == 'in_mantenimento' ? 'selected' : '' }}>In Mantenimento</option>
										</select>
									</div>

									<!-- Note Field -->
									<div class="form-group">
										<label for="note">Note</label>
										<textarea name="note" id="note" class="form-control" placeholder="Note">{{ old('note') }}</textarea>
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


<script>

{{-- }}
	// Function to fetch and set vehicle data based on search input
	function fetchAndSetVehicleData(searchInput, exactId = false) {
		if (searchInput.length >= 1) {
			if (exactId) {
				var searchUrl = "/veicolo/id/";
			} else {
				var searchUrl = "/veicolo/search/";
			}

			$.ajax({
				url: searchUrl + encodeURIComponent(searchInput),
				type: 'GET',
				success: function (data) {
					$('#veicoli').empty();
					vehicles = {};
					data.forEach(function (vehicle) {
						var optionText = '( ID: ' + vehicle.id + ') ' + vehicle.targa + ' - ' + vehicle.marca_nome + ' ' + vehicle.modello_nome + ' - ' + vehicle.colore;
						$('#veicoli').append($('<option>').val(optionText));
						vehicles[optionText] = vehicle.id;
						if (exactId) {
							$('#searchInput').val(optionText);
						}
					});
				}
			});
		}
	}

	$(document).ready(function () {
		var oldSearchInput = "{{ old('searchInput') }}";
		var oldVeicoloId = "@if(old('id_veicolo')) {{ old('id_veicolo') }} @elseif(isset($id_veicolo)) {{ $id_veicolo }} @endif";

		// If there's an old 'searchInput', repopulate the fields
		if (oldVeicoloId) {
			//$('#searchInput').val(oldSearchInput);
			$('#id_veicolo').val(oldVeicoloId);
			fetchAndSetVehicleData(oldVeicoloId, true);
		}

		//var vehicles = {};

		// When an option is selected from the datalist
		$('#searchInput').on('input', function () {
			fetchAndSetVehicleData($(this).val());
			var selectedText = $(this).val();
			var vehicleId = vehicles[selectedText];

			if (vehicleId) {
				$('#id_veicolo').val(vehicleId); // Update hidden field with the vehicle ID
			} else {
				$('#id_veicolo').val(''); // Clear hidden field if no vehicle is selected
			}
		});
	});

</script>


{{  --}}

@include('form.js.full')

@include('form.js.datepicker-it')
