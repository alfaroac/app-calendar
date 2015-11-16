<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
	<meta charset="UTF-8">
	<title>UGEL-Calendar</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="views/css/bootstrap.min.css">  
	<link rel="stylesheet" href="views/css/bootstrap.css">  
	<link rel="stylesheet" href="views/css/bootstrap.css.map">
	<script src="views/js/angular.min.js"></script>
	<script src="views/js/angular-route.min.js"></script>
	<script src="views/js/jquery-2.1.3.min.js"></script>
	<script src="views/js/bootstrap.min.js"></script> 
	<script src="views/control/apps.js"></script> 
	<script src="views/js/angular.js"></script>  
	<script src="views/js/jquery.min.js"></script> 

<link href='views/css/fullcalendar.css' rel='stylesheet' />
<link href='views/css/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='views/js/moment.min.js'></script>
<script src='views/js/fullcalendar.min.js'></script>
<script src="views/js/test.js"></script>
<link rel="stylesheet" href="views/css/test.css">
	    
</head>
<body>    
	<div ng-include src="'views/templates/menu.html'" scope="" onload=""></div>
	    
	<div class="container" ng-view></div>
        

</body>
</html>