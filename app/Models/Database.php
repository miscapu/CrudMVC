<?php

namespace App\Models;

use \PDO;
use \PDOException;

class Database{

    /**
     * Database data connection
     */
    const HOST      =   'localhost';
    const DBUSER    =   'root';
    const DBPASS    =   'root';
    const DBNAME    =   'wdev1';

    /**
     * Table for manipulate
     * @var string $table
     */
    private $table;

    /**
     * Instance PDO coonnection
     * @var PDO $conn
     */
    private $conn;

    /**
     * Database constructor.
     * @param null $table
     */
    public function __construct( $table = null )
    {
        $this->table    =   $table;
        $this->setConnection();
    }

    /**
     * @return mixed
     */
    public function setConnection(){
        try {
            $this->conn =   new PDO( 'mysql:host='.self::HOST.';dbname='.self::DBNAME, self::DBUSER, self::DBPASS );
        }catch( PDOException $exception )
        {
            die( "Error: ".$exception->getMessage() );
        }
    }

    /**
     * @function than execute query Db
     * @param string $query
     * @param array $param
     */
    public function executeQuery( $query, $params    =   [] ){

        try {
            $statement  =  $this->conn->prepare( $query );
            $statement->execute( $params );
            return $statement;
        }catch( PDOException $exception )
        {
            die( "Error: ".$exception->getMessage() );
        }
    }

    public function selectRegisters( $where = null, $order = null, $limit = null, $fields = null )
    {
        $where  =   strlen( $where ) ? "WHERE ".$where : "";
        $order  =   strlen( $order ) ? "ORDER BY ".$order : "";
        $limit  =   strlen( $limit ) ? "LIMIT ".$limit : "";
        $fields  =   strlen( $fields ) ? $where : "*";
        $query = "SELECT ".$fields." FROM ".$this->table." ".$where." ".$order." ".$limit."";
        return $this->executeQuery( $query );
    }



}

/**
 * Debugged
 */
//$instance   =   new Database();
////$query  =   "SELECT * FROM tb_games";
//$instance->selectRegisters();
//echo "<pre>"; print_r($instance); echo "</pre>";
