// JavaScript Document
$("#serve li").click(function(){			//上部分切换
	$(this).siblings().removeClass('sidebar-child-active');
	$("#download li").siblings().removeClass('sidebar-child-active');
	$(this).addClass('sidebar-child-active');
	$("#content-box #service,#content-box2 #service").hide();
	$("#content-box #service").eq($(this).index()).show();		
});

$("#download li").click(function(){			//下部分切换
	$(this).siblings().removeClass('sidebar-child-active');
	$("#serve li").siblings().removeClass('sidebar-child-active');
	$(this).addClass('sidebar-child-active');
	$("#content-box2 #service,#content-box #service").hide();
	$("#content-box2 #service").eq($(this).index()).show();		
});