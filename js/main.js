var genreFilter = (function () {
 	
 	//cache DOM
    var $genres = $('.genre-list-2').children();
    var $movies = $('.moives-list').children();

    var activeGenre = null;

    function _setActiveGenre(genre) {
    	if(genre == 'Sve')
    		activeGenre = null;
    	else
    		activeGenre = genre;
    	_showByGenre();
    }

    function _showByGenre() {

    	if(!activeGenre) {
    		$movies.show();
    		return null;
    	}

    	$movies.each(function(index, movie) {
    		var genres = movie.dataset.genres.split(',');
    		if(genres.indexOf(activeGenre) == -1)
    			$(movie).fadeOut();
    		else
    			$(movie).fadeIn();
    	});
    }

    function _handleGenreClick(event) {
    	event.preventDefault();
    	var $genre = $(event.target);
    	$genres.removeClass('active');
    	$genre.addClass('active');
    	_setActiveGenre($genre.text());
    }

 	function _bindEvents() {
 		$genres.on('click', _handleGenreClick);
 	}

    return {
        init: function() {
			if(window.location.pathname == "/movies.php") {
				_bindEvents();
			}			
		}
    };

})();


$(function() {
    $('form').on('submit', function(event) { event.preventDefault(); });
    genreFilter.init();
});