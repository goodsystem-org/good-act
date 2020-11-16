<?php

namespace GoodSystem\GoodAct;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function reviewable()
    {
        return $this->morphTo();
    }

    public function reviewedBy()
    {
        return $this->belongsTo(User::class);
    }
}
