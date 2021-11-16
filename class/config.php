<?php
class config
{
    private $user="Sumang";
    private $pass="";
    public $pdo = null;
    
    public function con()
    {
        try 
        {
            $this->pdo = new PDO('mysql:host=127.0.0.1;dbname=todoappp',$this->user,$this->pass);    
        } 
        catch (\Exception $e)
        {
            die($e->getMessage());
        }
        return $this->pdo;
    }
}

?>