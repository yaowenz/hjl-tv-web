$(function(){
	var conH = $(".right").height();
	if(conH>1080){
		$(".scroll_bar").show();
	}
	
	$(".icons>div").height( $(".icons").width()-10 );	
	$(".menu").click(function(){$(".list").animate({"right":"0px"},300)});	
	$(".list li a").click(function(){
		$(this).parent().siblings().children().removeClass("current");
		$(this).addClass("current");
	})

	//var step = 0;
	//var items = $(".txt .box").length;
	//$(".js-next").click(function(){
	//	step++;
	//	if(step>=items){
	//		alert("这是最后一页");
	//		step=items-1;
	//		console.log(step);
	//		return false;
	//	}
	//	$(".box").removeClass("current");
	//	$(".box").eq(step).addClass("current");
	//
	//	console.log(step);
	//})
	//$(".js-prev").click(function(){
	//	step--;
	//	if(step< 0){
	//		step=0;
	//		console.log(step);
	//		alert("已是第一页");
	//		return false;
	//	}
	//	$(".box").removeClass("current");
	//	$(".box").eq(step).addClass("current");
	//
	//	console.log(step);
	//})

	$(".js-next").hover(function(){
		$(".js-next").attr("src","images/next2.png");
	},function(){
		$(".js-next").attr("src","images/next.png");
	})
	$(".js-prev").hover(function(){
		$(".js-prev").attr("src","images/prev2.png");
	},function(){
		$(".js-prev").attr("src","images/prev.png");
	})
	
	
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
	
	/*循环播放
	 * var timer = setInterval(start,3000)
	function start(){
		if(step>=items){
			//alert("这是最后一页");
			step=items-1;
			console.log(step);
			return false;
		}
		$(".box").removeClass("current");
		$(".box").eq(step).addClass("current");
		step++;
	}*/
})
