<?php if(strlen($_GET['s'] >= 3)){ ?>
<h2>Resultados de la busqueda de: <b><u><?= strip_tags($_GET['s']) ?></u></b></h2>

<?php
$t = array("2612a", "435a", "436a", "285a", "505a", "7553a", "278a", "5949a", "7115a", "104", "gpr-22", "gpr-18","gpr-2", "gpr-10","npg-11","fx-10","128","101","S104","105","ml2010","6511a","7551a","5942a","364a","280a","310a","311a","312a","313a","320a","321a","322a","323a","6000a","6001a","6002a","6003a");
$b = strtolower(strip_tags($_GET['s']));
?>
<ul>
<?php
if (in_array($b, $t)) {
	echo "<h3>Toner(s) Encontrado(s)</h3>";
    echo "<li><a href='?t=$b'>Toner Compatible: <b>$b</b></a></li>";
}else{

echo "<h3>Coincidencia(s) Encontrada(s)</h3>";

$matched = preg_grep('~('.$b.')~i', $t);
//print_r($matched);
foreach ($matched as $m) {
	echo "<li><a href='?t=$m'>Toner Compatible: <b>$m</b></a></li>";
}
	
	
}
?>
</ul>
<?php }else{
echo'<br/><div class="alert alert-warning">Disculpe, Toner no encontrado. <br/> <b>Verifique:</b> La palabra a buscar debe ser mayor a (3) Caracteres.</div><br/>'
;} ?>
