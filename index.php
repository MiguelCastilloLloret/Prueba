<!DOCTYPE html>
<html lang="es" >

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>GameOnline</title>

  
  	<link rel="stylesheet" href="./css/foundation.css">
  	<link rel="stylesheet" href="./css/flexslider.css">
  	<link rel="stylesheet" href="./css/estilo.css">

</head>
<body>
	<nav class="top-bar">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">
      <h1><a href="#">GameOnline.com</a></h1>
    </li>
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Left Nav Section -->
    <ul class="left">
      <li class="divider"></li>
      <li class="active"><a href="./index.html">Ultimas Noticias</a></li>
      <li class="divider"></li>
      <li class="has-dropdown"><a href="#">Juegos Navegador</a>
      <ul class="dropdown">
          <li><a href="./gestion.html">Gestión</a></li>
          <li><a href="#">ASCII Games</a></li>
          <li class="divider"></li>
          <li><a href="#">Ver todo &rarr;</a></li>
        </ul>
      </li>
      <li class="divider"></li>
      <li class="has-dropdown"><a href="#">Juegos Cliente</a>
        <ul class="dropdown">
          <li><a href="./mmorpg.html">MMORPG</a></li>
          <li><a href="./shooter.html">Shooter</a></li>
          <li><a href="#">Acción</a></li>
          <li><a href="#">MOBA</a></li>
          <li><a href="#">Estrategia</a></li>
          <li><a href="#">Deportes</a></li>
          <li class="divider"></li>
          <li><a href="#">Ver todo &rarr;</a></li>
        </ul>
      </li>
      <li class="divider"></li>
    </ul>

    <!-- Right Nav Section -->
    <ul class="right">
      <li class="divider hide-for-small"></li>
      <li class="divider"></li>
      <li class="has-form">
        <form>
          <div class="row collapse">
            <div id="nick" class="small-4 columns">
              <input type="text" value="User">
            </div>
            <div id="pass" class="small-4 columns">
            	<input type="password" value="Password">
            </div>
            <div class="small-4 columns">
              <a href="#" class="button">Login</a>
            </div>
          </div>
        </form>
      </li>
    </ul>
  </section>
</nav>
	
	<!-- Orbit Container -->
<div class="row">
	<div class="large-12 columns">
		<h3 class="h3centrado">Ultimos Juegos</h3>
		<hr/>
	</div>
</div>
<div class="flexslider" style="margin: 3% auto; width: 800px; height: 600px;">
  <ul class="slides">
    <li>
      <img src="./img/ogame.jpg">
    </li>
    <li class="active">
      <img src="./img/warface-logo.jpg">
    </li>
    <li>
      <img src="./img/gw2logo.png">
    </li>
    <li>
      <img src="./img/tera.jpg">
    </li>
    <li>
      <img src="./img/blackdesert.jpg" style="width: 800px; height: 600px;">
    </li>
  </ul>
</div>

  <div class="row">
		<div class="large-12 columns">
			<h2>Ultimas Noticias</h2>
			<hr />
		</div>
	</div>
			<!-- Grid Example -->
      <?PHP
          $conexion = new mysqli('mysql.hostinger.es','u899263272_01','SqRWDLPX6E','u899263272_01');
          if(!$conexion) printf("Fallo al conectar con la base de datos: %s", mysqli_connect_error()); #En caso de haber algun fallo en la conexion mostrara el error.
          $consulta = $conexion->query("SELECT * FROM Noticias ORDER BY Fecha DESC LIMIT 6");
          for ($i=0; $i<5 ; $i=$i+2) { 
            $resultado=mysqli_fetch_row($consulta);
            echo "<div class=\"row\">";
            echo "<div class=\"large-6 columns\">";
            echo "<div class=\"panel\">";
            echo "<h4>".$resultado[0]."</h4>";
            echo "<hr/>";
            echo "<p>".$resultado[2]."</p>";
            echo "<a class=\"small button success radius\" href=\"./pgenerica.html?ID=".$resultado[4]."\">Leer Mas</a>";
            echo "</div>";
            echo "</div>";
            $resultado=mysqli_fetch_row($consulta);
            echo "<div class=\"large-6 columns\">";
            echo "<div class=\"panel\">";
            echo "<h4>".$resultado[0]."</h4>";
            echo "<hr/>";
            echo "<p>".$resultado[2]."</p>";
            echo "<a class=\"small button success radius\" href=\"./pgenerica.html?ID=".$resultado[4]."\">Leer Mas</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
          }
          mysqli_close($conexion);
      ?>
			
	<nav class="top-bar bottom-bar">
	</nav>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  	<script src="./js/foundation.min.js"></script>

  	<script src="./js/vendor/jquery.js"></script>	

	<script src="./js/foundation.min.js"></script>

	<script src="./js/jquery.flexslider.js"></script>

	<script>
		$(window).load(function() {$('.flexslider').flexslider({animation: "slide"});});
	</script>

  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  <script src="js/foundation/foundation.interchange.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  <script src="js/foundation/foundation.abide.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
