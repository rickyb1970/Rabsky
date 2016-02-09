<?php

require_once "../init.php";

$teacher = new Teacher(new PDOdb("mysql:host=localhost;dbname=usjr","root",""));

$teacherid     = $_POST['tchid'];
$teacherfname  = $_POST['tchfname'];
$teachermname  = $_POST['tchmname'];
$teacherlname  = $_POST['tchlname'];
$teachertitle  = $_POST['tchtitle'];
$teachertype   = $_POST['tchtype'];

$result = $teacher->update(array('teacherfname'=>$teacherfname,'teachermname'=>$teachermname,
	                 'teacherlname'=>$teacherlname,'teachertitle'=>$teachertitle,
	                 'teachertype'=>$teachertype),array('teacherid'=>$teacherid),1);

header('Location:teacherUpdateList.php');