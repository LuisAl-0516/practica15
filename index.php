<!DOCTYPE html>
<html lang="es-mx">
<head>
<meta charset="UTF-8">
<title>CiTIM Grupo XB</title>
<link rel="stylesheet" href="css/problemaStem.css"/>

<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<script src="js/calcularStem.js"></script>
</head>
<body>
<section class="wrapper">
<header>
<h1 class="logo">Uso de la Ciencia, Tecnologia, Ingeniería y Matemáticas para resolver problemas</h1>
</header>
<section id="contenedor">
<section class="problema">
<h2>Problema: Fuerzas en equilibrio</h2>
<p>Descripción:</p>
<p>
    ¿A qué distancia de la Tierra debe estar un cuerpo para que
    sienta un equilibrio entre las fuerzas gravitacionales que
    ejercen sobre ́ el el Sol y la Tierra? La distancia media de Sol a
    la Tierra es de 1·5 ×10E8 km y la masa del Sol es 332 946
    masas terrestres</p>
</section>
<section class="esquemaProblema">
<h2>Esquema</h2>
<!--Buscar o crear una impagen que represente el problema jpg o png-->
<center>
<img class="imgProblema" src="images/esquema.jpeg">
</center>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
<img class="imgProblema" src="images/1.png">
<!--Aqui van las fórmulas a emplear, de preferencia despejar la variable a calcular-->
</section>
<section class="datos">
<h2>Datos:</h2>
<br>
<p>Dt-s= 1.5E8 Km.</p><br>
<p>Ms=332946*Mt</p><br>
<!--A partir del enunciado del problema, ecribir una lista de los datos proporcionados para calcular en las unidades de Sistema Internacional de medidas. Incluir valores de constantes y datos de otras fuentes-->
</section>
<section class="calculos">
<h2>Solución</h2>
<img class="imgProblema" src="images/2.png">
<!--Se sustituyen los valores de los datos en la formula para indicar las operaciones a realizarse. No se procesan, ni se pone el resultado en esta sección-->
<p>
</p>
<!--En el archivo js/calculaStem.js, implementar la función calcular() en JS, para resolver problema, definiendo las variables y obteniendo el resultado de aplicar las formulas y regresar el valor obtenido a la sección de resultado que indique las unidades correspondientes-->
<button onclick="calcula()">Presiona para calcular</button>
</section>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
</section>
</section>
<footer class="pie">
Creative Commons versión 3.0 SciSoft 2024
</footer>
</section>
</body>
</html>