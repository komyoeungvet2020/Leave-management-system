<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'leave_from',
        'leave_to',
        'type_id',
        'description'
    ];
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }
}
