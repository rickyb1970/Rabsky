<?php

require_once "../init.php";

$teacher = new Teacher(new PDOdb("mysql:host=localhost;dbname=usjr","root",""));

$tchid = $_GET['tchid'];
$mode = $_GET['mode'];

$result = $teacher->searchTeacher(array('teacherid'=>$tchid));
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta author="Rabsky">
      <title>
         Teacher Maintenance - Change Entries
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
     <section id="regholder">
     <?php if($mode === "1"){ ?> 
      <form action="teacherUpdate.php" method="post">
     <?php } elseif($mode === "2") { ?>
      <form action="teacherDelete.php" method="post"> 
     <?php } ?> 
          <input type="text" value="<?php echo $result['teacherid'] ?>" name="tchid" placeholder="Teacher ID" tabindex="1" focused required size="38" readonly><br>
          <input type="text" value="<?php echo $result['teacherfname'] ?>" name="tchfname" placeholder="First Name" tabindex="2" required  size="38" <?php echo ($mode === "2") ? "readonly" : "" ?>><br>
          <input type="text" value="<?php echo $result['teachermname'] ?>" name="tchmname" placeholder="Middle Name" tabindex="3" size="38" <?php echo ($mode === "2") ? "readonly" : "" ?>><br>
          <input type="text" value="<?php echo $result['teacherlname'] ?>" name="tchlname" placeholder="Last Name" tabindex="4" required size="38" <?php echo ($mode === "2") ? "readonly" : "" ?>><br>
          <input type="text" value="<?php echo $result['teachertitle'] ?>" name="tchtitle" placeholder="Titles Earned" tabindex="5" size="38" <?php echo ($mode === "2") ? "readonly" : "" ?>><br>
          <?php if($mode === "1") { ?>
              <div>Type</div>
              <select name="tchtype" tabindex="6">
                  <option value="1">Probationary - Part-time</option>
              <?php if($result['teachertype'] === "2"){ ?>    
                  <option value="2" selected>Probationary - Full-time</option>
              <?php } else { ?>    
                  <option value="2">Probationary - Full-time</option>
              <?php } 
                    if($result['teachertype'] === "3"){
              ?>    
                  <option value="3" selected>Tenured</option>
              <?php } else { ?>    
                  <option value="3">Tenured</option>
              <?php 
                    }
              ?>        
              </select>      
          <?php
             } elseif ($mode === "2") {
                 echo "Type: ".$result['typedescription'];
             } 
          ?>                
          <br>
          <div>
        <?php if($mode === "1"){ ?>  
          <input type="submit" name="entry" value="Update">
        <?php 
              } elseif($mode === "2"){  
        ?>  
          <input type="submit" name="entry" value="Delete">
        <?php } ?>  
          <input type="reset" name="reset" value="Clear Entries" title="Go Back">
          <a href="teachermain.php" class="button">
          	<img class="goback" src="../images/computer-mouse.png" title="Go Back" height="50" width="50">
          </a>
          </div> 
      </form> 
     </section> 
     <section>

     </section>   
   </body>
</html>      