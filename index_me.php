<? include_once $_SERVER["DOCUMENT_ROOT"]."/inc/start.html" ?>
    <!-- 바로가기메뉴 시작 -->
    <ul class="skipmenu_list">
        <li><a href="#">메뉴바로가기</a></li>
        <li><a href="#">본문바로가기</a></li>
        <li><a href="#">이벤트바로가기</a></li>
        <li><a href="#">하단바로가기</a></li>
    </ul>
    <!-- 바로가기메뉴 끝 -->
    <!-- 헤더영역 시작 -->
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/inc/header.html" ?>    
    <!-- 헤더영역 끝 -->
    <!-- 비주얼영역 시작 -->
    <div id="visual_wrap">
        <ul id="visual_list">
            <li><img class="mainvisual" src="/images/visual_00.jpg" alt="멀라이언파크전경"></li>
            <li><img class="mainvisual" src="/images/visual_01.jpg" alt="마리나베이샌즈전경"></li>
            <li><img class="mainvisual" src="/images/visual_02.jpg" alt="가든스바이더베이야경"></li>
        </ul>
        <div class="visual_btn" id="visual_btn_prev">
            <span class="btn_bg"></span>
            <span class="btn_img"><img src="/images/pre_icon.png" alt="이전비주얼보기"></span>
        </div>
        <div class="visual_btn" id="visual_btn_next">
            <span class="btn_bg"></span>
            <span class="btn_img"><img src="/images/next_icon.png" alt="이전비주얼보기"></span>
        </div>
    </div>

    <div id="mobile_visual_wrap">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="/images/visual_mobile_00.jpg" alt="멀라이언파크전경"></div>
                <div class="swiper-slide"><img src="/images/visual_mobile_01.jpg" alt="멀라이언파크전경"></div>
                <div class="swiper-slide"><img src="/images/visual_mobile_02.jpg" alt="멀라이언파크전경"></div>
            </div>
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
    <!-- 비주얼영역 끝 -->
    <!-- best여행지 시작 -->
    <div id="best_wrap">
        <section id="best_inner">
            <h2 class="contents_title best_title">BEST 여행지</h2>
            <div id="best_list_wrap">
                <ul class="best_list">
                    <li>
                        <a href="/theme_detail.php">
                            <p class="best_img"><img src="/images/best_img00.gif" alt="유니버셜스튜디오"></p>
                            <p class="best_title">유니버셜스튜디오</p>
                            <p class="best_text">영화 속에 들어온 것 같은 환상적인 곳에서 스릴 넘치는 놀이기구를 즐겨보세요.</p>
                        </a>
                    </li>
                    <li>
                        <p class="best_img"><img src="/images/best_img01.gif" alt="점보시푸드"></p>
                        <p class="best_title">점보시푸드</p>
                        <p class="best_text">싱가포르의 칠리크랩을 맛보기 위해 꼭 들러야 할 곳이니 잊지마세요.</p>
                    </li>
                    <li>
                        <p class="best_img"><img src="/images/best_img02.gif" alt="리버크루즈"></p>
                        <p class="best_title">리버크루즈</p>
                        <p class="best_text">도심 속에서 잔잔한 물결을 따라 보트 위에서 즐기는 야경의 매력에 빠져보세요.</p>
                    </li>
                    <li>
                        <p class="best_img"><img src="/images/best_img03.gif" alt="차이나타운"></p>
                        <p class="best_title">차이나타운</p>
                        <p class="best_text">여러 사원과 특색있는 거리에서 현지인의 일상을 엿보고 경험해보세요.</p>
                    </li>
                </ul>
                <!-- <ul class="best_list">
                    <li>
                        <p class="best_img"><img src="/images/best_img04.gif" alt="야쿤카야토스트"></p>
                        <p class="best_title">야쿤카야토스트</p>
                        <p class="best_text">바삭한 빵에 카야잼을 발라 먹는 싱가포르식 토스트를 즐겨보세요.</p>
                    </li>
                    <li>
                        <p class="best_img"><img src="/images/best_img05.gif" alt="마리나베이센즈"></p>
                        <p class="best_title">마리나베이센즈</p>
                        <p class="best_text">싱가포르의 랜드마크이자 쇼핑, 맛집 등 모든 것이 밀집된 대표 관광지를 반드시 둘러보세요.</p>
                    </li>
                    <li>
                        <p class="best_img"><img src="/images/best_img06.gif" alt="리틀인디아"></p>
                        <p class="best_title">리틀인디아</p>
                        <p class="best_text">다민족 국가로 다양한 문화가 공존하는 싱가포르에서 작은 인도를 만나보세요.</p>
                    </li>
                    <li>
                        <p class="best_img"><img src="/images/best_img07.gif" alt="라우파삿 호커센터"></p>
                        <p class="best_title">라우파삿 호커센터</p>
                        <p class="best_text">다양한 요리와 사태 굽는 냄새가 나는 거리에서 현지 분위기를 느껴보세요.</p>
                    </li>  
                </ul> -->
            </div>
        </section>
    </div>
    <!-- best여행지 끝 -->
    <!-- today싱가포르 시작 -->
    <div id="today_wrap">
        <section id="today_inner">
            <h2 class="contents_title today_title">TODAY 싱가포르</h2>
            <ul id="today_list">
                <li>
                    <img class="today_icon" src="/images/today_icon01.gif" alt="시간정보">
                    <p class="today_text">오후 05:17</p>
                </li>
                <li>
                    <img class="today_icon" src="/images/today_icon02.gif" alt="날씨정보">
                    <p class="today_text">맑음, 26°/31°</p>
                </li>
                <li>
                    <img class="today_icon" src="/images/today_icon03.gif" alt="환율정보">
                    <p class="today_text">1SGD=853.70원</p>
                </li>
            </ul>
        </section>
    </div>
    <!-- today싱가포르 끝 -->
    <!-- 여행정보 시작 -->
    <div id="infor_wrap">
        <section id="infor_inner">
            <h2 class="contents_title infor_title">여행정보</h2>

            <div id="infor_list_wrap">
                <ul id="infor_list">
                    <li><a href="/infor.php">
                            <span class="titile_text">여행지 정보</span>
                            <span class="detail_text">자세히 보기</span>
                            <span class="line_bottom"></span>
                        </a>
                    </li>
                    <li><a href="/prepare.php">
                            <span class="titile_text">여행 준비</span>
                            <span class="detail_text">자세히 보기</span>
                            <span class="line_bottom"></span>
                        </a>
                    </li>
                    <li><a href="/usefulsite.php">
                            <span class="titile_text">유용한 사이트</span>
                            <span class="detail_text">자세히 보기</span>
                            <span class="line_bottom"></span>
                        </a>
                    </li>
                </ul>
            </div>

            <div id="infor_swiper_wrap">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <span class="infor_swiper_img"><img src="/images/infor_img01.gif" alt=""></p>
                            <span class="titile_text"><a href="/infor.php">여행지 정보</a></p>
                        </div>
                        <div class="swiper-slide">
                            <span class="infor_swiper_img"><img src="/images/infor_img02.gif" alt=""></p>
                            <span class="titile_text"><a href="/prepare.php">여행 준비</a></p>
                        </div>
                        <div class="swiper-slide">
                            <span class="infor_swispaner_img"><img src="/images/infor_img03.gif" alt=""></p>
                            <span class="titile_text"><a href="/usefulsite.php">유용한 사이트</a></p>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
    </div>
    <!-- 여행정보 끝 -->
    <!-- 테마여행 시작 -->
    <div id="theme_wrap">
        <section id="theme_inner">
            <h2 class="contents_title theme_title">테마여행</h2>
            <nav id="theme_submenu">
                <ul id="theme_submenu_list">
                    <li><a href="#;">액티비티</a></li>
                    <li><a href="#;">싱가폴의 밤</a></li>
                    <li><a href="#;">미식여행</a></li>
                    <li><a href="#;">도심투어</a></li>
                </ul>
                <span id="theme_bar"></span>
            </nav>
        </section>
        <section id="theme_contents_wrap">
            <h2 class="hidden">테마여행컨텐츠소개</h2>
            <div id="theme_contents_img"></div>
            <div id="theme_contents_textbox_wrap">
                <div id="theme_contents_textbox_inner">
                    <ul id="theme_contents_text_list">
                        <li>
                            <p class="theme_contents_title">액티비티</p>
                            <p class="theme_contents_text">스릴을 즐기는 여행자를 위한 짜릿한 액티비티부터 키덜트 여행자도 즐길 수 있는 체험형 어트랙션까지 색다른 경험으로 잊지 못할 순간을 만들어보세요.</p>
                        </li>
                        <li>
                            <p class="theme_contents_title">싱가폴의 밤</p>
                            <p class="theme_contents_text">낮보다 화려한 싱가포르의 밤을 제대로 만끽할 수 있는 방법은 다양해요. 연인과 여유를 즐길 수도 있고 친구들과 클럽에서 신나는 밤을 즐길 수도 있답니다.</p>
                        </li>
                        <li>
                            <p class="theme_contents_title">미식여행</p>
                            <p class="theme_contents_text">여행도 식후경! 여행에서 맛집이 빠질 수는 없겠죠? 현지인들에게도 많은 사랑을 받는 카야토스트부터 매콤달콤 칠리크랩까지 여행맛집 9곳을 소개합니다.</p>
                        </li>
                        <li>
                            <p class="theme_contents_title">도심투어</p>
                            <p class="theme_contents_text">싱가포르는 화려한 도시의 시티라이프 외에도 차이나타운, 아랍스트리트 등 여러 거리에서 다양한 문화를 경험할 수 있는 다채로운 매력을 가진 곳이예요. </p>
                        </li>

                    </ul>
                    <p id="theme_contents_btn">
                        <span id="theme_more_btn"></span>
                        <a href="/theme.php">자세히 보기</a>
                    </p>
                </div>
            </div>
        </section>
    </div>
    <!-- 테마여행 끝 -->
    <!-- 이벤트 시작 -->
    <div id="event_wrap">
        <section id="event_inner">
            <h2 class="contents_title event_title">이벤트</h2>
            <ul id="event_list">
                <li>
                    <p class="event_textbox">
                        <span class="event_text event_title">SNS 리뷰왕 이벤트</span>
                        <span class="event_text event_subtitle">#인스타그램 해시태그 이벤트</span>
                        <span class="event_text event_date">2019.11.01~2019.12.31</span>
                    </p>
                </li>
                <li>
                    <p class="event_textbox">
                        <span class="event_text event_title">SNS 리뷰왕 이벤트</span>
                        <span class="event_text event_subtitle">#인스타그램 해시태그 이벤트</span>
                        <span class="event_text event_date">2019.11.01~2019.12.31</span>
                    </p>
                </li>
                <li>
                    <p class="event_textbox">
                        <span class="event_text event_title">SNS 리뷰왕 이벤트</span>
                        <span class="event_text event_subtitle">#인스타그램 해시태그 이벤트</span>
                        <span class="event_text event_date">2019.11.01~2019.12.31</span>
                    </p>
                </li>
            </ul>
        </section>
    </div>
    <!-- 이벤트 끝 -->
    <!-- 하단영역 시작 -->
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/inc/footer.html" ?> 
    <!-- 하단영역 끝 -->
    <!-- 바로가기 메뉴 시작 -->
    <div id="quick_top_menu">
        <img src="/images/quick_top_btn.png" alt="맨위로가기">
    </div>
    <!-- 바로가기 메뉴 끝 -->
</body> 
</html>