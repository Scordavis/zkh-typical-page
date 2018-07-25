<section>
<?
$text = $data['content']['page_content'];

?>
<div id="text_page" >
<div id="page_title"  data-text="<?=$data['content']['page_title']?>"><?=$data['content']['page_title']?></div>
<?$text = str_replace('/upload/image/', '//info-gkh.com.ua/upload/image/',$text);?>
<div id="content_page" ><?=$text?></div>



</div>
</section>
<script>
	$('#content_page span').css("font-family", '');
	$('#content_page p').css("font-family", '');
	$('#content_page div').css("font-family", '');
	for (i=0; i<$('#content_page a').length; i++) {
		b = $('#content_page a:eq('+i+')').attr("href");	
		$('#content_page a:eq('+i+')').attr("href", b.replace(/\s/g, ''));	
	}
	
</script>
<style>

#text_page {
	max-width:1200px;width: 100%;margin:0 auto;margin-bottom:50px;
	
	/*text-align:justify;*/
}

section #page_title{text-align: center;margin-top: 20px; padding-bottom:15px; font: 700 30px 'MuseoSansBlack'; color: #606060; text-transform: uppercase;	position: relative;}
	#page_title:before {
		content: "<?=$data['content']['page_title']?>";
		position: absolute;
		left: 0;
		right: 0;
		top: -17px;
		font-size: 60px;
		opacity: 0.08;
		color: #7cb0df;
	}
	/*
	section #page_title:after{	content: '';	background: #cd1000;	height: 2px;	width: 80px;	position: absolute;	left: 0;	top: 50%;	margin-top: -1px;}*/
	#content_page {max-width:100%;margin:0 auto;background:#fff;padding:25px;color:#000;}
	
	#content_page a:{color:blue;font-weight:bold;}
	#content_page a:hover{color:red;}
	
	/*#content_page table {font: 14px 'MuseoSansMedium'; max-width:90%;font-size:16px;margin:auto;border:0px solid grey;}
	#content_page table td {width:35%;}*/
	/*#content_page p span{font: 14px 'MuseoSansMedium'; font-size:16px;}*/
	
	/*#content_page p{font: 14px 'MuseoSansMedium'; font-size:16px;}*/
	.rosy {
		border:1px solid #DCDCDC;
		background:#FDF5E6;
	}
	
	table{max-width:1170px; width:100%; text-align: center; font: 14px/20px 'MuseoSansMedium';margin:0 auto; color: #716f6f; border: none;}
	th{text-align: center; border: none; padding-bottom: 46px; padding-top: 15px;}
	th > span{font-size:28px;}
	td{text-align:center; font: 14px/20px 'MuseoSansMedium';padding-left:20px; padding-right:20px; border: none; height: 50px; background-color: #f8f8f8;}
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
	/*----------------------БРОВАРЫ МАГАЗИН----------------------*/
h2 {
	margin-top: 0;
	margin-bottom: 50px;
	font-family: "MuseoSansBlack";
	font-size: 30px;
	position: relative;
	text-align: center;
}
h2:after {
	position: absolute;
	top: -9px;
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
.brovary-store {
	max-width: 1170px;
	margin: 0 auto;
	display: -webkit-flex;
	display: -moz-flex;
	display: -ms-flex;
	display: -o-flex;
	display: flex;
	justify-content: space-around;
	-webkit-flex-wrap: wrap;
	-moz-flex-wrap: wrap;
	-ms-flex-wrap: wrap;
	-o-flex-wrap: wrap;
	flex-wrap: wrap;
}
.brovary-store__item {
	width: 280px;
	height: 473px;
	margin-bottom: 17px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
	border-radius: 4px;
	background-color: #ffffff;
}
.brovary-store__item img {
	display: block;
	width: 165px;
	height: 290px;
	margin: 0 auto;
	margin-top: 30px;
	margin-bottom: 30px;
}
.brovary-store__p {
	text-align: center;
	margin-bottom: 20px;
	color: #010101;
	font-family: "MuseoSansBold";
	font-size: 16px;
}
.brovary-store__p span {
	color: #daa520;
	font-family: "MuseoSansBlack";
	font-size: 20px;
}
.brovary-store__order {
	color: #010101;
	font-family: "MuseoSansMedium";
}
.brovary-store__order a {
	color: #007eff;
	font-family: "MuseoSansBlack"; 
	font-size: 16px;
}
/*----------------------------------------------Пильгы-------------------------------------------*/
.pilgu p{
	text-align: left;
}
.pilgu td{
	border: 2px solid #BEBEBE;
}

	@media all and (max-width: 1080px) {
		.th__background:after{
			font-size: 40px;
		}
	}

	@media all and (max-width: 575px) {
		.th__background:after{
			content: "";
		}
		h2:after {
			content: '';
		}
		h2 {
			font-size: 20px;
		}
	}
</style>