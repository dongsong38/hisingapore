<?	
	include "../../../../common.php";
	
	$g5['title'] = "이벤트상세"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //해당서브페이지 카테로그의 공통 상단을 연결합니다.
?>

    <!-- 여행지정보 페이지 시작 -->
        <div id="Con_wrap">
            <section id="Con_inner">
                <h2 class="hidden">이벤트상세페이지</h2>
                 <nav id="indicator">
                    <h3 class="hidden">페이지경로표시</h3>
                    <ul id="indicator_list">
                        <li><img src="/images/home_icon.png" alt="메인"></li>
                        <li>이벤트</li>
                        <li>SNS 리뷰왕 이벤트</li>
                    </ul>
                </nav>
                <div id="event_detail_wrap">
                    <div id="event_infor">
                        <p id="event_infor_state">진행중</p>
                        <p id="event_infor_title">SNS 리뷰왕 이벤트</p>
                        <p id="event_infor_date">2019년 11월 01일 ~ 2019년 12월 31일</p>
                    </div>
                    <div id="event_poster">
                        <img src="/images/event_poster01.jpg" alt="리뷰왕이벤트포스터">
                    </div>
                    <div id="shareMenu_list_wrap">
                        <ul id="shareMenu_list">
                            <li><img src="/images/share_icon01.png" alt="카카오톡으로공유하기"></li>
                            <li><img src="/images/share_icon02.png" alt="페이스북으로공유하기"></li>
                            <li><img src="/images/share_icon03.png" alt="인스타그램으로공유하기"></li>
                        </ul>
                    </div>
                </div>
                <div id="list_btn_wrap">
                    <p id="list_btn"><a href="event.php">목 록</a></p>
                </div>             
            </section>
        </div>
    <!-- 여행지정보 페이지 끝 -->

<?
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>