$(function(){
	var conH = $(".right").height();

	$(".icons>div").height( $(".icons").width()-10 );	
	$(".menu").click(function(){$(".list").animate({"right":"0px"},300)});	
	$(".list li a").click(function(){
		$(this).parent().siblings().children().removeClass("current");
		$(this).addClass("current");
	});
	
	
	$(".scroll_bar .down").hover(function(){
		$(".scroll_bar .down").attr("src","images/down2.png");
	},function(){
		$(".scroll_bar .down").attr("src","images/down.png");
	})
	$(".scroll_bar .up").hover(function(){
		$(".scroll_bar .up").attr("src","images/up2.png");
	},function(){
		$(".scroll_bar .up").attr("src","images/up.png");
	})

	$(".scroll_bar .down").click(function(){
		window.scrollBy(0, 150);
	});

	$(".scroll_bar .up").click(function(){
		window.scrollBy(0, -150);
	});


	// 关闭右侧菜单
	$(".list .close").click(function(){
		$(".list").animate({"right":"-260px"},300)
	})
});
