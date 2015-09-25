<?php	
	function magnificpop($id,$trailer,$movie){
		echo "<script>";
		echo "$(document).ready(function(){";

		$markup = "markup: '<div class=\"mfp-iframe-scaler\"><div class=\"mfp-close\"></div>'+".
			 			"'<iframe class=\"mfp-iframe\" frameborder=\"0\" allowfullscreen></iframe>'+".
			 			"'<div class=\"mfp-title\" style=\"background-color: #000000; margin-left: 70%\"></div>'+".
			 			"'</div>'";
		echo "$('#popup_".$id."').magnificPopup({".
			 	"type: 'iframe',".
			 	"index: 'vimeo.com',".
			 	"iframe: {".
			 		"patterns: {".
			 			"vimeo: {index: 'vimeo.com/', id: 'v=', src: 'https://player.vimeo.com/video/".$trailer."' }".
			 		"},".
			 		$markup.
					"},callbacks: {open : function(){}}".
		"});  ";

		if($movie != "NO"){
        	echo"$('#movie_".$id."').magnificPopup({".
          		"disableOn: 700,".
          		"type: 'iframe',".
          		"mainClass: 'mfp-fade',".
          		"removalDelay: 160,".
          		"preloader: false,".
          		"fixedContentPos: false".
        		"});";
		}
		echo "}); ";
		echo "</script>";
	}
	function magnificpop_sound($id,$trailer,$movie){
		echo "<script>";
		echo "$(document).ready(function(){";

		$markup = "markup: '<div class=\"mfp-iframe-scaler\"><div class=\"mfp-close\"></div>'+".
			 			"'<iframe class=\"mfp-iframe\" frameborder=\"0\" allowfullscreen></iframe>'+".
			 			"'<div class=\"mfp-title\" style=\"background-color: #000000; margin-left: 70%\"></div>'+".
			 			"'</div>'";
		echo "$('#sound_".$id."').magnificPopup({".
			 	"type: 'iframe',".
			 	"index: 'w.soundcloud.com',".
			 	"iframe: {".
			 		"patterns: {".
			 			"vimeo: {index: 'w.soundcloud.com/', id: 'v=', src: 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/".$trailer."' }".
			 		"},".
			 		$markup.
					"},callbacks: {open : function(){}}".
		"});  ";

		echo "}); ";
		echo "</script>";
	}
?>