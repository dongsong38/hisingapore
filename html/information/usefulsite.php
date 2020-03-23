<?	
	include "../../../../common.php";
	
	$g5['title'] = "유용한사이트"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //해당서브페이지 카테로그의 공통 상단을 연결합니다.
?>

    <!-- 여행정보비주얼 끝 -->
    <!-- 여행지정보 페이지 시작 -->
    <div id="subPage_wrap">
        <div id="subTab_wrap">
            <nav id="subTap_item3_inner">
                <h2 class="hidden">여행정보하위탭메뉴</h2>
                <ul id="subTab_item3_list">
                    <li><a href="infor.php">여행지 정보</a></li>
                    <li><a href="prepare.php">여행 준비</a></li>
                    <li class=selected><a href="usefulsite.php">유용한 사이트</a></li>
                </ul>
            </nav>
        </div>
        <div id="Con_wrap">
            <section id="Con_inner">
                <h2 class="hidden">유용한사이트페이지</h2>
                <nav id="indicator">
                    <h3 class="hidden">페이지경로표시</h3>
                    <ul id="indicator_list">
                        <li><img src="/images/home_icon.png" alt="메인"></li>
                        <li>여행정보</li>
                        <li>유용한사이트</li>
                    </ul>
                </nav>
                <div id="Con_title">
                    <p>여행을 보다 유익하게, 유용한 여행 사이트</p>
                </div>
                <div id="card_list_wrap">
                    <ul id="card_list">
                        <li>
                            <p class="card_imgbox"><img src="/images/site_img01.gif" alt="여행정보센터로고"></p>
                            <p class="card_textbox">
                                <span class="card_title">여행정보센터</span>
                                <span class="card_text">여행사 정보 및 여행 안전정보 제공</span>
                                <span class="card_btn"><a href="http://www.tourinfo.or.kr/">바로가기</a></span>
                            </p>
                        </li>
                        <li>
                            <p class="card_imgbox"><img src="/images/site_img02.gif" alt="외교부해외안전여행로고"></p>
                            <p class="card_textbox">
                                <span class="card_title">외교부</span>
                                <span class="card_text">해외여행 시 각종 안정정보 제공</span>
                                <span class="card_btn"><a href="http://www.0404.go.kr/dev/main.mofa">바로가기</a></span>
                            </p>
                        </li>
                        <li>
                            <p class="card_imgbox"><img src="/images/site_img03.gif" alt="구글지도로고"></p>
                            <p class="card_textbox">
                                <span class="card_title">구글지도</span>
                                <span class="card_text">여행 길찾기 필수 어플리케이션</span>
                                <span class="card_btn"><a href="https://www.google.com/maps/?hl=ko">바로가기</a></span>
                            </p>
                        </li>
                        <li>
                            <p class="card_imgbox"><img src="/images/site_img04.gif" alt="smrt로고"></p>
                            <p class="card_textbox">
                                <span class="card_title">SMRT</span>
                                <span class="card_text">싱가포르 지하철 안내</span>
                                <span class="card_btn"><a href="http://www.smrt.com.sg/">바로가기</a></span>
                            </p>
                        </li>
                        <li>
                            <p class="card_imgbox"><img src="/images/site_img05.gif" alt="클룩로고"></p>
                            <p class="card_textbox">
                                <span class="card_title">클룩</span>
                                <span class="card_text">액티비티 및 티켓 예약 사이트</span>
                                <span class="card_btn"><a href="https://www.klook.com/ko/">바로가기</a></span>
                            </p>
                        </li>
                        <li>
                            <p class="card_imgbox"><img src="/images/site_img06.gif" alt="싱가포르관광청로고"></p>
                            <p class="card_textbox">
                                <span class="card_title">싱가포르관광청</span>
                                <span class="card_text">공식 가이드북 및 각종 정보 제공</span>
                                <span class="card_btn"><a href="http://visitsingaporeblog.com/221371723996">바로가기</a></span>
                            </p>
                        </li>
                        <li>
                            <p class="card_imgbox"><img src="/images/site_img07.gif" alt="관세청로고"></p>
                            <p class="card_textbox">
                                <span class="card_title">관세청</span>
                                <span class="card_text">관세율 조회 및 통관정보</span>
                                <span class="card_btn"><a href="http://www.customs.go.kr/kcshome/index.jsp">바로가기</a></span>
                            </p>
                        </li>
                        <li>
                            <p class="card_imgbox"><img src="/images/site_img08.gif" alt="질병관리본부로고"></p>
                            <p class="card_textbox">
                                <span class="card_title">질병관리본부</span>
                                <span class="card_text">각종 질병 관리에 대한 정보</span>
                                <span class="card_btn"><a href="http://www.cdc.go.kr/cdc/">바로가기</a></span>
                            </p>
                        </li>
                        <li>
                            <p class="card_imgbox"><img src="/images/site_img09.gif" alt="한국여행업협회로고"></p>
                            <p class="card_textbox">
                                <span class="card_title">한국여행업협회</span>
                                <span class="card_text">여행업계 소통 통로로 각종 정보 제공</span>
                                <span class="card_btn"><a href="https://www.kata.or.kr/v2/">바로가기</a></span>
                            </p>
                        </li>
                        <li>
                            <p class="card_imgbox"><img src="/images/site_img10.gif" alt="스카이스캐너로고"></p>
                            <p class="card_textbox">
                                <span class="card_title">스카이스캐너</span>
                                <span class="card_text">가격을 비교하여 최저가 상품 제공</span>
                                <span class="card_btn"><a href="https://www.skyscanner.co.kr/">바로가기</a></span>
                            </p>
                        </li>
                        <li>
                            <p class="card_imgbox"><img src="/images/site_img11.gif" alt="트립어드바이저로고"></p>
                            <p class="card_textbox">
                                <span class="card_title">트립어드바이저</span>
                                <span class="card_text">세계 최대 규모의 여행 플랫폼</span>
                                <span class="card_btn"><a href="https://www.tripadvisor.co.kr/">바로가기</a></span>
                            </p>
                        </li>
                        <li>
                            <p class="card_imgbox"><img src="/images/site_img12.gif" alt="트래비로고"></p>
                            <p class="card_textbox">
                                <span class="card_title">트래비</span>
                                <span class="card_text">국내 유일의 여행전문 미디어 사이트</span>
                                <span class="card_btn"><a href="http://www.travie.com/">바로가기</a></span>
                            </p>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- 여행지정보 페이지 끝 -->

<?
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>