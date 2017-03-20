
var win = $(window);

var body_h = $("body").height();
//$("#particles-js").css("height",body_h+"px");

var front_center_box_h = $("#front_center_box").height();
$("#front_left_box").css("height",front_center_box_h+"px");
$("#front_right_box").css("height",front_center_box_h+"px");
$("#front-side_area").css("height",front_center_box_h+"px");

$(function() {
	
	win.resize(function() {
		
		var body_h = $("body").height();
		//$("#particles-js").css("height",body_h+"px");
		
		var front_center_box_h = $("#front_center_box").height();
		$("#front_left_box").css("height",front_center_box_h+"px");
		$("#front_right_box").css("height",front_center_box_h+"px");
		$("#front-side_area").css("height",front_center_box_h+"px");
		
	});
	
	
	
	var menuHeight = $("#menu-wrap").height();
	//alert(menuHeight);
	var startPos = 0;
	$(window).scroll(function(){
	  var currentPos = $(this).scrollTop();
	  if (currentPos > startPos) {
	    if($(window).scrollTop() >= 200) {
	      $("#menu-wrap").css("top", "-" + menuHeight + "px");
	    }
	  } else {
	    $("#menu-wrap").css("top", 0 + "px");
	  }
	  startPos = currentPos;
	});
	
	
	
});