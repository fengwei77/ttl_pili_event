<!DOCTYPE html>
<html>
	<head>
        <?php echo $meta ; ?>

        <link href="<?php echo base_url('assets/css/inner.css')?>" rel="stylesheet" type="text/css" />
		<!-- flipster css -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.flipster.css')?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.flipster.fix_ex.css')?>">
		<!-- owl.carousel Slider Main Style Sheet -->
		<link href="<?php echo base_url('assets/css/owl.carousel.css')?>" rel="stylesheet" media="all">
		<link href="<?php echo base_url('assets/css/owl.theme.default.css')?>" rel="stylesheet" media="all">
	</head>
	<body>
		<div class="wrap">
            <?php echo $header ; ?>

            <div class="container advance">
				<div class="interior">
					<div class="spindle">
						<img src="<?php echo base_url('assets/images/hero_2_item.png')?>" class="hero_2_s1">
					</div>
					<div class="hero2-pannel">
						<div class="hero2-carousel lihsi-desktop">
							<div class="flipster">
								<ul class="flip-items">
									<li><a href="<?php echo base_url('hero/step_3?char=1')?>"><img src="<?php echo base_url('assets/images/hero_2_chs_1.gif')?>" class="illfull"></a></li>
									<li><a href="<?php echo base_url('hero/step_3?char=2')?>"><img src="<?php echo base_url('assets/images/hero_2_chs_2.gif')?>" class="illfull"></a></li>
									<li><a href="<?php echo base_url('hero/step_3?char=3')?>"><img src="<?php echo base_url('assets/images/hero_2_chs_3.gif')?>" class="illfull"></a></li>
								</ul>
							</div>
							<a href="javascript:void(0);" class="arrow arrow-left">
								<img src="<?php echo base_url('assets/images/product_arrow_left.png')?>" class="illfull">
							</a>
							<a href="javascript:void(0);" class="arrow arrow-right">
								<img src="<?php echo base_url('assets/images/product_arrow_right.png')?>" class="illfull">
							</a>
						</div>
						<div class="hero2-mobile-carousel lihsi-mobile">
							<div class="owl-carousel">
								<div class="info">
								<a href="<?php echo base_url('hero/step_3?char=1')?>"><img src="<?php echo base_url('assets/images/hero_2_chs_1_mobile.gif')?>" class="illfull"></a>
								</div>
								<div class="info">
									<a href="<?php echo base_url('hero/step_3?char=2')?>"><img src="<?php echo base_url('assets/images/hero_2_chs_2_mobile.gif')?>" class="illfull"></a>
								</div>
								<div class="info">
									<a href="<?php echo base_url('hero/step_3?char=3')?>"><img src="<?php echo base_url('assets/images/hero_2_chs_3_mobile.gif')?>" class="illfull"></a>
								</div>
							</div>
							<a href="javascript:void(0);" class="arrow arrow-left"><img src="<?php echo base_url('assets/images/product_arrow_left.png')?>" class="illfull"></a>
							<a href="javascript:void(0);" class="arrow arrow-right"><img src="<?php echo base_url('assets/images/product_arrow_right.png')?>" class="illfull"></a>
						</div>
						<div class="memo">遊戲玩法：選擇一款英雄姿態，<br class="lihsi-mobile">拍攝或上傳照片，合成製作，分享並於貼文中</div>
						<div class="extra">加入「#BeAHero」Tag家人或朋友，<br class="lihsi-mobile">一起 Be a Hero，參加抽獎。</div>
					</div>
				</div>
			</div>
            <?php echo $footer ; ?>
        </div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url('assets/js/jquery-1.12.4.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.preload.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/lihsi.js')?>"></script>
		<!-- flipster.js -->
        <script src="<?php echo base_url('assets/js/jquery.flipster.js')?>"></script>
		<!-- Include owl.carousel.js -->
        <script src="<?php echo base_url('assets/js/owl.carousel.js')?>"></script>

		<script type="text/javascript">
			$( document ).ready(function() {
				
				$('.owl-carousel').owlCarousel({
				    items: 1,
				    loop: true,
				    nav: false,
				    mouseDrag: false,
				    touchDrag: false,
				    autoHeight: false,
				    autoplay: false,
				    autoplayTimeout: 3000,
				    dots: false,
				    animateOut: 'fadeOut'
				});

				$(".hero2-mobile-carousel .arrow.arrow-left").click(function(){
					var owlTarget = $(this).parent().parent().find('.owl-carousel');
					owlTarget.trigger('prev.owl.carousel');
				});

				$(".hero2-mobile-carousel .arrow.arrow-right").click(function(){
					var owlTarget = $(this).parent().parent().find('.owl-carousel');
					owlTarget.trigger('next.owl.carousel');
				});

				var flipster = $('.flipster').flipster({
					start: 0,
					style: 'infinite-carousel',
					spacing: 0,
					loop: 1,
					scrollwheel: false,
					buttons: false,
					click: false
				});

				$('.hero2-carousel .arrow.arrow-left').click(function(){
					flipster.flipster('prev');
				});

				$('.hero2-carousel .arrow.arrow-right').click(function(){
					flipster.flipster('next'); // Next item
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