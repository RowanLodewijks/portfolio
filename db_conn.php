<?php
class Connect
{
    private $sname = "localhost";
    private $unmae = "u148701p140393_u148701p140393";
    private $password = "5KcSx!4eEEs*|C9tmTQk'f";
    private $db_name = "u148701p140393_u148701p140393";
    // private $sname = "localhost";
    // private $unmae = "root";
    // private $password = "";
    // private $db_name = "rowan_lodewijks";
    public $conn;
    public function __constructor()
    {
        $this->conn = "";
    }
    public function connection()
    {
        $this->conn = mysqli_connect($this->sname, $this->unmae, $this->password, $this->db_name);
        if (!$this->conn) {
            echo "Connection failed!";
            exit();
        }
        return $this->conn;
    }
}