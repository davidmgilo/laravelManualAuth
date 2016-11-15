<?php

namespace App\ManualAuth\UserProviders;

interface UserProvider
{
    public function validate(array $credentials);

    public function getUserByCredentials(array $credentials);

    public function createUser(array $credentials);
}