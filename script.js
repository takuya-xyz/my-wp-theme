
var win = $(window);

var body_h = $("body").height();

var front_center_box_h = $("#front_center_box").height();
$("#front_left_box").css("height",front_center_box_h+"px");
$("#front_right_box").css("height",front_center_box_h+"px");
$("#front-side_area").css("height",front_center_box_h+"px");

var menuHeight = $("#menu-wrap").height();
var footer_menuHeight = $("#footer_menu").height();

if($(window).scrollTop() < 200) {
	$("#menu-wrap").css("top", 0 + "px");
    $("#footer_menu").css("bottom", "-" + footer_menuHeight + "px");
}else{
	$("#menu-wrap").css("top", "-" + menuHeight + "px");
    $("#footer_menu").css("bottom", 0 + "px");
}

$(function() {
	
	win.resize(function() {
		
		var body_h = $("body").height();
		
		var front_center_box_h = $("#front_center_box").height();
		$("#front_left_box").css("height",front_center_box_h+"px");
		$("#front_right_box").css("height",front_center_box_h+"px");
		$("#front-side_area").css("height",front_center_box_h+"px");
		
	});
	
	var startPos = 0;
	$(window).scroll(function(){
	  var currentPos = $(this).scrollTop();
	  if (currentPos > startPos) {
	    if($(window).scrollTop() >= 200) {
	    	
	      $("#menu-wrap").css("top", "-" + menuHeight + "px");
	      $("#footer_menu").css("bottom", 0 + "px");
	      
	    }
	  } else {
		  
	    $("#menu-wrap").css("top", 0 + "px");
	    $("#footer_menu").css("bottom", "-" + footer_menuHeight + "px");
	    $("#footer_menu_list").css("display","none");
	    
	  }
	  startPos = currentPos;
	});
	
	$("#footer_menu_list_btn").click(function () {
	  $("#footer_menu_list").toggle();
	});
	
	
	
	var flg = 0;
	setInterval(function(){
    	if( flg == 0 ){
			$("#otoiawase").removeClass("animated rubberBand");
			flg = 1;
    	}else{
    		$("#otoiawase").addClass("animated rubberBand");
    		flg = 0;
    	}
    },3000);
	
	
	
});