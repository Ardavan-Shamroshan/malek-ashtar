<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Modules\Admin\Entities\Notification;
use Modules\User\Filter\UserFilter;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasPermissions, Sluggable, HasProfilePhoto, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'email',
        'password',
        'mobile',
        'national_code',
        'profile_photo_path',
        'activation',
        'slug',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Generate slug from defined source field
     */
    public function sluggable(): array {
        // TODO: Implement sluggable() method.
        return [
            'slug' => [
                'source' => ['email', 'id'],
                'includeTrashed' => true,
            ]
        ];
    }


    /**
     * Filter
     */
    public function scopeFilter(Builder $builder, $request) {
        return (new UserFilter($request))->filter($builder);
    }

    /**
     * Accessors & Mutators
     */
    // full name using first and last names
    public function fullName(): Attribute {
        return Attribute::make(
            get: fn() => ($this->first_name !== null) ? "$this->first_name $this->last_name" : Null,
        );
    }


    // user activation
    public function activeUser(): Attribute {
        return Attribute::make(
            get: fn() => $this->activation == 1,
        );
    }

    /**
     * Relations
     */
    public function notifications() {
        return $this->morphMany(Notification::class, 'notifiable');
    }


}
