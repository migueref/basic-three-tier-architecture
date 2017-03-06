<?php
require_once('../../data/User.php');
$usuario="";
$users=showUsers();
if(isset($_POST["display"])){
  display();
}

  function showUsers(){
    $users=showUserList();

    return $users;
  }
  function display(){
    $usuario="migue";
    include('../../presentation/views/template/user.php');

  }
