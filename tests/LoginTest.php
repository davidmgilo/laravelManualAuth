<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    use DatabaseMigrations;
    //S'assegura que les taules existeixin al fer un test.

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

    protected function createTestUser(){
       return factory(\App\User::class,1)->create();
    }

    public function testLoginPostWithUserok()
    {
        $user = $this->createTestUser();
        $this->visit('/login')
            ->type('user', $user->name)
            ->type('password', $user->password)
         //   ->check('terms')
            ->press('login')
            ->seePageIs('/home');
    }
}