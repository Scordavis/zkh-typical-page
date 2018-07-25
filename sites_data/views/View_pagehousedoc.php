<script src ="/tpl/js/jquery.autocomplete.min.js">
</script>
<link rel="stylesheet" type="text/css" href="/avar_window/css/main.css">
<section>
<div id="text_page">
<div id="page_title"  data-text="Список документів">Відомості по будинкам</div>
<div id="content_page">
<span>Тестовый текст</span><br>
<form action="" class="row mb-4 py-4"  style="backgorund: #f0f0f0">
			<!-- street -->
			<div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
				<div class="input-group">
					<input type="text" class="p-3 w-100" id="street_autocomplete" placeholder="Оберіть вулицю">
				</div>
			</div>
			<!-- house -->
			<div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
				<div class="input-group">
					<select class="p-3 custom-select" id="houseSelect">
					</select>
				</div>
			</div>
			<!-- submit -->
			<div class="col-lg-3 col-md-6 col-sm-6 col-10">
				<button type="button" onclick="getDocs()" class="w-100 py-3 emergency-service__form-btn emergency-service__form-btn--red">Показати документи</button>
			</div>
</form>
		<div id="docslist" style="width: 100%; height: 300px; background: #ecf2f9;">
		<!--<div class="container py-4">
			<div class="row h-150 pt-2">
				<div class="col-6 mb-3">
					<div class="py-2">
						<div class="row no-gutters">
							<p class="col-2 px-2 text-left">1</p>
							<div class="col">
								<p class="mb-0 mb-1">Назва документу</p>
								<a href="" class="">Скачати</a>
						</div>
					</div>
					<div class="py-2">
						<div class="row no-gutters">
							<p class="col-2 px-2 text-left">2</p>
							<div class="col">
								<p class="mb-0 mb-1">Назва документу</p>
								<a href="" class="">Скачати</a>
						</div>
					</div>
					<div class="py-2">
						<div class="row no-gutters">
							<p class="col-2 px-2 text-left">3</p>
							<div class="col">
								<p class="mb-0 mb-1">Назва документу</p>
								<a href="" class="">Скачати</a>
						</div>
					</div>
				</div>
			</div>
		</div>-->
</div>
</section>
<style>

#text_page {
	max-width:1200px;width: 100%;margin:0 auto;margin-bottom:50px;
}

p span a {
	color: #505050;
}
p span a:hover {
	color: silver;
}


section #page_title{text-align: center;margin-top: 20px; padding-bottom:15px; font: 700 30px 'MuseoSansBlack'; color: #606060; text-transform: uppercase;	position: relative;}
	#page_title:before {
		content: "Відомості по будинкам";
		position: absolute;
		left: 0;
		right: 0;
		top: -17px;
		font-size: 60px;
		opacity: 0.08;
		color: #7cb0df;
	}
	#content_page {max-width:100%;margin:0 auto;background:#fff;padding:25px;color:#000;}
	
	#content_page a:{color:blue;font-weight:bold;}
	#content_page a:hover{color:red;}
	
	.rosy {
		border:1px solid #DCDCDC;
		background:#FDF5E6;
	}
	
	table{max-width:1170px; width:100%; text-align: center; font: 14px/20px 'MuseoSansMedium';margin:0 auto; color: #716f6f; border: none;}
	th{text-align: center; border: none; padding-bottom: 46px; padding-top: 15px;}
	th > span{font-size:28px;}
	td{text-align:center; font: 14px/20px 'MuseoSansMedium';padding-left:20px; padding-right:20px; border: none; height: 50px; background-color: white;}
	.th__background {
		z-index:1000;
		position: relative;
	}
	.th__background:after {
		content: "ТЕЛЕФОННИЙ ДОВІДНИК";
		display: inline-block;
		font-size: 60px;
		z-index: 1;
		opacity: 0.08;
		position: absolute;
		right: 0;
		left: 0;
		top: 13px;
	}
	.phone__icon {
		color: #7cb0df;
	}
	.autocomplete-suggestions { border: 1px solid #999; background: #FFF; overflow: auto; }
	.autocomplete-suggestion { padding: 2px 5px; white-space: nowrap; overflow: hidden; }
	.autocomplete-selected { background: #F0F0F0; }
	.autocomplete-suggestions strong { font-weight: normal; color: #3399FF; }
</style>
<script>
	$('#street_autocomplete').autocomplete({
    	serviceUrl: '/housedoc/findstreet/',
		params: { factory_id: <?=$data['factory_id']?>},
		deferRequestBy: 300,
		minChars: 1,
		dataType: 'json',
    	onSelect: function (suggestion) {
				$.ajax({	
					type: "GET",
					url: '/housedoc/gethouses/',
					data: { street_id : suggestion.data },
					cache: false,		
					success: function(data) {
						if(data != 'empty') {
							$('#houseSelect').html('');
							houses = JSON.parse(data);

							for(var i=0; i<houses.length; i++){
								h = "<option value ='" + houses[i].data + "'>" +
														 houses[i].value + "</option>";
								$('#houseSelect').append(h);
							}
						}
					},
					error: function() { 
						alert('Произошла ошибка!');
					}
				});
    		}
	});
	function getDocs() {
		$('#docslist').html('');
		selectedVal = $('#houseSelect').val(); 
		if(selectedVal != '') {
			$.ajax({	
				type: "GET",
				url: '/housedoc/getdocs/',
				data: { house_id: selectedVal },
				cache: false,		
				success: function(data) {
					if(data != 'empty') {
						$('#docslist').html(data);
					} 
				},
				error: function() { 
					alert('Произошла ошибка!');
				}
			});
		}
	}
</script>