@extends('layouts.header')
@section('content')

<body style="margin:auto; background-color:#000000;">
    <div class="main_bodymenu1" style="padding-bottom:278px;">
        <div id="main_header"></div>
        <div class="onupper" id="onupper">
            <img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/5.png')}}"  class="logo">
            <br><br>
            <a href="{{ URL::to('index') }}" >INICIO</a>
            <a href="{{ URL::to('about') }}"style="color:red;">SOBRE NOSOTROS</a>
            <a href="{{ URL::to('menu') }}">MENU</a>
            <a href="http://axp8158.uta.cloud/Blog.html/">BLOG</a>
            <a href="{{ URL::to('contact') }}">CONTACTO</a>
            <a href="javascript:void(0);"  onClick="openForm()">REGISTRO</a>
            <a href="javascript:openForm1()" onClick="openForm1()">INICIAR SESION</a>
            <a href="javascript:myFunction()" id="icon" class="icon" onClick="myFunction()"><img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/menu.png')}}"></a>
            <br><br><br><br><br><br><br><br><br>
            
            <div class="triangle_border"><br></div>
        
       </div>
                  <div class="res1" id="res1" style="display:none;">
        <br><br>
        <a href="index.php" style="color:white; text-decoration:none; padding-bottom:5px;">INICIO</a><br>
               <a href="{{ URL::to('about') }}" style="color:red; text-decoration:none;">SOBRE NOSOTROS</a><br>
                <a href="{{ URL::to('menu') }}" style="color:#FFFFFF; text-decoration:none;">MENU</a><br>
                <a href="http://axp8158.uta.cloud/Blog.html/" style="color:#FFFFFF; text-decoration:none;">BLOG</a><br>
                <a href="{{ URL::to('contact') }}" style="color:#FFFFFF; text-decoration:none;">CONTACTO</a><br>
                <a href="javascript:void(0);" style="color:#FFFFFF; text-decoration:none;" onClick="openForm()">REGISTRO</a><br>
                <a href="javascript:openForm1()" onClick="openForm1()" style="color:#FFFFFF; text-decoration:none;">INICIAR SESION</a><br>

        </div>
        
		   <p class="p1" style="top:492px;">LAS MEJORES DE LA CIUDAD</p>
           <h1 class="head h11" style="top:175px; font-size:69px;">Sobre nuestras Hamburguesas</h1>
</div>
     <div class="triangle_bottom_border"> <br></div>
<div class="aboutone">		
     <br><br><br><br>
<!--================================================== Part-one============================================-->
 <table  align="center" cellspacing="30px">
 <tr>
 <td>
    
 <?php $user = DB::table('menu')->where('menu_id', 7)->first();
    $id_image=$user->image;
	$path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
	<img  src="<?php echo $path;?>" style="    height: 366px;
 vertical-align: top;" />
 </td>
 <td>
 <?php $user = DB::table('menu')->where('menu_id', 2)->first();
    $id_image=$user->image;$path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?><img  src="<?php echo $path;?>" style="    height: 366px;
 vertical-align: top;" />
 </td>
 </tr>
 </table>
