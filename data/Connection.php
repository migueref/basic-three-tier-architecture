<?php
function connect(){
  $connection=$mysqli = new mysqli("localhost", "root", "", "testDatabase");
  $connection->query("SET NAMES 'utf8'");
  return $connection;
}
