$(function() {
	$.ajaxSetup({
		cache: true
	});
	$(document).on('change', '#Language', function(){
		$.getScript('js/locale/' + $(this).val() + '.js')
		.done(function( script, textStatus ) {
			$('.auto-complete').val('');
		});
	});

	$( ".auto-complete" ).autocomplete({
		source: function( request, response ) {
			var sValue = request.term.toLowerCase();
			var aSearch = [];
			$(songs).each(function(i, song) {

				// Add the 'pages' and 'first_line' parameters if they don't exist
				if(typeof(song.first_line) === 'undefined') {
					song.first_line = '';
				}
				if(typeof(song.pages) === 'undefined') {
					song.pages = '';
				}

				// check to see if any of them match the search query
				var matchPages = song.pages.toLowerCase().search(sValue) != -1;
				var matchTitle = song.title.toLowerCase().search(sValue) != -1;
				var matchFirstLine = song.first_line.toLowerCase().search(sValue) != -1;

				if( matchPages || matchTitle || matchFirstLine ) {

					var songLabel = song.title;
					if(song.pages != '') {
						songLabel = '['+song.pages+'] '+songLabel;
					}

					var songValue = songLabel;

					// only show the first line if it's part of the search query but the query doesn't match the title
					if(
						!matchPages && !matchTitle &&
						song.first_line != ''
					) {
						songLabel = songLabel + ' ('+song.first_line+')';
					}

					aSearch.push({
						label: songLabel,
						value: songValue
					});
				}
			});

			response(aSearch);
		}
	});

	$('select.song-label').combobox();
	$( "#Date" ).datepicker();
});