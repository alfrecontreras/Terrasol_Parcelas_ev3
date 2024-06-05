<?php

class Conexion
{

    private $connection;
    private $host;
    private $username;
    private $password;
    private $db;
    private $port;
    private $server;

    public function __construct()
    {
        $this->server = $_SERVER['HTTP_HOST'];
        $this->connection = null;
        $this->port = 3306;
        $this->db = "Terrasol_Parcelas";
        $this->host = "terrasol-parcelas";

        if ($this->server == 'terrasol-parcelas') {
            $this->username = 'Terrasol_Parcela@localhost';
            $this->password = 'user123';
        }
    }

    public function getConnection()
    {
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->db, $this->port);
        mysqli_set_charset($this->connection, "utf8");
        if (!$this->connection) {
            return mysqli_connect_errno();
        }
        return $this->connection;
    }

    public function closeConnection()
    {
        mysqli_close($this->connection);
    }
}
//Tokens
$_token_get = 'Bearer get_Terrasol';
$_token_post = 'Bearer post_Terrasol';
$_token_put = 'Bearer put_Terrasol';
$_token_patch = 'Bearer patch_Terrasol';
$_token_delete = 'Bearer delete_Terrasol';