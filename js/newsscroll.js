// JavaScript Document

var cutItm=0;
var len=$(".bd_long ul li").length;//获取有多少个图片列表
function autoPlay22(){
	cutItm++;
	if(cutItm>len-1){
		cutItm=0;
	}
	$(".bd_c4l li").removeClass("bd_cutLi");
	$(".bd_c4l li").eq(cutItm).addClass("bd_cutLi");
    var topVal=cutItm*122;
    $(".bd_long").animate({top:-topVal},500);
}

var timeer=setInterval(autoPlay22,3000);
$(".bd_c4l,.bd_c4top").hover(function(){clearInterval(timeer)},function(){timeer=setInterval(autoPlay22,3000);});

$(".bd_c4l li").click(function(){
	cutItm=$(".bd_c4l li").index(this);
	$(".bd_c4l li").removeClass("bd_cutLi");$(this).addClass("bd_cutLi");
	var topVal=cutItm*122;
    $(".bd_long").animate({top:-topVal},500);
	});
$(".bd_lbtn").click(function(){
	cutItm--;
	if(cutItm<0){
		cutItm=len-1;
	}
	$(".bd_c4l li").removeClass("bd_cutLi");
	$(".bd_c4l li").eq(cutItm).addClass("bd_cutLi");
    var topVal=cutItm*122;
    $(".bd_long").animate({top:-topVal},500);
});
$(".bd_rbtn").click(function(){
	cutItm++;
	if(cutItm>len-1){
		cutItm=0;
	}
	$(".bd_c4l li").removeClass("bd_cutLi");
	$(".bd_c4l li").eq(cutItm).addClass("bd_cutLi");
    var topVal=cutItm*122;
    $(".bd_long").animate({top:-topVal},500);
});