function FileManager(factory_id, user_folder) {
	$('#editing_content').html('');		
	$.ajax({	
		type: "POST",
		url: '/controlpanel/filemanager/',
		data: {factory_id:factory_id, user_folder:user_folder},
		cache: false,		
		success: function(html) {
			console.log('dsvdsvsdv');
			$('#editing_content').html(html);
		},
		error: function() {alert('1');}
	})
}
function startUpload() {
	
	document.getElementById("slider").target = "my_iframe"; //'my_iframe' is the name of the iframe
	document.getElementById("slider").submit();
	document.getElementById("loader").style.visibility = "visible";	
}

function stopUpload(html) {
	document.getElementById("loader").style.visibility = "hidden";	
	return true;   
}

function errorinfo(message) {
	document.getElementById("loader").style.visibility = "hidden";
	$('#queued-files').html('');
	$('#error').css('height', '50px');
	$('#error').css('display', 'block').html(message);
	return false;
}

function showMain(id) {
	$.ajax({	
		type: "POST",
		url: '/controlpanel/showMain/',
		data: {id:id},
		cache: false,		
		success: function(html) {	
			$('#editing_content').html(html);
		}
	})
}

//SLIDER 

function upbutton_show_hide(pic_count) {
	if(pic_count<4) {
		$('#upbutton').css('display', 'block');
	}
	if(pic_count>=4) {
		$('#upbutton').css('display', 'none');
		$('#delupbutton').css('display', 'block');
	}
}
function showSlider(id) {
$('#load_slider').css('visibility', 'visible');	
	$.ajax({	
		type: "POST",
		url: '/controlpanel/showslider/',
		data: {id:id},
		cache: false,		
		success: function(html) {
			$('#load_slider').css('visibility', 'hidden');				
			$('#editing_content').html(html);
			
		}
	})
}

function showmenuimgslider(id) {
	$('#menuimgslider'+id).fadeIn(500);
	$(document).mouseup(function (e){ 
		var div = $('#menuimgslider'+id); 
		if (!div.is(e.target) 
		    && div.has(e.target).length === 0) {
			div.fadeOut(500); 
		}
	});
}

function show_standartImgSlides(id) {
	$.ajax({	
			type: "POST",
			url: '/controlpanel/show_standartImgSlides/',
			data: {id:id},
			cache: false,		
			success: function(html) {
				$('.Wmodal-background').fadeIn(500);
				$('.Wmodal_container').html(html);
			}			
			
		})
	
	
}

function delImgSlider(name, id) {
	$('#confirm_delete_'+id).css('display', 'inline');
	$(document).on('click', '#yes', function(e){
		var pic_count = $('.im').length;
		if(pic_count<4) {
		$('#upbutton').css('display', 'block');
		$('#delupbutton').css('display', 'none');
	}
	if(pic_count>=4) {
		$('#upbutton').css('display', 'none');
		$('#delupbutton').css('display', 'block');
	}
		$('#confirm_delete_'+id).css('display', 'none');
		$('#load_delimg'+id).css('visibility', 'visible');
		$.ajax({	
			type: "POST",
			url: '/controlpanel/deletesliderimage/',
			data: {id:id, imgname:name},
			cache: false,		
			success: function(html) {	
			$('#load_delimg'+id).css('visibility', 'hidden');
				$('#image_'+id).hide();
			}
		})
	})
	$(document).on('click', '#no', function(e){
		$('#confirm_delete_'+id).css('display', 'none');
		return false;
	})
}


//PAGES
function showPages(id) {
	$.ajax({	
		type: "POST",
		url: '/controlpanel/showPages/',
		data: {id:id},
		cache: false,		
		success: function(html) {	
		
		}
	})
}

