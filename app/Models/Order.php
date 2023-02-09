<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = False;
    protected $fillable =
    [
        'user_id',
        'item_id',
        'price'
    ];

    public function product(){
        return $this->belongsTo(Product::class, 'item_id');
    }
}
