<!-- Inizio Validità Field -->
<div class="form-group">
	<label for="polizza">Inizio Validit&agrave;</label>
	<input type="text" type-input="date" type="date" class="form-control" id="inizio_validita_show" name="inizio_validita_show"
				 placeholder="Inizio Validita (gg-mm-aaaa)" maxlength="15" autocomplete="off"
				 value="{{ \Carbon\Carbon::parse(old('inizio_validita'))->format('d-m-Y') }}" semantic-type="date" semantic-id="402340">

	<input type="hidden" type-input="date" id="inizio_validita"
				 class="aaa field required" name="inizio_validita" value="{{ \Carbon\Carbon::parse(old('inizio_validita'))->format('m/d/Y') }}">
</div>
