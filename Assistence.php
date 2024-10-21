<?php
include("configPatientPluse.php");

class Assistence
{
    private $ID;
    private $Ward;
    private $Room;
    private $Name;
    private $Description;

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

    public function GetDescription()
    {
        return $this->Description;
    }
    public function SetDescription($description)
    {
        $this->Description=$description;
    }

    public function Add()
    {
        try {
            
            $conn = ConfigDB::GetConnection();
            $query = "INSERT INTO `other_asist`(`Ward`, `Room`,
             `Name`, `Description`) VALUES(?,?,?,?)";
               $stmt = $conn->prepare($query);
               $stmt->bindParam(1, $this->Ward, PDO::PARAM_STR);
               $stmt->bindParam(2, $this->Room, PDO::PARAM_STR);
               $stmt->bindParam(3, $this->Name, PDO::PARAM_STR);
               $stmt->bindParam(4, $this->Description, PDO::PARAM_STR);

               $stmt->execute();
               return $conn->lastInsertId();
        } catch (Exception $e) {
            throw $e;
        }
    }
}
?>