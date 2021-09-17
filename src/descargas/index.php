<?php
  $anio=date("Y");
  $pagina='Descargas';
  require_once('../includes/constant.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pagina.TIT?></title>
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
             <li><a href="../calendario/calendario.php"><i class="fas fa-calendar-alt"></i> &nbsp;Calendario Forestal</a></li>
             <li><a href="index.php"><i class="fas fa-file-download"></i> &nbsp;Descargas</a></li>
            <li><a href="../calendario_lunar/calendario_lunar.php"><i class="fas fa-moon"></i>&nbsp;Calendario Lunar</a></li>
            <li><a href="../index.php#acercade"><i class="fas fa-info-circle"></i> &nbsp;Acerca de</a></li>
           </ul>
         </div>
       </div>
     </nav>
    <div class="padding">
       <div class="container">
       <br>
        <div class="row text-center">
        <div class="col-lg-12 col-md-12 col-xs-12">
            
            <h3><a href="../images/guia-calendario.pdf" download="Guia de usuario - Calendario Forestal.pdf" id="descargarguiainab"><i class="fas fa-file-download"></i>&nbsp; Descargar Gu&iacutea para el uso del calendario Proporcionada por INAB</a></h3>
        </div>
        </div>
        <div class="row">
     <br>
    
            <div class="col-lg-12 col-md-6 col-xs-12">

                

                <table class="table table-hover table-responsive">
                
 
                        <th colspan="2" class="text-center" style="font-size: 20px;">Calendarios Disponibles</th>
                           

                        <tbody>
                            <tr>
                            <th class="text-center" style="font-size: 20px;">Ver</th>
                            <th class="text-center" style="font-size: 20px;">Descargar</th>
                            </tr>
                            <tr>
                                
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index.php?id=<?php echo '2020'?>" style="color:#345C00;" target="_blank"><i class="fas fa-eye"></i>&nbsp;Calendario Forestal 2020</a></td>
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index2.php?id=<?php echo '2020'?>"  style="color:#345C00;"><i class="fas fa-file-download"></i>&nbsp;Descargar Calendario 2020</a></td>
                            </tr>
                            <tr>

                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index.php?id=<?php echo '2021'?>" style="color:#345C00;" target="_blank"><i class="fas fa-eye"></i>&nbsp;Calendario Forestal 2021</a></td>
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index2.php?id=<?php echo '2021'?>"  style="color:#345C00;"><i class="fas fa-file-download"></i>&nbsp;Descargar Calendario 2021</a></td>
                            </tr>
                            <tr>
                                
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index.php?id=<?php echo '2022'?>" style="color:#345C00;" target="_blank"><i class="fas fa-eye"></i>&nbsp;Calendario Forestal 2022</a></td>
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index2.php?id=<?php echo '2022'?>"  style="color:#345C00;"><i class="fas fa-file-download"></i>&nbsp;Descargar Calendario 2022</a></td>
                            </tr>
                            <tr>
                                
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index.php?id=<?php echo '2023'?>" style="color:#345C00;" target="_blank"><i class="fas fa-eye"></i>&nbsp;Calendario Forestal 2023</a></td>
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index2.php?id=<?php echo '2023'?>"  style="color:#345C00;"><i class="fas fa-file-download"></i>&nbsp;Descargar Calendario 2023</a></td>
                            </tr>
                            <tr>
                                
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index.php?id=<?php echo '2024'?>" style="color:#345C00;" target="_blank"><i class="fas fa-eye"></i>&nbsp;Calendario Forestal 2024</a></td>
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index2.php?id=<?php echo '2024'?>"  style="color:#345C00;"><i class="fas fa-file-download"></i>&nbsp;Descargar Calendario 2024</a></td>
                            </tr>
                            <tr>
                                
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index.php?id=<?php echo '2025'?>" style="color:#345C00;" target="_blank"><i class="fas fa-eye"></i>&nbsp;Calendario Forestal 2025</a></td>
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index2.php?id=<?php echo '2025'?>"  style="color:#345C00;"><i class="fas fa-file-download"></i>&nbsp;Descargar Calendario 2025</a></td>
                            </tr>
                            <tr>
                                
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index.php?id=<?php echo '2026'?>" style="color:#345C00;" target="_blank"><i class="fas fa-eye"></i>&nbsp;Calendario Forestal 2026</a></td>
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index2.php?id=<?php echo '2026'?>"  style="color:#345C00;"><i class="fas fa-file-download"></i>&nbsp;Descargar Calendario 2026</a></td>
                            </tr>
                            <tr>
                                
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index.php?id=<?php echo '2027'?>" style="color:#345C00;" target="_blank"><i class="fas fa-eye"></i>&nbsp;Calendario Forestal 2027</a></td>
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index2.php?id=<?php echo '2027'?>"  style="color:#345C00;"><i class="fas fa-file-download"></i>&nbsp;Descargar Calendario 2027</a></td>
                            </tr>
                            <tr>
                                
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index.php?id=<?php echo '2028'?>" style="color:#345C00;" target="_blank"><i class="fas fa-eye"></i>&nbsp;Calendario Forestal 2028</a></td>
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index2.php?id=<?php echo '2028'?>"  style="color:#345C00;"><i class="fas fa-file-download"></i>&nbsp;Descargar Calendario 2028</a></td>
                            </tr>
                            <tr>

                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index.php?id=<?php echo '2029'?>" style="color:#345C00;" target="_blank"><i class="fas fa-eye"></i>&nbsp;Calendario Forestal 2029</a></td>
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index2.php?id=<?php echo '2029'?>"  style="color:#345C00;"><i class="fas fa-file-download"></i>&nbsp;Descargar Calendario 2029</a></td>
                            </tr>
                            <tr>
                                
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index.php?id=<?php echo '2030'?>" style="color:#345C00;" target="_blank"><i class="fas fa-eye"></i>&nbsp;Calendario Forestal 2030</a></td>
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index2.php?id=<?php echo '2030'?>"  style="color:#345C00;"><i class="fas fa-file-download"></i>&nbsp;Descargar Calendario 2030</a></td>
                            </tr>
                            <tr>
                                
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index.php?id=<?php echo '2031'?>" style="color:#345C00;" target="_blank"><i class="fas fa-eye"></i>&nbsp;Calendario Forestal 2031</a></td>
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index2.php?id=<?php echo '2031'?>"  style="color:#345C00;"><i class="fas fa-file-download"></i>&nbsp;Descargar Calendario 2031</a></td>
                            </tr>
                            <tr>
                           
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index.php?id=<?php echo '2032'?>" style="color:#345C00;" target="_blank"><i class="fas fa-eye"></i>&nbsp;Calendario Forestal 2032</a></td>
                                <td class="text-center" style="font-size: 20px;"><a href="../agenda/index2.php?id=<?php echo '2032'?>"  style="color:#345C00;"><i class="fas fa-file-download"></i>&nbsp;Descargar Calendario 2032</a></td>
                            </tr>

                        </tbody>
                </table>
            </div>
        </div>
       </div>
    </div>
    <div id="fixeddescargas"></div>
    <?php include '../includes/footer.php';  ?>
</body>
</html>