<br><br><br>
</div>
<div id="level2">
<table border="0" align="center" width="1126px;" >
<tr>
<td colspan="2" align="center">
<h1 style="font-family: savage adventure; color:#FFFFFF;">Somos Ibra</h1>
</td>
</tr>
<tr >
<td colspan="2" height="168px">
<p style="color:#FFFFFF; font-stretch:expanded; word-spacing:2px;  line-height:1.66;" align="center"  >Al comenzar el dia, cada mañana estamos más que preparándonos para dar lo mejor de nosotros mismos.<br>
Porque cada uno de nuestros clientes nos inspira a trabajar en pro del mejor servicio, las mejores entregas y, sobre todo, las<br> mejores Hamburguesas..
</p>
</td>
</tr>
<tr>
<td width="180px;"><p style="color:#FFFFFF; font-stretch:expanded; word-spacing:2px;  line-height:1.66;" align="left" >Los orígenes se remontan al 10 de junio de 1960, cuando Ibrahim Mata<br> compraron la pizzería DomiPizza's, con una inversión inicial de 950 dólares. El<br> local estaba situado en Lecheria, y la idea de Ibrahim era vender<br> Hamburguesas a domicilio a las personas de las residencias cercanas. Aquella<br> experiencia no marchaba como tenían previsto.</p></td>
<td width="154"><p style="color:#FFFFFF; font-stretch:expanded; word-spacing:2px; line-height:1.66;" align="left" >A pesar de todo, Ibrahim se mantuvo al frente del restaurante y tomó<br> decisiones importantes para su futuro, como reducir la carta de productos y<br> establecer un reparto a domicilio gratuito. Después de adquirir dos<br> restaurantes más en Barcelona, en 1965 renombró sus tres locales como<br> Ibra's Burger Grill.</td>
</p></tr>
<tr>
<td colspan="2" height="183px;" align="center">
        <div id ="button1121" style="top:0px; margin-left:-105px; padding-right:30px; width:158px;"><button onClick="location.href ='{{ URL::to('menu') }}';" style="width:148px;">VER EL MENÚ HOY</button></div>
                   <div id ="button1" style="top:-42px; margin-left:232px; width:133px; position:relative;"><button onClick="location.href = '{{ URL::to('contact') }}';" style="width:148px; background-color:#00CC00;">PEDIR AHORA</button></div>
</td>
</tr>
</table></div>
</div>

<!--==================================================About_us two=========================================-->
<div class="abouttwo">		
<br><br><br>
 <table  align="center" cellspacing="30px">
 <tr>
 <td>
 <?php $user = DB::table('menu')->where('menu_id', 7)->first();
    $id_image=$user->image;
	$path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
	<img  src="<?php echo $path;?>" style="    height: 333px;
 vertical-align: top;" />
 </td>
 </tr>
 <tr>
 <td>
 <?php $user = DB::table('menu')->where('menu_id', 2)->first();
    $id_image=$user->image;$path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?><img  src="<?php echo $path;?>" style="    height: 333px;
 vertical-align: top;" />
 </td>
 </tr>
 </table>
<br><br><br>
</div>
<div id="level3">
<table border="0" align="center" width="0px;" >
<tr>
<td colspan="2"  align="left">
<h1 style="font-family: savage adventure; color:#FFFFFF;">Somos Ibra</h1>
</td>
</tr>
<tr >
<td colspan="2" height="168px">
<p style="color:#FFFFFF; font-stretch:expanded; word-spacing:2px;  line-height:1.66; position:relative;" align="left"  >Al comenzar el dia, cada mañana estamos más que preparándonos para dar lo mejor de nosotros mismos.<br>
Porque cada uno de nuestros clientes nos inspira a trabajar en pro del mejor servicio, las mejores entregas y, sobre todo, las<br> mejores Hamburguesas..
</p>
</td>
</tr>
<tr>
<td width="180px;"><p style="color:#FFFFFF; font-stretch:expanded; word-spacing:2px;  line-height:1.66;" align="left" >Los orígenes se remontan al 10 de junio de 1960, cuando Ibrahim Mata<br> compraron la pizzería DomiPizza's, con una inversión inicial de 950 dólares. El<br> local estaba situado en Lecheria, y la idea de Ibrahim era vender<br> Hamburguesas a domicilio a las personas de las residencias cercanas. Aquella<br> experiencia no marchaba como tenían previsto.</p></td>
<td width="154"><p style="color:#FFFFFF; font-stretch:expanded; word-spacing:2px; line-height:1.66;" align="left" >A pesar de todo, Ibrahim se mantuvo al frente del restaurante y tomó<br> decisiones importantes para su futuro, como reducir la carta de productos y<br> establecer un reparto a domicilio gratuito. Después de adquirir dos<br> restaurantes más en Barcelona, en 1965 renombró sus tres locales como<br> Ibra's Burger Grill.</td>
</p></tr>
<tr>
<td colspan="2" height="183px;" align="center"   >
        <div id ="button1121"  style="top:0px; margin-left:-105px; padding-right:30px; width=154px"><button onClick="location.href = '{{ URL::to('menu') }}';" style="width:148px;">VER EL MENÚ HOY</button></div>
                   <div id ="button1" style="top:-42px; margin-left:232px; position:relative; width:129px"><button onClick="location.href = '{{ URL::to('contact') }}';" style="width:148px; background-color:#00CC00;">PEDIR AHORA</button></div>
