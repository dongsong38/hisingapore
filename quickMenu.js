$(document).ready(function(){

    var $quickMenu=$("#quick_top_menu")
    var quickScrollHeight

    onQuickScroll()

    $(document).on("scroll",onQuickScroll)
    $quickMenu.on("click",onGotoTop)

    function onQuickScroll(){
        quickScrollHeight=$(document).scrollTop()

        if(quickScrollHeight>150){
            $quickMenu.stop()
            $quickMenu.animate({"opacity":1},500,"easeOutCubic")
        }else{
            $quickMenu.stop()
            $quickMenu.animate({"opacity":0},500,"easeOutCubic")
        }
    }

    function onGotoTop(){
        $("html,body").animate({"scrollTop":0},300)
    }

})