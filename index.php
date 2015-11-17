<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='app/views/css/fullcalendar.css' rel='stylesheet' />
<link href='app/views/css/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='app/views/js/moment.min.js'></script>
<script src='app/views/js/jquery.min.js'></script>
<script src="app/views/js/jquery-2.1.3.min.js"></script>
<script src='app/views/js/calendar/fullcalendar.min.js'></script>
<script src="app/views/js/calendar/mycalendar.js"></script>
<link rel="stylesheet" href="app/views/css/mycalendar.css">
<link rel="stylesheet" href="app/views/css/bootstrap.min.css"> 
  

</head>
<body >
<nav class="navbar navbar-inverse" role="navigation">
<div class="container">
  <div class="navbar-header">
    <button class="navbar-toggle" data-toggle="collapse" data-target="#acolapsar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="#" class="navbar-brand">UGEL-Calendar</a>
  </div>

  <div class="collapse navbar-collapse" id="acolapsar">
    <ul class="nav navbar-nav">
      <li><a href="#"><spam class="glyphicon glyphicon-home">Inicio</spam></a></li>
      <li><a href="#"><spam class="glyphicon glyphicon-cog">Settings</spam></a></li>
      <li class="dropdown">
        <a href="app/inicio.php">Administrar</a>
        <ul class="dropdown-menu">
          <li><a href="#/events">Eventos</a></li>
          <li><a href="#/users">Users</a></li>
          <li><a href="#/institution">Institucion</a></li>
          <li><a href="#/directors">Directors</a></li>              
          <li><a href="#/evidences">Evidencias</a></li>
          <li><a href="#/files">Archivos</a></li>
        </ul>
      </li>
    </ul>
    <div>
      <form action="./" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar...">
        </div>
        <button class="btn btn-default">Enviar</button>
      </form>
    </div>
    <ul class="nav navbar-nav navbar-right">      
      <li><a>Wellcome {{"Aldo"}}</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li><a href="#">link 3</a></li>
          <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
        </ul>
      </li>
    </ul>
  </div>      
</div>
</nav>

	
  <div class="container" >	
	<h2 id="demob">Bienvenidos al Calendario</h2>
	<div class="">
      <button id="btnNew" class="btn btn-primary start">
          <i class="glyphicon glyphicon-upload"></i>
          <span>New event</span>
      </button>         
    </div>    

  <div id='calendar'></div>
	
  	 
<script>
$(document).ready(function(){
  $("#demob").hide();
  $("#btnNew").on('click', function(event) {
    $("#modal-confirmation").show();
    $("#demob").show();
  });
});
</script>

<div style="" id="modal-confirmation" title="Delete?">Are you sure you want to delete?</div>

</div>
</body>
</html>