function deletePage(id, factory_id) {
	$('#confirm_delete_page_'+id).css('display', 'inline');
	//alert(document.location);
	$(document).on('click', '#page_yes', function(e){
		$('#item_menu'+id).fadeOut(500);
	
	$.ajax({	
		type: "POST",
		url: '/controlpanel/delete_page/',
		data: {id:id, factory_id:factory_id},
		cache: false,		
		success: function(html) {	
			$('#page_isset'+id).html('!');
			$('#item_menu'+id).fadeOut(500);
		}
	})
	})
	$(document).on('click', '#page_no', function(e){
		$('#confirm_delete_page_'+id).css('display', 'none');
		$('#item_menu'+id).fadeOut(500);
		return false;
	})
}

function addPage(id) {
	
}

function editPageFromMenu(menu_item, factory_id, page_id) {
	$('#item_menu'+menu_item).fadeOut(500);
	$('.Wmodal-background').css('display', 'block');
	$('#spinner').css('visibility','visible');
	$.ajax({	
		type: "POST",
		url: '/controlpanel/prepare_page_for_editor/',
		data: {menu_item:menu_item, factory_id:factory_id, page_id:page_id},
		cache: false,		
		success: function(html) {	
			$('.Wmodal_container').html(html);
		}
	})
}

function delImgFromPage(i, folder, img, item_id, factory_id) {
	$('#img_id'+i).css('opacity','0.7');
	console.log(i);
	//порядковый номер при выводе, папка, картинка, пункт_меню, айди_предприятия
	//$('#img_id'+i).fadeOut(500);
	$('#spinner'+i).css('visibility','visible');
	$.ajax({	
		type: "POST",
		url: '/controlpanel/delete_img_from_picmaket/',
		data: {menu_item:item_id, factory_id:factory_id, img_name:img, folder:folder, num_in_array:i},
		cache: false,		
		success: function(html) {
			console.log(i, 's', html);
			$.ajax({	
		type: "POST",
		url: '/controlpanel/prepare_page_for_editor/',
		data: {menu_item:item_id, factory_id:factory_id},
		cache: false,		
		success: function(html) {	
			$('.Wmodal_container').html(html);
		}
	})
			
		
			//$('.Wmodal_container').html(html);
		}
	})
	
	
	
}


function editpage_picturetext_addpunct() {
		
		
}
function changeImg_In_PagePicText(i, folder, img, item_id, factory_id) {
	
	$('#img_id'+i).css('opacity','0.7');
	$('#link_imgchanger'+i).fadeOut(500);
	$('#link_imgchanger'+i).fadeIn(500).html('<div  id="button-image_0"><span class="button-image" style=""><input name="page_imgtext" id="page_imgtext"  type="file" class="inputImage"  title="Натисніть, щоб обрати файл" ></span><span style="height:40px;float:left;padding-top:4px;">Завантажте зображення.</span><div style="clear:both;"></div><i class="icon-spinner icon-spin" id="spin" style="visibility:hidden;"></i></div>');
	
	$('#maket_').on('change', ':file', function () {
		if($('#page_imgtext').val()!=='') {
			var d = $('#page_imgtext').val().split('\\').pop();
			if(d!==''){
				$('#page_imgtext').html('<a id="real_smb"  > <i class="icon-spinner icon-spin"></i></a>');
			}
		}
	$("#real_smb").click($("#maket_").submit());		
	})
	
	$('#maket_').on('submit', function(e){
		$('#spin').css('visibility','visible');
		e.preventDefault();
		
		var $that = $(this),
		//menu_item:item_id, factory_id:factory_id, img_name:img, folder:folder, num_in_array:i
				formData = new FormData($that.get(0)); 
				formData.append('menu_item',item_id); 
				formData.append('factory_id',factory_id); 
				formData.append('img_name',img); 
				formData.append('folder',folder);
				formData.append('num_in_array',i);
		$.ajax({
			url: $that.attr('action'),
			type: $that.attr('method'),
			contentType: false, 
			processData: false, 
			data: formData, 
			dataType: 'html',
			success: function(html){
				if(html!=='error'){
					console.log(html);
				/*$('#spin').css('visibility','hidden');	
				//alert ('ok');
				$('#img_id'+i).fadeOut(500).html('');
					$('#img_id'+i).fadeIn(500).html(html);
					$('#img_id'+i).css('opacity','1');
					$('#link_imgchanger'+i).fadeOut(500);
					$('#link_imgchanger'+i).fadeIn(500).html('Завантажено!');*/
					$.ajax({	
						type: "POST",
						url: '/controlpanel/prepare_page_for_editor/',
						data: {menu_item:item_id, factory_id:factory_id},
						cache: false,		
						success: function(html) {	
							$('.Wmodal_container').html(html);
						}
					})
					
				}else {
					alert ('not_ok');
					return false;
				}
			}
		});
	});
	
}

