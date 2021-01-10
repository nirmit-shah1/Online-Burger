@extends('layouts.header')
@section('content')
<body style="margin:auto; background-color:#000000;">
    <div class="main_bodymenu">
        <div id="main_header"></div>
        <div class="onupper">
            <img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/5.png')}}" style="float:left; " class="logo">
            <br><br>
            <a href="{{ URL::to('index') }}" >INICIO</a>
            <a href="{{ URL::to('about') }}">SOBRE NOSOTROS</a>
            <a href="{{ URL::to('menu') }}" style="color:red;">MENU</a>
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
        <a href="{{ URL::to('index') }}" style="color:white; text-decoration:none; padding-bottom:5px;">INICIO</a><br>
        <a href="{{ URL::to('about') }}" style="color:#FFFFFF; text-decoration:none;">SOBRE NOSOTROS</a><br>
         <a href="{{ URL::to('menu') }}"style="color:red text-decoration:none;">MENU</a><br>
         <a href="http://axp8158.uta.cloud/Blog.html/" style="color:#FFFFFF; text-decoration:none;">BLOG</a><br>
         <a href="{{ URL::to('contact') }}" style="color:#FFFFFF; text-decoration:none;">CONTACTO</a><br>
         <a href="javascript:void(0);" style="color:#FFFFFF; text-decoration:none;" onClick="openForm()">REGISTRO</a><br>
         <a href="javascript:openForm1()" onClick="openForm1()" style="color:#FFFFFF; text-decoration:none;">INICIAR SESION</a><br>

       </div>		  <br><p class="p1" style="top:255px;">LAS MEJORES DE LA CIUDAD</p>
          <h1 class="head h11" style="top:-51px; z-index:2; font-size:69px;">Menú</h1>
</div>
    <div class="triangle_bottom_border"> <br></div>
<div class="4-level">		
    <h1 class="h14">Elija su Hamburguesa</h1>
    <br><br><br><br>
<table border="0" class="table1" style="" cellpadding="27" cellspacing="20" align="center">
    <tr>
    <td class="td-style"><div class="td-div-style" bis_skin_checked="1" style="top: 101px;
left: 51px;"><font color="#FFFFFF">OFERTA</font></div>
          <?php $user = DB::table('menu')->where('menu_id', 8)->first();
          $id_image=$user->image;
          $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
      <img class="img5" src="<?php echo $path;?>">
      <br>
      <label class="l1"><?php echo $user->hamburger_name;?></label>
      <br>
      <label class="l1"><b><font color="#FF0000" size="+1">$<?php echo $user->price;?>0</font></label>
      <br><br>

    </td>
    
    <td class="td-style"> 
        <?php $user = DB::table('menu')->where('menu_id', 9)->first();
                    $id_image=$user->image;
                    $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
                <img class="img5" src="<?php echo $path;?>">
                <br>
                <label class="l1"><?php echo $user->hamburger_name;?></label>
                <br>
                <label class="l1"><font color="#FF0000" size="+1">$<?php echo $user->price;?>0</font></label>
        <br><br>

        
        
    </td>
    
    <td style="text-align:center;"> 
        <?php $user = DB::table('menu')->where('menu_id', 10)->first();
                $id_image=$user->image;
                $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
            <img class="img5" src="<?php echo $path;?>">
            <br>
            <label class="l1"><?php echo $user->hamburger_name;?></label>
            <br>
            <label class="l1"><font color="#FF0000" size="+1">$<?php echo $user->price;?>0</font></label>            <br><br>

        
    </td>
    
    <td class="td-style"> <div style="position: absolute;top:101px;left:769px;font-size: 16px;color: white;line-height: 0%;width: 116px;border-top: 14px solid green;border-bottom: 14px solid green;border-left: none;border-right: 20px solid transparent;" bis_skin_checked="1"><font color="#FFFFFF">ESPECIALDAD</font></div>
        <?php $user = DB::table('menu')->where('menu_id', 8)->first();
        $id_image=$user->image;
        $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
    <img class="img5" src="<?php echo $path;?>">
    <br>
    <label class="l1"><?php echo $user->hamburger_name;?></label>
    <br>
    <label class="l1"><font color="#FF0000" size="+1">$<?php echo $user->price;?>0</font></label><br><br>
    
        
        
    </td>
    </tr>
    </table>
            <!--======================================TABLE 2==============================================-->
    <table border="0" class="table112" style="" cellpadding="15" cellspacing="17" align="center">
    <tr>
    <td class="td-style"><div class="td-div-style" bis_skin_checked="1"><font color="#FFFFFF">OFERTA</font></div>
        <?php $user = DB::table('menu')->where('menu_id', 8)->first();
        $id_image=$user->image;
        $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
    <img class="img5" src="<?php echo $path;?>">
    <br>
    <label class="l1"><?php echo $user->hamburger_name;?></label>
    <br>
    <label class="l1"><b><font color="#FF0000" size="+1">$<?php echo $user->price;?>0</font></label>
    <br><br><br>
      </td>
    
    <td class="td-style"> 
        <?php $user = DB::table('menu')->where('menu_id', 9)->first();
        $id_image=$user->image;
        $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
    <img class="img5" src="<?php echo $path;?>">
    <br>
    <label class="l1"><?php echo $user->hamburger_name;?></label>
    <br>
    <label class="l1"><font color="#FF0000" size="+1">$<?php echo $user->price;?>0</font></label>
