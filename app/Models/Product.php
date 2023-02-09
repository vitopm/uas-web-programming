<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = False;
    protected $guarded = ['id'];

    protected $fillable =
    [
        'Name',
        'Detail',
        'Price',
    ];

    public function order(){
        return $this->hasMany(Order::class, 'item_id');
    }

}
