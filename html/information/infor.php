<?	
	include "../../../../common.php";
	
	$g5['title'] = "여행지정보"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //해당서브페이지 카테로그의 공통 상단을 연결합니다.
?>
  
    
    <!-- 여행지정보 페이지 시작 -->
    <div id="subPage_wrap">
        <div id="subTab_wrap">
            <nav id="subTap_item3_inner">
                <h2 class="hidden">여행정보하위탭메뉴</h2>
                <ul id="subTab_item3_list">
                    <li class=selected><a href="infor.php">여행지 정보</a></li>
                    <li><a href="prepare.php">여행 준비</a></li>
                    <li><a href="usefulsite.php">유용한 사이트</a></li>
                </ul>
            </nav>
        </div>
        <div id="Con_wrap">
            <section id="Con_inner">
                <h2 class="hidden">여행지정보페이지</h2>
                <nav id="indicator">
                    <h3 class="hidden">페이지경로표시</h3>
                    <ul id="indicator_list">
                        <li><img src="/images/home_icon.png" alt="메인"></li>
                        <li>여행정보</li>
                        <li>여행지정보</li>
                    </ul>
                </nav>
                <div id="Con_title">
                    <p>아는 만큼 보인다! 싱가포르 알고가기</p>
                </div>
                <div id="infor_text">
                    <p>싱가포르는 동남아시아, 말레이시아 반도의 끝에 위치한 섬나라이자 항구 도시로 이루어진 도시 국가예요. 북쪽의 조호르 해협과 남쪽의 싱가포르 해협을 두고 각각 말레이시아, 인도네시아와 약간 분리되어 있어요. 싱가포르는 우리나라 부산의 면적보다도 조금 안되는 작은 도시 국가이자, 63개의 섬으로 이루어진 항구도시로서, 본섬에서 즐기는 시티 라이프는 물론이고, 센토사와 같은 주요 섬에서는 따뜻한 남쪽 나라에서의 휴양까지 여러 테마로 여행을 즐길 수 있는 매력적인 곳이예요.</p>
                </div>
                <div id="inforCon_list_wrap">
                    <ul id="inforCon_list">
                        <li>
                            <p class="infor_left_img"><img src="/images/inforSub_img01.jpg" alt="싱가포르차이나타운"></p>
                            <p class="inforCon_textbox inforCon_right_textbox">
                                <span class="inforCon_numbox">1</span>
                                <span class="inforCon_title">다양한 문화가 공존하는 도시국가</span>
                                <span class="inforCon_text">싱가포르는 다민족 국가로 리틀인디아, 아랍스트리트, 차이나타운 등의 거리에서 다양한 음식을 맛보고 여러 나라의 문화를 느낄 수 있는 매력이 있는 여행지예요. 특히 비교적 가까운 거리에 관광 명소들이 위치해 있어 자유여행 또는 여행 초보자들에게 아주 좋은 여행이지기도 해요. 리틀인디아는 마치 작은 인도에 와 있는 듯한 느낌을 주기도 하고, 차이나타운에서는 현지인들의 생활을 옅볼 수 있답니다. 다양한 문화와 더불어 여러나라의 음식을 경험하는 것은 더욱 잊지 못할 여행을 만들어 줄 수 있겠죠. </span>
                            </p>
                        </li>
                        <li>
                            <p class="infor_right_img"><img src="/images/inforSub_img02.jpg" alt="싱가포르실로소비치"></p>
                            <p class="inforCon_textbox inforCon_left_textbox">
                                <span class="inforCon_numbox">2</span>
                                <span class="inforCon_title">63개의 섬으로 이루어진 나라</span>
                                <span class="inforCon_text">싱가포르에는 중심 섬을 둘러싼 섬들이 자그마치 62개나 된답니다. 그 중 가장 크고 유명한 센토사 섬은 유니버셜 스튜디오, 루지, 번지점프 등 여행에 잊지 못할 추억을 안겨줄 짜릿한 액티비티들이 기다리고 있으며, 그 외에도 폴라우 우빈, 세인트 존스 섬, 시스터즈 섬 등이 있어요. 즉, 여행객들에게는 태양 아래 다양한 즐길거리가 있다는 뜻이겠죠? 알차고 신나는 여행을 원한다면 센토사 섬으로, 여유로운 휴양여행을 즐기고 싶다면 관광객들이 많이 찾지 않는 한가로운 섬으로 여행을 계획해보세요. </span>
                            </p>
                        </li>
                        <li>
                            <p class="infor_left_img"><img src="/images/inforSub_img03.jpg" alt="싱가포르머라이언파크"></p>
                            <p class="inforCon_textbox inforCon_right_textbox">
                                <span class="inforCon_numbox">3</span>
                                <span class="inforCon_title">싱가포르의 상징 머라이언</span>
                                <span class="inforCon_text">싱가포르의 상징인 머라이언은 놓치지 말아야 할 포인트예요. 'Merlion'은 lion(사자)에 mermaid(인어)를 합성한 단어로, 사자의 도시인 싱가포르와 트마섹(바닷가 마을)이라고 불렸던 고대 싱가포르에서 유래되었다고 해요. 머라이언은 싱가포르의 트레이드 마크가 되었으며, 각종 기념품에서도 많이 볼 수 있는 대표적인 상징물이라고 할 수 있어요. 싱가포르 4곳에는 조금씩 다른 매력의 머라이언 상이 위치해 있는데, 여행 중에 머라이언 상을 찾아보는 재미를 느껴보는 것은 어떨까요?</span>
                            </p>
                        </li>
                        <li>
                            <p class="infor_right_img"><img src="/images/inforSub_img04.jpg" alt="싱가포르클라우드포레스트"></p>
                            <p class="inforCon_textbox inforCon_left_textbox">
                                <span class="inforCon_numbox">4</span>
                                <span class="inforCon_title">세계에서 가장 푸른 도시 중 하나</span>
                                <span class="inforCon_text">고층 빌딩들의 도시라고 잘 알려진 싱가포르는 울창한 초목으로 채워진 도시이기도 해요. ‘가든스 바이 더 베이’는 세계에서 가장 큰 인공정원으로 낮에는 세계 최대 규모의 유리 온실 정원 ‘클라우드 포레스트’에서 시원한 산책을 즐기고, 밤에는 환상적인 슈퍼트리 쇼를 감상하며 낭만적인 밤을 보내보세요. 또한 1869년 설립된 이후 150년이 넘는 역사를 가지고 있으며, 2015년 유네스코 세계 문화유산 목록에 오른 ‘보타닉 가든’도 있으니, 식물원을 좋아하신다면 꼭 방문해보세요. </span>
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