<?php
session_start();
$id = $_POST['id'];
unset ($_SESSION['todos'][$id]);
header('Location: /'); 