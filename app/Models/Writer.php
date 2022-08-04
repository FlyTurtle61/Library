<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Writer extends Model
{
    use HasFactory;

    protected $table="writers";
    protected $primaryKey="id";
    protected $fillable=[
        'writer_name',
        'writer_birthyear',
    ];
}
