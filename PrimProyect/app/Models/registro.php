<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'usuarios';

    protected $fillable = ['name', 'age', 'country', 'telephone', 'email', 'career'];
}
