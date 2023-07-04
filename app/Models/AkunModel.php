<?php

namespace App\Models;

use CodeIgniter\Model;

class AkunModel extends Model
{
    protected $table                = 'akun';
    protected $primaryKey           = 'id';
    protected $allowedFields        = ['username', 'password'];

    protected $validationRules      = [
        'username'=>'required|valid_email',
        'password'=>'required',
    ];
    protected $validationMessages = [
        'username'=> [
            'required' => 'Silahkan masukkan username',
            'valid_email' => 'Email yang dimasukkan tidak valid',
        ],
        'password'=> [
            'required' => 'Silahkan masukkan password',
        ]
    ];
}
