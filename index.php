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
<form action="thankyou.php" method="post">
First Name <input type="text" name="FirstName"><br>
Surname <input type="text" name="Surname"><br>
Company <input type="text" name="Company"><br>
<input type="submit">

</form>



<?php

// SQL

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "CustomerContacts";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
}
echo "Connect Successfully"

//Create Database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    ECHO "Database Created Successfully";
} else {
    echo "Error Creating Database" . $conn->error;
}


$conn->close();

//sql to create table
$sql= "CREATE TABLE MyCustomers (
    id TNT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCJAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    company name VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    
)";

if ($conn->query($sql) === TRUE){
    ECHO "Table MyCustomers created successfully";
} else {
    echo "Error creating table:" . $conn->error;
}

$conn->close();

?>










</body>
</html>
