<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Publisher extends Model
{
    use HasFactory;

    protected $table="publishers";
    protected $primaryKey="publisher_id";
    protected $fillable=[
        'publisher_name',
        'publisher_img',
        'phone',
        'address',
        'email',

    ];

}
