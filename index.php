<!DOCTYPE HTML>
<!-- BEGIN html -->
<?php include('popover.php'); ?>
<?php include('magnificpop.php');?>
<?php header('Content-Type: text/html; charset=UTF-8');  ?>

<html lang = "es">
	<!-- BEGIN head -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Blood Window TV</title>
		
		<meta name="description" content="BloodWindowTV, es una plataforma donde directores, escritores, productores, artistas visuales y cineastas se puedan encontrar e impulsar en conjunto logrando que sus peliculas puedan alcanzar un p&uacute;blico deseoso de ver sus producciones.Es una plataforma de formaci&oacute;n, desarrollo y busqueda de coproducci&oacute;n">
		<meta name="keywords" content="BloodWindowTV.com, BloodWindow, BloodWindow TV, Blood Window TV, blood, window, tv, mercado, terror, fantasia, peliculas, cortometrajes, genero, latino, cine.">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.jpg"  />

    	<!-- Bootstrap Core CSS -->
    	<link rel="stylesheet" href="css/bootstrap.min.css" >
    	<!-- End Bootstrap Core CSS -->
		<link rel="stylesheet" href="css/reset.css" />
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,700' />
		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/ot-menu.css" />
		<link rel="stylesheet" href="css/main-stylesheet.css" />
		<link rel="stylesheet" href="css/shortcodes.css" />
		<link rel="stylesheet" href="css/responsive.css" />

		<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
		<!-- End WOWSlider.com HEAD section -->

		<!-- Magnific popup CSS -->
		<link type="text/css" rel="stylesheet"  href="css/magnific-popup.min.css" />
		<link type="text/css" rel="stylesheet"  href="css/html_popup.css" />
		<!-- End Magnific popup CSS -->

		<?php
			session_start();
			$usuario = 0;
			$open_iniciar_sesion = 0;
			if(isset($_SESSION['usuario'])){
				$usuario = $_SESSION['usuario'];
			}
			if (isset($_GET['open_iniciar_sesion'])) {
				$open_iniciar_sesion = $_GET['open_iniciar_sesion'];
			}
			echo "<script>var usuario = ".$usuario.";</script>";
			echo "<script>var open_iniciar_sesion = ".$open_iniciar_sesion.";</script>";
		?>

		<script>
			//funcion para abrir el popup de video con fondo de banner
			function fnc_popvideo(){
				$.magnificPopup.open({
					items: {
						src: '<div class="box_popup_video">'+
      						'<div id="box_pp_video">'+
      						'<div class="col-md-1"></div>'+
      						'<div class="col-md-10 text-center">' +
      						'<div class="video-responsive">'+
      						'<iframe src="https://player.vimeo.com/video/139267752?autoplay=1" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'+
      						'</div>'+
      						'</div>'+
      						'<div class="col-md-1"></div>'+
      						'</div>'+
      						'</div>'+
      						'</div>',
      					type: 'inline'
					},
					closeBtnInside: true
				});

			}
			//funcion popup horatios cannes
			function fnc_horarios(){
				$.magnificPopup.open({
  					items: {
      					src: '<div class="box_horarios_cannes">'+
      						'<div id="box_somos_content">'+
      						'<div class="col-md-10"> ' +
      						'</div>'+
      						'</div>'+
      						'</div>',
      					type: 'inline'
  					},
  					closeBtnInside: true
				});
			}
			//funcion popup Informacion
			function fnc_somos(){
				$.magnificPopup.open({
  					items: {
      					src: '<div class="box_somos">'+
      						'<div id="box_somos_content">'+
      						'<div class="col-md-12"> ' +
      						'<font family="Roboto" size="4px" style="color: white;">BLOOD WINDOW TV, es una plataforma donde directores, escritores, productores, artistas visuales y cineastas se puedan encontrar e impulsar en conjunto logrando que sus peliculas puedan alcanzar un p&uacute;blico deseoso de ver sus producciones<br> Es una plataforma de formaci&oacute;n, desarrollo y busqueda de coproducci&oacute;n.</font>'+
      						'</div>'+
      						'</div>'+
      						'</div>',
      					type: 'inline'
  					},
  					closeBtnInside: true
				});
			}
			//funcion popup patrocinadores
			function fnc_partners(){
				$.magnificPopup.open({
  					items: {
      					src: '<div class="box_partners">'+
      						'<div id="box_partners_content">'+
      						'<div class="col-md-10"> ' +
      						'<ul style="display: inline">'+
      						'<li><img src="images/partners/partnert_1.jpg" alt="" title=""/></li>'+
      						'<li><img src="images/partners/partnert_2.jpg" alt="" title=""/></li>'+
      						'<li><img src="images/partners/partnert_3.jpg" alt="" title=""/></li>'+
      						'<li><img src="images/partners/partnert_4.jpg" alt="" title=""/></li>'+
      						'<li><img src="images/partners/partnert_5.jpg" alt="" title=""/></li>'+
      						'<li><img src="images/partners/partnert_6.jpg" alt="" title=""/></li>'+
      						'<li><img src="images/partners/partnert_7.jpg" alt="" title=""/></li>'+
      						'<li><img src="images/partners/partnert_8.jpg" alt="" title=""/></li>'+
      						'<li><img src="images/partners/partnert_9.jpg" alt="" title=""/></li>'+
      						'</ul></div>'+
      						'</div>'+
      						'</div>',
      					type: 'inline'
  					},
  					closeBtnInside: true
				});
			}
		</script>
	<!-- END head -->
	</head>

	<!-- BEGIN body -->
	<?php 
		if(isset($_SESSION['usuario'])){
	echo '<body>';
		}
		else{
	echo '<body onload="javascript:fnc_popvideo()">';
		}
	 ?>
	 <?php include_once("analyticstracking.php") ?>
	 <!-- Google Tag Manager -->
	<noscript>
		<iframe src="//www.googletagmanager.com/ns.html?id=GTM-5R4SJD"height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<script>
		(function(w,d,s,l,i){
			w[l]=w[l]||[];w[l].push({
				'gtm.start':new Date().getTime(),event:'gtm.js'
			});
			var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-5R4SJD');
	</script>
<!-- End Google Tag Manager -->
		<!-- BEGIN .boxed -->
		<div class="boxed">
			
			<!-- BEGIN .header -->
			<header class="header dark">
				
				<!-- BEGIN .wrapper -->
				<div class="wrapper">
					<!-- BEGIN .header-content -->
					<div class="header-content">
						<div class="header-logo">
							<!-- BEGIN #main-menu -->
							<nav id="main-menu">
								<ul class="bottom-menu ot-menu-add" rel="Categories" >
									<li><a href="#" onclick="fnc_somos(); return false;" ><font family="Roboto" size="4px">Somos</font></a></li>
									<li><a href="#peliculas" ><font family="Roboto" size="4px">Peliculas</font></a></li>
									<li><a href="#" onclick="fnc_partners(); return false;"><font family="Roboto" size="4px">Partners</font></a></li>
								</ul>
							</nav>
							<!-- END #main-menu -->
							<div id="main-menu2">

								<?php if($usuario == 0){?>

								<div id="btn_nuevo_registro" style="background-color: rgb(227,31,38); width: 30%; height: 20px; padding: 4px; margin-bottom:10px; text-align: center;">
									<a href="#" ><font family="Roboto" size="1px" style="color: white;">Registrate</font></a>
								</div>
								<div id="btn_iniciar_sesion" style="background-color: rgb(227,31,38); width: 30%; height: 20px; padding: 4px; margin-bottom:10px; text-align: center;">
									<a href="#"><font family="Roboto" size="1px" style="color: white;">Iniciar sesi&oacute;n</font></a>
								</div>

								<?php }else{?>

								<div id="btn_cerrar_sesion" style="background-color: rgb(227,31,38); width: 30%; height: 20px; padding: 4px; margin-bottom:10px; text-align: center;">
									<a href="#"><font family="Roboto" size="1px" style="color: white;">Cerrar sesi&oacute;n</font></a>
								</div>

								<?php } ?>

								<div>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="https://www.facebook.com/pages/BloodWindow-TV/1440117599621702" target="_blank">
										<img src="images/botones/facebook_red.png" style="width: 25px; height: 25px;"/>
									</a>
								</div>
							</div>
								<!-- <h1><a href="index.html">VIDEOMAG</a></h1> -->
						</div>
					<!-- END .header-content -->
					</div>
				<!-- END .wrapper -->
				</div>

				<!-- BEGIN .video-slider -->
				<div class="video-slider">
					<!-- BEGIN .wrapper -->
					<div class="wrapper">
    					<!-- Half Page Image Background Carousel Header -->
						<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
						<div id="wowslider-container1">
							<div class="ws_images">
								<ul>
									<li><img src="images/sliders/slider1.jpg" alt="slider1" title="" id="wows1_0"/></li>
									<li><img src="images/sliders/slider2.jpg" alt="slider2" title="" id="wows1_1"/></li>
									<li><img src="images/sliders/slider3.jpg" alt="slider3" title="" id="wows1_2"/></li>
									<li><a href="https://player.vimeo.com/video/124465039" id="popup_slider1"><img src="images/sliders/slider4.jpg" alt="slider4" title="" id="wows1_3"/></a></li>
									<li><img src="images/sliders/slider5.jpg" alt="slider5" title="" id="wows1_4"/></li>
									<li><img src="images/sliders/slider6.jpg" alt="slider6" title="" id="wows1_5"/></li>
									<li><img src="images/sliders/slider7.jpg" alt="slider7" title="" id="wows1_6"/></li>
								</ul>
							</div>
							<div class="ws_bullets">
								<div>
									<a href="#" title=""></a>
									<a href="#" title=""></a>
									<a href="#" title=""></a>
									<a href="#" title=""></a>
									<a href="#" title=""></a>
									<a href="#" title=""></a>
									<a href="#" title=""></a>
								</div>
							</div>
							<div class="ws_shadow"></div>
						</div>	
						<div class="content-panel">
							<div class="panel-block banner-block" style="padding: 0px; margin-top: 20px;">
								<!--img src="images/banners/dia_muertos.jpg" width="100%" height="460px" alt="Dia de muertos">
								<map name="banner_dia_muertos">
									<area id="Convocatoria" shape="rect" coords="1200,0,800,100" href="doc/convoca/CONVOCATORIA DIA DE MUERTOS.pdf" alt="Concurso Dia de Muertos" target="_blank">
									<area id="form_inscripcion" shape="rect" coords="1200,0,800,200" href="index.php" alt="Formulario de inscripci&oacute;n" target="_blank">
								</map-->
								<?php 
									if($usuario <> 0){
								?>

								<a href="doc/convoca/CONVOCATORIA DIA DE MUERTOS.pdf" target="_blank" onclick=""><img src="images/banners/dia_muertos.jpg" width="100%" height="460px" alt="Dia de muertos"></a>
								
								<?php
									}
									else{
								?>

								<a id="btn_compuesto" href=""><img src="images/banners/dia_muertos.jpg" width="100%" height="460px" alt="Dia de muertos"></a>

								<?php
									}
								 ?>
								
							</div>
						</div>
						<div class="content-panel">
							<div class="panel-block banner-block" style="padding: 0px; margin-bottom: -35px">
								<a href="#" target="_blank"><img src="images/banners/salas_virtuales_sitges.png" width="100%" height="140px" alt=""></a>
							</div>
						</div>

						<div class="content-panel" style="margin-bottom: 0px; background-color: rgb(53,00,00);">
							<div style="height: 15%;" class="text-center">
								<a href="http://sitgesfilmfestival.com/"><img src="images/banners/logofest2015.png" style="height:400%;width:30%;"></a>
							</div>
							
						</div>

					<!-- END .with-sidebar-layout -->
						<div class="content-panel">
							<div class="panel-block banner-block" style="padding: 0px; margin-top: 20px; margin-bottom: -10px;">
								<a href="#" onclick="fnc_horarios(); return false;" ><img src="images/banners/banner1.jpg" width="100%" height="230px" alt=""></a>
							</div>
						</div>
						<span id="peliculas"></span>
					</div>
				</div>
			<!-- END .header -->
			</header>
			
			
			<!-- BEGIN .content -->
			<section class="content">
				
				<!-- BEGIN .wrapper -->
				<div class="wrapper">
					
					<!-- BEGIN .with-sidebar-layout -->
					<div class="without-sidebar-layout">

						<div class="content-panel" style="margin-bottom: 0px;">
							<div style="height: 15px;"></div>
							<div class="panel-block video-list grid" style="margin-left: 6%">
							
								<?php
									popover_html('03','NO','NO','Expediente Santiso','Brian Maya','Un periodista estrella se vuelve loco luego de la p&eacute;rdida de su hija en una misi&oacute;n internacional. Al salir del psiqui&aacute;trico deber&aacute; recomponer su vida, incluyendo su matrimonio. Pero al investigar la desaparici&oacute;n de su hija, la verdad o su cordura estar&aacute;n en juego','Ciencia ficci&oacute;n','84 min.','expediente_santiso.jpg','right');
									popover_html('04','127650969','NO','Scherzo Diabolico','Adri&aacute;n Garc&iacute;a Bogliano','Aram est&aacute; atrapado en la monoton&iacute;a de su vida, esperando una promoci&oacute;n en su trabajo la cual no llega; su jefe no le presta atenci&oacute;n y a su esposa ya no le importa su matrimonio. &eacute;l decide cambiar las cosas y secuestra a una adolecente. Lo que no sabe es que su plan tiene una falla y la trampa caer&aacute; sobre &eacute;l.','Horror','90 min.','scherzo_diabolico.jpg','rigth');
									popover_html('05','126187408','NO','El eslabon podrido','Javier Diment','En un peque&ntilde;o pueblo aislado vive un le&ntilde;ador mentalmente minusv&aacute;lido,  con su senil  curandera madre y su hermana menor, quien es la joven prostituta favorita del pueblo. Solo queda un hombre  con el cual ella no ha estado, es el esposo de la otra prostituta del pueblo. Si se conociera la verdad  no dudar&iacute;an en matarlo.','Horror','74 min.','eslabon_podrido.jpg','rigth');
									popover_html('06','126291961','NO','El c&aacute;daver de Anna Fritz','H&eacute;ctor Hern&aacute;ndez Vicens','Pau es un joven t&iacute;mido e introvertido que trabaja como asistente en el hospital donde llevan el cuerpo de Anna Fritz, una de las m&aacute;s hermosas y codiciadas actrices del mundo, quien acaba de morir. En la morgue Pau captura una foto del cuerpo desnudo de Anna Fritz y se la manda a su amigo Iv&aacute;n,  quien visitando a su amigo  en el hospital y con un poco de alcohol encima, quiere ver el cuerpo de Anna Fritz para disfrutar de una oportunidad &uacute;nica en la vida.','Horror','74 min.','anna_fritz.jpg','left');
								?>

							</div>
						</div>

						<div class="content-panel">
							<div class="panel-block banner-block" style="padding: 0px; margin-bottom: -35px">
								<a href="#" target="_blank"><img src="images/banners/salas_virtuales.png" width="100%" height="140px" alt=""></a>
							</div>
						</div>

						<div class="content-panel" style="margin-bottom: 0px; background-color: rgb(53,00,00);">
							<div style="height: 15px;"></div>
							<div class="panel-block video-list grid" style="margin-left: 6%">

								<?php
									if($usuario <> 0){
										popover_html_red('08','124465039','124874646','Naturaleza muerta','Gabriel Grieco','"Naturaleza muerta" arranca cuando varias personas ligadas a la industria ganadera empiezan a desaparecer. Se rumorea que han sido v&iacute;ctimas de una disputa entre rancheros y agricultores, y una periodista investiga el caso. El principal sospechoso parece ser un grupo ecologista radical, pero la verdad podr&iacute;a ser mucho m&aacute;s aterradora….','Horror','97 min.','naturaleza_muerta.jpg','right');
									}else{
										popover_html_red_login('08','124465039','124874646','Naturaleza muerta','Gabriel Grieco','"Naturaleza muerta" arranca cuando varias personas ligadas a la industria ganadera empiezan a desaparecer. Se rumorea que han sido v&iacute;ctimas de una disputa entre rancheros y agricultores, y una periodista investiga el caso. El principal sospechoso parece ser un grupo ecologista radical, pero la verdad podr&iacute;a ser mucho m&aacute;s aterradora….','Horror','97 min.','naturaleza_muerta.jpg','right');
									}
									if($usuario <> 0){
										popover_html_red('09','NO','NO','Testigo &iacute;ntimo','Santiago Fern&aacute;ndez Calvete','Facundo es abogado y tiene un affair con Violeta, la novia de su hermano Rafa. Cuando Rafa encuentra a Violeta muerta en el departamento Facundo acude a ayudar a deshacerse del cuerpo. La noche se vuelve un juego perverso de rencor, violencia, venganza y muerte.','Thriller','94 min.','testigo_intimo.jpg','right');
									}else{
										popover_html_red_login('09','NO','NO','Testigo &iacute;ntimo','Santiago Fern&aacute;ndez Calvete','Facundo es abogado y tiene un affair con Violeta, la novia de su hermano Rafa. Cuando Rafa encuentra a Violeta muerta en el departamento Facundo acude a ayudar a deshacerse del cuerpo. La noche se vuelve un juego perverso de rencor, violencia, venganza y muerte.','Thriller','94 min.','testigo_intimo.jpg','right');
									}
									//popover_html_red_login('07','124983171','NO','12 Segundos','Kenneth Müller','Tras la extra&ntilde;a desaparici&oacute;n de su jefe; Selma se ve comprometida a buscarlo. Viaja a la monta&ntilde;a donde descubre un asesinato atroz. Un ermita&ntilde;o y su perro carro&ntilde;ero son los sospechosos. El destino la lleva a enfrentar sus miedos sufriendo una persecuci&oacute;n extenuante junto a un rapelista. Aprende que s&oacute;lo bastan unos segundos para decidir superarlos y salvar su vida.','Horror','74 min.','12_segundos.jpg','right');
									popover_html_red_wsoud('07','124983171','NO','104765425','12 Segundos','Kenneth Müller','Tras la extra&ntilde;a desaparici&oacute;n de su jefe; Selma se ve comprometida a buscarlo. Viaja a la monta&ntilde;a donde descubre un asesinato atroz. Un ermita&ntilde;o y su perro carro&ntilde;ero son los sospechosos. El destino la lleva a enfrentar sus miedos sufriendo una persecuci&oacute;n extenuante junto a un rapelista. Aprende que s&oacute;lo bastan unos segundos para decidir superarlos y salvar su vida.','Horror','74 min.','12_segundos.jpg','right');
									if($usuario <> 0){
										popover_html_red('10','127631705','127625457','Malos h&aacute;bitos','Sim&oacute;n-Bross','Matilde, que ha dejado la medicina para ingresar como novicia en un convento, realiza secretamente un ayuno m&iacute;stico para terminar con lo que considera un segundo diluvio, mientras prepara a su prima Linda para la  primera comuni&oacute;n. Elena, la madre de Linda, es una mujer obsesiva y delgada hasta la exageraci&oacute;n, se avergüenza de que su hija sea gordita, y hace hasta lo imposible por adelgazarla. Mientras tanto, Gustavo, el pap&aacute;, descubrir&aacute; el amor gracias a la Gordibuena, una alumna amante de la buena comida.','Drama','120 min.','malos_habitos.jpg','left');
									}else{
										popover_html_red_login('10','127631705','127625457','Malos h&aacute;bitos','Sim&oacute;n-Bross','Matilde, que ha dejado la medicina para ingresar como novicia en un convento, realiza secretamente un ayuno m&iacute;stico para terminar con lo que considera un segundo diluvio, mientras prepara a su prima Linda para la  primera comuni&oacute;n. Elena, la madre de Linda, es una mujer obsesiva y delgada hasta la exageraci&oacute;n, se avergüenza de que su hija sea gordita, y hace hasta lo imposible por adelgazarla. Mientras tanto, Gustavo, el pap&aacute;, descubrir&aacute; el amor gracias a la Gordibuena, una alumna amante de la buena comida.','Drama','120 min.','malos_habitos.jpg','left');		
									}
								?>
							
							</div>
						</div>

					<!-- END .with-sidebar-layout -->
					</div>

					<div class="content-panel">
						<div class="panel-block banner-block" style="padding: 0px;">
							<img src="images/banners/banner2.jpg" width="100%" height="254px" alt="" usemap="#banner_itesm">
							<map name="banner_itesm">
									<area id="tganador1" shape="rect" coords="1200,0,800,100" href="https://player.vimeo.com/video/127631704" alt="Trailer ganador">
									<area id="tganador2" shape="rect" coords="1200,110,800,200" href="https://player.vimeo.com/video/127631703" alt="Trailer ganador">
									<area shape="rect" coords="1200,230,800,200" href="http://www.itesm.mx/lcmd" target="_blank" alt="ITESM">
							</map>
						</div>
					</div>
					<div class="content-panel">
						<div class="panel-block banner-block" style="padding: 0px; margin-top: -27px;">
							<a id="amasb" href="https://player.vimeo.com/video/126306430"><img src="images/banners/banner3.jpg" width="100%" height="193px" alt=""></a>
						</div>
					</div>
					<div class="content-panel">
						<div class="panel-block banner-block" style="padding: 0px; margin-top: 20px;">
							<img src="images/banners/banner4.jpg" width="100%" height="230px" alt="">
						</div>
					</div>
					
				<!-- END .wrapper -->
				</div>
			<!-- BEGIN .content -->
			</section>

			<div class="footer-bottom">
			</div>
		<!-- END .boxed -->
		</div>
		<!-- jQuery -->
		<script src="jscript/jquery.min.js"></script>
		<script src="jscript/jquery-validate/jquery.validate.js"></script>
		<script src="jscript/jquery-validate/additional-methods.js"></script>
		<script src="jscript/jquery-validate/jquery.validate.error.js"></script>
		<!-- End jQuery -->
		<script type="text/javascript" src="jscript/ot-menu.js"></script>
		<script type="text/javascript" src="jscript/theme-scripts.js"></script>
		<script type="text/javascript" src="jscript/jwplayer.js"></script>
		<!-- End jQuery -->
    	<!-- Bootstrap -->
    	<script src="jscript/bootstrap.min.js"></script>
    	<!-- End Bootstrap -->
    	<!-- Bootstrap -->
    	<script src="jscript/bootbox.min.js"></script>
    	<!-- End Bootstrap -->
		<!-- wowslider -->
		<script type="text/javascript" src="engine1/wowslider.js"></script>
		<script type="text/javascript" src="engine1/script.js"></script>
		<!-- End wowslider -->
		<!-- Magnific-popup -->
		<script type="text/javascript" src="jscript/jquery.magnific-popup.min.js"></script>
		<!-- End Magnific-popup -->
		<?php
			popover_js('02');
			magnificpop('02','NO','NO');
			popover_js('03');
			magnificpop('03','NO','NO');
			popover_js('04');
			magnificpop('04','127650969','NO');
			popover_js('05');
			magnificpop('05','126187408','NO');
			popover_js('06');
			magnificpop('06','126291961','NO');
			popover_js('07');
			magnificpop_sound('07','104765425','NO');
			popover_js('08');
			magnificpop('08','124465039','124874646');
			popover_js('09');
			magnificpop('09','NO','127731452');
			popover_js('10');
			magnificpop('10','127631705','127625457');
			popover_js('11');
			magnificpop('11','NO','NO');

			magnificpop('slider1','124465039','NO');
		?>
		<script type="text/javascript">
			$(document).ready(function(){

				$("#btn_cerrar_sesion").click(function () {
					var logout = $.ajax({url:"logout.php",data:"",method:"POST"});
					logout.done(function(msn){
						if(msn != '1'){
							alert("Error inesperado!");		
						}else{
							document.location.href = 'index.php';
						}
					});
				});


				$("#btn_iniciar_sesion").magnificPopup({
  					items: {
      					src: '<div class="box_iniciar_sesion">'+
      						'<form class="form-horizontal" name="frm_iniciar_sesion"  id="frm_iniciar_sesion"> ' +
      						'<div id="box_iniciar_sesion_content">'+
      						'<div class="col-md-12"> ' +
      						'<input id="email" type="text" style="width: 60%; background-color: rgb(168,37,37); border: 0; height: 20px; color: white;" name="email" value="" placeholder="Introduce tu email">'+
      						'</div>'+
      						'<div class="col-md-12"><br>' +
      						'<input id="password" type="password" style="width: 60%; background-color: rgb(168,37,37); border: 0; height: 20px; color: white;" name="password" placeholder="Introduce tu password">'+
      						'</div>'+
      						'</div>'+
      						'<div>'+
      						'<div id="box_iniciar_sesion_aceptar">'+
      						'<button style="border:0; background-color: transparent;"><img src="images/botones/aceptar.png" style="width: 130px; height: 45px; border:0; background-color: transparent;" /></button>'+
      						'</div>'+
      						'<div id="box_iniciar_sesion_registrar">'+
      						'<a href="javascript:$(\'#btn_nuevo_registro\').click();" style="border:0; background-color: transparent;"><img src="images/botones/registrarse.png" style="width: 130px; height: 45px; border:0; background-color: transparent;" /></a>'+
      						'</div>'+
      						'</div>'+
      						'</form></div>',
      					type: 'inline'
  					},
  					closeBtnInside: true,
 					callbacks : {	
 						open : function(){
 							$("#box_iniciar_sesion_aceptar").click(function () {
 								$("#frm_iniciar_sesion").validate({
									rules:{
                                		email:{required: true, email: true},
                                		password:{required: true, minlength: 6, maxlength: 30}
                            		},
                            		highlight: function(element){$(element).parent().parent().addClass("has-error");},
                            		unhighlight: function(element){$(element).parent().parent().removeClass("has-error");}
 								});
 								if($("#frm_iniciar_sesion").valid()){
 									var email = $("#email").val();
 									var password = $("#password").val();
									var login = $.ajax({url:"login.php",data:"correo="+email+"&password="+password+"&rol=CLIENTE",method:"POST"});
    	    	                    login.done(function(msn){
    	    	                    	if(msn != '1'){
    	    	                       		alert("Datos de acceso incorrectos!");		
    	    	                       	}else{
    	    	                       		document.location.reload(true);
    	    	                       	}
    	    	                    });
    	    	                    return false;
 								}else{
 									this.stopPropagation();
 								}
 							});
 						}
 					}
				});


				$("#btn_nuevo_registro").magnificPopup({
  					items: {
      					src: '<div class="box_nuevo_registro">'+
      						'<form class="form-horizontal" name="frm_nuevo_registro"  id="frm_nuevo_registro"> ' +
      						'<div id="box_nuevo_registro_content">'+
      						'<div class="col-md-10"> ' +
      						'<input id="nombre" type="text" style="width: 60%; background-color: rgb(168,37,37); border: 0; height: 19px; color: white;" name="nombre" value="" placeholder="Nombre (s)">'+
      						'</div>'+
      						'<div class="col-md-10"> ' +
      						'<br><input id="apellidos" type="text" style="width: 60%; background-color: rgb(168,37,37); border: 0; height: 19px; color: white;" name="apellidos" value="" placeholder="Apellidos">'+
      						'</div>'+
      						'<div class="col-md-10"> ' +
      						'<br><select id="pais" name="pais" style="width: 80%; background-color: rgb(168,37,37); border: 0; height: 19px; color: white;">'+
      						'<?php include_once("queryPaises.php"); ?>'+
      						'</select>'+
      						'</div>'+
      						'<div class="col-md-10"> ' +
      						'<br><input id="email" type="text" style="width: 60%; background-color: rgb(168,37,37); border: 0; height: 19px; color: white;" name="email" value="" placeholder="Email">'+
      						'</div>'+
      						'<div class="col-md-10"><br>' +
      						'<input id="password" type="password" style="width: 60%; background-color: rgb(168,37,37); border: 0; height: 19px; color: white;" name="password" placeholder="password">'+
      						'</div>'+
      						'<div class="col-md-10" style="margin-top: 5px;"><br>' +
      						'<input id="reppassword" type="password" style="width: 60%; background-color: rgb(168,37,37); border: 0; height: 19px; color: white;" name="reppassword" placeholder="Confirma tu password">'+
      						'</div>'+
      						'</div>'+
      						'<div id="box_nuevo_registro_aceptar">'+
      						'<button style="border:0; background-color: transparent;"><img src="images/botones/aceptar.png" style="width: 130px; height: 45px; border:0; background-color: transparent;" /></button>'+
      						'</div>'+
      						'</div></form></div>',
      					type: 'inline'
  					},
  					closeBtnInside: true,
 					callbacks : {	
 						open : function(){
 							$("#box_nuevo_registro_aceptar").click(function () {

								$("#frm_nuevo_registro").validate({
									rules:{
										nombre:{required: true, minlength: 2, maxlength: 50},
										apellidos:{required: true, minlength: 2, maxlength: 50},
                                		email:{required: true, email: true},
                                		password:{required: true, minlength: 6, maxlength: 30},
                                		reppassword:{required: true, minlength: 6, maxlength: 30}
                            		},
                            		highlight: function(element){$(element).parent().parent().addClass("has-error");},
                            		unhighlight: function(element){$(element).parent().parent().removeClass("has-error");}
 								}); 
 								if($("#frm_nuevo_registro").valid()){
 									var nombre = $("#nombre").val();
 									var apellidos = $("#apellidos").val();
 									var pais = $("#pais").val();
 									var email = $("#email").val();
 									var password = $("#password").val();
									var reppassword = $("#reppassword").val();
									if(password == reppassword){
 										var save = $.ajax({url:"nuevoUsuario.php",data:"correo="+email+"&password="+password+"&nombre="+nombre+"&apellidos="+apellidos+"&rol=CLIENTE",method:"POST"});
										save.done(function(msn){
	                               			if(msn != '1'){
	    	                               		alert("No se pudo crear la cuenta!");
    	    	                       		}else{
    	    	                       			var login = $.ajax({url:"login.php",data:"correo="+email+"&password="+password+"&rol=CLIENTE",method:"POST"});
    	    	                       			login.done(function(msn){
    	    	                       				if(msn != '1'){
    	    	                       					alert("Error inesperado!");		
    	    	                       				}else{
    	    	                       					document.location.reload(true);
    	    	                       				}
    	    	                       			});
    	    	                       			return false;
    	    	                       		}
                	    	        	});
                	    	        	return false;
									}else{
										alert("El password no es valido");
										return false;								
									} 									
 								}else{
 									this.stopPropagation();
 								}
 							});
 						}
 					}
				});

				$("#btn_compuesto").magnificPopup({
					items: {
      					src: '<div>'+
	      						'<div class="box_iniciar_sesion_comp">'+
		      						'<form class="form-horizontal" name="frm_iniciar_sesion"  id="frm_iniciar_sesion">'+
		      							'<div id="box_iniciar_sesion_content_comp">'+
		      								'<div class="col-md-12"> ' +
		      									'<input id="email" type="text" style="background-color: transparent; border: 0; height: 20px; color: white;" name="email" value="" placeholder="Introduce tu email">'+
		      								'</div>'+
			      							'<div class="col-md-12">' +
			      								'<input id="password" type="password" style="background-color: transparent; border: 0; height: 20px; color: white;" name="password" placeholder="Introduce tu password">'+
			      							'</div>'+
			      						'</div>'+
		      							'<div>'+
		      								'<div id="box_iniciar_sesion_aceptar">'+
		      									'<button style="border:0; background-color: transparent;"><img src="images/botones/aceptar.png" style="width: 130px; height: 45px; border:0; background-color: transparent;" /></button>'+
		      								'</div>'+
			      							'<div id="box_iniciar_sesion_registrar_comp">'+
			      								'<a href="javascript:$(\'#btn_nuevo_registro\').click();" style="border:0; background-color: transparent;"><img src="images/botones/registrarse.png" style="width: 130px; height: 45px; border:0; background-color: transparent;" /></a>'+
			      							'</div>'+
			      						'</div>'+
		      						'</form>'+
		      					'</div>'+
		      					'<div class="box_nuevo_registro_comp">'+
      								'<form class="form-horizontal" name="frm_nuevo_registro"  id="frm_nuevo_registro"> ' +
      									'<div id="box_nuevo_registro_content_comp">'+
      										'<div class="col-md-10"> ' +
      											'<input id="nombre" type="text" style="width: 60%; background-color: transparent; border: 0; height: 19px; color: white;" name="nombre" value="" placeholder="Nombre (s)">'+
      										'</div>'+
      										'<div class="col-md-10"> ' +
      											'<input id="apellidos" type="text" style="width: 60%; background-color: transparent; border: 0; height: 19px; color: white;" name="apellidos" value="" placeholder="Apellidos">'+
      										'</div>'+
      										'<div class="col-md-10"> ' +
      											'<select id="pais" name="pais" style="width: 80%; background-color: transparent; border: 0; height: 19px; color: gray;">'+
      												'<?php include("queryPaises.php") ?>'+
      											'</select>'+
      										'</div>'+
      										'<div class="col-md-10"> ' +
      											'<input id="email" type="text" style="width: 60%; background-color: transparent; border: 0; height: 19px; color: white;" name="email" value="" placeholder="Email">'+
      										'</div>'+
      										'<div class="col-md-10">' +
      											'<input id="password" type="password" style="width: 60%; background-color: transparent; border: 0; height: 19px; color: white;" name="password" placeholder="password">'+
      										'</div>'+
      										'<div class="col-md-10" style="margin-top: 5px;">' +
      											'<input id="reppassword" type="password" style="width: 60%; background-color:transparent; border: 0; height: 19px; color: white;" name="reppassword" placeholder="Confirma tu password">'+
      										'</div>'+
      									'</div>'+
      									'<div id="box_nuevo_registro_aceptar">'+
      										'<button style="border:0; background-color: transparent;"><img src="images/botones/aceptar.png" style="width: 130px; height: 45px; border:0; background-color: transparent;" /></button>'+
      									'</div>'+
      								'</form>'+
      							'</div>'+
      						'</div>',
      					type: 'inline'
  					},
  					closeBtnInside: true,
 					callbacks : {	
 						open : function(){
 							$("#box_iniciar_sesion_aceptar").click(function () {
 								$("#frm_iniciar_sesion").validate({
									rules:{
                                		email:{required: true, email: true},
                                		password:{required: true, minlength: 6, maxlength: 30}
                            		},
                            		highlight: function(element){$(element).parent().parent().addClass("has-error");},
                            		unhighlight: function(element){$(element).parent().parent().removeClass("has-error");}
 								});
 								if($("#frm_iniciar_sesion").valid()){
 									var email = $("#email").val();
 									var password = $("#password").val();
									var login = $.ajax({url:"login.php",data:"correo="+email+"&password="+password+"&rol=CLIENTE",method:"POST"});
    	    	                    login.done(function(msn){
    	    	                    	if(msn != '1'){
    	    	                       		alert("Datos de acceso incorrectos!");		
    	    	                       	}else{
    	    	                       		document.location.reload(true);
    	    	                       	}
    	    	                    });
    	    	                    return false;
 								}else{
 									this.stopPropagation();
 								}
 							});

 							$("#box_nuevo_registro_aceptar").click(function () {

								$("#frm_nuevo_registro").validate({
									rules:{
										nombre:{required: true, minlength: 2, maxlength: 50},
										apellidos:{required: true, minlength: 2, maxlength: 50},
                                		email:{required: true, email: true},
                                		password:{required: true, minlength: 6, maxlength: 30},
                                		reppassword:{required: true, minlength: 6, maxlength: 30}
                            		},
                            		highlight: function(element){$(element).parent().parent().addClass("has-error");},
                            		unhighlight: function(element){$(element).parent().parent().removeClass("has-error");}
 								}); 
 								if($("#frm_nuevo_registro").valid()){
 									var nombre = $("#nombre").val();
 									var apellidos = $("#apellidos").val();
 									var pais = $("#pais").val();
 									var email = $("#email").val();
 									var password = $("#password").val();
									var reppassword = $("#reppassword").val();
									if(password == reppassword){
 										var save = $.ajax({url:"nuevoUsuario.php",data:"correo="+email+"&password="+password+"&nombre="+nombre+"&apellidos="+apellidos+"&rol=CLIENTE",method:"POST"});
										save.done(function(msn){
	                               			if(msn != '1'){
	    	                               		alert("No se pudo crear la cuenta!");
    	    	                       		}else{
    	    	                       			var login = $.ajax({url:"login.php",data:"correo="+email+"&password="+password+"&rol=CLIENTE",method:"POST"});
    	    	                       			login.done(function(msn){
    	    	                       				if(msn != '1'){
    	    	                       					alert("Error inesperado!");		
    	    	                       				}else{
    	    	                       					document.location.reload(true);
    	    	                       				}
    	    	                       			});
    	    	                       			return false;
    	    	                       		}
                	    	        	});
                	    	        	return false;
									}else{
										alert("El password no es valido");
										return false;								
									} 									
 								}else{
 									this.stopPropagation();
 								}
 							});
 						}
 					}
				});

			if(open_iniciar_sesion != 0){
				$("#btn_iniciar_sesion").click();
			}

			$('#amasb').magnificPopup({
          		disableOn: 700,
          		type: 'iframe',
          		mainClass: 'mfp-fade',
          		removalDelay: 160,
          		preloader: false,
          		fixedContentPos: false
        	});

			$('#tganador1').magnificPopup({
          		disableOn: 700,
          		type: 'iframe',
          		mainClass: 'mfp-fade',
          		removalDelay: 160,
          		preloader: false,
          		fixedContentPos: false
        	});
			$('#tganador2').magnificPopup({
          		disableOn: 700,
          		type: 'iframe',
          		mainClass: 'mfp-fade',
          		removalDelay: 160,
          		preloader: false,
          		fixedContentPos: false
        	});
			});
		</script>

	<!-- END body -->
	</body>
<!-- END html -->
</html>