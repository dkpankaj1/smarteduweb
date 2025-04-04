<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class EmailConfiguration extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'mail_driver',
        'mail_host',
        'mail_port',
        'mail_username',
        'mail_password',
        'mail_encryption',
        'mail_from_address',
        'mail_from_name',
        'is_active',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'mail_password',
    ];

    /**
     * Get the active email configuration.
     *
     * @return static|null
     */
    public static function getActive()
    {
        return static::where('is_active', true)->first();
    }

}
