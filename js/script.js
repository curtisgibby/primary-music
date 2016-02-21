$(function() {
	$.ajaxSetup({
		cache: true
	});
	$(document).on('change', '#Language', function(){
		window.location.href = 'index.php?language=' + $(this).val() + '&reset=1';
	});

	function string_to_slug(str) {
	  str = str.replace(/^\s+|\s+$/g, ''); // trim
	  str = str.toLowerCase();
	  
	  // remove accents, swap ñ for n, etc
	  var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
	  var to   = "aaaaeeeeiiiioooouuuunc------";
	  for (var i=0, l=from.length ; i<l ; i++) {
	    str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
	  }

	  str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
	    .replace(/\s+/g, '-') // collapse whitespace and replace by -
	    .replace(/-+/g, '-'); // collapse dashes

	  return str;
	}

	$( ".auto-complete" ).autocomplete({
		source: function( request, response ) {
			var sValue = string_to_slug(request.term);
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
				var matchPages = string_to_slug(song.pages).search(sValue) != -1;
				var matchTitle = string_to_slug(song.title).search(sValue) != -1;
				var matchFirstLine = string_to_slug(song.first_line).search(sValue) != -1;

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