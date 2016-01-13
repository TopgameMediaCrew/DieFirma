<?php

class Ausleihe implements Aenderbar, Zeitmessbar
{
    private $id;
    private $auto_id;
    private $mitarbeiter_id;
    private $von;
    private $bis;
    
    function __construct($id, $auto_id, $mitarbeiter_id, $von, $bis) 
    {
        $this->id = $id;
        $this->auto_id = $auto_id;
        $this->mitarbeiter_id = $mitarbeiter_id;
        $this->von = $von;
        $this->bis = $bis;
    }

    public static function delete($id) 
    {
        $stmt = $db->prepare("DELETE * FROM ausleihe WHERE id=:id");
        $stmt->execute([':id' => $id]);
        
        return "Der Eintrag wurde gelöscht";
    }

    public static function getById($id) 
    {
        $stmt = $db->prepare("DELETE * FROM ausleihe WHERE id=:id");
        $stmt->execute([':id' => $id]);
        $ausleihe = $stmt->fetchAll(PDO::FETCH_OBJ);
        
        return $ausleihe;
    }

    public static function insert($m) 
    {
        $stmt = $db->prepare("INSERT INTO ausleihe(id, auto_id, mitarbeiter_id, von, bis) VALUES(:id, :auto_id, :mitarbeiter_id, :von, :bis)");
        if($stmt->execute([':id' => $m->getId(), ':auto_id' => $m->getAuto_id(), ':mitarbeiter_id' => $m->getMitarbeiter_id(), ':von' => $m->getVon(), ':bis' => $m->getBis()]))
        {
            echo "Der neue Eintrag wurde hinzugefügt.";
        }
    }

    public static function update($object) 
    {
        $stmt = $db->prepare("UPDATE ausleihe SET auto_id=:auto_id, mitarbeiter_id=:mitarbeiter_id, von=:von, bis=:bis WHERE id=:id");
        if($stmt->execute([':id' => $object->getId(), ':auto_id' => $object->getAuto_id(), ':mitarbeiter_id' => $object->getMitarbeiter_id(), ':von' => $object->getVon(), ':bis' => $object->getBis()]))
        {
            echo "Die Daten wurden geändert.";
        }
    }
    
    public static function getAll()
    {
        $stmt = $db->query("SELECT * FROM ausleihe");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public function getDauer() 
    {
        
    }

    public static function getAktuelleEintraege() 
    {
        
    }
    
    function getId() 
    {
        return $this->id;
    }

    function getAuto_id() 
    {
        return $this->auto_id;
    }

    function getMitarbeiter_id() 
    {
        return $this->mitarbeiter_id;
    }

    function getVon() 
    {
        return $this->von;
    }

    function getBis() 
    {
        return $this->bis;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setAuto_id($auto_id) 
    {
        $this->auto_id = $auto_id;
    }

    function setMitarbeiter_id($mitarbeiter_id) 
    {
        $this->mitarbeiter_id = $mitarbeiter_id;
    }

    function setVon($von) 
    {
        $this->von = $von;
    }

    function setBis($bis) 
    {
        $this->bis = $bis;
    }



}

?>

