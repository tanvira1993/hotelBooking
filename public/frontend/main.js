var hotelUserApp = angular.module("hotelUserApp", [
	"ui.router",	
	"oc.lazyLoad",
	]);

/********************************************
 END: BREAKING CHANGE in AngularJS:
 *********************************************/

 /* Setup App Interceptors */
 /*hotelUserApp.config(['$httpProvider', function($httpProvider) {
 	$httpProvider.interceptors.push('MaxInterceptor');

 }]);*/

/* hotelUserApp.factory('MaxInterceptor', ['$rootScope','$q', function ($rootScope,$q) {
 	var interceptor = {
 		request: function(config) {
 			config.headers['Content-Type'] = 'application/x-www-form-urlencoded';
 			if (!!$rootScope.token) {
 				config.headers.Token = 'Bearer '+ 'kochu '+$rootScope.token;
 				config.headers.idUser = $rootScope.idUser;
 				config.headers.idUserRole = $rootScope.idUserRole;

 			}

 			if (config.method === 'POST') {
 				config.data = $.param(config.data);
 			}
 			return config;
 		},
 		response: function(response) {
 			return response;
 		},
 		responseError: function(response, error) {
 			return $q.reject(response);
 		}
 	};
 	return interceptor;
 }]);*/

 /* Setup App Main Controller */
 hotelUserApp.controller('AppController', ['$scope', '$rootScope', '$location', '$timeout', '$http','$stateParams','$window',function($scope, $rootScope, $location, $timeout, $http,$stateParams,$window) {
 	$scope.$on('$viewContentLoaded', function() {

 	});
 }]);

 /* Setup App run functions*/
 hotelUserApp.run(['$rootScope', '$http','$state','$window', '$filter', '$location',
 	function($rootScope, $http, $state,$window, $filter,$location) {

 		$rootScope.counter = {
 			hit: 1,
 		};
 		$rootScope.updateCounter = function(){
 			$http({
 				method: 'post',
 				url: 'api/saveVisitor',
 				data: $rootScope.counter
 			}).then(function (response) {
 				
 			}, function (response) {
 				

 			});
 		}
 		$rootScope.updateCounter();
 		$rootScope.saveSub = function(){
 			$rootScope.subInfo
 			toastr.info("'info', 'Loading!', 'Please wait.'")
 			$http({
 				method: 'post',
 				url: 'api/saveSubscriber',
 				data: $rootScope.subInfo
 			}).then(function (response) {
 				$rootScope.subInfo=null
 				toastr.success("Congrat..!!")
 			}, function (response) {
 				swal({
 					title: response.data.heading,
 					text: response.data.message,
 					html:true,
 					type: 'error'
 				}); 
 				toastr.error("Sorry")

 			});
 		}


 		
 		
 		
 	}]);
