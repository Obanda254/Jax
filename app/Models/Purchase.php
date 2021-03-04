<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Purchase extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['quantity','cost'];
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
}
