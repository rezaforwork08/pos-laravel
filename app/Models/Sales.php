<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = ['trans_code', 'trans_date', 'trans_total_price', 'trans_paid', 'trans_change'];


    public function detailSales()
    {
        return $this->hasMany(SalesDetail::class, 'sales_id', 'id');
    }
}