function changeText_In_PagePicText(i, menu_item, factory_id, action) {
	console.log(i, menu_item, factory_id, action);
	$('.Wmodal_container').html('');
	
	$.ajax(
	{	
		type: "POST",
		url: '/controlpanel/prepare_text_for_editor/',
		data: {menu_item:menu_item, factory_id:factory_id,  num_in_array:i, action:action},
		cache: false,		
		success: function(html) 
		{
			$('.Wmodal_container').html(html);	
			
			
				
			//})
		}			
	})	
}

function saveEditedText_pagepictext(fac_id, i, menu_item, action) {
	console.log($('#editor').html());
	console.log(action);
	$.ajax(
	{	
		type: "POST",
		url: '/controlpanel/save_editedtext_pictext/',
		data: {menu_item:menu_item, factory_id:fac_id,  num_in_array:i, content:$('#editor').html(), action:action},
		cache: false,		
		success: function(html) 
		{
			console.log(html);
			$('.Wmodal_container').html('Збережено!');	
			/*setTimeout(function () {
				$('.Wmodal_container').fadeOut(500).html('');
				$.ajax({	
						type: "POST",
						url: '/controlpanel/prepare_page_for_editor/',
						data: {menu_item:menu_item, factory_id:fac_id},
						cache: false,		
						success: function(html) {
							$('.Wmodal_container').fadeIn(500).html('');							
							$('.Wmodal_container').html(html);
						}
					})				
			}, 3000);*/
			
			
			
				
			//})
		}
})
}
function deleteAll_From_PagePicText(i, folder, img, item_id, factory_id) {
	$.ajax({	
		type: "POST",
		url: '/controlpanel/delete_from_pagepictext/',
		data: {i:i, menu_item:item_id, factory_id:factory_id,folder:folder, img:img},
		cache: false,		
		success: function(html) {	
			$('.Wmodal_container').html(html);
		}
	})
}











//DEPRECATED /////////////////////
function main_page_save() {
	$.ajax({	
		type: "POST",
		url: '/controlpanel/savemainpage/',
		data: {id:$('#id').val(), content:$('#editor').html()},
		cache: false,		
		success: function(html) {	
		$('#alerts').html('Контент головної сторінки змінено та збережено.');
		//$('#editing_content').html($('#editor').val());
		}
	})
}
///////////////////////////////////////

//NEWS
function delnews (id) {
	$('#confirm_delete_'+id).css('display', 'inline');
	$(document).on('click', '#yes', function(e){
	$('#news_'+id).hide();
	$.ajax({	
		type: "POST",
		url: '/controlpanel/deletenews/',
		data: {id:id},
		cache: false,		
		success: function(html) {	
			
		}
	})
	})
	$(document).on('click', '#no', function(e){
		$('#confirm_delete_'+id).css('display', 'none');
		return false;
	})
}

