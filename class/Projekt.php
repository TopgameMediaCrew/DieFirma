<?php

class Projekt
{
    private $id;
    private $name;
    private $begin;
    private $ende;
    
    function __construct($id, $name, $begin, $ende) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->begin = $begin;
        $this->ende = $ende;
    }
    
    function getId() 
    {
        return $this->id;
    }

    function getName() 
    {
        return $this->name;
    }

    function getBegin() 
    {
        return $this->begin;
    }

    function getEnde() 
    {
        return $this->ende;
    }
    
    function setId($id) 
    {
        $this->id = $id;
    }

    function setName($name) 
    {
        $this->name = $name;
    }

    function setBegin($begin) 
    {
        $this->begin = $begin;
    }

    function setEnde($ende) 
    {
        $this->ende = $ende;
    }

    function berechneKosten()
    {
        
    }
}

?>

