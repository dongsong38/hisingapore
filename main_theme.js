$(window).load(function(){

    var $themeTitle
    var $themeSubMenu
    var $themeBar
    var themeMenuNum
    var themeBarPosition
    var $themeConImg
    var $themeConText
    var $themeBtn
    
    themeInit()
    themeEvent()
    onThemeImgReset()
    onThemeAni()

    function themeInit(){
        $themeTitle=$(".theme_title")
        $themeSubMenu=$("#theme_submenu_list li a")
        $themeBar=$("#theme_bar")
        $themeConImg=$("#theme_contents_img")
        $themeConText=$("#theme_contents_text_list").children()
        $themeBtn=$("#theme_contents_btn")

        $themeSubMenu.eq(0).addClass("selected")
        $themeBar.css({"left":0+($themeSubMenu.parent().innerWidth()/2)-($themeBar.innerWidth()/2)})
        $themeConText.hide()
        $themeConText.eq(0).show()
    }

    function themeEvent(){
        $themeSubMenu.on("click",onThemeMenuClick)
        $(window).on("resize",onThemeResize)
        $themeBtn.on("mouseenter",onThemeBtnOver)
        $themeBtn.on("mouseleave",onThemeBtnOut)
        $(window).on("resize",onThemeImgChange)
        $(document).on("scroll",onThemeAni)
    }

    function onThemeMenuClick(){
        $themeSubMenu.removeClass("selected")
        $(this).addClass("selected")

        themeMenuNum=$themeSubMenu.index($(this))

        // 테마서브메뉴바 이동 애니메이션 
        themeBarPosition=$(this).parent().position().left+($(this).parent().innerWidth()/2)-($themeBar.innerWidth()/2)
        $themeBar.stop()
        $themeBar.animate({"left":themeBarPosition},500,"easeOutCubic")

        // 서브메뉴 클릭시 이미지와 텍스트 교체
        onThemeImgChange()
        $themeConText.hide()
        $themeConText.eq(themeMenuNum).show()
    }

    function onThemeResize(){  // window resize 할 때도 서브메뉴바 위치 유동적으로 잡혀있기 위한 함수 
        $themeBar.css({"left":0+($themeSubMenu.parent().innerWidth()/2)-($themeBar.innerWidth()/2)})
        themeBarPosition=$themeSubMenu.eq(themeMenuNum).parent().position().left+($themeSubMenu.eq(themeMenuNum).parent().innerWidth()/2)-($themeBar.innerWidth()/2)
        $themeBar.css({"left":themeBarPosition})
    }

    function onThemeBtnOver(){
        $themeBtn.children("a").css({"color":"#2f1159"})
        $("#theme_more_btn").stop()
        $("#theme_more_btn").animate({"width":120},300,"easeOutCubic")

        $themeConImg.addClass("selected")
    }

    function onThemeBtnOut(){
        $themeBtn.children("a").css({"color":"white"})
        $("#theme_more_btn").stop()
        $("#theme_more_btn").animate({"width":0},300,"easeOutCubic")
        $themeConImg.removeClass("selected")
    }

    function onThemeImgChange(){
        if($(window).innerWidth()<=480){            
            $themeConImg.css({"background":"url('/images/theme_mobileimg0"+themeMenuNum+".gif')"})
        }else{
            $themeConImg.css({"background":"url('/images/theme_img0"+themeMenuNum+".jpg') no-repeat","background-size":"cover"})
        }
    }

    function onThemeImgReset(){
        if($(window).innerWidth()<=480){            
            $themeConImg.css({"background":"url('/images/theme_mobileimg00.gif')"})
        }else{
            $themeConImg.css({"background":"url('/images/theme_img00.jpg') no-repeat","background-size":"cover"})
        }
    }

    function onThemeAni(){
        if($(document).scrollTop()>1700){
            $themeTitle.animate({"top":0,"opacity":1},700,"easeOutBack")
            $themeConText.animate({"top":0,"opacity":1},1000,"easeOutBack")    
        }
    }


})