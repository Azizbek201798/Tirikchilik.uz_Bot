<?php

class Task{
    public $pdo;

    public function __construct(){
        $this->pdo = DB::connect();
    }

    public function createBloger($name){
        $stmt = $this->pdo->prepare("INSERT INTO blogers(name) 
                                     VALUES(:name);");
        $stmt->bindParam(":name",$name);
        $stmt->execute();
    }

    public function getAllBlogers(){
        $res = $this->pdo->prepare("SELECT * FROM blogers");
        $res->execute();
        return  $res->fetchAll();
    }
    public function getByIdBloger(int $id){
        $stmt = $this->pdo->prepare("SELECT * FROM product WHERE id=:id");
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function deleteBloger(int $id){
        $stmt = $this->pdo->prepare("DELETE FROM product WHERE id=:id");
        $stmt->bindParam(":id",$id);
        $stmt->execute();
    }

    public function createProduct($bloger_id,$name,$price,$color,$size){
        $stmt = $this->pdo->prepare("INSERT INTO product(bloger_id,name,price,color,size) 
                                     VALUES(:bloger_id,:name,:price,:color,:size)");
        $stmt->bindParam(":bloger_id",$bloger_id);
        $stmt->bindParam(":name",$name);
        $stmt->bindParam(":price",$price);
        $stmt->bindParam(":color",$color);
        $stmt->bindParam(":size",$size);
        $stmt->execute();
    }
    public function getAllProduct(){
        $res = $this->pdo->prepare("SELECT * FROM product");
        $res->execute();
        return  $res->fetchAll();
    }
    public function getByIdProduct(int $id){
        $stmt = $this->pdo->prepare("SELECT * FROM product WHERE id=:id");
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function deleteProduct(int $id){
        $stmt = $this->pdo->prepare("DELETE FROM product WHERE id=:id");
        $stmt->bindParam(":id",$id);
        $stmt->execute();
    }

}