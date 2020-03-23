<?	
	include "../../../../common.php";
	
	$g5['title'] = "여행준비"; //커스텀페이지의 타이틀을 입력합니다.
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
                    <li><a href="infor.php">여행지 정보</a></li>
                    <li class=selected><a href="prepare.php">여행 준비</a></li>
                    <li><a href="usefulsite.php">유용한 사이트</a></li>
                </ul>
            </nav>
        </div>
        <div id="Con_wrap">
            <section id="Con_inner">
                <h2 class="hidden">여행준비페이지</h2>
                <nav id="indicator">
                    <h3 class="hidden">페이지경로표시</h3>
                    <ul id="indicator_list">
                        <li><img src="/images/home_icon.png" alt="메인"></li>
                        <li>여행정보</li>
                        <li>여행준비</li>
                    </ul>
                </nav>
                <div id="Con_title">
                    <p>여행 준비에 꼭 필요한, 여행 사전 정보</p>
                </div>
                <div id="prepare_list_wrap">
                    <ul id="prepare_list">
                        <li>
                            <p class="prepare_img"><img src="/images/prepare_img01.png" alt="기후아이콘"></p>
                            <p class="prepare_title">기후</p>
                            <p class="prepare_text">- 싱가포르는 1년 내내 30도 안팍으로 덥기 때문에 그에 대비한 옷차림을 준비하셔야 해요.<br>- 11월~2월은 비가 가장 많이 내리는 우기로 스콜을 대비한 준비를 하시는 것이 좋아요.<br>- 3월~5월, 9월~10월 건기의 여행에서는 미세먼지와 유사한 헤이즈(haze)수치를 꼭 확인하세요.<br>- 6월~8월은 가장 더운 혹서기이지만, 비와 헤이즈를 피할 수 있어 여행 최적기로 볼 수 있어요.</p>
                            <p class="prepare_text_480">- 1년 내내 30도 안팍의 온화한 기후<br>- 11월~2월은 비가 가장 많이 내리는 우기<br>- 3월~5월,9월~10월 건기 여행시 헤이즈(haze)수치 확인<br>- 6월~8월 여행 최적기</p>
                        </li>
                        <li>
                            <p class="prepare_img"><img src="/images/prepare_img02.png" alt="거리아이콘"></p>
                            <p class="prepare_title">거리</p>
                            <p class="prepare_text">- 인천공항에서 싱가포르 창이공항까지는 직항으로 약 6시간 30분이 걸려요.<br>- 밤 비행기를 타면 현지시간으로 새벽 5시에 도착해 숙박없이 꽉 찬 일정을 보낼 수 있어요.</p>
                            <p class="prepare_text_480">- 인천~싱가포르는 직항기준 약 6시간 30분<br>- 밤 비행기를 타면 숙박없이 꽉 찬 일정 가능</p>
                        </li>
                        <li>
                            <p class="prepare_img"><img src="/images/prepare_img03.png" alt="비자아이콘"></p>
                            <p class="prepare_title">비자</p>
                            <p class="prepare_text">- 싱가포르는 관광 목적일시 90일 무비자 체류가 가능해요.</p>
                            <p class="prepare_text_480">- 관광 목적일시 90일 무비자 체류 가능</p>
                        </li>
                        <li>
                            <p class="prepare_img"><img src="/images/prepare_img04.png" alt="화폐아이콘"></p>
                            <p class="prepare_title">화폐</p>
                            <p class="prepare_text">- 싱가포르 달러를 사용하며, 1싱달러가 약 800원선이라고 생각하면 편해요.<br>- 가격표에 세금은 포함되지 않는 경우가 많아 계산시, 금액이 예상보다 많이 나올 수도 있어요.<br>- 그리고 싱가포르에는 팁 문화가 없어요.</p>
                            <p class="prepare_text_480">- 싱가포르 달러 사용 대략 1SD=800원<br>- 가격표에 세금이 포함되지 않으니 주의<br>- 팁 문화는 없으니 참고</p>
                        </li>
                        <li>
                            <p class="prepare_img"><img src="/images/prepare_img05.png" alt="전압아이콘"></p>
                            <p class="prepare_title">전압</p>
                            <p class="prepare_text">- 240V로 3핀을 사용해야 해요. 여행용 변압기에 대부분 포함이 되어있을 거예요.<br>- 변압기는 데이터 로밍시 각 통신사에서 무료 대여가 가능한 경우가 많으니 꼭 알아보세요.<br>- 우리나라의 220V를 꾸겨 넣어도 들어가며 작동도 하지만, 권장하지는 않는다고 해요.</p>
                            <p class="prepare_text_480">- 240V로 3핀 사용<br>- 우리나라의 220V를 넣어도 가능하지만 권장하지 않음</p>
                        </li>
                        <li>
                            <p class="prepare_img"><img src="/images/prepare_img06.png" alt="지하철아이콘"></p>
                            <p class="prepare_title">MRT</p>
                            <p class="prepare_text">- 싱가포르의 지하철인 MRT는 주요 관광지 대부분이 MRT로 연결되어 있어 이동이 매우 편리해요.<br>- 자유여행 시에는 지하철을 많이 이용하게 되니, 만능 교통카드인 이지링크를 구입하면 편리해요.<br>- 우리나라 티머니와 같은 개념이며 세븐일레븐에서 판매하고 있으니 언제든 쉽게 구입이 가능해요.</p>
                            <p class="prepare_text_480">- 주요 관광지 대부분이 지하철 MRT로 연결되어 매우 편리<br>- 자유여행시, 만능 교통카드인 이지링크 카드 구매<br>- 이지링크는 세븐일레븐에서 언제든 쉽게 구입이 가능</p>
                        </li>
                        <li>
                            <p class="prepare_img"><img src="/images/prepare_img07.png" alt="택시아이콘"></p>
                            <p class="prepare_title">택시</p>
                            <p class="prepare_text">- 택시의 경우, 색상별로 기본요금이 다르니 주의하세요.<br>- 우리나라 택시어플과 비슷한 카셰어링 서비스를 이용하면 택시를 보다 편리하게 이용가능해요.<br>- 우버(UBER)와 그랩(GRAP) 앱을 통해 목적지를 설정하고 호출할 수 있어요.</p>
                            <p class="prepare_text_480">- 택시의 경우 색상별로 기본요금이 상이<br>- 택시어플인 카셰어링 서비스를 이용하면 편리<br>- 우버(UBER)와 그랩(GRAP)앱을 미리 다운받아 사용</p>
                        </li>
                        <li>
                            <p class="prepare_img"><img src="/images/prepare_img08.png" alt="음식아이콘"></p>
                            <p class="prepare_title">음식</p>
                            <p class="prepare_text">- 로컬 요리의 경우 간이 세며 향신로가 많이 사용되지만 더운 날씨와 잘 어울려서 도전할만 해요.<br>- 또한 싱가포르는 다민족 국가로 다양한 세계요리를 맛 볼 수 있어 음식에 대한 걱정을 덜 수 있어요.</p>
                            <p class="prepare_text_480">- 로컬 요리의 경우 간이 세고 향신료가 많이 사용<br>- 다민족 국가로 다양한 세계요리가 있어 음식에 대한 걱정 ↓</p>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- 여행준비 페이지 끝 -->

<?
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>