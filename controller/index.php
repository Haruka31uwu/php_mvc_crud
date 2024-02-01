<?php 
require_once('model/index.php');
class modeloController{
    private $model;
    function __construct(){
        $this->model=new DB();
    }
    static function index(){
        $producto=new DB();
        $dato=$producto->show('productos','*','1');
        require_once('views/index.php');
    }
    static function new(){
        require_once('views/new.php');
    }
    static function save(){
        $name=$_REQUEST['name'];
        $price=$_REQUEST['price'];
        $data=   "'".$name."','".$price."'";
        $producto=new DB();
        $dato=$producto->insert('productos',$data);
        header('location:'.urlsite);
    }
    static function edit(){
        $id=$_REQUEST['id'];
        $producto=new DB();
        $dato=$producto->show('productos','*',"id=$id");
        require_once('views/edit.php');
    }
    function update(){
        $id=$_REQUEST['id'];
        $name=$_REQUEST['name'];
        $price=$_REQUEST['price'];
        $data="name='$name',price='$price'";
        $producto=new DB();
        $result=$producto->update('productos',$data,"id=$id");
        header('location:'.urlsite);
    }
    function delete(){
        $id=$_GET['id'];
        $producto=new DB();
        $result=$producto->delete('productos',"id=$id");
        header('location:'.urlsite);
    }
    
}