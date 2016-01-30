$(document).ready(function() {

	$(".popup").magnificPopup({type:"image"});

	$(".name").animated("fadeInDown", "fadeOutUp");
	$(".descrip, .section_header").animated("fadeInDown", "fadeOutUp");
	$(".animated_2, .left").animated("fadeInLeft", "fadeOutLeft");
	$(".animated_3, .right").animated("fadeInRight", "fadeOutRight");
	$(".animated_1").animated("flipInY", "flipOutY");

	function heightDetect() {
		$(".main_head").css("height",$(window).height());
	};
	heightDetect();
	$(window).resize(function(){
		heightDetect();
	});
	
	$(".toggle_menu").click(function() {
	  $(".sandwich").toggleClass("active");
	});
	
	$(".top_mnu ul a").click(function() {
		$(".top_mnu").fadeOut(600);
	  $(".sandwich").toggleClass("active");
	});

	$(".toggle_menu").click(function(){
		if($(".top_mnu").is(":visible")){
			$(".text").removeClass("h_opacify");
			$(".top_mnu").fadeOut(600);
		} else{
			$(".text").addClass("h_opacify")
			$(".top_mnu").fadeIn(600);
		}
	});
	


	
});

