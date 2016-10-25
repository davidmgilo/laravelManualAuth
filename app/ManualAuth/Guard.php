<?php
/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 25/10/16
 * Time: 20:32
 */

namespace App\ManualAuth;


interface Guard
{
    public function check();
}