<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Simplified ACL implementation
        // 1 Company can have many Users
        // 1 User can only have 1 Role
        // 1 Role can have many Permissions (and 1 Permission can belong to many Roles)

        // roles (system wide and not specific to a tenant/company)
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // permissions (system wide and not specific to a tenant/company)
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // companies (the tenant)
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('theme')->default('default');
            $table->timestamps();
        });

        // roles (system wide and not specific to a tenant/company)
        // laravel convention is to use alphabetical order for many to many table names
        // so permission_role since P is before R
        Schema::create('permission_role', function (Blueprint $table) {
            $table->unsignedInteger('permission_id');
            $table->unsignedInteger('role_id');
            $table->timestamps();

            $table->foreign('permission_id')
                ->references('id')
                ->on('permissions')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('role_id')
                  ->references('id')
                  ->on('roles')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->primary(['role_id', 'permission_id']);
        });

        // users (tenant specific: scoped by company_id)
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id'); // Primary Key
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('company_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->boolean('enabled')->default(true);
            $table->string('timezone')->default('Asia/Jakarta');
            $table->string('locale')->default('en');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role_id')
                  ->references('id')
                  ->on('roles');

            $table->foreign('company_id')
                ->references('id')
                ->on('companies');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        Schema::drop('role_permission');
        Schema::drop('companies');
        Schema::drop('permissions');
        Schema::drop('roles');
    }
}
