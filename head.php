<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
/*
if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

지금은 반응형으로 모바일까지 작업을 해놓았기 때문에 이 조건문을 주석처리 해두었다.
모바일의 레이아웃을 확 변경하고 싶은 경우 이렇게 모바일페이지만 모아둔 폴더를 만들어서 작업한다.

 * */

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

	
<!-- 바로가기메뉴 시작 -->
<ul class="skipmenu_list">
    <li><a href="#">메뉴바로가기</a></li>
    <li><a href="#">본문바로가기</a></li>
    <li><a href="#">이벤트바로가기</a></li>
    <li><a href="#">하단바로가기</a></li>
</ul>
<!-- 바로가기메뉴 끝 -->	
<div id="header_wrap">
    <header>
        <h1 id="logo"><a href="/index.php"><img src="/images/logo_two.png" alt="하이싱가포르"></a></h1>

        <nav id="mainmenu">
            <h2 class="hidden">메인메뉴</h2>
            <ul id="mainmenu_list">
                <li><a href="#">여행정보</a>
                    <ul class="submenu_list">
                        <li><a href="/theme/custom/html/information/infor.php">여행지정보</a></li>
                        <li><a href="/theme/custom/html/information/prepare.php">여행준비</a></li>
                        <li><a href="/theme/custom/html/information/usefulsite.php">유용한사이트</a></li>
                    </ul>
                </li>
                <li><a href="#">테마여행</a>
                    <ul class="submenu_list">
                        <li><a href="/theme/custom/html/triptheme/theme.php">액티비티</a></li>
                        <li><a href="/theme.php">싱가폴의밤</a></li>
                        <li><a href="/theme.php">미식여행</a></li>
                        <li><a href="/theme.php">도심투어</a></li>
                    </ul>
                </li>
                <li><a href="#">이벤트</a>
                    <ul class="submenu_list">
                        <li><a href="/theme/custom/html/event/event.php">이벤트</a></li>
                    </ul>
                </li>
                <li><a href="#">고객센터</a>
                    <ul class="submenu_list">
                        <li><a href="http://hisingapore.dothome.co.kr/bbs/board.php?bo_table=qa">Q&A</a></li>
                        <li><a href="http://hisingapore.dothome.co.kr/bbs/board.php?bo_table=free">고객의소리</a></li>
                    </ul>
                </li>
            </ul>
            <span id="main_bar"></span>
        </nav>

        <nav id="gnb">
            <ul id="topmenu_list">
                <?php if ($is_member) {  ?>
    
                <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">마이페이지</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
                <?php if ($is_admin) {  ?>
                <?php }  ?>
                <?php } else {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
                
                <?php }  ?>
            </ul>
        </nav>

        <nav id="mobilemenu">
            <h2 class="mobilemenu_icon"><img src="/images/mobilemenu.png" alt="모바일메뉴"></h2>
            <div id="mobilemenu_wrap">
                <p>환영합니다.<br>로그인 해주세요.
                    <span id="mobileclose_btn"><img src="/images/closebtn.png" alt="닫기"></span>
                </p>
                <ul id="mobileloginmenu">
                    <li>로그인</li>
                    <li>회원가입</li>
                </ul>
                <ul id="mobilemenu_list">
                    <li><a href="/index.php">HOME</a></li>
                    <li>여행정보
                        <span class="mobile_icon"><img src="/images/mobilemenu_icon04.png" alt=""></span>
                        <ul class="mobilesubmenu_list">
                            <li><a href="/infor.php">여행지정보</a></li>
                            <li><a href="/prepare.php">여행준비</a></li>
                            <li><a href="/usefulsite.php">유용한사이트</a></li>
                        </ul>
                    </li>
                    <li>테마여행
                        <span class="mobile_icon"><img src="/images/mobilemenu_icon04.png" alt=""></span>
                        <ul class="mobilesubmenu_list">
                            <li><a href="/theme_detail.php">액티비티</a></li>
                            <li>싱가폴의밤</li>
                            <li>미식여행</li>
                            <li>도심투어</li>
                        </ul>
                    </li>
                    <li>이벤트
                        <span class="mobile_icon"><img src="/images/mobilemenu_icon04.png" alt=""></span>
                        <ul class="mobilesubmenu_list">
                            <li><a href="/event.php">이벤트</a></li>
                        </ul>
                    </li>
                    <li>고객센터
                        <span class="mobile_icon"><img src="/images/mobilemenu_icon04.png" alt=""></span>
                        <ul class="mobilesubmenu_list">
                            <li>Q&A</li>
                            <li>고객의소리</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div id="sub_bg"></div>
    
</div>





	<?

		/*
			서브 컨텐츠 페이지를 제외한  게시판, faq, 회원관련 등 그누보드 내부 프로그램 페이지 상단연결
		    ( 각 서브 컨텐츠 페이지 상단은 해당카테고리폴더 header.php 에서 각각 설정)			

		*/

		if(!defined('_INDEX_') && $title_view != "no"){ // if문을 수정하지 마십시오.			

			// 게시판 타이틀 정비
			if($bo_table){
				$g5['title'] = $board['bo_subject'];
			}
			
			//faq 타이틀 정비
			if($fm_id){
				$g5['title'] = "자주하시는 질문";
			}
			
			
	?>



		<section id="sub_visual">
			
					
		</section>



		<section id="sub_wrapper">			

			<div class="scontents">


	<?}?>