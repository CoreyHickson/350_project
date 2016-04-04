app.controller('CreateController', ['$scope', '$http', '$log', function($scope, $http, $log) {
	
    /**
     * POST (params: name, charlevel, class, background, race):
     *   http://localhost/api/characters/?name=Name&charlevel=1&class=Barbarian&background=Acolyte&race=Human
	 */
	$scope.create = function(character) {
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
            $log.log(response);
		    $scope.character['success'] = "Character number " + response['data']['id'] + " created!";
		  }, function errorCallback(response) {
		    // called asynchronously if an error occurs
		    // or server returns response with an error status.
		    $scope.character['success'] = "Did not work!";
		  });
        $log.log($url);
    };

    $scope.facebook = function(character) {
        testAPI();
    }
}]);
