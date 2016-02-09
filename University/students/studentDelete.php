<?php
require_once "../init.php";

$student = new Student(new PDOdb("mysql:host=localhost;dbname=usjr","root",""));

$studid     = $_POST['stid'];
$studfname  = $_POST['stfname'];
$studmname  = $_POST['stmname'];
$studlname  = $_POST['stlname'];
$studcourse = $_POST['stcourse'];
$studyear   = $_POST['styear'];

$result = $student->delete(array('studid'),array($studid));

// if($result > 0)
// 	 echo "Data added";
// else
//      echo "Data was not added";	 

header("Location:studentDeleteList.php");