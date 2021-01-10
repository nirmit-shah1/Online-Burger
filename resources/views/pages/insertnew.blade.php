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
            <div class="triangle_border" style="top:-97.1;"><br></div>
       </div>
<br><br><br><br>
     <h1 class="head h11" style="top:-120px; z-index:2; font-size:69px;">Add Burger</h1>
       
</div>
    <div class="triangle_bottom_border"> <br></div>
       <div class="res1" id="res1" style="display:none; top: -320px;">
        <br><br>
        <a href="<?php echo $location; ?>"  style=" color:red; text-decoration:none; padding-bottom:5px;">INICIO</a><br>
		   <a href="{{ URL::to('about1') }}" style="color:#FFFFFF; text-decoration:none;">SOBRE NOSOTROS</a><br>
			<a href="{{ URL::to('menu1') }}" style=" text-decoration:none;color:#FFFFFF; ">MENU</a><br>
			<a href="http://axp8158.uta.cloud/Blog.html/" style="color:#FFFFFF; text-decoration:none;">BLOG</a><br>
			<a href="{{ URL::to('contact1') }}" style="color:#FFFFFF; text-decoration:none;">CONTACTO</a><br>
			<a href="{{ URL::to('logout') }}" style="color:#FFFFFF; text-decoration:none;">LOGOUT</a><br>

       </div>
<h1 class="h14">Add Details of The Burger</h1><br><br><br>
<div class="489-level" align="left" style="width:0px;">		
<table class="insert1" align="center" style="border-color:#FFFFFF;" align="left" cellspacing="20px;">
    <form action="{{route('pages.insertnewback')}}" method="post" enctype='multipart/form-data'> 
        {{ csrf_field() }}
<tr>
<td style="color:#FFFFFF;">Hamburger Name</td>
<td ><input style="height: 32px;width: 283px;" type="text" name="name1" required></td>
</tr>
<tr>
<td style="color:#FFFFFF;">Price</td>
<td ><input style="height: 32px;width: 283px;" type="number" name="price" required></td>
</tr>
<tr>
<td style="color:#FFFFFF;">Image Name</td>
<td ><input style="height: 32px;width: 283px;" type="text" name="imgname" required></td>
</tr>
<tr>
<td style="color:#FFFFFF;">Image</td>
<td > <input type='file' name='file' /></td></tr>
<tr>
<td style="color:#FFFFFF;">Calories</td>
<td ><input style="height: 32px;width: 283px;" type="number" name="calories" required></td>
</tr>
<tr>
<td style="color:#FFFFFF;">Description</td>
<td ><input style="height: 32px;width: 283px;" type="text" name="description" required></td>
</tr>
<tr>
<td style="color:#FFFFFF;" colspan="2" align="center"><input type="submit" value="Add New Burger" name="add" id="add" style="width:148px; top:-5px; background-color:#00CC00;color: white; height: 48px;"></div></td>
</tr>

</table>
</form>		 
<br><br><br>
			     @if(session()->has('insertsuccess2'))

                    <?php     
                   echo "<label class='signup-element'><font color='green'>Succesfully Burger Information inseerted in database</font></label><br>";
                    echo '<script type="text/javascript">','openForm1();','</script>';
                    session()->flush();
                        ?>
             @endif
                
            ?><br>


</div>
<?php ?>
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
    </div>
    </body>

    



<?php 
}
else {
    return redirect()->route('index');
}

?>
@stop