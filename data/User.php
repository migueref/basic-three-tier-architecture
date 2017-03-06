<?php
require_once("Connection.php");

function showUserList(){
  $connection=connect();
  $users=$connection->query("select * from users");
  return $users;
}
