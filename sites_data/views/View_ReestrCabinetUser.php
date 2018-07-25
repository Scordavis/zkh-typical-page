<style>
     i {font-family: fontawesome !important;}
</style>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

	  </script>
<?  //session_start();
error_reporting(E_ALL);
$sfera_1 = $sfera_2 = $sfera_3 = $sfera_4 = '0';
$db = new SafeMysql();
$db_1 = new SafeMysql_DB();


$id_factory=$_GET['id'];
$site_factory=$_GET['site'];//

$o_r=$data['o_r'];$password=$data['password'];
$fac_name = $db_1->getRow("SELECT `povne_naymenuvannya` FROM `table_1` WHERE `id`='$id_factory'");
$last_counters = $db_1->getRow("SELECT * FROM `flats_counters` WHERE `osob_rachunok`='$o_r' ORDER BY `id` DESC LIMIT 1");
$vlasnik_data = $db_1->getRow("SELECT `id`, `name`, `midname`, `surname`, `email`, `phone` FROM `form_3` WHERE `osob_rachunok`='$o_r' AND `flat_id`='".$data['flat']['id']."' AND `is_owner`='1'");
	$m = date('m');
	$oplata_this_month = $db_1->getRow("SELECT `oplata` FROM `Houses_money_data` WHERE `y`='".date('Y')."' AND `m`='$m' AND `flat_id`='".$data['flat']['id']."' AND `sfera`='1'");
	$m_prev = $m-1;
	$m_prev = '0'.$m_prev;
	//var_dump($m_prev);exit;
	$oplata_prev_month = $db_1->getRow("SELECT `oplata` FROM `Houses_money_data` WHERE `y`='".date('Y')."' AND `m`='$m_prev' AND `flat_id`='".$data['flat']['id']."' AND `sfera`='1'");

