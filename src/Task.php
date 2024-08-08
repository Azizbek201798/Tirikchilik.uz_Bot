<?php

class Task{
    public $pdo;

    public function __construct(){
        $this->pdo = DB::connect();
    }

    public function createProduct($bloger_id,$name,$price,$color,$size){
        $stmt = $this->pdo->prepare("INSERT INTO product(bloger_id,name,price,color,size) 
                                     VALUES(:bloger_id,:price,:color,:size)");
        $stmt->bindParam(":bloger_id",$bloger_id);
        $stmt->bindParam(":name",$name);
        $stmt->bindParam(":price",$price);
        $stmt->bindParam(":color",$color);
        $stmt->bindParam(":size",$size);
        $stmt->execute();
    }

    public function getAll(){
        $res = $this->pdo->prepare("SELECT * FROM product");
        return  $res->fetchAll();
    }

    public function delete(int $id){
        $stmt = $this->pdo->prepare("DELETE FROM product WHERE id=:id");
        $stmt->bindParam(":id",$id);
        $stmt->execute();
    }

}