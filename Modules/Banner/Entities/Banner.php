<?php

namespace Modules\Banner\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = ['image' => 'array'];

    protected $fillable = [
        'title',
        'image',
        'url',
        'position',
        'status',
    ];

    public static $positions = [
        0 => 'اسلاید شو (صفحه اصلی)',
        1 => 'کنار اسلاید شو (صفحه اصلی)',
        2 => 'بنر تبلیغاتی کوتاه - کشیده سمت راست (صفحه اصلی)',
        3 => 'بنر تبلیغاتی بلند - کشیده سمت چپ (صفحه اصلی)',
    ];
    
    protected static function newFactory()
    {
        return \Modules\Banner\Database\factories\BannerFactory::new();
    }
}
