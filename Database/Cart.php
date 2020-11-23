<?php

class Cart{

    protected $db = null;

    public function __construct($db){
        if(!isset($db->conn)) return null;
        $this->db = $db;
    }

    public function insertIntoCart($param=null, $table="cart"){
        if($this->db->conn != null){
            if($param != null){
                $column = implode(',', array_keys($param));

                $value = implode(',', array_values($param));

                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $column, $value);

                $result = $this->db->conn->query($query_string);
                return $result;
            }
        }
    }

    public function addToCart($user_id, $item_id){
        if(isset($user_id) && isset($item_id)){
            $param = array(
                'user_id' => $user_id,
                'item_id' => $item_id
            );

            $result = $this->insertIntoCart($param);
            
            if($result){
                header('Location: ' . $_SERVER['REQUEST_URI']);
            }
        }
    }

    public function deleteFromCart($item_id = null, $table = 'cart'){
        if($item_id != null){
            $result = $this->db->conn->query("DELETE FROM {$table} WHERE item_id = {$item_id}");

            if($result){
                header('Location: ' . $_SERVER['PHP_SELF']);
            }

            return $result;
        }
    }

    public function getCartId($cart_item = null, $key = 'item_id'){
        if($cart_item != null){
            $cart_item_id = array_map(function($item) use($key) {
                return $item[$key];
            }, $cart_item);

            return $cart_item_id;
        }
    }

    public function saveForLater($item_id = null, $saveTable = 'wishlist', $fromTable = 'cart'){
        if($item_id != null){
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id = {$item_id};";
            $query .= "DELETE FROM {$fromTable} WHERE item_id = {$item_id};";

            $result = $this->db->conn->multi_query($query);
            
            if($result){
                header('Location: ' . $_SERVER['PHP_SELF']);
            }

            return $result;
        }
    }
}