</td>
</tr>
</table></div>
</div>

<!-- ==================================================3-column image one=================================-->
<div class="data121">
<table align="center" border="0" cellspacing="40px;" >
<tr >
<td align="center" colspan="3"><img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/Burguer.png')}}" class="img1"></td>
</td>
</tr>
<tr>
<td align="center" colspan="3"><h1>Lo que dicen los clientes</h1></td>
</tr>
<tr>
<td style="vertical-align:top;">
<p style="color:#FFFFFF; font-stretch:expanded; word-spacing:2px;  line-height:1.66; font-size:25px;" align="left">Las Mejores Hamburguesas</p>
<p style="color:#FFFFFF; font-stretch:expanded; word-spacing:2px;  line-height:1.66;" align="left">Me gustan sus Hamburguesas, siempre seran mi<br> lugar de encuetros y buenos recuerdas<br> acompañados de la mejor Hamburguesa</p>
<br>

<div class="profile-dot">
<figure style="background-image:url(http://localhost/ibraslaravel/resources/views/pages/style/images/2.jpg)"></figure>
<figcaption>BM</figcaption>
</div>
<br>
<font color="#FF0000">Daiane Smith</font>,<font color="#FFFFFF">Cliente</font>
</td>
<td style="vertical-align:top;">
<p style="color:#FFFFFF;font-stretch:expanded; word-spacing:2px;  line-height:1.66; font-size:25px;" align="left">Que Hamburguesa mas<br> Increible
<p style="color:#FFFFFF;font-stretch:expanded; word-spacing:2px;  line-height:1.66;" align="left">Voy con mi familia a compertir de la buena comida<br> y servicio que prestan, los recomiendo a mis amigos,<br> los felicito</p>
<br>

<div class="profile-dot">
<figure style="background-image:url(http://localhost/ibraslaravel/resources/views/pages/style/images/3.jpg);"></figure>
<figcaption>BM</figcaption>
</div>
<br>
<font color="#FF0000">Daiane Smith</font>,<font color="#FFFFFF">Cliente</font>
</td>
<td style="vertical-align:top;" >
<p style="color:#FFFFFF;font-stretch:expanded; word-spacing:2px;  line-height:1.66; font-size:25px;" align="left">La mejor hamburguesa de la<br> ciudad
<p style="color:#FFFFFF;font-stretch:expanded; word-spacing:2px;  line-height:1.66;" align="left">Soy amante de la buena hamburguesa y puedo<br> decir que me gusta lo bien que la preparan, el<br> hambiente es como y muy familiar, cada ves que<br> tengo la oportunidad de darme un gusto lo visito<br> porque se que sere bien atendido y comere una<br> excelente hamburguesa
<br><br>
<div class="profile-dot">
<figure style="background-image:url(style/images/1.png);"></figure>
<figcaption>BM</figcaption>
</div>
<br>
<font color="#FF0000">Michael Williams</font>,<font color="#FFFFFF">Cliente</font>
</td>
</tr>
</table>
</div>
<div>
<p align="center" style="font-family: Open Sans;
font-size: 18px;
font-weight: 500;
line-height: 1.667; font-size:25px;"><font color="#FFFFFF">Nos esforzamos por brindar un buen servicio para <br>su disfrute.</font>
</div>
<!--============================================================3-image part 2=============================-->
<div class="data1211">
<table align="center" border="0" width="0px;" cellspacing="40px;" >
<tr >
<td align="center" colspan="3"><img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/Burguer.png')}}" class="img1"></td>
</td>
</tr>
<tr>
<td align="center" colspan="3"><h1>Lo que dicen los clientes</h1></td>
</tr>
<tr>
<td style="vertical-align:top;">
<p style="color:#FFFFFF; font-stretch:expanded; word-spacing:2px;  line-height:1.66; font-size:15px;" align="left">Las Mejores Hamburguesas</p>
<p style="color:#FFFFFF; font-stretch:expanded; word-spacing:2px;  line-height:1.66;" align="left">Me gustan sus Hamburguesas, siempre seran mi<br> lugar de encuetros y buenos recuerdas<br> acompañados de la mejor Hamburguesa</p>
<br>

