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
   var u_name = document.getElementById("u_name");
   var u_id = document.getElementById("u_id");
   var mobile = document.getElementById("mobile");
   var u_pwd = document.getElementById("u_pwd");
   var re_pwd = document.getElementById("re_pwd");
   var birth = document.getElementById("birth");
   var birth = document.getElementById("birth");
   var addr1 = document.getElementById("addr1");
   var addr2 = document.getElementById("addr2");
   var email_id = document.getElementById("email_id");

   if(!u_name.value){
       alert("이름을 입력하세요.");
       u_name.focus();
       return false;
   };
   if(!mobile.value){
      alert("휴대폰번호를 입력하세요.");
      mobile.focus();
      return false;
  };
   var regMob = /^[0-9]+$/g;
   if(!regMob.test(mobile.value)){
      alert("숫자만 입력하세요.");
      mobile.focus();
      return false;
   };
   if(!u_id.value){
       alert("아이디를 입력하세요.");
       u_id.focus();
       return false;
   };
   var reg = /^[A-Za-z0-9+].{4,10}$/g;
   if(!reg.test(u_id.value)){
      alert("4~10 영문,숫자 포함해서 입력하세요.");
      u_id.focus();
      return false;
   };
   if(!u_pwd.value){
       alert("비밀번호를 입력하세요.");
       u_pwd.focus();
       return false;
   };
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
   if(!birth.value){
      alert("생년월일을 입력하세요.");
      birth.focus();
      return false;
   };
   var regBirth = /^[0-9]+$/g;
   if(!regBirth.test(birth.value)){
      alert("숫자만 입력하세요.");
      birth.focus();
      return false;
   };
   if(!addr1.value){
      alert("주소를 입력해주세요")
      addr1.focus();
      return false;
   }
   if(!addr2.value){
      alert("상세주소를 입력해주세요")
      addr2.focus();
      return false;
   }
   if(!email_id.value){
      alert("이메일을 입력해주세요")
      email_id.focus();
      return false;
   }
   var regEmail = /^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/g;
   if(!regEmail.test(email_id.value)){
      alert("이메일형식이 아닙니다.");
      email_id.focus();
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
$(document).ready(function(){
   $(".btn_idCheck").click(function(){
       var u_id = $(".u_id").val();
       var reg = /^[A-Za-z0-9+].{4,10}$/g;
       if(!u_id){
           alert("아이디를 입력하세요.");
           $(".u_id").focus();
           return false;
       } else if(!reg.test(u_id)){
           alert("4~10 영문,숫자 포함해서 입력하세요.");
           $(".u_id").focus();
           return false;
       } else{
           $.ajax({
               url:"search_id_result_ajax.php",
               type:"post",
               data:{u_id:u_id},
               success:function(data){
                   confirm(data);
               },
               error:function(){
                   alert("ERROR");
               }
           });
       };
   });
});