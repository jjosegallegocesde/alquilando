<?php   

include('BaseDatos.php');

$transaccionBaseDatos = new BaseDatos();
$query="select * from categorias";
$resultado=$transaccionBaseDatos->consultarEnBaseDatos($query);
print_r($resultado);


?>