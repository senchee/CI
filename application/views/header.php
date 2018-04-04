<!DOCTYPE html>
<html lang="ko">
	<head>
	
		<meta charset="utf-8">
		<title>포트폴리오</title>
		<style>
        @import url(http://cdn.jsdelivr.net/font-nanum/1.0/nanumbarungothic/nanumbarungothic.css);	

		/* reset css*/
		html, body, div, span, applet, object, iframe, table, caption, tbody, tfoot, thead, tr, th, td, 
		del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, 
		h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, 
		dl, dt, dd, ol, ul, li, fieldset, form, label, legend {
		 vertical-align: baseline;
		 font-family: Nanum Barun Gothic,Malgun Gothic,Dotum,Gulim,Helvetica,AppleGothic,tahoma,Sans-serif;
		 font-weight: inherit;
		 font-style: inherit;
		 font-size: 100%;
		 outline: 0;
		 padding: 0;
		 margin: 0;
		 border: 0;
		 }
		 li{list-style:none;}
		 a:link {text-decoration: none;}
		 a:visited {text-decoration: none;}

		 /* reset css*/
	
		#wrapper{width:1050px; margin: 0 auto; overflow:hidden; }
		header{border:1px solid black;}
		nav{width:100%; background-color:grey; height:30px;}
		nav ul{}
		nav ul li{float:right; padding-left:5px; padding-right:5px; padding-top:5px;}
		.top_banner{width:100%; height:80px; }
		.top_banner_close{width:50px; height:50px; float:right;  background-color:white;}
		#search_section{}
		.cate_btn{width:110px; height:120px; background-color:grey;position:absolute; }
		#search_section{background-color:white; }
		#search_section h1{width:200px; height:80px; background-color:white; vertical-align:middle; display:inline-block; margin-left:120px; margin-top:0px;}
		.search{display:inline-block;  }
		.search input{height: 40px; width:440px;  vertical-align:middle;}
		.my_info_cart{display:inline-block; vertical-align:middle; margin-left:100px;}
		.my_info_cart li{float:left; }
		.mini_menu{display:inline-block; margin-left:350px;}
		.mini_menu li{float:left; text-align:center; padding:5px 5px 5px 5px;}
		#wrapper_main{margin-top:34px;}
		.main_banner{clear:both;}
		.main_banner_rolling{border:1px solid black;} 
		.main_banner_rolling img{width:1050px; height:400px; display:inline-block;}
		
		footer{border:1px solid black; margin-top:10px;}
		</style>
		
		<script src="http://code.jquery.com/jquery-latest.js"></script>


	</head>
	<body>
	<div id="wrapper">
	<header>
	 <span class="top_banner_close"><img src="#" alt="닫기"></span>
	 <div class="top_banner" ><img src="#" alt="최상단 배너"></div>
	 
	 <nav>
	 <ul>
	 	<li><a href="#">즐겨찾기</a></li>
	 	<li><a href="#">로그인</a></li>
	 	<li><a href="#">회원가입</a></li>
	 	<li><a href="#">고객센터</a></li>
	 </ul>
	 </nav>
	<section>
	 <div id="search_section">
	 	<div class="cate_btn"><img src="#" alt="카테고리 버튼"></div>
		 	<h1><img src="#" alt="회사로고"></h1>
		 	<div class="search"><input type="search"></div>
		 	<ul class="my_info_cart"> 
		 		<li><img src="#" alt="내정보"></li>
		 		<li><img src="#" alt="장바구니"></li>
		 	</ul>  	
	 </div>
	 
	 
	 		<ul class="mini_menu"> 
		 		<li><a href="#"><img src="#" alt="아이템1"></a></li>
		 		<li><a href="#"><img src="#" alt="아이템2"></a></li>
		 		<li><a href="#"><img src="#" alt="아이템3"></a></li>
		 		<li><a href="#"><img src="#" alt="아이템4"></a></li>
		 		<li><a href="#"><img src="#" alt="아이템5"></a></li>
		 		
		 	</ul>
	
	</section>
	</header>
	
		<script>
	
		$(".top_banner_close").click(function()
		{
			$(".top_banner").css("display","none");
			$(".top_banner_close").css("display","none");
		});
		</script>
