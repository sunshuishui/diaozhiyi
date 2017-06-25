// JavaScript Document
//导航菜单下拉效果
$(".nav ul li").hover(function(){
	$(this).addClass("hover").siblings().removeClass("hover");
	$(this).find(".menu").show();
},function(){
	$(this).removeClass("hover");
	$(this).find(".menu").hide();
})


	//=======广告轮播图的实现=======
	var _index=0;//初始化序列
	var timePlay=null;
	$("#Adv .ImgList").eq(0).show().siblings("div").hide();//最开始显示第一张

	$("ul.button li").hover(function(){/*鼠标在上面*/ 
		clearInterval(timePlay);//清处定时播放器
		_index=$(this).index();//获取当前li序列号
		//alert(_index);//弹窗
		$(this).addClass("hover").siblings().removeClass("hover");//显示按扭
		//fadeIn  淡入  fadeOut 淡出  
		$("#Adv .ImgList").eq(_index).fadeIn().siblings("div").fadeOut();//显示图片
	},function(){/*鼠标移开*/
		autoPlay();//启用定时播放器
	});

	//自动轮播
	//构建自动轮播的函数
	function autoPlay(){
		//alert("sss");
		//设置定时器
		timePlay=setInterval(function(){
			_index++;
			if(_index<4){
				if(_index==3){_index=-1; }//变成-1 
				$("ul.button li").eq(_index).addClass("hover").siblings().removeClass("hover");//显示按扭
				$("#Adv .ImgList").eq(_index).fadeIn().siblings("div").fadeOut();//显示图片
				 
			}else{_index=-1;/*设置序列号为-1,跳到播放第一张图片*/}
		},2000);	
	};
	autoPlay();//调用和执行
	
	
	
//精品项目列表鼠标放上去的效果
$("ul.count li").hover(function(){
	$(this).addClass("hover").siblings().removeClass("hover");	
	$(this).find(".cplist_js").stop().animate({height:"135px"},200);
	$(this).find(".cplist_js p.hh").css({background:"#ff4c4e"});
	$(this).find("span.xbt").css({background:"#B53637"});
	$(this).find("span.jt").css({background:"url(../img/xia.png) no-repeat center center #B53637"});
	
},function(){
	$(this).removeClass("hover");
	$(this).find(".cplist_js").stop().animate({height:"40px"},200);
	$(this).find(".cplist_js p.hh").css({background:"#ffffff"});
	$(this).find("span.xbt").css({background:"#FF4C4E"});
	$(this).find("span.jt").css({background:"url(../img/shang.png) no-repeat center center #FF4C4E"});
})

//名师名店效果
$(".md_cont ul li").hover(function(){
	$(this).find("p.md_cont_dd").stop().animate({height:"0px"},200);
	
},function(){
	$(this).find("p.md_cont_dd").stop().animate({height:"213px"},200);
	
})



//纹绣培训效果
var index33 = 0;
$(".px_bt ul li").hover(function(){
	index33=$(this).index();
	$(this).addClass("hover").siblings().removeClass();
	$(".px_nr .hide").eq(index33).show().siblings().hide();
})


//纹绣项目列表鼠标放上去的效果
$("ul.peixun_xj li").hover(function(){
	$(this).addClass("hover").siblings().removeClass("hover");	
	$(this).find(".cplist_js22").stop().animate({height:"135px"},200);
	$(this).find(".cplist_js22 p.hh22").css({background:"#ff4c4e"});
	$(this).find("span.xbt22").css({background:"#B53637"});
	$(this).find("span.jt22").css({background:"url(../img/xia.png) no-repeat center center #B53637"});
	$(this).find(".cplist_js22 p.xx22").css({display:"block"});
	
	$(this).find("span.jt44").css({background:"url(../img/xia2.png) no-repeat center center #B53637"});
	$(this).find(".cplist_js44 p.xx22").css({display:"block"});
	
},function(){
	$(this).removeClass("hover");
	$(this).find(".cplist_js22").stop().animate({height:"40px"},200);
	$(this).find(".cplist_js22 p.hh22").css({background:"#ffffff"});
	$(this).find("span.xbt22").css({background:"#FF4C4E"});
	$(this).find("span.jt22").css({background:"url(../img/shang.png) no-repeat center center #FF4C4E"});
	$(this).find(".cplist_js22 p.xx22").css({display:"none"});
	
	$(this).find("span.jt44").css({background:"url(../img/shang2.png) no-repeat center center #FF4C4E"});
	$(this).find(".cplist_js44 p.xx22").css({display:"none"});

})