<?php
    class calendario_lunar{
        function listarcalendar($conexion){
            $anio='2021';
            //$anio=date("Y");
            $inf=null;$n=1;$cant=5;
            $inf .='<thead>';
                $inf .='<tr>';
                    $inf .='<th class="text-center">#</th>';
                    $inf .='<th class="text-center">Fase Lunar</th>';
                    $inf .='<th class="text-center">Imagen</th>';
                    $inf .='<th class="text-center">Fecha</th>';
                    $inf .='<th class="text-center">Ciclo del Árbol</th>';
                $inf .='<tr>';
            $inf .='</thead>';
            $inf .='<tbody>';
            $query_calentar_luna="SELECT f.FaseLuna,f.rutaimagen,fe.fecha,cs.cambio,ar.cicloarbol FROM ((((tbFaseLunar f INNER JOIN tbFechasLuna fe on f.idFaseLunar=fe.idFaseLunar)INNER JOIN tbMes m ON m.idMes=fe.idMes )INNER JOIN tbCambioSol cs ON cs.idCambioSol=fe.idCambioSol)INNER JOIN tbArbol ar ON ar.idArbol=cs.idArbol) where fe.anio='$anio' order by fe.fecha";
            $res_calendar=mysqli_query($conexion,$query_calentar_luna) OR $_SESSION['Mysqli_error']=(mysqli_error($conexion));
            if($res_calendar){
                if($res_calendar->num_rows>0){  
                        while($row=mysqli_fetch_row($res_calendar)){
                            $date=date_create($row[2]);
                            $inf .='<tr>';
                                $inf .='<th class="text-center">'.$n.'</th>';
                                $inf .='<th class="text-center">'.$row[0].'</th>';
                                $inf .='<th><img src="../'.$row[1].'" class="center-block" style="width:60px;height:60px;border-radius:100%"></th>';
                                $inf .='<th class="text-center">'.date_format($date,'d/m/Y').'</th>';
                                $inf .='<th class="text-center">'.utf8_encode($row[4]).'</th>';
                            $inf .='</tr>';
                            $n++;
                        }
                        mysqli_free_result($res_calendar);
                }else{
                    $inf.='<tr><td colspan="'.$cant.'"><div class="alert alert-warning">No se encontraron registros</div></td></tr>';
                }
            }else{
                $inf.='<tr><td colspan="'.$cant.'"><div class="alert alert-danger">Error: '.$_SESSION['Mysqli_Error'].'</div></td></tr>';
            }
            $inf .= '</tbody>';
            mysqli_close($conexion);
            return $inf;
        }
    }

?>