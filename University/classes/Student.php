<?php

class Student {  
	private $db;
    private $table = "student";

     public function __construct(PDOdb $db){
            $this->db = $db; 
     }

     public function insert(array $values){
            $result = $this->db->insert($this->table,$values);
            return $result;
     }

     public function search($search){
            $result = $this->db->search($this->table,$search);
            return $result;
     } 

     public function show($order=null){
            $result = $this->db->show($this->table,$order);
            return $result; 
     }

     public function update(array $cols,array $values,$flag){
           $result = $this->db->update($this->table,$cols,$values,$flag);
     }
     
     public function delete(array $cols,array $values,$flag){
           $result = $this->db->delete($this->table,$cols,$values,$flag);
           return $result; 
     }     




}





