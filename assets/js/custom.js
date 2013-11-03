$(document).ready(function() {
      
  	$('input').keyup(function(){ // run anytime the value changes
  		var name = $('#front_name').val(); // get value of field
    	$('#register_name').val(name); // add them and output it
	});

});

$(function() {
    $('#search-catatan').fastLiveFilter('#pin-outer');
    
});

$('#edit-judul-jurnal').hide();
$('#hapus-judul-jurnal').hide();

$("#judul-jurnal").hover(function(){
    $('#edit-judul-jurnal').fadeIn();
    $('#hapus-judul-jurnal').fadeIn();
},function(){
    $('#edit-judul-jurnal').fadeOut();
    $('#hapus-judul-jurnal').fadeOut();
});

$('#search-catatan').focus(function()
{
    /*to make this flexible, I'm storing the current width in an attribute*/
    $(this).attr('data-default', $(this).width());
    $(this).animate({ width: 350 }, 'slow');
    var input = document.getElementById ("search-catatan");
    input.placeholder = "Cari Catatan menurut judul atau isi catatan";

}).blur(function()
{
    /* lookup the original width */
    var w = $(this).attr('data-default');
    $(this).animate({ width: 200 }, 'slow');
    var input = document.getElementById ("search-catatan");
    input.placeholder = "Cari Catatan ...";
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


$('#search-catatan').keyup(function(){ // run anytime the value changes
	$('#pin-outer').masonry();
})

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


