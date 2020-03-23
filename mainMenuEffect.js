$(window).load(function(){
    mainMenuEffect()
    mobileMenuEffect()
})

function mainMenuEffect(){
    var $mainMenu
    var $loginMenu
    var $subMenu
    var $subBg
    var $headerWrap
    var $mainBar
    var mainBarPosition

    mainMenuInit()
    mainMenuEvent()
    onScrollFix()

    function mainMenuInit(){
        $mainMenu=$("#mainmenu_list>li>a")
        $loginMenu=$("#topmenu_list>li>a")
        $subMenu=$(".submenu_list")
        $subBg=$("#sub_bg")
        $headerWrap=$("#header_wrap")
        $mainBar=$("#main_bar")
    }

    function mainMenuEvent(){
        $mainMenu.on("mouseenter focus",onMainMenuOver)
        $headerWrap.on("mouseleave",onMainMenuOut);
        $subMenu.children().on("mouseenter",onSubMenuOver)
        $("#mainmenu_list").children().last().on("focusout",onMainMenuOut) // 탭메뉴로 이동시 포커스 아웃
        $(window).on("scroll",onScrollFix)
    }

    function onSubMenuOver(){  // 서브메뉴를 이동해도 해당 메인메뉴의 오버효과를 적용 함수
        $mainMenu.removeClass("selected")
        $(this).parent().prev().addClass("selected")

        mainBarPosition=$(this).parent().parent().position().left+($(this).parent().parent().innerWidth()/2)-($mainBar.innerWidth()/2)
        $mainBar.show()
        $mainBar.stop()
        $mainBar.animate({"left":mainBarPosition},300,"easeOutCubic")
    }

    function onMainMenuOver(){ 
        $mainMenu.removeClass("selected")
        $(this).addClass("selected")

        mainBarPosition=$(this).parent().position().left+($(this).parent().innerWidth()/2)-($mainBar.innerWidth()/2)
        $mainBar.show()
        $mainBar.stop()
        $mainBar.animate({"left":mainBarPosition},300,"easeOutCubic")

        whiteHeader()
        subBgOver()
    }

    function onMainMenuOut(){ 
        $mainMenu.removeClass("selected")
        $mainBar.hide()

        if($(document).scrollTop()>0){
            whiteHeader()
            subBgOut()
        }else{
            purpleHeader()
            subBgOut()
        }
    }

    function onScrollFix(){
        if($(document).scrollTop()>0){
            whiteHeader()
        }else{
            purpleHeader()    
        }
    }

    function subBgOver(){  // 서브bg와 서브메뉴 내려오는 함수
        $subBg.show()
        $subBg.stop()
        $subBg.animate({"height":200,"opacity":1},500,"easeOutCubic")
        
        $subMenu.show()
        $subMenu.stop()
        $subMenu.animate({"opacity":1},500,"easeOutCubic")
    }

    function subBgOut(){  // 서브bg와 서브메뉴 올라가는 함수
        $subBg.stop()
        $subBg.animate({"height":1,"opacity":0},500,"easeOutCubic")

        $subMenu.css({"opacity":0})
        $subMenu.hide()
    }

    function whiteHeader(){  // 헤더가 흰색일 때 함수
        $mainMenu.css({"color":"#27252F"})
        $loginMenu.css({"color":"#27252F"})

        $("#logo").children().children().css({"top":0})  
        $("#mobilemenu").children().children().css({"top":-30})  

        $headerWrap.css({"border-bottom":"solid 1px #e3e3e3"}) 
        $headerWrap.stop()
        $headerWrap.animate({"background-color":"rgba(255,255,255,1)"},200,"easeOutCubic")
    }

    function purpleHeader(){
        $mainMenu.css({"color":"white"})
        $loginMenu.css({"color":"white"})

        $("#logo").children().children().css({"top":-35})
        $("#mobilemenu").children().children().css({"top":0})

        $headerWrap.css({"border-bottom":"none"})
        $headerWrap.stop()
        $headerWrap.animate({"background-color":"rgba(73,10,115,0.7)"},200,"easeOutCubic")
    }


}


// 모바일메뉴 작동 

function mobileMenuEffect(){
    var $mobileMenuWrap
    var $mobileBtn // 햄버거메뉴 아이콘
    var $mobileCloseBtn //모바일메뉴 닫기 아이콘
    var $mobileGrayLayer=$("<div id='mobile_graylayer'></div>")
    var mobileMenuWidth=$(window).innerWidth()*0.87

    var openHeight
    var closeHeight=55
    var $mobileMenu // 메인메뉴
    var $mobileIcon // 모바일 화살표 아이콘

    mobileMenuInit()
    mobileMenuEvent()

    function mobileMenuInit(){
        $mobileMenuWrap=$("#mobilemenu")
        $mobileBtn=$(".mobilemenu_icon") 
        $mobileCloseBtn=$("#mobileclose_btn")  
        $mobileGrayLayer=$("<div id='mobile_graylayer'></div>")
        mobileMenuWidth=$(window).innerWidth()*0.87

        openHeight
        closeHeight=55
        $mobileMenu=$("#mobilemenu_list").children() 
        $mobileIcon=$(".mobile_icon") 

        $mobileMenuWrap.css({"width":mobileMenuWidth,"height":$(window).innerHeight(),"right":-mobileMenuWidth})
    }

    function mobileMenuEvent(){
        $mobileBtn.on("click",mobileMenuOpen)
        $mobileCloseBtn.on("click",mobileMenuClose)
        $mobileMenu.on("click",onMobileMenuClick)
    }
    
    function mobileMenuOpen(){
        $("body").css({"overflow":"hidden"})
        $mobileGrayLayer.show()       
        $mobileGrayLayer.appendTo($("#header_wrap"))
        $("#logo").css({"opacity":0.2})
        $mobileMenuWrap.animate({"right":0},500,"easeOutCubic")
    }

    function mobileMenuClose(){
        $mobileGrayLayer.hide()
        $("#logo").css({"opacity":1})
        $mobileMenuWrap.animate({"right":-mobileMenuWidth},500,"easeOutCubic",function(){
            $("body").css({"overflow":"visible"})
        })
    }

    $mobileMenu.each(function(isOpen,data){
        $(this).data("isOpen",false)
    })

    function onMobileMenuClick(){
        openHeight=closeHeight+$(this).children(".mobilesubmenu_list").outerHeight()

        if($(this).data("isOpen")==false){
            onMobileMenuClose()

            $(this).stop()
            $(this).animate({"height":openHeight})

            $(this).children("span").addClass("mobile_selected")

            $(this).data("isOpen",true)
        }else{
            $(this).stop()
            $(this).animate({"height":closeHeight})

            $(this).children("span").removeClass("mobile_selected")

            $(this).data("isOpen",false)
        }
    }

    function onMobileMenuClose(){
        $mobileMenu.stop()
        $mobileMenu.animate({"height":closeHeight})
        $mobileIcon.removeClass("mobile_selected");

        $mobileMenu.each(function(isOpen,data){
            $(this).data("isOpen",false)
        })

    }
}