<?php
class DatabaseConnection
{
    public $servername = "localhost";
    public $username = "root";
    public $pass = "";
    public $database = "resume_builder_db";
    public $conn;
    
    public function getConnection()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->pass, $this->database);
        
        // Check the connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        
        return $this->conn; // Return the database connection object
    }
}

// Usage example:
$db = new DatabaseConnection();
$con = $db->getConnection();

    
