<?php
namespace App\Auth\Admin;

use Cake\Auth\AbstractPasswordHasher;

class LegacyPasswordHasher extends AbstractPasswordHasher
{

    public function hash($password)
    {
        return md5($password);
    }

    public function check($password, $hashedPassword)
    {
		echo md5($password);echo "</br>";
		die($hashedPassword); 
        return md5($password) === $hashedPassword;
    }
}