if($data['res']=='no') {?>
<style>
   
</style>
		<link rel="stylesheet" type="text/css" href="/tpl/css/request_form.css?b=1" />
<!--<div class="">-->
    	<div id="container" style="margin-top:5%;">
    	    <div style="display: table; margin-left:-0%;margin-top:0%;width: 100%;text-align:center;height:80px;"><div style="background:#010930;color:#fff;text-transform:uppercase;text-size:16px;display: table-cell;  vertical-align: middle;">Вхід в кабінет споживача</div></div>
<div style="margin-left:2%;width:100%;color:#000; padding-top:0%;font: 900 16px Ubuntu;">
<div style="margin-left:0%;width:100%;color:#000; padding-top:0%;font: 900 16px Ubuntu;">
 <form name="form33" action="/ReestrBudinkiv/CabinetUser/?id=<?=$id_factory?>&site=<?=$site_factory?>" method="POST" >
		<input type="hidden" name="avtorization" value="success">
	<??>	
		
		
		<span style="">
		   	
		<input type="text" name="o_r" placeholder="Особовий рахунок" value="<?=$o_r?>"size="4"><br/>
	<span style="">
		<input type="password" name="password" placeholder="Пароль" value="<?=$password?>"size="4"></span>
		</span>
		<!--<button class="button button--rayen button--border-medium button--text-thin button--size-l button--inverted" data-text="Send Message"><span>Send Message</span></button>-->
		<button class="button button--rayen button--border-thin button--text-thick button--text-upper button--size-s button--inverted" data-text="Увійти" style="text-align:center;"><span>Увійти</span></button>
		<!--<button class="button button--rayen button--border-thick button--text-thick" data-text="Send Message"><span>Send Message</span></button>-->
		<!--<input type="submit" name="submit" class="submit_btn " style=""  value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Увійти&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;">-->
		</form>
	</div>	
		<div style="margin-top:20%;width:100%;color:#000; padding-top:0%;font: 500 14px Ubuntu;text-align:center;">
<a href="/ReestrBudinkiv/addCabinet/?id=<?=$data['d']['id']?>&misto=<?=$data['d']['misto']?>&site=<?=$site_factory?>" >Зареєструватись
   <!--<input type="submit" class=" submit_btn" style=""  value="">form[name=\"form3\"]-->
</a>
<br/><br/>або<br/><br/>
<a href="#" onclick="$('#remind').slideToggle();$('#remind_up').css('display','none');">Нагадати пароль
   <!--<input type="submit" class=" submit_btn" style=""  value="">-->
<i class="fa-angle-down" style="color: #0090ff;text-size:12px;text-decoration: none;"></i></a>
</div>
<?if($data['ress']!==''){?>	<div style="text-align:center;margin-left:0%;margin-bottom:20%;"id="remind_up"><?=$data['ress']?></div><?}?>
<div style="margin-left:0%;margin-bottom:20%;display:none;" id="remind">	
	<form name="form3" action="/ReestrBudinkiv/CabinetUser/?id=<?=$id_factory?>&site=<?=$site_factory?>" method="POST"  >
		
		<input type="text" style="margin-top: 15px;" name="from" placeholder="Введіть e-mail  або  телефон"size="15">
		<button class="button button--rayen button--border-thin button--text-thick button--text-upper button--size-s button--inverted" data-text="Нагадати пароль" style="text-align:center;"><span>Нагадати пароль</span></button>
		<input type="hidden" name="remind" value="success">
		
	</form> 
</div>



</div>

	</div>

<?}
/////////////////////////////////////
?>
<style>

    

</style>

<?if($data['res']!=='no'){
$res=$data['res'];?>


<header class="header" style="margin: 0;
	padding: 0;">
			
		<ul class="navigation">
		    
    <li class="first"><a href="http://<?=$site_factory?>" title="Повернутись на сайт" class="home">&nbsp;
        <img src='http://database.fru-gkh.com.ua/images/fa-houseblack.jpg' style='width:22px;height: 16px;margin-top:0%;'>
        <!--<i class="fa fa-home  fa-inverse fa-lg" style="vertical-align:bottom;margin-top:50%;"></i>-->
    
       </a>
    
    </li>
   
   <li class="first"><a href="#" title="ВІДОМОСТІ">ВІДОМОСТІ 
   <!--<i class="fa-angle-down" style="color: #fff;text-size:12px;text-decoration: none;"></i>-->
	</a>
      <ul>
        
		<li><a href="/ReestrBudinkiv/viewFlat/?id=<?=$res['id']?>&id_factory=<?=$id_factory?>" target="_blank">Відомості для нарахування</a></li>
		<li><a onclick="show_modal('ReestrCabinetUserStaistica', '900px');" style="cursor:pointer;">Статистика платежів та споживання</a>	</li>

      </ul>
    </li>
    
    <li class="first"><a href="#" title="ДОКУМЕНТИ">ДОКУМЕНТИ</a>
		<ul>
        
			<li><a href="#" target="">Оформити договір</a></li>
			<li><a href="#" target="">Акт звіряння</a>	</li>

		</ul>
	</li>
    
    <li class="first"><a href="#" title="ПОСЛУГИ">ПОСЛУГИ</a>
		<ul>
        
			<li><a style="cursor:pointer;" onclick="show_modalBlock('CALL_Master', '400px');">Визвати майстра</a></li>
			<li><a style="cursor:pointer;" onclick="show_modalBlock('CHECK_Controller', '900px');">Перевірити контролера</a>	</li>
			<li><a style="cursor:pointer;" onclick="show_modalBlock('ZAMOVITI_Pererahunok', '900px');">Замовити перерахунок</a></li>
			<li><a style="cursor:pointer;" onclick="show_modalBlock('ZAMOVITI_Povirku_lichilnika', '900px');">Замовити повірку лічильника</a></li>
			<li><a style="cursor:pointer;" onclick="show_modalBlock('ZAMOVITI_Oplombuvannya_lichilnika', '900px');">Замовити опломбування лічильника</a></li>
			

		</ul>
	</li>
    
    <li class="" style="padding-left:5%;">
		<a  ><?=$fac_name['povne_naymenuvannya']?></a>
		 
    </li>
    <div class="clear"></div>
  </ul>	
			
</header>
<script>
    function setEqualHeight(columns)
{
var tallestcolumn = 0;
columns.each(
function()
{
currentHeight = $(this).height();
if(currentHeight > tallestcolumn)
{
tallestcolumn = currentHeight;
}
}
);
columns.height(tallestcolumn);
}
$(document).ready(function() {
setEqualHeight($(".equel-height > div"));
});
</script>
<?$data['borg']=30.05;?>
<style type="text/css">
  
  </style>  
  <div class="div_user">
      <span class="div_user_span0">
         Головна/кабінет споживача/відомості про нарахування
      </span>
  </div>
  <div class="div_user">
      <span class="div_user_span">
          Особовий рахунок № <?=$res['osob_rachunok']?>
      </span>
  </div>
  <!--<div class="div_user" style="background:#fff;border-top:#808497 3px solid ;border-bottom:#808497 3px solid ;">ddd</div>-->
 <div class="div_user" style="border-top:#808497 3px solid ;border-bottom:#808497 3px solid ;padding-top:15px;padding-bottom:15px;">
     
     <?
     $text_borg='Заборгованість (грн.)';
     if($data['borg']<=0)$text_borg='Переплата (грн.)';
     ?>
      <div class="layout equel-height" style="">
   <div class="colleft">
       	<!--<form name="form3" action="/ReestrBudinkiv/CabinetUser/?id=<?=$id_factory?>&site=<?=$site_factory?>" method="POST"  >-->
       	    <!--<a href="#" style="color: #0090ff;padding-left:70%;text-size:14px;text-decoration: underline;">Звідки?</a><br/>-->
		<span class="div_user_span1">
		<?=$text_borg?></span>
		<br/>
		<span class="borg"><?=abs($data['borg'])?></span>
		<!--<input type="text" style="margin-top: 15px;" name="from" placeholder="Введіть e-mail  або  телефон"size="15">-->
		
		<!--<br/>-->
		<span class="exclanation">
		    <a href="#" style="color: #0090ff;padding-left:0%;text-decoration: underline;">Внесіть фактичні показання</a> для розрахунку заборгованості за фактичним споживанням
		</span>
<div class="pay" >
		<!--<a href="#?borg=<?=$data['borg']?>">-->
		<div class="pay-button" ><a style="cursor:pointer;">СПЛАТИТИ</a></div>
		<!--<button class="button button--colleft button--rayen button--border-thin button--text-thick button--text-upper button--size-s button--inverted" data-text="Сплатити" style="text-align:center;z-index:0;"><span>Сплатити</span></button></a>--></div>
		<!--<input type="hidden" name="remind" value="success">-->
		
<!--</form> -->
</div>
<!--/////////////////////////////////////////////////////-->
<style>

/*.colright table tr:last-child{border-bottom:none;}*/
</style>

   <div class="colright" style="">
   
   

<table   >
	<tr>
		<td  valign="top" style="">Уповноважений власник (ПІБ)</td>	
		<td  style="" id="FIO" onkeyup='checkParams()'><?=$vlasnik_data['name']?> <?=$vlasnik_data['midname']?> <?=$vlasnik_data['surname']?></td>	
	</tr>
	<tr>
		<td  valign="top" style="">Адреса</td>	
		<td  style="">
			 <?=$data['d']['region']?>, Район <?=$data['house']['raion']?>, м. <?=$data['d']['misto']?>, 
			 <br/>Вулиця <?=$data['street']?>, Будинок <?=$data['house']['house_number']?>, Квартира <?=$data['flat']['number']?>, Індекс <?=$data['house']['indeks']?>.
				
		</td>	
	</tr>
		

	<tr>
		<td width="400" valign="top" style="">Телефон</td>	
		<td  width="400" align="right" style="" onclick="editi('phone')"><span id="phone"><?=$vlasnik_data['phone']?></span><span id="input-phone" style="display:none"><input type="text" name="phone" class="phone" value="<?=$vlasnik_data['phone']?>" ></span> <img style="float:right;height:20px;padding-top:5px;cursor:pointer;" onclick="editi('phone')" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAAM1BMVEX///89PT3Pz89ubm6Ghobn5+eenp63t7f09PRJSUlVVVXb29t6enpiYmKrq6uSkpLDw8OpVBA5AAACbklEQVR4nO2b3XKEIAxGBRQE//b9n7aCgojL2nE2SaeTXHW88Ds9ioUUmuZ/VCc70nwjhJhMTwdghS+7UGmQIpZ6kQAocZQz+PlSnAofQQlBiiDLfP8uSESAKGCecoQFbVBGAe3645g/BywJUUD4BnRthqBR8jMBTYmgMB7DScCGcIyKCZ6gFBDqZSPBCA5wFeCrT28jdP5bAdl1Bw3wXsBxHfpv052A8vrX604A9PyABbAAFvBRgALOvxUAPR+pCeioBbQsgAWwABbAAugFkK0FogDo9khNQE8tQFMLsCyABbAAFsAChAXOvxUA3RuurvvdLgC6L1sTYFgAC2ABLIAF0AsQ1AKg29JVAVMF7NtVE4DVl6/mYPXlWQALYAEs4E8LGIAB7gRAt6WrAuIeFei29FIRgNaX1xUBWH35GgCagPAO+u5H0XpBExAAZFuONjwBG4D/hU+b0vAE7AB+0GWb0gY8ARGgd/FFHOYxbZTD2DC5AzTDmuq0buM6BEtAAkgrkKxQdowmgEQwzoPBE5ABNN2iRi0TisbZtKuuqrd8rJ3TVwDc/CsAcn7j0/KHjZ0fACjzCwCNnn8GaPHzTwAU+eEf8m775lDkx0mxXRFI8o+zG24kyfcA8nUcmsA/QmTCZHDYl0cE54f0PgZm/yJgHpspAVYTFnoV+gnAf4FJ8neAgeb5JwA/ISXKDwDdmj8T5XuAfkLYI/4JgDR/mwBMdPkB4PaslLzUrLU25cVH43jOPkC9v4tZb60XFeq6VvpcT1YynROtj5vub/+LegLwLGl6i/zEwOUspw3ydaj4cEHXaOMe54Mgc7hI6weOfBOJTpP+4wAAAABJRU5ErkJggg=="></td>	
	</tr>
	<tr>
		<td width="400" valign="top" style="">E-mail</td>	
		<td  width="400" align="right" style="" onclick="editi('email')"><span id="email"><?=$vlasnik_data['email']?></span><span id="input-email" style="display:none"><input type="text" name="email" class="email" value="<?=$vlasnik_data['email']?>" ></span><img style="float:right;height:20px;padding-top:5px;cursor:pointer;" onclick="editi('email')" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAAM1BMVEX///89PT3Pz89ubm6Ghobn5+eenp63t7f09PRJSUlVVVXb29t6enpiYmKrq6uSkpLDw8OpVBA5AAACbklEQVR4nO2b3XKEIAxGBRQE//b9n7aCgojL2nE2SaeTXHW88Ds9ioUUmuZ/VCc70nwjhJhMTwdghS+7UGmQIpZ6kQAocZQz+PlSnAofQQlBiiDLfP8uSESAKGCecoQFbVBGAe3645g/BywJUUD4BnRthqBR8jMBTYmgMB7DScCGcIyKCZ6gFBDqZSPBCA5wFeCrT28jdP5bAdl1Bw3wXsBxHfpv052A8vrX604A9PyABbAAFvBRgALOvxUAPR+pCeioBbQsgAWwABbAAugFkK0FogDo9khNQE8tQFMLsCyABbAAFsAChAXOvxUA3RuurvvdLgC6L1sTYFgAC2ABLIAF0AsQ1AKg29JVAVMF7NtVE4DVl6/mYPXlWQALYAEs4E8LGIAB7gRAt6WrAuIeFei29FIRgNaX1xUBWH35GgCagPAO+u5H0XpBExAAZFuONjwBG4D/hU+b0vAE7AB+0GWb0gY8ARGgd/FFHOYxbZTD2DC5AzTDmuq0buM6BEtAAkgrkKxQdowmgEQwzoPBE5ABNN2iRi0TisbZtKuuqrd8rJ3TVwDc/CsAcn7j0/KHjZ0fACjzCwCNnn8GaPHzTwAU+eEf8m775lDkx0mxXRFI8o+zG24kyfcA8nUcmsA/QmTCZHDYl0cE54f0PgZm/yJgHpspAVYTFnoV+gnAf4FJ8neAgeb5JwA/ISXKDwDdmj8T5XuAfkLYI/4JgDR/mwBMdPkB4PaslLzUrLU25cVH43jOPkC9v4tZb60XFeq6VvpcT1YynROtj5vub/+LegLwLGl6i/zEwOUspw3ydaj4cEHXaOMe54Mgc7hI6weOfBOJTpP+4wAAAABJRU5ErkJggg=="></td>	
	</tr>
	<tr>
		<td width="30%" valign="top" style="">Відомості про пільги та субсидії</td>	
		<td width="70%" align="right" style="">
			<?=$data['flat']['pilga']?> 
		</td>	
	</tr>	
	
	
</table>

<!--<br/>-->


<table  style="width:95%;margin-left:5%;margin-top:15px;">
	
	
	<tr>
	<?if($data['d']['sfera_1']=='1'){
		$sfera_1 = '1';
	?>
	
		<th width="25%"  align="center" style="cursor:pointer;color:grey;background:rgba(209, 210, 213,0.5);padding:5px;border-radius:30px 50px 0px 0px;" 
		onclick="openTab('teplo')" id="th-teplo">Теплопостач.</th>	
	<?}?>	
	<?if($data['d']['sfera_2']!=='1' || $data['d']['sfera_14']=='1'){
		$sfera_2 = '1';
		?>
		<th width="25%" align="center"  style="cursor:pointer;color:#fff;background:#64cf75;padding:10px;border-radius:30px 50px 0px 0px;"  onclick="openTab('voda')" id="th-voda">Водопост./водовідв.</th>	
	<?}?>
	<?if($data['d']['sfera_4']=='1'){
			$sfera_4 = '1';
	?>
		<th width="25%" align="center"  style="cursor:pointer;color:#fff;background:#64cf75;padding:10px;border-radius:30px 50px 0px 0px;"  onclick="openTab('jitlo')" id="th-jitlo">Управ.житлом</th>	
	<?}?>	
	<?if($data['d']['sfera_3']=='1'){
		$sfera_3 = '1';
	?>
		<th width="25%" align="center"  style="cursor:pointer;color:#fff;background:#64cf75;padding:10px;border-radius:30px 50px 0px 0px;"  onclick="openTab('tpv')" id="th-tpv">ТПВ</th>	
	<?}?>		
	</tr>
</table>

<table id="teplo" style="background: rgba(209, 210, 213,0.5);font: 900 16px 'wf_SegoeUILight'">
	<tr style="border-bottom:1px solid #fff;">
		<td width="" valign="top" style="border:none;padding-left:15px;">
			<b>Діючий тариф</b>
		</td>	
		<td width="" align="right" style="border:none;">
		
		</td>	
	</tr>
	<tr style="border-bottom:1px solid #fff;">
		<td width="" valign="top" style="border:none;padding-left:15px;">
			<b>Сплачено в минулому місяці</b>
		</td>	
		<td width="" align="right" style="border:none;">
			<?=$oplata_prev_month['oplata']?>
		</td>	
	</tr>
	<tr style="border-bottom:1px solid #fff;">
		<td width="" valign="top" style="border:none;padding-left:15px;">
			<b>Сплачено в поточному місяці</b>
		</td>	
		<td width="" align="right" style="border:none;">
			<?=$oplata_this_month['oplata']?>
		</td>	
	</tr>
	<tr style="border-bottom:1px solid #fff;">
		<td width="" valign="top" style="border:none;padding-left:15px;" >
			<b>Останні показники лічильника</b>
		</td>	
		<td width="" align="right" style="border:none;">
			<span style="margin-right:20px;"><?=$last_counters['warm_oblic']?></span><?=$last_counters['d']?>-<?=$last_counters['m']?>-<?=$last_counters['y']?>
		</td>	
	</tr>
	<tr style="border-bottom:1px solid #fff;">
		<td width="" valign="top" style="cursor:pointer;border:none;padding-left:15px;color:#A0522D;" 
		onclick="show_modalBlock('CABINET_USER_input_counter_data_TEPLO', '30%');">
			<b>Внести показання лічильника</b>
		</td>	
		<td width="" align="right" style="border:none;">
		
		</td>	
	</tr>
	<tr style="border-bottom:1px solid #fff;">
		<td width="" valign="top" style="border:none;padding-left:15px;color:#A0522D;cursor:pointer;" >
			<b>Сформувати рахунок</b>
		</td>	
		<td width="" align="right" style="border:none;">
		
		</td>	
	</tr>
	<tr style="border-bottom:1px solid #fff;">
		<td width="" valign="top" style="border:none;padding-left:15px;" >
			БАЛАНС
		</td>	
		<td width="" align="right" style="border:none;">
		
		</td>	
	</tr>
	
	
	
	
	
	
</table>	
	



<table  id="voda" style="display:none;background:rgba(209, 210, 213,0.5);">
	
	<tr style="border-bottom:1px solid #fff;">
		<td  valign="top" style="border:none;padding-left:15px;">Діючий тариф</td>	
		<td  align="right" style="border:none;">
		
		</td>	
	</tr>
	
	<?if($data['flat']['water_warm_oblic']=='1'){?><tr style="border-bottom:1px solid #fff;">
		<td  valign="top"  style="border:none;padding-left:15px;">
		Останні показники лічильника (гаряче)</td>	 
		<td  align="right" style="border:none;font: 500 15px Ubuntu;">
			<span style="margin-right:20px;"></span>?>
		</td>	
	</tr><?}?>
	<?if($data['flat']['water_oblic']=='1'){?><tr style="border-bottom:1px solid #fff;">
		<td  valign="top"  style="border:none;padding-left:15px;">
		Останні показники лічильника (холодне)</td>	 
		<td  align="right" style="border:none;font: 500 15px Ubuntu;">
			<span style="margin-right:20px;"></span>
		</td>	
	</tr><?}?>
	
<?if($data['flat']['water_warm_oblic']=='1'){?>
	
<tr style="border-bottom:1px solid #fff;">
		<td   style="border:none;cursor:pointer;padding-left:15px;color:#A0522D;" onclick="show_modalBlock('CABINET_USER_input_counter_data_VODAwarm', '30%');">Внести показання лічильника (гаряче)
		
		</td>	
		<td  align="right" style="border:none;">
		
		</td>	
	</tr>
	
	<?}?>
	<?if($data['flat']['water_oblic']=='1'){?>
	
<tr style="border-bottom:1px solid #fff;">
		<td   style="padding-left:15px;border:none;cursor:pointer;color:#A0522D;" onclick="show_modalBlock('CABINET_USER_input_counter_data_VODAcold', '30%');">Внести показання лічильника (холодне)
		
		</td>	
		<td  align="right" style="border:none;">
		
		</td>	
	</tr>
	
	<?}?>
	
	
	
</table>	
<table id="jitlo" style="display:none;background: rgba(209, 210, 213,0.5); ">
	<tr style="border-bottom:1px solid #fff;">
		<td width="" valign="top" style="border:none;padding-left:15px;">
			Діючий тариф
		</td>	
		<td width="" align="right" style="border:none;">
		
		</td>	
	</tr>
	<tr style="border-bottom:1px solid #fff;">
		<td width="" valign="top" style="border:none;padding-left:15px;">
			Сплачено в поточному місяці
		</td>	
		<td width="" align="right" style="border:none;">
		
		</td>	
	</tr>
	
	<tr style="border-bottom:1px solid #fff;">
		<td width="" valign="top" style="border:none;padding-left:15px;" >
			БАЛАНС
		</td>	
		<td width="" align="right" style="border:none;">
		
		</td>	
	</tr>
	
	
	
	
	
	
</table>	
<table id="tpv" style="display:none;background: rgba(209, 210, 213,0.5); ">
	<tr style="border-bottom:1px solid #fff;">
		<td width="" valign="top" style="border:none;padding-left:15px;">
			Діючий тариф
		</td>	
		<td width="" align="right" style="border:none;">
		
		</td>	
	</tr>
	<tr style="border-bottom:1px solid #fff;">
		<td width="" valign="top" style="border:none;padding-left:15px;">
			Сплачено в поточному місяці
		</td>	
		<td width="" align="right" style="border:none;">
		
		</td>	
	</tr>
	
	<tr style="border-bottom:1px solid #fff;">
		<td width="" valign="top" style="border:none;padding-left:15px;" >
			БАЛАНС
		</td>	
		<td width="" align="right" style="border:none;">
		
		</td>	
	</tr>
	
	
	
	
	
	
</table>	
<table>
<!--Теплопостачання-->
<!--Останні показники лічильника	-->
<!--Діючий тариф	-->
<!--Внести показання лічильника	Відправити-->
<!--Друк квитанції	Сформувати-->
<!--Повірка лічильника	Замовити-->
<!--Опломбування лічильника	Замовити-->
<!--БАЛАНС:	--->
<!--453 грн.-->
<!---->


</table>
</div>
   
  </div>
  
 </div> 
 <style>
 
 </style>
 <div class="div_user" style="padding:10px;">
     
      <div class="layout">
   <div class="col1">
   <!--<div style="margin-left:0%;width:100%;color:#fff; padding-top:0%;font: 900 16px Ubuntu;">-->
 <span style="">
		   	
		Перегляньте статистику споживання комунальної послуги по роках або місяцях
		</span>
		<div></div>
		<a style="pointer:cursor;"  onclick="show_modal('ReestrCabinetUserStaistica', '900px');"><button style="font-size:18px;" class="button button--rayen button--custom  button--text-thick  button--size-s" data-text="Статистика споживання" style="text-align:center;"><span >Статистика споживання</span></button></a>
		
	<!--</div>-->
	<script>
		function show_modal(file, width) {
			$('#modalBlock').css({'display':'block', 'width':'30%','height':'70px', 'margin-left':'40%', 'margin-right':'40%','padding':'20px','margin-top':'200px'});
	$('#preloader').fadeIn('300');
	
	$.ajax({
		url: '/ReestrBudinkiv/ModalStatistics/',
		data: {
			rachunok:'<?=$res['osob_rachunok']?>',
			factory_id:'<?=$id_factory?>',
			inc_file:file,
			flat_id:'<?=$res['id']?>',
			sfera_1:'<?=$sfera_1?>',
			sfera_2:'<?=$sfera_2?>',
			sfera_3:'<?=$sfera_3?>',
			sfera_4:'<?=$sfera_4?>'
			
		},
		dataType: 'html',
		error: function(data) {	
			
			$('#modalBlock').hide('fast');		
			$('#info').css({'display':'block', 'width':'50%', 'height':'100px', 'margin':'0 auto', 'margin-top':'200px', 'padding':'20px'}).html('<p>Сталася помилка під час запиту!</p>');
			
		   },
		
		success: function(data) {
			$('#preloader').hide('fast');
			$('#modalBlock').css({'width':width,'height':'83vh','margin':'0 auto','padding':'20px','margin-top':'50px'});
			$('#result').html(data);
			
		},
		type: 'POST'
	});
	
	
	
		}
	
	
	</script>
	</div>
   <div class="col2">
   <span style="">
		   	
		Якщо Ви згодні з усією інформацією за особовим рахунком Ви можете сформувати акт звіряння
		</span>
		<div></div>
		<a href="#"><button style="font-size:18px;" class="button button--rayen button--custom  button--text-thick  button--size-s" data-text="Отримати акт звіряння" style="text-align:center;"><span>Отримати акт звіряння</span></button></a></div>
   <div class="col3"><span style="">
		   	
		Занесення показань приладів обліку споживання на поточну дату і отримання поточного рахунку
		</span>
		<div></div>
		<a href="#"><button style="font-size:18px;" class="button button--rayen button--custom  button--text-thick  button--size-s" data-text="Занесення показань" style="text-align:center;"><span>Занесення показань</span></button></a>
		</div>
  </div>
  
 </div> 
  
<!--  <div class="footer">-->
<!--    <h1 class="pageTitle">Dropdown navigation</h1>-->
<!--    <p>A beautifull but simple dropdown navigation. Realized with only CSS, no Javascript needed. Great fallback for users who disabled Javascript.</p>-->
<!--  </div>-->
  
<!--</div>	-->
					
	
					<div style="">
<??>

<!--<span style="margin-top:2%;margin-left:30%;padding-right:0%;"  class="font_houses"><img src="" style="height:10%;"class="example_beauty" /></span> -->

<? //$password='';$o_r='';

//if(isset($_POST['password']))//else $password='';
//  name="go" CabinetUser <=$data['id']>
?>
<style>

</style>

<?

?><style>
   
</style>
<!--  <section class="section_links">-->
<!--            		<div class="cont">-->
<!--            			<div class="links" >-->
            				
<!--<a href="/ReestrBudinkiv/addCabinet/?id=<?=$data['d']['id']?>&see&osob_rachunok=<?=$res['osob_rachunok']?>" target="_blank">Відомості з особового рахунку</a>-->

<!--</section>-->
<div style="margin-left:50px;width:80%;margin:0 auto;background:rgba(224, 255, 255, 0);color:#0051a3; padding:10px;">





<section>
		<div class="cont">
			<div class="main_title" style="">зворотній зв'язок</div>
		</div>
	</section>


	<section class="bng_section">
		<div class="cont">
			<div class="form">
			<form method="POST" name="offic" action="/ReestrBudinkiv/CabinetUser/?id=<?=$id_factory?>&site=<?=$site_factory?>">
            <!--http://fru-gkh.com.ua/request/official/?id=<=$sfera['id']?>&number_in_reestr=<=$sfera['number_in_reestr']?>-->
            <input type="hidden" name="osob_rachunok" value="<?=$data['o_r']?>" >
            <input type="hidden" name="to_email" value='<?=$res["email"]?>' >
            <input type="hidden" name="subj" value="Звернення громадянина" >
            
            	<div class="line_form line_formSmall">
						<!--<label>Надіслати запит на консультацію</label>-->

						<textarea name="msg" placeholder="Задати питання"></textarea>
						
					</div>

					<div class="submit">
					    <button type="submit" id="form-submit" name="feedback" class="submit_btn">Відправити</button>
					    </div>
				</form>
			</div>
		</div>
	</section>
<!--	Питання-->
<!--Відповідь-->
<?
$count_street = 0;//$finaldata[$count][11]='4363,6';

	?>
	</div>

</div>
<div id="modalBlock" style="display:none;">
<div  style="color:red;font-weight:bolder;position:absolute;right:0px;top:0px;border:1px solid red;border-radius:50%;line-height:15px;padding:7px;cursor:pointer;" onclick="closef()">X</div>


	<center><img src="/tpl/images/ajax-loader.gif" id="preloader" style="display:none;"></center>
	<div style="clear:both;"></div>
	


<div id="result"></div>
<div style="clear:both;"></div>
</div>

<div id="info"></div>
<!-- FOOTER -->

<!--<script src="/tpl/js/jquery.bxslider.min.js"></script>-->
		<footer class="footer" style="background:#010930;">
			<div class="container" style="padding:1%;">
				<div class="footer-top" style="display: block;">
					<div class="div_user" style="width:80%;padding:0px;">
     
      <div class="layout" style="margin-left:0%;background: #010930;min-height: 75px;">
   
  </div>
  
 </div> 
				</div>

				<div class="footer-bottom"  style="display: block;margin-top: 0px;">
					<div class="copyright" >
						© 1994 - 2017 Федерація роботодавців комунальної інфраструктури, енергетики та житлово-комунального господарства України. Всі права захищені.
					</div>
				</div>
			</div>	
		</footer>
		<!-- FOOTER END -->
<?}?>
<script>
function closef() {
	$('#result').html('');
	$('#modalBlock').hide(500);
}
$(document).ready(function() {
	
	$( ".pay" ).mouseover(function() {
		console.log('eeeee');
  $( ".pay-button" ).html( "<a  >ОБЕРІТЬ СПОСІБ ОПЛАТИ</a>" );
});
$( ".pay" ).mouseout(function() {
		console.log('eeeee');
  $( ".pay-button" ).html( "<a href=''>СПЛАТИТИ</a>" );
});

     $(window).load(function() {
                if ($(window).width() <= '320'){
           $('#polosa').css('font-size','1.2em')
           }
		      if (($(window).width() >= '320') && ($(window).width() >= '479')){
           $('#polosa').css('font-size','1.4em');
		   $('#fru').css('padding-top', '0.5em');
           }
		   if (($(window).width() >= '480') && ($(window).width() <= '768')){
           $('#polosa').css('font-size','2em');
           }
		    if (($(window).width() >= '769') && ($(window).width() <= '1024')){
           $('#polosa').css('font-size','2.4em');
           }
		   if ($(window).width() >= '1025'){
           $('#polosa').css('font-size','1.2em');
           }
		   

    });
	
	
});


function openTab(id) {
	$('th').css('background','#64cf75');
	$('th').css('color','#fff');
	$('#th-'+id).css('background','rgba(209, 210, 213,0.5)');
	$('#th-'+id).css('color','grey');
	
	$('#teplo').css('display','none');
	$('#voda').css('display','none');
	$('#jitlo').css('display','none');
	$('#tpv').css('display','none');
	$('#'+id).css('display','table');
}

function show_modalBlock(inc_file, window_width) {
	$('#modalBlock').css({'display':'block', 'width':'30%','height':'70px', 'margin-left':'40%', 'margin-right':'40%','padding':'20px','margin-top':'200px'});
	$('#preloader').fadeIn('300');
	
	$.ajax({
		url: '/ReestrBudinkiv/ModalBlock/',
		data: {
			rachunok:'<?=$res['osob_rachunok']?>',
			factory_id:'<?=$id_factory?>',
			inc_file:inc_file,
			flat_id:'<?=$res['id']?>',
			sfera_1:'<?=$sfera_1?>',
			sfera_2:'<?=$sfera_2?>',
			sfera_3:'<?=$sfera_3?>',
			sfera_4:'<?=$sfera_4?>'
			
		},
		dataType: 'html',
		error: function(data) {	
		response = jQuery.parseJSON(data);	
			$('#modalBlock').hide('fast');		
			//$('#preloader').hide('fast');
			//$('#modalBlock').css({'width':'50%','height':'70px', 'margin-left':'25%', 'margin-right':'25%','padding':'20px','margin-top':'200px'});
			$('#info').css({'display':'block', 'width':'50%', 'height':'100px', 'margin':'0 auto', 'margin-top':'200px', 'padding':'20px'}).html('<p>Сталася помилка під час запиту!</p>');
			//console.log(response);
		   },
		
		success: function(data) {
			response = jQuery.parseJSON(data);	
			$('#preloader').hide('fast');
			$('#modalBlock').css({'width':window_width,'height':'83vh','margin':'0 auto','padding':'20px','margin-top':'50px'});
			if(response.is_form == '1') {
				$('#close').css('display','block');
				$('#result').css('display','block').html('<p>'+response.form+'</p>');
			}
			if(response.is_text == '1') {
				$('#close').css('display','block');
				$('#result').css('display','block').html('<p>'+response.text+'</p>');
			}
			//$('#info').css('display','block').html('<p>'+response.status+'</p>');
			},
		type: 'POST'
	});
	
	
	
	
}

/*$(document).mouseup(function (e){ 
	var div1 = $('#modalBlock'); 	
	var div2 = $('#info'); 	
		if (!div1.is(e.target) && div1.has(e.target).length === 0) {
			div1.fadeOut(500); 
			
		}
		if (!div2.is(e.target) && div2.has(e.target).length === 0) {
			div2.fadeOut(500); 
			
			
		}
	});*/
function saveCounter(o_r, factory_id, posluga) {
	$('#preloader').fadeIn('300');
	$.ajax({
		url: '/ReestrBudinkiv/saveTeploCounter/',
		data: {
			rachunok:'<?=$res['osob_rachunok']?>',
			factory_id:'<?=$id_factory?>',
			data_of_counter:$('#input-teplo-counter').val(),
			flat_id:'<?=$data['flat']['id']?>',
			posluga:posluga
		},
		dataType: 'html',
		error: function(data) {	
		response = jQuery.parseJSON(data);
			$('#modalBlock').hide('fast');		
			//$('#preloader').hide('fast');
				
			//$('#modalBlock').css({'width':'50%','height':'70px', 'margin-left':'25%', 'margin-right':'25%','padding':'20px','margin-top':'200px'});
			$('#info').css({'display':'block', 'width':'50%', 'height':'100px', 'margin':'0 auto', 'margin-top':'200px', 'padding':'20px'}).html('<p>Сталася помилка під час запиту!</p>');
			
		   },
		
		success: function(data) {
			response = jQuery.parseJSON(data);	
				if(response.status == 'error') {
					$('#modalBlock').hide('fast');
					//$('#preloader').hide('fast');
					//$('#modalBlock-content').css('display', 'none');
					$('#info').css({'display':'block', 'width':'50%', 'height':'100px', 'margin':'0 auto', 'margin-top':'200px', 'padding':'20px'}).html('<p>'+response.text_error+'</p>');
				}else {
					$('#modalBlock').hide('fast');
					//$('#preloader').hide('fast');
					//$('#modalBlock').css({'width':'50%','height':'70px', 'margin-left':'25%', 'margin-right':'25%','padding':'20px','margin-top':'200px'});
					$('#info').css({'display':'block', 'width':'50%', 'height':'100px', 'margin':'0 auto', 'margin-top':'200px', 'padding':'20px'}).html('<p>'+response.text_succes+'</p>');
				}		
			},
		type: 'POST'
	});
}

function editi(id) {
	
		
		oldval = $('#'+id).text();
		$('#'+id).text('');
		$('#'+id).css('display', 'none');
		$('#input-'+id).css('display', 'inline');
			
		$(':text[name="'+id+'"]').focus(function(){
			oldVal = $(this).val();
			console.log(oldVal, 'oldVal');
		})
		.blur(function()
		{
			newVal = $(this).val();
			$(this).css('display', 'none');
			
			
			$.ajax({	
						type: "POST",
						url: '/ReestrBudinkiv/updatecellForm_3/',
						data: {cell:id, id:'<?=$vlasnik_data['id']?>', celldata:newVal},
						cache: false,		
							success: function(html) {									
								setTimeout(function() {$("#saved_message").fadeOut(500);}, 4000);
									$('#'+id).css('display', 'inline').text(html);
							}
						})
			
			
		})
		
		
		//$('#'+id).css('display', 'block').text('dddd');
		
	
}



	function changeView(view_hide, view_show) {
		$('#'+view_hide).hide();
		$('#'+view_show).fadeIn(500);
	}
  
  
</script>

<style>
#result {
	color:grey;text-align:center;
}
#info {
	display:none;color:red;text-align:center;
}
#modalBlock {
	position:fixed;background:#fff;border:3px solid rgba(95, 158, 160, 0.5);
	left:0px;top:0px;right:0px;bottom:0px;
	min-height:50px;height:auto;
	min-width:50px;z-index:100;
}
#info {
	position:fixed;background:#fff;border:3px solid rgba(95, 158, 160, 0.5);
	left:0px;top:0px;right:0px;bottom:0px;
	min-height:50px;height:auto;
	min-width:50px;z-index:100;
}
 /*.CabinetUsewr{background:url('/views/core/images/stripes-gradient1.jpg'); background-size: 100% 100%; background-repeat:no-repeat;font: 900 14px 'wf_SegoeUILight';color: #fff;}*/
    #container input{
        border: 0px;
        /*border-bottom: 1px solid black;*/
    }
    #container a{
        color: #0090ff;text-transform:uppercase;text-size:14px;text-decoration: underline;
        text-align:center;
        /*border-bottom: 1px solid black;*/
    }
    .button{
        float: left;
	display: block;
	/*min-width: 150px;*/
	/*min-width: 270px;*/
	
    }
   

