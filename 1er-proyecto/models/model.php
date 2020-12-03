<?php

class EnlacesPaginas {

    public static function enlacesPaginasModel($enlacesModel){

        if($enlacesModel == "nosotros" ||
           $enlacesModel == "servicios" ||
           $enlacesModel == "contactenos" ){
                
            $module = "views/modules/".$enlacesModel.".php"; 
            //concateno todos los enlaces y elige segun la condicion
        }

        else if($enlacesModel == "index"){
            $module = "views/modules/inicio.php"; 
        }

        else{
            $module = "views/modules/inicio.php";
        }

        return $module;

    }
}

?>