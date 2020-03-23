<?	
	include "../../../../common.php";
	
	$g5['title'] = "유니버셜스튜디오"; //커스텀페이지의 타이틀을 입력합니다.
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
                        <li>유니버셜스튜디오</li>
                    </ul>
                </nav>
                <div id="Con_title">
                    <p>유니버셜 스튜디오</p>
                </div>
                <div id="theme_detail_intro">
                    <div id="detail_intro_img"></div>
                    <div id="detail_intro_textbox">
                        <p id="detail_intro_wish_btn"><img src="/images/wish_icon.png" alt="찜하기버튼아이콘"></p>
                        <p id="detail_intro_title">유니버셜 스튜디오</p>
                        <p id="detail_intro_text">영화 속 배경을 그대로 재현해 마치 영화 속에 들어와 있는 듯한 재미를 느낄 수 있는 동심자극 테마파크! 실물 크기의 볼거리들은 덕후들의 심장을 뛰게 만들고 스릴 넘치는 놀이기구까지 있어 영화같은 추억을 남길 수 있는 싱가폴 여행 필수코스에 방문해보세요.</p>
                    </div>
                </div>
                <div id="theme_detail_infor">
                    <p class="bar"></p>
                    <p class="detail_title">관광지 정보</p>
                    <ul id="detail_infor_list">
                        <li>
                            <p class="detail_infor_list_title">운영시간</p>
                            <p class="detail_infor_list_icon"><img src="/images/theme_detail_infor_icon01.gif" alt="운영시간아이콘"></p>
                            <p class="detail_infor_list_text">일-목요일 10:00~19:00<br>금-토요일 10:~22:00</p>
                        </li>
                        <li>
                            <p class="detail_infor_list_title">이용연령</p>
                            <p class="detail_infor_list_icon"><img src="/images/theme_detail_infor_icon02.gif" alt="이용연령아이콘"></p>
                            <p class="detail_infor_list_text">전 연령 이용가능<br>만 3세 이하 부모님 동반 시 무료입장</p>
                        </li>
                        <li>
                            <p class="detail_infor_list_title">유의사항</p>
                            <p class="detail_infor_list_icon"><img src="/images/theme_detail_infor_icon03.gif" alt="유의사항아이콘"></p>
                            <p class="detail_infor_list_text">운영시간은 현지 상황에 따라 사전 고지없이 변동될 수 있습니다.</p>
                        </li>
                        <li>
                            <p class="detail_infor_list_title">예약</p>
                            <p class="detail_infor_list_icon"><img src="/images/theme_detail_infor_icon04.gif" alt="예약아이콘"></p>
                            <p class="detail_infor_list_link_btn">와그 바로가기</p>
                        </li>
                    </ul>
                </div>
                <div id="theme_detail_point">
                    <p class="bar"></p>
                    <p class="detail_title">관광 포인트</p>
                    <p class="detail_point_text">유니버셜 스튜디오 싱가포르는 영화 속 배경을 직접 경험할 수 있는 테마파크로 7개의 테마와 24개의 놀이기구, 그리고 매일 다양하게 펼쳐지는 공연이 모여있는 곳이예요. 가까운 일본에도 유니버셜 스튜디오가 위치해 있지만 오사카 유니버셜 스튜디오에서는 경험할 수 없는 싱가포르 유니버셜 스튜디오만의 자랑 ‘트랜스포머 더 라이드:더 얼티밋 3D배틀’은 입이 떡하고 벌어질만한 짜릿한 순간을 선사할거예요. 마치 정말로 트랜스포머와 함께 영화 속 한 장면에 있는 것 같은 짜릿한 경험을 느낄 수 있을 거예요. 또한 7개의 테마구역은 각 테마별로 영화 속 배경을 그대로 재현하기 위해 섬세한 노력이 들어가있어, 마치 영화 속을 직접 걷고 있는 주인공이 된 듯한 기분까지 느낄 수 있는 환상적인 테마파크예요. 특히 영화 마니아들은 더욱 주목해주세요. 슈렉성, 마다가스카르의 배 모형은 실물 크기로 재현되어 덕후들의 심장을 뜨겁게 만들기에 충분하기 때문이죠.</p>
                    <p class="detail_point_img">
                        <img src="/images/universal_img01.jpg" alt="유니버셜스튜디오">
                    </p>
                    <p class="detail_point_text">그리고 생생한 라이브 쇼부터 다양한 스테이지 무대까지 준비되어 있어 볼거리가 풍부하다 못해 넘치는 이곳을 200% 즐기기 위해 공연 스케줄을 미리 확인하세요. 공연 뿐만 아니라 영화 속 주인공들이 거리를 돌아다니며 더욱 생생한 분위기를 느끼게 해주며, 사진도 찍을 수 있으니 시간을 잘 확인하신다면 더욱 즐겁고 잊지 못할 순간을 만들 수 있을 거예요. 다양한 볼거리들은 키덜트 여행자들은 물론이고, 나이에 상관 없이 모두가 동심으로 돌아간 듯한 기분을 느끼게 해주기 때문에 어린이부터 어른까지 누구나 즐길 수 있는 여행지라고 할 수 있어요. 또한 영화를 배경으로 한 색다르고 짜릿한 어트랙션도 있기 때문에 스릴 넘치는 액티비티를 즐기는 여행자들에게도 꼭 맞는 여행지라고 할 수 있죠. 볼거리, 먹을거리, 체험과 액티비티까지 시간가는 줄 모르고 여러분에게 환상적인 순간을 만들어줄 싱가포르 유니버셜 스튜디오에 꼭 방문해보세요.</p>
                    <p class="detail_point_img">
                        <img src="/images/universal_img02.jpg" alt="유니버셜스튜디오">
                    </p>
                </div>  
                <div id="shareMenu_list_wrap">
                    <ul id="shareMenu_list">
                        <li><img src="/images/share_icon01.png" alt="카카오톡으로공유하기"></li>
                        <li><img src="/images/share_icon02.png" alt="페이스북으로공유하기"></li>
                        <li><img src="/images/share_icon03.png" alt="인스타그램으로공유하기"></li>
                    </ul>
                </div>  
            </section>
            <section id="google_map">
                <h2 class=hidden>구글지도</h2>
            </section>
            <div id="good_Con_wrap">
                <section id="good_Con_inner">
                    <h2 class=hidden>추천여행지</h2>
                    <p class="bar"></p>
                    <p class="detail_title">추천 여행지</p>
                    <ul id="detail_recom_list">
                        <li>
                            <p class="recom_list_img"><img src="/images/recommend_img01.jpg" alt="메가짚"></p>
                            <p class="recom_list_box">
                                <span class="recom_list_title">메가짚</span>
                                <span class="recom_list_text">센토사를 가로지르며 마치 타잔처럼 다양한 자세로 비행</span>
                            </p>
                        </li>
                        <li>
                            <p class="recom_list_img"><img src="/images/recommend_img02.jpg" alt="GX-5익스트림스윙"></p>
                            <p class="recom_list_box">
                                <span class="recom_list_title">GX-5 익스트림스윙</span>
                                <span class="recom_list_text">클릭키의 화려한 야경을 보며 도심에서 즐기는 액티비티</span>
                            </p>
                        </li>
                        <li>
                            <p class="recom_list_img"><img src="/images/recommend_img03.jpg" alt="루지"></p>
                            <p class="recom_list_box">
                                <span class="recom_list_title">루지</span>
                                <span class="recom_list_text">아이도 어른도, 낮에도 밤에도 모두가 즐기는 라이딩</span>
                            </p>
                        </li>
                    </ul>
                    <ul id="good_dot_list">
                        <li>첫번째컨텐츠보기</li>
                        <li>두번째컨텐츠보기</li>
                        <li>세번째컨텐츠보기</li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
    <!-- 액티비티 페이지 끝 -->
   
<?
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>
