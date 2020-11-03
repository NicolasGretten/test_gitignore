<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Lumen\Auth\Authorizable;


/**
 * @property string id
 * @property string thumbnail_filename
 * @property string original_filename
 * @property string image_filename
 * @property string checksum
 * @property integer height
 * @property integer width
 */
class Image extends Model implements AuthenticatableContract, AuthorizableContract, JWTSubject
{
    use Authenticatable, Authorizable, SoftDeletes;

    protected $connection = 'data';
    protected $table = 'images';
    protected $dates = ['created_at, updated_at, deleted_at'];
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'thumbnail_filename',
        'original_filename',
        'image_filename',
        'checksum',
        'height',
        'width',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
