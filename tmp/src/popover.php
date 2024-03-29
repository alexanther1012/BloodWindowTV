<?php

	function popover_html($id,$trailer,$movie,$titulo,$director,$sipnosis,$clasificacion,$duracion,$afiche,$align){

		if($movie != "NO"){
			$btn_movie = "<center><a  href= 'https://player.vimeo.com/video/".$movie."'  id='movie_".$id."' >".
					"<img src=\"images/botones/ver_pelicula.png\" style=\"width: 120px; height: 35px; border:0; background-color: black\" /></a></center>";
		}else{
			$btn_movie = "<center><a>".
					"</a></center>";
		}

		echo "<div class='item' >";
		echo "<div class='item-header'>";
		echo "<a  href= 'https://player.vimeo.com/video/".$trailer."' class='img-hover-effect loadingvideo'  id='popup_".$id."' ". 
			 "data-content='<div><p><strong>Director: </strong>".$director."</p><p>".$sipnosis."</p><p><strong>Clasificación: </strong>".$clasificacion."<strong>  Duración: </strong>".$duracion."</p></div>' ".
			 " rel='popover' data-placement='".$align."' data-original-title='<h3 style=\"color: #ffffff\">".$titulo."</h3>' data-trigger='hover' >".
			 "<img src='images/aspect-px.png' width='16' height='9' class='aspect-px' rel='images/afiches/".$afiche."' alt='' /></a>".
			 "</div><div class='item-content'>".
			 "<h3><center><a ><font family='Roboto' size='4px' style='color: #F68491'>".$titulo."</font></a></center></h3>".$btn_movie."</div></div>";
	}

	function popover_html_red_login($id,$trailer,$movie,$titulo,$director,$sipnosis,$clasificacion,$duracion,$afiche,$align){

		if($movie != "NO"){
			$btn_movie = "<center><a  href= 'javascript:$(\"#btn_iniciar_sesion\").click();' >".
					"<img src=\"images/botones/ver_pelicula.png\" style=\"width: 120px; height: 35px; border:0; background-color: rgb(53,00,00);\" /></a></center>";
		}else{
			$btn_movie = "<center><a>".
					"<img src=\"images/botones/ver_pelicula.png\" style=\"width: 120px; height: 35px; border:0; background-color: rgb(53,00,00);\" /></a></center>";
		}

		echo "<div class='item' style='background-color: rgb(53,00,00);'>";
		echo "<div class='item-header'>";
		echo "<a  href= 'https://player.vimeo.com/video/".$trailer."' class='img-hover-effect loadingvideo'  id='popup_".$id."' ". 
			 "data-content='<div><p><strong>Director: </strong>".$director."</p><p>".$sipnosis."</p><p><strong>Clasificación: </strong>".$clasificacion."<strong>  Duración: </strong>".$duracion."</p></div>' ".
			 " rel='popover' data-placement='".$align."' data-original-title='<h3 style=\"color: #ffffff\">".$titulo."</h3>' data-trigger='hover' >".
			 "<img src='images/aspect-px.png' width='16' height='9' class='aspect-px' rel='images/afiches/".$afiche."' alt='' /></a>".
			 "</div><div class='item-content'>".
			 "<h3><center><a ><font family='Roboto' size='4px' style='color: #F68491'>".$titulo."</font></a></center></h3>".$btn_movie."</div></div>";
	}


	function popover_html_red($id,$trailer,$movie,$titulo,$director,$sipnosis,$clasificacion,$duracion,$afiche,$align){

		if($movie != "NO"){
			$btn_movie = "<center><a  href= 'https://player.vimeo.com/video/".$movie."'  id='movie_".$id."' >".
					"<img src=\"images/botones/ver_pelicula.png\" style=\"width: 120px; height: 35px; border:0; background-color: rgb(53,00,00);\" /></a></center>";
		}else{
			$btn_movie = "<center><a>".
					"<img src=\"images/botones/ver_pelicula.png\" style=\"width: 120px; height: 35px; border:0; background-color: rgb(53,00,00);\" /></a></center>";
		}

		echo "<div class='item' style='background-color: rgb(53,00,00);'>";
		echo "<div class='item-header'>";
		echo "<a  href= 'https://player.vimeo.com/video/".$trailer."' class='img-hover-effect loadingvideo'  id='popup_".$id."' ". 
			 "data-content='<div><p><strong>Director: </strong>".$director."</p><p>".$sipnosis."</p><p><strong>Clasificación: </strong>".$clasificacion."<strong>  Duración: </strong>".$duracion."</p></div>' ".
			 " rel='popover' data-placement='".$align."' data-original-title='<h3 style=\"color: #ffffff\">".$titulo."</h3>' data-trigger='hover' >".
			 "<img src='images/aspect-px.png' width='16' height='9' class='aspect-px' rel='images/afiches/".$afiche."' alt='' /></a>".
			 "</div><div class='item-content'>".
			 "<h3><center><a ><font family='Roboto' size='4px' style='color: #F68491'>".$titulo."</font></a></center></h3>".$btn_movie."</div></div>";
	}

	function popover_sound_red($id,$sound,$titulo,$director,$sipnosis,$clasificacion,$duracion,$afiche,$align){
		
		$btn_sound = "<center><a  href= 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/".$sound."'  id='sound_".$id."' >".
					"<img src=\"images/botones/soundtrack.png\" style=\"width: 120px; height: 35px; border:0; background-color: rgb(53,00,00);\" /></a></center>";

		echo "<div class='item' style='background-color: rgb(53,00,00);'>";
		echo "<div class='item-header'>";
		echo "<a  class='loadingvideo'  id='popup_".$id."' ". 
			 "data-content='<div><p><strong>Director: </strong>".$director."</p><p>".$sipnosis."</p><p><strong>Clasificación: </strong>".$clasificacion."<strong>  Duración: </strong>".$duracion."</p></div>' ".
			 " rel='popover' data-placement='".$align."' data-original-title='<h3 style=\"color: #ffffff\">".$titulo."</h3>' data-trigger='hover' >".
			 "<img src='images/aspect-px.png' width='16' height='9' class='aspect-px' rel='images/afiches/".$afiche."' alt='' /></a>".
			 "</div><div class='item-content'>".
			 "<h3><center><a ><font family='Roboto' size='4px' style='color: #F68491'>".$titulo."</font></a></center></h3>".$btn_sound."</div></div>";

	}

	function popover_js($id){
		echo "<script>";
		echo "$(document).ready(function(){";
		echo "$('#popup_".$id."').popover({html: 'true'});";
		echo "$('#movie_".$id."').popover({html: 'true'});";
		echo "$('#sound_".$id."').popover({html: 'true'});";
		echo "});";
		echo "</script>";
	}

?>