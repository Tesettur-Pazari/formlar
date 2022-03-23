<?php
require "vendor/autoload.php";

$userEkle = new \Tekin\model\uyeKayit();

$userEkle->setAdi($_POST['adi']);
$userEkle->setSoyadi($_POST['soyadi']);
$userEkle->setUseremail($_POST['email']);
$userEkle->setUserpass(md5($_POST['pass']));
$userEkle->setUserrepass(md5($_POST['repass']));
$userEkle->setJob($_POST['job']);


$ekle = $userEkle->control();
if($ekle){
    header('Location: admin.php');
}else{
    header('Location: UserRegister.php');
}


?>