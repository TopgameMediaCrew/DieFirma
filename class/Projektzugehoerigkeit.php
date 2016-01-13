<?php

class Projektzugehoerigkeit
{
    private $projekt;
    private $mitarbeiter;
    private $begin;
    private $ende;
    
    function __construct($projekt, $mitarbeiter, $begin, $ende) 
    {
        $this->projekt = $projekt;
        $this->mitarbeiter = $mitarbeiter;
        $this->begin = $begin;
        $this->ende = $ende;
    }
    
    function getProjekt() 
    {
        return $this->projekt;
    }

    function getMitarbeiter() 
    {
        return $this->mitarbeiter;
    }

    function getBegin() 
    {
        return $this->begin;
    }

    function getEnde() 
    {
        return $this->ende;
    }
    
    function setProjekt($projekt) 
    {
        $this->projekt = $projekt;
    }

    function setMitarbeiter($mitarbeiter) 
    {
        $this->mitarbeiter = $mitarbeiter;
    }

    function setBegin($begin) 
    {
        $this->begin = $begin;
    }

    function setEnde($ende) 
    
    {
        $this->ende = $ende;
    }




}

?>

