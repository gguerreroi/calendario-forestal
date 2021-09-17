<?php

$rut='../';


$db='database';
$pagina='Calendario Lunar';
$direc='calendario_lunar.php';
require_once($rut.'includes/constant.php');
require_once($rut.DIRCLA.$db.'.php'); //llamado al archivo de la bd
$_db=new $db();
 $condi=$_POST["condi"];
  
 switch ($condi) {
   case 'selecanio':
     $cmb_anio = $_POST["anio"];
    // $anio=date("Y");
    
     //echo '<h1>Cambio el calendario a '.$cmb_anio.'</h1>';
     echo '<h2 class="text-center"><b>Calendario Lunar '.$cmb_anio.'</b></h2>';
     echo '<table class="table table-responsive table-hover" style="border: #000 solid 1px">
     <thead>
     <tr>
         <th class="text-center">#</th>
         <th class="text-center">Fase Lunar</th>
         <th class="text-center">Imagen</th>
         <th class="text-center">Fecha</th>
         <th class="text-center">Ciclo del Árbol</th>
     <tr>
     </thead>';
     $query_calentar_luna=mysqli_query($_db->conduc01(),"SELECT f.FaseLuna,f.rutaimagen,fe.fecha,cs.cambio,ar.cicloarbol FROM ((((tbFaseLunar f INNER JOIN tbFechasLuna fe on f.idFaseLunar=fe.idFaseLunar)INNER JOIN tbMes m ON m.idMes=fe.idMes )INNER JOIN tbCambioSol cs ON cs.idCambioSol=fe.idCambioSol)INNER JOIN tbArbol ar ON ar.idArbol=cs.idArbol) where fe.anio='$cmb_anio' order by fe.fecha");

     $n=1;
     while($row=mysqli_fetch_row($query_calentar_luna)){
       $date=date_create($row[2]);
       echo '<tr>
            <th class="text-center">'.$n.'</th>
            <th class="text-center">'.$row[0].'</th>
            <th><img src="../'.$row[1].'" class="center-block" style="width:60px;height:60px;border-radius:100%"></th>
            <th class="text-center">'.date_format($date,'d/m/Y').'</th>
            <th class="text-center">'.utf8_encode($row[4]).'</th>
            </tr>';
       $n++;
   }
   echo '</table>';

   break;
 }

?>