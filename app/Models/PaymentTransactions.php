<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use Hash,DB,DateTime,Datetimezone,DateInterval;
class PaymentTransactions extends Model
{
    use HasFactory;
    protected $fillable = [
        'reg_no',
        'pay_for',
        'status',
        'txnid',
        'gst_amount',
        'amount',
        'commission_amt', 
        'my_currency_rate',
        'sp_currency_rate',
        'posted_data',
        'responded_data',
        'txn_token',
        'txn_token_expiry',
        'created_at',
        'updated_at'
    ];

    protected $appends = [
        'created_date'
    ];
    public function getCreatedDateAttribute()
    {
        $createdAt = new DateTime($this->created_at);
        $createdAt->add(new DateInterval('PT5H30M')); // Adds 5 hours and 30 minutes
        return $createdAt->format('d M Y - h:i a');
    }
    public static function generateToken($salt=NULL){
        //return token
        return Hash::make($salt.time() . rand(0,1000));
    }

    // Generate Txn id 
    public static function generateTxnid($salt=NULL){
        //return token
        return substr(hash('sha256', mt_rand() . microtime() . $salt), 0, 20);
    }
}
