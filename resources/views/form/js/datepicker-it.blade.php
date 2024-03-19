<script>


	function yourFunctionBackup(el) {
		const selectedElement = document.getElementById(el + "_hidden");
		if (selectedElement == null) {
			return false;
		}

		$('input#' + el).datepicker({
			autoclose: true,
			orientation: "auto",
			todayHighlight: true,
			clearBtn: true,
			language: "it",
			startDate: new Date(1900, 01 - 1, 01),
			endDate: new Date(2124, 01 - 1, 30),
			format: "dd-mm-yyyy"
		}).on("changeDate", function (ev) {
			if (ev.date) {
				const offsetDate = new Date(ev.date.getTime() - (ev.date.getTimezoneOffset() * 60 * 1000));
				selectedField.value = offsetDate.toISOString().substring(0, 10);
				$(selectedField).change();
			}
		}).on("clearDate", function () {
			selectedField.value = null;
			$(selectedField).change();
		}).on("hide", function (ev) {
			if (ev.date) {
				const offsetDate = new Date(ev.date.getTime() - (ev.date.getTimezoneOffset() * 60 * 1000));
				selectedField.value = offsetDate.toISOString().substring(0, 10);
				$(selectedField).change();
			}
		});
	}


	function yourFunction(el) {
		const selectedField = document.getElementById(el);
		if (selectedField == null) {
			return false;
		}

		$('input#' + el + "_show").datepicker({
			autoclose: true,
			orientation: "auto",
			todayHighlight: true,
			clearBtn: true,
			language: "it",
			startDate: new Date(1900, 01 - 1, 01),
			endDate: new Date(2124, 01 - 1, 30),
			format: "dd-mm-yyyy"
		}).on("changeDate", function (ev) {
			if (ev.date) {
				const offsetDate = new Date(ev.date.getTime() - (ev.date.getTimezoneOffset() * 60 * 1000));
				selectedField.value = offsetDate.toISOString().substring(0, 10);
				$(selectedField).change();
			}
		}).on("clearDate", function () {
			selectedField.value = null;
			$(selectedField).change();
		}).on("hide", function (ev) {
			if (ev.date) {
				const offsetDate = new Date(ev.date.getTime() - (ev.date.getTimezoneOffset() * 60 * 1000));
				selectedField.value = offsetDate.toISOString().substring(0, 10);
				$(selectedField).change();
			}
		});
	}


	let phpArray = [<?php
										$comma = '';
										foreach ($campiDate as $campoData) {
											echo $comma . "'" . $campoData . "'";
											$comma = ',';
										} ?>];

	phpArray.forEach(el => {
// Replace 'yourFunction' with your actual JS function
// And provide the necessary arguments if any
		yourFunction(el);
	});
</script>
