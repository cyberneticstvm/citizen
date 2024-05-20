<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Survey extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $casts = ['from_date' => 'datetime', 'to_date' => 'datetime'];

    public function questions()
    {
        return $this->hasMany(Question::class, 'survey_id', 'id');
    }
}
