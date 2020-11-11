<?php

class Product{

    protected $db = null;

    public function __construct(DbController $db){
        if(!isset($db->conn)) return null;
        $this->db = $db;
    }

    public function getData($table = 'product'){
        $result = $this->db->conn->query("SELECT * FROM {$table}");

        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
}