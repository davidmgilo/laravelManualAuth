<?php

namespace App\ManualAuth\UserProviders;

interface UserProvider
{
    public function validate(array $credentials);
}