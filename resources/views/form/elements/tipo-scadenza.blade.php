<!-- Tipo Scadenza Field -->
<div class="form-group">
	<label for="tipo_scadenza">Tipo Scadenza</label>
	<select name="tipo_scadenza" id="tipo_scadenza" class="form-control">
		<option value="">Selezionare Tipo Scadenza</option>
		<option value="Quadrimestrale" @if(old('tipo_scadenza') == 'Quadrimestrale') selected @endif>Quadrimestrale</option>
		<option value="Semestrale" @if(old('tipo_scadenza') == 'Semestrale') selected @endif>Semestrale</option>
		<option value="Annuale" @if(old('tipo_scadenza') == 'Annuale') selected @endif>Annuale</option>
	</select>
</div>
