<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Item;

class Purchase extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['item_id','purchase_date','quantity','cost'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'purchase_date' => 'datetime',
    ];

    //on deleteion of entry
    protected $dates = ['deleted_at'];

    // protected $table = "purchases";

    public function Item()
    {
        return $this->belongsTo(Item::class);
    }
}
