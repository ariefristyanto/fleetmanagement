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
    public function testCanLogin()
    {
        $this->seeInDatabase('users', ['email' => 'admin@company1.com'])
             ->visit('/')
             ->followRedirects()
             ->seePageIs('auth/login')
             ->see('Sign in to start your session')
             ->submitForm('Sign In', ['email' => 'admin@company1.com', 'password' => '123456Qz!'])
             ->followRedirects()
             ->seePageIs('dashboard');
    }
}
