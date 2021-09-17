<?php
  session_start();
  $rut='../';
  $anio=date("Y");
  $pagina='Calendario Forestal';
  $direc='calendario.php';
  $db='database';
  require_once($rut.'includes/constant.php');

  require_once($rut.DIRCLA.$db.'.php');
  $_db=new $db();
?>
<!DOCTYPE html>
<html lang="ES-es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png" style="border-radius:100%">
    <title><?php echo $pagina.' '.$anio.TIT?></title>
<?php include '../includes/scripts_calendar.php'?>
<script src="../js/es.js"></script>
<link rel="stylesheet" href="../js/fullcalendar.min.css">
<link rel="stylesheet" href="../calendar_style.css">


</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
       <div class="container-fluid">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="#"><i class="fas fa-tree" style="color:#345C00; width:35px; height:35px;"></i></a>
         </div>
         <div class="collapse navbar-collapse" id="navbar-collapse-main">
           <ul class="nav navbar-nav navbar-right">
             <li><a class="active" href="../index.php"><i class="fas fa-home"></i>&nbsp;Inicio</a></li>
             <li><a href="calendario.php"><i class="fas fa-calendar-alt"></i> &nbsp;Calendario Forestal</a></li>
             <li><a href="../descargas/index.php"><i class="fas fa-file-download"></i> &nbsp;Descargas</a></li>
            <li><a href="../calendario_lunar/calendario_lunar.php"><i class="fas fa-moon"></i>&nbsp;Calendario Lunar</a></li>
            <li><a href="../index.php#acercade"><i class="fas fa-info-circle"></i> &nbsp;Acerca de</a></li>
           </ul>
         </div>
       </div>
     </nav>
     <div class="padding">
       <div class="container">
        <br>
        <h1 class="text-center"><b>Calendario Forestal</b></h1>
        <hr>
        <h5 class="text-center">* El calendario muestra las actividades 2 d&iacuteas antes y dos despu&eacutes del d&iacutea &oacuteptimo</h5>
        <hr> 
        <div class="row">
         
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="CalendarioWeb"></div>
         </div><br>
         <div class="row text-center">
             <hr>
             <div class="col-lg-12 col-md-6 col-xs-12">
                 <h3>Leyenda:</h3>
                 <hr>
                 <table class="table" style="background-color:white;">
                     <tr>
                         <th class="text-center">Actividad</th>
                         <th class="text-center">Color Gu&iacutea</th>
                     </tr>
                      <tr>
                          <td>Actividades Primarias</td>
                          <td style="background-color:#5F9A4F;color:white"></td>
                      </tr>
                      <tr>
                          <td>A&ntildeo 1</td>
                          <td style="background-color:#E6AE1C;color:white"></td>
                      </tr>
                      <tr>
                          <td>A&ntildeo 2</td>
                          <td style="background-color:#445C8E;color:white"></td>
                      </tr>
                      <tr>
                          <td>Culturales y de Ciclo</td>
                          <td style="background-color:#FF3F2F;color:white"></td>
                      </tr>
                      <tr>
                          <td>Actividades Silviculturales</td>
                          <td style="background-color:#76B0B8;color:white"></td>
                      </tr>
                      <tr>
                          <td>Aprovechamiento</td>
                          <td style="background-color:#F76300;color:white"></td>
                      </tr>
                      <tr>
                          <td>Can&iacutecula</td>
                          <td style="background-color:#BF63DF;color:white"></td>
                      </tr>  
                 </table>
             </div>
         </div>
        </div>
       </div>
     </div>  
      
    <?php                                           //0             1         2             3           4       5         6               7       8        9        10        11             12             13
     $query_evento=mysqli_query($_db->conduc01(),"SELECT ap.Nombre_Padre,ap.Color,ah.actividad,ah.descripcion,m.mes,fa.FaseLuna,fa.rutaimagen,fe.fecha,e.epoca,t.tiempo,cs.cambio,cu.cuatrimestre,ar.cicloarbol,ap.idActividadesPadre FROM ((((((((((tbHijo h INNER JOIN  tbActividadesPadre ap on ap.idActividadesPadre=h.idActividadesPadre)inner join tbActividades ah ON ah.idActividades=h.idActividades)INNER JOIN tbMes m ON m.idMes=h.idMes)INNER JOIN tbFaseLunar fa ON fa.idFaseLunar=h.idFasesLunar)INNER JOIN tbFechasLuna fe ON (fe.idFaseLunar=fa.idFaseLunar and fe.idMes=m.idMes))inner join tbEpoca e ON e.idEpoca=m.idEpoca)INNER JOIN tbTiempo t ON t.idTiempo=m.idTiempo)INNER JOIN tbCambioSol cs ON cs.idCambioSol=fe.idCambioSol)INNER JOIN tbCuatrimestre cu ON cu.idCuatrimestre=m.idCuatrimestre)INNER JOIN tbArbol ar ON ar.idArbol=cs.idArbol) order by ap.idActividadesPadre asc");  
     $salto = chr(13).chr(10);
    ?>
      <script>
        $(document).ready(function(){
            $('#CalendarioWeb').fullCalendar({
                themeSystem: 'bootstrap3',
                 defaultView:'month',
                header:{
                    //poner mas info en los botones del header
                    left:'today,prev,next',
                    center:'title',
                    right:'year,month, basicWeek, listMonth'
                },
               
                events:[
        <?php while($datoos=mysqli_fetch_row($query_evento)){?>
        <?php $date=date_create($datoos[7]);
         $menosTresDias = date ('Y-m-d', strtotime ('- 2 day', strtotime($datoos[7])));
         $masTresDias = date ('Y-m-d', strtotime ('+ 3 day', strtotime($datoos[7])));

         $INI=date_create($menosTresDias);
         $FINA=date_create($masTresDias);
         ?>
                    {
                        id:"<?php echo $datoos[13]?>",
                        title:"<?php echo ($datoos[2]);?>",
                        start:"<?php echo  $menosTresDias?>",
                        end:"<?php echo $masTresDias?>",
                        descripcion:"<?php echo (("<div class='text-center'><img src='../$datoos[6]' style='width:100px;height:100px;border-radius:100%'></div><br> <b>Fase Lunar: </b>".$datoos[5]."<br><br><b>Descripci"."&oacute"."n: </b>".$datoos[3]."<br><br><b>Fecha de Inicio: </b>".date_format($INI,'d/m/Y')."<br><br><b>Fecha Optima: </b>".date_format($date,'d/m/Y')."<br><br><b>Fecha Final:</b>".date_format($FINA,'d/m/Y')." </b><br><br><b>Cambio de Sol: </b>".$datoos[10]."<br><br><b>Ciclo del &Aacuterbol: </b>".$datoos[12]."<br><br><b>Tiempo: </b>".$datoos[9]."<br><br><b>Epoca: </b>".$datoos[8]))?>",
                        color:"<?php echo $datoos[1]?>", 
                        textColor:"#fff"

                    },
        <?php } ?> 
                ],
                eventClick:function(calEvent, jsEvent, view){
                    $('#exampleModalLabel').html(calEvent.title);
                    $('#descripcion').html(calEvent.descripcion);
                    $("#exampleModal").modal();
                }
        });
       });
   </script>

<div class="modal fade" id="exampleModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size:20px;"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="contenedor-inputs">
          
          <div id="descripcion" style="font-size:20px;"></div>
         
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div> 
<div id="fixed45"></div>

     <?php include '../includes/footer.php';  ?>
</body>
</html>