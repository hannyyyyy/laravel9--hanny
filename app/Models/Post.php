<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // dibawah kita menambahkan properti baru yang bernama $fillable. properti tersebut yang dinamakan assigment di laravel, dimana didalamnya kita menambahkan field-field yang diizinkan untuk melakukan manipulasi data.
    /**
     * fillable              
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'title',
        'content',
    ];
}