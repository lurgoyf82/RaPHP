<!-- Data Pagamento Field -->
<div class="form-group">
	<label for="polizza">Data Pagamento</label>
	<input type="text" type-input="date" type="date" class="form-control" id="data_pagamento_show" name="data_pagamento_show"
				 placeholder="Inizio Validita (gg-mm-aaaa)" maxlength="15" autocomplete="off"
				 value="{{ \Carbon\Carbon::parse(old('data_pagamento'))->format('d-m-Y') }}" semantic-type="date" semantic-id="402340">

	<input type="hidden" type-input="date" id="data_pagamento"
				 class="aaa field required" name="data_pagamento" value="{{ \Carbon\Carbon::parse(old('data_pagamento'))->format('m/d/Y') }}">
</div>
