jQuery(document).ready(function ($) {
  'use strict';

  // Sub-Menu Layout
  $('.sub-menu .dropdown-container i').click(function(){
  	let menuSelector = '#' + $(this).data('id') + '-mobile > #' +$(this).data('id');
  	$(menuSelector).slideToggle();
  })

  // Masonry Init
  $('.grid-masonry').colcade({ items: '.masonry-item', columns: '.grid-item', })

});