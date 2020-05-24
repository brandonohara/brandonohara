<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Wink\WinkTag;

class ArticleTag extends WinkTag
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
