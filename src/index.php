<?php
  $anio=date("Y");
  $pagina='Inicio';
  require_once('includes/constant.php');
?>
<!DOCTYPE html>
<html lang="ES-es">
<head>
<meta charset="UTF-8">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png" style="border-radius:100%">
  <title><?php echo $pagina.TIT.' '.$anio?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <?php include 'includes/scripts.php'?>
</head>
<body>
     <?php include 'includes/nav-bar.php'?>   
    <!--Seccion 1-->
     <div id="home">
       <div class="landing-text">
         <h1>Calendario Forestal</h1>
         <h3>Conocimientos ancestrales y pr&aacutecticas tradicionales de los pueblos ind&iacutegenas</h3>
        <a href="calendario/calendario.php" class="btn btn-default btn-lg">Ver el Calendario</a>
        <a href="descargas/index.php" class="btn btn-default btn-lg">Descargar Calendario</a>
        
       </div>
     </div>
    <div class="padding" id="acercade"></div>
     <!--Seccion 2-->
     <div class="padding">
       <div class="container">
       <div class="row">
         <!--Columna 1-->
         <div class="col-sm-6">
           <img src="images/calendario-forestal.jpg" alt="">
         </div>
         <!--Columna 2-->
         <div class="col-sm-6 text-center">
           <h2><b>Descripci&oacuten del Proyecto</b></h2>
           <p class="lead" align="justify" style="font-size:17px">El calendario forestal es un instrumento t&eacutecnico de planificaci&oacuten que apoyar&aacute y promover&aacute el manejo sostenible de los bosques naturales. El proyecta est&aacute enfocado en el cumplimiento de la Ley Forestal, con &eacutenfasis en la reforestaci&oacuten y conservaci&oacuten de los ecosistemas, explic&oacute la instituci&oacuten.</p>
           <p class="lead" align="justify" style="font-size:17px">El proyecto consiste en una aplicaci&oacuten web que requiere el an&aacutelisis, dise&ntildeo, construcci&oacuten, implementaci&oacuten y capacitaci&oacuten de un sistema para visualizar el <b>&quot;Calendario forestal desde los conocimientos ancestrales y practicas tradicionales de los pueblos Ind&iacutegenas&quot;</b> en idioma espa&ntildeol, Q&apos;qechi y K&apos;iche.</p>
          </div>
       </div>
       </div>
     </div>
     <!--Seccion 3-->
 
       <div class="container">
        <h1 class="text-center"><b>Instituciones involucradas</b></h1>
         <div class="row">
          <!--Columna 1-->
          <div class="col-lg-4 col-md-2 col-sm-6 col-xs-12">
           <p> <img src="images/logoinab.png"  alt="imagen del inab" class="img-responsive center-block" style="border-radius: 100%; width:300px;height: 200px;"></p>
            <h4 class="text-center"><b>Instituto nacional de Bosques (INAB)</b></h4>
            <p align="justify" style="font-size:17px">Estamos orgullosos de trabajar para el Sector Forestal de Guatemala desde el a&ntildeo 1996. El INAB es una entidad estatal, aut&oacutenoma, descentralizada, con personalidad jur&iacutedica, patrimonio propio e independencia administrativa, y es el &oacutergano de direcci&oacuten y autoridad competente del Sector P&uacuteblico Agr&iacutecola en materia Forestal.</p>
            <h4 class="text-center"><b>Visi&oacuten:</b></h4>
            <p align="justify" style="font-size:17px">El Instituto Nacional de Bosques es una instituci&oacuten l&iacuteder y modelo en la gesti&oacuten de la pol&iacutetica forestal nacional, reconocida nacional e internacionalmente por su contribuci&oacuten al desarrollo sostenible del sector forestal en Guatemala, propiciando mejora en la econom&iacutea y en la calidad de vida de su poblaci&oacuten, y en la reducci&oacuten de la vulnerabilidad al cambio clim&aacutetico.</p>
            <h4 class="text-center"><b>Misi&oacuten:</b></h4>
            <p align="justify" style="font-size:17px">Ejecutar y promover los instrumentos de pol&iacutetica forestal nacional, facilitando el acceso a los servicios forestales que presta la instituci&oacuten a los actores del sector forestal, mediante el dise&ntildeo e impulso de programas, estrategias y acciones, que generen un mayor desarrollo econ&oacutemico, ambiental y social del pa&iacutes.</p>
          </div>
          <!--Columna 4-->
          <div class="col-lg-4 col-md-2 col-sm-6 col-xs-12">
          <br><br><br>
            <div class="text-center"><img src="images/cintillo-rain.jpg" alt="" class="img-responsive center-block"  style=""></div>
            <br><br><br><br>
            <h4 class="text-center"><b>RainForest Alliance</b></h4>
            <p align="justify" style="font-size:17px">Rainforest Alliance es una organizaci&oacuten internacional sin fines de lucro que trabaja en la intersecci&oacuten de negocios, agricultura y bosques para hacer que los negocios responsables sean la nueva norma. Estamos construyendo una alianza para proteger los bosques, mejorar los medios de vida de los agricultores y las comunidades forestales, promover sus derechos humanos y ayudarlos a mitigar y adaptarse a la crisis clim&aacutetica.</p>
            <h4 class="text-center"><b>Visi&oacuten:</b></h4>
            <p align="justify" style="font-size:17px">Visualizamos un mundo donde las personas y la naturaleza prosperan en armon&iacutea.</p>
            <h4 class="text-center"><b>Misi&oacuten:</b></h4>
            <p align="justify" style="font-size:17px">Estamos creando un mundo m&aacutes sostenible mediante el uso de las fuerzas sociales y del mercado para proteger la naturaleza y mejorar la vida de los agricultores y comunidades forestales. .</p>
          </div>
           <!--Columna 6-->
           <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <img src="images/umg.png" alt="" class="img-responsive center-block" style="border-radius: 100%;width:200px;height: 200px;">
            <h4 class="text-center"><b>Universidad Mariano G&aacutelvez</b></h4>
            <!-- <p align="justify" style="font-size:17px">La Universidad Mariano G&aacutelvez , es una instituci&oacuten de educaci&oacuten superior, privada, independiente, no lucrativa, que funciona de acuerdo con las leyes propias de su naturaleza institucional, que fue aprobada el 29 de Enero de 1966, por el Consejo Supremo Universitario de la Universidad de San Carlos de Guatemala.</p>-->
            <p align="justify" style="font-size:17px">Su nombre hace honor al eximio estadista, pr&oacutecer y preclaro jurisconsulto Doctor Jos&eacute Mariano G&aacutelvez (Jefe del Estado de Guatemala 1831-1838), fundador de la Academia de Estudios y reformador de la educaci&oacuten guatemalteca, quien promovi&oacute importantes innovaciones en todos los &oacuterdenes de la vida del Estado. Se le atribuye el mejoramiento de la instrucci&oacuten p&uacuteblica. Luch&oacute por que la ense&ntildeanza fuera laica, fue fundador de la Biblioteca y Museo Nacional, respet&oacute las leyes y garant&iacuteas individuales, libertad de prensa y emisi&oacuten del pensamiento.</p> 
            <h4 class="text-center"><b>Visi&oacuten:</b></h4>
            <p align="justify" style="font-size:17px">Ser una instituci&oacuten de educaci&oacuten superior altamente competitiva, l&iacuteder en su g&eacutenero, innovadora y creadora de conocimientos cient&iacuteficos y tecnol&oacutegicos, en la que sus educandos alcancen una formaci&oacuten integral, arm&oacutenica y potencien sus aptitudes y capacidades, en un ambiente de libertad y aceptaci&oacuten de los supremos valores del cristianismo. Y que sus egresados, sean capaces de asumir los desaf&iacuteos del mundo contempor&aacuteneo y de una sociedad cambiante, comprometidos con el desarrollo econ&oacutemico, social, pol&iacutetico y cultural del pa&iacutes, en permanente interacci&oacuten con el entorno nacional, con renovada vocaci&oacuten de servicio y esp&iacuteritu de solidaridad.</p>
            <h4 class="text-center"><b>Misi&oacuten:</b></h4>
            <p align="justify" style="font-size:17px">Formar, en niveles de excelencia acad&eacutemica y de acuerdo con las necesidades y demandas de la sociedad, profesionales, investigadores, t&eacutecnicos y docentes cient&iacuteficamente competentes, &eacuteticamente responsables y socialmente abiertos al cambio progresista, mediante el desarrollo integrado de la docencia, la investigaci&oacuten y el servicio a la comunidad, a fin que &eacutesta tenga la oportunidad de participar de los beneficios de la ciencia, la tecnolog&iacutea y la cultura.</p>
          </div>

         </div>
       </div>


     <!--seccion 4-->
     <div id="fixed">

     </div>
