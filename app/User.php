<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'role'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function psb()
    {
        return $this->hasOne('App\Psb');
    }

    public function scopeNonPendaftar($query)
    {
        return $query->where('role', '!=', 'pendaftar');
    }

    public static function roleList()
    {
        return [
            'pendaftaran'               => 'pendaftaran',
            'keuangan'                  => 'keuangan',
            'data'                      => 'data',
            'test-wawancara-santri'     => 'test-wawancara-santri',
            'wawancara-orangtua'        => 'wawancara-orangtua',
            'tkd'                       => 'tkd',
            'seleksi'                   => 'seleksi',
            'admin'                     => 'admin',
        ];
    }
}
