<?php
require "../vendor/autoload.php";

$login=new \Tekin\getForm\Form();
$login->setEmail($_POST['email']);
$login->setEmail($_POST['pass']);

$login->display();

?>