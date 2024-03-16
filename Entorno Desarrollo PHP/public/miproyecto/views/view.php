<?php

//include_once('paginaadmin.php');
class View {
    public static function show ($viewname, $data=null){
        include("$viewname.php");
    }
}

?>