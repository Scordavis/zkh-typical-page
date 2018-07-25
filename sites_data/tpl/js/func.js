function startUpload() {
	$('#errorinstall').html('').css('display', 'none');
	document.getElementById("imageForm").target = "my_iframe"; //'my_iframe' is the name of the iframe
	document.getElementById("imageForm").submit();
	document.getElementById("loader").style.visibility = "visible";
	
}
function stopUpload(success) {
	document.getElementById("loader").style.visibility = "hidden";
	
	$('#before_install').html('').css('display', 'none');
	$('#after_install').css('display','block').html('<div style="margin:0 auto;width:50%;height:auto;padding:50px;background:rgba(220, 220, 220, 1);border:0px solid grey;font-size:1.3em;text-align:center;margin-top:100px;">Ви успішно виконали перші налаштування вашого сайту! Посилання на нього ви отримаєте на ваш емайл! Тепер зі свого кабінету на сайті Федерації Ви зможете попасти в панель управління Вашим сайтом. </div>');
	return true;   
}

function error(error, errorblock) {
	document.getElementById("loader").style.visibility = "hidden";
	$('#queued-files').text('');
	$('#'+errorblock+'').css('display', 'block');
	$('#'+errorblock+'').html(error);
	return false;
}


	
function showModal_sferes() {
	$('#modal_sferes').css('display', "block");
	$(document).mouseup(function (e){ 
		var div = $("#modal_sferes"); 
		if (!div.is(e.target) 
		    && div.has(e.target).length === 0) {
			div.css('display', 'none'); 
		}
	});
}

