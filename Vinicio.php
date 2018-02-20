<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/vistas.js"></script>
	  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/hoja_inicio.css">
	<title></title>
</head>
	
	<script type="text/javascript">
		$(function(){

			$("#slider div:gt(0)").hide();

			setInterval(function(){
				$("#slider div:first-child").fadeOut(1000)
				.next("div").fadeIn(1000)
				.end().appendTo("#slider");
			},3000);

		})

	</script>
<body>


	<div id="ContInicio">
		

			<div id="titulo">
				<h2>BIENVENIDO AL SISTEMA DE BLIBLIOTECA</h2>
			</div>
			<nav>
                   <ul class="fancyNav">
                <li id="home"><a onclick="VistaInicio();">Inicio</a></li>
                <li id="news"> <a onclick="VistaLibros();">Libros</a></li>
                <li id="about"><a onclick="VistaAcercaDe();">Acerca de Nosotros</a></li>
             				<li><a href="javascript:AbrirVentaLogin();">Entrar</a></li>
			</ul>
	
		</nav>
		<br>

			<div id="slider">
				<div><img src="img/slider1.jpg" width="1000" height="400"></div>
				<div><img src="img/ucp-biblioteca.jpg" width="1000" height="400"></div>
				<div><img src="img/slider3.jpg" width="1000" height="400"></div>
				<div><img src="img/slider4.jpg" width="1000" height="400"></div>
				<div><img src="img/slider5.jpg" width="1000" height="400"></div>
			</div>

			<div id="section">
				<div id="article1">
					<img src="img/bimg5.jpg" width="200" height="200">
					<h1>Los beneficios de Leer</h1>
					<p>
						La lectura aumenta la capacidad de las personas para concentrarse, favorece las conexiones neuronales y, si se realiza con frecuencia, es un ejercicio muy útil para evitar la pérdida de algunas funciones cognitivas. Leer mantiene activa la mente y esto, según estudios científicos, incrementa la rapidez de respuesta de las personas dado que la lectura entrena al cerebro para ordenar ideas.
					</p>
				</div>

				<div id="article2">
					<img src="img/bimg6.jpg" width="200" height="200">
					<h1>Bibliotecas Virtuales</h1>
					<p>
						Es importante considerar que en el concepto de biblioteca virtual está presente el efecto de la integración de la informática y las comunicaciones cuyo exponente esencial es Internet. No se trata solamente de que los contenidos estén en formato digital lo que prevalece en el concepto de biblioteca digital.  Los contenidos digitales son una parte necesaria pero no suficiente.
					</p>
				</div>
			</div>


	</div>



</body>
<script>
 
	$(function(){
  $(".slides").slidesjs({
    play: {
      active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "slide",
        // [string] Can be either "slide" or "fade".
      interval: 3000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
    }
  });
});
 
	</script>
</html>