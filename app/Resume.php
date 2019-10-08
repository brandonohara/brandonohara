<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    public function previous()
    {
        return $this->hasMany(Resume::class, 'prior', 'id');
    }
}
