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
		<div class="main_bodymenu">
			<div id="main_header"></div>
			<div class="onupper">
				<img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/5.png')}}" style="float:left; " class="logo">
				<br><br>
                
                <a href="<?php echo $location; ?>" style="color:#FF0000;">INICIO</a>
				<a href="{{ URL::to('about1') }}">SOBRE NOSOTROS</a>
				<a href="{{ URL::to('menu1') }}" >MENU</a>
				<a href="http://axp8158.uta.cloud/Blog.html/">BLOG</a>
				<a href="{{ URL::to('contact1') }}">CONTACTO</a>
				<a href="{{ URL::to('logout') }}">Logout</a>
				<a href="javascript:myFunction()" id="icon" class="icon" onClick="myFunction()"><img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/menu.png')}}"></a>
				<br><br><br><br><br><br><br><br><br>
				<div class="triangle_border"><br></div>
		   </div>
		   <div class="res1" id="res1" style="display:none;">
			<br><br>
		   <a href="<?php echo $location; ?>"  style=" color:red; text-decoration:none; padding-bottom:5px;">INICIO</a><br>
		   <a href="{{ URL::to('about1') }}" style="color:#FFFFFF; text-decoration:none;">SOBRE NOSOTROS</a><br>
			<a href="{{ URL::to('menu1') }}" style=" text-decoration:none;color:#FFFFFF; ">MENU</a><br>
			<a href="http://axp8158.uta.cloud/Blog.html/" style="color:#FFFFFF; text-decoration:none;">BLOG</a><br>
			<a href="{{ URL::to('contact1') }}" style="color:#FFFFFF; text-decoration:none;">CONTACTO</a><br>
			<a href="{{ URL::to('logout') }}" style="color:#FFFFFF; text-decoration:none;">LOGOUT</a><br>

		   </div><p class="p1" style="top:235px;">LAS MEJORES DE LA CIUDAD</p>
   		   <h1 class="head h11" style="top:-51px; z-index:2; font-size:69px;">Welcome User</h1>
</div>
		<div class="triangle_bottom_border"> <br></div>
		<h1 class="h14">Las más vendidos</h1>
        <br>
        
		<a href="{{ URL::to('shoppingdetails') }}" style="color:#FFFFFF; font-size:19px;">Shopping History</a>
        <br><br><br>
        @if(session()->has('orderplaced'))
		    <?php 
		    {?>
			<h1 style="background:#00FF00; color:#FFFFFF;">Your Order has been Successfully Placed</h1>
			<?php session()->flush();}?>

        @endif    
        
		<!--======================================TABLE 1==============================================-->		
		<table border="0" class="table1" style="" cellpadding="15" cellspacing="17" align="center">
<?php
$sql1= "select COUNT(*) as cid from menu";
$result1= mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$cid1=$row1['cid'];

$value=$cid1/4;
$intvalue=intval($value);
$final1=0;
if($value==$intvalue)
$final1=$intvalue;
else if($value > $intvalue)
$final1=$intvalue+1;
else
	echo "no";?>
<?php $sql = "select * from menu";
$result = mysqli_query($con,$sql);
$i=0;
$j=1;
$k=0;
while($row = mysqli_fetch_array($result))
{
if($k==0)
echo "<tr>";
if($i==4 && $j<=$final1)
{
echo "<tr>";
$i=0;
}

$image = $row['image'];
$image_src = "http://localhost/ibraslaravel/resources/views/pages/upload/".$image;
$id=$row[0];
$i++;
$k++;
?>

		<td class="td-style">
			<img class="img5" src='<?php echo $image_src;  ?>'>
			<br>
			<label class="l1"><?php echo $row[1]; ?></label>
			<br>
			<label class="l1"><b>$<?php echo $row[2]; ?></b></label>
            <br><br>
            <div id ="button1" style="top:-5px;">
        <form action="{{route('pages.cart')}}" method="post">
            {{ csrf_field() }}
        <input type="text"    style="display: contents;" name="mail" value="<?php echo $mail;?>" >
        <input type="text"    style="display: contents;" name="id" value="<?php echo $id;?>" >
		<input type="submit" style="width: 148px;
                text-decoration: none;
                vertical-align: middle;
                top: -19px;
                height: 51px;
                color: white;
                padding-top: 10px;
                background-color: red;
                border-color: green;
                border-radius: 11px;
                font-size: 18px;"  value="Order here"></form></div>
		</td>
<?php if($i==4 && $j<=$final1)
{
	echo "</tr>";
	$j++;
}		
?>		
<?php }?>
</table>
		<!--======================================TABLE 2==============================================-->
		<table border="0" class="table112" style=""  align="center">
<?php
$sql1= "select COUNT(*) as cid from menu";
$result1= mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$cid1=$row1['cid'];
$value=$cid1/2;
$intvalue=intval($value);
$final1=0;
if($value==$intvalue)
$final1=$intvalue;
else if($value > $intvalue)
$final1=$intvalue+1;
else
	echo "no";?>
<?php $sql = "select * from menu";
$result = mysqli_query($con,$sql);
$i=0;
$j=0;
$k=0;
while($row = mysqli_fetch_array($result))
{
if($k==0)
echo "<tr>";
if($i==2 && $j<=$final1)
{
echo "<tr>";
$i=0;
}
$image = $row['image'];
$image_src = "http://localhost/ibraslaravel/resources/views/pages/upload/".$image;
$id=$row[0];
$i++;
$k++;
?>

		<td class="td-style">
			<img class="img5" src='<?php echo $image_src;  ?>'>
			<br>
			<label class="l1"><?php echo $row[1]; ?></label>
			<br>
			<label class="l1"><b>$<?php echo $row[2]; ?></b></label>
			<br><br>
			<div id ="button1" style="top:-5px;">    <form action="{{route('pages.cart')}}" method="post">
                {{ csrf_field() }}
            <input type="text" style="display: contents;" name="mail" value="<?php echo $mail;?>" >
            <input type="text" name="id"     style="display: contents;" value="<?php echo $id;?>" >
            <input type="submit" style="width: 148px;
                    text-decoration: none;
                    vertical-align: middle;
                    top: -19px;
                    height: 51px;
                    color: white;
                    padding-top: 10px;
                    background-color: red;
                    border-color: green;
                    border-radius: 11px;
                    font-size: 18px;"  value="Order here"></form></div>
		</td>
<?php if($i==2 && $j<=$final1)
{
	echo "</tr>";
	$j++;
}		
?>		
<?php }?>
</table>
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

<?php 
}
else {
    redirect()->to('http://ibraslaravel/')->send();
}

?>
@stop