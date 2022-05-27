<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EduLevel extends Model
{
    use HasFactory;
    protected $table= 'educational_level';
    protected $fillable=['EduLevelName'];
}
