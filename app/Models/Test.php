<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;
use Spatie\Translatable\HasTranslations;

class Test extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name'];
    protected $guarded = [];
}