<div class="profile-dot">
<figure style="background-image:url(http://localhost/ibraslaravel/resources/views/pages/style/images/2.jpg)"></figure>
<figcaption>BM</figcaption>
</div>
<br>
<font color="#FF0000">Daiane Smith</font>,<font color="#FFFFFF">Cliente</font>
</td>
<td style="vertical-align:top;">
<p style="color:#FFFFFF;font-stretch:expanded; word-spacing:2px;  line-height:1.66; font-size:15px;" align="left">Que Hamburguesa mas<br> Increible
<p style="color:#FFFFFF;font-stretch:expanded; word-spacing:2px;  line-height:1.66;" align="left">Voy con mi familia a compertir de la buena comida<br> y servicio que prestan, los recomiendo a mis amigos,<br> los felicito</p>
<br>

<div class="profile-dot">
<figure style="background-image:url(http://localhost/ibraslaravel/resources/views/pages/style/images/3.jpg);"></figure>
<figcaption>BM</figcaption>
</div>
<br>
<font color="#FF0000">Daiane Smith</font>,<font color="#FFFFFF">Cliente</font>
</td>
<td style="vertical-align:top;" >
<p style="color:#FFFFFF;font-stretch:expanded; word-spacing:2px;  line-height:1.66; font-size:15px;" align="left">La mejor hamburguesa de la<br> ciudad
<p style="color:#FFFFFF;font-stretch:expanded; word-spacing:2px;  line-height:1.66;" align="left">Soy amante de la buena hamburguesa y puedo<br> decir que me gusta lo bien que la preparan, el<br> hambiente es como y muy familiar, cada ves que<br> tengo la oportunidad de darme un gusto lo visito<br> porque se que sere bien atendido y comere una<br> excelente hamburguesa
<br><br>
<div class="profile-dot">
<figure style="background-image:url(http://localhost/ibraslaravel/resources/views/pages/style/images/1.png);"></figure>
<figcaption>BM</figcaption>
</div>
<br>
<font color="#FF0000">Michael Williams</font>,<font color="#FFFFFF">Cliente</font>
</td>
</tr>
</table>
</div>
<div>
<p align="center" style="font-family: Open Sans;
font-size: 18px;
font-weight: 500;
line-height: 1.667; font-size:15px;"><font color="#FFFFFF">Nos esforzamos por brindar un buen servicio para <br>su disfrute.</font>
</div>
    
    <!--============================================================Footer================================-->
    <div class="triangle_border_footer"> <br></div>
        <div class="footer" style="line-height:1.667" ><br><br><br><br><br>
    <img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/5.png')}}" class="footer_centre" >
    <p align="center" class="p21"><font style="text-decoration:underline;">Habla a:</font><br>
    <font color="#FFFFFF" style="text-decoration:none;font-size:0.70em;">Av. Intercomunal, sectro la Mora, calle 8</font><p>
    <p align="center" class="p31"><font style="text-decoration:underline;font-size:0.70em;">Telefono:</font><br>
    <font color="#FFFFFF" style="text-decoration:none;font-size:0.70em;">+58 251 261 00 01</font><p>
    <p class="pa1" align="center"><font style="text-decoration:underline;" size=".70em">Correo:</font><br>
    <font color="#FFFFFF" style="text-decoration:none;font-size:0.70em;">yourmail@gmail.com</font><p><br><br><br>
    <p align="center" class="px1"><font color="#FFFFFF" style="font-size:0.70em;text-decoration:none;">Copyright &copy;2020 Todos los derechos reservados | Este sitio esta hecho con &hearts; por DiazApps</font><p>
    </div>
    <!-- ========================================SIGNUP===================================================-->
    <div class="form-popup" id="myForm">
        <form action="{{ route('pages.signupback')}}" class="form-container" method="post">
                {{ csrf_field() }}
                <img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/Burguer.png')}}" class="img31">
                <h1 class="hc1">Registro de usuario</h1>
                <button type="button" class="btn1 cancel" onClick="closeForm()"><img class="img41" src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/cancel.png')}}"></button>
                <hr style="height: -1px;position: relative;top: -61px;border-width: 1px;">
                <label class="signup-element">Nombre y apellido:</label>
                <input type="text" name="nombre" id="nombre" autocomplete="off"  class="signup-element-fields" onKeyUp="this.value = this.value.replace(/[^a-z,A-z]/g,'')" placeholder="nombre" >
                <label style="color: black;
                position: relative;
                top: -44px;
            }">{{$errors->first('nombre')}}</label>
                <label class="signup-element">Correo:</label><br>
                <input type="email" autocomplete="off" placeholder="Correo" id="correo" name="correo" class="signup-element-fields" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                <label style="color: black;
                position: relative;
                top: -44px;
            }">{{$errors->first('correo')}}</label>
               <br><br>
                <label class="signup-element">Contraseña:</label>
                <input placeholder="contrasena" type="password" id="pwd" name="pwd" minlength="8" maxlength="10" class="signup-element-fields" required>
                <label class="signup-element">Repetir Contraseña:</label>
                <input placeholder=" Repetir contrasena" type="password" onfocusout="Validate()" id="cpwd" name="cpwd" minlength="8" maxlength="10" class="signup-element-fields" required> 
                <label style="color: black;
                position: relative;
                top: -44px;
            }">{{$errors->first('pwd')}}</label>
               <br><br>  
                <label class="signup-element">	Direccion:</label><br>
                <textarea name="dir" id="dir" class="textfield1" placeholder="Direction" required></textarea>
                @if(session()->has('inserterror'))
                    <?php 
                    echo "<label class='signup-element'><font color='red'>Account Already Exists</font></label><br>";
                    echo '<script type="text/javascript">','openForm();','</script>';
                    session()->flush();                      
                    ?> 
                @endif
                <br><br>
                <hr style="height: -1px;position: relative;top: -61px;border-width: 1px;">
                <input type="submit" name="submit" value="Cargar" onClick="#" class="btn">
          </form>