<br><br><br>
</td>
    </tr>
    <tr>
    <td style="text-align:center;"> 
        <?php $user = DB::table('menu')->where('menu_id', 10)->first();
                $id_image=$user->image;
                $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
            <img class="img5" src="<?php echo $path;?>">
            <br>
            <label class="l1"><?php echo $user->hamburger_name;?></label>
            <br>
            <label class="l1"><font color="#FF0000" size="+1">$<?php echo $user->price;?>0</font></label>            <br><br>

        <br></td>
    
    <td class="td-style"> <div style="position: absolute;top:456px;left:37px;font-size: 16px;color: white;line-height: 0%;width: 116px;border-top: 14px solid green;border-bottom: 14px solid green;border-left: none;border-right: 20px solid transparent;" bis_skin_checked="1"><font color="#FFFFFF">ESPECIALDAD</font></div>
        <?php $user = DB::table('menu')->where('menu_id', 8)->first();
        $id_image=$user->image;
        $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
    <img class="img5" src="<?php echo $path;?>">
    <br>
    <label class="l1"><?php echo $user->hamburger_name;?></label>
    <br>
    <label class="l1"><font color="#FF0000" size="+1">$<?php echo $user->price;?>0</font></label><br><br>
                 <br>			</td>
    </tr>
    </table>
<br><br>
<table align="center" style="border-color:#FFFFFF;" cellspacing="20px;">
<tr>
    <?php $user = DB::table('menu')->where('menu_id', 2)->first();
    $id_image=$user->image;
    $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
<td style="width:454px;">
<p class="pp1"><img src="<?php echo $path;?>" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>Pollo</font>&emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  &emsp; &emsp; &nbsp;&nbsp;$<?php echo $user->price;?>.00</p>
</td>
<?php $user = DB::table('menu')->where('menu_id', 1)->first();
$id_image=$user->image;
$path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
<td style="width:454px;">
<p class="pp1"><img src="<?php echo $path;?>" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>Mixita</font>&emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  &emsp; &emsp;&nbsp;$<?php echo $user->price;?>.00</p>
</td>
</tr>

<tr>
    <?php $user = DB::table('menu')->where('menu_id', 1)->first();
    $id_image=$user->image;
    $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
<td style="width:454px;">
<p class="pp1"><img src="<?php echo $path;?>" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>Carne</font>&emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  &emsp; &emsp; &nbsp;$<?php echo $user->price;?>.00</p>
</td>
<?php $user = DB::table('menu')->where('menu_id', 2)->first();
$id_image=$user->image;
$path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
<td style="width:454px;">
<p class="pp1"><img src="<?php echo $path;?>" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>Pollo</font>&emsp; &emsp; &emsp;&emsp; &emsp;&nbsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  &emsp; &emsp;&emsp;&nbsp;$<?php echo $user->price;?>.00</p>
</td>
</tr>

<tr>
    <?php $user = DB::table('menu')->where('menu_id', 4)->first();
    $id_image=$user->image;
    $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
<td style="width:454px;">
<p class="pp1"><img src="<?php echo $path;?>" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>De todito</font>&emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  &emsp;&nbsp;&nbsp;$<?php echo $user->price;?>.00</p>
</td>
<?php $user = DB::table('menu')->where('menu_id', 3)->first();
$id_image=$user->image;
$path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
<td style="width:454px;">
<p class="pp1"><img src="<?php echo $path;?>" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>Mixita</font>&emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  &emsp; &emsp;$<?php echo $user->price;?>.00</p>
</td>
</tr>

<tr>
    <?php $user = DB::table('menu')->where('menu_id', 1)->first();
    $id_image=$user->image;
    $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
<td style="width:454px;">
<p class="pp1"><img src="<?php echo $path;?>" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>Carne</font>&emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  &emsp; &emsp;&nbsp;&nbsp;$<?php echo $user->price;?>.00</p>
</td>
<?php $user = DB::table('menu')->where('menu_id', 2)->first();
$id_image=$user->image;
$path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
<td style="width:454px;">
<p class="pp1"><img src="<?php echo $path;?>" align="top" style="height:77px; width:77px;"><font color="#FFFFFF";>Pollo</font>&emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  &emsp; &emsp;&emsp;&nbsp;$<?php echo $user->price;?>.00</p>
</td>
</tr>
</table>
<br><br><br>
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
                    <input type="text" name="nombre" id="nombre" autocomplete="off"  class="signup-element-fields" onKeyUp="this.value = this.value.replace(/[^a-z,A-z]/g,'')" placeholder="nombre" required>
                    <label class="signup-element">Correo:</label><br>
                    <input type="email" autocomplete="off" placeholder="Correo" id="correo" name="correo" class="signup-element-fields" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required><br><br>
                    <label class="signup-element">Contraseña:</label>
                    <input placeholder="contrasena" type="password" id="pwd" name="pwd" minlength="8" maxlength="10" class="signup-element-fields" required>
                    <label class="signup-element">Repetir Contraseña:</label>
                    <input placeholder=" Repetir contrasena" type="password" onfocusout="Validate()" id="cpwd" name="cpwd" minlength="8" maxlength="10" class="signup-element-fields" required>   
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
                <input type="email" id="email" name="email" placeholder="admin@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="signup-element-fields1" required>
                <br>
                <label class="signup-element1">contraseña</label>
                <input type="password" id="pass" minlength="8" maxlength="10" name="pass" placeholder="12345678"  class="signup-element-fields1" required>
                    <br>
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