<!--Seccion 5-->
     <div class="padding">
       <div class="container">
       <div class="row">
         <!--Columna 1-->
         <div class="col-sm-6 text-center">
           <h2><b>Ciclos, Cambios de Sol, &Eacutepocas, Tiempos y Fases Lunares</b></h2><br>
           <p class="lead" align="justify" style="font-size:17px">El calendario forestal est&aacute construido desde la visi&oacuten de los Pueblos ind&iacutegenas de Guatemala,  donde la vida es observada desde lo c&iacuteclico, tomando en cuenta la observaci&oacuten del universo y la relaci&oacuten que tiene con los seres vivos en el planeta tierra. </p>
           <p class="lead" align="justify" style="font-size:17px">A partir de la observaci&oacuten del universo los abuelos mayas construyeron calendarios perfectos, planificaron, construyeron y orientaron la vida en la tierra, prueba de ello: sus estructuras arquitect&oacutenicas, sus centros de observaci&oacuten del universo, determinando los cambios del sol: los solsticios y equinoccios, hasta interpretar la vida de los &aacuterboles en sus ciclos femenino y masculino. </p>
           <p class="lead" align="justify" style="font-size:17px">De la observaci&oacuten y experimentaci&oacuten, dividieron el tiempo en lluvioso y seco: viento, fr&iacuteo y calor, permitiendo precisar los calendarios, por la necesidad de producir sus alimentos, conocer los fen&oacutemenos naturales y los efectos de la luna en los seres vivos en la tierra.</p>	  
	         <p class="lead" align="justify" style="font-size:17px">Interpretar las fases lunares fue otro aporte de los abuelos mayas, complementado as&iacute los tiempos y los cambios del sol, cuando los nutrientes suben y bajan en las plantas y &aacuterboles, determinando, cual es el momento propicio para aprovechar un &aacuterbol extraer le&ntildea del bosque, entre otras actividades. </p>
	</div>
         <!--Columna 2-->
         <div class="col-sm-6 text-center">
          <img src="images/fasesluna/creciente.jpg" alt="" class="img-responsive center-block" style="border-radius:100%;width:150px;height:150px;">
          <h4>Cuarto Creciente</h4> 
          <br>
          <img src="images/fasesluna/llena.jpeg" alt="" class="img-responsive center-block" style="border-radius:100%;width:150px;height:150px;">
          <h4>Luna Llena</h4> 
          <br>
          <img src="images/fasesluna/menguante.jpeg" alt="" class="img-responsive center-block" style="border-radius:100%;width:150px;height:150px;">
          <h4>Cuarto Menguante</h4> 
          <br>
          <img src="images/fasesluna/nueva.jpeg" alt="" class="img-responsive center-block" style="border-radius:100%;width:150px;height:150px;">
          <h4>Luna Nueva</h4> 
        </div>
       </div>
       </div>
     </div>
<div id="fixed2"></div>
<?php
include 'includes/footer.php';
?>
</body>
</html>
