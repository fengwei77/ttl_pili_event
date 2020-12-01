<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1">
		<title>台酒香挺｜臺灣菸酒X霹靂布袋戲</title>
		<meta name="keywords" content="臺灣菸酒股份有限公司, 霹靂布袋戲, 台酒香挺, BE A HERO" />
 		<meta name="description" content="台酒香挺｜臺灣菸酒X霹靂布袋戲，台酒香挺, BE A HERO">
		<meta property="og:title" content="台酒香挺｜臺灣菸酒X霹靂布袋戲" />
		<meta property="og:site_name" content="台酒香挺｜臺灣菸酒X霹靂布袋戲" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="">
		<link href="assets/css/inner.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	</head>
	<body>
		<div class="wrap">
			<nav>
				<div class="logo">
					<a href="index.html"><img src="assets/images/logo.png"></a>
				</div>
				<div class="switch"></div>
				<div class="menu_pannel">
					<ul>
						<li><a href="1.php">台酒香挺  BE A HERO</a></li>
						<li><a href="invoice.html">發票登錄</a></li>
						<li><a href="product.html">經典美味  台酒泡麵</a></li>
						<li><a href="protagonist.html">經典英雄  素還真</a></li>
						<li><a href="rule.html">活動辦法</a></li>
						<li><a href="award.html">中獎名單</a></li>
						<li><a href="https://www.facebook.com/ttl1898/" target="_blank"><img src="assets/images/facebook.png"></a></li>
					</ul>
				</div>
			</nav>
			<div class="container advance">
				<div class="interior">
					<div class="hero4-pannel">
						<div class="operation">
							<div class="cover">
								<img src="assets/images/hero_4_cover.png" class="illfull">
							</div>
							<div class="extra lihsi-mobile">旋轉、縮放、移動，調整你的英雄姿態</div>
							<div class="barzone">
								<div class="spli">
									<div class="item-set">
										<img src="assets/images/hero_4_ill_1.png" class="illfull">
										縮放
									</div>
									<div id="slider-vertical-1" class="lihsi-desktop"></div>
									<div id="slider-vertical-1-2" class="lihsi-mobile"></div>
								</div>
								<div class="spli">
									<div class="item-set">
										<img src="assets/images/hero_4_ill_2.png" class="illfull">
										旋轉
									</div>
									<div id="slider-vertical-2" class="lihsi-desktop"></div>
									<div id="slider-vertical-2-2" class="lihsi-mobile"></div>
								</div>
							</div>
						</div>
						<div class="extra lihsi-desktop">旋轉、縮放、移動，調整你的英雄姿態</div>
						<div class="btn-group">
							<a href="3.php"><img src="assets/images/hero_4_btn_1.png" data-alt-src="assets/images/hero_4_btn_1_hover.png" class="illfull"></a>
							<a href="3.php"><img src="assets/images/hero_4_btn_2.png" data-alt-src="assets/images/hero_4_btn_2_hover.png" class="illfull"></a>
							<a href="5.php"><img src="assets/images/hero_4_btn_3.png" data-alt-src="assets/images/hero_4_btn_3_hover.png" class="illfull"></a>
						</div>
					</div>
				</div>
			</div>
			<footer>Copyright © 臺灣菸酒股份有限公司 版權所有<font class="lihsi-desktop"> ｜ 臺酒購物網</font></footer>
		</div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="assets/js/jquery-1.12.4.min.js"></script>
		<script src="assets/js/jquery.preload.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/lihsi.js"></script>
		<script type="text/javascript">
			$( document ).ready(function() {
				$( "#slider-vertical-1" ).slider({
					orientation: "vertical",
			    	range: "min",
			    	min: 0,
			    	max: 100,
			    	value: 60,
			    	slide: function( event, ui ) {
			    		console.log( ui.value );
			      	}
			    });

			    $( "#slider-vertical-2" ).slider({
					orientation: "vertical",
			    	range: "min",
			    	min: 0,
			    	max: 100,
			    	value: 60,
			    	slide: function( event, ui ) {
			    		console.log( ui.value );
			      	}
			    });

			    $( "#slider-vertical-1-2" ).slider({
					orientation: "horizontal",
			    	range: "min",
			    	min: 0,
			    	max: 100,
			    	value: 60,
			    	slide: function( event, ui ) {
			    		console.log( ui.value );
			      	}
			    });

			    $( "#slider-vertical-2-2" ).slider({
					orientation: "horizontal",
			    	range: "min",
			    	min: 0,
			    	max: 100,
			    	value: 60,
			    	slide: function( event, ui ) {
			    		console.log( ui.value );
			      	}
			    });
			});
			
			$(function (){
				/*
		        $.preload(
		        	'assets/images/bg.png',
		        	'assets/images/bg-2.png',
		        	'assets/images/cut-main-1.png',
		        	'assets/images/cut-main-2.png',
		        	'assets/images/excute-btn.png',
		        	'assets/images/go-btn.png',
		        	'assets/images/go-btn-over.png',
		        	'assets/images/pointer.png',
		        	'assets/images/result-0.png',
		        	'assets/images/result-1.png',
		        	'assets/images/result-2.png',
		        	'assets/images/result-3.png',
		        	'assets/images/result-btn.png',
		        	'assets/images/excute-btn-over.png',
		        	'assets/images/turntable.png'
		        );
		    	*/
		    });
		</script>
	</body>
</html>