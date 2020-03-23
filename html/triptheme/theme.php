<?	
	include "../../../../common.php";
	
	$g5['title'] = "액티비티"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //해당서브페이지 카테로그의 공통 상단을 연결합니다.
?>
  

    <!-- 액티비티 페이지 시작 -->
    <div id="subPage_wrap">
        <div id="subTab_wrap">
            <nav id="subTap_item4_inner">
                <h2 class="hidden">테마여행하위탭메뉴</h2>
                <ul id="subTab_item4_list">
                    <li class=selected><a href="theme.php">액티비티</a></li>
                    <li><a href="theme.php">싱가폴의 밤</a></li>
                    <li><a href="theme.php">미식여행</a></li>
                    <li><a href="theme.php">도심투어</a></li>
                </ul>
            </nav>
        </div>
        <div id="Con_wrap">
            <section id="Con_inner">
                <h2 class="hidden">액티비티페이지</h2>
                <nav id="indicator">
                    <h3 class="hidden">페이지경로표시</h3>
                    <ul id="indicator_list">
                        <li><img src="/images/home_icon.png" alt="메인"></li>
                        <li>테마여행</li>
                        <li>액티비티</li>
                    </ul>
                </nav>
                <div id="Con_title">
                    <p>아이부터 어른까지 모두가 즐기는<br>액티비티 TOP9</p>
                </div>
                <div id="acCon_map">
                    <img src="/images/theme_ac_map.gif" alt="액티비티여행지도">
                </div>
                <div id="acCon_list_wrap">
                    <ul id="acCon_list">
                        <li>
                            <p><img src="/images/theme_ac_img01.jpg" alt="나이트사파리"></p>
                            <p class="acCon_numbox">01</p>
                            <p class="acCon_textbox">
                                <span class="acCon_name">나이트 사파리</span>
                                <span class="acCon_text">세계 최초 야간 동물원에서 즐겨보는 나이트&와일드 라이프</span>
                            </p>
                        </li>
                        <li>
                            <p><img src="/images/theme_ac_img02.jpg" alt="주롱새공원"></p>
                            <p class="acCon_numbox">02</p>
                            <p class="acCon_textbox">
                                <span class="acCon_name">주롱새 공원</span>
                                <span class="acCon_text">키덜트 여행자들을 위한 직접 보고 느끼는 체험형 어트랙션</span>
                            </p>
                        </li>
                        <li>
                            <p><img src="/images/theme_ac_img03.jpg" alt="gx5익스트림스윙"></p>
                            <p class="acCon_numbox">03</p>
                            <p class="acCon_textbox">
                                <span class="acCon_name">GX-5 익스트림스윙</span>
                                <span class="acCon_text">클릭키의 화려한 야경을 보며 도심에서도 즐길 수 있는 액티비티</span>
                            </p>
                        </li>
                        <li>
                            <p><img src="/images/theme_ac_img04.jpg" alt="메가짚"></p>
                            <p class="acCon_numbox">04</p>
                            <p class="acCon_textbox">
                                <span class="acCon_name">메가짚</span>
                                <span class="acCon_text">센토사를 가로지르며 마치 타잔처럼 다양한 자세로 비행</span>
                            </p>
                        </li>
                        <li>
                            <p><img src="/images/theme_ac_img05.jpg" alt="유니버셜스튜디오"></p>
                            <p class="acCon_numbox">05</p>
                            <p class="acCon_textbox">
                                <span class="acCon_name">유니버셜스튜디오</span>
                                <span class="acCon_text">영화속에 들어온 듯한 곳에서 즐기는 스릴 넘치는 놀이기구</span>
                            </p>
                        </li>
                        <li>
                            <p><img src="/images/theme_ac_img06.jpg" alt="루지"></p>
                            <p class="acCon_numbox">06</p>
                            <p class="acCon_textbox">
                                <span class="acCon_name">루지</span>
                                <span class="acCon_text">낮에도 밤에도, 아이도 어른도 모두가 즐길 수 있는 라이딩</span>
                            </p>
                        </li>
                        <li>
                            <p><img src="/images/theme_ac_img07.jpg" alt="번지점프"></p>
                            <p class="acCon_numbox">07</p>
                            <p class="acCon_textbox">
                                <span class="acCon_name">번지점프</span>
                                <span class="acCon_text">아름다운 실로소 비치를 바라보며 날 수 있는 짜릿한 경험 </span>
                            </p>
                        </li>
                        <li>
                            <p><img src="/images/theme_ac_img08.jpg" alt="자이언트스윙"></p>
                            <p class="acCon_numbox">08</p>
                            <p class="acCon_textbox">
                                <span class="acCon_name">자이언트스윙</span>
                                <span class="acCon_text">혼자 뛰어내리기 무서워 도전을 망설인다면 함께하는 도전</span>
                            </p>
                        </li>
                        <li>
                            <p><img src="/images/theme_ac_img09.jpg" alt="S.E.A 아쿠아리움"></p>
                            <p class="acCon_numbox">09</p>
                            <p class="acCon_textbox">
                                <span class="acCon_name">S.E.A 아쿠아리움</span>
                                <span class="acCon_text">800종 이상의 해양생물들로 바닷속을 통째로 옮긴 듯한 광경</span>
                            </p>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- 액티비티 페이지 끝 -->
   
<?
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>