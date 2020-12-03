<?php

class MvcController {

    # llamada a la plantilla 
    #-------------------------------------------------------
    public function plantilla() {
        include "views/template.php";
    }

    # interaccion del usuario
    # ------------------------------------------------------
    public function enlacesPaginasController(){

        if (isset($_GET["action"])){
            $enlacesController = $_GET["action"];
        }

        else{
            $enlacesController = "index";
        };
                
        #la respuesta la va a encontrar en las fc enlacesPaginasModel() q está en la clase EnlacesPaginas de model php
        #luego en el index se incluye un require de este archivo y de model.php para q esten disponibles para toda la aplicacion
        
        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

        include $respuesta; 
    }

}



?>