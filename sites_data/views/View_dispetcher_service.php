<?
session_start();

$avaries = array(
		"1|1"=>"Аварійний стан фундаментних стін",
		"1|2"=>"Аварійний стан продухів в цоколях будинків і вентиляційних труб (шахт)",
		"1|3"=>"Аварійний стан відмостків фундаментів,<br/> що загрожує просіданню і затопленню підвалів",
		"1|4"=>"Аварійний стан карнизів будинків",
		"1|5"=>"Аварійний стан козирків над входами в під'їзд будинку",
		"1|6"=>"Аварійний стан балконів житлових будинків",
		"1|7"=>"Аварійний стан сходових переходів",
		"1|8"=>"Аварійний стан стін в квартирах і місцях загального користування житлових будинків (тріщини)",
		"1|9"=>"Протікання покрівлі м'якої",
		"1|10"=>"Протікання покрівлі металевої",
		"1|11"=>"Обвалення або роз'єднання водостічної труби",
		"1|12"=>"Пошкодження покрівлі, що загрожує обваленням",
		"1|13"=>"Інше",
		
				"2|1"=>"Порив трубопроводу опалення в під'їзді будинку",
				"2|2"=>"Порив трубопроводу (лежаків) опалення в підвалах",
				"2|3"=>"Порив трубопроводу (лежаків) опалення в технічному поверсі (горищі)",
"2|4"=>"Пошкодження батарей і інших опалювальних приладів, що спричинили затоплення квартир",
				"2|5"=>"Порив труб систем опалення в квартирах, що спричинило затоплення житлових приміщень",
				"2|6"=>"Вихід з ладу регулювальних кранів, вентилів, засувок систем опалення в квартирі",
				"2|7"=>"Вихід з ладу кранів, вентилів, засувок тепломірних вузлів, в місцях загального користування (підвали, технічні поверхи)",
				"2|8"=>"Аварійна зупинка підкачувальних насосів, яка може призвести до розморожування системи опалення будинку",
				"2|9"=>"Порив систем опалення на внутрішньоквартальних лініях і магістралях",
				"2|10"=>"Відсутність люків на колодязях магістральних і внутрішньоквартальних трубопроводах",
				"2|11"=>"Загрозливі провисання підвішених трубопроводів великого діаметру систем опалення",
				"2|12"=>"Відсутність ізоляції на трубопроводі",
				"2|13"=>"Інше",
				
		"3|1"=>"Порив трубопроводу гарячого водопостачання в під'їзді будинку",
		"3|2"=>"Порив трубопроводу (лежаків) гарячого водопостачання в підвалах",
		"3|3"=>"Порив трубопроводу (лежаків) гарячого водопостачання на технічному поверсі (горищі)",
		"3|4"=>"Пошкодження приладів підігріву води, які можуть привести до значних негативних наслідків як мешканцям квартири, так і всього будинку",
		"3|5"=>"Порив труб систем гарячого водопостачання в квартирах, що спричинив затоплення житлових приміщень",
		"3|6"=>"Несправність регулювальних кранів, вентилів, засувок систем гарячого водопостачання в квартирі",
		"3|7"=>"Несправність кранів, вентилів, засувок тепломірних вузлів, в місцях загального користування (підвали, технічні поверхи), а також тепло-водомірних вузлів",
		"3|8"=>"Аварійна зупинка підкачувальних насосів, яка може призвести до розморожування системи гарячого водопостачання будинку",
		"3|9"=>"Порив систем гарячого водопостачання на внутрішньоквартальних лініях і магістралях",
		"3|10"=>"Загрозливе провисання підвішених трубопроводів великого діаметру систем гарячого водопостачання",
		"3|11"=>"Інше",	
		
				"4|1"=>"Порив трубопроводу холодного водопостачання в під'їзді будинку",
				"4|2"=>"Порив трубопроводу (лежаків) холодного водопостачання"
	);
	?>	

	   	

	    <script>
		if($("#request-categ"))	
			$("#request-categ").val("");
		if($("#request-street"))	
			$("#request-street").val("");
		if($("#request-house"))	
			$("#request-house").val("");
		if($("#request-flat"))	
			$("#request-flat").val("");
		if($("#request-tel"))	
			$("#request-tel").val("");

		//поле для хранения ИД последней заявки
		addrHolder.z_id = <?= isset($_SESSION['request_zid']) ? $_SESSION['request_zid'] : "0" ?>;

		//console.debug(addrHolder);

		//check_zayavka(1);

	    </script>	

