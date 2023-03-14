<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SettingCarousel extends Model
{
    use HasFactory;
    protected $fillable = [
        'file',
        'title',
        'description',
        'status',
        'registerUser_id',
        'deleted_at'
    ];
}