</div>
<!-- ======================================== LOGIN===================================================-->
<div class="form-popup1" id="myForm1">
<form action="{{route('pages.loginback')}}" method="post" class="form-container1" required>
            {{ csrf_field() }}
            <img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/Burguer.png')}}" class="ima11">
            <h1 class="hb1">Iniciar Sesion</h1>
            <button type="button" class="btn11 cancel1" onClick="closeForm1()"><img class="im11" src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/cancel.png')}}"></button>		
            <hr class="hr2">
            <label class="signup-element1">Usuario:</label>
            <input type="email" id="email" name="email" placeholder="admin@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="signup-element-fields1" >
            <label style="color: black;
            position: relative;
            top: -44px;
        }">{{$errors->first('email')}}</label>
           <br><br>
            <label class="signup-element1">contraseña</label>
            <input type="password" id="pass" minlength="8" maxlength="10" name="pass" placeholder="12345678"  class="signup-element-fields1" >
            <label style="color: black;
            position: relative;
            top: -44px;
        }">{{$errors->first('pass')}}</label>
           <br><br>    <br>
            <br><br>
            
                @if(session()->has('invalid'))
                    <?php
                    echo "<label class='signup-element'><font color='red'>Invalid Username and Password</font></label><br>";
                    echo '<script type="text/javascript">','openForm1();','</script>';
                    session()->flush();
                    ?>
                @endif    
            <br>
            
            <hr class="hr1">
            <input type="submit" name="submit" value="Entrar" class="btn1">
          </form>
</div>
</body>
</html>
@stop
