<?php

require_once 'dompdf/autoload.inc.php';
$anio_select=$_GET["id"];
$calendario='calendario'.$anio_select;

use Dompdf\Dompdf;

$document = new Dompdf();
//$dompdf->loadHtml('<h1> HOLA  </h1>');
$page = file_get_contents("calendarios/".$calendario.".html");
$document->loadHtml($page);
$document->setPaper('A3','landscape');
//$document->setPaper('A4','portrait');
$document->render();
$document->stream('Calendario-forestal-'.$anio_select,array('Attachment'=>1));
?>