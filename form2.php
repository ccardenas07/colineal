<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario</title>
<link href="css/global.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="formulario">

        <form name="form" id="form" method="post" action="formulario.php">

        <div class="lnom">Nombres:</div>

        <div class="nombre"><input type="text" name="nombre" id="minombre" size="10"/></div>

        <div class="apellido"><input type="text" name="apellido" id="miapellido" size="14" /></div>

        <!--<div class="ledad">Edad:</div>

        <div class="edad"><input type="text" name="edad" id="miedad" size="22px" /></div>-->

        <div class="lcel">Celular:</div>

        <div class="celular"><input type="text" name="celular" id="micelular"  size="35"/>

        </div>

        <div class="lemail">E-mail:</div>

        <div class="email"><input type="text" name="email" id="miCampo1"size="35" /></div>

        <div class="lced">C&eacute;dula:</div>

        <div class="cedula"><input type="text" name="cedula" id="micedula"size="35" /></div>

        <div class="lciudad">Ciudad:</div>

        <div class="ciudad"><input type="text" name="ciudad" id="miciudad"size="35" /></div>



        <div class="botonform">

        <input type="hidden" name="grabar" id="grabar"  value="si" />



        <!--<input type="button" id="boton" src="images/btn_enviar.png" width="171px" height="68px" onclick="valida_registro();" border="none"  />-->

        <!--<input type="image" id="boton" src="images/btn_enviar.png" width="171px" height="68px" onclick="valida_registro();" />-->

        <a href="javascript:void(0);" id="boton" onclick="valida_registro();">

        <img src="img/btn_enviar.png" width="104px" height="33px" />

        </a>

        </div>

        <div id="error"></div>

        </form>

    </div>

</body>
</html>