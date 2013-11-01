/**
 * Light Javascript "class" frameworking for you
 * to organize your code a little bit better.
 *
 * If you want more complex things, I'd suggest
 * importing something like Backbone.js as it
 * has much better abilities to handle a MVC
 * like framework including persistant stores (+1)
 *
 * @author  sjlu (Steven Lu)
 */
var Frontpage = function()
{
	/**
	 * The exports variable is responsible for
	 * storing and returning public functions
	 * in the instantized class.
	 */
	var exports = {};

	/**
	 * Write your public functions like this.
	 * Make sure you include it into the exports
	 * variable.
	 */
	function public_function() 
	{
		/**
		 * Note that we can still call
		 * private functions within the scope
		 * of the "class".
		 */
		private_function();
	}
	exports.public_function = public_function;

	/**
	 * Private functions are very similar, they
	 * just are not included in the exports 
	 * function.
	 */
	 function private_function()
	 {

	 }

	 /**
	  * You may wanna have a init() function
	  * to do all your bindings for the class.
	  */
	 function init()
	 {

	 }
	 exports.init = init;

	 /**
	  * Last but not least, we have to return
	  * the exports object.
	  */
	 return exports;
}

/**
 * To initialize our Frontpage class, we need
 * to define it into a Javascript variable like
 * so.
 */
var frontpage = new Frontpage();

/**
 * We can then call the functions as like any
 * other object, just the ones included in the 
 * exports object that was returned from Frontpage()
 */
frontpage.public_function();

/**
 * Write all your event listeners in the 
 * document.ready function or else they
 * may not bind correctly. As a side note, I like
 * to just call a public function in a class
 * to handle all your bindings here.
 */
$(document).ready(function() {
	
	frontpage.init();
      
  	$('input').keyup(function(){ // run anytime the value changes
  		var name = $('#front_name').val(); // get value of field
    	$('#register_name').val(name); // add them and output it
	});
});

//mutated from https://gist.github.com/justincarroll/5959773

// Load is used to ensure all images have been loaded, impossible with document

jQuery(window).load(function () {



// Takes the gutter width from the bottom margin of .pin-inner

var gutter = parseInt(jQuery('.pin-inner').css('marginBottom'));
var container = jQuery('#pin-outer');



// Creates an instance of Masonry on #pin-outer

container.masonry({
    gutter: gutter,
    itemSelector: '.pin-inner',
    columnWidth: '.pin-inner'
});



// This code fires every time a user resizes the screen and only affects .pin-inner elements
// whose parent class is .container-fluid. Triggers resize so nothing looks weird.

jQuery(window).bind('resize', function () {
    if (jQuery('#pin-outer').parent().hasClass('container-fluid')) {



        // Resets all widths to 'auto' to sterilize calculations

        post_width = jQuery('.pin-inner').width() + gutter;
        jQuery('.container-fluid #pin-outer, body > .container-fluid').css('width', 'auto');



        // Calculates how many .pin-inner elements will actually fit per row. Could this code be cleaner?

        pin - outer_per_row = jQuery('#pin-outer').innerWidth() / post_width;
        floor_pin - outer_width = (Math.floor(pin - outer_per_row) * post_width) - gutter;
        ceil_pin - outer_width = (Math.ceil(pin - outer_per_row) * post_width) - gutter;
        pin - outer_width = (ceil_pin - outer_width > jQuery('#pin-outer').innerWidth()) ? floor_pin - outer_width : ceil_pin - outer_width;
        if (pin - outer_width == jQuery('.pin-inner').width()) pin - outer_width = '100%';



        // Ensures that all top-level .container-fluid elements have equal width and stay centered

        jQuery('.container-fluid #pin-outer, body > .container-fluid').css('width', pin - outer_width);
        jQuery('body > .container-fluid').css({
            'margin': '0 auto'
        });



    }
}).trigger('resize');



});
