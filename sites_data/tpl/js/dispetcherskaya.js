$('#streetInput').on("change  input click" ,function(e) {
	console.log(document.cookie );
		factory_id = $("#factory_id").val();
		
		console.log(factory_id);
			var data = {
			   "factory": factory_id,
			   "param":"street",
			   "searchvalue":$(this).val(),
			   "id": 0
			};
		$.ajax({
			url: "/dispetcherskaya/getaddr/",
			type: 'post',
			data: data,
			dataType: 'html',
			success: function(json) {			
					
				$(".emergency-service__form-list").fadeIn(200).html(json);				
			},
			error: function() {
				console.log ("Помилка завантаження довідника вулиць")
				
			}
		});
	})
	
function searchHouse(street_id, str) {
	console.log(str);
	$('#streetInput').val(str);
	$('#street_id').val(street_id);
	$(".emergency-service__form-list").fadeOut(200);

	$.ajax({
			url: "/dispetcherskaya/getHouses/",
			type: 'post',
			data:{id:street_id, "factory": factory_id,},
			dataType: 'html',
			success: function(json) {
				//console.log(json);
				$('#select-street').fadeIn(300).html(json);
			},
			error: function() {
				console.log("Помилка завантаження довідника будинків");
			}
		});
}

function searchFlat() {
	console.log($('#select-street').val());
	$.ajax({
			url: "/dispetcherskaya/getFlats/",
			type: 'post',
			data:{id:$('#select-street').val()},
			dataType: 'html',
			success: function(json) {
				//console.log(json);
				$('#select-flat').html(json);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				console.log("Помилка завантаження довідника квартир");
			}
		});
}
// маска для телефона
$("#user_phone").on("focus",function (){
    $(this).mask("8(099)999-99-99")
})


function addRequest(){
		
		street_id = $('#street_id').val();
		factory_id = $('#factory_id').val();
		house_id = $('#select-street').val();
		flat_id = $('#select-flat').val();
		user_phone = $('#user_phone').val();
		avarie = $('#avarie').val();
		if(street_id == '' || house_id=='' || flat_id=='' || user_phone=='' || avarie=='') {
			$('.red').text('Потрібно заповнити всі поля!');
			return false;
		}
		$('.emergency-service__form-btn').html('<img src="/avar_window/img/add_new_preloader.gif" id="preloader" width="30px">');
		$.ajax({
			url: '/dispetcherskaya/dispetcher_service_add_request/',
			type: 'POST',
			data: {street_id:street_id, factory_id:factory_id, house_id:house_id, flat_id:flat_id, user_phone:user_phone, avarie:avarie},
			dataType: 'html',
			success: function(html){
				$('.emergency-service__form-btn').html('Заявку подано!');
				$('.emergency-service__text').fadeIn(100);
				ident_last_request = html
				$('#client_ident').html(html);
				$('#form_status').fadeIn(100);
				console.log(html);	
					save_cookie(ident_last_request);
				//return false;
				//response = jQuery.parseJSON(html);
				//console.log(response.street);					
				//$that.replaceWith(json);
				
			}
		});
	};
	
	function save_cookie(ident_last_request) {
		$.ajax({
			url: '/dispetcherskaya/setCookie_ident_request/?request_ident='+ident_last_request,
			type: 'POST',
			data: {ident_last_request:ident_last_request},
			dataType: 'html',
			success: function(html){
					console.log(html);
			}
		});
	}
	function send_ident() {
		
		ident = $('#ident_requester').val();
		console.log(ident);
		if(ident=='') {
			return false;
			console.log('false');
		}
		$.ajax({
			url: '/dispetcherskaya/show_status_request/',
			type: 'POST',
			data: {ident:ident},
			dataType: 'html',
			success: function(html){
				response = jQuery.parseJSON(html);
				console.log(response);
				if(response.error=='') {
					$('#error').hide();
					$('#claim').fadeIn();
					$('#number').text(response.uniq);
					$('#date').text(response.date_time+' / '+response.time_time);
					$('#arrived').text(response.time_to_visit);
					$('#master').text(response.master);
					$('#master-phone').text(response.pidrozdil);
					getDialogsByIdent(ident);
					//console.log($('#dialog_part').data("last"));
				}else {
					$('#error').text(response.error);
				}
				
			}
		});
	}
	function getDialogsByIdent(request_ident) {
		$.ajax({
			url: '/dispetcherskaya/get_dialogs_by_ident/',
			type: 'POST',
			data: {request_ident:request_ident},
			dataType: 'html',
			success: function(html){
				$('.chat__window-wrapper').html('<div id="load-new-dialogs"></div>'+html);
				//console.log($('.chat__window-wrapper').html());
				console.log($('.chat__message').data("last"));
				if($('.chat__message').data("last")>0) {
					checkNewMessages();  
					setInterval('checkNewMessages()',5000); 
				}
				
				
			}
		});
	}
	
	function sendToDialogs(request_ident, factory_id) {
		
		console.log(request_ident);
		user_phrase = $('#chat__input').val();
		$('#chat__input').val('');
		if(user_phrase=='') {
			console.log('Введіть повідомлення!');
			return false;
		}
		$.ajax({
			url: '/dispetcherskaya/add_in_dialogs/',
			type: 'POST',
			data: {request_ident:request_ident,user_phrase:user_phrase, factory_id:factory_id},
			dataType: 'html',
			success: function(html){
				//response = jQuery.parseJSON(html);
				console.log(html);
				//if(response.status=='success') {
					$('#load-new-dialogs').after(html);
					checkNewMessages();  
					setInterval('checkNewMessages()',5000);
				//}else {
				//	$('#error_send_message').text('Помилка під час відправки помідомлення!');
				//}
				
			}
		});
		
	}
	
	function checkNewMessages() {
		last = $('.chat__message').data("last");
		request_ident = $('.chat__message').data("ident");
		$.ajax({
			type:"POST",
			url: '/dispetcherskaya/check_new_messages/',
			data:{last:last, request_ident:request_ident},
			success: function(html) {
				//console.log($('.chat__window-wrapper').html());
				console.log('checking new messages...')
			//7O_1532115169 Russians say завтра but завтра doesn't mean "tomorrow" it just means "not today."
				if(html) {
					$('#load-new-dialogs').after('<div id="temphide'+last+'">'+html+'</div>');
					last = $('.chat__message').data("last");
					$('.chat__message[data-last="'+last+'"]:gt(0)').remove();
					//jQuery("div.timeago").timeago();
					$('#temphide'+last).hide().fadeIn('slow');
				}
				
		   }
		});					
		
	}
	/*
	$(document).ready( function () {
	
		
	
		if($('.chat__message').data("last")!==undefined) {
			checkNewMessages();  
			setInterval('checkNewMessages()',5000); 
		}
	
	}
	)	*/