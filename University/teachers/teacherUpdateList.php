<?php  
    require_once('../init.php');

	$teacher = new Teacher(new PDOdb("mysql:host=localhost;dbname=usjr","root",""));

	$results = $teacher->showAllTeachers();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta author="Rabsky">
      <title>
         Teacher Management - Listing  
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
 	         	<td>Type</td>
 	         	<td>Select</td>
 	         </tr>
	      <?php
	         foreach($results as $result){
	      ?>         
	         <tr class="listdetails">
	            <td><?php echo $result['teacherid'] ?></td>
	            <td><?php echo $result['teacherlname'],', ',$result['teacherfname'] ?></td>
	            <td><?php echo $result['typedescription'] ?></td>
	            <td><a class="listlink" href="teacherSearch.php?mode=1&tchid=<?php echo $result['teacherid'] ?>">Update</a></td>
	         </tr> 
	      <?php
	         }
	      ?>
	         <tr>	            
                <td colspan="4">
                   <a class="backlink" href="teachermain.php" title="Go Back">
			         <img class="goback" src="../images/computer-mouse.png" title="Go Back" height="50" width="50">
			       </a>  
                </td>                 
	         </tr>	      
	      </table>
	 <?php
	   } else { 
	 ?>     
         <div style="font-size:2em;font-family:arial, verdana, sans-serif;">
            No Records on file...
			 <div class="listdiv">
		          <a href="teachermain.php">
		          	<img class="goback" src="../images/computer-mouse.png" title="Go Back" height="50" width="50">
		          </a>	    
			 <div>            
         </div>
	 <?php
       }
	 ?>

   </body>
</html>      