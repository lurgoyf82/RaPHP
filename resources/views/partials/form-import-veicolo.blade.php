<style>
	/* Define the warning message style */
	.warning {
		font-size: 24px;
		color: red;
		animation: blink 1s infinite;
	}

	/* Define the blinking animation */
	@keyframes blink {
		25%, 100% {
			opacity: 1;
		}
		50% {
			opacity: 0;
		}
	}
</style>
<form action="{{ route('import_veicolo.create') }}" method="POST" enctype="multipart/form-data">
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
								<span class="card-label fw-bold text-dark">Importa i dati relativi ai veicoli</span>
								<span class="text-gray-400 mt-1 fw-semibold fs-6">Seleziona il file excel da leggere</span>
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
									@if ($errors->any())
										<div class="form-group">
											<div class="alert alert-danger" role="alert">
												@foreach ($errors->all() as $error)
													{{ $error }}<br/>
												@endforeach
											</div>
										</div>
									@endif
									@if (Session::has('success'))
										<div class="form-group">
											<div class="alert alert-success" role="alert">
												{{ Session::get('success') }}
											</div>
										</div>
									@endif





									<!-- File Excel -->
									<div class="form-group">
										<label for="fine_validita">File</label>
										<input type="file" name="excelFile" accept=".xlsx, .xls">
									</div>

									<!--ed::Items-->

									<div class="warning">
										ATTENZIONE, PROCEDENDO L'INTERO DATABASE VERRÀ SOVRASCRITTO !
									</div>

									<div class="clearfix"></div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Inserisci I Dati Nel DB</button>
									</div>
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
	function calculateFineValidita() {
		var inizioValidita = document.getElementById('inizio_validita').value;
		var tipoScadenza = document.getElementById('tipo_scadenza').value;
		var fineValiditaInput = document.getElementById('fine_validita');

		if (inizioValidita && tipoScadenza) {
			var startDate = new Date(inizioValidita);
			switch (tipoScadenza) {
				case 'Quadrimestrale':
					startDate.setMonth(startDate.getMonth() + 4);
					break;
				case 'Semestrale':
					startDate.setMonth(startDate.getMonth() + 6);
					break;
				case 'Annuale':
					startDate.setFullYear(startDate.getFullYear() + 1);
					break;
			}

			var dd = String(startDate.getDate()).padStart(2, '0');
			var mm = String(startDate.getMonth() + 1).padStart(2, '0'); // Months are 0-based
			var yyyy = startDate.getFullYear();

			fineValiditaInput.value = yyyy + '-' + mm + '-' + dd;
		}
	}
	// Function to fetch and set vehicle data based on search input
	function fetchAndSetVehicleData(searchInput,exactId=false) {
		if (searchInput.length >= 1) {
			if(exactId == true){
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
						var optionText = '( ID: '+vehicle.id + ') ' + vehicle.targa + ' - ' +	vehicle.marca_nome + ' ' + vehicle.modello_nome + ' - ' + vehicle.colore;
						$('#veicoli').append($('<option>').val(optionText));
						vehicles[optionText] = vehicle.id;
						if(exactId) {
							$('#searchInput').val(optionText);
						}
					});
				}
			});
		}
	}

	$(document).ready(function () {
		var oldSearchInput = "{{ old('searchInput') }}";
		var oldVeicoloId = "@if(old('id_veicolo')){{old('id_veicolo')}}@elseif(isset($id_veicolo)){{$id_veicolo}}@endif";

		// If there's an old 'searchInput', repopulate the fields
		if (oldVeicoloId) {
			//$('#searchInput').val(oldSearchInput);
			$('#id_veicolo').val(oldVeicoloId);
			fetchAndSetVehicleData(oldVeicoloId,true);
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

		document.getElementById('inizio_validita').addEventListener('change', calculateFineValidita);
		document.getElementById('tipo_scadenza').addEventListener('change', calculateFineValidita);
	});

</script>
