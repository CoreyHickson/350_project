app.controller('GetController', ['$scope', '$http', '$log', function($scope, $http, $log) {
    /**
     * GET (all charaters):
     * http://localhost/api/characters/
     * GET (based off name):
     * http://localhost/api/characters/Testing
     */
    $scope.getchar = function(name) {
    	if(name == null) {
    		var $url = '/api/characters/'
    	}
    	else {
    		var $url = '/api/characters/' + name
    	}

    	$http({
        	method: 'GET',
        	url: $url
        }).then(function successCallback(response) {
		    // this callback will be called asynchronously
		    // when the response is available
            if(response['data']['Characters'] != null) {
                $scope.characters = response['data']['Characters'];
            }
		    else {
                $scope.characters = response['data']['Character'];
            }
		    $log.log(response);
		  }, function errorCallback(response) {
		    // called asynchronously if an error occurs
		    // or server returns response with an error status.
		    $scope.characters['name'] = "Did not work!";
		  });
    }
}]);
