$(".Regional").click(function() {
    if ($(".grade_w").hasClass('grade_show')) {
        $(".grade_w").removeClass('grade_show');
        $(this).removeClass('current');
        $(".black_bj").css("display","none");
    }else{
        $(".grade_w").addClass('grade_show');
        $(this).addClass('current');
        $(".black_bj").css("display","block");
        $(".size_w").removeClass('grade_show');
        $(".Sort").removeClass('current');
    };
});
$(".Sort").click(function() {
    if ($(".size_w").hasClass('grade_show')) {
        $(".size_w").removeClass('grade_show');
        $(this).removeClass('current');
        $(".black_bj").css("display","none");
    }else{
        $(".size_w").addClass('grade_show');
        $(this).addClass('current');
        $(".black_bj").css("display","block");
        $(".grade_w").removeClass('grade_show');
        $(".Regional").removeClass('current');
    };
})
var style = 0;
var area = 0;
function grade2(ele){
    $(".size_w").children().removeClass("Selected_size");
    area = $(".size_w").children().index($(ele));
    $($(".size_w").children()[area]).addClass('Selected_size');
    $(".size_w").removeClass('grade_show');
    $(".black_bj").css("display","none");
    $(".Sort").removeClass('current');
    list();
}
function grade1(ele){
    $(".grade_w").children().removeClass("Selected_grade");
    style = $(".grade_w").children().index($(ele));
    // console.log(index);
    $($(".grade_w").children()[style]).addClass('Selected_grade');
    $(".grade_w").removeClass('grade_show');
    $(".black_bj").css("display","none");
    $(".Regional").removeClass('current');
    list();
}
list();
function list(){
    $(".House_vr").children().remove();
    $.ajax({
        url:"../data/vr.php",
        data:"type=list",
        success:function(data){
            // console.log(data);
            var obj = JSON.parse(data);
            // console.log(obj.records);
            $("section").css("background","white");
            if (style == 0 && area == 0) {
                $(".House_vr").children().remove();
                for (var i = 0 ; i < obj.records.length ; i++) {
                    // console.log("gfjksgjk");
                    var li = $('<li><a href="'+obj.records[i].Hyperlink+'"><div class="vr_img"><img src="'+obj.records[i].Img+'" alt=""></div><div class="vr_play"><div><img src="../images/icon_108_play.png" alt=""></div></div><div class="House_name">'+obj.records[i].Name+'</div></a></li>');
                    $(".House_vr").append(li);
                };
            }else{
                $(".House_vr").children().remove();
                if (style == 0) {
                    var area_array = [];
                    for (var i = 0 ; i < obj.records.length ; i++) {
                        if (area == obj.records[i].area) {
                            area_array.push(obj.records[i]);
                        };
                    };
                    // console.log(area_array);
                    for (var i = 0 ; i < area_array.length ; i++) {
                        var li = $('<li><a href="'+area_array[i].Hyperlink+'"><div class="vr_img"><img src="'+area_array[i].Img+'" alt=""></div><div class="vr_play"><div><img src="../images/icon_108_play.png" alt=""></div></div><div class="House_name">'+area_array[i].Name+'</div></a></li>');
                        $(".House_vr").append(li);
                    };
                }else{
                    var style_array = [];
                    for (var i = 0 ; i < obj.records.length ; i++) {
                        if (style == obj.records[i].style) {
                            style_array.push(obj.records[i]);
                        };
                    };
                    if (area == 0) {
                        for (var i = 0 ; i < style_array.length ; i++) {
                            var li = $('<li><a href="'+style_array[i].Hyperlink+'"><div class="vr_img"><img src="'+style_array[i].Img+'" alt=""></div><div class="vr_play"><div><img src="../images/icon_108_play.png" alt=""></div></div><div class="House_name">'+style_array[i].Name+'</div></a></li>');
                            $(".House_vr").append(li);
                        };
                        // console.log(style_array);
                    }else{
                        var area_array = [];
                        for (var i = 0 ; i < style_array.length ; i++) {
                            if (area == style_array[i].area) {
                                area_array.push(style_array[i]);
                            };
                        };
                        if (area_array.length == 0) {
                            var li = $('<li class = "sorry">抱歉，没有找到符合条件的结果</li>');
                            $(".House_vr").append(li);
                            $("section").css("background","rgb(245,245,245)");
                        }else{
                            for (var i = 0 ; i < area_array.length ; i++) {
                                var li = $('<li><a href="'+area_array[i].Hyperlink+'"><div class="vr_img"><img src="'+area_array[i].Img+'" alt=""></div><div class="vr_play"><div><img src="../images/icon_108_play.png" alt=""></div></div><div class="House_name">'+area_array[i].Name+'</div></a></li>');
                                $(".House_vr").append(li);
                            };
                        };

                        // console.log(area_array);
                    };
                };
            };
        }
    });
}