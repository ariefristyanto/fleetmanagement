<?php
return [

    'status'              => [
        'created'                   => 'User berhasil dibuat',
        'updated'                   => 'User berhasil dirubah',
        'deleted'                   => 'User berhasil dihapus',
        'global-enabled'            => 'User yang dipilih telah aktif.',
        'global-disabled'           => 'User yang dipilih telah non-aktif.',
        'enabled'                   => 'User telah aktif.',
        'disabled'                  => 'User telah non-aktif.',
        'no-user-selected'          => 'Tidak ada user yang dipilih.',
    ],

    'error'               => [
        'cant-be-edited'                => 'User tidak dapat dirubah',
        'cant-be-deleted'               => 'User tidak dapat dihapus',
        'cant-be-disabled'              => 'User tidak dapat di non-aktifkan',
        'login-failed-user-disabled'    => 'Account telah di non-aktifkan.',
    ],

    'page'              => [
        'index'              => [
            'title'             => 'Users',
            'description'       => 'Daftar user di perusahaan',
        ],
        'show'              => [
            'title'             => 'User | Show',
            'description'       => 'Tampilan user: :full_name',
            'section-title'     => 'Data User'
        ],
        'create'            => [
            'title'            => 'User | Create',
            'description'      => 'Membuat user baru',
            'section-title'    => 'User Baru'
        ],
        'edit'              => [
            'title'            => 'User | Edit',
            'description'      => 'Merubah user: :full_name',
            'section-title'    => 'Merubah user'
        ],
    ],

    'columns'           => [
        'id'                        =>  'ID',
        'first_name'                =>  'Nama depan',
        'last_name'                 =>  'Nama keluarga',
        'name'                      =>  'Nama',
        'role'                      =>  'Role',
        'email'                     =>  'Email',
        'password'                  =>  'Password',
        'password_confirmation'     =>  'Password confirmation',
        'created'                   =>  'Dibuat',
        'updated'                   =>  'Dirubah',
        'actions'                   =>  'Actions',
        'effective'                 =>  'Efektif',
        'enabled'                   =>  'Aktif',
        'timezone'                  =>  'Time zone',
        'locale'                    =>  'Locale',
    ],

    'button'               => [
        'create'    =>  'Buat user baru',
    ],



];

