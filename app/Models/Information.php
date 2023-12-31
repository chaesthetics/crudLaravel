<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'information';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'mobile'];
}
