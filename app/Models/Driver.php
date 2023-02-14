<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;
use Bavix\Wallet\Traits\HasWallet;
use Bavix\Wallet\Interfaces\Wallet;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Driver extends Model implements JWTSubject
{
    use HasFactory, Notifiable, HasWallet;
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'country_code', 'mobile', 'cover',
        'lat', 'lng', 'gender', 'verified', 'fcm_token', 'current', 'others', 'stripe_key', 'date', 'city', 'address', 'status', 'extra_field'
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new \App\Notifications\MailResetPasswordNotification($token));
    }
}
