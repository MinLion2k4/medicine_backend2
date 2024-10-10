<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'thuoc';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable=[
        'id',
        'ten_thuoc',
        'another_name',
        'scien_name',
        'bo_phan',
        'type_id',
        'mo_ta',
        'soluong',
        'status',
        'price',
        
    ];
}
