<?php

namespace Tekin\getForm;

use PDO;

class mainForm
{
    public object $db;

    public function __construct()
    {
        session_start();
        try {

            $this->db = new PDO('mysql:dbname=proje;host=localhost;charset=utf8', 'root', 'pirveli25');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo('ERROR: ' . $e->getMessage());
        }
    }



    public function destroy(): void
    {
        session_destroy();

        header('Location: /');
    }
}
