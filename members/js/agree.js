
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

 $(function() {
   var agreeCheckAll = document.querySelector('input[name=checkall]');
      agreeCheckAll.addEventListener('change',(e) => {
         var agreeCheckAll = document.querySelectorAll('input[id=agree]');
            for(var i = 0; i < agreeCheckAll.length; i++){
               agreeCheckAll[i].checked =e.target.checked;
            }
      });
});
 function form_check() {
    var agree = document.getElementById("checkall");
       if(!agree.checked){
          alert("약관 동의가 필요합니다.");
          agree.focus();
          return false;
       };
       return true;
 };
 
