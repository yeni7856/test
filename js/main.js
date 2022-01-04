
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



$(function () {
    var  slideShow = $('.slideshow'),
         slideGroup = slideShow.find('.main_image'),
         slides = slideGroup.find('a'),
         nav = slideShow.find('.slideshow_nav'),
         indi = slideShow.find('.indicator'),
         slideCount = slides.length,
         //    indicator - slides.length 
         indiHtml = '',
         //    open frist
         currentIndex = 0,
         duration = 500,
         easing = 'easeInOutExpo',
         inter = 2500,
         timer;
         
         // console.log(slides);
         
         slides.each(function (i) {
             var newLeft = i * 100 + '%';
             $(this).css({left: newLeft });
             indiHtml += '<a href="">'+ (i+1) +'</a>';
             
             // console.log(indiHtml);
         });
         // slides.each
         
         indi.html(indiHtml);

         function goToSlide(index){
             slideGroup.animate({left:-100*index + '%'}, duration, easing);
             currentIndex = index;
             // console.log(currentIndex);
             updateNav();
         }

         function updateNav(){
             var navPrev = nav.find('.prev');
             var navNext = nav.find('.next');

             if(currentIndex == 0){
                navPrev.addClass('disabled');
             }else{
                navPrev.removeClass('disabled');
             }
             if(currentIndex == slideCount -
                1){
                navNext.addClass('disabled');
             }else{
                navNext.removeClass('disabled');
             }

            //  indi.find('a').removeClass('active');
            //  indi.find('a').eq(currentIndex).addClass('active');

             indi.find('a').eq(currentIndex).addClass('active').siblings().removeClass('active');

            }
        

         indi.find('a').click(function(e){
             e.preventDefault();
             var idx = $(this).index();
            //  console.log(idx);
             goToSlide(idx);
         });

        //  nav.find('.prev').click(function(e){
        //      e.preventDefault();
        //      var i = currentIndex -1;
        //     //  console.log(i);
        //      goToSlide(i);
        //  });
        //  nav.find('.next').click(function(e){
        //     e.preventDefault();
        //     var i = currentIndex +1;
        //     // console.log(i);
        //     goToSlide(i);
        // });

         nav.find('a').click(function(e){
             e.preventDefault();
             if($(this).hasClass('prev')){
                 goToSlide(currentIndex - 1);
             }else{
                 goToSlide(currentIndex + 1);
             }
         });

         updateNav();

         function startTimer(){
            timer = setInterval(function() {
                var nextSlide = (currentIndex + 1) % slideCount;
                goToSlide(nextSlide);
            }, inter);
         }
         startTimer();

         function stopTimer(){
            clearInterval(timer);
         }

         slideShow.mouseenter(function(){
            stopTimer();
         })
         .mouseleave(function(){
            startTimer();
         });
         
 });

 