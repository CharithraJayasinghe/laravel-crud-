<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create($all)
 * @method static findOrFail($id)
 */
class Animal extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'origin'
    ];
}
