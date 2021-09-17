<?php
    $rut='../';
    $db='database';
    $cl1='calendario_lunar';
    $dir1='calendario_lunar/';

    function calendario_lunar($rut){
        global $db,$cl1;

        require_once($rut.DIRCLA.$db.'.php');
        require_once($rut.DIRCLA.$cl1.'.php');

        $_db=new $db();
        $_cl1=new $cl1();

        $inf = $_cl1->listarcalendar($_db->conduc01());
        return $inf;
    }
?>