<?php

    // Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
    // Butuh Framework PHPUnit
    use PHPUnit\Framework\TestCase;

    // Class yang mau di TEST.
    require_once "login.php";

    // Class untuk run Testing.
    class loginTest extends TestCase {
        public function testLogin() {
            $test = new Login();
            
            $email="k.nisa11602@gmail.com";
            $pass="12345678";
            $result= $test->login($email, $pass);

            $this->assertEquals($result, 'Anda berhasil login');
            echo $result;
        }
    }
?>
