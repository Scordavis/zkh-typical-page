<link href="/tpl/css/install.css" rel="stylesheet">
<div id="before_install">
	<div style="width:100%;margin:0 auto;font-family:Ubuntu;font-size:1.2em;height:90vh;padding-top:6%;">
		<div style="width:73%;padding:20px;text-align:left;color:grey;margin:0 auto;">
		Для активації та публікації сайта Вашого підприємства заповнить наведену нижче форму та натисніть кнопку "Замовити активацію сайту".<br/>
		Після активації Ви отримаєте доступ до адміністративної панелі де зможете розміщувати та редагувати інформацію, персоналізувати сайт, управляти його ресурсами.<br/>
		Отримати допомогу можна у служби технічної підтримки за телефоном або шляхом повідомлення (форма).
		</div>
		<div style="height:70px;"></div>
		<div style="width:95%;margin:0 auto;">
			<?//include Q_PATH.'/tpl/header.php';?>
		</div>

	</div>
	
	
	
	<div style="position:relative;margin:0 auto;width:56%;min-height:550px;">

	<form id="installform" method="POST"  action="/controlpanel/install/?id=<?=$_GET['id']?>" >
	<div id="form_input">
		Назва підприємтсва (для заголовка сайту)<br/>
			<input type="text" id="sitename" name="sitename" value="" class="Editbox" ><br/>
		Рік заснування підпрємства<br/>
			<input type="text" id="foundation" name="foundation" value="" class="Editbox"><br/>
	   
		Телефон<br/>
			<input type="phone" id="sitephone" name="sitephone" value="" class="Editbox"><br/>
		Телефон аварійної служби<br/>
			<input type="phone" id="sitephonerescue" name="sitephonerescue" value="" class="Editbox"><br/>
		Електронна адреса<br/>
			<input type="email" id="siteemail" name="siteemail" value="" class="Editbox"><br/>	   
		
				<span style="position:relative;">
					<a class="pad" onclick="showModal_sferes()">Послуги, що надаються</a>
					<span id="modal_sferes"  style="position:absolute;top:-310px;left:0px;width:400px;height:300px;border:4px outset rgba(220, 220, 220, 0.5);;background:#fff;display:none;overflow-y:scroll;padding:15px;">
						<b>Оберіть послуги, що надаються</b><br/>
						<input type="checkbox" name="sf[]" value="35.3|Постачання пари, гарячої води та кондиційованого повітря; Послуги з централізованого опалення і постачання гарячої води" ><span class="b">35.3</span>|Постачання пари, гарячої води та кондиційованого повітря; Послуги з централізованого опалення і постачання гарячої води<br/>   
						<input type="checkbox" name="sf[]" value="35.3|Постачання пари, гарячої води та кондиційованого повітря;  Виробництво теплової енергії"><span class="b">35.3</span>|Постачання пари, гарячої води та кондиційованого повітря;  Виробництво теплової енергії<br/>
						<input type="checkbox" name="sf[]" value="35.3|Постачання пари, гарячої води та кондиційованого повітря;  Транспортування теплової енергії" ><span class="b">35.3</span>|Постачання пари, гарячої води та кондиційованого повітря;  Транспортування теплової енергії<br/>
						<input type="checkbox" name="sf[]" value="35.3|Постачання пари, гарячої води та кондиційованого повітря;  Постачання теплової енергії" ><span class="b">35.3</span>|Постачання пари, гарячої води та кондиційованого повітря;  Постачання теплової енергії<br/>
						<input type="checkbox" name="sf[]" value="36.0|Забір, очищення та постачання води " ><span class="b">36.0</span>|Забір, очищення та постачання води<br/>
						<input type="checkbox" name="sf[]" value="37.0|Каналізація, відведення й очищення стічних вод"><span class="b">37.0</span>|Каналізація, відведення й очищення стічних вод<br/>
						<input type="checkbox" name="sf[]" value="38.0|Збирання, оброблення й видалення відходів; ТПВ" ><span class="b">38.0</span>|Збирання, оброблення й видалення відходів; ТПВ<br/>
						<input type="checkbox" name="sf[]" value="38.0|Збирання, оброблення й видалення відходів; РПВ"><span class="b">38.0</span>|Збирання, оброблення й видалення відходів; РПВ<br/>
						<input type="checkbox" name="sf[]" value="39.0|Інша діяльність щодо поводження з відходами; Обслуговування сміттєзвалищ"><span class="b">39.0</span>|Інша діяльність щодо поводження з відходами; Обслуговування сміттєзвалищ<br/>
						<input type="checkbox" name="sf[]" value="81.1|Комплексне обслуговування об`єктів" ><span class="b">81.1</span>|Комплексне обслуговування об`єктів<br/>
						<input type="checkbox" name="sf[]" value="49.3|Інший пасажирський наземний транспорт" ><span class="b">49.3</span>|Інший пасажирський наземний транспорт<br/>
						<input type="checkbox" name="sf[]" value="81.1|Комплексне обслуговування об`єктів (Обслуговування ліфтів)" ><span class="b">81.1</span>|Комплексне обслуговування об`єктів (Обслуговування ліфтів)<br/>				
						<input type="checkbox" name="sf[]" value="56.0|Діяльність із забезпечення стравами та напоями"><span class="b">56.0</span>|Діяльність із забезпечення стравами та напоями<br/>				
						<input type="checkbox" name="sf[]" value="96.03|Організування поховань і надання суміжних послуг"><span class="b">96.03</span>|Організування поховань і надання суміжних послуг<br/>				
						<input type="checkbox" name="sf[]" value="35.2|Виробництво газу; розподілення газоподібного палива через місцеві (локальні) трубопроводи"><span class="b">35.2</span>|Виробництво газу; розподілення газоподібного палива через місцеві (локальні) трубопроводи<br/>				
						<input type="checkbox" name="sf[]" value="35.1|Виробництво, передача та розподілення електроенергії"><span class="b">35.1</span>|Виробництво, передача та розподілення електроенергії<br/>				
						<input type="checkbox" name="sf[]" value="81.3|Надання ландшафтних послуг"><span class="b">81.3</span>|Надання ландшафтних послуг<br/>				
						<input type="checkbox" name="sf[]" value="35.1|Виробництво, передача та розподілення електроенергії (Зовнішнє освітлення)"><span class="b">35.1</span>|Виробництво, передача та розподілення електроенергії (Зовнішнє освітлення)<br/>				
						<input type="checkbox" name="sf[]" value="42.1|Будівництво доріг і залізниць"><span class="b">42.1</span>|Будівництво доріг і залізниць<br/>						
						<input type="checkbox" name="sf[]" value="37.0|Каналізація, відведення й очищення стічних вод (Очисні споруди)" ><span class="b">37.0</span>|Каналізація, відведення й очищення стічних вод (Очисні споруди)<br/>						
						<input type="checkbox" name="sf[]" value="81.2|Діяльність із прибирання (Санітарне очищення міст)"><span class="b">81.2</span>|Діяльність із прибирання (Санітарне очищення міст)<br/>				
						<input type="checkbox" name="sf[]" value="55.0|Тимчасове розміщування"><span class="b">55.0</span>|Тимчасове розміщування<br/>				
						<input type="checkbox" name="sf[]" value="96.01|Прання та хімічне чищення текстильних і хутряних виробів"><span class="b">96.01</span>|Прання та хімічне чищення текстильних і хутряних виробів<br/>				
						<input type="checkbox" name="sf[]" value="47.0|Роздрібна торгівля, крім торгівлі автотранспортними засобами та мотоциклами"><span class="b">47.0</span>|Роздрібна торгівля, крім торгівлі автотранспортними засобами та мотоциклами<br/>				
						<input type="checkbox" name="sf[]" id="BTI" value="91.0|Функціювання бібліотек, архівів, музеїв та інших закладів культури"><span class="b">91.0</span>|Функціювання бібліотек, архівів, музеїв та інших закладів культури<br/>						
						<input type="checkbox" name="sf[]" value="72.1|Дослідження й експериментальні розробки у сфері природничих і технічних наук"><span class="b">72.1</span>|Дослідження й експериментальні розробки у сфері природничих і технічних наук<br/>
						<input type="checkbox" name="sf[]" value="95.2|Ремонт побутових виробів і предметів особистого вжитку"><span class="b">95.2</span>|Ремонт побутових виробів і предметів особистого вжитку<br/>		
						<input type="checkbox" name="sf[]" value="Типографії">Типографії<br/>
						<input type="checkbox" name="sf[]" value="Підземні роботи">Підземні роботи<br/>
						<input type="checkbox" name="sf[]" value="81.2|Діяльність із прибирання(Благоустрій)"><span class="b">81.2</span>|Діяльність із прибирання(Благоустрій)<br/>
						<input type="checkbox" name="sf[]" value="42.2|Будівництво комунікацій"><span class="b">42.2</span>|Будівництво комунікацій<br/>
						<input type="checkbox" name="sf[]" value="42.3|Будівництво інших споруд"><span class="b">42.3</span>|Будівництво інших споруд<br/>
						<input type="checkbox" name="sf[]" value="43.2|Електромонтажні, водопровідні та інші будівельно-монтажні роботи"><span class="b">43.2</span>|Електромонтажні, водопровідні та інші будівельно-монтажні роботи<br/>
						<input type="checkbox" name="sf[]" value="45.2|Технічне обслуговування та ремонт автотранспортних засобів"><span class="b">45.2|</span>Технічне обслуговування та ремонт автотранспортних засобів<br/>
						<input type="checkbox" name="sf[]" value="50.3|Пасажирський річковий транспорт"><span class="b">50.3</span>|Пасажирський річковий транспорт<br/>
						<input type="checkbox" name="sf[]" value="52.1|Складське господарство"><span class="b">52.1|</span>Складське господарство<br/>
						<input type="checkbox" name="sf[]" value="52.21|Допоміжне обслуговування наземного транспорту"><span class="b">52.21</span>|Допоміжне обслуговування наземного транспорту<br/>
						<input type="checkbox" name="sf[]" value="53.0|Поштова та кур`єрська діяльність"><span class="b">53.0</span>|Поштова та кур`єрська діяльність<br/>
						<input type="checkbox" name="sf[]" value="90.0|Діяльність у сфері творчості, мистецтва та розваг"><span class="b">90.0</span>|Діяльність у сфері творчості, мистецтва та розваг<br/>
						<input type="checkbox" name="sf[]" value="93.2|Організування відпочинку та розваг"><span class="b">93.2</span>|Організування відпочинку та розваг<br/>
						<input type="checkbox" name="sf[]" value="93.11|Функціювання спортивних споруд"><span class="b">93.11</span>|Функціювання спортивних споруд<br/>
						<input type="checkbox" name="sf[]" value="96.09|Надання інших індивідуальних послуг, н.в.і.у."><span class="b">96.09</span>|Надання інших індивідуальних послуг, н.в.і.у.<br/>
						<input type="checkbox" name="sf[]" value="96.02|Надання послуг перукарнями та салонами краси"><span class="b">96.02</span>|Надання послуг перукарнями та салонами краси<br/>
						<input type="checkbox" name="sf[]" value="96.04|Діяльність із забезпечення фізичного комфорту"><span class="b">96.04</span>|Діяльність із забезпечення фізичного комфорту<br/>
					</span>
				</span>
				<br/>
				<input type="hidden" value="<?=$_GET['id']?>" id="factory_id" name="factory_id">
	</div>
	
	<div id="loader" style="visibility:hidden;"></div>
	<a onclick="$('#installform').submit()" class="Button1"  style="position:absolute;left:470px;top:526px;width:156px;height:35px;z-index:12;">Зберегти</a>
	</form>
	
</div>
<div style="height:10px;"></div>

</div>
<div id="after_install" style="display:none;"></div>

<script>

	$('#installform').on('submit', function(e){
		e.preventDefault();
		var $that = $(this),
		formData = new FormData($that.get(0)); 
		console.log('go');
		$.ajax({
			url: $that.attr('action'),
			type: $that.attr('method'),
			contentType: false, 
			processData: false, 
			data: formData,
			dataType: 'json',
			success: function(json){
				$('#before_install').fadeOut(400);
				$('#after_install').fadeIn(500);
				$('#after_install').html('<div>Ви успішно установили Ваш сайт!</div>');
				
			}
		})

</script>
