<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>menu</title>
<link href="css/estilo.css" type="text/css" rel="stylesheet" />
<script>
 function preguntas(valuePreg)
 {
	
	// alert(valuePreg);
	var preguntas = document.getElementById("preguntas");
	preguntas.innerHTML = " "; 
	//robos
	if(valuePreg == 0 )
	{	 
	
preguntas.innerHTML='<iframe  src="beneficios.php"width=620 height=550 frameborder="0"  marginwidth=2 marginheight=4 align=left></iframe>';
	}
		if(valuePreg ==1 )
	{	 
	
preguntas.innerHTML='<iframe  src="credito.php" width=620 height=550 frameborder="0"  marginwidth=2 marginheight=4 align=left></iframe>';
	}
	if(valuePreg ==2 )
	{	 
	
preguntas.innerHTML='<iframe  src="cobranza.php" width=620 height=550 frameborder="0"  marginwidth=2 marginheight=4 align=left></iframe>';
	}
	if(valuePreg ==3 )
	{	 
	
preguntas.innerHTML='<iframe  src="informacion.php" width=620 height=550 frameborder="0"  marginwidth=2 marginheight=4 align=left></iframe>';
	}
	if(valuePreg ==4 )
	{	 
	
preguntas.innerHTML='<iframe  src="serviciotec.php" width=620 height=550 frameborder="0"  marginwidth=2 marginheight=4 align=left></iframe>';
	}
 }
 
 /*function preguntas(pregid)
{
		var mapa = document.getElementById("pregunta");
	mapa.innerHTML = " "; 
	if(pregid==1)
	{
		mostrar.innerHTML='<div id="preguntas">'
		+'<iframe  src="beneficios.php" width=620 height=550 frameborder="0"  marginwidth=2 marginheight=4 align=left></iframe>'
  
			  +'</div>';
	}
	if(pregid==2)
	{
		mostrar.innerHTML='<div id="preguntas">'
		+'<iframe  src="credito.php" width=620 height=550 frameborder="0"  marginwidth=2 marginheight=4 align=left></iframe>'
  
			  +'</div>';
	}
}*/
	</script>
</head>

<body class="wrapper">
<style>
.boton{ width:105px; float:left; background:url(imagenes/preguntas.png) no-repeat top center;
 background-position:30 50;
 }
#beneficio{ background-position:0px -150px}
#beneficio:hover{ background-position:0px -400px; cursor:pointer}
#credito{ background-position:5px -50px}
#credito:hover{ background-position:5px -300px; cursor:pointer}
#cobranzas{ background-position:6px -100px}
#cobranzas:hover{ background-position:6px -350px; cursor:pointer}
#informacion{ background-position:0px -200px}
#informacion:hover{ background-position:0px -450px; cursor:pointer}
#servicio{ background-position:0px 0px}
#servicio:hover{ background-position:0px -250px; cursor:pointer}
.innertube{
	margin-top: 46px;
	margin-left:3px;
	min-height:7%;
}
.botonini
{
	/*margin-top: 136px; */
position: relative;
bottom: -181px;
left: 84px;
;
}

</style>
<div class="botonini">
<img src="imagenes/marcimex_faq.jpg" />
</div>
<div class="men2u" >
	<ul>
    	<li onclick="preguntas('0');" class="boton" id="beneficio">
        <a  ></a>
        </li>
        <li onclick="preguntas('1');"class="boton" id="credito">
        <a  ></a>
        </li>
       <li onclick="preguntas('2');"class="boton" id="cobranzas">
        <a ></a>
         </li>
         <li  onclick="preguntas('3');" class="boton" id="informacion">
        <a  ></a>
        </li>
        <li  onclick="preguntas('4');"class="boton" id="servicio">
        <a  ></a>
        </li><!---->
    
    </ul>
<div class="innertube">
	<div id="preguntas">
		<iframe  src="beneficios.php" width=620 height=350 frameborder="0"  marginwidth=2 marginheight=4 align=left></iframe>
	</div>
</div>
</div>
</body>
</html>