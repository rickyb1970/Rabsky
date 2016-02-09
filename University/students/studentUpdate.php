<?php

require_once "../init.php";

$student = new Student(new PDOdb("mysql:host=localhost;dbname=usjr","root",""));

$studid     = $_POST['stid'];
$studfname  = $_POST['stfname'];
$studmname  = $_POST['stmname'];
$studlname  = $_POST['stlname'];
$studcourse = $_POST['stcourse'];
$studyear   = $_POST['styear'];

$result = $student->update(array('studfname'=>$studfname,'studmname'=>$studmname,
	                 'studlname'=>$studlname,'studcourse'=>$studcourse,
	                 'studyear'=>$studyear),array('studid'=>$studid),1);

header('Location:studentUpdateList.php');