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
  Un panel fotovoltaico entrega una potencia util de 75000W. Suponiendo que la densidad de radiación sea de 1000W/m² y el rendimiento del panel sea 
del 50% calcula la superficie del panel</p>
</section>
<section class="esquemaProblema">
<h2>Esquema</h2>
<!--Buscar o crear una impagen que represente el problema jpg o png-->
<center>
<img class="imgProblema" src="images/panel.jpg">
</center>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
<h3>n= P util/ P real</h3>
<h3>P = Q / t = (K*S*t)/t</h3>
<h3>S = P / K</h3>
<!--Aqui van las fórmulas a emplear, de preferencia despejar la variable a calcular-->
</section>
<section class="datos">
    <h2>Datos:</h2>
    <ul>
      <li><strong>P util:</strong> 75000 W</li>
      <li><strong>n:</strong> 0.5</li>
      <li><strong>P real:</strong> ¿?</li>
      
      <br>
      <li><strong>K:</strong> 1000 w/m²</li>
      <li><strong>S:</strong> ¿?</li>
      
    </ul>
  </section>
<section class="calculos">
<?php
function calcularResultados() {
    // Datos conocidos
    $n = 0.5; //rendimiento
    $putil = 75000; //potencia util
    $preal = 0; //
    $k = 1000; // densidad de radiacion w/m2
    $preal =0; //preal
    $s=0;//area
    
    $preal=$putil/$n;//calculamos preal
    $s=$preal/$k;//calculamos la superficie
    
    // Cálculo de la temperatura final
    

    // Mostrar el resultado
    return $s;
}
?>
<h2>Solución</h2>
<img class="solu" src="images/solu.jpeg">
<form method="post">
                <button type="submit" name="calcular">Presiona para calcular</button>
            </form>
</section>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA">
<?php
print"<h1>La superficie es de:".calcularResultados()."m²</h1>"
?>
</div>
</section>
</section>
<footer class="pie">
Creative Commons versión 3.0 SciSoft 2024
</footer>
</section>
</body>
</html>
