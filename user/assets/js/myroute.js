var obj = angular.module("myapp", ["ngSanitize", "ngRoute"]);
	obj.config(function($routeProvider){
		$routeProvider
		.when("/",{
			templateUrl : "dashboard"
		})
		
		.when("/alluser",{
			templateUrl : "userlist"
		})
		
		.when("/newuser",{
			templateUrl : "newuser"
		});
		
	});

	//creating object userdash controller
	obj.controller("userdash", function($http, $scope){		
	});
	
	//creating object mylist controller
	obj.controller("mylist", function($http, $scope){	
		
		$http.get("getjsonuser").then(function(response){
			$scope.user = response.data;
		});
		
		$scope.searchdata = function(keyword)
		{
			$http.get("searchuser?key="+keyword).then(function(response){
				$scope.user = response.data;
			});
		}
		
		$scope.viewdetails = function(userid)
		{
			$http({
					url : "getdetails?userid="+userid,
					method : "GET",
					headers : {'Content-Type':'application/x-www-form-urlencoded'},
				}).success(function(data, status, headers, config){
					$scope.userdata = data;
					//window.location.reload();
				});
		}
		
		$scope.deleteuser = function(userid)
		{
			var sts = confirm("Are You Sure ?");
			if(sts == true)
			{
				$http({
						url : "deletemyuser?userid="+userid,
						method : "GET",
						headers : {'Content-Type':'application/x-www-form-urlencoded'},
					}).success(function(data, status, headers, config){
						$scope.finalmsg = data;
						setInterval(function(){
							window.location.reload();
						},2000);
						
					});

			}
		}//delete user end
	});
	
	//creating object myuser controller
	obj.controller("myuser", function($http, $scope){
		
		$scope.myform = {};
		$scope.saveUser = function()
		{
			$http({
					url : "savemyuser",
					method : "POST",
					headers : {'Content-Type':'application/x-www-form-urlencoded'},
					data : $.param($scope.myform)
				}).success(function(data, status, headers, config){
					alert(data.trim());
					//window.location.reload();
					window.location.href="home#/alluser";
				});
		}
		
		$scope.clearUser = function()
		{
			$scope.myform.name = "";
			$scope.myform.mobile = "";
			$scope.myform.email = "";
			$scope.myform.city = "";
			$scope.myform.pincode = "";
		}
		
	});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	