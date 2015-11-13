var calendario=angular.module('ugelApp',['ngRoute']);
	calendario.config(['$routeProvider',
		function($routeProvider) {
			$routeProvider.
			when('/events',{
				templateUrl:'templates/events.html',
			}).
            when('/users',{
				templateUrl:'templates/users.html',
			}).
			when('/institution',{
				templateUrl:'templates/institution.html',
			}).
			when('/directors',{
				templateUrl:'templates/directors.html',
			}).
			when('/evidences',{
				templateUrl:'templates/evidences.html',
			}).
			when('/files',{
				templateUrl:'templates/files.html',
			}).
			otherwise({
				redirectTo:'/',
				templateUrl:'templates/inicio.html',
			});
			
	}]);