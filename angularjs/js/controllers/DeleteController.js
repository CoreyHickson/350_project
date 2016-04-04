app.controller('DeleteController', ['$scope', '$http', '$log', function($scope, $http, $log) {
    $scope.deleted = {'status': ''};

    /**
     * DELETE (params: id):
     * http://localhost/api/characters/?id=8
     */
    $scope.deletechar = function(id) {
        
    	if(id == null) {
    		$scope.status = "No character number!"
    	}
    	else {
    		var $url = '/api/characters/?id=' + id
    	}

    	$http({
        	method: 'DELETE',
        	url: $url
        }).then(function successCallback(response) {
		    // this callback will be called asynchronously
		    // when the response is available
            if(response['data']['status'] == 'Deleted') {
                $scope.deleted = {'status': 'Successfully deleted!'};
            }
		    else {
                $scope.deleted = {'status': 'Did not delete!'};
            }
		    $log.log(response);
            $log.log($scope.deleted);
		  }, function errorCallback(response) {
		    // called asynchronously if an error occurs
		    // or server returns response with an error status.
		    $scope.deleted = {'status': 'Did not delete!'};
		  });
    }
}]);
