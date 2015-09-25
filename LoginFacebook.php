<!DOCTYPE html>
<?php include('popover.php'); ?>
<?php include('magnificpop.php');?>
<?php header('Content-Type: text/html; charset=UTF-8');  ?>
<html lang="es">
	<head>
		<title>Facebook Login JavaScript Example</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Blood Window TV</title>

		<meta name="description" content="BloodWindowTV, es una plataforma donde directores, escritores, productores, artistas visuales y cineastas se puedan encontrar e impulsar en conjunto logrando que sus peliculas puedan alcanzar un público deseoso de ver sus producciones.Es una plataforma de formación, desarrollo y busqueda de coproducción">
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
		<!--Librerias de React.js-->
		<script src="build/react.js"></script>
    	<script src="build/JSXTransformer.js"></script>
	</head>
	<body>
		<script>
		  // This is called with the results from from FB.getLoginStatus().
		  function statusChangeCallback(response) {
		    console.log('statusChangeCallback');
		    console.log(response);
		    // The response object is returned with a status field that lets the
		    // app know the current login status of the person.
		    // Full docs on the response object can be found in the documentation
		    // for FB.getLoginStatus().
		    if (response.status === 'connected') {
		      // Logged into your app and Facebook.
		      testAPI();
		    } else if (response.status === 'not_authorized') {
		      // The person is logged into Facebook, but not your app.
		      document.getElementById('status').innerHTML = 'Please log ' +
		        'into this app.';
		    } else {
		      // The person is not logged into Facebook, so we're not sure if
		      // they are logged into this app or not.
		      document.getElementById('status').innerHTML = 'Please log ' +
		        'into Facebook.';
		    }
		  }

		  // This function is called when someone finishes with the Login
		  // Button.  See the onlogin handler attached to it in the sample
		  // code below.
		  function checkLoginState() {
		    FB.getLoginStatus(function(response) {
		      statusChangeCallback(response);
		    });
		  }

		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '162964560704609',
		      xfbml      : true,
		      version    : 'v2.4'
		    });

		  // Now that we've initialized the JavaScript SDK, we call 
		  // FB.getLoginStatus().  This function gets the state of the
		  // person visiting this page and can return one of three states to
		  // the callback you provide.  They can be:
		  //
		  // 1. Logged into your app ('connected')
		  // 2. Logged into Facebook, but not your app ('not_authorized')
		  // 3. Not logged into Facebook and can't tell if they are logged into
		  //    your app or not.
		  //
		  // These three cases are handled in the callback function.

		  FB.getLoginStatus(function(response) {
		    statusChangeCallback(response);
		  });

		  };

		  // Load the SDK asynchronously
		(function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "//connect.facebook.net/es_LA/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));

		  // Here we run a very simple test of the Graph API after login is
		  // successful.  See statusChangeCallback() for when this call is made.
		  function testAPI() {
		    console.log('Welcome!  Fetching your information.... ');
		    FB.api('/me', function(response) {
		      console.log('Successful login for: ' + response.name);
		      document.getElementById('status').innerHTML =
		        'Thanks for logging in, ' + response.name + '!';
		    });
		  }
		</script>

		<!--
		  Below we include the Login Button social plugin. This button uses
		  the JavaScript SDK to present a graphical Login button that triggers
		  the FB.login() function when clicked.
		-->
		<!--?php popup_login_facebook() ?-->
		<div id="mount-point1"></div>
	    <script type="text/jsx">
	    	React.render(
	    		<h1>Hello, world!!</h1>,
	    		document.getElementById('mount-point1')
	    	);
	    </script>

		<div id="mount-point2"></div>
	   	<script type="text/jsx">
	   		React.render(
	   			React.DOM.h1(null,'Hola, mundo!'),
	   			document.getElementById('mount-point2')
	   		);
	    </script>

	    <div id="mount-point3"></div>
	   	<script type="text/jsx">
	   		var MyComponent1 = React.createClass({
			    render: function(){
			        return (
			            <h1>Hello, world!</h1>
			        );
			    }
			});
	   		React.render(
				<MyComponent1/>,
				document.getElementById('mount-point3')
			);
	    </script>

	    <div id="mount-point4"></div>
	   	<script type="text/jsx">
	   		var MyComponent2 = React.createClass({
			    render: function(){
			        return (
			            <h1>Hello, {this.props.name}!</h1>
			        );
			    }
			});
	   		React.render(
	   			<MyComponent2 name="Handsome" />,
	   			document.getElementById('mount-point4')
	   		);
	    </script>

	    <div ></div>
	    <script></script>
	</body>
</html>