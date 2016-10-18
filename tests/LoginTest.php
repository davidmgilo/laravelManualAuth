<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testLoginPageShowsLoginForm()
    {
        $this->visit('/login')
            ->see('Usuari')
            ->see('Password');
 //           ->seeElement('');
    }
}