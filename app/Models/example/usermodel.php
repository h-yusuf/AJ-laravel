<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    public $timestamps = false; // Tidak menggunakan kolom created_at dan updated_at

    protected $fillable = ['email', 'password', 'nama', 'last_login'];

    public static $rules = [
        'id_user' => 'string',
        'email' => 'required|unique:users,email,:id_user,id_user',
    ];

    public static $messages = [
        'email.unique' => 'Maaf, email :value Sudah Ada',
    ];
}
