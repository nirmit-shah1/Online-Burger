@extends('layouts.header')
<head>
    
</head>
@section('content')
<body id="b1">
@yield('content')
    <div  id="main_body">
                <div id="main_header"></div>
                <div class="onupper" id="onupper">
                    <img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/5.png')}}"  class="logo">
                    <br><br>
                    <a href="index.php" style="color:red;">INICIO</a>
                    <a href="{{ URL::to('about') }}">SOBRE NOSOTROS</a>
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
               <a href="index.php" style="color:red; text-decoration:none; padding-bottom:5px;">INICIO</a><br>
               <a href="{{ URL::to('about') }}" style="color:#FFFFFF; text-decoration:none;">SOBRE NOSOTROS</a><br>
                <a href="{{ URL::to('menu') }}" style="color:#FFFFFF; text-decoration:none;">MENU</a><br>
                <a href="http://axp8158.uta.cloud/Blog.html/" style="color:#FFFFFF; text-decoration:none;">BLOG</a><br>
                <a href="{{ URL::to('contact') }}" style="color:#FFFFFF; text-decoration:none;">CONTACTO</a><br>
                <a href="javascript:void(0);" style="color:#FFFFFF; text-decoration:none;" onClick="openForm()">REGISTRO</a><br>
                <a href="javascript:openForm1()" onClick="openForm1()" style="color:#FFFFFF; text-decoration:none;">INICIAR SESION</a><br>
    
               </div>
               <p class="p1">LAS MEJORES DE LA CIUDAD</p>
                  <h1 class="head h11">Hamburguesas</h1>
                  
               <div id ="button1"><button onClick="location.href = '{{ URL::to('menu') }}';" >VER MENÚ HOY </button></div>
    </div>
            <div id="triangle_bottom_border"> <br></div>
    <!--=====================================================2-image table=====================================-->
            <div class="twoimage" style="overflow:hidden;">
            <br><br><br>
            <table align="center" border="0">
            <tr><td colspan="4" align="center"><img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/Burguer.png')}}" class="img1"></td></tr>
            <tr>
                <td rowspan="3" style="vertical-align:top;"><img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/story1.png')}}" class="img2" align="left"></td>
                <td colspan="2" rowspan="2" style="vertical-align:bottom;"> <h1 class="h13" >Nuestra historia</h1><br><br>
            <td rowspan="3"><img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/story2.png')}}" class="img3" style="height:320px;" align="right"></td>
            <tr>
            </tr>
            <tr>
            <td width="470px" style="vertical-align:top;"><p class="p112">
    <br><br>	Los orígenes se remontan al 10 de junio de 1960, cuando Ibrahim Mata<br>compraron la Hamburgueseria “Soy Yo” con una  inversión inicial de 950 dólares. El<br> local estaba situado en Lecheria, y la idea de Ibrahim era vender<br> Hamburguesas a domicilio a las personas de las residencias cercanas. Aquella<br> experiencia no marchaba como tenían previsto.</p>
            </td>
            <td><p class="p113">A pesar de todo, Ibrahim se mantuvo al frente del restaurante y tomó <br> decisiones importantes para su futuro, como reducir la carta de productos y <br>establecer un reparto a domicilio gratuito. Después de adquirir dos <br>restaurantes más en Barcelona, en 1965 renombró sus tres locales como Ibra's Burger Grill.</p>
            </td>
    
            </tr>
            </table>
    </div>
    <!--================================================2-image table two=====================================-->
            <div class="twoimagetwoone"  style="overflow:hidden;" >
            <br><br><br>
            <table align="center" border="0">
    
            <tr><td align="center"><img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/Burguer.png')}}" class="img1"></td></tr>
            <tr><td style="vertical-align:bottom;"> <h1 class="h13" >Nuestra historia</h1><br><br></td></tr>
            <tr><td  style="vertical-align:top;"><img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/story1.png')}}" class="img2" align="left"></td></tr>
            <tr>
            </tr>
            <tr>
            <td width="470px" style="vertical-align:top;"><p class="p11121">
    <br><br>	Los orígenes se remontan al 10 de junio de 1960, cuando Ibrahim Mata<br>compraron la Hamburgueseria “Soy Yo” con una  inversión inicial de 950 dólares. El<br> local estaba situado en Lecheria, y la idea de Ibrahim era vender<br> Hamburguesas a domicilio a las personas de las residencias cercanas. Aquella<br> experiencia no marchaba como tenían previsto.</p>
            </td>
            </tr>
            <tr>
            <td><p class="p113">A pesar de todo, Ibrahim se mantuvo al frente del restaurante y tomó <br> decisiones importantes para su futuro, como reducir la carta de productos y <br>establecer un reparto a domicilio gratuito. Después de adquirir dos <br>restaurantes más en Barcelona, en 1965 renombró sus tres locales como Ibra's Burger Grill.</p>
            </td>
            </tr>
            </tr>
                    <tr><td rowspan="3"><img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/story2.png')}}" class="img3" style="height:320px;" align="right"></td></tr>
            </table>
    </div>
    
    <div class="level-3">
    <p>data</p>
    </div>
    </div>
    <div class="data131" style="position:relative;">
    <table align="center" border="0">
        <tr>
            <td>
                    <img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/Burguer.png')}}" class="img4" >		
            </td>
        </tr>
        <tr>
            <td>
            
            </td>
        </tr>
    </table>		
            <h1 class="h14">Las más vendidos</h1>
            <br><br><br><br>
            <!--======================================TABLE 1==============================================-->		
            <table border="0" class="table1" style="" cellpadding="15" cellspacing="17" align="center">
            <tr>
            <td class="td-style"><div class="td-div-style" bis_skin_checked="1"><font color="#FFFFFF">OFERTA</font></div>
                <?php $user = DB::table('menu')->where('menu_id', 8)->first();
                    $id_image=$user->image;
                    $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
                <img class="img5" src="<?php echo $path;?>">
                <br>
                <label class="l1"><?php echo $user->hamburger_name;?></label>
                <br>
                <label class="l1"><b>$<?php echo $user->price;?>0</b></label>
                <br><br>
                <button type="button" onClick="javascript:openForm1()" class="btn5">Ordenar ahora</button>			
    
            </td>
            
            <td class="td-style"> 
                <?php $user = DB::table('menu')->where('menu_id', 9)->first();
                    $id_image=$user->image;
                    $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
                <img class="img5" src="<?php echo $path;?>">
                <br>
                <label class="l1"><?php echo $user->hamburger_name;?></label>
                <br>
                <label class="l1"><b>$<?php echo $user->price;?>0</b></label><br><br>
                            <button type="button" onClick="javascript:openForm1()" class="btn5">Ordenar ahora</button>			</td>
            
            <td style="text-align:center;"> 
                <?php $user = DB::table('menu')->where('menu_id', 10)->first();
                $id_image=$user->image;
                $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
            <img class="img5" src="<?php echo $path;?>">
            <br>
            <label class="l1"><?php echo $user->hamburger_name;?></label>
            <br>
            <label class="l1"><b>$<?php echo $user->price;?>0</b></label>
                        <br><br>
                            <button type="button" onClick="javascript:openForm1()" class="btn5">Ordenar ahora</button>			</td>
            
            <td class="td-style"> <div style="position: absolute;top: 87px;left: 668px;font-size: 16px;color: white;line-height: 0%;width: 116px;border-top: 14px solid green;border-bottom: 14px solid green;border-left: none;border-right: 20px solid transparent;" bis_skin_checked="1"><font color="#FFFFFF">ESPECIALDAD</font></div>
                <?php $user = DB::table('menu')->where('menu_id', 8)->first();
                    $id_image=$user->image;
                    $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
                <img class="img5" src="<?php echo $path;?>">
                <br>
                <label class="l1"><?php echo $user->hamburger_name;?></label>
                <br>
                <label class="l1"><b>$<?php echo $user->price;?>0</b></label>
                <br><br>
                            <button type="button" onClick="javascript:openForm1()" class="btn5">Ordenar ahora</button>			</td>
            </tr>
            <tr>
            
            
            <td class="td-style"> 
                <?php $user = DB::table('menu')->where('menu_id', 9)->first();
                    $id_image=$user->image;
                    $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
                <img class="img5" src="<?php echo $path;?>">
                <br>
                <label class="l1"><?php echo $user->hamburger_name;?></label>
                <br>
                <label class="l1"><b>$<?php echo $user->price;?>0</b></label>
                <br><br>
                            <button type="button" onClick="javascript:openForm1()" class="btn5">Ordenar ahora</button>			</td>
    
            <td class="td-style"> 
             <div class="div12" bis_skin_checked="1"><font color="#FFFFFF">OFERTA</font></div>
            
             <?php $user = DB::table('menu')->where('menu_id', 10)->first();
                $id_image=$user->image;
                $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
            <img class="img5" src="<?php echo $path;?>">
            <br>
            <label class="l1"><?php echo $user->hamburger_name;?></label>
            <br>
            <label class="l1"><b>$<?php echo $user->price;?>0</b></label>
                   <br><br>
                            <button type="button" onClick="javascript:openForm1()" class="btn5">Ordenar ahora</button>			</td>
            <td class="td-style">
            <div class="div13" bis_skin_checked="1"><font color="#000000"><b>TALLA EXTRA</b></font></div>
            <?php $user = DB::table('menu')->where('menu_id', 8)->first();
            $id_image=$user->image;
            $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
        <img class="img5" src="<?php echo $path;?>">
        <br>
        <label class="l1"><?php echo $user->hamburger_name;?></label>
        <br>
        <label class="l1"><b>$<?php echo $user->price;?>0</b></label>
                <br><br>
                            <button type="button" onClick="javascript:openForm1()" class="btn5">Ordenar ahora</button>			</td>
            <td class="td-style"> 
                <?php $user = DB::table('menu')->where('menu_id', 9)->first();
                $id_image=$user->image;
                $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
            <img class="img5" src="<?php echo $path;?>">
            <br>
            <label class="l1"><?php echo $user->hamburger_name;?></label>
            <br>
            <label class="l1"><b>$<?php echo $user->price;?>0</b></label>
                <br><br>
                            <button type="button" onClick="javascript:openForm1()" class="btn5">Ordenar ahora</button>			</td>
                </tr>
                <tr>
                    <td colspan="4" align="center">
                    <button onClick="location.href = '{{ URL::to('menu') }}';">VER MENÚ HOY </button>
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
            <label class="l1"><b>$<?php echo $user->price;?>0</b></label>
            <br><br>
                            <button type="button" onClick="javascript:openForm1()" class="btn5">Ordenar ahora</button>			</td>
            
            <td class="td-style"> 
                <?php $user = DB::table('menu')->where('menu_id', 9)->first();
                $id_image=$user->image;
                $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
            <img class="img5" src="<?php echo $path;?>">
            <br>
            <label class="l1"><?php echo $user->hamburger_name;?></label>
            <br>
            <label class="l1"><b>$<?php echo $user->price;?>0</b></label>
                <br><br>
                            <button type="button" onClick="javascript:openForm1()" class="btn5">Ordenar ahora</button>			</td>
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
            <label class="l1"><b>$<?php echo $user->price;?>0</b></label>
                        <br><br>
                            <button type="button" onClick="javascript:openForm1()" class="btn5">Ordenar ahora</button>			</td>
            
            <td class="td-style"> <div style="position: absolute;top:456px;left:37px;font-size: 16px;color: white;line-height: 0%;width: 116px;border-top: 14px solid green;border-bottom: 14px solid green;border-left: none;border-right: 20px solid transparent;" bis_skin_checked="1"><font color="#FFFFFF">ESPECIALDAD</font></div>
                <?php $user = DB::table('menu')->where('menu_id', 8)->first();
                    $id_image=$user->image;
                    $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
                <img class="img5" src="<?php echo $path;?>">
                <br>
                <label class="l1"><?php echo $user->hamburger_name;?></label>
                <br>
                <label class="l1"><b>$<?php echo $user->price;?>0</b></label>
                <br><br>
                            <button type="button" onClick="javascript:openForm1()" class="btn5">Ordenar ahora</button>			</td>
            </tr>
            <tr>
            
            
            <td class="td-style"> 
                <?php $user = DB::table('menu')->where('menu_id', 9)->first();
                    $id_image=$user->image;
                    $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
                <img class="img5" src="<?php echo $path;?>">
                <br>
                <label class="l1"><?php echo $user->hamburger_name;?></label>
                <br>
                <label class="l1"><b>$<?php echo $user->price;?>0</b></label><br><br>
                            <button type="button" onClick="javascript:openForm1()" class="btn5">Ordenar ahora</button>			</td>
    
            <td class="td-style"> 
             <div class="div12" bis_skin_checked="1"><font color="#FFFFFF">OFERTA</font></div>
            
             <?php $user = DB::table('menu')->where('menu_id', 10)->first();
             $id_image=$user->image;
             $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
         <img class="img5" src="<?php echo $path;?>">
         <br>
         <label class="l1"><?php echo $user->hamburger_name;?></label>
         <br>
         <label class="l1"><b>$<?php echo $user->price;?>0</b></label>
             
                <br><br>
                            <button type="button" onClick="javascript:openForm1()" class="btn5">Ordenar ahora</button>			</td>
            </tr>
            <tr>
            <td class="td-style">
            <div class="div13" bis_skin_checked="1"><font color="#000000"><b>TALLA EXTRA</b></font></div>
            <?php $user = DB::table('menu')->where('menu_id', 8)->first();
            $id_image=$user->image;
            $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
        <img class="img5" src="<?php echo $path;?>">
        <br>
        <label class="l1"><?php echo $user->hamburger_name;?></label>
        <br>
        <label class="l1"><b>$<?php echo $user->price;?>0</b></label><br><br>
                            <button type="button" onClick="javascript:openForm1()" class="btn5">Ordenar ahora</button>			</td>
            <td class="td-style"> 
                <?php $user = DB::table('menu')->where('menu_id', 9)->first();
                $id_image=$user->image;
                $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
            <img class="img5" src="<?php echo $path;?>">
            <br>
            <label class="l1"><?php echo $user->hamburger_name;?></label>
            <br>
            <label class="l1"><b>$<?php echo $user->price;?>0</b></label> <br><br>
                            <button type="button" onClick="javascript:openForm1()" class="btn5">Ordenar ahora</button>			</td>
                </tr>
                <tr>
                    <td colspan="4" align="center">
                    <button onClick='location.href = "{{ URL::to('menu') }}"'>VER MENÚ HOY </button>
                    </td>
                </tr>
            </table>		
    </div>
    <!--===========================================Extra Menu 1=============================================-->
    <div class="extra_menu">
            <table class="extra_table" align="center" style="border:#000000;" border="2" cellpadding="10px;" cellspacing="15px;">
                    <tr>
                        <td colspan="2" align="center" ><img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/Burguer.png')}}" style="vertical-align:bottom;height:40px;" class="img4"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><h1 class="common-heading" style="padding-bottom:10px;">nuestro menú</h1></td>
                    </tr>
                    <tr>
                    <td align="center" colspan="2">
                        <table border="1" align="center" style="border:#000000;">
                        <tr>
                        <td style="width: 334px;">s</td>
    
                <td class="td11" align="center"><p class="common-paragraph">TODOS</p></td>					
                            
                            <td align="center" class="td12"><p class="common-paragraph">POLLO</p></td> 
                            <td align="center" class="td12"><p class="common-paragraph">Carne</p></td>
                            <td align="center" class="td12"><p class="common-paragraph">Mixita</p></td>
                            <td align="center" class="td12"><p class="common-paragraph">De Todito</p></td>
                            <td style="width: 346px;">s</td>
                            </tr>
                        <tr>
                        
                        <td colspan="7"><hr class="hr22"></td>
                        </tr>
                        </table>
    
                    </td>
                    </tr>
                    
    <tr>
        <?php $user = DB::table('menu')->where('menu_id', 1)->first();
                $id_image=$user->image;
                $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
    <td style="width:454px;">
    <p style="font-family:Open Sans; font-size:16px; color:#FF0000;"><img src="<?php echo $path;?>" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>hamburguesa de pollo</font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo $user->price;?>.00</p>
    </td>
    <td style="width:454px;">
        <?php $user = DB::table('menu')->where('menu_id', 5)->first();
                $id_image=$user->image;
                $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
    <p style="font-family:Open Sans; font-size:16px; color:#FF0000;"><img src="<?php echo $path;?>" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>hamburguesa carne</font>&emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;$<?php echo $user->price;?>.00</p>
    </td>
    </tr>
    
    <tr>
        <?php $user = DB::table('menu')->where('menu_id', 2)->first();
                $id_image=$user->image;
                $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
    <td style="width:454px;">
    <p style="font-family:Open Sans; font-size:16px; color:#FF0000;"><img src="<?php echo $path;?>" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>hamburguesa carne</font>&emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;$<?php echo $user->price;?>.00</p>
    </td>
    <td style="width:454px;">
        <?php $user = DB::table('menu')->where('menu_id', 3)->first();
                $id_image=$user->image;
                $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
    <p style="font-family:Open Sans; font-size:16px; color:#FF0000;"><img src="<?php echo $path;?>" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>hamburguesa mixita</font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo $user->price;?>.00</p>
    </td>
    </tr>
    
    <tr>
        <?php $user = DB::table('menu')->where('menu_id', 4)->first();
        $id_image=$user->image;
        $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
    <td style="width:454px;">
    <p style="font-family:Open Sans; font-size:16px; color:#FF0000;"><img src="<?php echo $path; ?>" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>hamburguesa de todito</font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo $user->price;?>.00</p>
    </td>
    <td style="width:454px;">
        <?php $user = DB::table('menu')->where('menu_id', 5)->first();
        $id_image=$user->image;
        $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
    <p style="font-family:Open Sans; font-size:16px; color:#FF0000;"><img src="<?php echo $path; ?>" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>hamburguesa pollo</font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;$<?php echo $user->price;?>.00</p>
    </td>
    </tr>
    <tr>
        <?php $user = DB::table('menu')->where('menu_id', 1)->first();
        $id_image=$user->image;
        $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
    <td style="width:454px;">
    <p style="font-family:Open Sans; font-size:16px; color:#FF0000;"><img src="<?php echo $path; ?>" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>hamburguesa de todito</font>&emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp;&emsp; &emsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo $user->price;?>.00</p>
    </td>
    <td style="width:454px;">
        <?php $user = DB::table('menu')->where('menu_id', 2)->first();
        $id_image=$user->image;
        $path="http://localhost/ibraslaravel/resources/views/pages/upload/".$id_image; ?>
    <p style="font-family:Open Sans; font-size:16px; color:#FF0000;"><img src="<?php echo $path; ?>" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>hamburguesa carne</font>&emsp; &emsp; &emsp;&emsp; &emsp; &emsp;&emsp; &emsp;  &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&nbsp;&nbsp;$<?php echo $user->price;?>.00</p>
    </td>
    </tr>
    <tr>
                    <td colspan="2" align="center">
                    <button onClick="location.href = '{{ URL::to('menu') }}'">VER MENÚ HOY </button>
                    </td>
                </tr>
            </table>
    </div>
    <!--=========================================================Extra Menu 2========================================-->
    <div class="extra_menu1">
            <table class="extra_table" align="center" style="border:#000000;" border="2" cellpadding="10px;" cellspacing="15px;">
                    <tr>
                        <td colspan="2" align="center" ><img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/Burguer.png')}}" style="vertical-align:bottom;height:40px;" class="img4"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><h1 class="common-heading" style="padding-bottom:10px;">nuestro menú</h1></td>
                    </tr>
                    <tr>
                    <td align="center" colspan="2">
                        <table border="1" align="center" style="border:#000000;">
                        <tr>
                        <td style="width: 334px;">s</td>
    
                <td class="td11" align="center"><p class="common-paragraph">TODOS</p></td>					
                            
                            <td align="center" class="td12"><p class="common-paragraph">POLLO</p></td> 
                            <td align="center" class="td12"><p class="common-paragraph">Carne</p></td>
                            <td align="center" class="td12"><p class="common-paragraph">Mixita</p></td>
                            <td align="center" class="td12"><p class="common-paragraph">De Todito</p></td>
                            <td style="width: 346px;">s</td>
                            </tr>
                        <tr>
                        
                        <td colspan="7"><hr class="hr22"></td>
                        </tr>
                        </table>
    
                    </td>
                    </tr>
                    
    <tr>
    <td style="width:454px;">
        
    <p style="font-family:Open Sans; font-size:16px; color:#FF0000;"><img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/hamburguesa1.jpg')}}" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>hamburguesa de pollo</font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$12.00</p>
    </td></tr>
    <tr>
    <td style="width:454px;">
    <p style="font-family:Open Sans; font-size:16px; color:#FF0000;"><img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/hamburguesa20.jpg')}}" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>hamburguesa carne</font>&emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;$20.00</p>
    </td>
    </tr>
    
    <tr>
    <td style="width:454px;">
    <p style="font-family:Open Sans; font-size:16px; color:#FF0000;"><img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/hamburguesa3.jpg')}}" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>hamburguesa carne</font>&emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;$12.00</p>
    </td></tr>
    <tr>
    <td style="width:454px;">
    <p style="font-family:Open Sans; font-size:16px; color:#FF0000;"><img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/hamburguesa4.jpg')}}" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>hamburguesa mixita</font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;$6.00</p>
    </td>
    </tr>
    
    <tr>
    <td style="width:454px;">
    <p style="font-family:Open Sans; font-size:16px; color:#FF0000;"><img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/hamburguesa5.jpg')}}" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>hamburguesa de todito</font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$12.00</p>
    </td></tr>
    <tr>
    <td style="width:454px;">
    <p style="font-family:Open Sans; font-size:16px; color:#FF0000;"><img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/hamburguesa6.jpg')}}" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>hamburguesa pollo</font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;$20.00</p>
    </td>
    </tr>
    <tr>
    <td style="width:454px;">
    <p style="font-family:Open Sans; font-size:16px; color:#FF0000;"><img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/hamburguesa7.jpg')}}" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>hamburguesa de todito</font>&emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp;&emsp; &emsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$12.00</p>
    </td></tr>
    <tr>
    <td style="width:454px;">
    <p style="font-family:Open Sans; font-size:16px; color:#FF0000;"><img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/hamburguesa8.jpg')}}" align="top" style="height:77px; width:77px;">&nbsp;&nbsp;&nbsp;<font color="#FFFFFF";>hamburguesa carne</font>&emsp; &emsp; &emsp;&emsp; &emsp; &emsp;&emsp; &emsp;  &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&nbsp;&nbsp;$6.00</p>
    </td>
    </tr>
    <tr>
                    <td colspan="2" align="center">
                    <button onClick="location.href = '{{ URL::to('menu') }}';">VER MENÚ HOY </button>
                    </td>
                </tr>
            </table>
    </div>
    
    <!--============================================================Footer================================-->
    <div class="triangle_border_footer"> <br></div>
        <div class="footer" style="line-height:1.667" ><br><br><br><br><br>
    <img src="{{url('http://localhost/ibraslaravel/resources/views/pages/style/images/5.png')}}" class="footer_centre" >
    <p align="center" class="p21"><font style="text-decoration:underline;">Habla a:</font><br>
    <font color="#FFFFFF" style="text-decoration:none;font-size:0.70em;">Av. Intercomunal, sectro la Mora, calle 8</font><p>
    <p align="center"  class="text-lg-left" class="p31"><font style="text-decoration:underline;font-size:0.70em; color:green">Telefono:</font><br>
    <font color="#FFFFFF" class="w-100 p-3"  style="text-decoration:none;">+58 251 261 00 01</font><p>
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
@endsection