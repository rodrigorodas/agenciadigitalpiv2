<!DOCTYPE html>
<html lang="es">
<head>
<title>.: Agencia Digital Pi :.</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<link rel="author" type="text/plain" href="humans.txt" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Gooogle Fonts Links -->
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
	});
});
</script>

<script type="text/javascript">
$(document).ready(function(){
$("body").append("<div class='scrollup'> <img src='images/flecha.png'></div>");
$(window).scroll(function(){
if ($(this).scrollTop() > 120) $('.scrollup').fadeIn();
else $('.scrollup').fadeOut();
});
$(document).on("click",".scrollup",function(e){
e.preventDefault();
$("html, body").stop().animate({ scrollTop: 0 }, "slow");
});
});
</script>

<style>
.scrollup {

bottom: 1.5em;
color: #000;
cursor: pointer;
display: none;
padding: .25em .5em;
position: fixed;
right: 1.5em;
}
</style>

</head>
<body>
<!-- Header starts Here -->
	<div class="header" id="home">
		<div class="container">
		  		<div class="menu">																
			<a href="#" class="right_bt" id="activator"><img src="images/nav.png" alt=""/></a>
				<div class="box" id="box">
				   <div class="box_content_center">
					   <div class="menu_box_list">
						   <ul>
							   <li><a href="#home" class="scroll">Inicio</a></li>
							   <li class="active"><a href="#pi" class="scroll">Sobre Pi</a></li>
							   <li class="active"><a href="#quehacemos" class="scroll">Qu&eacute; hacemos?</a></li>
							   <li><a href="#contact" class="scroll">Contactos</a></li>
							</ul>
						</div>
						<a class="boxclose" id="boxclose"><img src="images/close.png" alt=""/></a>
					  </div>                
					</div>
					<script type="text/javascript" src="js/easing.js"></script>
					     <script type="text/javascript">
								var $ = jQuery.noConflict();
									$(function() {
										$('#activator').click(function(){
												$('#box').animate({'top':'0px'},500);
										});
										$('#boxclose').click(function(){
												$('#box').animate({'top':'-700px'},500);
										});
									});
									$(document).ready(function(){
									
									//Hide (Collapse) the toggle containers on load
									$(".toggle_container").hide(); 
									
									//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
									$(".trigger").click(function(){
										$(this).toggleClass("active").next().slideToggle("slow");
										return false; //Prevent the browser jump to the link anchor
									});
									
									});
								</script>
				</div> 	
				<div class="logo">
				  <a href="index.html"><img src="images/logo.png" alt="Agencia Digital Pi"></a>
				</div>
				<div class="top-social">
					<ul class="social">
						<li><a href="http://www.facebook.com/AgenciaDigitalPI" target="_blank"><i class="fa"></i></a></li>
						<li><a href="https://twitter.com/adigitalpi" target="_blank"><i class="tw"></i></a></li>
						<!--<li><i class="gp"></i></li>
						<li><i class="pin"></i></li>-->
					</ul>
				</div>
	  			<div class="clearfix"> </div>
	  			
	  			
	  			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        timeout: 10000,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--End-slider-script-->
			<!-- Slideshow 4 -->
			    <div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <div class="slider-top">
			          	<h1>Generamos ideas</h1>
			          	<p>El d&iacute;a a d&iacute;a agota los recursos creativos de las organizaciones, <strong>Agencia Digital Pi</strong> le proporciona nuevas ideas creativas de negocio, probadas en los diferentes sectores de consumo y mercados.</p>
			          	<ul class="social-slide">
			          		<li><i class="win"></i></li>
			          		<li><i class="android"></i></li>
			          		<li><i class="mac"></i></li>
			          	</ul>
			          </div>
			        </li>
			        <li>
			          <div class="slider-top">
			          	<h1>Trabajamos con tecnolog&iacute;a vanguardia</h1>
			          	<p>Acaso no vivimos en una &eacute;poca gloriosa? El mundo est&aacute; en la punta de nuestros dedos y nos ofrece respuestas a todo tipo de necesidades. Nosotros fusionamos los elementos del arte digital y la tecnolog&iacute;a de la informaci&oacute;n, para crear soluciones creativas e innovadoras.</p>
			          	<ul class="social-slide2">
			          		<li><i class="win2"></i></li>
			          		<li><i class="android2"></i></li>
			          		<li><i class="mac2"></i></li>
			          	</ul>
			          </div>
			        </li>
			        <li>
			          <div class="slider-top">
			          	<h1>Hacemos crecer su negocio</h1>
			          	<p>Una empresa puede posicionarse en el mercado con t&eacute;cnicas bien dirigidas como por ejemplo una frase, un concepto, una buena organizaci&oacute;n o una buena estrategia pueden hacer la diferencia para ampliar las fronteras
			          		y llegar a m&aacute;s clientes.</p>
			          	<ul class="social-slide3">
			          		<li><i class="win3"></i></li>
			          		<li><i class="android3"></i></li>
			          		<li><i class="mac3"></i></li>
			          	</ul>
			          </div>
			        </li>
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
	  			<!-- banner Slider Ends Here --> 
		</div>
	</div>
	<!-- Header Ends Here -->
	<!-- Content Starts Here -->
	<div class="content" id="pi">
		<div class="container">
			<div class="content-top">
				<h2>Agencia Digital Pi</h2>
				<p>Somos una Agencia Digital de Marketing y Comunicaci&oacute;n, facilitamos el acoplamiento de la empresa dentro del medio enfoc&aacute;ndonos en Redes Sociales, Marketing Digital, Microblogging, Community Management, Branding y Comunidades Virtuales.</p>
				<p> M&aacute;s all&aacute; de lo que proyectamos, somos un grupo de profesionales apasionados por todo el mundo tecnol&oacute;gico y por supuesto la buena comida y el caf&eacute;.</p>
			</div>
			<div class="row content-bottom-row">
				<div class="col-md-3 content-row-column">
					<div class="column-top">
						<h3><a href="#"><strong>Misi&oacute;n</strong></a></h3>
						<p>Nuestra misi&oacute;n es ser una agencia que genera y ejecuta estrategias de comunicaci&oacute;n online con creatividad, calidad y &eacute;tica.</p>
					</div>
					<div class="column-top">
						<h3><a href="#"><strong>Visi&oacute;n</strong></a></h3>
						<p>Nuestra visi&oacute;n es ser una agencia l&iacute;der de marketing digital en Paraguay y el mundo, generar alto valor para nuestros clientes, socios de negocio, colaboradores y comunidad.</p>
					</div>
				</div>
				<div class="col-md-6 content-row-column">
					<img src="images/ipad.png" />
				</div>
				<div class="col-md-3 content-row-column">
					<div class="column-top">
						<h3><a href="#"><strong>Filosof&iacute;a</strong></a></h3>
						<p>Nuestra filosof&iacute;a parte de un enfoque de innovaci&oacute;n y entendimiento de las necesidades de los clientes. En cada proyecto generamos nuevas ideas.</p>
					</div>
					<div class="column-top">
						<h3><a href="#"><strong>M&aacute;s all&aacute;</strong></a></h3>
						<p>Para nosotros todos los clientes son distintos, brindamos soluciones personalizadas, a trav&eacute;s de un exhaustivo an&aacute;lisis. No nos conformamos s&oacute;lo con un buen dise&ntilde;o o un excelente desarrollo, vamos m&aacute;s all&aacute;.</p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="content" id="quehacemos" style="background: #fcdb00;">
		<div class="container">
			<div class="content-top">
				<h2>Qu&eacute; hacemos?</strong></h2>
				<p>Dise&ntilde;o y desarrollo web + SEO y SEM + Identidad corporativa + Social media + Marketing digital + Email marketing + Apps m&oacute;viles + Dominios .com .net .org y otros + Alojamientos para sitios web</p>
			</div>
			<div class="row content-bottom-row">
				<div class="col-md-3 content-row-column">
					<div class="column-top">
						<h3><a href="#"><strong>Dise&ntilde;o y desarrollo web</strong></a></h3>
						<p style="color: #333;">En la <strong>Agencia Digital Pi</strong> desarrollamos sitios web acorde a las necesidades de cada cliente, mediante un estudio completo de su empresa alcanzamos las informaciones necesarias para llegar al mejor resultado y utilizamos tecnolog&iacute;as actuales y frameworks a fin de ofrecer m&aacute;s seguridad.</p>
					</div>
					<div class="column-top">
						<h3><a href="#"><strong>Identidad corporativa</strong></a></h3>
						<p style="color: #333;">El dise&ntilde;o es la base en la cual giran nuestras ideas. En la <strong>Agencia Digital Pi</strong> proyectamos un dise&ntilde;o que transmita la idea de la empresa y la comunique de manera clara y visual. Componemos una nueva identidad e imagen y tambi&eacute;n adaptamos el dise&ntilde;o original de su negocio generando nuevas ideas.</p>
					</div>
				</div>
					<div class="col-md-6 content-row-column">
						<img src="images/ipad2.png" />
					</div>
				<div class="col-md-3 content-row-column">
					<div class="column-top">
						<h3><a href="#"><strong>Dominios y alojamientos web</strong></a></h3>
						<p style="color: #333;">Contamos con la venta de dominios y alojamientos web para nuestros clientes, vimos la necesidad de implementar este servicio a fin de que nuestros clientes tengan la posibilidad de tener todos los servicios en un solo lugar.</p>
					</div>
					<div class="column-top">
						<h3><a href="#"><strong>Publicidad</strong></a></h3>
						<p style="color: #333;">Publicidad online refiere a todas aquellas estrategias y t&eacute;cnicas utilizadas para promover y dar a conocer un producto o servicio, en la <strong>Agencia Digital Pi</strong> le ayudaremos a crear una estrategia en todos los canales de comunicaci&oacute;n, haremos la implementaci&oacute;n y mediremos la eficacia.</p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- Content Ends Here -->
	<!-- Footer Starts Here -->
	<div class="footer" id="contact">
		<div class="container">
			<div class="footer-top">
				<h3>Cont&aacute;ctenos</h3>
				<p>Si est&aacute; interesado en nuestros servicios ingrese sus datos y nos pondremos en contacto con usted en la brevedad.</p>
				<form method="post" action="index.php">
					<div class="col-md-3">
						<label style="color: #FFFFFF">Nombre:</label>
						<input type="text" name="nombre" placeholder="Juan Perez" required>
					</div>
					<div class="col-md-3">
						<label style="color: #FFFFFF">Tel:</label>
						<input type="text" name="telefono" placeholder="0000 000 000" required>
					</div>
					<div class="col-md-4">
						<label style="color: #FFFFFF">Email:</label>
						<input type="text" name="email" placeholder="hola@ejemplo.com" required>
					</div>
					<div class="col-md-2">
						<input type="submit" name="enviar_btn"/>
					</div>
