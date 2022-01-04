<?php
    session_start();
    $s_id = isset($_SESSION["s_id"])? $_SESSION["s_id"]:"";
    $s_name = isset($_SESSION["s_name"])? $_SESSION["s_name"]:"";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>키움증권</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/main.js"></script>
        <?php if($s_id){ ?>
        <script type="text/javascript">
            function log_out(){
                var ck = confirm("로그아웃 하시겠습니까?");
                if(ck == true){
                    location.href="login/logout.php";
                };
            };
        </script>
        <?php }; ?>
</head>
<body text="black" link="blue">
    <header class="header_wap" id="header_wap">
        <div class="header_bottom">
            <h1><a href="index.php">키움증권</a></h1> 

            <div class="gnb">
                <h2 class="blind">메인메뉴</h2>
                <ul>
                    <li class="gnb_fac"><a href="#">금융투자상품</a>
                        <ul>
                            <li><a href="#" class="arrow">펀드</a></li>
                            <li><a href="#" class="arrow">ELS/DLS</a></li>
                            <li><a href="#" class="arrow">ISA</a></li>
                            <li><a href="#">연금저축</a></li>
                            <li><a href="#">RP</a></li>
                            <li><a href="#" class="arrow">투자관리</a></li>
                            <li><a href="#">채권</a></li>
                        </ul>
                    </li>
                    <li class="gnb_gift"><a href="#">주식선물옵션</a>
                        <ul> 
                            <li><a href="#" class="arrow">주식</a></li>
                            <li><a href="#" class="arrow">주식매매</a></li>
                            <li><a href="#" class="arrow">선물/옵션</a></li>
                            <li><a href="#" class="arrow">ETF/ETN</a></li>
                            <li><a href="#">시세/지수</a></li>
                            <li><a href="#">매매동향</a></li>
                            <li><a href="#">뉴스</a></li>
                        </ul> 
                    </li>
                    <li class="gnb_ove"><a href="#">해외주식</a>
                        <ul>
                            <li><a href="#" class="arrow">해외주식</a></li>
                            <li><a href="#" class="arrow">해외선물/옵션</a></li>
                            <li><a href="#">FX마진</a></li>
                            <li><a href="#">CFD국내주식</a></li>
                        </ul> 
                    </li>
                    <li class="gnb_ass"><a href="#">자산관리</a>
                        <ul>
                            <li><a href="#" class="arrow">자산현황</a></li>
                            <li><a href="#" class="arrow">내정보</a></li>
                            <li><a href="#" class="arrow">이체/환전</a></li>
                            <li><a href="#" class="arrow">계좌정보/정리</a></li>
                            <li><a href="#">신용대출</a></li>
                            <li><a href="#">주시대여</a></li>
                            <li><a href="#">권리/청약</a></li>
                            <li><a href="#">활동내역</a></li>
                        </ul> 
                    </li>
                    <li class="gnb_cmpt"><a href="#">모의/실전투자대회</a>
                        <ul>
                            <li><a href="#" class="arrow">상시모의투자</a></li>
                            <li><a href="#" class="arrow">모의투자대회</a></li>
                            <li><a href="#" class="arrow">키움실전투자대회</a></li>
                        </ul> 
                    </li>
                    <li class="gnb_resrch"><a href="#">리서치센터</a>
                        <ul>
                            <li><a href="#" class="arrow">경제/전략</a></li>
                            <li><a href="#" class="arrow">FX해외선물</a></li>
                            <li><a href="#">해외증시</a></li>
                            <li><a href="#">증권방송채널K</a></li>
                            <li><a href="#">투자분석</a></li>
                        </ul> 
                    </li>
                    <li class="gnb_client"><a href="#">고객지원</a>
                        <ul>
                            <li><a href="account/account.php" class="arrow">계좌개설</a></li>
                            <li><a href="members/agree.php" class="arrow">회원가입</a></li>
                            <li><a href="#">ID등록/관리</a></li>
                            <li><a href="#">이벤트</a></li>
                            <li><a href="#">공지사항</a></li>
                            <li><a href="#">고객개시판</a></li>
                        </ul> 
                    </li>
                </ul>
            </div>    
            <?php
            if(!$s_id){//login X
            ?>    
                <div class="top_menu_wrap">
                    <div class="search">
                        <form class="search">
                            <fieldset>
                                <a href="#" class="search_1">검색</a>
                            </fieldset>
                        </form>
                    </div>
                    <div class="top_menu_1">
                        <h2 class="blind">사용자 메뉴</h2>
                        <ul>
                            <li class="top_login"> <a href="login/login.php">로그인</a></li>
                            <li class="top_join"><a href="members/agree.php">회원가입</a></li>
                            <li class="top_cen"><a href="#">인증센터</a></li>
                            <li class="top_acc"><a href="account/account.php">계좌개설</a></li>
                        </ul>
                    </div>
                </div>     
                <?php
                } else{ // login O.k
                ?>
                <!-- if($s_id == "hong123"):
                endif; -->
                <div class="top_menu_wrap2">
                    <p class="amdin_hi">
                        <?php echo $s_name; ?>님, 안녕하세요.
                    </p>
                        <div class="search">
                            <form class="search">
                                <fieldset>
                                    <a href="#" class="search_2">검색</a>
                                </fieldset>
                            </form>
                        </div>
                        <div class="top_menu_2">
                            <h2 class="blind">사용자 메뉴</h2>
                            <ul>
                            <li class="top_login"> <a href="#" title="로그아웃" onclick="log_out()">로그아웃</a></li>
                            <li class="top_join"><a href="members/edit.php">회원정보</a></li>
                            <li class="top_cen"><a href="#">인증센터</a></li>
                            <li class="top_acc"><a href="account/account.php">계좌개설</a></li>
                        </ul>
                    </div>
                </div>       
            <?php    
            };
            ?>
        </div><!--//header-->
    </header> <!-- header -->

    <main class="content" id="content">  
        <div class="slideshow">
            <div class="main_image">
                <h2 class="blind">메인이벤트</h2>
                    <a href="#"><img src="images/main_image1.jpg" alt="slide1"></a>
                    <!-- <a href="#"><img src="" alt="slide2"></a>
                    <a href="#"><img src="" alt="slide3"></a> -->
                    <a href="#"><img src="images/RP2.png" alt="slide4"></a>   
            </div>
            <div class="slideshow_nav">
                <a href="" class="prev">prev</a>
                <a href="" class="next">next</a>
            </div>
            <div class="indicator">
                    <!-- 
                    <a href="">1</a>
                    <a href="">2</a>
                    <a href="">3</a>
                    <a href="">4</a> 
                    -->
            </div>
        </div>

            <div class="km_mobile_bg">
                <div class="km_mobile">
                    <h2>개설방법</h2>
                        <ul>
                            <li class="km_acc"><a href="#" class="km_acc1">계좌개설</a></li>
                            <li class="km_id"><a href="#">id등록</a></li>
                            <li class="km_otp"><a href="#">인증/otp</a></li>
                            <li class="km_sys"><a href="#">시스템다운</a>
                        </ul>
                    </div>
                </div>
            </div>  
        
        <div class="con_wrap">
            
            <section class="con">
                <h2 class="con_text">POINT</h2>
                <div class="con1">
                    <h3>추천종목</h3>
                    <p class="con_st1"><a href="#" >종목1</a></p>
                    <p class="con_st2"><a href="#" >종목2</a></p>
                    <span class="more"></span>
                </div>

                <div class="con2">
                    <h3><a href="#">2021 키움 영웅전 실전 투자 대회</a></h3>
                    <p>총상금</p>
                    <p>참가 : 2021.01.25 ~ 03.14</p>
                    <p>대회 : 2021.02.08 ~ 03.26</p>
                    <a href="#"></a>
                </div>

                <div class="con3">
                    <h3><a href="#">글로벌 자산배분</a></h3>
                    <p class="con_fund3">고위험</p>
                    <span class="con_fund2"></span>
                    <p class="con_fund4">최소가입금액<span class="con_txt">1,000,000원</span></p>
                    <a href="#"></a>
                </div>

                <div class="con4">
                    <h3><a href="#">els뉴글로벌</a></h3>
                    <p class="con_els3">초고위험</p>
                    <span class="con_els2"></span>
                    <p class="con_els4">조건충족<span class="con_els5">조건미충족</span></p>
                    <a href="#"></a>
                </div>
            </section>
        </div>

            <div class="sub_menu">
                <h2 class="blind">sub메뉴</h2>

                    <h3 class="sub_fund"><a href="#">추천펀드</a></h3>
                    <ul>
                        <li class="ref_fund1"><a href="#">추천펀드1</a></li>
                        <li class="ref_fund2"><a href="#">추천펀드2</a></li>
                        <li class="ref_fund3"><a href="#">추천펀드3</a></li>
                        <li class="ref_fund4"><a href="#">추천펀드4</a></li>
                    </ul>
                    
                    <h3 class="sub_sock"><a href="#">해외주식</a></h3>
                    <h3 class="sub_etc"><a href="#">기타금융상품</a></h3>
                
                    <a href="#" class="sub_prev">이전</a>
                    <a href="#" class="sub_next">다음</a>
            </div>

    <div class="repo_bg">
        <div class="repo_wrap">
            <div class="repo">
                <h2>리서치리포트</h2>
                <p class="repo_txt">다양한 HOT 투자정보!<p>
                <p class="repo_txt2">핵심콕콕!리서치리포트에서 확인하세요</p>

                <div class="glo_bg">  
                    <div class="glo_talk">
                        <h3><a href="#">[Global Asset Talk]</a></h3>
                        <p class="talk_txt">미국 국채 입찰에 웃고 우는 시장</p>
                        <span class="talk_txt2">글로벌 자산 전략 > Global Asset lounge<br>
                        글로벌 자산시장 동향 : 원자재시장의 나홀로 독주 지속</span>
                        <p class="talk_txt3">2021.03.10</p>
                    </div> 
                </div>
                <div class="glo_new_bg">
                    <div class="glo_news">
                        <h3><a href="#">[뉴스 인사이트]</a></h3>
                        <p>미국/유럽</p>
                        <span>2021.03.08</span>
                    </div>    
                </div>   

                <div class="glo_fx_bg">
                    <div class="glo_FX">
                        <h3><a href="#">[자산 전략]</h3>
                        <p class="fx_txt">FX Spotlight</p>
                        <p>미 달러가 강한 이유</p>
                        <span>2021.03.10</span>
                    </div>
                </div>      
            </div>
        </div>   
    </div>

    <div class="con_bottom2">
        <div class="event">
                <h2 class="blind">대한민국 주식시장 점유율</h2>
                <P class="event_txt1">영업점 방문없이 빠르고 편리하게 계좌 개설하세요.</P>
                <a class="event_txt2">키움 모바일 계좌 </a>
        </div>
    </div>    
    </main>

    <footer class="footer" id="footer">

        <div class="footer_top">
            <h2>키움증권</h2>
       

            <div class="footer_submenu">
                
                    <h3><a href="#" class="bank">증권 업무안내</a></h3>
                    <!-- <ul>
                        <li><a href="#">증권업무</a> </li>
                        <li><a href="#">증권업무</a> </li>
                        <li><a href="#">증권업무</a> </li>
                        <li><a href="#">증권업무</a> </li>
                    </ul> -->

                <h3><a href="#" class="channel">트레이딩채널</a></h3>
                <!-- <ul>
                    <li><a href="#">영웅문global</a> </li>
                    <li><a href="#">영웅문global</a> </li>
                    <li><a href="#">영웅문global</a> </li>
                    <li><a href="#">영웅문global</a> </li>
                </ul> -->

                <h3><a href="#" class="inve">신규가입가이드</a></h3>
                <!-- <ul>
                    <li><a href="#">모의투자</a> </li>
                    <li><a href="#">모의투자</a> </li>
                    <li><a href="#">모의투자</a> </li>
                    <li><a href="#">모의투자</a> </li>
                </ul> -->

                <!-- <h3><a href="#" class="bank">증권 업무안내</a></h3> -->
                <!-- <ul>
                    <li><a href="#">증권업무</a> </li>
                    <li><a href="#">증권업무</a> </li>
                    <li><a href="#">증권업무</a> </li>
                    <li><a href="#">증권업무</a> </li>
                </ul> -->
            </div>
         
            
        <div class="footer_center">
            <h3>키움금융센터</h3>
            <p class="footer_txt">KIWOOM HELP DESK</p>
            <P class="footer_tell">1544-9000/1544-9911</P>
           
        </div>

        <div class="footer_tel">

            <h3 class="blind">주문번호</h3>

            <div class="footer_tel1">
                <P>주문전용<br>
                <a href="#">1544-4989</a>
                </P>

                <P>주문전용<br>
                <a href="#">1544-4989</a>
                </P>

                <P>주문전용<br>
                <a href="#">1544-4989</a>
                </P>

                <P>주문전용<br>
                <a href="#">1544-4989</a>
                </P>
            </div>

            <div class="footer_tel2">
                <P>주문전용<br>
                <a href="#">1544-4989</a>
                </P>

                <P>주문전용<br>
                <a href="#">1544-4989</a>
                </P>
            </div>
        </div>  

            <div class="footer_bottom">
                <div class="footer_text">
                    <a class="comp">회사소개</a>
                    <a class="info">개인정보처리방침</a>
                    <a class="clie">고객투자자유의사항</a>
                    <a class="Tran">거래확인서검증</a>
                    <a class="Dorm">휴면계좌조회</a>
                    <a class="indi">개인정보노출자 사고예방</a>
                </div>
            </div>
    </footer>

</body>
</html>