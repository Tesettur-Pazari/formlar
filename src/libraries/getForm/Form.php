<?php

namespace Tekin\getForm;

class Form extends mainForm
{

    public function display(): void
    {

        $this->setEmail($_POST['email']);
        $this->setPass($_POST['pass']);


        if (empty($this->getEmail()) || empty($this->getPass())) {

            $_SESSION['error'] = "<strong>HATA! </strong>Email ve şifre alanı boş olamaz.";
            header('Location: index.php');
        } else {
            header('Location:admin.php');
        }

        $_SESSION['email'] = $this->getEmail();
        $_SESSION['pass'] = $this->getPass();
    }
}
