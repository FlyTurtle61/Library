<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Book extends Model
{
    use HasFactory;

    protected $table="books";
    protected $primaryKey="id";
    protected $fillable=[
        'book_name',
        'yazar_adi',
        'kitap_turu',
        'delivery_date',
    ];
}
