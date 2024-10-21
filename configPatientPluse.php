<?php
class ConfigDB
{
    public static function GetConnection()
    {
        try
        {
            $dns="mysql:dbname=patientpulse";
            $user="root";
            $pw="";
            $conn=new PDO($dns,$user,$pw);
            return $conn;
        }
        catch(Exception $e)
        {
            throw $e;
        }
    }
}
?>