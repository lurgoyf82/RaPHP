@include('form.js.calculateFineValidita')

@include('form.js.fetchAndSetVehicleData')


<script>

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
