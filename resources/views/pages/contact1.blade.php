@extends('layouts.header')
@section('content')

<?php

$con=mysqli_connect("localhost", "root","","burgers");
$location;
$mail=session()->get('login_email');
if(session()->has('user') || session()->has('admin') || $mail !=" " )
{
    $mail=session()->get('login_email');
    if(session()->has('admin') || $mail=="admin@gmail.com")
    {
        $location="admin";
    }
    else
    {
        $location="login";
    }
?>
<body style="margin:auto; background-color:#000000;">
    <div class="main_bodycontactinfo">
                <div id="main_header"></div>
                <div class="onupper" id="onupper">
                    <img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/5.png')}}"  class="logo">
                    <br><br>    
                     <a href="<?php echo $location; ?>">INICIO</a>
                    <a href="{{ URL::to('about1') }}">SOBRE NOSOTROS</a>
                    <a href="{{ URL::to('menu1') }}" >MENU</a>
                    <a href="http://axp8158.uta.cloud/Blog.html/">BLOG</a>
                    <a href="{{ URL::to('contact1') }}"  style="color:#FF0000;">CONTACTO</a>
                    <a href="{{ URL::to('logout') }}">Logout</a>
                
                    <a href="javascript:myFunction()" id="icon" class="icon" onClick="myFunction()"><img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/menu.png')}}"></a>
                    <br><br><br><br><br><br><br><br><br>
                 
         
                    <div class="triangle_border"><br></div>
               </div>
                      <p class="p1" style="top:284px;" >DI HOLA</p>
    
                  <h1 class="head h11" style="top: -96px;
        font-size: 57px;
        position: relative;">Contacto</h1>
        <br>
    </div>
            <div class="triangle_bottom_border"> <br></div>
            <div class="res1" id="res1" style="display:none; top:-157px; ">
                <br><br>
                <a href="<?php echo $location; ?>"  style="  text-decoration:none; padding-bottom:5px;">INICIO</a><br>
                <a href="{{ URL::to('about1') }}" style="color:#FFFFFF; text-decoration:none;">SOBRE NOSOTROS</a><br>
                 <a href="{{ URL::to('menu1') }}" style=" text-decoration:none;color:#FFFFFF; ">MENU</a><br>
                 <a href="http://axp8158.uta.cloud/Blog.html/" style="color:#FFFFFF; text-decoration:none;">BLOG</a><br>
                 <a href="{{ URL::to('contact1') }}" style="color:red; text-decoration:none;">CONTACTO</a><br>
                 <a href="{{ URL::to('logout') }}" style="color:#FFFFFF; text-decoration:none;">LOGOUT</a><br>
     
               
    
               </div>
    
            <div class="2-level" >
            <br><br><br>
            <img  src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/Burguer.png')}}" style="height:39px;" class="img1">
            <h1 class="h13" style="font-size:50px;">Di hola</h1>
            <p align="center" class="pw1">Di hola, envíanos un mensaje</p>
            <p align="center" class="pw2">Envianos tus comentarios y suguerencias ustedes son importante para nosotros</p>		
    <br><br>
    <!--======================================================== Contact one======================================-->
    <div class="contact" align="center" style="text-align:center; position:relative;">
    <form action="{{route('pages.contactback1')}}" method="post" >
    {{ csrf_field() }}
    <input type="text" required name="name1" placeholder="&nbsp;Name" id="name1" class="inx1" align="middle">
    &emsp;&emsp;<input required type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="email1" name="email1" placeholder="&nbsp;E-mail" align="middle" class="inx1">
    <br><br>
    <?php
                    if(isset($_SESSION['name1error']))
                    {
                        
                        echo "<font color='red'>please enter Name</font>&nbsp;&nbsp;&nbsp;";
                        unset($_SESSION['name1error']);
                        
                    }?>
    <?php
                    if(isset($_SESSION['email1error']))
                    {
                        
                        echo "<font color='red'>please enter Email</font><br>";
                        unset($_SESSION['email1error']);
                        
                    }?>
                    
    <input type="text" required name="subject" placeholder="&nbsp;Subject" align="middle" class="inx2">
    <?php
                    if(isset($_SESSION['subjecterror']))
                    {
                        
                        echo "<br><font color='red'>please enter Subject</font>";
                        unset($_SESSION['subjecterror']);
                        
                    }?>
    <br><br>
    <textarea class="inx3" required name="message"placeholder="&nbsp;Message" align="middle"></textarea>
    <?php
                    if(isset($_SESSION['messageerror']))
                    {
                        
                        echo "<br><font color='red'>please enter Message</font>";
                        unset($_SESSION['messageerror']);
                        
                    }?>
    <div id ="button1" style="top:7px; position:relative;"><input type="submit" name="submit" value="ENVIAR MENSAJE" style="width:174px;height:59px; background-color:#EF0031; border-color:#EF0031; color:#FFFFFF; "></form></div>
    </div>
    <br><br><br>
    </div>
    <!--======================================================== Contact 2======================================-->
    <div class="contactone" align="center" style="text-align:center; position:relative;">
    <form action="{{route('pages.contactback1')}}" method="post" >
        {{ csrf_field() }}
    <input required type="text" name="name1" placeholder="&nbsp;Name" id="name1" class="inx1" align="middle">
    <br>
    <?php
                    if(isset($_SESSION['name1error']))
                    {
                        
                        echo "<font color='red'>please enter Name</font>&nbsp;&nbsp;&nbsp;";
                        unset($_SESSION['name1error']);
                        
                    }?>
    <br><input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="email1" name="email1" placeholder="&nbsp;E-mail" align="middle" class="inx1" required>
    <br>
    <?php
                    if(isset($_SESSION['email1error']))
                    {
                        
                        echo "<font color='red'>please enter Email</font><br>";
                        unset($_SESSION['email1error']);
                        
                    }?>
                    <br>
    <input type="text" name="subject" required placeholder="&nbsp;Subject" align="middle" class="inx2">
    <?php
                    if(isset($_SESSION['subjecterror']))
                    {
                        
                        echo "<br><font color='red'>please enter Subject</font>";
                        unset($_SESSION['subjecterror']);
                        
                    }?>
    <br><br>
    <textarea class="inx3" required name="message"placeholder="&nbsp;Message" align="middle"></textarea>
    <?php
                    if(isset($_SESSION['messageerror']))
                    {
                        
                        echo "<br><font color='red'>please enter Message</font>";
                        unset($_SESSION['messageerror']);
                        
                    }?>
    <div id ="button1" style="top:7px; position:relative;"><input type="submit" name="submit" value="ENVIAR MENSAJE" style="width:174px;height:59px; background-color:#EF0031; border-color:#EF0031; color:#FFFFFF; "></form></div>
    </div>
    <br><br><br>
    </div>
    @if(session()->has('contactsuccess'))
        <?php
        echo "<br><font color='green'>Your Message has been successfully sent</font>";
        session()->flush();
        ?>
    @endif    

    <!--============================================================Footer================================-->
    <div class="triangle_border_footer"> <br></div>
        <div class="footer" style="line-height:1.667" ><br><br><br><br><br>
    <img src=src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/5.png')}}" class="footer_centre" >
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
                    <img src=src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/Burguer.png')}}" class="img31">
                    <h1 class="hc1">Registro de usuario</h1>
                    <button type="button" class="btn1 cancel" onClick="closeForm()"><img class="img41" src=src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/cancel.png')}}"></button>
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
                <img src=src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/Burguer.png')}}" class="ima11">
                <h1 class="hb1">Iniciar Sesion</h1>
                <button type="button" class="btn11 cancel1" onClick="closeForm1()"><img class="im11" src=src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/cancel.png')}}"></button>		
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
    <?php 
}
else {
    redirect()->to('http://ibraslaravel/')->send();
}
echo "done";
?>
@stop