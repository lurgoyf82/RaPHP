
<script>
	var id_marca = $('#id_marca');
	var id_modello = $('#id_modello');
	id_marca.change(function() {
		var marcaID = $(this).val();
		if (marcaID) {
			$.ajax({
				type: "GET",
				url: "/get-modello-by-marca/" + marcaID,
				success: function(res) {
					if (res) {
						id_modello.empty();
						id_modello.append('<option>Selezionare Un Modello</option>');
						$.each(res, function(key, value) {
							id_modello.append('<option value="' + key + '">' + value + '</option>');
						});
					} else {
						id_modello.empty();
					}
				}
			});
		} else {
			id_modello.empty();
		}
	});

</script>
