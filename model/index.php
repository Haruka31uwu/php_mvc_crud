<?php 
    class DB{
        private $model;
        private $db;
        public function __construct(){
            $this->model=array();
            $this->db=new PDO('mysql:host=localhost;dbname=mvc','root','123456');

        }
        public function insert($table,$data){

            $sql="insert into ".$table." values(null,". $data .")";

            $result=$this->db->query($sql);
            if($result){
                return true;
            }else{
                return false;
            }
        }public function show($table,$data,$condition){
            $consul="select * from ".$table." where ".$condition.";";
            $resu=$this->db->query($consul);
            $personas=array();
            if(!$resu){
                return $personas;
            }
            while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) {
                $personas[]=$filas;
            }
            return $personas;
        
        }public function update($table,$data,$condition){
            $sql="UPDATE $table SET $data WHERE $condition";
            $result=$this->db->query($sql);
            if($result){
                return true;
            }else{
                return false;
            }
           
        }public function delete($table,$condition){
            $sql="DELETE FROM $table WHERE $condition";
            $result=$this->db->query($sql);
            if($result){
                return true;
            }else{
                return false;
            }
        }
    }