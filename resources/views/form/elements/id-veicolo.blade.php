<!-- Search Input for Veicolo -->
<div class="form-group">
	<label for="searchInput">Veicolo</label>
	<input list="veicoli" name="searchInput" id="searchInput" class="form-control"
				 value="{{ old('searchInput') }}" placeholder="Cerca Veicolo">
	<datalist id="veicoli">
		<!-- Options will be dynamically loaded -->
	</datalist>
</div>

<!-- Hidden Field for the actual Veicolo ID -->
<input type="hidden" name="id_veicolo" id="id_veicolo" value="{{ old('id_veicolo') }}">
