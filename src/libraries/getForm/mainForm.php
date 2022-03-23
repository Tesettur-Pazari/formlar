<?php
namespace Tekin\getForm;
use PDO;

class mainForm
{
    public object $db;
    private string $email;
    private int $pass;

    /**
     *
     */
    public function __construct()
    {
        session_start();
        $this->db=new PDO('mysql:dbname=proje;host=localhost;charset=utf8','root','pirveli25');
    }

    /**
     * @return string
     */

    public function getEmail():string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */

    public function setEmail(string $email):void
    {
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getPass():int
    {
        return $this->pass;
    }

    /**
     * @param int $pass
     */

    public function setPass(int $pass):void
    {
        $this->pass = $pass;
    }

    /**
     *
     */

    public function destroy():void
    {
        session_destroy();

        header('Location: index.php');
    }
}
