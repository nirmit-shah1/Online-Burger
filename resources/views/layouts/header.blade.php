<?php ini_set('default_charset', 'windows-1252'); ?>
<?php session_start();?>
<html>
	<head>
        <meta charset="windows-1252">
	    <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href="{{asset('http://localhost/ibraslaravel/public/css/ibras.css')}}" rel="stylesheet" type="text/css">
        
        <script src="{{asset('http://localhost/ibraslaravel/resources/assets/js/register.js')}}" type="text/javascript"></script>
    </head>	
@yield('content')
</html>
