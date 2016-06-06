$(function(){
	$(".icons>div").height( $(".icons").width()-10 );	
	$(".menu").click(function(){$(".list").animate({"right":"0px"},300)});	
	$(".list li").click(function(){$(this).siblings().removeClass("current");$(this).addClass("current");})	
	var step = 0;
	var items = $(".txt .box").length;	
	$(".js-next").click(function(){
		step++;
		if(step>=items){
			alert("这是最后一页");
			step=items-1;
			console.log(step);
			return false;
		}
		$(".box").removeClass("current");
		$(".box").eq(step).addClass("current");
		
		console.log(step);
	})
	$(".js-prev").click(function(){
		step--;
		if(step< 0){
			step=0;
			console.log(step);
			alert("已是第一页");
			return false;
		}
		$(".box").removeClass("current");
		$(".box").eq(step).addClass("current");
		
		console.log(step);
	})
	$(".js-next").hover(function(){
		$(".js-next").attr("src","images/next2.png");
	},function(){
		$(".js-next").attr("src","images/next.png");
	})
	$(".js-prev").hover(function(){
		$(".js-prev").attr("src","images/prev.png");
	},function(){
		$(".js-prev").attr("src","images/prev2.png");
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
