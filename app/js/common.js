$(function() {


	// table collapse
		var headertext = [],
		headers = document.querySelectorAll(".js-table th"),
		tablerows = document.querySelectorAll(".js-table th"),
		tablebody = document.querySelector(".js-table tbody");

		for(var i = 0; i < headers.length; i++) {
			var current = headers[i];
			headertext.push(current.textContent.replace(/\r?\n|\r/,""));
		}
		for (var i = 0, row; row = tablebody.rows[i]; i++) {
			for (var j = 0, col; col = row.cells[j]; j++) {
				col.setAttribute("data-js-table", headertext[j]);
			}
		};


});