function editnews(id, factory_id) {
	$('.Wmodal-background').fadeIn(500);
	$('#preload-layout').css('visibility','visible');
	
	$.ajax({	
		type: "POST",
		url: '/controlpanel/preparenews_for_editor/',
		data: {id:id, factory_id:factory_id},
		cache: false,		
		success: function(html) {	
			$('.Wmodal_container').html(html);
			console.log($('div #news_title').text());
			$('#preload-layout').css('visibility','hidden');
			$('div #news_title').focus(function(){
		console.log('blur');
			oldVal = $('div #news_title').text();
			}).blur(function(){
				console.log('blur');
				newVal = $('div #news_title').text();
				if(newVal != oldVal){
					$('#spinner_title').css('visibility','visible');
		
					console.log("Отправляем запрос");
					$.ajax({	
						type: "POST",
						url: '/controlpanel/upnewstitle/',
						data: {id:id, factory_id:factory_id, news_title:$('div #news_title').text()},
						cache: false,		
						success: function(html) {	
						console.log("Успешно", newVal);
							$('#spinner_title').css('visibility','hidden');
							
				
						}
					})
				}
			});//
			
			
			$('div textarea').focus(function(){
		
			oldVal_textarea = $('div textarea').val();
			console.log(oldVal_textarea);
			}).blur(function(){
				
				newVal_textarea = $('div textarea').val();
				console.log(newVal_textarea);
				if(newVal_textarea != oldVal_textarea){
					$('#spinner_anons').css('visibility','visible');
		
					console.log("Отправляем запрос");
					$.ajax({	
						type: "POST",
						url: '/controlpanel/upnewsanons/',
						data: {id:id, factory_id:factory_id, news_anons:$('div textarea').val()},
						cache: false,		
						success: function(html) {	
						console.log("Успешно", newVal_textarea);
							$('#spinner_anons').css('visibility','hidden');
							
				
						}
					})
				}
			});//
			
			$('#editor1').focus(function(){
		
			oldVal_editor1 = $('#editor1').text();
			console.log(oldVal_editor1);
			}).blur(function(){
				
				newVal_editor1 = $('#editor1').text();
				console.log(newVal_editor1);
				if(newVal_editor1 != oldVal_editor1){
					$('#spinner_news').css('visibility','visible');
		
					console.log("Отправляем запрос");
					$.ajax({	
						type: "POST",
						url: '/controlpanel/upnews/',
						data: {id:id, factory_id:factory_id, news:$('#editor1').text()},
						cache: false,		
						success: function(html) {	
						console.log("Успешно", newVal_editor1);
							$('#spinner_news').css('visibility','hidden');
							$('#saved').text('Збережено');
							
				
						}
					})
				}
			});//
			
			
		
			
		}
		
		
	})
	
	
		
	
	
	
	
}
function showNews(id) {
	$('#load_news').css('visibility', 'visible');
	$.ajax({	
		type: "POST",
		url: '/controlpanel/shownews/',
		data: {id:id},
		cache: false,		
		success: function(html) {	
			$('#load_news').css('visibility', 'hidden');
			$('#editing_content').html(html);
		}
	})
}

function showNewsForm() {
	$('.hero-unit').fadeIn('slow');
}

function saveNews(id) {
	console.log($('#news_title').text(), 'ddddd');
	$.ajax({	
		type: "POST",
		url: '/controlpanel/addnews/',
		data: {id:$('#id').val(), news_title:$('#news_title').text(), content:$('#editor').text()},
		cache: false,		
		success: function(html) {	
			console.log(html);
			$('.hero-unit').toggle('slow');
			$('#my_file').val('');
			$('#my_file_1').val('');
			$('#news_title').text('');
			$('#news_anons').text('');
			$('#editor').html('');
			//$('#news_form').val('');
			$('#new_news').after(html);
			
		}
	})
}


