<?php 
# ICRUD.php
## Interface file for the CRUD functions   

interface ICRUD {
	public function insert($table,array $values);
	public function show($table);
    public function update($table, array $cols, array $values, $flag);
    public function delete($table, array $cols, array $values, $flag);
}