<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoice';
    protected $primaryKey = 'id';
    protected $fillable =['registration_id','paid_date','amount'];
    use HasFactory;


    public function registration()
    {
        return $this->belongsTo(Registration::class);
    }
}
