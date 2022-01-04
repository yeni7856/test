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
   var u_pwd = document.getElementById("u_pwd");
   var re_pwd = document.getElementById("re_pwd");

   var regPwd = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*?])[a-zA-Z\d!@#$%^&*?].{4,10}$/g;
   if(!regPwd.test(u_pwd.value)){
      alert("8~12자 영문 대소문자,숫자,기호 포함해서 입력하세요.");
      u_pwd.focus();
      return false;
   };
   if(u_pwd.value != re_pwd.value){
       alert("비밀번호를 확인해주세요.");
       re_pwd.focus();
       return false;
   };
   return true;
};

function sample6_execDaumPostcode() {
   new daum.Postcode({
      oncomplete: function(data) {
            var addr = ''; 
           
            if (data.userSelectedType === 'R') { 
               addr = data.roadAddress;
            } else { 
               addr = data.jibunAddress;
            }
            document.getElementById('postalCode').value = data.zonecode;
            document.getElementById("addr1").value = addr;
         
            document.getElementById("addr2").focus();
      }
   }).open();
}
function del_mem(){
   var ck = confirm("정말 탈퇴하시겠습니까?\n탈퇴한 아이디는 다시 사용하실 수 없습니다.");
   if(ck){
       location.href="delete.php";
   };
};
