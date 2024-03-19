<script>
	function calculateFineValidita() {
		var inizioValidita = document.getElementById('inizio_validita').value;
		var tipoScadenza = document.getElementById('tipo_scadenza').value;
		var fineValiditaInput = document.getElementById('fine_validita');
		var fineValiditaShow = document.getElementById('fine_validita_show');

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
			fineValiditaShow.value = dd + '-' + mm + '-' + yyyy;
		}
	}
</script>
