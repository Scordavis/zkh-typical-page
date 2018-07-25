<?$text = str_replace('/upload/image/', '//info-gkh.com.ua/upload/image/',$data['item_news']['news_content']);?>
<section class="section_inner">
		<div class="cont" >
		
			<div class="page_title"><?=$data['item_news']['news_title']?></div>
			<div style="clear:both;"></div>
			<div class="block_text">
			
		
				
		
			
			
				
				<?=$text?>
				

			
			</div>
		</div>
	
</section>


<!-- End Основная часть -->

<div class="clear" style="height:80px;"></div>

<style>

.section_inner{}
.cont{max-width: 1000px; padding: 0 15px; margin: 0 auto; position: relative;font-size:1.2em;}
p span span span{font:14px/20px 'MuseoSansMedium';color:#000;}
span {font:14px/20px 'MuseoSansMedium';color:#000;}
span span {font:14px/20px 'MuseoSansMedium';color:#000;}
table span {font:14px/20px 'MuseoSansMedium';color:#000;}
ol {font:14px/20px 'MuseoSansMedium';color:#000;}
ul, li {font:14px/20px 'MuseoSansMedium';color:#000;}
tr td {font:14px/20px 'MuseoSansMedium';color:#000;}




section .page_title{	padding-left: 100px;	font: 700 30px "Ubuntu";	color: #606060;	text-transform: uppercase;	position: relative;	padding-top:20px;	margin-bottom: 30px;}
	
	section .page_title:after{	content: '';	background: #cd1000;	height: 2px;	width: 80px;	position: absolute;	left: 0;	top: 50%;	margin-top: -1px;}

</style>