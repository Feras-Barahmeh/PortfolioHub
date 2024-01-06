<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Education extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'admin_id',
        'name',
        'grade',
        'organisation_url',
        'organisation_name',
        'start_date',
        'finish_date',
    ];

    public array $translatedAttributes = [
        'name',
        'grade',
        'organisation_name',
    ];

    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }
}
