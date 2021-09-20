jQuery(document).ready(function ($) {
  'use strict';

  // Accordion Layout
  $('.accordion button').click(function(){
  	$(this).toggleClass('active');
  	$(this).parent().parent().parent().find('.text-wrapper').slideToggle();
  	$(this).parent().parent().parent().find('.text-wrapper').toggleClass('active');
  })

  // Sub-Menu Layout
  $('.sub-menu .dropdown-container i').click(function(){
  	let menuSelector = '#' + $(this).data('id') + '-mobile > #' +$(this).data('id');
  	$(menuSelector).slideToggle();
  })

  // Footer Menu
  $('.footer-navigation h4').click(function(){
    let footerMenu = '#menu-' + $(this).data('id');
    $(this).toggleClass('active');
    $(footerMenu).slideToggle();
  })

  $('.slc-masonry').masonry({
    itemSelector: '.masonry-item',
    horizontalOrder: true,
    percentPosition: true,
  });

  $('.component > .dropdown-button').click(function(){
    let hiddenText = $(this).parent().parent().find('.component-wrapper.hidden-text');

    // Hide the text.
    if (!$(hiddenText).hasClass('active')) {
      $(this).children('p').text('-').addClass('minus');
      $(hiddenText).addClass('active');

    // Show the text.
    } else {
      $(hiddenText).removeClass('active');
      $(this).children('p').text('+').removeClass('minus');
    }

    $(hiddenText).slideToggle(300);

    setTimeout(function() {
      $('.slc-masonry').masonry();
    }, 300);
  })




});