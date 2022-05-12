<?php
session_start();

if(empty($_SESSION['todos'])){
  $_SESSION['todos'] = [];  
}

$_SESSION['todos'][] = $_POST['todo'];

header('Location: /'); 