<!DOCTYPE html>

<html lang="es">
<head>
  <meta charset="utf-8">
  <title>IIUTVAL-Departamento de Informática</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="favicon.ico" />
  
<?php 
include("conecta.php")
?>
</head>

<body>



<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<img width="100%"  alt="140x140" src="imagenes/bannerPrincipal.png ">
			









<!--  Barra de Botones de Menu -->


    	<div class="navbar nav-tabs navbar-inner">
    		<a class="brand" href="#">Inicio</a>
 			 
  			
			<!-- Sub menu  INICIO  -->
  			<ul class="nav">
    			 <li class="dropdown">

    				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Coordinacion <span class="caret"></span>
    				</a>
    					
      			</li>


      			 <li class="dropdown">
    				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Docentes <span class="caret"></span>
    				</a>
    					<ul class="dropdown-menu">
      					
      					<li><a href="docentes.html">Listado</a></li>
      					<li><a href="horariodocente/">Horarios</a></li>
      				</ul>
      			</li>


      			 <li class="dropdown">
    				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Documentos<span class="caret"></span>
    				</a>
    					<ul class="dropdown-menu">
      					
      					<li><a href="Documentos/Estadisticas.xls">Estadísticas</a></li>
      					<li><a href="Documentos/Formato.xlsx">Formato de Asistencia</a></li>
      					<li><a href="Documentos/RegistroE.xlsx">Formato de Registro Estudiantil</a></li>
      				</ul>
      			</li>

      			 <li class="dropdown">
    				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Voceros<span class="caret"></span>
    				</a>
    					<ul class="dropdown-menu">
      					
      					<li><a href="#">Informacion General</a></li>
      					<li><a href="#">Reglamentos</a></li>
      				</ul>
      			</li>


      			<li class="dropdown">
    				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Mapas<span class="caret"></span>
    				</a>
    					<ul class="dropdown-menu">
      					
      					<li><a href="#">Ubicacion de los Laboratorios</a></li>
      					<li><a href="#">Ubicacion de las Dependencias</a></li>
      				</ul>
      			</li>  


      			 <li class="dropdown">
    				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Aula Virtual<span class="caret"></span>
    				</a>
    					<ul class="dropdown-menu">
      					
      					<li><a href="#myModal" role="button" class="btn" data-toggle="modal">Moodle</a></li>
      					<li><a href="#">Video Conferencias</a></li>
      					<li><a href="#">Tutoriales</a></li>
      				</ul>
      			</li>      			


				<li class="dropdown">
    				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Software Libre<span class="caret"></span>
    				</a>
    					<ul class="dropdown-menu">
      					
      					<li><a href="#">GNU/Linux</a></li>
      					<li><a href="http://canaima.softwarelibre.gob.ve/">Canaima</a></li>
      					<li><a href="#">-----------</a></li>
      					<li><a href="#">Android</a></li>
      				</ul>
      			</li>  


      							<li class="dropdown">
    				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Aplicaciones Moviles<span class="caret"></span>
    				</a>
    					<ul class="dropdown-menu">
      					
      					<li><a href="movil/index.html">Android</a></li>

      				</ul>
      			</li>  

				
   			</ul>	
   			<!-- Fin de Sub Menu -->
  
    
    </div>
    </div>
	


<!-- Modal  Aula Virtual -->
		<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel">Aula Virtual</h3>
				</div>
				<div class="modal-body">
				<p>Plataforma Virtual Moodle del IUTVAL</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>

				</div>
		</div>
<!---fin de modal -->


<!-- Modal  Actos de Grado -->
		<div id="Agrado" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel">Actos de Grado</h3>
				</div>
				<div class="modal-body">
				<p>Información referente a los actos de grado del Instituto Universitario de Tecnología Valencia.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>

				</div>
		</div>
<!---fin de modal -->



	<div class="row-fluid ">
	 <div class="">
		<div class="span4 well">
			
			<h2 >
				 <img src="imagenes/default_document64.png"  class="img-rounded">Noticias
			</h2>
			<p>
 <table class="table table-striped">
<thead>
<tr>
<th>Firstname</th>
 
<th>Lastname</th>
 
<th>Email</th>
 

</tr>
</thead>
 
<tbody>
<?php
//set up mysql connection
//mysql_connect("localhost", "root", "weEAr9o63") or die(mysql_error());

//select database
mysql_select_db("pnfi") or die(mysql_error());
// Retrieve all the data from the "tblstudent" table
$result = mysql_query("SELECT * FROM noticias") or die(mysql_error());
// store the record of the "tblstudent" table into $row
 
while ($row = mysql_fetch_array($result)) {
// Print out the contents of the entry
echo '<tr>';
echo '<td>' . $row['Nombre'] . '</td>';
echo '<td>' . $row['Apellido'] . '</td>';
echo '<td>' . $row['Email'] . '</td>';

}
?>
 
