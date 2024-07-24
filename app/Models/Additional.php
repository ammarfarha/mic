<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Additional extends Model
{
    use HasFactory;

    public function student(): HasOne
    {
        return $this->hasOne(student::class);
    }
}
