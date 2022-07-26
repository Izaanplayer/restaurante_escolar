<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>I-E-P-S</title>
    <link rel="icon" type="image/png" href="images/logo.png" />
    <link rel="stylesheet" href="./css/master.css">
    <script src="./css/jquery-3.3.1.js.descarga"></script>
    <script src="./css/t.min.js.descarga"></script>
    <meta http-equiv="refresh" content="11;URL=usuarios.php" />
</head>
<body>
<!--MENSAJE-->
<pre id="main" style="position: relative; overflow: hidden; visibility: visible;"><span class="t-container" style="top:auto;bottom:auto;">Restaurante Escolar<ins><span id="pow-txt" style="display: none;">---[I.E.P.S!]</span></ins>
<span id="tagline">Hecho por la especialidad de sistemas creado por el colegio<br>Promoción Social.<ins data-ins="1.5"></ins><br>Más información -&gt; <a target="_blank" href="http://promosena2016.com/">I.E.P.S</a> &lt;-<br>Ten un buen día :).</span><del data-del="" data-ins="0.25"></del><del id="pow-trigger" data-del="" data-ins="0.25"></del> \\
​</span><span class="t-caret" style="visibility: hidden;"><span style="color:hotpink;">•</span></span>​</pre>

    <script>
    
    $('#main').t({
 beep:true,
 caret:'<span style="color:hotpink;">•</span>',
 typing:function(elm,chr){

   if(chr.match(/\-trigger/))
     $('#pow-txt').show().delay(1000).fadeOut(0);
  
 }
});
    
    </script>
</body>
</html>