//SETTINGS  spinner_site_color   afterchange_color
function change_sitecolor(color, factory_id) {
	$('#afterchange_color').css('visibility', 'hidden');
	$('#spinner_site_color').css('visibility', 'visible');
	$.ajax({	
		type: "POST",
		url: '/controlpanel/change_sitecolor/',
		data: {factory_id:factory_id, color:color},
		cache: false,		
		success: function(html) {	
			$('#spinner_site_color').css('visibility', 'hidden');
			$('#afterchange_color').css('visibility', 'visible');
			$('#theme').css('background', '#'+color);
			
			
		}
	})
}
function showSiteInfo(id) {
	$('#load_settings').css('visibility', 'visible');
	$.ajax({	
		type: "POST",
		url: '/controlpanel/siteinfo/',
		data: {id:id},
		cache: false,		
		success: function(html) {	
			$('#load_settings').css('visibility', 'hidden');
			$('#editing_content').html(html);
		}
	})
}

function edit(cell) {
	var id=$('#id').val();
	$('#'+cell).attr('contenteditable','true');
	$('#'+cell).css("border", '2px solid #E6E6FA');
	
	$('#'+cell).focus(function(){
		oldVal = $('#'+cell).text();
	}).blur(function(){
		$('#'+cell).css("border", '0px solid grey');
		newVal = $('#'+cell).text();
		if(newVal != oldVal){
			$('#spinner_'+cell).css('visibility','visible');
		
			console.log("Отправляем запрос");
			$.ajax({	
				type: "POST",
				url: '/controlpanel/upinfodata/',
				data: {cell:cell, info:newVal, id:id},
				cache: false,		
				success: function(html) {	
				console.log("Успешно", newVal);
				$('#'+cell).css("border", '0px solid grey');
					$('#spinner_'+cell).css('visibility','hidden');
					$('#'+cell).attr('contenteditable','false');
		
				}
			})
		}
	});
}

//MENU
function MenuEditor(id) {
	$('#load_menu').css('visibility', 'visible');
	$.ajax({	
		type: "POST",
		url: '/controlpanel/menu/',
		data: {id:id},
		cache: false,		
		success: function(html) {	
			$('#load_menu').css('visibility', 'hidden');
			$('#editing_content').html(html);
		}
	})
}





function toggle_demoMenu(id) {
	
	$('#toggle_block'+id).toggle();
}

function delItemMenu (id) {
	console.log(id);
	$('#confirm_delete_'+id).css('display', 'inline');
	$(document).on('click', '#yes', function(e){
		$('#spinner'+id).css('visibility','visible');
	$('#item_menu'+id).fadeOut(500);
	$.ajax({	
		type: "POST",
		url: '/controlpanel/deleteitem_menu/',
		data: {id:id},
		cache: false,		
		success: function(html) {
			$('#spinner'+id).css('visibility','hidden');			
			$('#item'+id).hide();
			
		}
	})
	})
	$(document).on('click', '#no', function(e){
		$('#item_menu'+id).fadeOut(500);
		$('#confirm_delete_'+id).css('display', 'none');
		return false;
	})
}
function createCaretPlacer(atStart) { 
            return function(el) {
                el.focus();
                if (typeof window.getSelection != "undefined"
                        && typeof document.createRange != "undefined") {
                    var range = document.createRange();
                    range.selectNodeContents(el);
                    range.collapse(atStart);
                    var sel = window.getSelection();
                    sel.removeAllRanges();
                    sel.addRange(range);
                } else if (typeof document.body.createTextRange != "undefined") {
                    var textRange = document.body.createTextRange();
                    textRange.moveToElementText(el);
                    textRange.collapse(atStart);
                    textRange.select();
                }
            };
        }
 
        var placeCaretAtStart = createCaretPlacer(true);
        var placeCaretAtEnd = createCaretPlacer(false);


