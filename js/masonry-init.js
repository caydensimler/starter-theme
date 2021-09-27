jQuery('.masonry-grid').each(function(){
	var item = '.masonry-item-' + jQuery(this).data('columns');

	jQuery(this).masonry({
		itemSelector: item,
		percentPosition: true,
		transitionDuration: '0.5s',
		stagger: 30,
	});
});