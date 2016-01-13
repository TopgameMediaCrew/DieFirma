<?php

class Ausleihe
{
    private $id;
    private $ausleiher;
    private $auto;
    private $begin;
    private $ende;
    
    function __construct($id, $ausleiher, $auto, $begin, $ende) 
    {
        $this->id = $id;
        $this->ausleiher = $ausleiher;
        $this->auto = $auto;
        $this->begin = $begin;
        $this->ende = $ende;
    }
    
    function getId() 
    {
        return $this->id;
    }

    function getAusleiher() 
    {
        return $this->ausleiher;
    }

    function getAuto() 
    {
        return $this->auto;
    }

    function getBegin() 
    {
        return $this->begin;
    }

    function getEnde() 
    {
        return $this->ende;
    }



}

?>

