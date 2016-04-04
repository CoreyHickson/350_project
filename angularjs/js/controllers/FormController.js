app.controller('FormController', ['$scope', '$http', '$log', function($scope, $http, $log) {
	$scope.view_create = function() {
        var $url = '/api/characters/?';
        $url = $url + 'name=' + $scope.character['name']
        		   + '&class=' +  $scope.character['class']
        		   + '&background=' + $scope.character['background']
        		   + '&race=' + $scope.character['race']
        		   + '&charlevel=' + $scope.character['level'];
        $http({
        	method: 'POST',
        	url: $url
        }).then(function successCallback(response) {
		    // this callback will be called asynchronously
		    // when the response is available
		    $scope.character['success'] = "Submitted!";
		  }, function errorCallback(response) {
		    // called asynchronously if an error occurs
		    // or server returns response with an error status.
		    $scope.character['success'] = "Did not work!";
		  });
        $log.log($url);
    };
}]);
