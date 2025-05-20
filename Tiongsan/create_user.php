<?php
 
if($_SERVER["REQUEST_METHOD"] =="POST"){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $role = $_POST ["role"]; //new
  $password = $password . "system";

  //ENCRYPTION
  $cipher= password_hash( $password, PASSWORD_DEFAULT);

  //DATABASE CONNECTION
  //[servername, usernamer, password, database name, port]
  //"localhost", "root", "db_tiongsan", "3307"
  $conn = mysqli_connect("localhost","batch1", "batch1","db_tiongsan", "3307");

  //Check connection
  if($conn->connect_error){
    echo "Connection failed:" . $conn->connect_error;
  }
  else{
    echo "Connected";
  }

  //INSERT QUERY
  $sql = "INSERT INTO `tbl_users`(`username`, `password`, `role`) VALUES ('$username','$cipher', '$role')";
  
  $conn->query($sql);

  
}

?>