var app = angular.module('app',["ngRoute"]);
app.config(["$routeProvider",function($routeProvider){
	$routeProvider.when('/Designerhome',{
	templateUrl:'Designerhome.html',
}).when("/Designforhim",{
		templateUrl:"Designforhim.html",
		controller:function($scope,$routeParams,$location){
			$scope.back = function(){
				$location.path('/Designerhome');
			}
			$scope.getGesi = function(){
				if ($(".des_click").val(" ")) {
					$(".des_click").css({"border":"1px solid red"});
					$(".des_footer").fadeIn(2000,function(){

					})
					$(".des_footer").fadeOut(2000,function(){

					})
					$(".des_footer").text("请输入用户名");

				}
			}
			$scope.des_click = function(){
				$(".des_click").css({"border":"1px solid rgb(51,179,113)"});
				$(".des_click1").css({"border":"1px solid rgb(204,204,204)"});
				$(".des_click2").css({"border":"1px solid rgb(204,204,204)"});
			}
			$scope.des_click1 = function(){
				$(".des_click1").css({"border":"1px solid rgb(51,179,113)"});
				$(".des_click").css({"border":"1px solid rgb(204,204,204)"});
				$(".des_click2").css({"border":"1px solid rgb(204,204,204)"});
			}
			$scope.des_click2 = function(){
				$(".des_click1").css({"border":"1px solid rgb(204,204,204)"});
				$(".des_click").css({"border":"1px solid rgb(204,204,204)"});
				$(".des_click2").css({"border":"1px solid rgb(51,179,113)"});
			}
		}
	}).when("/vr",{
		templateUrl:"vr.html",
		controller:function($scope,$routeParams,$location){
			$scope.back = function(){
				$location.path('/Designerhome');
			}
		}
	})
.otherwise({
	redirectTo:"/Designerhome",
})
}])
app.controller('vc',function($scope,$http){
})