<form name="damage-form" method="post" id="damage">			
    <div class="request-disp-form">	
	   	<div id="titlo"><span style="margin-right:40px;position:relative;left:-130px">Аварійно-диспетчерська служба</span> <span id="phones" style="color: rgb(195,195,195)"><?=$data['a_phone']?></span> </div>		     
		  <div style="padding:0 30px;">
		 	 <h3 style="color: #7cb0df">Для подання заявки заповніть форму та дочекайтесь дзвінка оператора</h3>

			<script>
				//console.debug(addrHolder);
			</script>


			 
	 		 <div class="main-container">			    							    		  
				<div class="adr-container">	
					<h4> 1. Адреса</h4>		
					<div class="right">
			    		<div class="street">
				    		<input type="text" id="request-street" name="request-street"    placeholder="Вулиця" autocomplete="off">
				    		<ul class="search_result1"></ul>				    
				    	</div>

				  		<div class="house">
				    		<input type="text" id="request-house" name="request-house"   placeholder="Будинок" disabled="disabled" autocomplete="off">
				    		<ul class="search_result1"></ul>
				  		</div>
				  		<div class="flat">
				    		<input type="text" id="request-flat" name="request-flat"   placeholder="Кв." disabled="disabled" autocomplete="off">
				    		<ul class="search_result1"></ul>
				  		</div>   
				  	</div>
				</div>	
			    

			    <div class="tel-container">				
					<h4> 2. Номер Вашого телефону</h4>
					<div class="right">
						<input  id="request-tel" type="text"  name="request-tel"  class="tel" placeholder="(0XX) xxx-xx-xx"> 		
					</div>	
			    </div>	

			    <div class="damage-container">				   
					<h4> 3. Оберіть вид пошкодження</h4>	
					<div class="right">
						<div style="width:300px">
							<input type="text"  id="request-categ">	
							<ul class="search_result1"></ul>			  										        
						</div>	
					</div>
			    </div>

				<h3><a href="#" id="send-request">Надіслати заявку</a></h3>

			</div> <!-- main-container -->

		    <div class="img-container">	
			    <img src="/tpl/images/dispetcher.png">			    
			</div>



			<hr style="clear:both">

			<?
				//при повтроном открітии формі проверяем ИД последней добавленной записи, и смотрим заполнені ли поля заявки
				//будем считать что звка является принятой если назначен ответственный заполнено поле pidrozdil
				//єтот вариант не катит, вібираются только последние 10 заявок, там может и не біть нужной
				/*
				$holderZ = array();
				if(isset($_SESSION["request_zid"])){
					$key = array_search($_SESSION["request_zid"], array_column($data['content'], 'id'));
					if($key!==false) {
						if(!empty($data['content'][$key]['pidrozdil']))
							$holderZ = $data['content'][$key];
					}
					
				}
				*/
				//print_r($data['content']);

				$holderz = null;
				if(!empty($data['holderz'])){					

					//будем считать что звка является принятой если назначен ответственный заполнено поле pidrozdil
					if(!empty($data['holderz']['pidrozdil'])){
						$holderz = $data['holderz'];
						$timez = $holderz['date_timef'] ."р. / " . $holderz['time_time'];
						$master = $data['holderz']['master'];


					}
				}

			?>

			<div class="holder-container">
			<h4 style="color: #7cb0df">Через декілька хвилин тут Ви зможете перевірити стан виконання Вашої заявки</h4>
			  	<div class="holder-request-info">
			  		<h4 style="color: #7cb0df;margin:0">Інформація про Вашу заявку</h4>
			  		<br>
			  		<div style="font-size: 17px" class="info">
						<div>
							Ваша заявка № <span id="request-num" style="width:40px;"><?= $holderz['id']?></span> Дата/час <span id="request-time" style="width:170px;"><?=$timez?> 
							</span>
						</div>
						<div>
							Майстер <span id="request-master-fio" style="width:200px;"><?= $master['master']?></span> тел. <span id="request-master-tel" style="width:100px;"><?= $master['phone']?></span>
						</div>
						<div>
							Орієнтовний час прибуття бригади <span id="request-time-work" style="width:100px;"><?= $holderz['work_time']?></span>
						</div>					
					</div>


					
					<div id="voting" style="overflow: hidden; <?= !isset($holderz) ? 'display: none' : ''?>">
						<div style="float:left;font-size: 17px;margin-right: 10px">
							Оцінити роботу бригади
						</div>
						<div class="rating">    					
    						<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5">5 stars</label>
    						<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4">4 stars</label>
    						<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3">3 stars</label>
    						<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2">2 stars</label>
    						<input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1">1 star</label>
						</div>
					</div>
					
			    </div>	

			    <div class="holder-chat">
			    	<textarea  rows="10" cols="30" name="holder-chat" id="holder-chat" placeholder="Chat"></textarea>
			    </div>

			    <div style="clear:both"></div>
		  </div>	

