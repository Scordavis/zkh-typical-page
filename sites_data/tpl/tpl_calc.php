<?ob_start();?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- Переключение IE в последнию версию, на случай если в настройках пользователя стоит меньшая -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Адаптирование страницы для мобильных устройств -->
	<meta name="viewport" content="width=1200">

	<!-- Запрет распознования номера телефона -->
	<meta name="format-detection" content="telephone=no">
	<meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

	<!-- Заголовок страницы -->
	<title><?echo $data['title'];?></title>

	<!-- Данное значение часто используют(использовали) поисковые системы -->
	<meta name="description" content="">
	<meta name="keywords" content="">

	<!-- Традиционная иконка сайта, размер 16x16, прозрачность поддерживается. Рекомендуемый формат: .ico или .png /../database/views/images/logo.png-->
	<link rel="shortcut icon" href="favicon.ico">

	

<!--<script src="/views/js/jquery-3.1.1.min.js"></script>-->
		
<?//include 'views/menu/main_scripts.php';
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="/tpl/js/jquery-2.1.3.min.js"></script>
	
		
		
	
<!--
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">-->
	<!--<link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">-->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/tpl/css/fonts.css" />
	<link rel="stylesheet" href="/tpl/css/main.css" />
	
	<!-- Подключение файлов стилей -->
	<link rel="stylesheet" href="/views/core/css/styles.css">
	<link rel="stylesheet" href="/views/core/css/jquery.fancybox.css">
	
	<!--<link rel="stylesheet" href="/views/core/css/font-awesome.min.css">-->
	
	<link rel="stylesheet" type="text/css" href="/application/tpl/css/request_form.css?b=1" />
	<!-- Обучение старых версий IE тегам html5 -->
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
		<link rel="stylesheet" type="text/css" href="/views/buttons/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="/views/buttons/css/vicons-font.css" />
		<link rel="stylesheet" type="text/css" href="/views/buttons/css/base.css" />
		<link rel="stylesheet" type="text/css" href="/views/buttons/css/buttons.css" />
		<style>

