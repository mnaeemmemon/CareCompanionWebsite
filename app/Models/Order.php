<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pharmacy;

class Order extends Model
{
    use HasFactory;
    protected $table = "order";

    public function pharmacy()
    {
        return $this->HasOne(Pharmacy::class,'id','pharmacy_id');
    }

    public function user()
    {
        return $this->HasOne(User::class,'id','user_id');
    }

    public function orderDetails()
    {
        return $this->HasMany(OrderDetails::class,'Order_ID','id');
    }
}
