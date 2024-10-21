<?php
include("configPatientPluse.php");

class childrenAssist
{
    private $ID;
    private $Ward;
    private $Room;
    private $Name;
    private $Guardian;
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

    public function GetGuardian()
    {
        return $this->Guardian;
    }
    public function SetGuardian($guardian)
    {
        $this->Guardian=$guardian;
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
            $query = "INSERT INTO `chilren_assist`(`Ward`,
             `Room`, `Name`, `Guardian`, `Description`) VALUES(?,?,?,?,?)";
               $stmt = $conn->prepare($query);
               $stmt->bindParam(1, $this->Ward, PDO::PARAM_STR);
               $stmt->bindParam(2, $this->Room, PDO::PARAM_STR);
               $stmt->bindParam(3, $this->Name, PDO::PARAM_STR);
               $stmt->bindParam(4, $this->Guardian, PDO::PARAM_STR);
               $stmt->bindParam(5, $this->Description, PDO::PARAM_STR);

               $stmt->execute();
               return $conn->lastInsertId();
        } catch (Exception $e) {
            throw $e;
        }
    }
}
?>