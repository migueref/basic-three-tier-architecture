<?php
  require_once('../../data/User.php');

  $users=showUsers();


  function showUsers(){
    $users=showUserList();
    return $users;
  }
