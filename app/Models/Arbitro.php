<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arbitro extends Model
{
    use HasFactory;
    protected $table = 'arbitro';
    protected $fillable = ['idArbitro'];
}
