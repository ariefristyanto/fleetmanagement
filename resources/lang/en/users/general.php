<?php
return [

    'status'              => [
        'created'                   => 'User successfully created',
        'updated'                   => 'User successfully updated',
        'deleted'                   => 'User successfully deleted',
        'global-enabled'            => 'Selected users enabled.',
        'global-disabled'           => 'Selected users disabled.',
        'enabled'                   => 'User enabled.',
        'disabled'                  => 'User disabled.',
        'no-user-selected'          => 'No user selected.',
    ],

    'error'               => [
        'cant-be-edited'                => 'User cannot be edited',
        'cant-be-deleted'               => 'User cannot be deleted',
        'cant-be-disabled'              => 'User cannot be disabled',
        'login-failed-user-disabled'    => 'That account has been disabled.',
    ],

    'page'              => [
        'index'              => [
            'title'             => 'Users',
            'description'       => 'List of your company users',
        ],
        'show'              => [
            'title'             => 'User | Show',
            'description'       => 'Displaying user: :full_name',
            'section-title'     => 'User details'
        ],
        'create'            => [
            'title'            => 'User | Create',
            'description'      => 'Creating a new user',
            'section-title'    => 'New user'
        ],
        'edit'              => [
            'title'            => 'User | Edit',
            'description'      => 'Editing user: :full_name',
            'section-title'    => 'Edit user'
        ],
    ],

    'columns'           => [
        'id'                        =>  'ID',
        'first_name'                =>  'First name',
        'last_name'                 =>  'Last name',
        'name'                      =>  'Name',
        'role'                      =>  'Role',
        'email'                     =>  'Email',
        'password'                  =>  'Password',
        'password_confirmation'     =>  'Password confirmation',
        'created'                   =>  'Created',
        'updated'                   =>  'Updated',
        'actions'                   =>  'Actions',
        'effective'                 =>  'Effective',
        'enabled'                   =>  'Enabled',
        'timezone'                  =>  'Time zone',
        'locale'                    =>  'Locale',
    ],

    'button'               => [
        'create'    =>  'Create new user',
    ],



];

