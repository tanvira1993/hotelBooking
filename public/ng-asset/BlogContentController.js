angular.module('hotelUserApp').controller('BlogContentController', ['$scope', '$rootScope', '$location', '$timeout', '$http','$stateParams', function($scope, $rootScope, $location, $timeout, $http,$stateParams) {
	$scope.$on('$viewContentLoaded', function() {
        // initialize core components

        $scope.id = $stateParams.id;
        $scope.getBlogById= function ()
        {
        	$http({
        		method: 'get',
        		url: $rootScope.Base_url+'api/getBlogById/' +$scope.id,
        		
        	}).then(function (response) {
        		$rootScope.blogLists= response.data.data;
        	}, 
        	function (response) {               

        	});
        }

        $scope.getBlogById();
    });
}]);