</tbody>
 
<tbody></tbody>
</table>

		
		</div>
		<div class="span4 well">
			<h2>
				<img src="imagenes/configuration_settings64.png"  class="img-rounded">Eventos
			</h2>
			

 <table class="table table-striped">
<thead>
<tr>
<th>No</th>
<th>Título</th>
<th>Fecha</th>
<th>Hora</th>
<th>Lugar</th>
</tr>


</thead>
 
<tbody>
<?php
//set up mysql connection
//mysql_connect("localhost", "root", "weEAr9o63") or die(mysql_error());

//select database
mysql_select_db("pnfi") or die(mysql_error());
// Retrieve all the data from the "tblstudent" table
$result = mysql_query("SELECT * FROM Eventos") or die(mysql_error());
// store the record of the "tblstudent" table into $row
 
while ($row = mysql_fetch_array($result)) {
// Print out the contents of the entry
echo '<tr>';
echo '<td>' . $row['id'] . '</td>';
echo '<td>' . $row['Titulo'] . '</td>';
echo '<td>' . $row['Fecha'] . '</td>';
echo '<td>' . $row['Hora'] . '</td>';
echo '<td>' . $row['Lugar'] . '</td>';

}
?>
 
</tbody>
 
<tbody></tbody>
</table>
















			<p>
				<a class="btn" href="#">Leer más »</a>
			</p>

		</div>
		<div class="span4 well" >
			<h2>
				<img src="imagenes/iconos/graduado.png"  class="img-rounded">Actos de Grado
			</h2>
			<p>
				- Promociones </br>
				- Fechas      </br>
				- Requisitos  </br>
				- Solicitudes </br>

				</br>
				</br>
			</p>
			<p>
			<a class="btn" role="button"  data-toggle="modal" href="#Agrado">Leer más »</a>
			</p>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4 ">
			<div class="media well">
				 <a href="#" class="pull-left"><img src="img/bus-red-icon.png" class="media-object" alt=""></a>
				<div class="media-body ">

					<h4 class="media-heading">
						Ruta Estudiantil
					</h4> Intinerario </br>
					      Destinos </br>
					      Otros </br> 
				</div>
			</div>
			<div class="media well"  >
				 <a href="#" class="pull-left"><img src="imagenes/my_network64.png" class="media-object" alt=""></a>
				<div class="media-body">
					<h4 class="media-heading">
						Redes Sociales
					</h4> 
					<table>
					<tr>
						<td><img src="redessociales/facebook.png" class="media-object" alt="">Facebook </td>
			   			<td><img src="redessociales/twitter.png" class="media-object" alt="">Twitter </td>
			   			<td><img src="redessociales/g+.png" class="media-object" alt="">Google +</td>
					</tr>
					<tr>
						<!--<td><img src="redessociales/g+.png" class="media-object" alt=""> Google +</td>
					    <td><img src="redessociales/g+.png" class="media-object" alt=""> Google +</td>
					
					</tr>
					-->
					
					</table>	
				</div>
			</div>
		</div>
		<div class="span4 ">
			<div class="media well">
				 <a href="#" class="pull-left"><img src="imagenes/medical_suitecase64.png" class="media-object" alt=""></a>
				<div class="media-body">
					<h4 class="media-heading">
						Servicio Médicos
					</h4> 
					Horario de atención en el IUTVAL</br>
					Servicos que ofrece </br>
					Ubicación de los  CDI en el Estado</br>
					Seguro HCM
				</br>
				


				</div>
			</div>
			<div class="media well">
				 <a href="#" class="pull-left"><img src="eventos/ovi64.png" class="media-object" alt=""></a>
				<div class="media-body">
					<h4 class="media-heading">
						Olimpiadas en Informática
					</h4> Unos 650 estudiantes universitarios de diferentes instituciones nacionales e internacionales participan en la IV Olimpiada Venezolana de Informática que se lleva a cabo en la ciudad de Puerto La Cruz, estado Anzoátegui.
				</div>
			</div>
		</div>
		<div class="span4">
			<ul class="nav nav-list well">
				<li class="nav-header">
					Herramientas
				</li>
				<li >
					<a href="#">Aula Virtual</a>
				</li>
				<li>
					<a href="#">Biblioteca Digital</a>
				</li>
				<li>
					<a href="#">Aplicaciones</a>
				</li>
				<li class="nav-header">
					Programación
				</li>
				<li>
					<a href="#">Diseño Web</a>
				</li>
				<li>
					<a href="#">Lenguaje C</a>
				</li>
				<li>
					<a href="#">Java </a>
				</li>
				<li class="divider">
				</li>
				<li>
					<a href="#">Tutoriales</a>
				</li>
			</ul>
		</div>
	</div>
</div>
</body>
	<script type="text/javascript"  src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</html>
