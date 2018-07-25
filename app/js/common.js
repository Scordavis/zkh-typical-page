$(function() {

	// Custom JS
  // hover dropdown
  $('.js-dropdown')
  .mouseover(function() {
    $( this ).parent().find( '.nav-dropdown__content' ).show(300)
  })
  .mouseleave(function() {
    $('.nav-dropdown__content').hide(100)
  });

  $('.js-dropdown-form').click(function() {
  	$('.nav-dropdown__content--form').toggle();
	});

  // navbar hamburger

    $('.hamburger').click(function() {
	  	$('.js-navbar').toggleClass('nav-show');
	});



});
