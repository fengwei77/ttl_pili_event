<!DOCTYPE html>
<html>
<head>
    <?php echo $meta ; ?>

    <link href="../../../assets/css/inner.css" rel="stylesheet" type="text/css" />
</head>
	<body>
		<div class="wrap">
			<?php echo $header ; ?>

            <div class="container">
                <div class="hero-start-pannel">
                    <img src="<?php echo base_url('assets/images/hero_start_bg.png')?>" class="base">
                    <div class="title"><img src="<?php echo base_url('assets/images/hero_title.png')?>" class="illfull"></div>
                    <div class="mask"><img src="<?php echo base_url('assets/images/hero_start_mask.png')?>" class="illfull" style="opacity: 0.3;"></div>
                    <span class="count">累積人數：100,000</span>
                    <div class="highlight">為自己#Be A Hero   <br class="lihsi-mobile">一起成為生命中的主角</div>
                    <div class="memo">台酒酒香泡麵 x 霹靂素還真，<br class="lihsi-mobile">用最經典的台灣味香挺你我，<br class="lihsi-mobile">一起成為最霹靂的台灣英雄！</div>
                    <a href="<?php echo base_url('hero/step_2')?>" class="start-btn">
                        <img src="<?php echo base_url('assets/images/hero_start_btn.png')?>" data-alt-src="<?php echo base_url('assets/images/hero_start_btn_hover.png')?>" class="illfull">
                    </a>
                </div>
            </div>
			<?php  echo $footer ; ?>
		</div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        file://C:/laragon/www/20201215-ttl/application/views/hero/1.php

		<script type="text/javascript">
			$( document ).ready(function() {

				
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