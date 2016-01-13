<?php

class Abteilung
{
    private $id;
    private $name;
    private $ausleiher;
    private $leiter;
    
    function __construct($id, $name, $ausleiher, $leiter) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->ausleiher = $ausleiher;
        $this->leiter = $leiter;
    }
    
    function getId() 
    {
        return $this->id;
    }
    
    function getName() 
    {
        return $this->name;
    }

    function getAusleiher() 
    {
        return $this->ausleiher;
    }

    function getLeiter() 
    {
        return $this->leiter;
    }
    
    function setId($name) 
    {
        $this->id = $name;
    }

    function setName($name) 
    {
        $this->name = $name;
    }

    function setAusleiher($ausleiher) 
    {
        $this->ausleiher = $ausleiher;
    }

    function setLeiter($leiter) 
    {
        $this->leiter = $leiter;
    }



}

?>