<? 

@$nombre = addslashes($_POST['nombre']);
@$telefono = addslashes($_POST['telefono']);
@$email = addslashes($_POST['email']);

$cabeceras = "From: $email\n" 
 . "Reply-To: $email\n";
$asunto = "Mensaje enviado desde la Agencia Digital Pi"; 
$email_to = "3.14@agenciadigitalpi.com"; 
$contenido = "$nombre ha enviado un mensaje desde la web de Agencia Digital Pi\n"
. "\n"
. "Nombre: $nombre\n"
. "Email: $email\n"

. "Telefono: $telefono\n"
. "\n";

if (empty($_POST['email'])) {
  echo("");
} else {

if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {
echo"<center>";
echo("<p style='color: #FFFFFF'>Gracias, su mensaje se envi&oacute; correctamente, en breve nos pondremos en contacto con usted.</p>");
}else{
 
die("<p style='color: #FFFFFF'>Error: Su informaci&oacute;n no pudo ser enviada, intente m&aacute;s tarde.</p>"); echo "</center>";
} }

?>
				</form>
			</div>
			<div class="row footer-row">
				<div class="col-md-2 footer-row-column">
					<p>Paraguari 813 Asunci&oacute;n - Paraguay</p>
					<small><a href="#">3.14@agenciadigitalpi.com</a></small>
					<p>+595 971 787 787 +595 971 767 767</p>
				</div>
				<div class="col-md-2 footer-row-column">
					<ul class="footer-add">
						<li><a href="http://www.agenciadigitalpi.com/blog" target="_blank">Blog de Pi</a></li>
						<li><a href="http://www.rodrigorodas.com/" target="_blank">Blog del Ceo</a></li>
						<li><a href="http://www.rpygroup.com" target="_blank">RpyGroup</a></li>
						<li><a href="http://www.namepy.com" target="_blank">Name Py</a></li>
					</ul>
				</div>
				<div class="col-md-2 footer-row-column">
					<ul class="footer-add">
						<li><a href="#home">Inicio</a></li>
						<li><a href="#pi">Sobre Pi</a></li>
						<li><a href="#quehacemos">Qu&eacute; hacemos?</a></li>
						<li><a href="http://www.agenciadigitalpi.com/archivos/terminos.pdf" target="_blank">T&eacute;rminos</a></li>
					</ul>
				</div>
				<!--<div class="col-md-6 footer-row-column">
					<ul class="footer-add">
						<li><a href="#">Download</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Documents</a></li>
					</ul>
				</div>
				<div class="col-md-2 footer-row-column">
					<ul class="footer-add">
						<li><a href="#">Examples</a></li>
						<li><a href="#">Shop</a></li>
						<li><a href="#">License</a></li>
					</ul>
				</div>-->
				<div class="clearfix"></div>
			</div>
			<p class="copyright">2016 <span><a href="http://www.agenciadigitalpi.com/">Agencia Digital Pi</a></span></p>
		</div>
	</div>
	<!-- Footer Ends Here -->
</body>
