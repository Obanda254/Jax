<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sale extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['item_id','sale_date','quantity','price'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'sale_date' => 'datetime',
    ];

    //on deleteion of entry
    protected $dates = ['deleted_at'];

    // protected $table = "sales";

    public function Item()
    {
        return $this->belongsTo(Item::class);
    }
}
