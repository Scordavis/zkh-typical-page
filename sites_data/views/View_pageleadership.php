<section>
	<?$temp =  json_decode($data['content']['page_content']);
	  if($temp != null) $leadership_info = $temp; ?>
	<div id="text_page" >
		<div id="page_title" data-text="Телефонний довідник">Керівництво</div>
		<div id="content_page">
		<table align="center" border="1" cellpadding="0" cellspacing="0">
			<tbody>
				<tr>
					<td colspan="3" style="background:<?=$table_color?>;border:1px solid #fff;text-align:center;">
						<span style="font-size:18px;"><strong><?=$leadership_info->table_title?></strong></span><br>
					</td>
				</tr>
				<?if(isset($leadership_info))
				  foreach($leadership_info->list as $person) {?>
				<tr>
					<?if($person->photo != null) {?><td style="padding: 15px; border: 2px solid #fff;text-align: center; width: 320px">
						<img align="center" alt="" src="//info-gkh.com.ua/upload/leaders/<?=$person->photo?>" 
					style="width: 300px; display:block; max-width:96%; height:auto;"> <?}?>
					</td>
					<td style="border: 2px solid #fff;text-align: center; width: 70%"><br>
						<span style="font-size:18px;"><?=$person->position?><br><?=$person->name?></span><br><br>
						<span style="font-size:18px;">☎ <strong><?=$person->phone?></strong></span><br><br><br>
			  		</td>
				</tr>
				<?}?>
			</tbody>
		</table>
	</div>
</div>
</section>
<style>
#page_title:before {
	content: "Керівництво";
	position: absolute;
	left: 0;
	right: 0;
	top: -17px;
	font-size: 60px;
	opacity: 0.08;
	color: #7cb0df;
}

#page_title:before {
	content: "Керівництво";
	position: absolute;
	left: 0;
	right: 0;
	top: -17px;
	font-size: 60px;
	opacity: 0.08;
	color: #7cb0df;
}

table {
	max-width:1170px; 
	width:100%; 
	text-align: center; 
	font: 14px/20px 'MuseoSansMedium';
	margin:0 auto; 
	color: #716f6f; 
    border: none;
}

th{text-align: center; border: none; padding-bottom: 46px; padding-top: 15px;}

th > span{font-size:28px;}

td {
	text-align:center; 
	font: 14px/20px 'MuseoSansMedium';
	padding-left:20px; 
	padding-right:20px; 
	border: none; 
	height: 50px; 
	background-color: #f8f8f8;
}

.th__background {
		z-index:1000;
		position: relative;
}

.phone__icon {
		color: #7cb0df;
	}

#text_page {
	max-width:1200px;
	width: 100%;
	margin:0 auto;
	margin-bottom:50px;
}

section #page_title {
	text-align: center;
	margin-top: 20px; 
	padding-bottom:15px; 
	font: 700 30px 'MuseoSansBlack'; 
	color: #606060; 
	text-transform: uppercase;	
	position: relative;
}

#content_page { 
	max-width:100%;
	margin:0 auto;
	background:#fff;
	padding:25px;
	color:#000;
}
	
#content_page a {
	color:blue;
	font-weight:bold;
}

#content_page a:hover {
	color:red;
}
</style>