<?php
include("configPatientPluse.php");

class Patient
{
    private $ID;
    private $Ward;
    private $Room;
    private $Name;
    private $Telephone;
    private $Medical;
   
    public function GetID()
    {
        return $this->ID;
    }
    public function SetId($id)
    {
        $this->ID=$id;
    }

    public function GetWard()
    {
        return $this->Ward;
    }
    public function SetWard($ward)
    {
        $this->Ward=$ward;
    }

    public function GetRoom()
    {
        return $this->Room;
    }
    public function SetRoom($room)
    {
        $this->Room=$room;
    }

    public function GetName()
    {
        return $this->Name;
    }
    public function SetName($name)
    {
        $this->Name=$name;
    }

    public function GetTelephone()
    {
        return $this->Telephone;
    }
    public function SetTelephone($telephone)
    {
        $this->Telephone=$telephone;
    }

    public function GetMedical()
    {
        return $this->Medical;
    }
    public function SetMedical($medical)
    {
        $this->Medical=$medical;
    }

    public function Add()
    {
        try {
            $conn = ConfigDB::GetConnection();
    
            $query = "INSERT INTO medical_assist (Ward, Room, Name, Telephone, Medical) 
                      VALUES (?, ?, ?, ?, ?)";
    
            $stmt = $conn->prepare($query);
    
            $stmt->bindParam(1, $this->Ward, PDO::PARAM_STR);
            $stmt->bindParam(2, $this->Room, PDO::PARAM_STR);
            $stmt->bindParam(3, $this->Name, PDO::PARAM_STR);
            $stmt->bindParam(4, $this->Telephone, PDO::PARAM_STR);
            $stmt->bindParam(5, $this->Medical, PDO::PARAM_STR);
                $stmt->execute();
    
            return $conn->lastInsertId();
        } catch (Exception $e) {
            throw $e; 
        }
    }
    
}
?>