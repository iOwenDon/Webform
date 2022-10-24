<!DOCTYPE html>
<html>
<title>

</title>
<body>
    
<h1>
     

    
    Thank You 
    <?php print $_POST["FirstName"]; ?> 
    <?php print $_POST["Surname"]; ?>!<br>

</h1>

<h2>
    <?php print "Company:" ?> 
    <?php print $_POST["Company"]; ?> 
</h2>              
    
<?php
//Database connection
$conn =new mysqli("localhost", "root" , "" , "webform");
if($conn->connect_error) {
   die("connection failed  : ".$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into name_company_form(FirstName,Surname,Company)
    Values(?, ?, ?) ");
    $stmt->bind_param("sss", $FirstName, $Surname, $Company);
    $stmt->execute();  
    $stmt->close();
    $conn->close();
}


?>

      
    
    
