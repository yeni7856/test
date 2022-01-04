<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>약관동의</title>
    <link rel="stylesheet" type="text/css" href="css/agree.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/agree.js"></script>
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
            <h1><a href="../index.php">키움증권</a></h1> 

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
                            <li><a href="account.php" class="arrow">계좌개설</a></li>
                            <li><a href="../members/agree.php" class="arrow">회원가입</a></li>
                            <li><a href="#">ID등록/관리</a></li>
                            <li><a href="#">이벤트</a></li>
                            <li><a href="#">공지사항</a></li>
                            <li><a href="#">고객개시판</a></li>
                        </ul> 
                    </li>
                </ul>
            </div>    
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
                            <li class="top_login"> <a href="../login/login.php">로그인</a></li>
                            <li class="top_join"><a href="agree.php">회원가입</a></li>
                            <li class="top_cen"><a href="#">인증센터</a></li>
                            <li class="top_acc"><a href="../account/account.php">계좌개설</a></li>
                        </ul>
                    </div>
                </div>     
        </div><!--//header-->
    </header> <!-- header -->
    <main class="content" id="content">
        <div class="lnb_wrap">
            <h2 class="blind">lub서브메뉴</h2>

            <div class="lnb">
                <ul>
                    <li><a href="../index.php" class="lnb_home">홈</a></li>
                    <li><a href="#" class="lnb_cli">고객지원</a></li>
                    <li><a href="agree.php" class="lnb_login">회원가입</a></li>
                </ul>
            </div>
        </div>
        <div class="join_wrap">
            <div class="join">
                <h2>회원가입</h2>
                    <ul>
                        <li class="agree_lnb">약관동의및정보제공동의</li>
                        <li class="join_lnb">회원정보입력</li>
                        <li class="join_finsh">가입완료</li>
                    </ul>
            </div>
            <div class="join_agree">
                <h3>약관 및 동의서 안내사항 확인</h3>
                <div class="agree_check">
                    <form name="agree_form" action="agree_ok.php" method="post" onsubmit="return form_check()">
                        <fieldset>
                            <legend>공인인증서</legend>
                        <p>
                            <input type="checkbox" name="checkall" id="checkall" class="checkall">
                            <label for="checkall" class="label_txt">모두동의</label>
                        </p>
                        <p>
                            <input type="checkbox" name="agree1" id="agree" class="agree">
                            <label for="agree1" class="label_txt">이용약관 동의 (필수)</label>
                        </p>
                        <p>
                            <input type="checkbox" name="agree2" id="agree" class="agree">
                            <label for="agree2" class="label_txt">개인정보 이용 동의 (필수)</label>
                        </p>
                        <p>
                            <input type="checkbox" name="agree3" id="agree" class="agree">
                            <label for="agree3" class="label_txt">이벤트, 해택정보 수신동의 (선택)</label>
                        </p>
                        <p class="button">
                            <button type="button" class="prev" onclick="history.back()">이전</button>
                            <button type="submit" class="next">다음</button>
                        </p>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="infor_wrap">
            <p class="infor">기타안내사항</p>
            <p class="clien">자세한 사항은 고객센터( 1544-9000 )'비대면 계좌개설 업무 문의'로 문의하시기 바랍니다.</p>
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
