<?php

require_once "../init.php";

$teacher = new Teacher(new PDOdb("mysql:host=localhost;dbname=usjr","root",""));

$teacherid     = $_POST['tchid'];
$teacherfname  = $_POST['tchfname'];
$teachermname  = $_POST['tchmname'];
$teacherlname  = $_POST['tchlname'];
$teachertitle = $_POST['tchtitle'];
$teachertype   = $_POST['tchtype'];

$result = $teacher->insert(array($teacherid,$teacherfname,
	                        $teachermname,$teacherlname,$teachertype,$teachertitle));

// if($result > 0)
// 	 echo "Data added";
// else
//      echo "Data was not added";	 

header("Location:teacherList.php");