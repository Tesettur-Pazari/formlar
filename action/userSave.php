<?php
require "../vendor/autoload.php";

$userEkle = new \Tekin\model\uyeKayit();

$userEkle->setUseradi($_POST['adi']);
$userEkle->setUsersoyadi($_POST['soyadi']);
$userEkle->setUseremail($_POST['email']);
$userEkle->setUserpass(md5($_POST['pass']));
$userEkle->setUserrepass(md5($_POST['repass']));
$userEkle->setJob($_POST['job']);


$ekle = $userEkle->control();
if($ekle){
    header('Location:/');
}else{
    header('Location:register');
}


?>