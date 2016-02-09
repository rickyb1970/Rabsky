<?php

require_once "../init.php";

$student = new Student(new PDOdb("mysql:host=localhost;dbname=usjr","root",""));

$studid = $_GET['studid'];
$mode = $_GET['mode'];

$result = $student->search(array('studid'=>$studid));
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta author="Rabsky">
      <title>
         Student Maintenance - Change Entries
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
      <form action="studentUpdate.php" method="post">
     <?php } elseif($mode === "2") { ?>
      <form action="studentDelete.php" method="post"> 
     <?php } ?> 
          <input type="text" value="<?php echo $result['studid'] ?>" name="stid" placeholder="Student ID" tabindex="1" focused required size="38" readonly><br>
          <input type="text" value="<?php echo $result['studfname'] ?>" name="stfname" placeholder="First Name" tabindex="2" required  size="38" <?php echo ($mode === "2") ? "readonly" : "" ?>><br>
          <input type="text" value="<?php echo $result['studmname'] ?>" name="stmname" placeholder="Middle Name" tabindex="3" size="38" <?php echo ($mode === "2") ? "readonly" : "" ?>><br>
          <input type="text" value="<?php echo $result['studlname'] ?>" name="stlname" placeholder="Last Name" tabindex="4" required size="38" <?php echo ($mode === "2") ? "readonly" : "" ?>><br>
          <?php if($mode === "1") { ?>
              <div>Course</div>
              <select name="stcourse" tabindex="5">
              <?php if($result['studcourse'] == 'BSIT') { ?>
                  <option value="BSIT" selected>Bachelor of Science in Information Technology</option>
              <?php } else { ?>    
                  <option value="BSIT">Bachelor of Science in Information Technology</option>
              <?php } 
                  if($result['studcourse'] === 'BSCS') { 
              ?>    
                  <option value="BSCS" selected>Bachelor of Science in Computer Science</option>
              <?php } else { ?>    
                  <option value="BSCS">Bachelor of Science in Computer Science</option>
              <?php } 
                  if($result['studcourse'] === 'BSIS') {
              ?>    
                  <option value="BSIS" selected>Bachelor of Science in information Technology</option>
              <?php } else { ?>    
                  <option value="BSIS">Bachelor of Science in information Technology</option>
              <?php } ?>    
              </select><br>
              <div>Year</div>
              <select name="styear" tabindex="6">
                  <option value="1">1</option>
              <?php if($result['studyear'] === "2"){ ?>    
                  <option value="2" selected>2</option>
              <?php } else { ?>    
                  <option value="2">2</option>
              <?php } 
                    if($result['studyear'] === "3"){
              ?>    
                  <option value="3" selected>3</option>
              <?php } else { ?>    
                  <option value="3">3</option>
              <?php }
                    if($result['studyear'] === "4"){ 
              ?>    
                  <option value="4" selected>4</option>
              <?php } else { ?>    
                  <option value="4">4</option>
              <?php } 
                    if($result['studyear'] === "5"){
              ?>    
                  <option value="5" selected>5</option>
              <?php } else { ?>    
                  <option value="5">5</option>
              <?php } ?>    
              </select>
          <?php
             } elseif ($mode === "2") {
                 echo "Course: ".$result['studcourse']."<br>";
                 echo "Year: ".$result['studyear'];

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
          <input type="reset" name="reset" value="Clear Entries">
          <a href="studentmain.php" class="button" title="Go Back">
          	<img class="goback" src="../images/computer-mouse.png" title="Go Back" height="50" width="50">
          </a>
          </div> 
      </form> 
     </section> 
     <section>

     </section>   
   </body>
</html>      