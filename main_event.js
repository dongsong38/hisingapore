$(document).ready(function(){

    var $eventTitle=$(".event_title")
    var $eventCon=$("#event_list").children()
    var eventConNum=$eventCon.size()

    onEventAni()
    
    $eventCon.on("mouseenter",onEventOver)
    $eventCon.on("mouseleave",onEventOut)
    $(document).on("scroll",onEventAni)

    function onEventOver(){
        $(this).addClass("selected")
    }

    function onEventOut(){
        $(this).removeClass("selected")
    }

    function onEventAni(){
        if($(document).scrollTop()>2200){
            $eventTitle.animate({"top":0,"opacity":1},700,"easeOutBack")
            
            for(var i=0; i<eventConNum; i++){
                $eventCon.eq(i).animate({"top":0,"opacity":1},1000+(i*200),"easeOutBack")
            }

        }
    }


})