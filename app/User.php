<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{


    protected $table = 'sas_users';
    protected $primaryKey ="username";
    public $incrementing = false;
    public $timestamps = false ;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'password',
        'groupid',
        'enableuser',
        'uplimit',
        'downlimit',
        'comblimit',
        'firstname',
        'lastname',
        'company',
        'phone',
        'mobile',
        'address',
        'city',
        'zip',
        'country',
        'state',
        'comment',
        'gpslat',
        'gpslong',
        'mac',
        'usemacauth',
        'expiration',
        'uptimelimit',
        'srvid',
        'staticipcm',
        'staticipcpe',
        'ipmodecm',
        'ipmodecpe',
        'poolidcm',
        'poolidcpe',
        'createdon',
        'acctype',
        'credits',
        'cardfails',
        'createdby',
        'owner',
        'taxid',
        'email',
        'mt_filter_id',
        'maccm',
        'custattr',
        'warningsent',
        'verifycode',
        'verified',
        'selfreg',
        'verifyfails',
        'verifysentnum',
        'verifymobile',
        'contractid',
        'actcode',
        'pswactsmsnum',
        'image',
        'lastonline',
        'addresslist',
        'mikrotik_group',
        'framedroute',
        'lastsrv',
        'nationalid',
        'ipv6prefix',
        'warning_notified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
