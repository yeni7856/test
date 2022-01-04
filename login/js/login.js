
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
function form_check(){
  var u_id = document.getElementById("u_id");
  var u_pwd = document.getElementById("u_pwd");

  if(!u_id.value){
      alert("아이디를 입력하세요.");
      u_id.focus();
      return false;
  };
  if(!u_pwd.value){
      alert("비밀번호를 입력하세요.");
      u_pwd.focus();
      return false;
  };

  return true;
};