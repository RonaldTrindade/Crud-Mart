<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Use a classe certa
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UsersModel extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password', 'dataNascimento'];
}

