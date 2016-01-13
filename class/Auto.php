<?php

class Auto
{
    private $id;
    private $hersteller;
    private $typ;
    private $kennzeichen;
    
    function __construct($id, $hersteller, $typ, $kennzeichen) 
    {
        $this->id = $id;
        $this->hersteller = $hersteller;
        $this->typ = $typ;
        $this->kennzeichen = $kennzeichen;
    }
    
    function getId() 
    {
        return $this->id;
    }

    function getHersteller() 
    {
        return $this->hersteller;
    }

    function getTyp() 
    {
        return $this->typ;
    }

    function getKennzeichen() 
    {
        return $this->kennzeichen;
    }
    
    function setId($id) 
    {
        $this->id = $id;
    }

    function setHersteller($hersteller) 
    {
        $this->hersteller = $hersteller;
    }

    function setTyp($typ) 
    {
        $this->typ = $typ;
    }

    function setKennzeichen($kennzeichen) 
    {
        $this->kennzeichen = $kennzeichen;
    }

}

?>
