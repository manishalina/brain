<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'image', 'description','createdby','slug'
    ];
public function userDetail(){
        return $this->belongsTo('App\User', 'createdby', 'id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
