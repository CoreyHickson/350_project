var app = angular.module('CharacterApp', ['ngRoute']);

app.config(function ($routeProvider)
           {
  $routeProvider
  	.when('/', {
    	controller: 'CreateController',
    	templateUrl: 'views/create.html'
    })
    .when('/create', {
      controller: 'CreateController',
      templateUrl: 'views/create.html'
    })
    .when('/delete', {
      controller: 'DeleteController',
      templateUrl: 'views/delete.html'
    })
    .when('/get', {
      controller: 'GetController',
      templateUrl: 'views/get.html'
    })
    .when('/put', {
      controller: 'PutController',
      templateUrl: 'views/put.html'
    })
    .otherwise({
      redirectTo: '/'
    });
});
