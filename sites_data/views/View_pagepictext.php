<?
define('ALIGN_BY_WD', 0);
define('ALIGN_BY_HT', 1);

$text = explode('}', $data['content']['page_content']);
$imgs = explode('}', $data['content']['img_for_maket']);
$count_array = count($text);?> 



<div id="pictext">
<div id="page_title"><?=$data['content']['page_title']?></div>
<?
	$i = 0;
	while($i<$count_array) {
		
?>
<div class="table_row">
	<div id="pic">
	<?
	
	 
	 ?>
		<img src="http://info-gkh.com.ua/user_uploads/<?=$data['folder']?>/<?=$imgs[$i]?>" onclick="zoom('http://info-gkh.com.ua/user_uploads/<?=$data['folder']?>/<?=$imgs[$i]?>')">
	</div>
	
	<div id="text">
		<?=$text[$i]?>
	</div>
</div>
<div style="margin-top:15px;clear:both;"></div>
	
	<?$i++;}?>



</div>
<div id="zoomer" style="display:none;" onclick="$('#zoomer').fadeOut(500);">

	<div style="margin-top:50px;"><div class="zoom_img"></div></div>
</div>

<style>
#zoomer {
	position:fixed;left:0px;top:0px;width:100%;height:100%;border:1px solid red;background:rgba(0,0,0,0.8);
}

.zoom_img img {}

#page_title{	padding-left: 100px;	font: 700 30px "Ubuntu";	color: #606060;	text-transform: uppercase;	position: relative;	margin-top: 35px;	margin-bottom: 30px;}
	
	/*#page_title:after{	content: '';	background: #cd1000;	height: 2px;	width: 80px;	position: absolute;	left: 0;	top: 50%;	margin-top: -1px;}*/
	 
	#pictext {
		 display: table;
		 
		
		width:80%;
		margin:0 auto;
		padding-bottom:50px;
		
	}
	#pictext .table_row{
		margin-bottom:10px;
		border:1px solid grey;
		display: table-row;
	}
	#pictext #pic {display: table-cell;
		width:48%;
		min-height:50px;height:auto;
		
	}
	#pic img {
		width:90%;cursor:pointer;
	}
	
	#pictext #text {display: table-cell;
		vertical-align:top;
		width:48%;
		font-size:1.2em;padding:10px;background:#fff;
	}

	table {
		
width:100%;
text-align: left;
border-collapse: collapse;
border-spacing: 1px;
background: #fff;
color: #000;
border: 1px solid #ECE9E0;
border-radius: 0px;
font: 17px/20px 'SegoeUILight';
}

td {
	border: 1px solid rgba(70, 130, 180, 0.7);
background:rgba(141, 238, 238, 0.1);
padding: 10px;
}
th {background:grey;color:#fff;text-align:center;}
</style>

<script>
function zoom(path) {
	
	
	
		$('#zoomer').fadeIn(500);
		
		
		$('.zoom_img').css({'height':''+$(window).height()-100+'px'+'', 'max-width':'950px','margin--top':'50px', 'margin':'0 auto',
		'background':'url(\''+path+'\') no-repeat center', 'background-size':'contain'});
		//$('.zoom_img').html('<img src="'+path+'" style="max-width:'+img_width+';height:'+img_height+'margin:0 auto;object-fit: cover">');
	
}
    

</script>