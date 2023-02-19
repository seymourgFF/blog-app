<?php

namespace App\Models;

use App\Notifications\SendVerifyWidthQueueNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements  MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;


    const ROLE_ADMIN = 0;
    const ROLE_USER = 1;
    const ROLE_ORGANIZER = 2;
    public static function getRoles(){
        return [
            self::ROLE_ADMIN => 'Admin',
            self::ROLE_USER => 'User',
            self::ROLE_ORGANIZER => 'Organizer',
        ];
    }
    public static function currentUser($id){
        $all_roles = self::getRoles();
        return($all_roles[$id]);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
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
    public function sendEmailVerificationNotification()
    {
        $this->notify(new SendVerifyWidthQueueNotification());
    }
    public function likedPosts(){
        return $this->belongsToMany(Post::class,'post_user_likes', 'user_id','post_id');
    }
    public function comments(){
        return $this->hasMany(Comments::class,'user_id','id');
    }
}
