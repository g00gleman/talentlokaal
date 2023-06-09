<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use SplFileInfo;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
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
        'two_factor_recovery_codes',
        'two_factor_secret',
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
    public function employer()
    {
        return $this->hasOne(Employer::class, 'user_Id');
    }
    public function employee()
    {
        return $this->hasOne(employee::class, 'user_Id');
    }
    public function defaultProfilePhotoUrl()
    {
    return 'https://ui-avatars.com/api/'. implode('/', [

            //IMPORTANT: Do not change this order
            urlencode($this->name), // name
            200, // image size
            'FFE7D9', // background color
            'FFA07A', // font color
        ]);
    }
    public function getProfilePhotoUrlAttribute(): string
    {
        // if there is no custom profile photo uploaded then return a default profile photo
        if (empty($this->profile_photo_path)) return $this->defaultProfilePhotoUrl();
        // get the image out of the storage/app folder in this project
        $image = Storage::disk('local')->path($this->profile_photo_path);
        $fileInfo =new SplFileInfo($image);
        // data:image/imageExtension(jpg,png,ect.);base64, the content of the image base 64 encoded
        return "data:image/".$fileInfo->getExtension().";base64,".base64_encode(file_get_contents($image));
    }
    public function getProfilePitchUrlAttribute(): string
    {
        // if there is no custom profile photo uploaded then return a default profile photo
        if (empty($this->pitch)) return "";

        return "/dashboard/userFiles/pitch/".$this->id."?id=".time();
    }
}
