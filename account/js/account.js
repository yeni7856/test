
$(function() {
   var $firstMenu = $('.gnb > ul > li'),
       $header = $('.header_wap'),
       $headerHeight = $header.outerHeight();

       $firstMenu.mouseenter(function(){
          var currentMenu = $(this);
          var subHeight = currentMenu.find('ul').outerHeight();
          $header.stop().animate({height: $headerHeight + subHeight + 'px'},300);
         //  setTimeout(function(){currentMenu.find('ul').show();},300);
       })
        .mouseleave(function(){
         $header.stop().animate({height: $headerHeight + 'px'},300);
         // currentMenu.find('ul').hide();
          
       })
});