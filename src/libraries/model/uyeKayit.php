<?php

namespace Tekin\model;

use Tekin\getForm\mainForm;

class uyeKayit extends mainForm
{
    private string $adi;
    private string $soyadi;
    private string $useremail;
    private string $userpass;
    private string $userrepass;
    private string $job;

    public function save(): bool
    {
        $query="INSERT INTO users (adi,soyadi,email,pass,job) VALUES (?,?,?,?,?)";
        $sorgu = $this->db->prepare($query);
        $ekle = $sorgu->execute([$this->adi, $this->soyadi, $this->useremail, $this->userpass, $this->job]);
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
     * @param string $adi
     */
    public function setAdi(string $adi): void
    {
        $this->adi = $adi;
    }

    /**
     * @return string
     */
    public function getAdi(): string
    {
        return $this->adi;
    }

    /**
     * @param string $soyadi
     */
    public function setSoyadi(string $soyadi): void
    {
        $this->soyadi = $soyadi;
    }

    /**
     * @return string
     */
    public function getSoyadi(): string
    {
        return $this->soyadi;
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
    public function getUseremail(): string
    {
        return $this->useremail;
    }

    /**
     * @param int $userpass
     */
    public function setUserpass(string $userpass): void
    {
        $this->userpass = $userpass;
    }

    /**
     * @return string
     */
    public function getUserpass(): string
    {
        return $this->userpass;
    }

    /**
     * @param string $job
     */
    public function setJob(string $job): void
    {
        $this->job = $job;
    }

    /**
     * @return string
     */
    public function getJob(): string
    {
        return $this->job;
    }

    /**
     * @param string $userrepass
     */
    public function setUserrepass(string $userrepass): void
    {
        $this->userrepass = $userrepass;
    }

}

?>