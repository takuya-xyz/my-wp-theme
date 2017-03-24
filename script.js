
var win = $(window);

var body_h = $("body").height();
//alert(body_h);//2546

var side_fix_change = body_h - 700;
var side_fix_change_top = 0;

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

var side_offset_top = $( '#side_fix_test_2' ).get( 0 ).offsetTop;
//alert(side_offset_top);//1000

$(function() {
	
	var showFlag = false;
    var topBtn = $('#page-top');    
    topBtn.css('bottom', '-100px');
	
	win.resize(function() {
		
		//var body_h = $("body").height();
		
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
	  
	  
	  
if( currentPos > side_offset_top ) {
	
	$("#side_fix_test_2").addClass('fixed');
	
	if( currentPos > side_fix_change ){
		
		side_fix_top = currentPos - side_fix_change;
		side_fix_top = (-1)*side_fix_top;
		side_fix_top = side_fix_top + 60;
		
		$("#side_fix_test_2").css("top", side_fix_top+"px");
		
	}else{
		
		side_fix_top = 60;
		$("#side_fix_test_2").css("top", side_fix_top+"px");
		
	}
	
}else {
	
	$("#side_fix_test_2").removeClass('fixed');

}



if ($(this).scrollTop() > 100) {
    if (showFlag == false) {
        showFlag = true;
        topBtn.stop().animate({'bottom' : '20px'}, 200); 
    }
} else {
    if (showFlag) {
        showFlag = false;
        topBtn.stop().animate({'bottom' : '-100px'}, 200); 
    }
}



	});
	
	$("#footer_menu_list_btn").click(function () {
	  $("#footer_menu_list").toggle();
	});
	
	
	
	//スクロールしてトップ
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
	
	
	
	var flg = 0;
	setInterval(function(){
    	if( flg == 0 ){
			$(".otoiawase").removeClass("animated rubberBand");
			flg = 1;
    	}else{
    		$(".otoiawase").addClass("animated rubberBand");
    		flg = 0;
    	}
    },3000);
	
	
	
	//スムーズスクロールを強制的に無効にする
	if(navigator.userAgent.match(/MSIE 10/i) || navigator.userAgent.match(/Trident\/7\./) || navigator.userAgent.match(/Edge\/12\./)) {
		 $('body').on("mousewheel", function () {
		 event.preventDefault();
		 var wd = event.wheelDelta;
		 var csp = window.pageYOffset;
		 window.scrollTo(0, csp - wd);
		 });
	}
	
	
	
});