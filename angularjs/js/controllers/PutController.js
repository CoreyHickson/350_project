app.controller('PutController', ['$scope', '$http', '$log', function($scope, $http, $log) {
	$scope.put_status = {'status': ''};

    /**
     * PUT (params: id, name, charlevel, class, background, race):
     *   http://localhost/api/characters/?name=Brooklyn&charlevel=8&class=Druid&background=Acolyte&race=Elf&id=7
	 */
	$scope.put = function(put_character) {
        var $url = '/api/characters/?';
        $url = $url + 'name=' + $scope.put_character['name']
        		   + '&class=' +  $scope.put_character['class']
        		   + '&background=' + $scope.put_character['background']
        		   + '&race=' + $scope.put_character['race']
        		   + '&charlevel=' + $scope.put_character['level']
                   + '&id=' + $scope.put_character['charnum'];
        $http({
        	method: 'PUT',
        	url: $url
        }).then(function successCallback(response) {
		    // this callback will be called asynchronously
		    // when the response is available
            $log.log(response);
            $success = "Character number " + response['data']['id'] + " changed!";
		    $scope.put_status = {'status': $success};
		  }, function errorCallback(response) {
		    // called asynchronously if an error occurs
		    // or server returns response with an error status.
		    $scope.put_status = {'status': 'Did not submit!'};
		  });
        $log.log($url);
    };
}]);
