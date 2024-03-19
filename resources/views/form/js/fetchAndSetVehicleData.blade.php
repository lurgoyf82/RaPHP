<script>
	// Function to fetch and set vehicle data based on search input
	function fetchAndSetVehicleData(searchInput, exactId = false) {
		if (searchInput.length >= 1) {
			if (exactId == true) {
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
</script>