@font-face{
    font-family: 'wf_SegoeUILight';
    src:url('http://i.s-microsoft.com/fonts/Segoe-UI/Cyrillic/Light/latest.eot');
    src:url('http://i.s-microsoft.com/fonts/Segoe-UI/Cyrillic/Light/latest.eot?#iefix') format('embedded-opentype'),
           url('http://i.s-microsoft.com/fonts/Segoe-UI/Cyrillic/Light/latest.woff') format('woff'),
           url('http://i.s-microsoft.com/fonts/Segoe-UI/Cyrillic/Light/latest.ttf') format('truetype'),
           url('http://i.s-microsoft.com/fonts/Segoe-UI/Cyrillic/Light/latest.svg#web') format('svg');
    font-weight: normal;
    font-style: normal;
}

  /*@import url(http://allfont.ru/allfont.css?fonts=clear-sans-light); wf_SegoeUILight*/


 .tabledb{    margin-bottom: 30px;padding: 0px 5% 0 5%;font-family: "wf_SegoeUILight";}.tabledb table{       border-collapse: collapse;}
    .tabledb table tr th{    min-width: 70px;    padding: 0px 3px;    color: #fff;    font:400 14px/20px 'wf_SegoeUILight';    border-right: 1px solid #fff;  
    border-left: 1px solid #fff;    background: #0051a3;}.tabledb table tr th.small.tabledb table tr td.small{    width: 60px;    min-width: 60px; 
    table-layout: fixed;}.tabledb table tr th.big{    width: 230px;    table-layout: fixed;}
    .tabledb table tr td{    padding: 6px 7px;    color: #202020; 
    font: 900 14px 'wf_SegoeUILight';    border: 1px solid #d3d3d3;    text-align: center;}
    .tabledb table tr:first-child td{    border-top: none;}
    .tabledb table tr td.small{    padding: 0;}.tabledb table tr td .close{    display: block;    height: 23px;    color: #cd1000;   
    font: 17px/22px FontAwesome;    border-top: 1px solid #d3d3d3;    text-align: center;    text-decoration: none;}
    .tabledb table tr td .save{    display: block;    height: 26px;    background: url(../images/save.png) 50% 50% no-repeat;}
    .tabledb table tr td .input{    width: 100%;    height: 30px;    border: 1px solid #99b9da; 
    padding: 0 5px;    background: #fff;    font: 14px ;    color: #606060;    text-align: center;}.tabledb table tr td .hide{    display: none;}
    
    .User{background:#fff;}
    .CabinetUser{background:url('http://database.fru-gkh.com.ua/images/fon_city.jpg') center; background-size: cover; background-repeat:no-repeat;font: 900 14px 'wf_SegoeUILight';color: #fff;}
    .font_houses{color: #0051a3;font: 900 14px 'wf_SegoeUILight';}
    </style>
    <?$style='User';
    // if(isset($data['style'])&& $data['style']=='CabinetUser')$style='CabinetUser';//EAEAEA
    // if($data['o_r']!==''&& $data['password']!=='')
    if(isset($data['res'])&& $data['res']=='no') $style='CabinetUser';
    ?>
</head>

<body class="<?=$style?>">

<!--<div style="clear: both;"> </div>-->
	<div style="margin:0;padding:0;">
	<?$added_url='';
/*if(isset($_SESSION['factory'])) {
 	$model = new
 	
 	Model();$model->write_factory_statistic($_SESSION['factory'],$data['title']);
 	?>
	<script>
 	function factory_calc_ajax()
						{   var //bbb=href.split('?'),
						id='<?=$_SESSION['factory']?>',
						title='<?=$data['title']?>';
									//block=document.getElementById(bbb[1].replace("=","_"));
									//console.log(href,'stopt',title,id);
	$.ajax({
              type: 'GET',
              url: '/ajax/write_factory_statistic_ajax.php',///calculations/inputdata_fact/?id=1150
              data: { id: id, title: title },
             //async:false,
//  success: function(data) {
//               // $('#results').html(data);//console.log("href",'stopt',title,id);
//               },
              error:  function(xhr, str){
    	    alert('Возникла ошибка: ' + xhr.responseCode);
              }
            });
            

//	return	 false;
			    
			    
	
		  
						}
						var int=60000;
setInterval( "factory_calc_ajax()",int);
</script>
	<?
	}*/
//var_dump($_SESSION);
		include Q_PATH.'/views/View_'.$view.'.php';
		
	?>
	</div>
	

<!--header class="inner" style="margin-top: 20px">
	<div class="cont">
		<div class="sector_flex" style="font: 500 15px Ubuntu">
		
				<div class="logo" >
						<div class="icon" style="display: inline-block;margin-right:10px; vertical-align: top;font-size:1000%;"><img src="http://fru-gkh.com.ua/application/tpl/images/icon_mark2.png" alt="федерація роботодавців ЖКГ, адреса"></div>
					<div class="item_info" style="display: inline-block;">
				<div class="title" >Приїжджайте до нас</div>
						<div class="text" >м. Київ, вул. Михайла <br> Коцюбинського 1, оф. 603</div>
					</div>
						</div>
			<div class="logo">
					<div class="icon" style="display: inline-block;margin-right:10px; vertical-align: top;font-size:1000%;"><img src="http://fru-gkh.com.ua/application/tpl/images/icon_mail.png" alt="федерація роботодавців ЖКГ, електронна пошта ФРУ ЖКГ"></div>
					<div class="item_info" style="display: inline-block;">
						<div class="title">Напишіть нам</div>
						<a class="mail" href="mailto:adamovfrugkh@gmail.com">adamovfrugkh@gmail.com</a>
					</div>
				</div>
			
				<div class="wrap_tel">
					<div class="block_tel">
						<div class="title">Зателефонуйте нам</div>

						<div class="tel"><a href="#" class="mini_modal_link" data-modal-id="#modal_telsty"><b>044</b> 209 03 93</a></div>
						
						<div class="mini_modal" id="modal_telsty">
							<div><b>044</b> 209 03 93</div>

							<div><b>044</b> 209 03 93</div>

							<div><b>044</b> 209 03 93</div>

							<div><b>044</b> 209 03 93</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div></header--> 
	<!-- Подключение javascript файлов -->
<!--<script src="/views/js/jquery-migrate-1.4.1.min.js"></script>-->
<!--	<script src="/views/js/jquery.fancybox.min.js"></script>-->
<!--	<script src="/views/js/jquery.selectbox.js"></script>-->
<!--	<script src="/views/js/scripts.js"></script>-->
	<script type="text/javascript">
		function confirmDeleteSfera() {
		   // var str = new String("Обережно!");
//alert(str.fontcolor( "red" ));
			if (confirm("Обережно! Буде втрачена частина даних!")) {
				return true;
			} else {
				return false;
			}
		}
function confirmDeleteAll() {
		   // var str = new String("Обережно!");
//alert(str.fontcolor( "red" ));
			if (confirm("Обережно! Будуть втрачені дані!")) {
				return true;
			} else {
				return false;
			}
		}		
function confirmDeleteSferaG() {
		   // var str = new String("Обережно!");
//alert(str.fontcolor( "red" ));
			if (confirm("Обережно! Будуть замінені коефіцієнти!")) {
				return true;
			} else {
				return false;
			}
		}
		
		function open(elem) {
    if (document.createEvent) {
        var e = document.createEvent("MouseEvents");
        e.initMouseEvent("mousedown", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
        elem[0].dispatchEvent(e);
    } else if (element.fireEvent) {
        elem[0].fireEvent("onmousedown");
    }
}

		</script>
		<!--script type="text/javascript">
		function confirmDelete() {
			if (confirm("Ви впевнені?")) {
				return true;
			} else {
				return false;
			}
		}

		</script>
		 <script src="/js/jquery.maskedinput.js" type="text/javascript"></script>
        <script type="text/javascript">
			jQuery(function($){
			$("#date").mask("99/99/9999", {completed:function(){alert("Ви ввели: "+this.val());}});
		    $("#date1").mask("99/99/9999"); $("#datef").mask("[99/99/9999|Петя|Маша]");
		$(".date_kilkistend").mask("99/99/9999");
			$(".date_kilkist").mask("99/99/9999");
			
		    });
		</script>
<script>
$(document).ready(function(){
$(".date_kilkist").click(function(){
            //var input = document.getElementById("mytextbox");
            this.focus();
            this.setSelectionRange(0,0);
         return false;
    });   
})

function setSelectionRange(input, selectionStart, selectionEnd) {
  if (input.setSelectionRange) {
    input.focus();
    input.setSelectionRange(selectionStart, selectionEnd);
    //console.log(input.val());
  }
  else if (input.createTextRange) {
    var range = input.createTextRange();
    range.collapse(true);
    range.moveEnd('character', selectionEnd);
    range.moveStart('character', selectionStart);
    range.select();
  }
}

function setCaretToPos (input, pos) {
  setSelectionRange(input, pos, pos);
}
//Here “ctrl” is the Textarea object. 
function getCaretPosition (ctrl) {
// IE < 9 Support
if (document.selection) {
ctrl.focus();
var range = document.selection.createRange();
var rangelen = range.text.length;
range.moveStart ('character', -ctrl.value.length);
var start = range.text.length - rangelen;
return {'start': start, 'end': start + rangelen };
}
// IE >=9 and other browsers
else if (ctrl.selectionStart || ctrl.selectionStart == '0') {
return {'start': ctrl.selectionStart, 'end': ctrl.selectionEnd };
} else {
return {'start': 0, 'end': 0};
}
}


function setCaretPosition(ctrl, start, end) {
// IE >= 9 and other browsers
if(ctrl.setSelectionRange)
{
ctrl.focus();
ctrl.setSelectionRange(start, end);
}
// IE < 9
else if (ctrl.createTextRange) {
var range = ctrl.createTextRange();
range.collapse(true);
range.moveEnd('character', end);
range.moveStart('character', start);
range.select();
}
}
</script-->
</body>
</html>
