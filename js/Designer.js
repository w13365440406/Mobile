var app = angular.module('app',["ngRoute"]);
app.config(["$routeProvider",function($routeProvider){
	$routeProvider.when('/Designerhome',{
	templateUrl:'../template/Designerhome.html',
}).when("/Designforhim",{
		templateUrl:"../template/Designforhim.html",
		controller:function($scope,$routeParams,$location){
			$scope.back = function(){
				$location.path('/Designerhome');
			}
			$scope.getGesi = function(){
				if ($(".des_click").val("")) {
					$(".des_click").css({"border":"1px solid red"});
					// $(".des_click").attr("placeholder","请输入用户名")
					$(".des_footer").fadeIn(2000,function(){
					})
					$(".des_footer").fadeOut(2000,function(){
					})
					$(".des_footer").text("请输入用户名");
				}else if ($(".des_click1").val("")) {
					$(".des_click1").css({"border":"1px solid red"});
					$(".des_click1").attr("placeholder","请输入你的手机号")
					$(".des_footer").fadeIn(2000,function(){
					})
					$(".des_footer").fadeOut(2000,function(){
					})
					$(".des_footer").text("请输入你的手机号");
				}
			}
		}
	}).when("/vr",{
		templateUrl:"../template/vr.html",
		controller:function($scope,$routeParams,$location){
			$scope.back = function(){
				$location.path('/Designerhome');
			}
			$scope.vr_panorama = function(){
			$scope.isPanorama=true;
			$scope.isDesign=false;
			$scope.isCase = false;
			}
			$scope.vr_design = function(){
				$scope.isDesign=true;
				$scope.isPanorama=false;
				$scope.isCase = false;
				console.log($(".vr_a"))
				$(".vr_Class").removeClass("vr_a");
			}
			$scope.vr_case = function(){
				$scope.isCase = true;
				$scope.isDesign=false;
				$scope.isPanorama=false;
				$(".vr_Class").removeClass("vr_a");

			}
		}
	}).when("/vrman",{
		templateUrl:"../template/vrman.html",
		controller:function($scope,$routeParams,$location){
			$scope.back = function(){
				$location.path('/Designerhome');
			}
			$scope.vr_panorama = function(){
			$scope.isPanorama=true;
			$scope.isDesign=false;
			$scope.isCase = false;
			}
			$scope.vr_design = function(){
				$scope.isDesign=true;
				$scope.isPanorama=false;
				$scope.isCase = false;
				console.log($(".vr_a"))
				$(".vr_Class").removeClass("vr_a");
			}
			$scope.vr_case = function(){
				$scope.isCase = true;
				$scope.isDesign=false;
				$scope.isPanorama=false;
				$(".vr_Class").removeClass("vr_a");

			}
		}
	}).when("/design",{
		templateUrl:"../template/design.html",
		controller:function($scope,$routeParams,$location){
			$scope.back = function(){
				$location.path('/vr');
			}
			setTimeout(function(){
				var swiper = new Swiper('.swiper-container', {
    			zoom: true,
    			autoplay:5000,
    			loop:true
			});
			},100)
		}
	}).when("/Caselibrary",{
		templateUrl:"../template/Caselibrary.html",
		controller:function($scope,$routeParams,$location){
			$scope.back = function(){
				$location.path('/vr');
			}
		}
	}).when("/Caselibraryman",{
		templateUrl:"../template/Caselibraryman.html",
		controller:function($scope,$routeParams,$location){
			$scope.back = function(){
				$location.path('/vrman');
			}
		}
	})
.otherwise({
	redirectTo:"/Designerhome",
})
}])
app.controller('vc',function($scope,$http){
	$scope.ProgrammingList = [];
	$scope.ProgrammingList1 = [];
	$scope.vr_img_sumList= [];
	$scope.CaselibraryList =[];
	$scope.CaselibrarymanList = [];
	$scope.isPanorama=true;
	$http({
		method:'get',
		url:'../data/Hot.php?type=Programming'
		}).then(function(data){
		$scope.ProgrammingList = data.data.Programmings;
		console.log(data.data.Programmings);
		})
	$http({
		method:'get',
		url:'../data/Hot.php?type=Programming1'
		}).then(function(data){
		$scope.ProgrammingList1 = data.data.Programming1s;
		console.log(data.data.Programming1s);
		})
		$http({
				method:'get',
				url:'../data/Hot.php?type=vr_img'
			}).then(function(data){
				$scope.vr_img_sumList = data.data.vr_img_sum;	
		})
		$http({
				method:'get',
				url:'../data/Hot.php?type=Caselibrary'
			}).then(function(data){
				$scope.CaselibraryList = data.data.Cases;	
		})
		$http({
				method:'get',
				url:'../data/Hot.php?type=Caselibraryman'
			}).then(function(data){
				$scope.CaselibrarymanList = data.data.Casesman;	
		})

})