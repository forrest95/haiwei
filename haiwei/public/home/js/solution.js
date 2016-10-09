// JavaScript Document
$(".tab li").click(function(){
	$(this).siblings().removeClass('active');
	$(this).addClass('active');
});

$(".tab1").click(function(){
	$(".changebox1").show();
	$(".changebox2,.changebox3,.changebox4").hide();
});

$(".tab2").click(function(){
	$(".changebox2").show();
	$(".changebox1,.changebox3,.changebox4").hide();
});

$(".tab3").click(function(){
	$(".changebox3").show();
	$(".changebox1,.changebox2,.changebox4").hide();
});

$(".tab4").click(function(){
	$(".changebox4").show();
	$(".changebox1,.changebox2,.changebox3").hide();
});
