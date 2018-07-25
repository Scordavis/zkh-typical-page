<!-- BUNNER -->

<style>

h2 {
	position: relative;
	display: block;
	margin: 19px 0;
	padding: 15px 0;
	text-align: center;
	font: 30px/30px 'MuseoSansBlack';
	text-transform: uppercase;
}

h2:after {
	position: absolute;
	top: 12px;
	right: 0;
	left: 0;
	display: block;
	content: attr(data-text);
	text-align: center;
	font: 60px/40px 'MuseoSansBlack';
	color: #7cb0df;
	opacity:0.08;
	text-transform: uppercase;
}

</style>
<?$db = new SafeMySQL();
if($data['color']!=='') {
	$background_color = $data['color'];
	$subject_0 = '<img src="/tpl/images/subject-0.png" alt="">';
		$subject_1 = '<img src="/tpl/images/subject-1.png" alt="">';
		$subject_2 = '<img src="/tpl/images/subject-2.png" alt="">';
		$subject_3 = '<img src="/tpl/images/subject-3.png" alt="">';
	/*
	#FFD700 для чорного
	#FFFF00  для красного
	#C0FF3E для зеленого
	*/
	if($data['color']=='045FB4') {//синий
	
		$color_sl = 'ffffff';
		$subject_0 = '<img src="/tpl/images/blue_subject-0.png" alt="">';
		$subject_1 = '<img src="/tpl/images/blue_subject-1.png" alt="">';
		$subject_2 = '<img src="/tpl/images/blue_subject-2.png" alt="">';
		$subject_3 = '<img src="/tpl/images/blue_subject-3.png" alt="">';
	}
	
	if($data['color']=='006400') {//зелень
		$color_sl = 'C0FF3E';
		$subject_0 = '<img src="/tpl/images/green_subject-0.png" alt="">';
		$subject_1 = '<img src="/tpl/images/green_subject-1.png" alt="">';
		$subject_2 = '<img src="/tpl/images/green_subject-2.png" alt="">';
		$subject_3 = '<img src="/tpl/images/green_subject-3.png" alt="">';
	}
	
	if($data['color']=='DF0101') {//красный
		$color_sl = 'FFE4E1';
		$subject_0 = '<img src="/tpl/images/red_subject-0.png" alt="">';
		$subject_1 = '<img src="/tpl/images/red_subject-1.png" alt="">';
		$subject_2 = '<img src="/tpl/images/red_subject-2.png" alt="">';
		$subject_3 = '<img src="/tpl/images/red_subject-3.png" alt="">';
	}
	
	if($data['color']=='1C1C1C') {//черный
		$color_sl = 'FFD700';
		$subject_0 = '<img src="/tpl/images/subject-0.png" alt="">';
		$subject_1 = '<img src="/tpl/images/subject-1.png" alt="">';
		$subject_2 = '<img src="/tpl/images/subject-2.png" alt="">';
		$subject_3 = '<img src="/tpl/images/subject-3.png" alt="">';
	}
	if($data['color']=='daa520') {
		
		$color_sl = 'ffffff';
		$subject_0 = '<img src="/tpl/images/subject-0.png" alt="">';
		$subject_1 = '<img src="/tpl/images/subject-1.png" alt="">';
		$subject_2 = '<img src="/tpl/images/subject-2.png" alt="">';
		$subject_3 = '<img src="/tpl/images/subject-3.png" alt="">';
	}

	
}
else {
	$background_color =$color_sl= 'daa520';
	$subject_0 = '<img src="/tpl/images/subject-0.png" alt="">';
		$subject_1 = '<img src="/tpl/images/subject-1.png" alt="">';
		$subject_2 = '<img src="/tpl/images/subject-2.png" alt="">';
		$subject_3 = '<img src="/tpl/images/subject-3.png" alt="">';
}
// var_dump($data['color']);
?>
		<div class="banner">
			<div class="bunner-slider-wrap">
				<ul class="bunner-slider">
				<?foreach($data['slider'] as $one){?>
					<li class="bunner-item">
						<div class="bunner-img full-img1">
						<?
						if($one['transfered']=='1') {
							$im =  $one['slider_img_name'];
							echo '<img src="//info-gkh.com.ua/templates/def/images/slider_standart_imgs/'.$im.'" alt="" height="230px">';
						}else {?>
							<img src="//info-gkh.com.ua/user_uploads/<?=$one['slider_img_name']?>" alt="" height="235px">
						<?}?>
						</div>
						<?if($data['url']!=='brovary-ritualna-slujba.info-gkh.com.ua') {?>
						<div class="bunner-text">
							<p class="title">Послуги:<span class="orange" style="color:#<?=$color?>">
							<?if(isset($data['sferes'][0])) {?>
								<?=$data['sferes'][0]?><br/>
							<?}?>
							
							<?if(isset($data['sferes'][1])) {?>
								<?=$data['sferes'][1]?><br/>
							<?}?>
							
							<?if(isset($data['sferes'][2])) {?>
								<?=$data['sferes'][2]?><br/>
							<?}?>
							
							<?if(isset($data['sferes'][3])) {?>
								<?=$data['sferes'][3]?>
							<?}?></span></p>
							
								<ul>
									<li>Рік заснування підприємства:  <span class="orange" style="color:#<?=$color?>"><?=$data['foundation']?></span></li>
									<li>Кількість співробітників:  <span class="orange" style="color:#<?=$color?>"><?=$data['workers']?> осіб</span></li>
									
										<li>Кількість абонентів: <span class="orange" style="color:#<?=$color?>"> <?=$data['abonents']?></span></li>	
								</ul>
							
						</div>
						<?}?>
					</li>
				<?}?>
					
				</ul>
			</div>
		</div>
		<!-- BUNNER END -->

		<!-- NEWS -->
		<?if($data['url']!=='brovary-ritualna-slujba.info-gkh.com.ua') {?>
		<div class="news" style="font: 14px/20px 'MuseoSansMedium';">
			<div class="container1">
				<h2 data-text="Новини" >Новини</h2>
				<div class="news-slider-wrap">
					<ul class="news-slider">
					<?foreach($data['anonses'] as $one) { ?>
						<?if(isset($one['factory_id'])) if ($one['factory_id'] == 0) $folder = 'global_news'; else $folder = $data['folder']; ?>
						<li class="news-item">
							<div class="news-img full-img">
								<img src="//info-gkh.com.ua/user_uploads/<?=$folder?>/<?=$one['news_anons_img']?>" alt="">
							</div>
							<div class="news-text">
								<div class="news-meta">
									<span class="news-date">
										<i class="i-clock" style="color:#<?=$data['color']?>"></i>
										<span style="color:#<?=$data['color']?>;font-weight:bold;"><?if($one['news_created']!==''){echo $one['news_created'];}else {echo $one['news_edited'];}?></span>
									</span>
									<span class="news-views">
										<i class="i-eye" style="color:#<?=$data['color']?>"></i>
										<span style="color:#<?=$data['color']?>;font-weight:bold;"><?=$one['news_views']?></span>
									</span>
								</div>
								
								<a style="cursor:pointer;color:#<?=$data['color']?>" onclick="openLink('<?=$data['url']?>', 'news', '<?=$one['id']?>')" class="news-title" ><?=$one['news_title']?></a>
								<div class="news-descr"><span style="color:#<?=$data['color']?>" style="font: 14px 'MuseoSansMedium';"> <?=$one['news_anons']?></span><br/>
								
								<!-- <a onclick="openLink('<?=$data['url']?>', 'news', '<?=$one['id']?>')" style="cursor:pointer;" class="news-link" >Детальніше <i class="i-right-arrow" style="color:<?=$icons_color?>"></i></a> -->
								<a href="/index/news/?id=<?=$one['id']?>">Детальніше <i class="i-right-arrow" style="color:<?=$icons_color?>"></i></a>
								
								</div>
							</div>
						</li>
						<!-- /slide -->

						
						<!-- /slide -->
					<?}?>
						<li class="news-item">
							<div class="news-img empty-slider">
								<img src="/tpl/images/slider-photo.png" alt="">
							</div>
							<div class="news-text">
							<div class="news-meta">
								<span class="news-date">
									<i class="i-clock" style="color:#<?=$data['color']?>; margin-right: 5px;"></i>
									<span style="color: #716f6f;font-weight:bold;opacity: 0.5;">невідомо</span>
								</span>
								<span class="news-views">
									<i class="i-eye" style="color:#<?=$data['color']?> margin-right: 5px;"></i>
									<span style="color: #716f6f;font-weight:bold;opacity: 0.5;">0</span>
								</span>
							</div>
								
								
								
							<a style="cursor:pointer;color: #716f6f" onclick="openLink('<?=$data['url']?>', 'news', '<?=$one['id']?>')" class="news-title" >На данний момент тут нема новини</a>
							<div class="news-descr"><span style="color:#716f6f">Текст відсутній.</span><br/>
							
							<!-- Детальнише кнопка -->
							<!-- <a href="/index/news/?id=<?=$one['id']?>">Детальніше <i class="i-right-arrow" style="color:<?=$icons_color?>"></i></a> -->
							
							</div>
							</div>
						</li>
						<!-- /slide -->

						<li class="news-item">
							<div class="news-img empty-slider">
								<img src="/tpl/images/slider-photo.png" alt="">
							</div>
							<div class="news-text">
							<div class="news-meta">
								<span class="news-date">
									<i class="i-clock" style="color:#<?=$data['color']?>; margin-right: 5px;"></i>
									<span style="color: #716f6f;font-weight:bold;opacity: 0.5;">невідомо</span>
								</span>
								<span class="news-views">
									<i class="i-eye" style="color:#<?=$data['color']?> margin-right: 5px;"></i>
									<span style="color: #716f6f;font-weight:bold;opacity: 0.5;">0</span>
								</span>
							</div>
								
								
								
							<a style="cursor:pointer;color: #716f6f" onclick="openLink('<?=$data['url']?>', 'news', '<?=$one['id']?>')" class="news-title" >На данний момент тут нема новини</a>
							<div class="news-descr"><span style="color:#716f6f">Текст відсутній.</span><br/>
							
							<!-- Детальнише кнопка -->
							<!-- <a href="/index/news/?id=<?=$one['id']?>">Детальніше <i class="i-right-arrow" style="color:<?=$icons_color?>"></i></a> -->
							
							</div>
							</div>
						</li>
						<!-- /slide -->

						<li class="news-item">
							<div class="news-img empty-slider">
								<img src="/tpl/images/slider-photo.png" alt="">
							</div>
							<div class="news-text">
							<div class="news-meta">
								<span class="news-date">
									<i class="i-clock" style="color:#<?=$data['color']?>; margin-right: 5px;"></i>
									<span style="color: #716f6f;font-weight:bold;opacity: 0.5;">невідомо</span>
								</span>
								<span class="news-views">
									<i class="i-eye" style="color:#<?=$data['color']?> margin-right: 5px;"></i>
									<span style="color: #716f6f;font-weight:bold;opacity: 0.5;">0</span>
								</span>
							</div>
								
								
								
							<a style="cursor:pointer;color: #716f6f" onclick="openLink('<?=$data['url']?>', 'news', '<?=$one['id']?>')" class="news-title" >На данний момент тут нема новини</a>
							<div class="news-descr"><span style="color:#716f6f">Текст відсутній.</span><br/>
							
							<!-- Детальнише кнопка -->
							<!-- <a href="/index/news/?id=<?=$one['id']?>">Детальніше <i class="i-right-arrow" style="color:<?=$icons_color?>"></i></a> -->
							
							</div>
							</div>
						</li>
						<!-- /slide -->
						
						<li class="news-item">
							<div class="news-img empty-slider">
								<img src="/tpl/images/slider-photo.png" alt="">
							</div>
							<div class="news-text">
							<div class="news-meta">
								<span class="news-date">
									<i class="i-clock" style="color:#<?=$data['color']?>; margin-right: 5px;"></i>
									<span style="color: #716f6f;font-weight:bold;opacity: 0.5;">невідомо</span>
								</span>
								<span class="news-views">
									<i class="i-eye" style="color:#<?=$data['color']?> margin-right: 5px;" title="Просмотров"></i>
									<span style="color: #716f6f;font-weight:bold;opacity: 0.5;">0</span>
								</span>
							</div>
								
								
								
							<a style="cursor:pointer;color: #716f6f" onclick="openLink('<?=$data['url']?>', 'news', '<?=$one['id']?>')" class="news-title" >На данний момент тут нема новини</a>
							<div class="news-descr"><span style="color:#716f6f">Текст відсутній.</span><br/>
							
							<!-- Детальнише кнопка -->
							<!-- <a href="/index/news/?id=<?=$one['id']?>">Детальніше <i class="i-right-arrow" style="color:<?=$icons_color?>"></i></a> -->
							
							</div>
							</div>
						</li>

						

					</ul>
				</div>
			</div>
		</div>
		
		
		
		<!-- NEWS END-->
		
		<!-- NEWS -->
		<style>
            .Wmodal-background {
        	
        	position:fixed;
            overflow: auto;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        	
        }
        
            .Wmodal{
            position:relative;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            width:70%;
            margin: auto;
        }
        
            .Wmodal_container {
            margin: 50px;
            padding: 20px;
            width: 90%;
            text-align: left;
            white-space: normal;
            background-color: #fff;    
            color: #000;
        }
        #inline_answer {display:none; width:70%;margin:0 auto;}
        #inline_comments {display:none; width:70%;margin:0 auto;}
        label { margin-right: 12px; margin-bottom: 9px;  color: #646464; font-size: 1.2em; }
            
            .txt {   
            display: inline-block; 
            color: #676767;
            background-color:#cccccc;
            width: 453px; 
            border-radius: 10px;
            margin-bottom: 10px; 
            border: 1px dotted #ccc; 
            padding: 5px 9px;
            font-size: 1.2em;
            line-height: 1.4em;
            }
            
            .txtarea { 
            display: block; 
            resize: none;
            color: #676767;
            background-color:#cccccc;
           
            margin-bottom: 10px; 
            width: 546px; 
            height: 150px;
            border-radius: 10px;
            border: 1px dotted #ccc;
            padding: 5px 9px; 
            font-size: 1em;
            line-height: 1.4em;
            }
            .bunner-slider-wrap .bx-pager.bx-default-pager a.active {
				background: #fff;
				box-shadow: 0px 0px 0px 4px #<?=$background_color?>;
			}
			            
            .txt:focus, .txtarea:focus { border-style: solid; border-color: #bababa; color: #444; }
            
            input.error, textarea.error { border-color: #973d3d; border-style: solid; background: #f0bebe; color: #a35959; }
            input.error:focus, textarea.error:focus { border-color: #973d3d; color: #a35959; }
		</style>
		<?
		$url = $data['url'];
		$page_id = $db->getOne("SELECT `factory_id` FROM `sites_settings` WHERE `factory_url`='$url'");
		?>
		<div class="subjects">
			<h2 data-text="Важливі розділи">Важливі розділи</h2>
			
			<div class="subject-list">
				<div class="container1">	
					<!--<a onclick="$('#subj-pages-block').css('display', 'block');" style="text-decoration:none;" class="subject-item">-->
					<a onclick="$('#subj-pages-block').css('display', 'block');" style="text-decoration:none;" class="subject-item">
						<div class="subject-img for-img">
							<!--<img src="/tpl/images/subject-0.png" alt="">-->
							<?=$subject_0?>
						</div>
						<div class="subject-text">книга скарг та пропозицій</div>
					</a>
					
					<a href="#" class="subject-item" onclick="openLink('<?=$data['url']?>', 'subpage', '2'); return false;">
						<div class="subject-img for-img">
							<?=$subject_1?>
						</div>
						<div class="subject-text">органи місцевого самовряд.</div>
					</a>
					
					<a href="#" class="subject-item" onclick="openLink('<?=$data['url']?>', 'subpage', '3'); return false;">
						<div class="subject-img for-img">
						<?=$subject_2?>
						</div>
						<div class="subject-text" >корисні посилання</div>
					</a>
					
					<a href="#" class="subject-item" onclick="openLink('<?=$data['url']?>', 'subpage', '4'); return false;">
						<div class="subject-img for-img" >
							<?=$subject_3?>
						</div>
						<div class="subject-text">Наші вакансії</div>
					</a>
				</div>
			</div>
		</div>
		<!-- NEWS END -->
		<?}?>
		<?if($data['url']=='brovary-ritualna-slujba.info-gkh.com.ua') {?>
		
		<div>
		<!--<center style="padding:5px;background:rgba(0,0,0,0.3);color:#fff;"><strong><h3>ГРАФІК РОБОТИ: З <span style="color:brown;">8:00</span> ДО <span style="color:brown;">17:00</span>. БЕЗ ВИХІДНИХ ТА СВЯТКОВИХ ДНІВ.</h3></strong></center>-->
		</div>
			<div style="width:80%;margin:0 auto;padding:30px;font-size:18px;font-weight:normal;color:#000;">
				<!--<img src="/tpl/images/brovari_ritualka/brovari_ritualka.png" width="100%" style="margin:0 auto;">-->
				<!--https://brovary-ritualna-slujba.info-gkh.com.ua/index/page/?id=609&script=0-->
				<div class="brovary-content">
					<div class="brovary-text">
						<p>Смерть людини - це велика трагедія та важка втрата для родичів і близьких друзів, до якої неможливо підготуватися.  Майже відразу після відходу людини родичам доводиться вирішувати безліч питань, пов'язаних з оформленням документів та похованням тіла, і у цей складний час дуже потрібна порада та допомога фахівців.</p>
						<p>Спеціалізоване комунальне підприємство "Броварська ритуальна служба" надає повний спектр послуг по організації та проведенню похорону, наші фахівці нададуть Вам професійну консультацію, та необхідну допомогу для огранізації поховання.</p>
						<p>Крім ритуальних послуг Броварська ритуальна служба у великому асортименті пропонує: домовини, хрести, вінки та кошики, текстиль (костюми, покривала, рушники, хустки, шарфи).</p>
					</div>
					<div class="brovary-buttons">
						<div class="btn btn1"><a href="/index/page/?id=600&script=0">вінки</a></div>
						<div class="btn btn2"><a href="/index/page/?id=603&script=0">труни</a></div>
						<div class="btn btn3"><a href="/index/page/?id=604&script=0">хрести</a></div>
						<div class="btn btn4"><a href="/index/page/?id=607&script=0">катафалки</a></div>
						<div class="btn btn5"><a href="/index/page/?id=613&script=0">пам’ятники</a></div>
					</div>
				</div>
				<!-- /.brovary-content -->

			</div>
		<?}?>
		
		<div id="subj-pages-block">
			<div id="subj-pages-content">
					
                    			    
                    	<h2 style="color: #676767;">Скарги та пропозиції</h2>
                    	
                    	<?
                    	
                    	$url = $data['url'];
			            $page_id = $db->getOne("SELECT `factory_id` FROM `sites_settings` WHERE `factory_url`='$url'");
			            $comments = $db->getAll("SELECT * FROM `sites_comments` WHERE `id_factory`='$page_id' ORDER BY ID DESC");
                    	
                    	
                    	foreach($comments as $one) {?>
							
							<div id="one-comment">	
                    	       <div id="name">
									<?=$one['email']?>
								</div>

								<div id="comment" >
									<?=$one['comment']?>
								</div>
							</div>	
							
						
					<?}?>
					
					<div id="open-form">
						<span><a onclick="$('#inline_answer').fadeIn(500);$('#open-form').fadeOut(500);">Написати скаргу або пропозицію</a></span>
					</div>
                    <div id="inline_answer" style="display:none;">
					<div id="error-comment"></div>
                    	
                    		
                    		<label for="subj">Ваше ім'я :</label>
                    		<input id="subj" name="subj" class="txt">
                    		<br>
                    		<label for="msg">Введіть повідомлення</label>
                    		<textarea id="msg" name="msg" class="txtarea"></textarea>
                    		
                    		
                    		
                    		<button  class="send"  onclick="comment('<?=$page_id?>');return false;">Відправити</button>
                    		
                    	
                    </div>
			</div>
		
		</div>
		
		<style>
		.bx-wrapper {
			margin-top:-1px;
		}
			#subj-pages-block {
				display:none; width:70%; margin:0 auto; background:rgba(255,255,255,0.6); padding-bottom:20px;
			}
			
			#name {color:brown;font-weight:bolder;}
			
			#one-comment {width:100%;padding:10px;margin-bottom:10px;background:#fff;}
			#comment {padding:10px;}
			#open-form a {color:blue;font-weight:bolder;cursor:pointer;padding:20px;}
			
			#open-form a:hover {color:red;font-weight:bolder;}
			#error-comment{font-weight:bolder;color:red;}
		</style>
		
		<!--<?if((isset($data['not_ajax'])) && ($data['not_ajax']=='1')) {?>-->
	<script>

	$(document).ready(function(){
		$('.news-slider').bxSlider({
			pager: false,
			controls: true,
			minSlides: 1,
			maxSlides: 4,
			slideWidth: 300,
			autoControls: true
		});

		$('.bunner-slider').bxSlider({
			auto: true,
			pause:11000,
			pager: true,
			controls: true
		});
	});

	
	</script>
    
	
	<!--<?}?>