//Connnecting to MYSQL
<?php
echo "Welcome to the stage where we are ready to get connected to a database <br>";
/* 
Ways to connect to a MySQL Database
1. MySQLi extension
*/
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
// Create a connection
$conn = mysqli_connect($servername, $username, $password);
// Die if connection was not successful
if (!$conn){
 die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
 echo "Connection was successful";
}
?>
//Creating database
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
// Create a connection
$conn = mysqli_connect($servername, $username, $password);
// Die if connection was not successful
if (!$conn){
 die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
 echo "Connection was successful<br>";
}
// Create a db
$sql = "CREATE DATABASE appointment";
$result = mysqli_query($conn, $sql);
// Check for the database creation success
if($result){
 echo "The db was created successfully!<br>";
}
else{
 echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}
 
?>
// CReating table
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "appointment";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
 die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
 echo "Connection was successful<br>";
}
?>
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "appointment";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
 die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
 echo "Connection was successful<br>";
}

?>