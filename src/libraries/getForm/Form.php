<?php

namespace Tekin\getForm;

class Form extends mainForm
{
    private string $email;
    private string $pass;

    /**
     * @return void
     */
    public function display(): void
    {

        $this->setEmail($_POST['email']);
        $this->setPass($_POST['pass']);


        if (empty($this->getEmail()) || empty($this->getPass())) {

            $_SESSION['error'] = "<strong>HATA! </strong>Email ve şifre alanı boş olamaz.";
            header('Location:/');
        } else {
            header('Location:admin');
        }

        $_SESSION['email'] = $this->getEmail();
        $_SESSION['pass'] = $this->getPass();
    }
    /**
     * @return string
     */

    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPass(): string
    {
        return $this->pass;
    }

    /**
     * @param string $pass
     */

    public function setPass(string $pass): void
    {
        $this->pass = $pass;
    }
}
