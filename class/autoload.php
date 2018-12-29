<?php

    function carregaClasses( $NomeDaClasse )
    {
        require_once "class/".$NomeDaClasse.".php";
    }

    spl_autoload_register( "carregaClasses" );