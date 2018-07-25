/***********************************
/  Контроллер controller_ads
/************************************/
//хранение переменной Таймера

var timerId;

$(document).ready(function() {
//=====================RDykukha  AJAX request  Create New Disp_service Client Request ==========================

	function form_validate()
	{
	  
           var mess = "";


           if(addrHolder.street == "" )
	     mess = mess + "Виберіть вулицю із списку\n";	
           if(addrHolder.house == "" )
	     mess = mess + "Виберіть будинок із списку\n";	
           if(addrHolder.flat == "" )
	     mess = mess + "Виберіть квартиру із списку\n";	


           if(addrHolder.street != $("#request-street").val())
	     mess = mess + "Значення поля вулиця потрібно вибирати із списку\n";	
           if(addrHolder.house != $("#request-house").val())
	     mess = mess + "Значення поля будинок потрібно вибирати із списку\n";	
           if(addrHolder.flat != $("#request-flat").val())
	     mess = mess + "Значення поля квартира потрібно вибирати із списку\n";	

           if(addrHolder.avar_type == 0)
	     mess = mess + "Потрібно вибрати тип пошкодження\n";	

           if(addrHolder.avar_type_name != $("#request-categ").val())
	     mess = mess + "Значення поля пошкодження потрібно вибирати із списку\n";	


	  /*	
           if( !$("#request-damage-categ").val())
	     mess = mess + "Виберіть категорію пошкодження  із списку\n";	
           if( !$("#request-damage-categ-types").val() || $("#request-damage-categ-types").val() ==0 )
	     mess = mess + "Виберіть тип  пошкодження  із списку\n";	
	  */	

           if( $("#request-tel").val().trim()== "")
	     mess = mess + "Введіть номер телефону для зв'язку \n";	


	   return mess;
	}



	//подключение плагина mask input
	$("div.Wmodal").on("focus",".tel",function (e){
    		$(this).mask("(999)999-99-99");
  	});


	//закрітие окна
	$("div.Wmodal").on("click","#close",function (e){
		//очистить и остановить таймер по которому проверяется статус новой заявки
    		clearInterval(timerId);
  	});

	//=========================================================================запись завки в БД
	$("div.Wmodal").on("click","#send-request",function (e){
		e.preventDefault();
		var data = $("#damage").serializeArray();





		if( (mess=form_validate()) != "" ) {
		
			alert(mess);
			return false;
		}

	$("#request-num").text("");
	$("#request-time").text("");
	$("#request-master-fio").text("");
	$("#request-master-tel").text("");
	$("#request-time-work").text("");

	$("#voting").hide();


	    //$(this).after("<span  class=\"ajax-loader\"></span>");
	 	

	    $.ajax({
			url: '/ads/dispetcher_service_add_request/',
			type: 'post',
			//data: 'product_id=' + product_id + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
			data: data,
			dataType: 'json',
			beforeSend: function() {
				//$('#cart > button').button('loading');
			},
			complete: function() {
				//$('#cart > button').button('reset');
			},
			success: function(json) {
			    //$("span.ajax-loader").remove();
			    if(json.status == "success"){

				addrHolder.z_id = json.zayavkaid;
					
				
				//alert("Ваша заявка збережена під номером "+json.zayavkaid);	
				alert("Вашу зявку прийнято.Диспетчер зв'яжеться з Вами протягом кількох хвилин. Перевірити стан виконання Вашої заявки Ви зможете у цьому вікні після дзвінка Диспетчера");



				//запустить таймер на просмотр статуса подтверждения завки
				//вариант-1
				
				timerId = setInterval(function() {  

			 	    var res = $.ajax({
					url: '/ads/getonezayavka/',
					type: 'get',
					data: {"zid" : addrHolder.z_id,"factory_id": $("#factory_id").val()},
					dataType: 'json',
					success: function(json) {							    
					  if(json) {
						clearInterval(timerId);
						
						
						//установить поля информации 

						$("#request-num").text(json.id);
						var timez = json.date_timef + "р. / " + json.time_time;
						var master = json.master;
						$("#request-time").text(timez);
						$("#request-master-fio").text(master.master);
						$("#request-master-tel").text(master.phone);
						$("#request-time-work").text(json.work_time);

						$("#voting").show();
					  }
					}
				   });
				   	

				}, 10000);
				

				//Варинт-2
				//Этот вариант лучше, в 1 - в результате того что вызовы асинхронны, приходит несколько  ответов с данными
				//не работает зависает 
				/*
				timerId = setTimeout(function run()  {  
				   console.log("check");	
			 	    $.ajax({
					url: '/ads/getonezayavka/',
					type: 'get',
					data: {"zid" : addrHolder.z_id,"factory_id": $("#factory_id").val()},
					dataType: 'json',
					success: function(json) {							    
					  console.debug(json); 	
					  if(json) {
						//clearInterval(timerId);
						//console.info("stop exit");
						
						console.log('stop');
						//установить поля информации 

						$("#request-num").text(json.id);
						var timez = json.date_timef + "р. / " + json.time_time;
						var master = json.master;
						$("#request-time").text(timez);
						$("#request-master-fio").text(master.master);
						$("#request-master-tel").text(master.phone);
						$("#request-time-work").text("TIME WORK");

						$("#voting").show();
					  } else {					      
				    	      setTimeout(run(),20000);
					   }
					}
				   })				   
				}, 10000);
				*/


		
				//обновить общий таблицу с заявками
				$(".request-disp-form .request-table ").load("/ads/dispetcher_service/ .request-table table", {"factory_id": 
$("#factory_id").val()});
			    } 

			    else
				if(json.message != "")
					alert("Помилка "+json.message);					
				else
					alert("Помилка збереження заявки");					

				


			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
			
	})


	//поиск по улице 
	$('#streetInput').on("change  input click" ,function(e) {

		factory_id = $("#factory_id").val();
		console.log(factory_id);
		//для тестирования,
		//factory_id = 1199;
		

		setUIElementSize(this);
			
		//if(this.value.length >= 2){
		//console.log(this.value);

			var data = {
			   "factory": factory_id,
			   "param":"street",
			   "searchvalue":$(this).val(),
			   "id": 0
			};

		//$(this).prev().append("<span  class=\"ajax-loader\"></span>");

		$.ajax({
			url: "/ads/getaddr/",
			type: 'post',
			data: data,
			dataType: 'html',
			success: function(json) {			
				//$("span.ajax-loader").remove();	
				$(".emergency-service__form-list").fadeIn(200).html(json);
				
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert ("Помилка завантаження довідника вулиць")
				//alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
			/*
			$(this).next().load("/index/getaddr/",data , 
				function(data,status){if(status=="error") alert ("Помилка завантаження довідника");}).show();
			*/
		
		//}
	})


	//поиск  по дому
	$('div.Wmodal').on("change keyup input click", "#request-house",function() {

		//factory_id = $("#factory_id").val();

		//для тестирования,
		factory_id = 1199;


		setUIElementSize($(this));
		
			//console.log("search house");

		//$(this).prev().append("<span  class=\"ajax-loader\"></span>");

	       if(addrHolder.street_id!=0){	

		var data = {
			   "factory": factory_id,
			   "param":"house",
			   "searchvalue":$(this).val(),
			   "id": addrHolder.street_id
			};


		$.ajax({
			url: "/ads/getaddr/",
			type: 'post',
			data: data,
			dataType: 'html',
			success: function(json) {
				//$("span.ajax-loader").remove();					
				$("#request-house").next().html(json);
				$("#request-house").next().show();
			},
			error: function(xhr, ajaxOptions, thrownError) {
				//alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				alert("Помилка завантаження довідника будинків");
			}
		});


		};
		
	})


	//поиск  по квартире
	$('div.Wmodal').on("change keyup input click", "#request-flat",function() {

		//factory_id = $("#factory_id").val();
		//для тестирования,
		factory_id = 1199;

		setUIElementSize($(this));
		
			//console.log(this.value);

		//$(this).prev().append("<span  class=\"ajax-loader\"></span>");

		 if(addrHolder.house_id!=0){	
			var data = {
			   "factory": factory_id,
			   "param":"flat",
			   "searchvalue":$(this).val(),
			   "id": addrHolder.house_id
			};


		$.ajax({
			url: "/ads/getaddr/",
			type: 'post',
			data: data,
			dataType: 'html',
			success: function(json) {	
				//$("span.ajax-loader").remove();				
				$("#request-flat").next().html(json);
				$("#request-flat").next().show();
			},
			error: function(xhr, ajaxOptions, thrownError) {
				//alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				alert("Помилка завантаження довідника квартир");
			}
		});
			/*
			$(this).next().load("/index/getaddr/", data , 
				function(data,status){ if(status=="error") alert("Помилка завантаження довідника");});
			$(this).next().show();
			*/
		};
		
	})

	
	//поиск по категории повреждения, потом сразу ВЫВОД  типов повреждения
	$('div.Wmodal').on("change keyup input click", "#request-categ",function() {

		setUIElementSize($(this));


		factory_id = $("#factory_id").val();

		//для тестирования 
		factory_id = 1199;


		$.ajax({
			url: "/ads/getavariyes/",
			type: 'get',
			data: {"search": $(this).val(),"factory"  : factory_id},
			dataType: 'html',
			success: function(json) {	
				$("#request-categ").next().html(json);
				$("#request-categ").next().show();
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert("Помилка завантаження довідника");
			}
		});
	})
	
	//подгрузка списка типов категорий по вібору категории
	/*
	$("div.Wmodal").on("change","#request-damage-categ",function(e){
		$(this).prev().append("<span  class=\"ajax-loader\"></span>");
		$("#request-damage-categ-types").load("/index/getavariyestypes/?category="+$("#request-damage-categ").val(),
		   function(data,status){ if(status=="error") alert("Помилка завантаження довідника");}
		);
		$(this).prev().find("span.ajax-loader").remove();
	})*/


	//голосование
	$("div.Wmodal").on("click",".rating input",function(){
		//alert($(this).val());
		$.post("/ads/saverating/",{"zid": addrHolder.z_id,"rating" : $(this).val()},function(){
		   alert("Спасибі");
		})
	})


	function setUIElementSize(el){
		$(el).next().css("width",$(el).width()+5);	
		$(el).next().css("top",$(el).css("top"));	
		$(el).next().css("left",$(el).css("left"));	
	}


	var rab=0;

	addrHolder = {
		"z_id": 0,

		"street" : "",
		"street_id" :0,
		"house"  : "",
		"house_id" :0,
		"flat"	 : "",
		"flat_id":0,

		"avar_categ": 0,
		"avar_categ_name": "",
		"avar_type": 0,
		"avar_type_name": ""
	};
	/*
		функция для поиска адреса по улице , дому, квартире 

		функция которая будет отрабатывать click на єлементе загруженном через ajax <li addr-part= "flat|house|dom" addr="">.........</li>
		если делать красиво то должно біло біть так  <li onclick= "test()">.........</li>
		по неизвесным причинам при событии onclick проц. test() не видна вілетает ошибка, может из-за оого что вся форма сама по себе
		получается через ajax


	*/




	$('div.Wmodal').on("mouseenter mouseleave","#request-street + .search_result1 ",function(){
		$("#request-street").blur(); 
	})	

	$('div.Wmodal').on("mouseenter mouseleave","#request-house + .search_result1 ",function(){
		$("#request-house").blur(); 
	})	

	$('div.Wmodal').on("mouseenter mouseleave","#request-flat + .search_result1 ",function(){
		$("#request-flat").blur(); 
	})	

	$('div.Wmodal').on("mouseenter mouseleave","#request-categ + .search_result1 ",function(){
		$("#request-categ").blur(); 
		//console.info('hover');
	})	


	$('div.Wmodal').on("click", "li[categ]",function(e) {
		
		if($(this).attr("categ")=="categ") {
			addrHolder.avar_categ = $(this).attr("categ-id");
			addrHolder.avar_categ_name = $(this).find(".label").text().trim(); 
			$("#request-categ").val(addrHolder.avar_categ_name);

			addrHolder.avar_type = "";
			addrHolder.avar_type_name = "";

			$("[name=request-damage-categ]").val(addrHolder.avar_categ);


			factory_id = $("#factory_id").val();

			//для тестирования 
			factory_id = 1199;					

			$(this).parent().load("/ads/getavariyes/?category="+addrHolder.avar_categ+"&factory="+factory_id,
				function(data,status){ if(status=="error") alert("Помилка завантаження довідника");
			});
			$(this).next().show();
		}
		
		if($(this).attr("categ")=="type") {
			addrHolder.avar_type = $(this).attr("categ-id");
			addrHolder.avar_type_name = $(this).find(".label").text().trim(); 
			$("#request-categ").val(addrHolder.avar_type_name);
			$(this).parent().hide();

			$("[name=request-damage-categ-types]").val(addrHolder.avar_type);

		}

	});


	$('div.Wmodal').on("click", "li[addr-part]",function(e) {

		if($(this).attr("addr-part")=="street") {

			addrHolder.street = $(this).find(".label").text().trim();
			addrHolder.street_id = $(this).attr("addr-id");

			addrHolder.house = "";
			addrHolder.flat = "";
			addrHolder.house_id = 0;
			addrHolder.flat_id = 0;

			$("#request-street").val(addrHolder.street);
			
			$("#request-house").prop('disabled', false);
			$("#request-flat").prop('disabled', true);

			$("#request-street").next().hide();
			$("#request-house").next().hide();
			$("#request-flat").next().hide();

			//$("#request-flat").

			$("#request-house").val("");
			$("#request-flat").val("");

		}

		if($(this).attr("addr-part")=="house") {
			addrHolder.house = $(this).find(".label").text().trim();
			addrHolder.house_id = $(this).attr("addr-id");

			addrHolder.flat = "";
			addrHolder.flat_id =0;

			$("#request-flat").prop('disabled', false);


			$("#request-house").val(addrHolder.house);
			$("#request-house").next().hide();
			$("#request-flat").next().hide();


			$("#request-flat").val("");

		}

		if($(this).attr("addr-part")=="flat") {
			addrHolder.flat = $(this).find(".label").text().trim();
			addrHolder.flat_id = $(this).attr("flat-id");

			$("#request-flat").val(addrHolder.flat);
			$("#request-flat").next().hide();

		}

	});


	

	//========================================================================================
})