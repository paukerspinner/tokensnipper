<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewestTokens extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'symbol', 'address', 'network'];
}
