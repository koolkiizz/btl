$(document).ready(function(){
	var doc_w = $(document).width();
	$(".require").offset({left: -doc_w});
	var require_h = $(".require").height();
	var exercises_h = $("#exercises").height();
	$("#require").click(function() {
		$(".require").animate({left: '0'}, 300);
		$("#exercises").animate({left: doc_w}, 300);
		$(".col-sm-12").css('height', require_h + 100);
	})
	$("#to_excercise").click(function() {
		$(".require").animate({left: -doc_w}, 300);
		$("#exercises").animate({left: '0'}, 300);
		$(".col-sm-12").css('height', exercises_h + 100);
	})
})