var calendario=angular.module('app',['ngRoute']);
	calendario.config(['$routeProvider',
		function($routeProvider) {
			$routeProvider.
			when('/events',{
				templateUrl:'templates/events.php',
			}).
            when('/users',{
				templateUrl:'templates/users.php',
			}).
			when('/institution',{
				templateUrl:'templates/institution.php',
			}).
			when('/directors',{
				templateUrl:'templates/directors.php',
			}).
			when('/evidences',{
				templateUrl:'templates/evidences.php',
			}).
			when('/files',{
				templateUrl:'templates/files.php',
			}).
			otherwise({
				redirectTo:'/',
				templateUrl:'templates/inicio.php',
			});
			
	}]);