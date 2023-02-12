<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{
    use HasFactory;

    protected $fillable =[
        "id",
        "total",
        "pedido_id",
    ];

    public function pedido(){
        return $this->belongsTo('App\Models\Pedido');
    }
}
