<!DOCTYPE html>
<html><body>
<h2>Registro de notas</h2>
<form method="POST">
Nombre: <input name="nombre"><br>
Nota 1: <input name="n1"><br>
Nota 2: <input name="n2"><br>
Nota 3: <input name="n3"><br>
Nota 4: <input name="n4"><br>
<button>Calcular</button>
</form>


<?php
if($_POST){
$notas=[$_POST["n1"],$_POST["n2"],$_POST["n3"],$_POST["n4"]];
$suma=0;
foreach($notas as $nota){$suma+=$nota;}
$promedio=$suma/count($notas);

if($promedio<11)$estado="Desaprobado";
elseif($promedio<=13)$estado="Regular";
elseif($promedio<=17)$estado="Bueno";
else $estado="Excelente";

echo "Alumno: ".$_POST["nombre"]."<br>";
echo "Notas: ".implode(", ",$notas)."<br>";
echo "Promedio: ".number_format($promedio,2)."<br>";
echo "Situación: $estado";
}
?>
</body></html>