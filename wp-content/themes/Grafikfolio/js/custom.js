/*----------nivoSlider----------*/

$(window).load(function() {
	$('#slider1').nivoSlider({ pauseTime:5000, pauseOnHover:false, directionNav:true, directionNavHide:false, effect:'fade' });
	setTimeout(function(){
		$('#slider2').nivoSlider({ pauseTime:5000, pauseOnHover:false, captionOpacity:0.5 });
	}, 1000);
	setTimeout(function(){
		$('#slider3').nivoSlider({
			pauseTime:5000,
			pauseOnHover:false,
			controlNavThumbs:true
		});
	}, 2000);
	setTimeout(function(){
		$('#slider4').nivoSlider({
			effect:'random',
			animSpeed:1500,
			pauseTime:5000,
			startSlide:2,
			directionNav:false,
			controlNav:true,
			keyboardNav:false,
			pauseOnHover:false
		});
	}, 3000);
});