<h3 class="label-zayavki">Заявки в роботі</h3>

<div class="request-table">
 <table border="2" cellpadding="0" cellspacing="0">
		<tbody>
			<tr>
				<!--<th title="Ідентифікатор(номер) заявки в базі даних" style="color:red;cursor:pointer;">#</th>-->
				<th width="15%">Дата/Час</th>
				<!--<th>Диспетчер</th>-->
				<th width="40%">Адреса</th>
				
				<th width="25%">Категорія звернення</th>
				<!--<th>Вид пошкодження</th>-->
				<!--<th>Важливість</th>-->
				
				<th width="30%">Статус</th>
			</tr>

			
			<? 

			foreach ($data['content'] as $one) {
				

				foreach($avaries as $k=>$v) {
					if($one['type']==$k) {
						$type = $v;
						$c = explode('|', $one['type']);
						if($c[0]=='1') $category = 'Житловий фонд';
						if($c[0]=='2') $category = 'Централізоване теплопостачання';
						if($c[0]=='3') $category = 'Гаряче водопостачання';
						if($c[0]=='4') $category = 'Холодне водопостачання';
					}
				}
				
				if($one['status']=='4') {
					$one['status'] = 'Незакрита';
					$status_z = 4;
				}
				if($one['status']=='5') {
					$one['status'] = 'Неперевірена';
					$status_z = 5;
				}
				if($one['status']=='6') {
					$one['status'] = 'Закрита';
					$status_z = 6;
				}
				if($one['vajlivist']=='1') {
					$one['vajlivist'] = 'Низька';
				}
				if($one['vajlivist']=='2') {
					$one['vajlivist'] = 'Середня';
				}
				if($one['vajlivist']=='3') {
					$one['vajlivist'] = 'Висока';
				}
				if($one['vajlivist']=='4') {
					$one['vajlivist'] = 'ЧП';
				}
				
				

				
				?>
			<tr>
				<!--<td><a onclick="details('<?=$one['id']?>')"><?=$one['id']?></a></td>-->
				<td class="font-small"><?=$one['date_timef']?> / <?=$one['time_time']?></td>
				<!--<td><?=$one['dispetcher']?></td>-->
				
				<td><?=$one['street_zayavnika'].", ". $one['house_zayavnika']."; ".$one['flat_zayavnika']?></td>
				
				<td><?=$one['category_name']?></td>
				<!--<td><?=$type?></td>-->
				<!--<td><?=$one['vajlivist']?></td>-->
				
				<td ><?=$one['status']?>
					
				</td>
			</tr>
			<?}?>
	  
	  
	  
	  
	  
	  
	  
		</tbody>
	</table>
    </div>

    </div>	

		   	
          </div>

				<!-- ID КП-->
				<input type="hidden" id="factory_id" name="factory_id" value="<?= $data['factory_id']?>" >

				<input type="hidden"  name="request-damage-categ-types" value="" >
				<input type="hidden"  name="request-damage-categ" value="" >

			   

		        
    </div>
</form>


		
