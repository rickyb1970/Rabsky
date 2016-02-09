<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta author="Rabsky">
      <title>
         Teacher Maintenance - Entry
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
      <form action="teacherInsert.php" method="post">
          <input type="text" name="tchid" placeholder="Teacher ID" tabindex="1" focused required size="38"><br>
          <input type="text" name="tchfname" placeholder="First Name" tabindex="2" required  size="38"><br>
          <input type="text" name="tchmname" placeholder="Middle Name" tabindex="3" size="38"><br>
          <input type="text" name="tchlname" placeholder="Last Name" tabindex="4" required size="38"><br>
          <input type="text" name="tchtitle" placeholder="Titles Earned" tabindex="5" size="38"><br>
          <div>Type</div>
          <select name="tchtype" tabindex="6">
              <option value="1">Probationary - Part-time</option>
              <option value="2">Probationary - Full-time</option>
              <option value="3">Tenured</option>
          </select><br>
          <div>
          <input type="submit" name="entry" value="Add Teacher">
          <input type="reset" name="reset" value="Clear Entries">
          <a href="teachermain.php" class="button" title="Go Back">
          	<img class="goback" src="../images/computer-mouse.png" title="Go Back" height="50" width="50">
          </a>
          </div> 
      </form> 
     </section> 
     <section>

     </section>   
   </body>
</html>      