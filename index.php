<!DOCTYPE html>
<html>
<title>

</title>
<body>
    
<h1>
     
    <?php
        print "Customer Details ";
        print date("d M y");
//add text box at the world part that has my name in it with the date next to it - make it so it can add it to database 

    
    
    ?>  
</h1>


<p> Contact details </p>
<form action="connect.php" method="post">
First Name <input type="text" name="FirstName"><br>
Surname <input type="text" name="Surname"><br>
Company <input type="text" name="Company"><br>
<input type="submit">

</form>



</body>
</html>
