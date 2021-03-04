<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name'];

    // action on delete of record
    protected $dates = ['deleted_at'];

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
}
