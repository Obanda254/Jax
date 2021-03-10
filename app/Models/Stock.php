<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stock extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['item_id','stock_date','quantity','type'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'stock_date' => 'datetime',
    ];

    //on deleteion of entry
    protected $dates = ['deleted_at'];

    public function Item()
    {
        return $this->belongsTo(Item::class);
    }
}
