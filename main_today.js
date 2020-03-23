$(document).ready(function(){

    var $todayTitle=$(".today_title")
    var $todayCon=$("#today_list").children()
    var todayConNum=$todayCon.size()

    onTodayAni()


    $(document).on("scroll",onTodayAni)


    function onTodayAni(){
        if($(document).scrollTop()>800){
            $todayTitle.animate({"top":0,"opacity":1},700,"easeOutBack")

            for(var i=0; i<todayConNum; i++){
                $todayCon.eq(i).animate({"top":0,"opacity":1},1000+(i*200),"easeOutBack")
            }
            
        }
    }


    
})