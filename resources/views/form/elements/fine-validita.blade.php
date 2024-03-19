<!-- Fine Validità Field -->
<div class="form-group">
	<label for="polizza">Fine Validit&agrave;</label>
	<input type="text" type-input="date" class="form-control" id="fine_validita_show" name="fine_validita_show"
				 placeholder="Fine Validita (gg-mm-aaaa)" maxlength="15" autocomplete="off"
				 value="{{ \Carbon\Carbon::parse(old('fine_validita'))->format('d-m-Y') }}" semantic-type="date" semantic-id="402340">

	<input type="hidden" type-input="date" id="fine_validita"
				 class="aaa field required" name="fine_validita" value="{{ \Carbon\Carbon::parse(old('fine_validita'))->format('m/d/Y') }}">
</div>
