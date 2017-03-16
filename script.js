
var win = $(window);

var body_h = $("body").height();
$("#particles-js").css("height",body_h+"px");

$(function() {
	
	win.resize(function() {
		
		var body_h = $("body").height();
		$("#particles-js").css("height",body_h+"px");
		
	});
	
});