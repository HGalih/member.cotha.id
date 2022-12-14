<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeePosition extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'description',
    ];

    public function employees(){
        return $this->hasMany(Employee::class, 'position_id', 'id');
    }
}
