$(document).ready(function() {
	$(window).scroll(function(){
		var scrollTop = $(window).scrollTop();
		if (scrollTop != 0)
			$('#Top').stop().animate({'opacity':'0.5'},400);
		else
			$('#Top').stop().animate({'opacity':'1'},400);
	});
	$('#Top').hover(function (e) {
		var scrollTop = $(window).scrollTop();
		if (scrollTop != 0) {
			$('#Top').stop().animate({'opacity':'1'},400);
		}
	},function (e) {
		var scrollTop = $(window).scrollTop();
		if (scrollTop != 0) {
		$('#Top').stop().animate({'opacity':'0.5'},400);
	}
	});
});