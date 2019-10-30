angular.module('hotelUserApp').controller('BlogController', ['$scope', '$rootScope', '$location', '$timeout', '$http', function($scope, $rootScope, $location, $timeout, $http) {
	$scope.$on('$viewContentLoaded', function() {
        // initialize core components
        
        $scope.getAllBlogsList= function ()
        {
        	$http({
        		method: 'get',
        		url: $rootScope.Base_url+'api/getAllBlogsList',
        		
        	}).then(function (response) {
        		$rootScope.blogLists= response.data.data;
        	}, 
        	function (response) {               

        	});
        }

        $scope.getAllBlogsList();
    });
}]);