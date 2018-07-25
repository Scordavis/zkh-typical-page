</div>
<!-- FOOTER -->
	

<script src="/tpl/js/jquery.bxslider.min.js"></script>
		<footer class="footer">
			<div class="container1">
				<div class="footer-top">
					<div class="footer-logo">
						<a href="#" class="logo">
							<span class="for-img">
								
							</span>
							<? if($data['factory_id']=='1975') {?>
								<!--  -->
								<div class="site__name">
									<div style="font: 1.3em 'MuseoSansMedium';">ПОПАСНЯНСЬКИЙ</div>
									<div style="font: 1em 'MuseoSansMedium';">РАЙОННИЙ ВОДОКАНАЛ</div>
									<div style="font: 0.8em 'MuseoSansMedium';color:#AFC6B9;">комунальне підприємство</div>
								</div>
							<?}else {?>
								<?=$data['site_name']?>
							<?}?>
							
						</a>
						
					</div>
					<div class="footer-nav">
						<div class="nav1">
							<ul>
								<li><a href="#" class="bottom-links">—  про підприємство</a></li>
								<li><a href="#" class="bottom-links">—  підрозділ</a></li>
								<li><a href="#" class="bottom-links">—  тарифи</a></li>
							</ul>
						</div>

						<div class="nav2">
							<ul>
								<li><a href="#" class="bottom-links">—  споживачам</a></li>
								<li><a href="#" class="bottom-links">—  офіційне</a></li>
								<li><a href="#" class="bottom-links">—  кабінет</a></li>
							</ul>
						</div>
					</div>
					<div class="footer-contact">
						<div class="footer-location">
							<i class="i-location" style="color:<?=$icons_color?>"></i>
							<?=$data['yur_adressa']?><br/><?=$data['e_mail']?>
						</div>
						<?
						$data['phone'] = rtrim($data['phone'], '/');
						$phone_list = explode('/', $data['phone']);
						$count = count($phone_list);
						$ii = 0;
					
					?>
						<div class="footer-phone">
							<i class="i-phone" style="color:<?=$icons_color?>"></i>
							<div class="select">
								<p class="selected-item" style="color:#fff; font-family: MuseoSansBlack; font-size: 20px;";><?=$phone_list[0]?></p>
							<?if($count>1) {?>
							<ul class="select-list">
							<?while($ii<$count){?>
							
								<li class="select-item"><?=$phone_list[$ii]?></li>
								
							<?$ii++;}?></ul><?}?>
							</div>
						</div>
						
						<?if($data['url']=='brovary-ritualna-slujba.info-gkh.com.ua') {?>
						<div class="footer-clock">
							<img src="tpl/images/clock-icon.png" alt="">
							<p>Ми працюємо з <span>8-00 до 17-00</span> <br>без вихідних та святкових днів</p>
						</div>
						
						<?}?>

						<?if($data['emergency_service'] == 1) {?>
						<div class="footer-phone dif-select">
							<i class="i-attention" style="color:<?=$icons_color?>"></i>
							
							<div class="select-wrap">
								<div class="phone-wrap">
									<span class="phone-number" data-phone="footer-first"><?=$data['a_phone']?></span>
									
								</div>
								
								<span class="sep" style="color:#<?=$color?>">/</span>

								<div class="select">
									<p class="selected-item phone-name" style="color:<?=$icons_color?>">Аварійна служба</p>
								</div>
							</div>
						</div>
						<?} else {?>
						<div class="footer-phone dif-select">
							<div class="select-wrap">
								<div class="phone-wrap">
								</div>
								<div class="select">
								</div>
							</div>
						</div>
						<?}?>
					</div>

				</div>

				<div class="footer-bottom">
					<div class="copyright" >
						© 1994 - 2018 Федерація роботодавців комунальної інфраструктури, енергетики та житлово-комунального господарства України. Всі права захищені.
						
					</div>
					<!--<div style="padding:7px;background-color:rgba(255,255,255,0.2);color:grey;width:180px;"><center>Просмотров сегодня: <?=$data['counter_views']?></center></div>-->
				</div>
			</div>	
		</footer>
		<!-- FOOTER END -->


	</div>
	<?if($data['url']=='brovary-ritualna-slujba.info-gkh.com.ua') {?>
						<style>
							body, section, #content_page {
								background-color: #f8f8f8;
							}
							table {
								border-collapse: collapse;
							}
						</style>
						
						<?}?>
	
	
	<div class="hidden"></div>
	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	
	
	<script src="//cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<!--<script src="/tpl/js/jquery.bxslider.min.js"></script>-->
	<script src="/tpl/js/common.js"></script>
	<script>
	function blink(selector) {
		$(selector).fadeOut(900,function() {
			$(this).fadeIn(900,function() {
				blink(this);
			});
		});
	}
	$(document).ready(function () {
		blink('.bl');
	});
	
		
	</script>
	
	<style>
	body {font: 14px 'MuseoSansMedium';}
	.footer {font: 14px 'MuseoSansMedium';}
	.footer a{font: 14px 'MuseoSansMedium';}
	a.sp-link{display:none;}
	</style>
	