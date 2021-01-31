<?php
$host = 'localhost';
$database = 'dbName';
$username = 'username';
$password = 'pass';
$db = new mysqli($host, $username, $password, $database);

if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}

if (isset($_POST['name']) && isset($_POST['email'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $query = "INSERT INTO tblContactForms (name, email, phone, message) VALUES (?,?,?,?)";
  if ($pst = $db->prepare($query)) {
    $pst->bind_param("s", $name, $email, $phone, $message);
    $pst->execute();
    $pst->close();
  }
}


if (!isset($_POST['name']) && isset($_POST['email'])) {
  $email = $_POST['email'];
  $query = "INSERT INTO tblSubscriptions (email) VALUES (?)";
  if ($pst = $db->prepare($query)) {
    $pst->bind_param("s", $email);
    $pst->execute();
    $pst->close();
  }
}
