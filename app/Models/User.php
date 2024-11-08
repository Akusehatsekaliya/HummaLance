<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Constract\Enums\UserRoleEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'role',
        'self_description',
        'skill',
        'tarif',
        'portofolio',
        'google_id'
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get user role instance
     *
     * @return UserRoleEnum
     */
    public function getUserRoleInstance()
    {
        $roles = $this->getRoleNames();
        $roleName = !empty($roles) && isset($roles[0]) ? $roles[0] : null;
        return $roleName ? UserRoleEnum::from($roleName) : UserRoleEnum::CLIENT;
    }

    public function Contracts()
    {
        return $this->hasMany(Contract::class);
    }
    public function Messages()
    {
        return $this->hasMany(Message::class);
    }
    public function Favorites()
    {
        return $this->hasMany(Favorite::class);
    }
    public function Notifications()
    {
        return $this->hasMany(Notification::class);
    }
    public function Payments()
    {
        return $this->hasMany(Payment::class);
    }
    public function Projects()
    {
        return $this->hasMany(Project::class);
    }
    public function Reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function UserSkills()
    {
        return $this->hasMany(UserSkill::class);
    }
}