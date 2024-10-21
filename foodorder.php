<?php
include("configPatientPluse.php");

class Foodorder
{
    private $ID;
    private $Meals;
    private $Food;
    private $Ward;
    private $Room;
    private $Order;
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

    public function GetMeals()
    {
        return $this->Meals;
    }
    public function SetMeals($meals)
    {
        $this->Meals=$meals;
    }

    public function GetFood()
    {
        return $this->Food;
    }
    public function SetFood($food)
    {
        $this->Food=$food;
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

    public function GetOrder()
    {
        return $this->Order;
    }
    public function SetOrder($order)
    {
        $this->Order=$order;
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
            $query = "INSERT INTO `food_order`(`Meals`, `Food`,
             `Ward`, `Room`,`Order`, `Name`, `Description`) VALUES(?,?,?,?,?,?,?)";
               $stmt = $conn->prepare($query);
               $stmt->bindParam(1, $this->Meals, PDO::PARAM_STR);
               $stmt->bindParam(2, $this->Food, PDO::PARAM_STR);
               $stmt->bindParam(3, $this->Ward, PDO::PARAM_STR);
               $stmt->bindParam(4, $this->Room, PDO::PARAM_STR);
               $stmt->bindParam(5, $this->Order, PDO::PARAM_STR);
               $stmt->bindParam(6, $this->Name, PDO::PARAM_STR);
               $stmt->bindParam(7, $this->Description, PDO::PARAM_STR);

               $stmt->execute();
               return $conn->lastInsertId();
        } catch (Exception $e) {
            throw $e; 
        }
    }
}
?>