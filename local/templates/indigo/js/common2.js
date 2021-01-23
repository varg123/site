$('.slider-wrap').on('init', function(event, slick){
  var dots = $( '.slick-dots li' );
  console.log( 'SRANZAN VEE' );
  dots.each( function( k, v){
	$(this).find( 'button' ).addClass( 'heading'+ k );
  });
  var items = slick.$slides;
  items.each( function( k, v){
	  var text = $(this).find( '.item-desc' ).html();
	  $( '.heading' + k ).html(text);
  });
});
$('.slider-wrap').slick({
	dots: true,
	infinite: true,
	arrows: false,
	speed: 1500,
	slidesToShow: 1,
	slidesToScroll: 1,
	autoplay: true,
	fade: true,
});