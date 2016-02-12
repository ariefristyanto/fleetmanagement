<?php

use App\Models\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testHasPermission()
    {
        // Company Admin has permission to access company menu
        $u = User::find(1);
        $this->assertTrue($u->hasPermission('menu-company'));

        // Company User does not have permission to access company menu
        $u = User::find(2);
        $this->assertFalse($u->hasPermission('menu-company'));

    }
}
