<?php

class Mitarbeiter
{
    private $id;
    private $vorname;
    private $nachname;
    private $geschlecht;
    private $abt_id;
    private $stundenlohn;
    private $v_id;
    
    function __construct($id, $vorname, $nachname, $geschlecht, $abt_id, $stundenlohn, $v_id) 
    {
        $this->id = $id;
        $this->vorname = $vorname;
        $this->nachname = $nachname;
        $this->geschlecht = $geschlecht;
        $this->abt_id = $abt_id;
        $this->stundenlohn = $stundenlohn;
        $this->v_id = $v_id;
    }
    
    function getId() 
    {
        return $this->id;
    }

    function getVorname() 
    {
        return $this->vorname;
    }

    function getNachname() 
    {
        return $this->nachname;
    }

    function getGeschlecht() 
    {
        return $this->geschlecht;
    }

    function getAbteilung() 
    {
        $stmt = $db->prepare("SELECT name FROM abteilung WHERE id=:id");
        $stmt->execute([':id' => $this->abt_id]);
        $abteilung = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $abteilung['name'];
    }

    function getStundenlohn() 
    {
        return $this->monatslohn;
    }

    function getV_Id() 
    {
        return $this->v_id;
    }

    function setId($id) 
    {
        $this->id = $id;
    }

    function setVorname($vorname) 
    {
        $this->vorname = $vorname;
    }

    function setNachname($nachname) 
    {
        $this->nachname = $nachname;
    }

    function setGeschlecht($geschlecht) 
    {
        $this->geschlecht = $geschlecht;
    }

    function setAbt_Id($abt_id) 
    {
        $this->abt_id = $abt_id;
    }

    function setStundenlohn($stundenlohn) 
    {
        $this->stundenlohn = $stundenlohn;
    }

    function setV_Id($v_id) 
    {
        $this->v_id = $v_id;
    }

    function istVorgesetzte()
    {
        $stmt = $db->prepare("SELECT id FROM mitarbeiter WHERE v_id=:id");
        $stmt->execute([':id' => $this->v_id]);
        $untergebene = $stmt->fetchAll(PDO::FETCH_NUM);
        
        if ($untergebene == 0) 
        {
            return false;
        } 
        else
        {
            return true;
        }
    }
    
    function getVorgesetzte()
    {
        $stmt = $db->prepare("SELECT vorname, nachname FROM mitarbeiter WHERE id=:id");
        $stmt->execute([':id' => $this->v_id]);
        $vorgesetzte = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if($vorgesetzte['vorname'] && $vorgesetzte['nachname'])
        {
            return $vorgesetzte['vorname'].' '.$vorgesetzte['nachname'];
        }
        else
        {
            return "Keiner";
        }
    }

}

?>

