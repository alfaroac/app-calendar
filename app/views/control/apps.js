var calendario=angular.module('app',['ngRoute']);
	calendario.config(['$routeProvider',
		function($routeProvider) {
			$routeProvider.
			when('/events',{
				templateUrl:'views/templates/events.php',
			}).
            when('/users',{
				templateUrl:'views/templates/users.php',
			}).
			when('/institution',{
				templateUrl:'views/templates/institution.php',
			}).
			when('/directors',{
				templateUrl:'views/templates/directors.php',
			}).
			when('/evidences',{
				templateUrl:'views/templates/evidences.php',
			}).
			when('/files',{
				templateUrl:'views/templates/files.php',
			}).
			otherwise({
				redirectTo:'/',
				templateUrl:'views/templates/inicio.php',
			});
			
	}]);