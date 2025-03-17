$(function () {
  $.ajaxSetup({
    cache: true,
  });
  $(document).on("change", "#Language", function () {
    window.location.href = "index.php?language=" + $(this).val() + "&reset=1";
  });

  function string_to_slug(str) {
    str = str.replace(/^\s+|\s+$/g, ""); // trim
    str = str.toLowerCase();

    // remove accents, swap ñ for n, etc
    var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
    var to = "aaaaeeeeiiiioooouuuunc------";
    for (var i = 0, l = from.length; i < l; i++) {
      str = str.replace(new RegExp(from.charAt(i), "g"), to.charAt(i));
    }

    str = str
      .replace(/[^a-z0-9 -]/g, "") // remove invalid chars
      .replace(/\s+/g, "-") // collapse whitespace and replace by -
      .replace(/-+/g, "-"); // collapse dashes

    return str;
  }

  $(".auto-complete").autocomplete({
    source: function (request, response) {
      var sValue = string_to_slug(request.term);
      var aSearch = [];
      $(songs).each(function (i, song) {
        // Add the 'songNumber' parameter if it doesn't exist
        if (typeof song.songNumber === "undefined") {
          song.songNumber = "";
        }

        // check to see if any of them match the search query
        var matchPages = string_to_slug(song.songNumber).search(sValue) != -1;
        var matchTitle = string_to_slug(song.title).search(sValue) != -1;

        if (matchPages || matchTitle) {
          var songLabel = song.title;
          if (song.songNumber != "") {
            songLabel = "[" + song.songNumber + "] " + songLabel;
          }

          aSearch.push({
            label: songLabel,
            value: song.slug + "|" + songLabel,
          });
        }
      });

      response(aSearch);
    },
    select: function(event, ui) {
        // Update the hidden field with the value
        $("#Hidden" + $(this).attr("id")).val(ui.item.value);
        // Update the input field with the label
        $(this).val(ui.item.label);
        return false; // Prevent default behavior
    },
    focus: function(event, ui) {
        // Show the label when navigating
        $(this).val(ui.item.label);
        return false; // Prevent default behavior
    }
  });

  $("select.song-label").combobox();
  $("#Date").datepicker();
});
