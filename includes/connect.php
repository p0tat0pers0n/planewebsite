<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=ryankayser_planes', 'ryankayser', 'OAkzDt2GZ6dYj4');
}
catch (PDOException $e)
{
  echo 'Unable to connect to the database server.';
  exit;	
}
?>