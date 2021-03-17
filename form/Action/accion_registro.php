<?php 
$rut='../';
$db='db';
$cl1='registro' ;
$dir1='registros/';
$dir2='registros/Detalle_registro.php?pid=';
 // de claracion de funciones.
    function index($rut){
       global $data, $cl1;
       require_once($rut.DIRAMOR.$db.'.php');
       require_once($rut.DIRAMOR.$cl1.'.php');
       $_db= new $db();
       $_cl1= new $cl1();

       $inf=$_cl1->listar($_db->conect());
       return $inf;
    }
 ?>