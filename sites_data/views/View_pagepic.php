<?
$imgs = array();
//$text = explode('}', $data['content']['page_content']);
$imgs = explode('}', $data['content']['img_for_maket']);
$count = count($imgs);//var_dump($count);
?> 
	<section>
		<div id="text_page">
			<div id="page_title">
				<?=$data['content']['page_title']?>
			</div>
			<?
				$i = 0;
				while($i<$count) 
				{
					
			?>
			<div id="img_block">
				<div id="post_img">
					<img src="http://info-gkh.com.ua/user_uploads/<?=$data['folder']?>/<?=$imgs[$i]?>" >
				</div>
			</div><?
				$i++;
				}?>
		</div>
	</section>
<style>
#text_page {
	
	max-width:900px;margin:0 auto;
	text-align:justify;padding-bottom:80px;
}
#img_block {padding:10px;
	width:100%;background:#fff;margin-bottom:15px;
}
#post_img {
	width:90%;margin:0 auto;
}
#post_img img {
	width:100%;margin:0 auto;
}


section #page_title{	padding-left: 100px;	font: 700 30px "Ubuntu";	color: #606060;	text-transform: uppercase;	position: relative;	margin-top: 25px;	margin-bottom: 30px;}
	
	/*section #page_title:after{	content: '';	background: #cd1000;	height: 2px;	width: 80px;	position: absolute;	left: 0;	top: 50%;	margin-top: -1px;}*/
</style>