<?php

require_once "init.php";

//echo "i am here";
$student = new Student(new PDOdb("mysql:host=localhost;dbname=usjr","root",""));

$result = $student->show();

if(!$result)
	echo "No data contained in the result set...";
else {
	foreach($result as $res){
		echo $res['studid'].' '.$res['studfname'].' '.$res['studlname']."<br>";
	}
}	 

// $studid     = 'AA-002';
// $studfname  = 'Jeoffrey';
// $studlname  = 'Gudio';
// $studmname  = 'Camocamo';
// $studcourse = 'BSIT';
// $studyear   = 4;

// $result = $student->insert(array($studid,$studfname,
// 	                        $studlname,$studmname,$studcourse,$studyear));

// if($result > 0)
// 	 echo "Data added";
// else
//      echo "Data was not added";	 

$result = $student->update(array('studid'=>'AA01','studfname'=>'Jeoffrey'),array('studlname'=>'Gudio','studcourse'=>'BSCS'),2);

echo $result;

if($result > 0)
  echo "Operation done";
else
  echo "Operation failed";    