.navigation {
  list-style: none;
  padding: 0;
  margin: 0;
  padding-left: 20%;
  background: #010930;
  border-top: solid 3px #fff;
  border-bottom: solid 3px #fff;
  /*
  box-shadow:  0px -2px 3px -1px rgba(0, 0, 0, 1);
  */
}

.navigation li {
  float: left;
}
.navigation .first > a{text-transform:uppercase;}

.navigation li:hover {
  background: #010930;
}

.navigation li:first-child {
  -webkit-border-radius: 5px 5px 0 0;
  border-radius: 5px 0 0 5px;
}

.navigation li a {
  display: inline-block;
  padding: 0 20px;
  text-decoration: none;
  line-height: 40px;
  color: #fff;
}

.navigation ul {
  display: none;
  position: absolute;z-index:10;
  list-style: none;
  margin-left: -3px;
  padding: 0;
  overflow: hidden;
}

.navigation ul li {
  float: none;
}

.navigation li:hover > ul {
  display: block;
  background: #010930;
  border: solid 3px #fff;
  border-top: 0;
  
  -webkit-border-radius: 0 0 8px 8px;
  border-radius: 0 0 8px 8px;
  
  -webkit-box-shadow:  0px 3px 3px 0px rgba(0, 0, 0, 0.25);
  box-shadow:  0px 3px 3px 0px rgba(0, 0, 0, 0.25);
}

