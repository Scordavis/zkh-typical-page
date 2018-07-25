function openLink (site_url, action, id) {
	//var pageurl = location.href;
//alert(custom);
$('.loader').css('display', 'block');
	
	$.ajax({	
		type: "POST",
		url: '/index/'+action+'/'+id,
		data: {site_url:site_url, action:action, id:id},
		cache: false,		
		success: function(html) {
			console.log(html);
			var pageurl = '/index/'+action+'/?id='+id;
			
			$('.loader').css('display', 'none');
				window.location = pageurl;
				//window.history.pushState({path:pageurl},'',pageurl);	
			
			$('#index_page').html('');
			$('#ajax_content').html('');
			$('#ajax_content').html(html);
	
		},
		error: function() {
			alert('error');
		}
	})
	
}

function showSubPage(page) {
	$('.loader').fadeIn(50);
	$.ajax({	
		type: "POST",
		url: '/'+site_url+'/'+action+'/'+id,
		data: {site_url:site_url, action:action, id:id},
		cache: false,		
		success: function(html) {
			console.log(html);
			$('#index_page').html('');
			$('#ajax_content').html(html);
			$('.loader').css('display', 'none');	
		},
		error: function() {
			alert('error');
		}
	})
}

function comment(factory_id) {
	console.log($('#subj').val(), $('#msg').val());
	if($('#subj').val()!=='' && $('#msg').val()!=='') {
		$('#error-comment').text('');
		user = $('#subj').val();
		com = $('#msg').val();
			$.ajax({	
				type: "POST",
				url: '/index/insert/',
				data: {factory_id:factory_id, subj:$('#subj').val(), msg:$('#msg').val()},
				cache: false,		
				success: function(html) {
					console.log(html);
					$('#subj').val('');
					$('#msg').val('');
					$('#one-comment').append('<div id="name">'+user+'</div><div id="comment">'+com+'</div>');
					$('#open-form').fadeIn(500);
					$('#inline_answer').fadeOut(500);
						
				},
				error: function() {
					alert('error');
				}
			})
	}else {
		$('#error-comment').text('Є пусті поля!');
		return false;
	}
}
	
function showZ(factory_id, phones) {
	$('.Wmodal-background').css('display', 'block');
	$('.Wmodal_container').css({'min-height':'400px', 'width':'100%'});
	$('.Wmodal-background').css({'z-index':'10000'});
	//$('#d-s').html('Аварійна служба:'+phones);
	console.log(phones);
	$.ajax({	
				type: "POST",
				url: '/ads/dispetcher_service/',
				data: {factory_id:factory_id},
				cache: false,		
				success: function(html) {
					//console.log(html);
					
					//<div id="d-s">Аварійна служба:'+phones+'</div>
					$('.Wmodal_container').html('<div id="close"><a onclick="closeModal()" style="color:#fff;">Вийти</a></div>'+html);
					$('#phones').html('Телефон: '+phones);
				},
				error: function() {
					alert('error');
				}
			})
	
}










