/**
 * Limit numeric inputs
 *
 * Accepts: 0-9, ".", ",", backspace, arrow keys, tab, and delete
 * 
 */
jQuery('body').on('keydown', '.number-input', function(e){
	//console.log('Number input testing: '+e.which);

	if (!((e.which >= 48 && e.which <= 57) || (e.which >= 96 && e.which <= 105) || e.which == 110 || (e.which == 173 || e.which == 109) || e.which == 188 || e.which == 190 || e.which == 8 || e.which == 9 || e.which == 37 || e.which == 39 || e.which == 46 )) {
		return false;
	}

});
