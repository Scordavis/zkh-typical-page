$(document).ready(function() {

         (function($){
            
          $.fn.editable = function(options) {    
            
            var defaults = { 
               typex: «text»,      
               url: «action_ajax.php»,
               actionx: «nothing»,
               id: 0,
               style_class: «editable»,      
               width: «100px»
           }; 
           
           var options = $.extend(defaults, options); 

            return this.each(function() {
               
               var obj = $(this);
                     
               obj.addClass(options.style_class);      
               
               var text_saved = obj.html();
               var namex = this.id + «editMode»;
               var items = "";                   
                                          
               obj.click(function() {
                  switch (options.typex) {
                     case «text»: {
                        var inputx = "<input id='" + namex + "' type='text' style='width: " + options.width + "' value='" + text_saved + "' />";
                        var btnSend = "<input type='submit' id='btnSave" + this.id + "' value='ок' />";
                        var btnCancel = "<input type='button' id='btnCancel" + this.id + "' value='отмена' />";
                        items = inputx + btnSend + btnCancel; 
                        break;
                     }
                  } 
                  
                  obj.html(items);

                  $("#" + namex).focus().select();         
                  $("#btnSave" + this.id, obj).click(function () {
                     $.ajax({
                        type: «GET»,          
                        data:            
                           {              
                              text_string: $("#" + namex).val(),
                              actionx: options.actionx,
                              idx: options.id                                       
                           },
                        url: options.url,                
                        success: function(data) {
                           if (data > '') {
                              obj.html(data).css('background-color','#993399');                     
                           } else {
                              obj.html('Повторите пожалуйста...');   
                           }
                           text_saved = data;      
                        },
                        error: function(objHttpRequest, error_str) {
                           obj.html(error_str);
                        }
                     });            
                  })            
                  
                  $("#btnCancel" + this.id, obj).click(function () {
                     obj.hide();
                     obj.show().text(text_saved);
                     

                  })
                     
                  return false;
               });       
            });         
          };
         })(jQuery);

   /* case events*/
   /*Change Title of Rolic*/
   $('a.editable').each(function(){
            $(this).editable({
               url: "/modules/Player/action_ajax.php",
               actionx: «changeTitle»,
               id: $(this).attr('title'),
               width: «250px»
               });
   });

   /*Change Position of Rolic*/
   $('strong.editable').each(function(){
            $(this).editable({
               url: "/modules/Player/action_ajax.php",
               actionx: «changePosition»,
               id: $(this).attr('title'),//original position
               width: «20px»
               });
   });

            $('.rolicCell').mouseover(function(){ $(this).addClass(«highlight»)});
            $('.rolicCell').mouseout(function(){ $(this).removeClass(«highlight»)});
   });