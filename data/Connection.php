<?php
function connect(){
  $connection=$mysqli = new mysqli("localhost", "root", "", "testdatabase");
  $connection->query("SET NAMES 'utf8'");
  return $connection;
}
