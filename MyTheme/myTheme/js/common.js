$(document).ready(function() {

	$("#filter_container").mixItUp();

	$(".s_portfolio li").click(function() {
		$(".s_portfolio li").removeClass("active");
		$(this).addClass("active")
	});

	$('.view').magnificPopup({
	  type:'inline',
	  midClick: true
	});

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
		
	$(".portfolio_item").each(function(i) {
		$(this).find("a").attr("href", "#work_" + i);
		$(this).find(".port_descr").attr("id", "work_" + i);
	});

	$("input,textarea").jqBootstrapValidation();
	
});

