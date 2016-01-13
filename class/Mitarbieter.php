<?php

class Mitarbeiter implements Aenderbar
{
    private $id;
    private $vorname;
    private $nachname;
    private $geschlecht;
    private $geburtsdatum;
    private $abteilung_id;
    private $stundenlohn;
    private $vorgesetzter_id;
    
    function __construct($vorname, $nachname, $geschlecht, $geburtsdatum, $abteilung_id, $stundenlohn, $vorgesetzter_id, $id = 0) 
    {
        $this->id = $id;
        $this->vorname = $vorname;
        $this->nachname = $nachname;
        $this->geschlecht = $geschlecht;
        $this->geburtsdatum = $geburtsdatum;
        $this->abteiulng_id = $abteilung_id;
        $this->stundenlohn = $stundenlohn;
        $this->v_id = $vorgesetzter_id;
    }
    
    public static function delete($id) 
    {
        $stmt = $db->prepare("DELETE * FROM mitarbeiter WHERE id=:id");
        $stmt->execute([':id' => $id]);
        
        return "Der Mitarbeiter wurde gelöscht";
    }

    public static function getById($id) 
    {
        $stmt = $db->prepare("SELECT * FROM mitarbeiter WHERE id=:id");
        $stmt->execute([':id' => $id]);
        $mitarbeiter = $stmt->fetchAll(PDO::FETCH_OBJ);
        
        return $mitarbeiter;
    }

    public static function insert($m)
    {
        $stmt = $db->prepare("INSERT INTO mitarbeiter(id, vorname, nachname, geschlecht, geburtsdatum, abteilung_id, stundenlohn, vorgesetzter_id) VALUES(:id, :vorname, :nachname, :geschlecht, :geburtsdatum, :abteilung_id, :stundenlohn, :vorgesetzter_id)");
        if($stmt->execute([':id' => $m->getId(), ':vorname' => $m->getVorname(), ':nachname' => $m->getNachname(), ':geschlecht' => $m->getGeschlecht(), ':geburtsdatum' => $m->getGeburtsdatum(), ':abtelung_id' => $m->getAbteilung_id(), ':stundenlohn' => $m->getStundenlohn(), ':vorgesetzter_id' => $m->getVorgesetzter_id()]))
        {
            echo "Der neue Mitarbeiter wurde hinzugefügt.";
        }
    }

    public static function update($object) 
    {
        $stmt = $db->prepare("UPDATE mitarbeiter SET vorname=:vorname, nachname=:nachname, geschlecht=:geschlecht, geburtsdatum=:geburtsdatum, abteilung_id=:abteilung_id, stundenlohn=:stundenlohn, vorgesetzter_id=:vorgesetzter_id WHERE id=:id");
        if($stmt->execute([':id' => $object->getId(), ':vorname' => $object->getVorname(), ':nachname' => $object->getNachname(), ':geschlecht' => $object->getGeschlecht(), ':geburtsdatum' => $object->getGeburtsdatum(), ':abtelung_id' => $object->getAbteilung_id(), ':stundenlohn' => $object->getStundenlohn(), ':vorgesetzter_id' => $object->getVorgesetzter_id()]))
        {
            echo "Die Daten wurden geändert.";
        }
    }
    
    public static function getAll()
    {
        $stmt = $db->query("SELECT * FROM mitarbeiter");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
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

    function getGeburtsdatum() 
    {
        return $this->geburtsdatum;
    }

    function getAbteilung_id() 
    {
        return $this->abteilung_id;
    }

    function getStundenlohn() 
    {
        return $this->stundenlohn;
    }

    function getVorgesetzter_id() 
    {
        return $this->vorgesetzter_id;
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

    function setGeburtsdatum($geburtsdatum) 
    {
        $this->geburtsdatum = $geburtsdatum;
    }

    function setAbteilung_id($abteilung_id) 
    {
        $this->abteilung_id = $abteilung_id;
    }

    function setStundenlohn($stundenlohn) 
    {
        $this->stundenlohn = $stundenlohn;
    }

    function setVorgesetzter_id($vorgesetzter_id) 
    {
        $this->vorgesetzter_id = $vorgesetzter_id;
    }



}

?>

