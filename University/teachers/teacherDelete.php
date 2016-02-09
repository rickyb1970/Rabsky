<?php
require_once "../init.php";

$teacher = new Teacher(new PDOdb("mysql:host=localhost;dbname=usjr","root",""));

$teacherid     = $_POST['tchid'];

$result = $teacher->delete(array('teacherid'),array($teacherid));

// if($result > 0)
// 	 echo "Data added";
// else
//      echo "Data was not added";	 

header("Location:teacherDeleteList.php");