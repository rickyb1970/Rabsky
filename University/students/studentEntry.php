<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta author="Rabsky">
      <title>
         Student Maintenance - Entry
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
      <form action="studentInsert.php" method="post">
          <input type="text" name="stid" placeholder="Student ID" tabindex="1" focused required size="38"><br>
          <input type="text" name="stfname" placeholder="First Name" tabindex="2" required  size="38"><br>
          <input type="text" name="stmname" placeholder="Middle Name" tabindex="3" size="38"><br>
          <input type="text" name="stlname" placeholder="Last Name" tabindex="4" required size="38"><br>
          <div>Course</div>
          <select name="stcourse" tabindex="5">
              <option value="BSIT">Bachelor of Science in Information Technology</option>
              <option value="BSCS">Bachelor of Science in Computer Science</option>
              <option value="BSIS">Bachelor of Science in information Technology</option>
          </select><br>
          <div>Year</div>
          <select name="styear" tabindex="6">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
          </select>
          <br>
          <div>
          <input type="submit" name="entry" value="Add Student">
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