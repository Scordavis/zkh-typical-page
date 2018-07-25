<section>
<div id="text_page" >
<div id="page_title"  data-text="<?=$data['content'][0]['page_title']?>"><?=$data['content'][0]['page_title']?></div>
<div id="content_page" >

<p align="center"><img alt="" src="//info-gkh.com.ua/upload/image/1_(4).jpg" style="width: 270px; height: 135px;" /></p>

<div class="accordion" align="center" border="1" cellpadding="0" cellspacing="0" style="width:100%;">
	
<?
    $acts = $data['content'];
	foreach($acts as $act) {
		$sfera = $act['sfera'];?>
		<div class="accord-header" style="cursor: pointer; margin-top: 15px;">
			<div style="height: 60px; font-size: 18px;">
				<br><strong><?=$sfera?></strong>
			</div>
		</div>
		<div class="accord-content">
		<table>
			<tbody>
<?			$acts_list = explode('@', $act['page_content']);
			foreach($acts_list as $act_item) {
				if($act_item != '' && $act_item != '\r\n') {
					$item = explode('#', $act_item); $tex = $item[0]; $href = $item[1]; ?>
					<tr>
						<td style="height:3px;">
							<p align="left"><span style="font-size:16px;"><a href="<?=$href?>" target="_blank"><?=$tex?></a></span></p>
						</td>
					</tr>
<? 				}	
			}?>
		</tbody>
	</table>
</div> 
<?}?>
<div style="clear:both;">&nbsp;</div>
</section>
<script>
	$('#content_page span').css("font-family", '');
	$('#content_page p').css("font-family", '');
	$('#content_page div').css("font-family", '');
	for (i=0; i<$('#content_page a').length; i++) {
		b = $('#content_page a:eq('+i+')').attr("href");	
		$('#content_page a:eq('+i+')').attr("href", b.replace(/\s/g, ''));	
	}

	$(document).ready(function() {
		$(".accordion .accord-content").css('display', 'none');
		$(".accordion .accord-header").click(function() {
		if($(this).next("div").is(":visible")) {
			$(this).next("div").slideUp("slow");
		} else {
		$(".accordion .accord-content").slideUp("slow");
			$(this).next("div").slideToggle("slow");
	}
});
});
	
</script>
<style>

#text_page {
	max-width:1200px;width: 100%;margin:0 auto;margin-bottom:50px;
}

/*tbody {
	background: <?=$table_color?>;
	padding: 20px;
}*/

table {
	padding: 20px;
	background: <?=$table_color?>;
	border-spacing: 15px;
}

.accord-header {
	background: <?=$table_color?>;
}

tr {
}

p span a {
	color: #505050;
}
p span a:hover {
	color: silver;
}


section #page_title{text-align: center;margin-top: 20px; padding-bottom:15px; font: 700 30px 'MuseoSansBlack'; color: #606060; text-transform: uppercase;	position: relative;}
	#page_title:before {
		content: "<?=$data['content'][0]['page_title']?>";
		position: absolute;
		left: 0;
		right: 0;
		top: -17px;
		font-size: 60px;
		opacity: 0.08;
		color: #7cb0df;
	}
	#content_page {max-width:100%;margin:0 auto;background:#fff;padding:25px;color:#000;}
	
	#content_page a:{color:blue;font-weight:bold;}
	#content_page a:hover{color:red;}
	
	.rosy {
		border:1px solid #DCDCDC;
		background:#FDF5E6;
	}
	
	table{max-width:1170px; width:100%; text-align: center; font: 14px/20px 'MuseoSansMedium';margin:0 auto; color: #716f6f; border: none;}
	th{text-align: center; border: none; padding-bottom: 46px; padding-top: 15px;}
	th > span{font-size:28px;}
	td{text-align:center; font: 14px/20px 'MuseoSansMedium';padding-left:20px; padding-right:20px; border: none; height: 50px; background-color: white;}
	.th__background {
		z-index:1000;
		position: relative;
	}
	.th__background:after {
		content: "ТЕЛЕФОННИЙ ДОВІДНИК";
		display: inline-block;
		font-size: 60px;
		z-index: 1;
		opacity: 0.08;
		position: absolute;
		right: 0;
		left: 0;
		top: 13px;
	}
	.phone__icon {
		color: #7cb0df;
	}
</style>