.navigation li:hover > ul li:hover {
  -webkit-border-radius: 0 0 5px 5px;
  border-radius: 0 0 5px 5px;
}
.navigation li li {
  text-align: left;
}

.navigation li li a:hover {
  background: #000;
  text-decoration:underline;
  width:100%;
 
}

.navigation ul li:last-child a,
.navigation ul li:last-child a:hover {
  -webkit-border-radius: 0 0 5px 5px;
  border-radius: 0 0 5px 5px;
}
.first > a:not(.home)::after{

font-family: FontAwesome;
content:"\f107" ;}
.first > a:not(.home):hover::after{

font-family: FontAwesome;
content:"\f106" ;}

.home:hover::before{
/*
font-family: FontAwesome;
content:"\f015" ;
position: relative;

	top: -0px;
	left: 29px;font-size:19px;*/
}
/*<svg xmlns="http://www.w3.org/2000/svg" version="1.1">   <circle cx="100" cy="50" r="40" stroke="black" stroke-width="2" fill="red" />   <polyline points="20,20 40,25 60,40 80,120 120,140 200,180" style="fill:none;stroke:black;stroke-width:3" /></svg>*/
/*<svg aria-hidden="true" data-prefix="far" data-icon="home" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-home fa-w-18 fa-2x"><path fill="currentColor" d="M557.1 240.7L512 203.8V104c0-4.4-3.6-8-8-8h-32c-4.4 0-8 3.6-8 8v60.5L313.4 41.1c-14.7-12.1-36-12.1-50.7 0L18.9 240.7c-3.4 2.8-3.9 7.8-1.1 11.3l20.3 24.8c2.8 3.4 7.8 3.9 11.3 1.1l14.7-12V464c0 8.8 7.2 16 16 16h168c4.4 0 8-3.6 8-8V344h64v128c0 4.4 3.6 8 8 8h168c8.8 0 16-7.2 16-16V265.8l14.7 12c3.4 2.8 8.5 2.3 11.3-1.1l20.3-24.8c2.6-3.4 2.1-8.4-1.3-11.2zM464 432h-96V304c0-4.4-3.6-8-8-8H216c-4.4 0-8 3.6-8 8v128h-96V226.5l170.9-140c2.9-2.4 7.2-2.4 10.1 0l170.9 140V432z" class=""></path></svg>*/
    
   .layout { padding: 0;margin: 0; 
    overflow: hidden; /* Отменяем обтекание */
   }
   .colleft {padding: 0;
    background: rgba(209, 210, 213,0.5);  margin: 0;text-align:center;
    float: left;width: 33%;
    position: relative;
    
   }
   .colright { padding: 0;
    background: #fff; width: 65%; margin: 0;
    float: left; 
  
   }
   
   
     .div_user{
       max-width:1200px;margin:0 auto;background:#fff;color:#8d8f99; padding:0px;
   }
   
   .div_user_span{
       padding-left:34%;
       text-align:center;font-weight: 700;
  font-size: 26px; word-spacing: 2 ex; letter-spacing: 1.3ех ;
  line-height: 46px;
  color: #010930;}
  
  .div_user_span0{
       padding-left:0%;
       text-align:left;font-weight: 400;
  font-size: 14px;
  line-height: 26px;
  color:  #d1d2d5;;}
  .div_user_span1{
      
       padding-left:0%;
       font-weight: 700;
  font-size: 16px;
  line-height: 36px;
  height: 225px;
  color: #010930;}
  .button--colleft:hover  {
   font-weight:400;text-transform:  none;
   font-size:100%;
 line-height: 14px;

  vertical-align: top;
	/*position: relative;*/
  }
  .borg{
     color: #ce1616;text-align:center; font-size: 36px;padding:10%;
     <?if($data['borg']<=0){?>color: #0090ff;<?}?>
  }
  .exclanation{
      display:block;
      /*width:60%;*/
      text-align:left;
      padding-bottom:15%;margin: 15%; 
      border-bottom:2px #d1d2d5 solid;
      text-size:14px;
  }
  .exclanation::before{
      font-family: FontAwesome;
      content:'\f12a';
      color: #0090ff;
      font-size:50pt;
      position: absolute;

	top: 40%;
	left: 5%;
  }
.pay-button {
	background:#64cf75;
	padding:10px;padding-left:15px;pading-right:15px;text-align:center;color:#fff;
}
.pay-button  a{
	color:#fff;
}
.pay-button  a:hover{
	color:#fff;
}
    .colright table{
        border: solid 1px #fff;
        
  margin-left:5%;
  width:95%;background: #fff;
  margin-top:0%;
  border-collapse:collapse;
    }
    .colright table  tr td{ border: solid 1px #d1d2d5;
        vertical-align:middle;
    }
 
    .colright table tr td:first-child {
border-left: none;
border-left-style:none;
width:45%;
}
.colright table tr td:last-child {
border-right: none;
border-right-style:none;
width:55%;
padding-left:3%;
text-align:left;
}
.colright table tr td
 {border-top: none;
    
 }
.col1 { float: left;background: #fff; width: 33%; margin: 0; TEXT-align:center;}
   .col2 { float: left;background: #fff; width: 31.52%; margin: 0;TEXT-align:center;
   border-left: solid 1px #d1d2d5;
   border-right: solid 1px #d1d2d5;
   }
   .col3 { float: left;background: #fff; width: 33%;margin: 0; TEXT-align:center; }
     .button--custom{
         	border: 4px solid #64cf75;color:#000;
     }
    .col1 >span,.col2> span,.col3> span{ display: table-cell;height:80px;vertical-align:bottom;}
 .col4, .col5, .col6 { float: left;background: #010930; width: 33%; margin: 0; TEXT-align:left;
    color:#fff; 
 }
   .col5 {  width: 31.52%;
   }
   .col6 { width: 33%;}
   .col4 li,.col5 li,.col6 li{
       list-style-type:none;
       border-bottom:1px #fff solid;
       width:80%;
   }
   .col4 li:first-child,.col5 li:first-child,.col6 li:first-child{
      
       border-bottom:0;
       text-transform: uppercase;
   }
   .col4 li a,.col5 li a,.col6 li a{
       margin: 0;color:#fff;
   }
    input{font: 500 15px Ubuntu; background: #fff; }
form[name="form33"] { color:#fff;}
   .submit_btn{    display: inline-block;    vertical-align: top;    height: 50px;    border: none;    background: #fff;    font: 700 13px Ubuntu;    color: #0051a3;    text-align: center;    text-transform: uppercase;    padding: 0 30px;    cursor: pointer;}
   /*background:rgba(224, 255, 255, 0);color:#0051a3;border:0;font-size:100%;font: 900 16px Ubuntu;*/
    .section_links .cont .links a{
        background:#fff;border:#fff;color:#0051a3;
    }
	body {font: 900 16px 'wf_SegoeUILight'}
 </style>