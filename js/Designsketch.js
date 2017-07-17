var app = angular.module('add',["ngRoute"]);
	app.config(["$routeProvider",function($routeProvider){
		$routeProvider.when('/Designsketchhome',{
		templateUrl:'Designsketchhome.html',
		// controller:function($scope,$routeParams,$location){
		// 	$scope.back = function(){
		// 		$location.path('/home');
		// 	}
		// }
	}).when("/gray",{
		templateUrl:"gray.html",
		controller:function($scope,$routeParams,$location){
			$scope.back = function(){
				$location.path('/Designsketchhome');
			}
		}
	}).when("/children",{
		templateUrl:"children.html",
		controller:function($scope,$routeParams,$location){
			$scope.back = function(){
				$location.path('/Designsketchhome');
			}
		}
	}).when("/img",{
		templateUrl:"../html/img.html",
		controller:function($scope,$routeParams,$location){
			$scope.back = function(){
				$location.path('/gray');
			}
			setTimeout(function(){
				var swiper = new Swiper('.swiper-container', {
    			zoom: true,
    			autoplay:5000,
    			loop:true
			});
			},100)
		}
	})
	.otherwise({
		redirectTo:"/Designsketchhome",
	})
}])
	app.controller('vc',function($scope,$http){
			$scope.dataList = [];
			$scope.grayList = [];
			$scope.grayList1 = [];
			$scope.grayfooterList= [];
			$scope.img_sumList= [];
			$scope.sums_boxList= [];
			$scope.obj = {
				// iss:false,
				isShow:true,
				isShow1:true
			}
		$scope.getData = function(){
			if ($scope.isShow==true) {
				$scope.isShow=false;
			}else{
				$scope.isShow=true
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
        url:"../data/gray.php?type=sums&pageNo="+page+"&num="+"count"
        }).then(function(data){
            console.log(data);
            if (page == 1) {
                $scope.sums_boxList = data.data.sums_box;
                $scope.$broadcast("scroll.refreshComplete")
            }else{
                console.log(data);
                $scope.dataList = $scope.dataList.concat(data.data.sums_box);
                if (data.data.sums_box.length == 0) {
                    $scope.haveMore = fasle;
                }
                $scope.$broadcast('scroll.infiniteScrollComplete')
            };

        },function(err){
            if (page == 1) {
                $scope.$broadcast('scroll.refreshComplete')
            }else{
                $scope.$broadcast('scroll.infiniteScrollComplete')
            }
        });
       $scope.doRefresh = function(){
	  	page =1;
	  	getData(page);
	  }
	  $scope.loadMore = function(){
	  	page++;
	  }
})