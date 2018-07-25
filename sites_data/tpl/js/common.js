$(document).mouseup(function (e){ // отслеживаем событие клика по веб-документу
        var block = $(".search_result1"); // определяем элемент, к которому будем применять условия (можем указывать ID, класс либо любой другой идентификатор элемента)
		var block2 = $(".search_result");
        if (!block.is(e.target) // проверка условия если клик был не по нашему блоку
            && block.has(e.target).length === 0) { // проверка условия если клик не по его дочерним элементам
            block.hide(); // если условия выполняются - скрываем наш элемент
        }
		 if (!block2.is(e.target) // проверка условия если клик был не по нашему блоку
            && block2.has(e.target).length === 0) { // проверка условия если клик не по его дочерним элементам
            block2.hide(); // если условия выполняются - скрываем наш элемент
        }
    });




$(document).ready(function() {

	

	//РІС‹РїР°РґР°СЋС‰РёР№ СЃРїРёСЃРѕРє
	$('.select p').click(function(){
		$(this).parents('.select').find('ul').slideToggle('slow');
		return false;
	});

	$('.select ul li').click(function(){
		var text = $(this).text();
		$(this).parents('.select').find('p').text(text);
		$(this).parents('ul').slideUp('slow');

		var dataPhone = $(this).attr("data-phone");

		$(this).parents(".select-wrap").find(".phone-number[data-phone]").css("display","none");
		$(this).parents(".select-wrap").find(".phone-number[data-phone='"+dataPhone+"']").css("display","block");
		return false;
	});

	$(function(){
	  $(document).click(function(event) {
	    if ($(event.target).closest(".select").length) return;
	    $(".select ul").slideUp("slow");
	    event.stopPropagation();
	  });
	});
	//РІС‹РїР°РґР°СЋС‰РёР№ СЃРїРёСЃРѕРє////////////////////////////////

	$('.mobile-menu').on('click' , function() {
		
		$('.header-nav').toggleClass('active');
	});




}); 