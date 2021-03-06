<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;
    protected $table='town';
    protected $fillable =['TownName','GovernorateId'];
    public $timestamps =false;
}