function editMenuItem(id) {
	//var id=$('#id').val();
	$('#editor'+id).attr('contenteditable','true');
	$('#editor'+id).css("border",'1px solid blue');
	$('#item_menu'+id).fadeOut(500);
	
	$('#editor'+id).focus(function(e){
		placeCaretAtEnd(e.currentTarget);
		oldVal = $('#editor'+id).text();
		
	}).blur(function(){
		$('#editor'+id).css("border", '0px solid grey');
		newVal = $('#editor'+id).text();
		if(newVal != oldVal){
			$('#spinner'+id).css('visibility','visible');
		
			console.log("Отправляем запрос");
			$.ajax({	
				type: "POST",
				url: '/controlpanel/upmenuitem/',
				data: {item:newVal, id:id},
				cache: false,		
				success: function(html) {	
				console.log("Успешно", newVal);
				$('#editor'+id).css("border", '0px solid grey');
					$('#spinner'+id).css('visibility','hidden');
					$('#editor'+id).attr('contenteditable','false');
		
				}
			})
		}
	});
}

function createMenuItem(parent_id, factory_id) {
	$('#creator'+parent_id).attr('contenteditable','true');
	$('#creator'+parent_id).css('border','1px solid blue').css('height', '15px');
	
	$('#creator'+parent_id).focus(function(){
		
		oldVal = $('#creator'+parent_id).text();
		
	}).blur(function(){
		$('#creator'+parent_id).css("border", '0px solid grey').css('display', 'none');
		newVal = $('#creator'+parent_id).text();
		if(newVal != oldVal){
			//$('#spinner_'+id).css('visibility','visible');
		
			console.log("Отправляем запрос");
			$.ajax({	
				type: "POST",
				url: '/controlpanel/createitem_menu/',
				data: {item:newVal, id:parent_id, factory_id:factory_id},
				cache: false,		
				success: function(html) {	
				console.log("Успешно", newVal);
				$('#creator'+parent_id).css("border", '0px solid grey');
				$('#creator'+parent_id).hide('fast');
					//$('#spinner_'+parent_id).css('visibility','hidden');
					$('#creator'+parent_id).attr('contenteditable','false');
					$('#new_item'+parent_id).after(html);
		
				}
			})
		}
})
}
//Wmodal_container
function createPageFromMenu(menu_item_id) {
	$('.Wmodal-background').fadeIn(500);
	$('#spinner').css('visibility','visible');
	var maket = 'picturetext';
		var factory_id = $('#factoryId').val();
		$.ajax({	
				type: "POST",
				url: '/controlpanel/loadpagecreator/',
				data: {menu_item:menu_item_id,factory_id:factory_id, },
				cache: false,		
				success: function(html) {	
				
					$('.Wmodal_container').html(html);
					$('#picturetext').on('click', function() {
						$('#select_maket').hide('fast');
						$('#spinner').css('visibility','hidden');
						$('.hero-unit').css('display', 'block');
						
					});
				
					$('#onlytext').on('click', function() {
						$('#select_maket').hide('fast');
						$('#spinner').css('visibility','hidden');
						$('.hero-unit_1').css('display', 'block');
					});
				
					$('#onlypicture').on('click', function() {
						$('#select_maket').hide('fast');
						$('#spinner').css('visibility','hidden');
						$('.hero-unit_2').css('display', 'block');
					});
		
				}
			})
	
	
	
}

function createSubjPage(i, factory_id) {
	$('.Wmodal-background').fadeIn(500);
	$('#spinner').css('visibility','visible');
	$.ajax({	
				type: "POST",
				url: '/controlpanel/loadsubpagecreator/',
				data: {i:i,factory_id:factory_id},
				cache: false,		
				success: function(html) {	
				
					$('.Wmodal_container').html(html);
					
				}
			})
}

function editPageSubj(page_id, factory_id) {
	$('.Wmodal-background').fadeIn(500);
	$('#spinner').css('visibility','visible');
		$.ajax({	
				type: "POST",
				url: '/controlpanel/preparesubpage_for_editor/',
				data: {page_id:page_id,factory_id:factory_id},
				cache: false,		
				success: function(html) {	
				
					$('.Wmodal_container').html(html);
					
				}
			})
	
}

function closeModal() {
	$('.Wmodal-background').fadeOut(500);
	
}




		
