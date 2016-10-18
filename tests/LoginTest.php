<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;

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
            ->see('Email')
            ->see('Password');
 //           ->seeElement('');
    }

    protected function createTestUser(){
       return factory(\App\User::class)->create(['password'=> Hash::make('123456')]);
    }

    public function testLoginPostWithUserok()
    {
        $user = $this->createTestUser();
        $this->visit('/login')
            ->type($user->name, 'user')
            ->type('123456', 'password')
            ->press('login')
            ->seePageIs('/home');
    }

    public function testLoginPostWithUsetNotok()
    {
        $this->visit('/login')
            ->type('pepitopalotes@gmail.com', 'user')
            ->type('123456', 'password')
            ->press('login')
            ->seePageIs('/login');
 //           ->see('Username not exists');
    }
}