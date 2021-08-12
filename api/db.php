<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE");

class db{
    // Properties (Inisiasi database tujuan)
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbname = 'testcovid19';

    // Connect (connecting to the database tujuan yg di tulis di atas)
    public function connect(){
        $mysql_connect_str = "mysql:host=$this->host;dbname=$this->dbname";
        $dbConnection = new PDO($mysql_connect_str, $this->user, $this->password);
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbConnection;
    }
}