// JavaScript Document
//�����˵�����Ч��
$(".nav ul li").hover(function(){
	$(this).addClass("hover").siblings().removeClass("hover");
	$(this).find(".menu").show();
},function(){
	$(this).removeClass("hover");
	$(this).find(".menu").hide();
})


	//=======����ֲ�ͼ��ʵ��=======
	var _index=0;//��ʼ������
	var timePlay=null;
	$("#Adv .ImgList").eq(0).show().siblings("div").hide();//�ʼ��ʾ��һ��

	$("ul.button li").hover(function(){/*���������*/ 
		clearInterval(timePlay);//�崦��ʱ������
		_index=$(this).index();//��ȡ��ǰli���к�
		//alert(_index);//����
		$(this).addClass("hover").siblings().removeClass("hover");//��ʾ��Ť
		//fadeIn  ����  fadeOut ����  
		$("#Adv .ImgList").eq(_index).fadeIn().siblings("div").fadeOut();//��ʾͼƬ
	},function(){/*����ƿ�*/
		autoPlay();//���ö�ʱ������
	});

	//�Զ��ֲ�
	//�����Զ��ֲ��ĺ���
	function autoPlay(){
		//alert("sss");
		//���ö�ʱ��
		timePlay=setInterval(function(){
			_index++;
			if(_index<4){
				if(_index==3){_index=-1; }//���-1 
				$("ul.button li").eq(_index).addClass("hover").siblings().removeClass("hover");//��ʾ��Ť
				$("#Adv .ImgList").eq(_index).fadeIn().siblings("div").fadeOut();//��ʾͼƬ
				 
			}else{_index=-1;/*�������к�Ϊ-1,�������ŵ�һ��ͼƬ*/}
		},2000);	
	};
	autoPlay();//���ú�ִ��
	
	
	
//��Ʒ��Ŀ�б�������ȥ��Ч��
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

//��ʦ����Ч��
$(".md_cont ul li").hover(function(){
	$(this).find("p.md_cont_dd").stop().animate({height:"0px"},200);
	
},function(){
	$(this).find("p.md_cont_dd").stop().animate({height:"213px"},200);
	
})



//������ѵЧ��
var index33 = 0;
$(".px_bt ul li").hover(function(){
	index33=$(this).index();
	$(this).addClass("hover").siblings().removeClass();
	$(".px_nr .hide").eq(index33).show().siblings().hide();
})


//������Ŀ�б�������ȥ��Ч��
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