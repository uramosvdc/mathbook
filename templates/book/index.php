
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		<!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
		<jdoc:include type="head" />

<!--<link rel="stylesheet" href="css/menu_style.css" type="text/css" />-->
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/menu_styles.css" type="text/css" media="screen, projection" />

</head>

<body>
	<jdoc:include type="message" />
	  <div class="mapaheader" style="text-align: center; font-size: 12px;">
    
		
			<li><a href=”#”>Inicio<a></li>
			<li><a href=”#”>Conoce Mathbook<a></li>
			<li><a href=”#”>Preguntas frecuentes<a></li>
			<li><a href=”#”>Glosario<a></li>
			<li><a href=”#”>Contacto<a></li>
			<li><a href=”#”>Mapa de sitio<a></li>
			
	  
 	
    <!-- end .mapheader -->
</div>

<div class="container">
  <div class="superior" >
    
		
			
	  
 	
    <!-- end .mapheader -->
</div>
<div class="header"><!-- end .header -->
  	<div class="titulo">
     </a>
    </div>
    <div class="menu">
		<ul id=”button”>
			<li><a href=”#”>MATEMATICAS</a></li>
			<li><a href=”#”>TAREAS</a></li>
			<li><a href=”#”>NEGOCIOS</a></li>
			<li><a href=”#”>ASESORES</a></li>
	  </ul>
 	</div>
    <div class="busqueda">
  
    </div>	
  </div>
 <div class="contenido">
    <div class="login">
    </div>
  </div>
  


  
 

  <div class="footer">
		<center>
   
   
			
					 <div class="linea">
  
    </div>	
				<div class="matematicas_menu" style="text-align: left; font-size: small;">
				  <font color="#color"><h5>MATEMATICAS</h5></font>
						<p><li><a href=”#”>Algebra</a></li></p>
						<p><li><a href=”#”>Derivadas</a></li></p>
						<p><li><a href=”#”>integrales</a></li></p>
						<p><li><a href=”#”>Series de Fourier </a></li></p>
						<p><li><a href=”#”>Transformada de Laplace</a></li></p>				
						<p><li><a href=”#”>Transformada Z</a></li></p>
						<p><li><a href=”#”>Ecuaciones diferenciales</a></li></p>
						<p><li><a href=”#”> Servicios en l&iacutenea</a></li></p>
	  </div>
				<div class="tareas_menu" style="text-align: left; font-size: small;">
				  <font color="#color"> <h5>TAREAS</h5></li></font>
						<p><li><a href=”#”>Mi cuenta</a></li></p>
						<p><li><a href=”#”>Servicios en Línea  </a></li></p>
						<p><li><a href=”#”>Platica con tu asesor</a></li></p>
						<p><li><a href=”#”>Información al cliente</a></li></p>

				</div>
				<div class="negocios_menu" style="text-align: left; font-size: small;">
					<font color="#color">
						<h5>NEGOCIOS</h5>
					</font>
							<p><li><a href=”#”>Para estudiantes</a></li></p>
							<p><li><a href=”#”>Para profesionistas</a></li></p>
							<p><li><a href=”#”>Para profesores</a></li></p>
							<p><li><a href=”#”>Información general</a></li></p>
					
				</div>
				<div class="negocios_menu" style="text-align: left; font-size: small;">
					<font color="#color">
						<h5>ASESORES</h5>
					</font>
						<p><li><a href=”#”>Mi cuenta</a></li></p>
						<p><li><a href=”#”>Empleo</a></li></p>
						<p><li><a href=”#”>Información general</a></li></p>

				</div>
			
 
		</center>
  <!-- end .footer -->
  	</div>
  <!-- end .container -->
  </div>
  <div class="trasero">
		  <?php
			  include("slider.html");
		  
			?>
	</div>
	<jdoc:include type="modules" />

</body>
</html>
