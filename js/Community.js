$(function(){
    fun();
})
function fun(){
    $.ajax({
        url:"../data/vr.php",
        data:"type=Hot",
        success:function(data){
            var obj = JSON.parse(data).records;
            // console.log(obj);
            for (var i = 0 ; i < obj.length ; i++) {
                var li = $('<li class="Hot_list" ng-click="fun()"><a href="#!Community_reform"><div><div class="list_Title">'+obj[i].Content+'</div><div class="user_div"><img src="'+obj[i].User_head+'" alt=""><span>'+obj[i].User_name+'</span></div><div class="Reply_right"><img src="../images/icon_24_reply.png" alt=""><span>'+obj[i].Reply+'</span></div></div></a></li>');
                $(".list_Hot").append(li);
            };
        }
    })
}
/*路由*/
var app = angular.module('Community_App',['ngRoute']);
// app.directive('userInfo',function(){
//             return{
//                 restrict:'EA'
//                 }
//             }
//         });
var Publish_text =[];
app.config(['$routeProvider',function($routeProvider){
    $routeProvider.when('/Community_home',{
        templateUrl:'../template/Community_home.html',
        controller:function($scope){
            $scope=fun();
        }

    })
    .when('/Community_reform',{
        templateUrl:'../template/Community_reform.html',
        controller:function($scope){
            // console.log("ghjksghsj");
            Reply_li();
        }
    })
    .when('/Community_Reply',{
        templateUrl:'../template/Community_Reply.html',
        controller:function($scope){
            $scope.Reply=function(){
                window.history.back();
            };
            $scope.Publish=function(){
                // console.log($("textarea").val());
                Publish_text.push($("textarea").val());
                // console.log(Publish_text);

                window.history.back();

            }
        }
    })
    // .when('/edit',{
    //     templateUrl:"template/edit.html"
    // })
    .otherwise({
        redirectTo:'/Community_home'
    })
}]);

function Realy_input(ele){
    // console.log("fjskjfksjks");
    var len=$(ele).val().length;
    $(ele).val("点赞("+parseInt(parseInt($(ele).val().slice(3,len-1))+1)+")");

}
function Reply_li(){
    if (Publish_text != "") {
        for (var i = 0 ; i<Publish_text.length;i++) {
            // console.log($(".comment_ul").children());
            var li = $('<li><img src="../images/a816425ab79b11e6963400163e000ee8.jpg@!60x60.jpg" alt=""><div><div class="user_name_title"><span>9组</span><div><span>'+parseInt(new Date().getMonth()+1)+'月'+new Date().getDate()+'日</span><span>丨</span><span class="floor_span">'+parseInt(parseInt($(".comment_ul").children().length)+parseInt(1))+'楼</span></div></div><div class="user_content"><p>'+Publish_text[i]+'</p></div><div class="user_button"><a href="#!Community_Reply" class="input_a">回复</a><input type="button" name="" value="点赞(0)" class="input_a" onclick="Realy_input(this)"></div></div></li>');
            $(".comment_ul").append(li);
        };
    }
}
function numb(){
    $(".Reply_text span").text(200-$(".Reply_text textarea").val().length);
}
window.onscroll=function(){
    if ($(document).scrollTop()>=600) {
        $(".to_top").css("display","block");
    }else{
        $(".to_top").css("display","none");
    };
}
// <li><img src="../images/a816425ab79b11e6963400163e000ee8.jpg@!60x60.jpg" alt=""><div><div class="user_name_title"><span>9组</span><div><span>07月11日</span><span>丨</span><span>3楼</span></div></div><div class="user_content"><p>'+Publish_text+'</p></div><div class="user_button"><a href="#!Community_Reply" class="input_a">回复</a><input type="button" name="" value="点赞(0)" class="input_a"></div></div></li>