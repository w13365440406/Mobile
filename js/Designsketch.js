var app = angular.module('add',["ngRoute","me-lazyload"]);
	app.config(["$routeProvider",function($routeProvider){
		$routeProvider.when('/Designsketchhome',{
		templateUrl:'../template/Designsketchhome.html',
	}).when("/gray",{
		templateUrl:"../template/gray.html",
		controller:function($scope,$routeParams,$location){
			$scope.back = function(){
				$location.path('/Designsketchhome');
			}
		}
	}).when("/img",{
		templateUrl:"../template/img.html",
		controller:function($scope,$routeParams,$location){
			$scope.back = function(){
				$location.path('/gray');
			}
			setTimeout(function(){
				var swiper = new Swiper('.swiper-container', {
    			zoom: true,
    			// autoplay:5000,
    			loop:true
			});
			},100)
		}
	}).when("/Decorationcase",{
		templateUrl:"../template/Decorationcase.html",
		controller:function($scope,$routeParams,$location){
			$scope.back = function(){
			$location.path('/Designsketchhome');
			}
			$scope.Decorationcase=false;
			$scope.Desropbox=false;
			$scope.dessquares=false;
			$scope.descolour=false;
			function Quote(){
				$(".detail").css({"background-color":"rgb(147,147,147)"});
				$(".dec_section__box").css({"opacity":"0.6","margin-top":"190px"});
			}
			function getQuote(){
				$(".detail").css({"background-color":"rgb(245,245,245)"});
				$(".dec_section__box").css({"opacity":"1","margin-top":"0px"});
			}
			$scope.Getapartment = function(){
				if ($scope.Decorationcase==false){
					$scope.Decorationcase=true;
					$scope.Desropbox=false;
					$scope.dessquares=false;
					$scope.descolour=false
					Quote();
				}else{
					$scope.Decorationcase=false;
					getQuote();
				}
			}
			$scope.GetDesropbox = function(){
				if ($scope.Desropbox==false){
					$scope.Desropbox=true;
					$scope.Decorationcase=false;
					$scope.dessquares=false;
					$scope.descolour=false
					Quote();
				}else{
					$scope.Desropbox=false
					getQuote();
				}
			}
			$scope.Getdessquares = function(){
				if ($scope.dessquares==false){
					$scope.dessquares=true;
					$scope.descolour=false;
					$scope.Desropbox=false;
					$scope.descolour=false
					Quote();
				}else{
					$scope.dessquares=false
					getQuote();
				}
			}
			$scope.Getdescolour = function(){
				if ($scope.descolour==false){
					$scope.descolour=true;
					$scope.dessquares=false;
					$scope.Desropbox=false;
					$scope.Decorationcase=false;
					Quote();
				}else{
					$scope.descolour=false
					getQuote();
				}
			}
		}
	})
	.otherwise({
		redirectTo:"/Designsketchhome",
	})
}])
	app.controller('vc',function($scope,$http){
			$scope.basicUrl = "http://192.168.1.108/gray/images/"
			$scope.dataList = [];
			$scope.grayList = [];
			$scope.grayList1 = [];
			$scope.grayfooterList= [];
			$scope.img_sumList= [];
			$scope.sums_boxList= [];
			$scope.colorsList =[];
			$scope.isShow=false;
			$scope.filterPop = '';
			$scope.popValue = '';
			$scope.filstyle = "";
			$scope.filarea = '';
			$scope.down = function(value){
				$scope.filterPop = 'layout';
				$scope.popValue = value;
			 }
			 $scope.dex = function(value){
			 	$scope.filstyle = 'style';
			 	$scope.popValue = value;
			 }
			 $scope.diss = function(value){
			 	$scope.filarea = 'area';
			 	$scope.popValue = value;
			 }
		$scope.getData = function(){
			if ($scope.isShow==false) {
				$scope.isShow=true;
			}else{
				$scope.isShow=false
			}
		}
		$scope.getGray = function(){
				$scope.isShow1=true;
			$(".mo_container_hot").css("display","none");
		}
			$http({
				method:'get',
				url:'../data/Hot.php?type=list'
			}).then(function(data){
				$scope.dataList = data.data.records;
		})
			$http({
				method:'get',
				url:'../data/Hot.php?type=gray'
			}).then(function(data){
				$scope.grayList = data.data.record;
		})	
			$http({
				method:'get',
				url:'../data/Hot.php?type=gray1'
			}).then(function(data){
				$scope.grayList1 = data.data.record1;
		})
			$http({
				method:'get',
				url:'../data/Hot.php?type=grayfooter'
			}).then(function(data){
				$scope.grayfooterList = data.data.gray;
				// console.log($scope.grayfooterList);
		})
			$http({
				method:'get',
				url:'../data/Hot.php?type=img'
			}).then(function(data){
				$scope.img_sumList = data.data.img_sum;	
		})	
			var page = 1;
	 		var count = 10;
	 		$scope.haveMore = true;
        $http({
        url:"../data/Hot.php?type=sums"
        }).then(function(data){
            // console.log(data);
            if (page == 1) {
                $scope.sums_boxList = data.data.sums_box;
                sums_boxList = data.data.sums_box;
            }
        })
        $http({
				method:'get',
				url:'../data/Hot.php?type=Manycolors'
			}).then(function(data){
				$scope.colorsList = data.data.colors1;
				// console.log(data.data.colors1);
		})
})
app.filter('filterArr',function(){
	return function(value,propty,str){
		var arr = [];
		if (propty.length == 0 || str == 0) {
			return value;
		}
		for (var i = 0; i < value.length; i++) {
			if (value[i][propty] == str) {
				arr.push(value[i]);
			}
		}
		return arr
	}
})
