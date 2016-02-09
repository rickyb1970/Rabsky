<?php  
    require_once('../init.php');

	$student = new Student(new PDOdb("mysql:host=localhost;dbname=usjr","root",""));

	$results = $student->show('studlname');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta author="Rabsky">
      <title>
         Student Management - Listing  
      </title>
      <link rel="stylesheet" type="text/css" href="../css/ustyles.css">
   </head>
   <body>
      <header class="mainheader">
         <section class="lefthead">
             <span class="headtext">Rabsky University</span>
         </section>
         <section class="righthead">
         </section>
      </header>   
     <?php
        if($results){ 
     ?>
 	      <table name="studlisting" class="studlist">
 	         <tr>
 	         	<td>ID</td>
 	         	<td>Name</td>
 	         	<td>Course</td>
 	         	<td>Year</td>
 	         </tr>
	      <?php
	         foreach($results as $result){
	      ?>         
	         <tr class="listdetails">
	            <td><?php echo $result['studid'] ?></td>
	            <td><?php echo $result['studlname'],', ',$result['studfname'] ?></td>
	            <td><?php echo $result['studcourse'] ?></td>
	            <td><?php echo $result['studyear'] ?></td>
	         </tr> 
	      <?php
	         }
	      ?>
	         <tr>
	            <td colspan="4">
	              <?php
                      echo "Total Count: ".count($results);
	              ?> 
	            </td>
	         </tr> 
	         <tr>	            
                <td colspan="4">
                   <a class="backlink" href="studentmain.php" title="Go Back">
			         <img class="goback" src="../images/computer-mouse.png" title="Go Back" height="50" width="50">
			       </a>  
                </td>                 
	         </tr>
	      </table>
	 <?php
	   } else { 
	 ?>     
         <div>
            No Records on file...
         </div>
	 	 <div class="listdiv">
	          <a href="studentmain.php">
	          	<img class="goback" src="../images/computer-mouse.png" title="Go Back" height="50" width="50">
	          </a>	    
	 	 <div>
	 <?php
       }
	 ?>

   </body>
</html>      