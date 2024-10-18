<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    //
    use HasFactory;
    protected $table = 'menuses';
    protected $fillable = ['nama_menu', 'harga', 'detail'];
}
