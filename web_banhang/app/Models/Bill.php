<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = 'bills';

    public function billDetail() {
        return $this->hasMany('App\Models\BillDetail', 'bill_id', 'id');
    }

    public function customer() {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }
}
