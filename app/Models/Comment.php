<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{

    protected $guarded = ['*']; //no para producción

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
