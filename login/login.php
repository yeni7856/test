<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 페이지</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/login.js"></script>
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
                            <li><a href="../account/account.php" class="arrow">계좌개설</a></li>
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
                    <form class="search_1">
                        <fieldset>
                            <a href="#" class="search_2">검색</a>
                        </fieldset>
                    </form>
                </div>
    
                <div class="top_menu_1">
                    <h2 class="blind">사용자 메뉴</h2>
                    <ul>
                        <li class="top_login"><a href="login.php">로그인</a></li>
                        <li class="top_join"><a href="../members/agree.php">회원가입</a></li>
                        <li class="top_cen"><a href="#">인증센터</a></li>
                        <li class="top_acc"><a href="../account/account.php">계좌개설</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header> <!-- header -->
    
    
    <main class="content" id="content">
        <div class="lnb_wrap">
            <h2 class="blind">lub서브메뉴</h2>
    
            <div class="lnb">
                <ul>
                    <li><a href="../index.php" class="lnb_home">홈</a></li>
                    <li><a href="#" class="lnb_cli">고객지원</a></li>
                    <li><a href="#" class="lnb_id">ID등록/관리</a></li>
                    <li><a href="login.php" class="lnb_login">로그인</a></li>
                </ul>
            </div>
        </div>
        <div class="login_wrap">   
            <div class="login">
                <h2>로그인</h2>
                <form> 
                    <fieldset class="certifi_login">
                        <legend>공동인증서 로그인</legend>
                        <p>
                        <button type="button" class="certifi_button" style="cursor: pointer">공동인증서 로그인</button>
                        </p>
                        <p class="logout">
                            자동로그아웃
                            <select name="logout" id="" class="logout_1">
                                <option value="A">5분</option>
                                <option value="B">10분</option>
                                <option value="C">15분</option>
                                <option value="C">20분</option>
                            </select>
                        </p>
                        <p class="certi">
                            <a href="#" class="ps_certi">공동인증서 발급/재발급</a>
                            <a href="#" class="other_certi">타기관 인증서 등록</a>
                        </p>
                    </fieldset>
                </form>   

            <div class="id_login_wrap">
                    <form name="login_form" action="login_ok.php" method="post" onsubmit="return form_check()">
                    <fieldset class="id_login">
                    <legend>ID 로그인</legend>
                    <p>
                        <label for="u_id" class="label_txt"></label>
                        <input type="text" name="u_id" id="u_id" class="u_id" placeholder="아이디" value="">
                    </p>    
                    <p>
                        <label for="u_pwd" class="label_txt"></label>
                        <input type="password" name="u_pwd" id="u_pwd" class="u_pwd" placeholder="비밀번호" value="">
                    </p>
                    <p class="certi_use">
                        공동인증서
                        <input type="radio" name="사용" id="" class="use">사용
                        <input type="radio" name="사용" id="" class="unuse">미사용
                    </p>    
                    <p class="logout1">
                        자동로그아웃
                        <select name="logout" id="" class="logout_2">
                            <option value="A">5분</option>
                            <option value="B">10분</option>
                            <option value="C">15분</option>
                            <option value="C">20분</option>
                        </select>
                    </p>
                    <p>
                        <button type="submit" class="loginbut" style="cursor: pointer">로그인</button>
                    </p>   
                    <p>
                        <a href="#" class="id_join">회원가입</a>
                        <a href="#" class="id_find">ID 찾기</a>
                        <a href="#" class="password_enroll">ID 비밀번호 재등록</a>
                    </p>
                    </fieldset>
                </form>  

            </div>
            </div>    
        </div>    
    
            <div class="login_bottom">
                <section class="account_open">
                    <h2>계좌개설 안내</h2>
                    <p class="acc_txt">영업점,은행,인터넷에서 편리하게 계좌를 개설하실 수 있습니다. 계좌개설, ID등록방법을 확인하세요.</p>
                    
                    <a href="#" class="acc_open">영업점에서 계좌개설 안내</a>
                    <a href="#" class="acc_bank">은행에서 계좌개설 안내</a>
                    <a href="#" class="acc_nonfac">비대면 계좌개설 안내</a>
                    <a href="#" class="acc_on">온라인 상품계좌개설 안내</a>
                </section>    
                    
                    <section class="note">
                        <h2>유의사항</h2>
                            <p>· 로그인 하실 때 ID비밀번호 5회 이상(누적) 오류 입력한 경우 접속이 불가합니다. ID비밀번호 재등록 후 로그인 하시기 바랍니다.</p>
                            <p>· 기타문의는 고객지원센터로 연락 바랍니다.</p>
                    </section>
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