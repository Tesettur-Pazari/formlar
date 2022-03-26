<?php

namespace Tekin\model;

use Tekin\getForm\mainForm;


class uyeKayit extends mainForm
{
    private string $useradi;
    private string $usersoyadi;
    private string $useremail;
    private string $userpass;
    private string $userrepass;
    private string $job;

    public function save(): bool
    {
        $sql='INSERT INTO users (adi,soyadi,email,pass,job) values (?,?,?,?,?)';
        $sorgu = $this->db->prepare($sql);
        $ekle = $sorgu->execute([$this->useradi, $this->usersoyadi, $this->useremail, $this->userpass, $this->job]);
        return $ekle;

    }

    public function control(): bool
    {
        if ($this->userpass == $this->userrepass) {

            if ($this->save()) {
                unset( $_SESSION['passError']);
                $_SESSION['userDbSuccess'] = "Kayıt Başarılı";
                return true;
            } else {
                $_SESSION['userDbError'] = "Kayıt Başarısız";
                return false;
            }
        } else {
            $_SESSION['passError'] = "Şifreler Uyuşmuyor";
            return false;
        }
    }

    /**
     * @return string
     */
    public function getUseradi(): string
    {
        return $this->useradi;
    }

    /**
     * @param string $useradi
     */
    public function setUseradi(string $useradi): void
    {
        $this->useradi = $useradi;
    }

    /**
     * @return string
     */
    public function getUsersoyadi(): string
    {
        return $this->usersoyadi;
    }

    /**
     * @param string $usersoyadi
     */
    public function setUsersoyadi(string $usersoyadi): void
    {
        $this->usersoyadi = $usersoyadi;
    }

    /**
     * @return string
     */
    public function getUseremail(): string
    {
        return $this->useremail;
    }

    /**
     * @param string $useremail
     */
    public function setUseremail(string $useremail): void
    {
        $this->useremail = $useremail;
    }

    /**
     * @return string
     */
    public function getUserpass(): string
    {
        return $this->userpass;
    }

    /**
     * @param string $userpass
     */
    public function setUserpass(string $userpass): void
    {
        $this->userpass = $userpass;
    }

    /**
     * @return string
     */
    public function getUserrepass(): string
    {
        return $this->userrepass;
    }

    /**
     * @param string $userrepass
     */
    public function setUserrepass(string $userrepass): void
    {
        $this->userrepass = $userrepass;
    }

    /**
     * @return string
     */
    public function getJob(): string
    {
        return $this->job;
    }

    /**
     * @param string $job
     */
    public function setJob(string $job): void
    {
        $this->job = $job;
    }

}

?>