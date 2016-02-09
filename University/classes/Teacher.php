<?php

class Teacher {  
	private $db;
    private $table = "teachers";
    private $facultyTypesTable = "teachertypes";

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

     public function showAllTeachers(){
           $sql = "SELECT * FROM ".$this->table.
           " LEFT JOIN ".$this->facultyTypesTable." ON ".$this->table.
           ".teachertype = ".$this->facultyTypesTable.
           ".typeid ORDER BY ".$this->table.
           ".teacherlname ASC;"; 
           $statement = $this->db->getDB()->prepare($sql); 
           $statement->execute();
           $result = $statement->fetchAll(PDO::FETCH_ASSOC);

           return $result; 
     } 

     public function searchTeacher($search){
           foreach($search as $key=>$value){
               $sql = "SELECT * FROM ".$this->table.
               " LEFT JOIN ".$this->facultyTypesTable." ON ".$this->table.
               ".teachertype = ".$this->facultyTypesTable.
               ".typeid WHERE ".$this->table.".".$key.
               "=".$value.";";

               // echo $sql;  

               $statement = $this->db->getDB()->prepare($sql); 
               $statement->execute($search);
               $result = $statement->fetch(PDO::FETCH_ASSOC);
           }    

           return $result; 
     }
}