<?php

namespace GoodSystem\GoodAct;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Act extends Model
{
    use HasFactory;

    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    public function actBy()
    {
        return $this->belongsTo(User::class);
    }
}
