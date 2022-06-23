<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientsMetric extends Model
{
    use HasFactory;

    protected $table = 'metrics';
    protected $primaryKey = 'id';
    protected $fillable = ['date', 'medicine', 'stock', 'client', 'readby', 'contact'];
}
