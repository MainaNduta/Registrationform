<?php 
 $servername = "localhost";
 $username = "username";
 $password = "password";
 
try{
$conn = new PDO("mysql:host=localhost;dbname=userslogin", "MainaNduta","123456");
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql="CREATE TABLE userslogin (
    id INT AUTO_INCREMENT,
    fullname VARCHAR(100) NOT NULL
    email VARCHAR (100)
    country VARCHAR (100)
    password VARCHAR (255)
    confirmpassword VARCHAR (255)";
$conn;
echo ("PDO created succesfully");
}catch(PDOException $error){
    echo ("An error occured" .$error);
}
 

$id = '1';
$fullname = $_POST["fullname"];
$email  =   $_POST["email"];
$country = $_POST["country"];
$password  =   $_POST["password"];
$confirmpassword =  $_POST["confirmpassword"];


// $conn = new PDO("mysql:host=localhost;dbname=userslogin", "MainaNduta","123456");
// $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

// echo ("connected successfully");

$sql1 = "INSERT INTO userslogin 
        (id, fullname , email , country,  password, confirmpassword) VALUES(".
            $id.",".$fullname.",".$email.$country.",".$password.",".$confirmpassword.")";

$sql = "INSERT INTO userslogin 
        (id, fullname , email , country, password, confirmpassword) 
        VALUES 
        ('?','?','?','?','?')";


$stament = $conn->prepare("INSERT INTO userslogin 
                            (id, fullname , email , country, password, confirmpassword) 
                            VALUES (:id,:fullname,:email,:country,:password,:confirmpassword)");

$stament->bindParam(":id",$id);
$stament->bindParam(":fullname",$fullname);
$stament->bindParam(":email",$email);
$stament->bindParam(":country",$country);
$stament->bindParam(":password",$password);
$stament->bindParam(":confirmpassword",$confirmpassword);

try{
    
    // $conn->exec($sql1);
    $stament->execute();
    echo("inserted into db successfully");

}catch(PDOException $error){
    echo ("An error occurred".$error->getMessage());
}


$conn= null;
?>